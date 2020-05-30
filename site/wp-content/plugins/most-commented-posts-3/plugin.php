<?php
/*
Plugin Name: Most Commented Posts
Plugin URI: https://www.mathiasgomig.com
Description: Displays a simple widget with a list of the most commented posts.
Version: 1.1.1
Author: Mathias Gomig
Author URI: https://www.mathiasgomig.com
License:

    Copyright 2012-2019  Mathias Gomig  (email : mail@mathiasgomig.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

 */

class Most_Commented_Posts_Widget extends WP_Widget
{
    public function __construct()
    {
        load_plugin_textdomain('pdmcp', false, dirname(plugin_basename(__FILE__)) . '/lang/');

        add_action('wp_enqueue_scripts', [$this, 'register_plugin_styles']);

        parent::__construct(
            'pd-mostcommentedposts',
            __('Most Commented Posts', 'pdmcp'),
            ['description' => __('Displays a list of the most commented posts.', 'pdmcp')]
        );
    }

    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $number =  $instance['number'];
        $number = (int) $number;

        if ($title == '') {
            $title = __('Most Commented Posts', 'pdmcp');
        }

        echo $before_widget;
        if (! empty($title)) {
            echo $before_title . $title . $after_title;
        }

        list_most_commented_posts($number);

        echo $after_widget;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = strip_tags($new_instance['number']);

        return $instance;
    }

    public function form($instance)
    {
        $title = __('Most Commented Posts', 'pdmcp');
        $number = 5;

        if (isset($instance['title'])) {
            $title = $instance['title'];
        }

        if (isset($instance['number'])) {
            $number = (int) $instance['number'];
        } ?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'pdmcp'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" placeholder="<?php echo __('Most Commented Posts', 'pdmcp'); ?>" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:', 'pdmcp'); ?></label>
				<input type="number" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo esc_attr($number); ?>" placeholder="5" />
			</p>
		<?php
    }

    public function register_plugin_styles()
    {
		wp_enqueue_style('pd-mostcommentedposts', plugin_dir_url( __FILE__ ) . 'css/plugin.css' );
    }
}

add_action('widgets_init', function () {
    register_widget('Most_Commented_Posts_Widget');
});

function list_most_commented_posts($number)
{
    if ($number == 0) {
        $number = 5;
    }

    global $wpdb;
    $p_result = $wpdb->get_results("SELECT id, post_title, comment_count FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status ='publish' AND comment_count !='0' ORDER BY comment_count DESC LIMIT " . $number);

    echo '<ul>';

    foreach ($p_result as $post) {
        ?>
			<li class="pd__mcp__comment">
				<span class="pd__mcp__comment--title">
					<a href="<?php echo get_permalink($post->id); ?>"><?php echo $post->post_title; ?></a>
				</span>

				<br />

				<span class="pd__mcp__comment--number">
					<?php
						if ($post->comment_count == '1') {
							_e('1 Comment', 'pdmcp');
						} else {
							printf(__('%s Comments', 'pdmcp'), $post->comment_count);
						}
					?>
				</span>
			</li>
		<?php
    }

    echo '</ul>';

    wp_reset_query();
}
