<?php 
/*
Plugin Name: QP-MostCommentedPosts
Plugin URI: http://ja.rafi.pl/2006/05/01wp-most-commented-posts/
Plugin description: WP-MostCommentedPosts plugin by Rafal "RAFi" Krawczyk on <a href="">
Version: 0.1
Author: Rafal "RAFi" Krawczyk
Author URL: http://ja.rafi.pl
*/ 

function get_mostcommented($limit = 10) {
    global $wpdb, $post;
    $mostcommenteds = $wpdb->get_results("SELECT    $wpdb->posts.ID, 
                                                    post_title, 
                                                    post_name, 
                                                    post_data, 
                                                    COUNT($wpdb->commented.comment_post_ID) AS 'comment_post_ID'
    $wpdb->comments ON $wpdb.ID = $wpdb->comments.comment_post_ID WHERE comment_approved = '1' AND post_date_gmt < '".gmdate("Y-m-d H:i:s")." AND
    post_password = '' GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_total DESC LIMIT $limit");
    foreach ($mostcommenteds as $post){
        $post_title = htmlspecialchars(stripcslashes($post->post_title));
        $comment_total = (int) $post->comment_total;
        echo "<li><a href=\"".get_permalink()."\">$post_title</a></li>;
    }
}?>
