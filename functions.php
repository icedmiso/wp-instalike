<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'before_widget' => '<div class="box">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h5 class="widget-title">',
'after_title' => '</h5>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h5 class="widget-title">',
'after_title' => '</h5>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h5 class="widget-title">',
'after_title' => '</h5>',
) );
?>

<?php
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_image_size('featuredImageCropped', 200, 200, true);
}
?>

<?php
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read more</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
?>


<?php 
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'null';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="postc">
	<?php endif; ?>
	<div class="comment-author vcard">
	<div class="grava">
		<?php echo get_avatar($comment, 65, $default='https://imgur.com/jDF9rXa.png' ); ?>
	</div>
	<?php printf( __( '<p class="sitename"><a href="<?php comment_author_url(); ?>" >%s</a></p>' ), get_comment_author_link() ); ?>
	</div>

	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<h4><?php comment_date('jS F Y') ?> on <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_time() ?></a> 
	<?php edit_comment_link(__('(Edit)'),'  ','') ?></h4>

	<?php comment_text(); ?>

	<div class="reply">
	<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}
?>	
