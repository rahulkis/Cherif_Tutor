<?php
$home_uri = home_url();
?>
<div class="vczapi-pro-admin-content-wrap">
  <h3><?php _e( 'Documentation', 'vczapi-pro' ); ?></h3>
  <p><?php _e( 'Zoom utilizes webhooks as a medium to notify this plugin (consumer application) about events that occur in a Zoom account. Instead of making repeated calls to pull data frequently from the Zoom API, you can use webhooks to get information on events that happen in a Zoom account.', 'vczapi-pro' ); ?></p>
  <p style="color: red;font-size: 15px;"><strong>You can find detailed <a target="_blank" href="https://zoom.codemanas.com/webhooks">documentation</a> from this <a target="_blank" href="https://zoom.codemanas.com/webhooks">page</a>.</strong></p>

  <form action="" method="POST">
    <table class="form-table">
      <tbody>
      <tr>
        <th><label><?php _e( 'Secret Token', 'vczapi-pro' ); ?></label></th>
        <td>
          <input type="text" class="regular-text" name="secret_token" value="<?php echo ! empty( $this->settings ) && ! empty( $this->settings['secret_token'] ) ? $this->settings['secret_token'] : '' ?>">
          <input type="submit" class="button button-primary" name="save_secret_token" value="<?php _e( 'Save', 'vczapi-pro' ); ?>">
          <p class="description"><?php printf( __( 'Get your secret token from your %s. Secret token needs to be exact.', 'vczapi-pro' ), '<a href="https://marketplace.zoom.us/develop/">Zoom Marketplace</a>' ); ?></p>
        </td>
      </tr>
	  <?php if ( ! empty( $this->settings ) && ! empty( $this->settings['verification_code'] ) ) { ?>
        <tr>
          <th><label><?php _e( 'Old Verification Code', 'vczapi-pro' ); ?></label></th>
          <td>
			  <?php echo ! empty( $this->settings ) && ! empty( $this->settings['verification_code'] ) ? $this->settings['verification_code'] : '' ?>
            <p class="description"><?php _e( 'The Verification Token will be retired in August 2023. We recommend that you replace your Verification Token with Secret Token to verify event notifications from Zoom.', 'vczapi-pro' ); ?></p>
          </td>
        </tr>
	  <?php } ?>
      </tbody>
    </table>
  </form>
  <table class="vczapi-pro-admin-webhook-table">
    <tbody>
    <tr>
      <th><?php _e( 'Meetings Endpoint', 'vczapi-pro' ); ?></th>
      <td class="vczapi-pro-admin-webhook-endpoint-text">
        <span class="dashicons dashicons-admin-page"></span> <input class="vczapi-pro-admin-webhook-endpoint-text-box" type="text" readonly value='<?php echo $home_uri . '/wp-json/vczapi/v1/meeting'; ?>' onclick="this.select(); document.execCommand('copy'); alert('Copied to clipboard');"/>
      </td>
    </tr>
    </tbody>
  </table>
</div>