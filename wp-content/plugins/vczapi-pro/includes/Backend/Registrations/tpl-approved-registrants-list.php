<?php

use Codemanas\ZoomPro\Core\Fields;

?>
<div id="vczapi-pro-view-approved-registrants" class="overlay">
    <div class="popup">
        <a class="close" href="javascript:void(0);">&times;</a>
        <div class="vczapi-pro-admin-notices"></div>
		<?php
		if ( ! empty( $meeting_id ) && ! empty( $meeting_details ) && ! empty( $meeting_details['registration'] ) ) {
			$registrants = Fields::get_cache( $post->ID, 'registrants' );
			if ( ! $registrants ) {
				if ( ! empty( $vczapi_field_details ) && $vczapi_field_details['meeting_type'] === 2 ) {
					$registrants = json_decode( $this->zoom_api->getWebinarRegistrants( $meeting_id ) );
				} else {
					$registrants = json_decode( $this->zoom_api->getMeetingRegistrant( $meeting_id ) );
				}

				Fields::set_cache( $post->ID, 'registrants', $registrants, 60 * 2 );
			}

			if ( ! empty( $registrants ) && ! empty( $registrants->code ) ) {
				echo "<p>" . $registrants->message . "</p>";
			} else {
				wp_enqueue_script( 'video-conferencing-with-zoom-api-datable-js' );
				wp_enqueue_script( 'vczapi-pro-dt-buttons' );
				wp_enqueue_script( 'vczapi-pro-dt-buttons-flash' );
				wp_enqueue_script( 'vczapi-pro-dt-jszip' );
				wp_enqueue_script( 'vczapi-pro-dt-pdfmake' );
				wp_enqueue_script( 'vczapi-pro-dt-vfs_fonts' );
				wp_enqueue_script( 'vczapi-pro-dt-html5' );
				wp_enqueue_script( 'vczapi-pro-dt-print' );
				?>
                <table class="vczapi-registrants-table vczapi-data-table">
                    <thead>
                    <tr role="row">
                        <th><?php _e( 'Email', 'vczapi-pro' ); ?></th>
                        <th><?php _e( 'First Name', 'vczapi-pro' ); ?></th>
                        <th><?php _e( 'Last Name', 'vczapi-pro' ); ?></th>
                        <th><?php _e( 'Joined', 'vczapi-pro' ); ?></th>
                        <th><?php _e( 'Current Status', 'vczapi-pro' ); ?></th>
                        <th><?php _e( 'Change Status', 'vczapi-pro' ); ?></th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <p class="description" style="color: red;"><?php _e( 'Note: Avoid changing meeting details after registrants are registered. Changing meeting details after registrants are available can cause the registrant list to reset. Proceed with caution.', 'vczapi-pro' ); ?></p>
				<?php
			}
		} else {
			echo "<p>" . __( 'No registrations for this event so far.', 'vczapi-pro' ) . "</p>";
		}
		?>
    </div>
</div>

