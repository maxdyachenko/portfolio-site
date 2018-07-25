<?php
function md_save_data() {
	if (!current_user_can('manage_options')){
		wp_die('Not allowed');
	}
	check_admin_referer('md_save_portfolio');

	$name = sanitize_text_field($_POST['md_name']);
	$about = sanitize_text_field($_POST['md_about']);

	$skill = sanitize_text_field($_POST['md_skill']);
	if (isset($_POST['md_info']) && !empty($_POST['md_info'])) {
		$info = sanitize_text_field($_POST['md_info']);
	}
	else {
		$info = '';
	}
	$url = sanitize_text_field($_POST['md_url']);
	$thumb_name = 'thumb.jpg';
	$images = json_encode($_FILES['md_images']['name']);

	manage_data($name);

	save_data($name, $about, $skill, $info, $url, $thumb_name, $images);

	wp_redirect(admin_url() . 'admin.php?page=md-admin');
}



function md_update_data() {
	if (!current_user_can('manage_options')){
		wp_die('Not allowed');
	}
	check_admin_referer('md_update_portfolio');

	$id = intval($_POST['md_id']);
	$name = sanitize_text_field($_POST['md_name']);
	$about = sanitize_text_field($_POST['md_about']);
	$skill = sanitize_text_field($_POST['md_skill']);
	$info = sanitize_text_field($_POST['md_info']);
	$url = sanitize_text_field($_POST['md_url']);

	update_data($id, $name, $about, $skill, $info, $url);

	wp_redirect(admin_url() . 'admin.php?page=md-admin');
}

function manage_data($name) {

	$dir_name = WP_PLUGIN_DIR  . '/md-portfolio/assets/images/' . $name;
	!file_exists($dir_name) ? mkdir($dir_name, 0755, true) : false;

	$i = 0;
	foreach ($_FILES['md_images']['name'] as $file) {
		$tmp = $_FILES['md_images']['tmp_name'][$i];
		$filepath = $dir_name  . '/' . $file;
		move_uploaded_file($tmp, $filepath);
		$i++;
	}

	upload_thumb($_FILES['md_thumb'], $dir_name);

}

function upload_thumb($file, $dir_name) {
	$filepath = $dir_name  . '/thumb.jpg';
	$tmp = $file['tmp_name'];
	move_uploaded_file($tmp, $filepath);
	resize_image($filepath, $dir_name);
}

function resize_image($filepath, $dir_name) {
	list($width, $height) = getimagesize($filepath);
	$thumb = imagecreatetruecolor(385, 196);
	$source = imagecreatefromjpeg($filepath);
	imagecopyresampled($thumb, $source, 0, 0, 0, 0, 385, 196, $width, $height);
	$info_path = pathinfo($filepath);
	$image_name = basename($filepath, '.'.$info_path['extension']);
	imagejpeg($thumb, $dir_name . '/' . $image_name . '385x196' . '.jpg');
}

function save_data($name, $about, $skill, $info, $url, $thumb_name, $images) {
	global $wpdb;
	$wpdb->insert(
		$wpdb->prefix . PORTFOLIO_LIST_TABLE,
		array(
			'name' => $name,
			'about' => $about,
			'skills' => $skill,
			'info' => $info,
			'url' => $url,
			'thumb' => $thumb_name,
			'images' => $images
		),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		)
	);
}

function update_data($id, $name, $about, $skill, $info, $url) {
	global $wpdb;
	$wpdb->update(
		$wpdb->prefix . PORTFOLIO_LIST_TABLE,
		array(
			'name' => $name,
			'about' => $about,
			'skills' => $skill,
			'info' => $info,
			'url' => $url,
		),
		array(
			'id' => $id
		)
	);
}