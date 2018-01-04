<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 */
?>
<?php get_header(); ?>

<div class="container">
    <h1><?php echo get_the_title() ?></h1>
	<div class="content">
		<div class="block-wrapper">
			<div class="thumb">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>" alt="Project thumb">
			</div>
			<div class="overlay">
				<p class="name">Project name</p>
				<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="search" viewBox="0 0 53.627 53.627"><title>search</title><path d="M53.627,49.385L37.795,33.553C40.423,30.046,42,25.709,42,21C42,9.42,32.58,0,21,0S0,9.42,0,21s9.42,21,21,21 c4.709,0,9.046-1.577,12.553-4.205l15.832,15.832L53.627,49.385z M2,21C2,10.523,10.523,2,21,2s19,8.523,19,19s-8.523,19-19,19 S2,31.477,2,21z M35.567,36.093c0.178-0.172,0.353-0.347,0.525-0.525c0.146-0.151,0.304-0.29,0.445-0.445l14.262,14.262 l-1.415,1.415L35.123,36.537C35.278,36.396,35.416,36.238,35.567,36.093z"/></symbol></svg>
				<div class="glyph">
					<svg class="icon">
						<use xlink:href="#search"></use>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<div class="pagination">
		<ul>
			<li><a href="">Previous</a></li>
			<li class="active"><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li class="disabled"><a href="">Next</a></li>
		</ul>
	</div>
</div>


<div class="popup-overlay" id="popup-overlay">
	<div class="popup">
		<div class="popup-container">
			<div class="close" id="close-popup">
				<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="close" viewBox="0 0 512 512"><title>close</title><ellipse cx="256" cy="256" rx="256" ry="255.832"/><g transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 77.26 32)"> <rect x="3.98" y="-427.615" style="fill:#FFFFFF;" width="55.992" height="285.672"/> <rect x="-110.828" y="-312.815" style="fill:#FFFFFF;" width="285.672" height="55.992"/> </g></symbol></svg>
				<svg class="icon">
					<use xlink:href="#close"></use>
				</svg>
			</div>
			<div class="popup-content">
				<div class="group">
					<p class="term">About</p>
					<p class="desc">Responsive , multi-language, cross-browser landing for Cryptobazar</p>
				</div>
				<div class="group">
					<p class="term">Skills</p>
					<p class="desc">HTML, CSS, PHP, Jquery</p>
				</div>
				<div class="group">
					<p class="term">Additional info</p>
					<p class="desc">Some additional info</p>
				</div>
				<div class="group">
					<p class="term">URL<br></p>
					<p class="desc"><a target="_blank" href="http://www.cryptobazar.io/">cryptobazar.io</a><small> (Can be unavailable)</small></p>
				</div>
			</div>
			<div class="gallery">
				<h2>Gallery</h2>
				<div class="gallery-content">
					<div class="owl-carousel owl-theme owl">
						<div class="item thumb-zoom" data-id="1"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
						<div class="item thumb-zoom" data-id="2"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
						<div class="item thumb-zoom" data-id="3"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
						<div class="item thumb-zoom" data-id="4"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="zoom-container">
	<div class="close" id="close-zoom">
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="close" viewBox="0 0 512 512"><title>close</title><ellipse cx="256" cy="256" rx="256" ry="255.832"/><g transform="matrix(-0.7071 0.7071 -0.7071 -0.7071 77.26 32)"> <rect x="3.98" y="-427.615" style="fill:#FFFFFF;" width="55.992" height="285.672"/> <rect x="-110.828" y="-312.815" style="fill:#FFFFFF;" width="285.672" height="55.992"/> </g></symbol></svg>
		<svg class="icon">
			<use xlink:href="#close"></use>
		</svg>
	</div>
	<div class="zoom-carousel owl-carousel owl-theme">
		<div class="item"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
		<div class="item"><img src="<?php echo get_template_directory_uri() . '/assets/images/thumb.jpg' ?>"></div>
	</div>
</div>


<?php get_footer(); ?>
