<?php
/**
 * Instagram Widget.
 *
 * @package WooVina WordPress theme
 */

// Exit if accessed directly
if(! defined('ABSPATH')) {
	exit;
}

if(! class_exists('WooVina_Extra_Instagram_Widget')) {
	class WooVina_Extra_Instagram_Widget extends WP_Widget {

		/**
		 * Register widget with WordPress.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			
			parent::__construct(
	            'woovina_instagram',
	            $name = __('&raquo; Instagram', 'woovina-extra'),
	            array(
	                'classname'		=> 'widget-woovina-instagram instagram-widget',
					'description'	=> esc_html__('Displays Instagram photos.', 'woovina-extra'),
					'customize_selective_refresh' => true,
	           )
	       );

	        add_action('admin_enqueue_scripts', array($this, 'woovina_extra_instagram_js'));

		}

	    /**
	     * Upload the Javascripts for the media uploader
	     */
	    public function woovina_extra_instagram_js() {
	        wp_enqueue_script('we-insta-admin-script', WE_URL .'/includes/widgets/js/insta-admin.js', array('jquery'));

	    }
		
		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget($args, $instance) {

			$title = isset($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';

			// Before widget WP hook
			echo $args['before_widget'];

				// Show widget title
				if($title) {
					echo $args['before_title'] . esc_html($title) . $args['after_title'];
				}

				// Display the widget
				echo $this->display_widget($instance);

			// After widget WP hook
			echo $args['after_widget'];
		}
		
		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update($new_instance, $old_instance) {
			$instance 						= $old_instance;
			$instance['title'] 				= strip_tags($new_instance['title']);
			$instance['username']       	= $new_instance['username'];
			$instance['number'] 			= $new_instance['number'];
			$instance['display_header']   	= $new_instance['display_header'];
			$instance['avatar']  			= strip_tags($new_instance['avatar']);
			$instance['picture_radius']   	= $new_instance['picture_radius'];
			$instance['display_name']   	= $new_instance['display_name'];
			$instance['description']   		= $new_instance['description'];
			$instance['header_position']   	= $new_instance['header_position'];
			$instance['header_align']   	= $new_instance['header_align'];
			$instance['columns'] 			= strip_tags($new_instance['columns']);
			$instance['margin'] 			= $new_instance['margin'];
			$instance['size']     			= $new_instance['size'];
			$instance['images_link']    	= $new_instance['images_link'];
			$instance['custom_url']     	= $new_instance['custom_url'];
			$instance['target'] 			= $new_instance['target'];
			$instance['follow'] 			= $new_instance['follow'];
			return $instance;
		}
		
		/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */
		public function form($instance) {
			$instance = wp_parse_args((array) $instance, array(
				'title' 			=> __('Instagram','woovina-extra'),
				'username'         	=> __('adidas','woovina-extra'),
				'number' 			=> 10,
				'display_header'    => __('No','woovina-extra'),
				'avatar'			=> '',
				'picture_radius'   	=> __('Rounded','woovina-extra'),
				'display_name'     	=> '',
				'description'     	=> '',
				'header_position'   => __('Before','woovina-extra'),
				'header_align'   	=> __('Left','woovina-extra'),
				'columns' 			=> '',
				'margin' 			=> __('Yes','woovina-extra'),
				'size'       		=> 'small',
				'images_link'      	=> 'image_url',
				'custom_url'       	=> '',
				'target' 			=> 'blank',
				'follow' 			=> __('Follow Us','woovina-extra'),
			)); ?>

			<div class="woovina-container">

				<p>
					<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'woovina-extra'); ?></label>			
					<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" />
				</p>

				<p>
					<label for="<?php echo esc_attr($this->get_field_id('username')); ?>"><?php esc_html_e('@username or #tag', 'woovina-extra'); ?>: <input class="widefat" id="<?php echo esc_attr($this->get_field_id('username')); ?>" name="<?php echo esc_attr($this->get_field_name('username')); ?>" type="text" value="<?php echo esc_attr($instance['username']); ?>" /></label>
				</p>

				<p>
					<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number Images To Show:', 'woovina-extra'); ?>
						<input class="small-text" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number" min="0" value="<?php echo esc_attr($instance['number']); ?>" />
					</label>
				</p>

				<p class="woovina-left">
					<label for="<?php echo esc_attr($this->get_field_id('columns')); ?>"><?php esc_html_e('Images Style:', 'woovina-extra'); ?></label>
					<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('columns')); ?>" id="<?php echo esc_attr($this->get_field_id('columns')); ?>">
						<option value="style-one" <?php if($instance['columns'] == 'style-one') { ?>selected="selected"<?php } ?>><?php esc_html_e('Style 1', 'woovina-extra'); ?></option>
						<option value="style-two" <?php if($instance['columns'] == 'style-two') { ?>selected="selected"<?php } ?>><?php esc_html_e('Style 2', 'woovina-extra'); ?></option>
						<option value="style-three" <?php if($instance['columns'] == 'style-three') { ?>selected="selected"<?php } ?>><?php esc_html_e('Style 3', 'woovina-extra'); ?></option>
						<option value="style-four" <?php if($instance['columns'] == 'style-four') { ?>selected="selected"<?php } ?>><?php esc_html_e('Style 4', 'woovina-extra'); ?></option>
						<option value="two-columns" <?php if($instance['columns'] == 'two-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('2 Columns', 'woovina-extra'); ?></option>
						<option value="three-columns" <?php if($instance['columns'] == 'three-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('3 Columns', 'woovina-extra'); ?></option>
						<option value="four-columns" <?php if($instance['columns'] == 'four-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('4 Columns', 'woovina-extra'); ?></option>
						<option value="five-columns" <?php if($instance['columns'] == 'five-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('5 Columns', 'woovina-extra'); ?></option>
						<option value="six-columns" <?php if($instance['columns'] == 'six-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('6 Columns', 'woovina-extra'); ?></option>
						<option value="seven-columns" <?php if($instance['columns'] == 'seven-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('7 Columns', 'woovina-extra'); ?></option>
						<option value="eight-columns" <?php if($instance['columns'] == 'eight-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('8 Columns', 'woovina-extra'); ?></option>
						<option value="nine-columns" <?php if($instance['columns'] == 'nine-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('9 Columns', 'woovina-extra'); ?></option>
						<option value="ten-columns" <?php if($instance['columns'] == 'ten-columns') { ?>selected="selected"<?php } ?>><?php esc_html_e('10 Columns', 'woovina-extra'); ?></option>
					</select>
				</p>

				<p class="woovina-right">
					<label for="<?php echo esc_attr($this->get_field_id('margin')); ?>"><?php esc_html_e('Margin:', 'woovina-extra'); ?></label>
					<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('margin')); ?>" id="<?php echo esc_attr($this->get_field_id('margin')); ?>">
						<option value="margin" <?php if($instance['margin'] == 'margin') { ?>selected="selected"<?php } ?>><?php esc_html_e('Margin', 'woovina-extra'); ?></option>
						<option value="no-margin" <?php if($instance['margin'] == 'no-margin') { ?>selected="selected"<?php } ?>><?php esc_html_e('No Margin', 'woovina-extra'); ?></option>
					</select>
				</p>

				<p>
					<label for="<?php echo esc_attr($this->get_field_id('size')); ?>"><?php esc_html_e('Photo size', 'woovina-extra'); ?>:</label>
					<select id="<?php echo esc_attr($this->get_field_id('size')); ?>" name="<?php echo esc_attr($this->get_field_name('size')); ?>" class="widefat">
						<option value="thumbnail" <?php selected('thumbnail', $instance['size']); ?>><?php esc_html_e('Thumbnail', 'woovina-extra'); ?></option>
						<option value="small" <?php selected('small', $instance['size']); ?>><?php esc_html_e('Small', 'woovina-extra'); ?></option>
						<option value="large" <?php selected('large', $instance['size']); ?>><?php esc_html_e('Large', 'woovina-extra'); ?></option>
						<option value="original" <?php selected('original', $instance['size']); ?>><?php esc_html_e('Original', 'woovina-extra'); ?></option>
					</select>
				</p>

				<p>
					<label for="<?php echo esc_attr($this->get_field_id('images_link')); ?>"><strong><?php esc_html_e('Link To', 'woovina-extra'); ?></strong>
						<select class="widefat" name="<?php echo esc_attr($this->get_field_name('images_link')); ?>" id="<?php echo esc_attr($this->get_field_id('images_link')); ?>">
							<option value="image_url" <?php selected($instance['images_link'], 'image_url', true); ?>><?php esc_html_e('Instagram Image', 'woovina-extra'); ?></option>
							<option value="user_url" <?php selected($instance['images_link'], 'user_url', true); ?>><?php esc_html_e('Instagram Profile', 'woovina-extra'); ?></option>
							<option value="custom_url" <?php selected($instance['images_link'], 'custom_url', true); ?>><?php esc_html_e('Custom Link', 'woovina-extra'); ?></option>
						</select>
					</label>
				</p>

				<p class="<?php if('custom_url' != $instance['images_link']) echo 'hidden'; ?>">
					<label for="<?php echo esc_attr($this->get_field_id('custom_url')); ?>"><?php esc_html_e('Custom Link:', 'woovina-extra'); ?></label>
					<input class="widefat" id="<?php echo esc_attr($this->get_field_id('custom_url')); ?>" name="<?php echo esc_attr($this->get_field_name('custom_url')); ?>" type="text" value="<?php echo esc_attr($instance['custom_url']); ?>" />
					<small><?php esc_html_e('Use this field only if the above option is set to <strong>Custom Link</strong>', 'woovina-extra'); ?></small>
				</p>

				<div class="woovina-header-wrap">
					<div class="woovina-header-options woovina-clr">
						<h4 class="woovina-header-title"><?php esc_html_e('Header Options', 'woovina-extra'); ?></h4>
						<p>
							<label for="<?php echo esc_attr($this->get_field_id('display_header')); ?>"><?php esc_html_e('Display Header:', 'woovina-extra'); ?></label>
							<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('display_header')); ?>" id="<?php echo esc_attr($this->get_field_id('display_header')); ?>">
								<option value="no" <?php if($instance['display_header'] == 'no') { ?>selected="selected"<?php } ?>><?php esc_html_e('No', 'woovina-extra'); ?></option>
								<option value="yes" <?php if($instance['display_header'] == 'yes') { ?>selected="selected"<?php } ?>><?php esc_html_e('Yes', 'woovina-extra'); ?></option>
							</select>
						</p>

						<div class="woovina-display-header-options <?php if('yes' != $instance['display_header']) echo 'hidden'; ?>">
							<p>
								<label for="<?php echo esc_attr($this->get_field_id('avatar')); ?>"><?php esc_html_e('Image URL', 'woovina-extra'); ?>:</label> 
								<input class="widefat" id="<?php echo esc_attr($this->get_field_id('avatar')); ?>" name="<?php echo esc_attr($this->get_field_name('avatar')); ?>" type="text" value="<?php echo esc_attr($instance['avatar']); ?>" style="margin-bottom:10px;" />
								<input class="woovina-insta-avatar button button-secondary" type="button" value="<?php esc_html_e('Upload Image', 'woovina-extra'); ?>" />
							</p>

							<p>
								<label for="<?php echo esc_attr($this->get_field_id('picture_radius')); ?>"><?php esc_html_e('Picture Radius:', 'woovina-extra'); ?></label>
								<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('picture_radius')); ?>" id="<?php echo esc_attr($this->get_field_id('picture_radius')); ?>">
									<option value="rounded" <?php if($instance['picture_radius'] == 'rounded') { ?>selected="selected"<?php } ?>><?php esc_html_e('Rounded', 'woovina-extra'); ?></option>
									<option value="square" <?php if($instance['picture_radius'] == 'square') { ?>selected="selected"<?php } ?>><?php esc_html_e('Square', 'woovina-extra'); ?></option>
								</select>
							</p>

							<p>
								<label for="<?php echo esc_attr($this->get_field_id('display_name')); ?>"><?php esc_html_e('Display Name:', 'woovina-extra'); ?>
									<input class="widefat" id="<?php echo esc_attr($this->get_field_id('display_name')); ?>" name="<?php echo esc_attr($this->get_field_name('display_name')); ?>" type="text" placeholder="<?php esc_html_e('Default is username', 'woovina-extra'); ?>" value="<?php echo esc_attr($instance['display_name']); ?>" />
								</label>
							</p>

							<p>
								<label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:', 'woovina-extra'); ?></label>
								<textarea rows="15" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" class="widefat" style="height: 100px;"><?php if( !empty($instance['description'])) { echo esc_attr($instance['description']); } ?></textarea>
							</p>

							<p class="woovina-left">
								<label for="<?php echo esc_attr($this->get_field_id('header_position')); ?>"><?php esc_html_e('Position:', 'woovina-extra'); ?></label>
								<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('header_position')); ?>" id="<?php echo esc_attr($this->get_field_id('header_position')); ?>">
									<option value="before" <?php if($instance['header_position'] == 'before') { ?>selected="selected"<?php } ?>><?php esc_html_e('Before Images', 'woovina-extra'); ?></option>
									<option value="after" <?php if($instance['header_position'] == 'after') { ?>selected="selected"<?php } ?>><?php esc_html_e('After Images', 'woovina-extra'); ?></option>
								</select>
							</p>

							<p class="woovina-right">
								<label for="<?php echo esc_attr($this->get_field_id('header_align')); ?>"><?php esc_html_e('Align:', 'woovina-extra'); ?></label>
								<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('header_align')); ?>" id="<?php echo esc_attr($this->get_field_id('header_align')); ?>">
									<option value="left" <?php if($instance['header_align'] == 'left') { ?>selected="selected"<?php } ?>><?php esc_html_e('Left', 'woovina-extra'); ?></option>
									<option value="right" <?php if($instance['header_align'] == 'right') { ?>selected="selected"<?php } ?>><?php esc_html_e('Right', 'woovina-extra'); ?></option>
									<option value="center" <?php if($instance['header_align'] == 'center') { ?>selected="selected"<?php } ?>><?php esc_html_e('Center', 'woovina-extra'); ?></option>
								</select>
							</p>
						</div>
					</div>
				</div>

				<p class="woovina-left">
					<label for="<?php echo esc_attr($this->get_field_id('target')); ?>"><?php esc_html_e('Button Target:', 'woovina-extra'); ?></label>
					<select class='woovina-widget-select widefat' name="<?php echo esc_attr($this->get_field_name('target')); ?>" id="<?php echo esc_attr($this->get_field_id('target')); ?>">
						<option value="blank" <?php if($instance['target'] == 'blank') { ?>selected="selected"<?php } ?>><?php esc_html_e('Blank', 'woovina-extra'); ?></option>
						<option value="self" <?php if($instance['target'] == 'self') { ?>selected="selected"<?php } ?>><?php esc_html_e('Self', 'woovina-extra'); ?></option>
					</select>
					<small><?php esc_html_e('Same or new window', 'woovina-extra'); ?></small>
				</p>

				<p class="woovina-right">
					<label for="<?php echo esc_attr($this->get_field_id('follow')); ?>"><?php esc_html_e('Button Text:', 'woovina-extra'); ?></label>
					<input class="widefat" id="<?php echo esc_attr($this->get_field_id('follow')); ?>" name="<?php echo esc_attr($this->get_field_name('follow')); ?>" type="text" value="<?php echo esc_attr($instance['follow']); ?>" />
					<small><?php esc_html_e('Leave empty for no button', 'woovina-extra'); ?></small>
				</p>

				<div style="clear:both;"></div>

			</div>

			<style type="text/css">
				.woovina-clr:after { content:"";display:block;visibility:hidden;clear:both;zoom:1;height:0 }
				.woovina-search-for-container {display: block; margin-bottom: 6px;}
				.woovina-seach-for {display: inline-block; width: 90px; vertical-align: middle;}
				.woovina-left,.woovina-right{min-height: 48px;}
				.woovina-left{float: left;width: 48%;}
				.woovina-right{float: right;width: 48%;}
				.woovina-header-wrap .woovina-header-options {border: 1px solid #cfcfcf;padding: 10px;margin: 25px 0 0;}
				.woovina-header-wrap .woovina-header-title {margin: -22px 0 0 0;background-color: #fff;width: 100px;padding: 3px 10px;border: 1px solid #cfcfcf;text-align: center;}
				.woovina-header-wrap .woovina-header-heading {display: inline-block;width: 100%;margin: 8px 0 10px;}
				@media only screen and (max-width: 767px) {
					.woovina-left,.woovina-right{float: none;width: 100%;}
				}
			</style>

			<script type="text/javascript">
				(function($) {
					"use strict";
					$(document).ready(function() {
						var _custom_media = true,
							_orig_send_attachment = wp.media.editor.send.attachment;
						$('.woovina-insta-avatar').click(function(e) {
							var send_attachment_bkp	= wp.media.editor.send.attachment,
								button = $(this),
								id = button.prev();
								_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment) {
								if(_custom_media) {
									$(id).val(attachment.url);
								} else {
									return _orig_send_attachment.apply(this, [props, attachment]);
								};
							}
							wp.media.editor.open(button);
							return false;
						});
						$('.add_media').on('click', function() {
							_custom_media = false;
						});
					});
				}) (jQuery);
			</script>

		<?php
		}
		/**
		 * Display the widget.
		 */
		private function display_widget($args) {

			$username         	= isset($args['username']) && !empty($args['username']) ? $args['username'] : 'adidas';
			$number 			= isset($args['number']) ? $args['number'] : 10;
			$display_header 	= isset($args['display_header']) ? $args['display_header'] : 'no';
			$avatar 			= isset($args['avatar']) ? $args['avatar'] : '';
			$picture_radius 	= isset($args['picture_radius']) ? $args['picture_radius'] : 'rounded';
			$display_name     	= isset($args['display_name']) ? $args['display_name'] : '';
			$description 		= isset($args['description']) ? $args['description'] : '';
			$header_position 	= isset($args['header_position']) ? $args['header_position'] : '';
			$header_align 		= isset($args['header_align']) ? $args['header_align'] : '';
			$columns 			= isset($args['columns']) ? $args['columns'] : '';
			$margin 			= isset($args['margin']) ? $args['margin'] : '';
			$size       		= isset($args['size']) ? $args['size'] : 'small';
			$images_link      	= isset($args['images_link']) ? $args['images_link'] : 'local_image_url';
			$custom_url       	= isset($args['custom_url']) ? $args['custom_url'] : '';
			$target 			= isset($args['target']) ? $args['target'] : '';
			$follow 			= isset($args['follow']) ? $args['follow'] : '';

			$output = '';

			if('' !== $username) {

				$media_array = $this->instagram_data($username);

				if(is_wp_error($media_array)) {

					$output .= wp_kses_post($media_array->get_error_message());

				} else {

					// slice list down to required limit.
					$media_array = array_slice($media_array, 0, $number);

					if('style-four' == $columns) {
						$output .= '<div class="woovina-style-four-wrap">';
					}

					if('style-four' == $columns) {
						$output .= '<div class="woovina-instagram-bar"><a class="instagram-logo" href="https://instagram.com/' . esc_attr($username) . '/" target="_blank" rel="nofollow"></a></div>';
					}

					if($display_header != 'no' && $header_position == 'before') {
						$output .= '<div class="woovina-instagram-header woovina-before woovina-'. esc_attr($header_align) .' clr">';

							if($avatar) {
								$output .= '<div class="woovina-instagram-avatar '. esc_attr($picture_radius) .'">';
									$output .= '<a href="https://instagram.com/'. esc_attr($username) .'/" target="_blank" rel="nofollow">';
										$output .= '<img src="'. esc_url($avatar) .'" alt="'. esc_attr($username) .'" />';
										$output .= '<span class="woovina-instagram-follow"><span>Follow</span></span>';
									$output .= '</a>';
								$output .= '</div>';
							}

							$output .= '<div class="woovina-instagram-info">';
							
								if($display_name == '') {
									$name = $username;
								} else {
									$name = $display_name;
								}

								$output .= '<h3 class="woovina-instagram-username"><a href="https://instagram.com/'. esc_attr($username) .'/" target="_blank" rel="nofollow">'. $name .'</a></h3>';
								
								if($description != '') {
									$output .= '<p class="woovina-instagram-desc">'. do_shortcode($description) .'</p>';
								}

							$output .= '</div>';

						$output .= '</div>';
					}

					$output .= '<ul class="woovina-instagram-pics clr '. esc_attr($columns) .' '. esc_attr($margin) .'">';

						foreach($media_array as $item) {

							if('image_url' == $images_link) {
								$link = $item['link'];
							} elseif('user_url' == $images_link) {
								$link = 'instagram.com/' . esc_attr($username) . '/';
							} elseif('custom_url' == $images_link) {
								$link = $custom_url;
							}

							$output .= '<li><a href="' . esc_url($link) . '" target="' . esc_attr($target) . '" ><img src="' . esc_url($item[$size]) . '"  alt="' . esc_attr($item['description']) . '" title="' . esc_attr($item['description']) . '" /></a></li>';
						}

					$output .= '</ul>';

					if($display_header != 'no' && $header_position == 'after') {
						$output .= '<div class="woovina-instagram-header woovina-after woovina-'. esc_attr($header_align) .' clr">';

							if($avatar) {
								$output .= '<div class="woovina-instagram-avatar">';
									$output .= '<a href="https://instagram.com/'. esc_attr($username) .'/" target="_blank" rel="nofollow">';
										$output .= '<img src="'. esc_url($avatar) .'" alt="'. esc_attr($username) .'" />';
										$output .= '<span class="woovina-instagram-follow"><span>Follow</span></span>';
									$output .= '</a>';
								$output .= '</div>';
							}

							$output .= '<div class="woovina-instagram-info">';
							
								if($display_name == '') {
									$name = $username;
								} else {
									$name = $display_name;
								}

								$output .= '<h3 class="woovina-instagram-username"><a href="https://instagram.com/'. esc_attr($username) .'/" target="_blank" rel="nofollow">'. $name .'</a></h3>';
								
								if($description != '') {
									$output .= '<p class="woovina-instagram-desc">'. do_shortcode($description) .'</p>';
								}

							$output .= '</div>';

						$output .= '</div>';
					}

					if($follow != '') {
						$output .= '<p class="woovina-instagram-link clr"><a href="https://instagram.com/'. esc_attr($username) .'/" rel="me" target="_'. esc_attr($target) .'">'. esc_attr($follow) .'</a></p>';
					}

					if('style-four' == $columns) {
						$output .= '</div>';
					}

				}

			} else {
				$output .= __('No images found! <br> Try some other hashtag or username', 'woovina-extra');
			}

			return $output;
		}
		
		/**
		 * based on https://gist.github.com/cosmocatalano/4544576
		 */
		function instagram_data($username) {

			$username = trim(strtolower($username));

			switch (substr($username, 0, 1)) {
				case '#':
					$url              = 'https://instagram.com/explore/tags/' . str_replace('#', '', $username);
					$transient_prefix = 'h';
					break;

				default:
					$url              = 'https://instagram.com/' . str_replace('@', '', $username);
					$transient_prefix = 'u';
					break;
			}

			if(false === ($instagram = get_transient('woovina-insta-' . $transient_prefix . '-' . sanitize_title_with_dashes($username)))) {

				$remote = wp_remote_get($url);

				if(is_wp_error($remote)) {
					return new WP_Error('site_down', esc_html__('Unable to communicate with Instagram.', 'woovina-extra'));
				}

				if(200 !== wp_remote_retrieve_response_code($remote)) {
					return new WP_Error('invalid_response', esc_html__('Instagram did not return a 200.', 'woovina-extra'));
				}

				$shards      = explode('window._sharedData = ', $remote['body']);
				$insta_json  = explode(';</script>', $shards[1]);
				$insta_array = json_decode($insta_json[0], true);

				if(! $insta_array) {
					return new WP_Error('bad_json', esc_html__('Instagram has returned invalid data.', 'woovina-extra'));
				}

				if(isset($insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'])) {
					$images = $insta_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];
				} elseif(isset($insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'])) {
					$images = $insta_array['entry_data']['TagPage'][0]['graphql']['hashtag']['edge_hashtag_to_media']['edges'];
				} else {
					return new WP_Error('bad_json_2', esc_html__('Instagram has returned invalid data.', 'woovina-extra'));
				}

				if(! is_array($images)) {
					return new WP_Error('bad_array', esc_html__('Instagram has returned invalid data.', 'woovina-extra'));
				}

				$instagram = array();

				foreach ($images as $image) {
					if(true === $image['node']['is_video']) {
						$type = 'video';
					} else {
						$type = 'image';
					}

					$caption = __('Instagram Image', 'woovina-extra');
					if(! empty($image['node']['edge_media_to_caption']['edges'][0]['node']['text'])) {
						$caption = wp_kses($image['node']['edge_media_to_caption']['edges'][0]['node']['text'], array());
					}

					$instagram[] = array(
						'description' => $caption,
						'link'        => trailingslashit('//instagram.com/p/' . $image['node']['shortcode']),
						'time'        => $image['node']['taken_at_timestamp'],
						'comments'    => $image['node']['edge_media_to_comment']['count'],
						'likes'       => $image['node']['edge_liked_by']['count'],
						'thumbnail'   => preg_replace('/^https?\:/i', '', $image['node']['thumbnail_resources'][0]['src']),
						'small'       => preg_replace('/^https?\:/i', '', $image['node']['thumbnail_resources'][2]['src']),
						'large'       => preg_replace('/^https?\:/i', '', $image['node']['thumbnail_resources'][4]['src']),
						'original'    => preg_replace('/^https?\:/i', '', $image['node']['display_url']),
						'type'        => $type,
					);
				} // End foreach().

				// do not set an empty transient - should help catch private or empty accounts.
				if(! empty($instagram)) {
					$instagram = base64_encode(serialize($instagram));
					set_transient('woovina-insta-' . $transient_prefix . '-' . sanitize_title_with_dashes($username), $instagram, apply_filters('woovina_instagram_cache_time', HOUR_IN_SECONDS * 2));
				}
			}

			if(! empty($instagram)) {

				return unserialize(base64_decode($instagram));

			} else {

				return new WP_Error('no_images', esc_html__('Instagram did not return any images.', 'woovina-extra'));

			}
		}
	}
}
register_widget('WooVina_Extra_Instagram_Widget');