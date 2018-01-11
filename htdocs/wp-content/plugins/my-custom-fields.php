<?php
/**
 * Plugin Name: My metaboxes
 * Description: This plugin adds metaboxes
 * Version: 1.0.0
 * License: GPL2
 */
if (!function_exists('add_action')) {
	wp_die('Not Allowed');
}
require_once(ABSPATH . 'wp-admin/includes/screen.php');
new My_Best_Metaboxes;

class My_Best_Metaboxes {

	public $post_type = 'page';

	static $meta_key1 = 'education';
	static $meta_key2 = 'experience';
	static $meta_key3 = 'skills';

	public function __construct() {
	    delete_post_meta(2, 'TEST');
		add_action( 'add_meta_boxes', array( $this, 'add_metabox' ) );
		add_action( 'save_post_' . $this->post_type, array( $this, 'save_metabox' ) );
		add_action( 'admin_print_footer_scripts', array( $this, 'show_assets' ), 10, 999 );
	}


	public function add_metabox() {
		global $post;
		if(!empty($post))
		{
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

			if($pageTemplate == 'about.php' )
			{
				add_meta_box( 'box_info_user', __('User info'), array( $this, 'render_metabox' ), $this->post_type, 'advanced', 'high' );

			}
		}
	}

	## Отображает метабокс на странице редактирования поста
	public function render_metabox($post) {

		?>
		<table class="form-table user-info-table">

			<tr class="education-tr">
				<th>
					Education <span class="dashicons dashicons-plus-alt add-info"></span>
				</th>
				<td class="info-list">
					<?php
					$input1 = '
					<span class="item-edu clone-item">
						<input type="text" name="'. self::$meta_key1 .'[]" value="%s">
						<span class="dashicons dashicons-trash remove-info"></span>
					</span>
					';

					$education_info = get_post_meta( $post->ID, self::$meta_key1, true );

					if (is_array($education_info)) {
						foreach ($education_info as $addr) {
							printf($input1, esc_attr( $addr));
						}
					} else {
						printf($input1, '');
					}
					?>
				</td>
			</tr>
            <tr class="work-tr">
                <th>
                    Work Experience <span class="dashicons dashicons-plus-alt add-info"></span>
                </th>
                <td class="info-list">
					<?php
					$input2 = '
					<span class="item-work clone-item">
						<input type="text" name="'. self::$meta_key2 .'[]" value="%s">
						<span class="dashicons dashicons-trash remove-info"></span>
					</span>
					';

					$experience_info = get_post_meta( $post->ID, self::$meta_key2, true );

					if ( is_array( $experience_info ) ) {
						foreach ( $experience_info as $exp ) {
							printf( $input2, esc_attr( $exp ) );
						}
					} else {
						printf( $input2, '' );
					}
					?>
                </td>
            </tr>
            <tr class="skills-tr">
                <th>
                    Skills <span class="dashicons dashicons-plus-alt add-info"></span>
                </th>
                <td class="info-list">
					<?php
					$input3 = '
					<span class="item-skill clone-item">
						<input type="text" name="'. self::$meta_key3 .'[]" value="%s">
						<span class="dashicons dashicons-trash remove-info"></span>
					</span>
					';

					$skills_info = get_post_meta($post->ID, self::$meta_key3, true);

					if ( is_array( $skills_info ) ) {
						foreach ( $skills_info as $skill ) {
							printf( $input3, esc_attr($skill));
						}
					} else {
						printf($input3, '');
					}
					?>
                </td>
            </tr>

		</table>

		<?php
	}
    public function save_metabox($post_id) {

		if (wp_is_post_autosave( $post_id ) )
			return;

		if (isset($_POST[self::$meta_key1] ) && is_array( $_POST[self::$meta_key1])) {
			$education_info = $this->get_filtered_fields($_POST[self::$meta_key1]);

			$this->manage_field($education_info, $post_id, self::$meta_key1);
		}
		if (isset( $_POST[self::$meta_key2] ) && is_array( $_POST[self::$meta_key2])) {
			$experience_info = $this->get_filtered_fields($_POST[self::$meta_key2]);

			$this->manage_field($experience_info, $post_id, self::$meta_key2);
		}
		if (isset( $_POST[self::$meta_key3] ) && is_array( $_POST[self::$meta_key3])) {
			$skills_info = $this->get_filtered_fields($_POST[self::$meta_key3]);

			$this->manage_field($skills_info, $post_id, self::$meta_key3);
		}
	}
	public function manage_field($field, $post_id, $meta_key) {
		if ($field) {
			update_post_meta($post_id, $meta_key, $field);
		}
		else {
			delete_post_meta($post_id, $meta_key);
		}
    }

	public function get_filtered_fields($fields) {
	    $fields = array_map('wp_kses_post', $fields);
	    $fields = array_filter($fields);
	    return $fields;
    }

	## Подключает скрипты и стили
	public function show_assets() {
		if (is_admin() && get_current_screen()->id == $this->post_type) {
			$this->show_styles();
			$this->show_scripts();
		}
	}

	## Выводит на экран стили
	public function show_styles() {
		?>
		<style>
			.add-info {
				color: #00a0d2;
				cursor: pointer;
			}
			.info-list .clone-item {
				display: flex;
				align-items: center;
			}
			.info-list .clone-item input {
				width: 100%;
				max-width: 400px;
			}
			.remove-info {
				color: brown;
				cursor: pointer;
			}
		</style>
		<?php
	}

	## Выводит на экран JS
	public function show_scripts() {
		?>
		<script>
            jQuery(document).ready(function ($) {

                $('.user-info-table').click(function () {
                    if ($(event.target).hasClass('add-info')) {
                        var $list = $(event.target).parents('tr').find('.info-list');
                        $item = $list.find('.clone-item').first().clone();

                        $item.find('input').val(''); // чистим знанчение

                        $list.append( $item );
                    }
                });

                $('.remove-info').on('click', function () {
                    var input = $(event.target).parents('.clone-item');
                    var block = $(event.target).parents('.info-list').find('.clone-item');
                    if (block.length > 1) {
                        input.remove();
                    }
                    else {
                        input.find('input').val('');
                    }
                });

            });
		</script>
		<?php
	}

}