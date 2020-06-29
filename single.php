<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<h1> <?php the_title(); ?> </h1>
	<p class="postmetadata"><?php the_time('jS F Y') ?> | Posted in <?php the_category(', ') ?></p> 
	<div align="center">
	<?php
	// Must be inside a loop.
 	if ( has_post_thumbnail() ) {
    the_post_thumbnail();
	}
	?>
	</div>
	<?php the_content();?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	<div class="prevnextpost">
  <p class="alignleftlink">  <?php previous_post_link('%link', $link='<span class="pp">Previous Post</span> <br> %title') ?></p>
  <p class="alignrightlink"> <?php next_post_link('%link', $link='<span class="pp">Next Post</span> <br> %title') ?></p>
  </div>

	<?php comments_template(); ?>
<?php endwhile; ?>
	
	<?php else : ?>
	<h1>Not found</h1>
	<p> Sorry, but the page you requested does not exist.</p>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>
