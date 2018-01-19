<?php foreach ($data as $value): ?>
	<div class="block-wrapper" data-id="<?php echo $value->id ?>">
		<div class="thumb">
			<img src="<?php echo MD_PLUGIN_DIR . 'assets/images/' . $value->name .'/thumb385x196.jpg' ?>" alt="Project thumb">
		</div>
		<div class="overlay">
			<p class="name"><?php echo $value->name ?></p>
			<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="search" viewBox="0 0 53.627 53.627"><title>search</title><path d="M53.627,49.385L37.795,33.553C40.423,30.046,42,25.709,42,21C42,9.42,32.58,0,21,0S0,9.42,0,21s9.42,21,21,21 c4.709,0,9.046-1.577,12.553-4.205l15.832,15.832L53.627,49.385z M2,21C2,10.523,10.523,2,21,2s19,8.523,19,19s-8.523,19-19,19 S2,31.477,2,21z M35.567,36.093c0.178-0.172,0.353-0.347,0.525-0.525c0.146-0.151,0.304-0.29,0.445-0.445l14.262,14.262 l-1.415,1.415L35.123,36.537C35.278,36.396,35.416,36.238,35.567,36.093z"/></symbol></svg>
			<div class="glyph">
				<svg class="icon">
					<use xlink:href="#search"></use>
				</svg>
			</div>
		</div>
	</div>
<?php endforeach; ?>