<div class="wrap">
	<form action="admin-post.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="md_update_data">
		<input type="hidden" name="md_id" value="<?php if (isset($post_data)) echo $post_data->id; ?>" >
		<?php wp_nonce_field('md_update_portfolio') ?>
		<div class="group">
			<label for="name">Enter project name</label>
			<input type="text" id="name" name="md_name" value="<?php if (isset($post_data)) echo $post_data->name; ?>">
		</div>
		<div class="group">
			<label for="about">About project</label>
			<textarea id="about" name="md_about"><?php if (isset($post_data)) echo $post_data->about; ?></textarea>
		</div>
		<div class="group">
			<label for="skills">Skills</label>
			<input type="text" id="skills" name="md_skill" value="<?php if (isset($post_data)) echo $post_data->skills; ?>">
		</div>
		<div class="group">
			<label for="info">Additional info</label>
			<input type="text" id="info" name="md_info" value="<?php if (isset($post_data)) echo $post_data->info; ?>">
		</div>
		<div class="group">
			<label for="url">URL</label>
			<input type="text" id="url" name="md_url" value="<?php if (isset($post_data)) echo $post_data->url; ?>">
		</div>
		<input name="md_save" type="submit" class="button button-primary button-large" id="publish" value="Save">
	</form>
</div>