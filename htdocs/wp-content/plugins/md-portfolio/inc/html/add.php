<div class="wrap">
	<form action="admin-post.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="md_save_data">
		<?php wp_nonce_field('md_save_portfolio') ?>
		<div class="group">
			<label for="name"><?php _e('Enter project name', 'md_portfolio') ?></label>
			<input type="text" id="name" name="md_name" value="">
		</div>
		<div class="group">
			<label for="about"><?php _e('About project', 'md_portfolio') ?></label>
			<textarea id="about" name="md_about"></textarea>
		</div>
		<div class="group">
			<label for="skills">Skills</label>
			<input type="text" id="skills" name="md_skill" value="">
		</div>
		<div class="group">
			<label for="info"><?php _e('Additional info', 'md_portfolio') ?></label>
			<input type="text" id="info" name="md_info" value="">
		</div>
		<div class="group">
			<label for="url">URL</label>
			<input type="text" id="url" name="md_url" value="">
		</div>
		<div class="fgroup">
			<label for="image">Inset project thumb</label>
			<input type="file" id="image" multiple name="md_thumb">
		</div>
		<div class="fgroup">
			<label for="images">Inset project images</label>
			<input type="file" id="images" multiple name="md_images[]">
		</div>
		<input name="md_save" type="submit" class="button button-primary button-large" id="publish" value="Save">
	</form>
</div>