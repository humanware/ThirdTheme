<?php 

function cpl_theme_options_page() {

?>

<div class="wrap">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4><?php _e('CodePati Lite Theme Settings', 'thirdTheme'); ?></h4>
		</div>
		<div class="panel-body">
			<form action="admin-post.php" method="POST">
			<input type="hidden" name="action" value="cpl_save_options">
			<?php wp_nonce_field('cpl_options_verify'); ?>
				<h4><?php _e('Social Icons', 'thirdTheme'); ?></h4>
				<div class="form-group">
					<label><?php _e('Twitter', 'thirdTheme'); ?></label>
					<input type="text" class="form-control" name="cpl_inputTwitter" />
				</div>
				<div class="form-group">
					<label><?php _e('Facebook', 'thirdTheme'); ?></label>
					<input type="text" class="form-control" name="cpl_inputFacebook" />
				</div>
				<div class="form-group">
					<label><?php _e('Youtube', 'thirdTheme'); ?></label>
					<input type="text" class="form-control" name="cpl_inputYoutube" />
				</div>
				<div class="form-group">
					<label><?php _e('Google+', 'thirdTheme'); ?></label>
					<input type="text" class="form-control" name="cpl_inputGplus" />
				</div>
				<h4><?php _e('Logo', 'thirdTheme'); ?></h4>
				<div class="form-group">
					<label><?php _e('Logo Type', 'thirdTheme'); ?></label>
					<select class="form-control" name="cpl_inputLogoType">
						<option value="1"><?php _e('Site Name', 'thirdTheme') ?></option>
						<option value="2"><?php _e('Image', 'thirdTheme') ?></option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Logo Image" name="cpl_inputLogoImg">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button" id="cpl_uploadLogoImgBtn"><?php _e('Upload', 'thirdTheme'); ?></button>
					</span>
				</div>
				<h4><?php _e('Footer', 'thirdTheme'); ?></h4>
				<div class="form-group">
				</div>
			</form>
		</div>
	</div>

</div>

<?php
}