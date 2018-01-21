<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="hamburger">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="menu-button-of-three-horizontal-lines" viewBox="0 0 124 124"><title>menu-button-of-three-horizontal-lines</title><path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z"/><path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z"/><path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z"/></symbol></svg>    <div class="icon">
        <svg viewBox="0 0 120 120">
            <use xlink:href="#menu-button-of-three-horizontal-lines"></use>
        </svg>
    </div>
</div>
<div class="menu">
    <div class="menu-content">
        <div class="langs">
            <?php pll_the_languages(array('display_names_as' => 'slug')); ?>
        </div>
        <div class="user-info">
            <figure class="avatar">
                <?php echo get_custom_logo(); ?>
                <figcaption>
                    <p class="name"><?php echo get_bloginfo() ?></p>
                    <p class="position">Full-stack web developer</p>
                </figcaption>
            </figure>
            <div>
                <button class="red-button">
                    <a href="/contacts"><?php _e('Contact me', 'dyachenko') ?></a>
                </button>
            </div>
        </div>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => '',
				'menu' => '',
				'container'       => 'div',
				'container_class' => 'menu-list',
				'menu_class' => ''
			)
		);
		?>
        <div class="menu-footer">
            <div class="socials">
<!--                <div class="glyph">-->
<!--                    <object class="icon" type="image/svg+xml" data="--><?php //echo get_template_directory_uri() . '/assets/svg/linkedin.svg' ?><!--">-->
<!--                    </object>-->
<!--                </div>-->
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="linkedin" viewBox="0 0 112.196 112.196"><title>linkedin</title><circle style="fill:#007AB9;" cx="56.098" cy="56.097" r="56.098"/><g> <path style="fill:#F1F2F2;" d="M89.616,60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118 c-3.705,0-5.906,2.491-6.878,4.903c-0.353,0.862-0.444,2.059-0.444,3.268v22.524H48.684c0,0,0.18-36.546,0-40.329h13.411v5.715 c-0.027,0.045-0.065,0.089-0.089,0.132h0.089v-0.132c1.782-2.742,4.96-6.662,12.085-6.662 C83.002,42.462,89.616,48.226,89.616,60.611L89.616,60.611z M34.656,23.969c-4.587,0-7.588,3.011-7.588,6.967 c0,3.872,2.914,6.97,7.412,6.97h0.087c4.677,0,7.585-3.098,7.585-6.97C42.063,26.98,39.244,23.969,34.656,23.969L34.656,23.969z M27.865,83.739H41.27V43.409H27.865V83.739z"/> </g></symbol><symbol id="github-logo" viewBox="0 0 96 96"><title>github-logo</title><path d="M48.07,47.746c-0.022,0-0.047-0.001-0.07-0.002c-0.024,0.001-0.049,0.002-0.071,0.002 c-5.957,0-11.206-1.508-14.308,1.34c-1.859,1.709-2.642,3.768-2.642,5.985c0,9.261,7.42,10.398,16.949,10.398h0.142 c9.529,0,16.949-1.138,16.949-10.398c0-2.218-0.783-4.276-2.642-5.985C59.275,46.238,54.027,47.746,48.07,47.746z M39.968,60.401 c-1.813,0-3.283-2.036-3.283-4.547s1.47-4.546,3.283-4.546s3.285,2.035,3.285,4.546S41.781,60.401,39.968,60.401z M56.031,60.401 c-1.814,0-3.285-2.036-3.285-4.547s1.471-4.546,3.285-4.546c1.812,0,3.283,2.035,3.283,4.546S57.844,60.401,56.031,60.401z M48,0 C21.489,0,0,21.49,0,48s21.489,48,48,48c26.509,0,48-21.49,48-48S74.509,0,48,0z M52.378,67.701c-0.86,0-2.57,0.002-4.378,0.004 c-1.809-0.002-3.52-0.004-4.379-0.004c-3.803,0-18.863-0.291-18.863-18.445c0-4.177,1.432-7.233,3.775-9.778 c-0.374-0.923-0.393-6.165,1.602-11.183c0,0,4.576,0.502,11.5,5.253c1.451-0.401,3.908-0.601,6.365-0.601 c2.455,0,4.912,0.199,6.365,0.601c6.923-4.751,11.498-5.253,11.498-5.253c1.995,5.018,1.977,10.26,1.603,11.183 c2.344,2.545,3.776,5.602,3.776,9.778C71.242,67.41,56.181,67.701,52.378,67.701z" fill="#BD5151"/></symbol><symbol id="vk" viewBox="0 0 112.196 112.196"><title>vk</title><g> <circle id="XMLID_11_" style="fill:#4D76A1;" cx="56.098" cy="56.098" r="56.098"/> </g><path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M53.979,80.702h4.403c0,0,1.33-0.146,2.009-0.878 c0.625-0.672,0.605-1.934,0.605-1.934s-0.086-5.908,2.656-6.778c2.703-0.857,6.174,5.71,9.853,8.235 c2.782,1.911,4.896,1.492,4.896,1.492l9.837-0.137c0,0,5.146-0.317,2.706-4.363c-0.2-0.331-1.421-2.993-7.314-8.463 c-6.168-5.725-5.342-4.799,2.088-14.702c4.525-6.031,6.334-9.713,5.769-11.29c-0.539-1.502-3.867-1.105-3.867-1.105l-11.076,0.069 c0,0-0.821-0.112-1.43,0.252c-0.595,0.357-0.978,1.189-0.978,1.189s-1.753,4.667-4.091,8.636c-4.932,8.375-6.904,8.817-7.71,8.297 c-1.875-1.212-1.407-4.869-1.407-7.467c0-8.116,1.231-11.5-2.397-12.376c-1.204-0.291-2.09-0.483-5.169-0.514 c-3.952-0.041-7.297,0.012-9.191,0.94c-1.26,0.617-2.232,1.992-1.64,2.071c0.732,0.098,2.39,0.447,3.269,1.644 c1.135,1.544,1.095,5.012,1.095,5.012s0.652,9.554-1.523,10.741c-1.493,0.814-3.541-0.848-7.938-8.446 c-2.253-3.892-3.954-8.194-3.954-8.194s-0.328-0.804-0.913-1.234c-0.71-0.521-1.702-0.687-1.702-0.687l-10.525,0.069 c0,0-1.58,0.044-2.16,0.731c-0.516,0.611-0.041,1.875-0.041,1.875s8.24,19.278,17.57,28.993 C44.264,81.287,53.979,80.702,53.979,80.702L53.979,80.702z"/></symbol></svg>
                <div class="glyph">
                    <svg class="icon">
                        <a href="https://www.linkedin.com/in/maxym-dyachenko-7744bb133/" target="_blank"><use xlink:href="#linkedin"></use></a>
                    </svg>
                </div>
                <div class="glyph">
                    <svg class="icon">
                        <a href="https://github.com/maxdyachenko" target="_blank"><use xlink:href="#github-logo"></use></a>
                    </svg>
                </div>
                <div class="glyph">
                    <svg class="icon">
                        <a href="https://vk.com/maxymdyachenko" target="_blank"><use xlink:href="#vk"></use></a>
                    </svg>
                </div>
            </div>
            <div class="zoom">
                <!--to be developed-->
            </div>
        </div>
    </div>
</div>