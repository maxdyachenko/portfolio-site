<div class="close" id="close-popup">
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="close" viewBox="0 0 512 512"><title>close</title><ellipse cx="256" cy="256" rx="256" ry="255.832"/><g transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 77.26 32)"> <rect x="3.98" y="-427.615" style="fill:#FFFFFF;" width="55.992" height="285.672"/> <rect x="-110.828" y="-312.815" style="fill:#FFFFFF;" width="285.672" height="55.992"/> </g></symbol></svg>
	<svg class="icon">
		<use xlink:href="#close"></use>
	</svg>
</div>
<div class="popup-content">
	<div class="group">
		<p class="term"><?php _e('About', 'md_portfolio') ?></p>
		<p class="desc"><?php echo $data->about ?>
        </p>
	</div>
	<div class="group">
		<p class="term"><?php _e('Skills', 'md_portfolio') ?></p>
		<p class="desc"><?php echo $data->skills ?></p>
	</div>
	<?php if (!empty($data->info)): ?>
		<div class="group">
			<p class="term"><?php _e('Additional info', 'md_portfolio') ?></p>
			<p class="desc"><?php echo $data->info ?></p>
		</div>
	<?php endif; ?>
	<div class="group">
		<p class="term"><?php _e('URL', 'md_portfolio') ?><br></p>
		<p class="desc"><a target="_blank" href="<?php echo $data->url ?>"><?php echo $data->url ?></a><small> <?php _e('(Can be unavailable)','md_portfolio') ?></small></p>
	</div>
</div>
<div class="gallery">
	<h2><?php _e('Gallery', 'md_portfolio') ?></h2>
	<div class="gallery-content">
		<?php $images = json_decode($data->images); $i = 1; ?>
		<div style="display: none;" id="zoom-images-src"><?php echo MD_PLUGIN_DIR . 'assets/images/' . $data->name . '/' ?></div>
		<div style="display: none;" id="zoom-images-fetch"><?php echo implode(',',$images); ?></div>
		<div class="owl-carousel owl-theme owl">
			<?php foreach ($images as $image): ?>
				<div class="item thumb-zoom" data-id="<?php echo $i; ?>"><img src="<?php echo MD_PLUGIN_DIR . 'assets/images/' . $data->name . '/' . $image ?>"></div>
			<?php $i++; endforeach; ?>
		</div>
	</div>
</div>