<?php

namespace Codemanas\ZoomPro\Backend\Registrations;

use Codemanas\ZoomPro\Core\API;
use Codemanas\ZoomPro\Core\Fields;
use Codemanas\ZoomPro\Core\Mailer;

/**
 * Class RecurringMetaBox
 *
 * Handler for meta box in zoom meeting section
 *
 * @author  Deepen Bajracharya, CodeManas, 2020. All Rights reserved.
 * @since   1.0.0
 * @package Codemanas\ZoomPro\Admin
 */
class Registrations {

	/**
	 * Create instance property
	 *
	 * @var null
	 */
	private static $_instance = null;

	/**
	 * @var null
	 */
	private $zoom_api = null;

	/**
	 * Create only one instance so that it may not Repeat
	 *
	 * @since 1.0.0
	 */
	public static function get_instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Build the instanceclear
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', [ $this, 'add_meta_bxes' ] );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		$this->zoom_api = API::get_instance();
	}

	/**
	 * Add meta box
	 */
	public function add_meta_bxes() {
		add_meta_box( 'vczapi-pro-registrants', __( 'Registrations', 'vczapi-pro' ), array(
			$this,
			'rendor_registrants'
		), 'zoom-meetings', 'normal', 'high' );
	}

	/**
	 * Enqueue Admin Scripts
	 *
	 * @param $hook
	 */
	public function admin_scripts( $hook ) {
		if ( get_post_type() === "zoom-meetings" ) {
			wp_register_script( 'vczapi-pro-dt-buttons', VZAPI_ZOOM_PRO_ADDON_DIR_URI . 'assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js', array(
				'jquery',
				'video-conferencing-with-zoom-api-datable-js'
			), VZAPI_ZOOM_PRO_ADDON_PLUGIN_VERSION, true );
			wp_register_script( 'vczapi-pro-dt-buttons-flash', VZAPI_ZOOM_PRO_ADDON_DIR_URI . 'assets/vendors/datatables.net-buttons/js/buttons.flash.js', array(
				'jquery',
				'video-conferencing-with-zoom-api-datable-js'
			), VZAPI_ZOOM_PRO_ADDON_PLUGIN_VERSION, true );
			wp_register_script( 'vczapi-pro-dt-jszip', VZAPI_ZOOM_PRO_ADDON_DIR_URI . 'assets/vendors/jszip/jszip.min.js', array(
				'jquery',
				'video-conferencing-with-zoom-api-datable-js'
			), VZAPI_ZOOM_PRO_ADDON_PLUGIN_VERSION, true );
			wp_register_script( 'vczapi-pro-dt-html5', VZAPI_ZOOM_PRO_ADDON_DIR_URI . 'assets/vendors/datatables.net-buttons/js/buttons.html5.js', array(
				'jquery',
				'video-conferencing-with-zoom-api-datable-js'
			), VZAPI_ZOOM_PRO_ADDON_PLUGIN_VERSION, true );
			wp_register_script( 'vczapi-pro-dt-print', VZAPI_ZOOM_PRO_ADDON_DIR_URI . 'assets/vendors/datatables.net-buttons/js/buttons.print.js', array(
				'jquery',
				'video-conferencing-with-zoom-api-datable-js'
			), VZAPI_ZOOM_PRO_ADDON_PLUGIN_VERSION, true );
		}
	}

	/**
	 * Show Registrants list
	 *
	 * @param $post
	 */
	public function rendor_registrants( $post ) {
		$meeting_details      = Fields::get_meta( $post->ID, 'meeting_details' );
		$meeting_id           = get_post_meta( $post->ID, '_meeting_zoom_meeting_id', true );
		$vczapi_field_details = get_post_meta( $post->ID, '_meeting_fields', true );

		require_once VZAPI_ZOOM_PRO_ADDON_DIR_PATH . 'includes/Backend/Registrations/tpl-registration-fields.php';
	}

	/**
	 * Getting Meeting registrants list
	 */
	public function meeting_registrants() {
		$post_id      = absint( $_GET['post_id'] );
		$type         = isset( $_GET['type'] ) && $_GET['type'] == "pending" ? 1 : 0;
		$meeting_id   = get_post_meta( $post_id, '_meeting_zoom_meeting_id', true );
		$meeting_type = get_post_meta( $post_id, '_vczapi_meeting_type', true );
		if ( $type ) {
			$registrants = Fields::get_cache( $post_id, 'pending_registrants' );
		} else {
			$registrants = Fields::get_cache( $post_id, 'registrants' );
		}
		$result = array();
		if ( ! empty( $registrants ) ) {
			foreach ( $registrants->registrants as $registrant ) {
				$result[] = array(
					'id'            => $registrant->id,
					'email'         => $registrant->email,
					'first_name'    => $registrant->first_name,
					'last_name'     => $registrant->last_name,
					'create_time'   => date( 'F j, Y @ g:i a', strtotime( $registrant->create_time ) ),
					'status'        => $registrant->status,
					'change_status' => ! empty( $registrant->status ) && $registrant->status === "approved" ? '<a href="javascript:void(0);" data-registrant-email="' . esc_attr( $registrant->email ) . '" data-type="' . esc_attr( $meeting_type ) . '" data-registrant-id="' . esc_attr( $registrant->id ) . '" data-status="cancel" data-post="' . esc_attr( $post_id ) . '" data-meeting="' . esc_attr( $meeting_id ) . '" class="vczapi-pro-admin-deny-registrant">' . __( 'Cancel', 'vczapi-pro' ) . '</a>' : '<a href="javascript:void(0);" data-registrant-email="' . esc_attr( $registrant->email ) . '" data-registrant-id="' . esc_attr( $registrant->id ) . '" data-status="approve" data-post="' . esc_attr( $post_id ) . '" data-meeting="' . esc_attr( $meeting_id ) . '" class="vczapi-pro-admin-deny-registrant">' . __( 'Approve', 'vczapi-pro' ) . '</a>'
				);
			}
		}

		echo json_encode( array( 'data' => $result ) );

		wp_die();
	}

	/**
	 * Update Registration Status to deny
	 */
	public function update_registrants_status() {
		$meeting_id       = absint( filter_input( INPUT_POST, 'id' ) );
		$post_id          = absint( filter_input( INPUT_POST, 'post_id' ) );
		$registrant_id    = filter_input( INPUT_POST, 'registrant_id' );
		$registrant_email = filter_input( INPUT_POST, 'registrant_email' );
		$type             = filter_input( INPUT_POST, 'type' );
		if ( empty( $registrant_id ) && empty( $registrant_email ) ) {
			wp_send_json_error( __( 'Registration Email or ID is not defined.', 'vczapi-pro' ) );
		}

		if ( ! empty( $meeting_id ) && ! empty( $post_id ) ) {
			$status   = filter_input( INPUT_POST, 'status' );
			$postData = array(
				'action'      => ! empty( $status ) ? $status : 'cancel',
				'registrants' => array(
					array(
						'id'    => $registrant_id,
						'email' => $registrant_email
					)
				)
			);

			if ( ! empty( $type ) && $type === "webinar" ) {
				$response    = json_decode( $this->zoom_api->updateWebinarRegistrants( $meeting_id, $postData ) );
				$registrants = json_decode( $this->zoom_api->getWebinarRegistrantsInstance( $meeting_id, $registrant_id ) );
			} else {
				$response    = json_decode( $this->zoom_api->updateMeetingRegistrants( $meeting_id, $postData ) );
				$registrants = json_decode( $this->zoom_api->getMeetingRegistrantInstance( $meeting_id, $registrant_id ) );
			}

			if ( empty( $response->code ) ) {
				Fields::flush_cache( $post_id, 'registrants' );
				Fields::flush_cache( $post_id, 'pending_registrants' );
				if ( $status === "cancel" || $status === "deny" ) {
					//Remove entry from WPDB as well
					$registrant = get_user_by( 'email', $registrant_email );
					if ( ! empty( $registrant ) && empty( $registrants->code ) ) {
						$regisration_details = Fields::get_user_meta( $registrant->ID, 'registration_details' );
						if ( ! empty( $regisration_details[ $meeting_id ] ) ) {
							unset( $regisration_details[ $meeting_id ] );
							$regisration_details['join_url'] = $registrants->join_url;
							Fields::set_user_meta( $registrant->ID, 'registration_details', $regisration_details );
						}
					}

					//Send Email
					$this->send_email( $post_id, $registrant_email );
				} else {
					//IN case of approval
					$registrant = get_user_by( 'email', $registrant_email );
					if ( ! empty( $registrant ) && empty( $registrants->code ) ) {
						$regisration_details = Fields::get_user_meta( $registrant->ID, 'registration_details' );
						if ( ! empty( $regisration_details[ $meeting_id ] ) ) {
							$regisration_details[ $meeting_id ]->join_url = $registrants->join_url;
							Fields::set_user_meta( $registrant->ID, 'registration_details', $regisration_details );
						}

						if ( ! empty( $regisration_details ) && ! empty( $regisration_details[ $meeting_id ] ) ) {
							$settings = Fields::get_option( 'settings' );
							if ( ! empty( $settings ) && ! empty( $settings['registraion_email'] ) ) {
								//Send Email
								$registrations = \Codemanas\ZoomPro\Frontend\Registrations::get_instance();
								$user_details  = [
									'customer_name'       => $registrants->first_name . ' ' . $registrants->last_name,
									'user_email'          => $registrant_email,
									'customer_first_name' => $registrants->first_name,
									'customer_last_name'  => $registrants->last_name,
								];

								$registrations->send_mail( $user_details, $post_id, $regisration_details[ $meeting_id ] );
							}
						}
					}
				}

				wp_send_json_success( __( 'Registration status has been updated. Reloading this page..', 'vczapi-pro' ) );
			} else {
				wp_send_json_error( $response->message );
			}
		} else {
			wp_send_json_error( __( 'Meeting ID is not defined. Please try again.', 'vczapi-pro' ) );
		}

		wp_die();
	}

	/**
	 * Send Email to cancelld users
	 *
	 * @param $post_id
	 * @param $registrant_email
	 */
	private function send_email( $post_id, $registrant_email ) {
		$meeting_details = get_post_meta( $post_id, '_meeting_zoom_details', true );
		//Replace dynamic variables
		$data = array(
			'meeting_topic' => $meeting_details->topic
		);

		if ( ! empty( $meeting_details->start_time ) && ! empty( $meeting_details->timezone ) ) {
			$data['meeting_time'] = vczapi_dateConverter( $meeting_details->start_time, $meeting_details->timezone, 'F j, Y, g:i a' );
		}
		$data = apply_filters( 'vczapi_pro_registration_cancelled_email_content', $data );

		//Prepare mail details
		$email_details = array(
			'email_to' => $registrant_email,
			'subject'  => apply_filters( 'vczapi_pro_registration_canellation_title', sprintf( __( 'Your registration for meeting %s has been cancelled', 'vczapi-pro' ), $meeting_details->topic ), $meeting_details ),
		);

		//OVERRIDE HOST/AUTHOR EMAIL to from instead of the default WordPress email address.
		$user_author_email = apply_filters( 'vczapi_pro_send_email_by_author', false );
		if ( $user_author_email ) {
			$post_author_id             = get_post_field( 'post_author', $post_id );
			$author                     = get_userdata( $post_author_id );
			$email_details['sent_from'] = $author->user_email;
		}

		//Send Email finally !
		Mailer::send_email( $email_details, $data, false, 'cancellation_email' );
	}
}