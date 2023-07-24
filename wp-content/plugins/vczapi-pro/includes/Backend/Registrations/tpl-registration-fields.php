<table class="form-table">
    <tbody>
	<?php add_thickbox(); ?>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-pro-view-registrants"><?php _e( 'Registrants', 'vczapi-pro' ); ?></label></th>
        <td>
            <a class="button vczapi-pro-view-approved-registrants" href="javascript:void(0);"><?php _e( 'View Approved', 'vczapi-pro' ); ?></a>
            <a class="button vczapi-pro-view-pending-registrants" href="javascript:void(0);"><?php _e( 'View Pending', 'vczapi-pro' ); ?></a>
        </td>
    </tr>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section" <?php echo ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-enable-registration"><?php _e( 'Registration', 'vczapi-pro' ); ?></label></th>
        <td>
            <input name="vczapi-enable-registration" type="checkbox" <?php ! empty( $meeting_details['registration'] ) ? checked( 'on', $meeting_details['registration'] ) : false; ?> id="vczapi-enable-registration" class="vczapi-admin-checkbox">
            <p class="description" style="color:red;"><?php _e( 'Note: This feature requires the host to be of Zoom Licensed user type. Registration cannot be enabled for a basic user. This will require a user to login before joining the meeting via site. Join via browser will not work when this is enabled.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>

    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-approval-type"><?php _e( 'Approval Type', 'vczapi-pro' ); ?></label></th>
        <td>
            <select name="vczapi-approval-type">
                <option value="0" <?php echo ! empty( $meeting_details['approval_type'] ) && $meeting_details['approval_type'] == 0 ? 'selected' : ''; ?>><?php _e( 'Automatic Approve', 'vczapi-pro' ); ?></option>
                <option value="1" <?php echo ! empty( $meeting_details['approval_type'] ) && $meeting_details['approval_type'] == 1 ? 'selected' : ''; ?>><?php _e( 'Manually Approve', 'vczapi-pro' ); ?></option>
            </select>
            <p class="description"><?php _e( 'Set approval type for registrants.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>

	<?php
	if ( empty( $meeting_details['registration_type'] ) ) {
		$meeting_details['registration_type'] = '1';
	}
	?>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-registration-on-zoom"><?php _e( 'Register offsite/on zoom', 'vczapi-pro' ); ?></label></th>
        <td>
            <input name="vczapi-registration-on-zoom" type="checkbox" <?php ! empty( $meeting_details['register_on_zoom'] ) ? checked( 'on', $meeting_details['register_on_zoom'] ) : false; ?> id="vczapi-registration-on-zoom" class="vczapi-admin-checkbox"><?php _e( 'Only valid if registration is enabled', 'vczapi-pro' ); ?>
            <p class="description"><?php _e( 'Check this box to send user to Zoom instead of registering on a form on the site. Useful if your registration form has custom fields.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-disable-multiple-devices"><?php _e( 'Disallow Multiple Devices', 'vczapi-pro' ); ?></label></th>
        <td>
            <input
                    name="vczapi-disable-multiple-devices"
                    type="checkbox"
				<?php ! empty( $meeting_details['disable_multiple_devices'] ) ? checked( 'on', $meeting_details['disable_multiple_devices'] ) : false; ?> id="vczapi-registration-on-zoom" class="vczapi-admin-checkbox"><?php _e( 'Only valid if registration is enabled', 'vczapi-pro' ); ?>
            <p class="description">
				<?php _e( 'Disable joining from multiple devices', 'vczapi-pro' ); ?>
            </p>
        </td>
    </tr>
    <tr style="display:none;">
        <th scope="row"><label for="vczapi-registration-type"><?php _e( 'Registration Type', 'vczapi-pro' ); ?></label>
        </th>
        <td>
            <input name="vczapi-registration-type" type="radio" id="vczapi-registration-type-1" value="1" <?php ! empty( $meeting_details['registration_type'] ) ? checked( '1', $meeting_details['registration_type'] ) : false; ?> class="vczapi-admin-radio"> <?php _e( 'Attendees register once and can attend any of the occurrences.', 'vczapi-pro' ); ?>
            <p class="description" style="color:red;"><?php _e( 'Registration type. Used for recurring meeting with fixed time only.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-registration-type"><?php _e( 'Register without Login?', 'vczapi-pro' ); ?></label></th>
        <td>
            <input type="checkbox" name="vcapi-registration-condition" id="vcapi-registration-condition" <?php ! empty( $meeting_details['registration_condition'] ) ? checked( 'on', $meeting_details['registration_condition'] ) : false; ?>><?php _e( 'Only valid if registration is enabled', 'vczapi-pro' ); ?>
            <p class="description"><?php _e( 'If this option is checked, User will not be required to be loggedin to this website. Note: User will only receive join link via email and register button will stay regardless after the registration process.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-registration-email"><?php _e( 'Register Email Notification?', 'vczapi-pro' ); ?></label></th>
        <td>
            <input type="checkbox" name="vczapi-registration-email" id="vczapi-registration-email" <?php ! empty( $meeting_details['registration_email'] ) ? checked( 'on', $meeting_details['registration_email'] ) : false; ?>><?php _e( 'Only valid if registration is enabled', 'vczapi-pro' ); ?>
            <p class="description"><?php _e( 'Default is TRUE. Send email notifications to registrants about approval, cancellation, confirmation denial of the registration. If checked, users will not receive any registration confirmation email notification from Zoom side.', 'vczapi-pro' ); ?></p>
        </td>
    </tr>
    <tr class="vczapi-recurring-show-hide-no-fixed-time vczapi-show-registration-section vczapi-show-registration-fields" <?php echo empty( $meeting_details['registration'] ) || ( ! empty( $meeting_details['enabled_recurring'] ) && ! empty( $meeting_details['frequency'] ) && $meeting_details['frequency'] == "4" ) ? 'style=display:none;' : 'style=display:table-row;'; ?>>
        <th scope="row"><label for="vczapi-registration-fields"><?php _e( 'Registration Fields', 'vczapi-pro' ); ?></label></th>
        <td>
            <p style="margin-bottom:10px;"><input type="checkbox" class="vczapi-override-registration-fields" name="vczapi-override-registration-fields" id="vczapi-override-registration-fields" <?php ! empty( $meeting_details['override_registration_fields'] ) ? checked( 'on', $meeting_details['override_registration_fields'] ) : false; ?>><?php _e( 'Override addtional registration fields', 'vczapi-pro' ); ?></p>
            <table class="vczapi-data-table vczapi-registration-addtional-fields" <?php echo ! empty( $meeting_details['override_registration_fields'] ) ? 'style="display:table-row"' : 'style="display:none;"'; ?>>
                <thead>
                <tr>
                    <th><?php _e( 'Field', 'vczapi-pro' ); ?></th>
                    <th><?php _e( 'Required', 'vczapi-pro' ); ?></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[address][enable]" <?php echo ! empty( $meeting_details['registration_fields']['address']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Address', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[address][required]" <?php echo ! empty( $meeting_details['registration_fields']['address']['enable'] ) && ! empty( $meeting_details['registration_fields']['address']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[city][enable]" <?php echo ! empty( $meeting_details['registration_fields']['city']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'City', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[city][required]" <?php echo ! empty( $meeting_details['registration_fields']['city']['enable'] ) && ! empty( $meeting_details['registration_fields']['city']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[country][enable]" <?php echo ! empty( $meeting_details['registration_fields']['country']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Country', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[country][required]" <?php echo ! empty( $meeting_details['registration_fields']['country']['enable'] ) && ! empty( $meeting_details['registration_fields']['country']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[zip][enable]" <?php echo ! empty( $meeting_details['registration_fields']['zip']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Zip', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[zip][required]" <?php echo ! empty( $meeting_details['registration_fields']['zip']['enable'] ) && ! empty( $meeting_details['registration_fields']['zip']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[state][enable]" <?php echo ! empty( $meeting_details['registration_fields']['state']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'State', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[state][required]" <?php echo ! empty( $meeting_details['registration_fields']['state']['enable'] ) && ! empty( $meeting_details['registration_fields']['state']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[phone][enable]" <?php echo ! empty( $meeting_details['registration_fields']['phone']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Phone', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[phone][required]" <?php echo ! empty( $meeting_details['registration_fields']['phone']['enable'] ) && ! empty( $meeting_details['registration_fields']['phone']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[industry][enable]" <?php echo ! empty( $meeting_details['registration_fields']['industry']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Industry', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[industry][required]" <?php echo ! empty( $meeting_details['registration_fields']['industry']['enable'] ) && ! empty( $meeting_details['registration_fields']['industry']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[org][enable]" <?php echo ! empty( $meeting_details['registration_fields']['org']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Organization', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[org][required]" <?php echo ! empty( $meeting_details['registration_fields']['org']['enable'] ) && ! empty( $meeting_details['registration_fields']['org']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[job_title][enable]" <?php echo ! empty( $meeting_details['registration_fields']['job_title']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Job Title', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[job_title][required]" <?php echo ! empty( $meeting_details['registration_fields']['job_title']['enable'] ) && ! empty( $meeting_details['registration_fields']['job_title']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[purchasing_time_frame][enable]" <?php echo ! empty( $meeting_details['registration_fields']['purchasing_time_frame']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Purchasing Time Frame', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[purchasing_time_frame][required]" <?php echo ! empty( $meeting_details['registration_fields']['purchasing_time_frame']['enable'] ) && ! empty( $meeting_details['registration_fields']['purchasing_time_frame']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[role_in_purchase_process][enable]" <?php echo ! empty( $meeting_details['registration_fields']['role_in_purchase_process']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Role in Purchase process', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[role_in_purchase_process][required]" <?php echo ! empty( $meeting_details['registration_fields']['role_in_purchase_process']['enable'] ) && ! empty( $meeting_details['registration_fields']['role_in_purchase_process']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[no_of_employees][enable]" <?php echo ! empty( $meeting_details['registration_fields']['no_of_employees']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Number of Employees', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[no_of_employees][required]" <?php echo ! empty( $meeting_details['registration_fields']['no_of_employees']['enable'] ) && ! empty( $meeting_details['registration_fields']['no_of_employees']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="meeting_registration_fields[comments][enable]" <?php echo ! empty( $meeting_details['registration_fields']['comments']['enable'] ) ? 'checked' : false; ?>> <?php _e( 'Comments', 'vczapi-pro' ); ?></td>
                    <td><input type="checkbox" name="meeting_registration_fields[comments][required]" <?php echo ! empty( $meeting_details['registration_fields']['comments']['enable'] ) && ! empty( $meeting_details['registration_fields']['comments']['required'] ) ? 'checked' : false; ?>></td>
                </tr>
                </tbody>
            </table>
            <p class="description">(<?php _e( 'Only valid if registration is enabled', 'vczapi-pro' ); ?>) <?php _e( 'Shows addtional fields when user tries to register this event/meeting/webinar. Override main settings page fields individually from here. If you have enabled registration fields from settings page then fields will be added based on the settings page options even if you have not selected "Override addtional registration fields".', 'vczapi-pro' ); ?></p>
        </td>
    </tr>
    </tbody>
</table>

<?php
include_once VZAPI_ZOOM_PRO_ADDON_DIR_PATH . 'includes/Backend/Registrations/tpl-approved-registrants-list.php';
include_once VZAPI_ZOOM_PRO_ADDON_DIR_PATH . 'includes/Backend/Registrations/tpl-pending-registrants-list.php';
?>