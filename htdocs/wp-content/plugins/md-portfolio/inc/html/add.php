<div class="wrap">
	<form action="admin-post.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="action" value="md_save_data">
		<?php wp_nonce_field('md_save_portfolio') ?>
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