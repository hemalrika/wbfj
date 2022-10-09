<?php
/**
 * Admin view: Edit API keys
 *
 * @package simple-job-board\admin\partials
 */

if (!defined('ABSPATH')) { exit; } 
?>

<div id="key-fields" class="settings-panel">
	<div class='sjb-inline custom-heading'>
		<?php 
			echo apply_filters('sjb_api_option_title', '<a href="' . esc_url( admin_url( 'edit.php?post_type=jobpost&page=job-board-settings#settings-api' ) ) . '" class="button-primary custom-margin">' . __( "", 'simple-job-board' ) . '<i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>');
		?>
		<h2 class="custom-margin"><?php __( 'Add Details', 'simple-job-board' ); ?></h2>
	</div>

	<div class='add-api-section-content'>
		<table id="api-keys-options" class="form-table custom-margin">
			<tbody>
				<tr valign="top">
					<th scope="row" class="sjb-titledesc">
						<label for="key_description" class="sjb-custom-label">
							<?php esc_html_e( 'Description', 'simple-job-board' ); ?>
						</label>
					</th>
					<td class="sjb-forminp">
						<input id="key_description" type="text" class="input-text regular-input sjb-custom-width" size="27"/>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" class="sjb-titledesc">
						<label for="key_user" class="sjb-custom-label">
							<?php esc_html_e( 'User', 'simple-job-board' ); ?>
						</label>
					</th>
					<td class="sjb-forminp">
						<select id="key_user" data-placeholder="<?php esc_attr_e( 'Search for a user&hellip;', 'simple-job-board' ); ?>" data-allow_clear="true">
							<?php 
								$users = get_users( array( 'fields' => array( 'display_name', 'ID', 'user_email' ) ) ); 
								foreach($users as $user){ ?>
									<option value="<?php echo esc_attr( $user->ID ); ?>" ><?php echo htmlspecialchars( wp_kses_post( $user->display_name ).' (' . wp_kses_post( $user->user_email ).')' ); ?></option>
						<?php   } ?>
						</select>
					</td>
				</tr>
			</tbody>
		</table>
		<?php
		submit_button( __( 'Generate API key', 'simple-job-board' ), 'primary custom-margin', 'generate_api_key', false, 'onclick=genrate_api_key()' );
		?>
	</div>
</div>
<div id="qrCode" class="sjb-qrcode-content" hidden>
	<div class='sjb-inline'>
		<?php 
			echo apply_filters('sjb_api_option_title', '<a href="'. esc_url( admin_url( 'edit.php?post_type=jobpost&page=job-board-settings#settings-api' ) ) .'" class="button-primary custom-margin"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>');
		?>
		<h2 class="custom-margin"><?php echo __( 'Key details', 'simple-job-board' ); ?></h2>
		<div class="notice notice-success settings-error is-dismissible"><p>API Key generated successfully.</p></div>
	</div>

	<div class="add-api-section-content">
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<th scope="row" class="sjb-titledesc">
						<label class="sjb-custom-label"><?php echo __('Application Key', 'simple-job-board').':'; ?></label>				
					</th>
					<td class="sjb-forminp">
						<input type="text" id="appKey" class="sjb-form-control" readonly="readonly">
						<button class="button button-secondary" id='copyText' onclick="copyText()"><?php _e( 'Copy text', 'simple-job-board' ); ?></button>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" class="sjb-titledesc">
						<label class="sjb-custom-label"><?php echo __('QRCode', 'simple-job-board').':'; ?></label>								
					</th>
					<td class="sjb-forminp">
						<div id="qrcode"></div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="loading" style="display:none;"> 
  <img id='loader' src="" title="loading" />
</div>
