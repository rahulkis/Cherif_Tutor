<?php

namespace Codemanas\ZoomPro\Backend;

/**
 * Class Duplicator
 *
 * Handler for post duplicator
 *
 * @author  Deepen Bajracharya, CodeManas, 2020. All Rights reserved.
 * @since   1.2.0
 * @package Codemanas\ZoomPro\Backend
 */
class Duplicator {

	/**
	 * @var string
	 */
	private $post_type = 'zoom-meetings';

	/**
	 * Duplicator constructor.
	 */
	public function __construct() {
		add_filter( 'post_row_actions', [ $this, 'actions' ], 99, 2 );
		add_action( 'admin_action_duplicate_meeting_as_draft', [ $this, 'duplicate' ] );
	}

	/**
	 * Register duplicate action button
	 *
	 * @param $actions
	 * @param $post
	 *
	 * @return mixed
	 */
	public function actions( $actions, $post ) {
		if ( get_post_type() === $this->post_type ) {
			$actions['duplicate_meeting'] = '<a href="' . wp_nonce_url( 'admin.php?action=duplicate_meeting_as_draft&post=' . $post->ID, basename( __FILE__ ), 'duplicate_nonce' ) . '" title="Duplicate this Meeting" rel="permalink">' . __( "Duplicate Meeting", "vczapi-pro" ) . '</a>';
		}

		return $actions;
	}

	/**
	 * Duplicate the orgiinal post
	 */
	public function duplicate() {
		global $wpdb;

		if ( ! ( isset( $_GET['post'] ) || isset( $_POST['post'] ) || ( isset( $_REQUEST['action'] ) && 'duplicate_meeting_as_draft' == $_REQUEST['action'] ) ) ) {
			wp_die( 'No meeting to duplicate has been supplied!' );
		}

		/*
		 * Nonce verification
		 */
		if ( ! isset( $_GET['duplicate_nonce'] ) || ! wp_verify_nonce( $_GET['duplicate_nonce'], basename( __FILE__ ) ) ) {
			return;
		}

		/*
		 * get the original post id
		 */
		$post_id = ( isset( $_GET['post'] ) ? absint( $_GET['post'] ) : absint( $_POST['post'] ) );

		/*
		 * and all the original post data then
		 */
		$post = get_post( $post_id );

		/*
		 * if post data exists, create the post duplicate
		 */
		if ( isset( $post ) && $post != null ) {

			/*
			 * new post data array
			 */
			$args = array(
				'comment_status' => $post->comment_status,
				'ping_status'    => $post->ping_status,
				'post_author'    => $post->post_author,
				'post_content'   => $post->post_content,
				'post_excerpt'   => $post->post_excerpt,
				'post_name'      => $post->post_name,
				'post_parent'    => $post->post_parent,
				'post_password'  => $post->post_password,
				'post_status'    => 'draft',
				'post_title'     => $post->post_title,
				'post_type'      => $post->post_type,
				'to_ping'        => $post->to_ping,
				'menu_order'     => $post->menu_order
			);

			/*
			 * insert the post by wp_insert_post() function
			 */
			$new_post_id = wp_insert_post( $args );

			/*
			 * get all current post terms ad set them to the new post draft
			 */
			$taxonomies = get_object_taxonomies( $post->post_type ); // returns array of taxonomy names for post type, ex array("category", "post_tag");
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}

			/*
			 * duplicate all post meta just in two SQL queries
			 */
			$post_meta_infos = $wpdb->get_results( "SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id" );
			if ( count( $post_meta_infos ) != 0 ) {
				$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";

				$neglect_values = [
					'_edit_lock',
					'_wp_old_slug',
					'_edit_last',
					'_meeting_zoom_details',
					'_meeting_zoom_join_url',
					'_meeting_zoom_start_url',
					'_meeting_zoom_meeting_id',
					'_vczapi_pro_cache_exp_registrants',
					'_vczapi_pro_cache_registrants',
					'_meeting_fields_woocommerce',
				];

				foreach ( $post_meta_infos as $meta_info ) {
					$meta_key = $meta_info->meta_key;
					if ( in_array( $meta_key, $neglect_values ) ) {
						continue;
					}

					$meta_value      = addslashes( $meta_info->meta_value );
					$sql_query_sel[] = "SELECT $new_post_id, '$meta_key', '$meta_value'";
				}
				$sql_query .= implode( " UNION ALL ", $sql_query_sel );
				$wpdb->query( $sql_query );
			}

			/*
			 * finally, redirect to the edit post screen for the new draft
			 */
			wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
			exit;
		} else {
			wp_die( 'Post creation failed, could not find original post: ' . $post_id );
		}
	}
}