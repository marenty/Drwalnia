<?php

// rejestracja sidebar
if (function_exists('register_sidebar'))
{
	register_sidebar(
		array(
			'name'          => 'Panel główny',
	        'before_widget' => '<div class="sidebar-main">',
    	    'after_widget'  => '</div>',
        	'before_title'  => '<h2>',
        	'after_title'   => '</h2>'
		)
	);
}
if (function_exists('register_sidebar'))
{
	register_sidebar(
		array(
			'name'          => 'Panel wpisów',
	        'before_widget' => '<div class="sidebar-post">',
    	    'after_widget'  => '</div>',
        	'before_title'  => '<h2>',
        	'after_title'   => '</h2>'
		)
	);
}

// ustalenie długości wpisu (read more) na stronie głównej
function new_excerpt_length($length) {
	return 60;
}
add_filter('excerpt_length', 'new_excerpt_length');

// read more
function new_excerpt_more($more) {
  return '<a href="'. get_permalink($post->ID) . '">' . '&nbsp;&nbsp;(więcej...)' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// rejestracja menu użytkownika
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'top_header' => 'Menu pod logo',
		)
	);
}
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'footer_menu' => 'Menu nad stopką',
		)
	);
}

// definiowanie ikony wpisu
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
add_image_size( 'page-icon', 220, 160, true); 
add_image_size( 'page-image', 400, 260, true); 



//remove html tag when saving comments
function preprocess_comment_striptags($commentdata) {
    $commentdata['comment_content'] = strip_tags($commentdata['comment_content']);
    return $commentdata;
}
add_filter('preprocess_comment', 'preprocess_comment_striptags');

// remove html tag when showing comments
function comment_text_striptags($string) {
    return strip_tags($string);
}
add_filter('comment_text', 'comment_text_striptags');

// recent comments
function get_recent_comments($args) {
	global $wpdb, $comments, $comment;
	extract($args, EXTR_SKIP);

	$themePath = get_bloginfo('template_url');
	$imageLink = '<h2>Recent Comments</h2>';

	$options = get_option('widget_recent_comments');
	$title = empty($options['title']) ? __($imageLink) : apply_filters('widget_title', $options['title']);
	if ( !$number = (int) $options['number'] )
		$number = 5;
	else if ( $number < 1 )
		$number = 1;
	else if ( $number > 15 )
		$number = 15;

	if ( !$comments = wp_cache_get( 'recent_comments', 'widget' ) ) {
		$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_approved = '1' ORDER BY comment_date_gmt DESC LIMIT $number");
		wp_cache_add( 'recent_comments', $comments, 'widget' );
	}

		 echo $before_widget;
			echo $before_title . $title . $after_title;
			echo '<ul id="recentcomments">';
			if ( $comments ) : foreach ( (array) $comments as $comment) :
			echo  '<li class="recentcomments">' . sprintf(__('%2$s'), get_comment_author_link(), '<a href="'. get_comment_link($comment->comment_ID) . '">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
			endforeach; endif;
		echo '</ul>';
		echo $after_widget; 

}


?>