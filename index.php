<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<a href="<?php the_permalink() ?>" rel="bookmark" class="postimg">
	<?php 
	if ( has_post_thumbnail() ) {
	the_post_thumbnail('featuredImageCropped');
	}  
	   else { ?>
		<img src="https://imgur.com/47hKPTT.png" width="100" alt="<?php the_title(); ?>" />
		<?php }
	?>
	</a>

<?php endwhile; ?>

	<div class="prevnext">
  <p class="alignleftlink"><?php next_posts_link('&larr; Older Entries') ?></p>
  <p class="alignrightlink"><?php previous_posts_link('Newer Entries &rarr;') ?></p>
 	</div>
	
	<?php else : ?>
	<h1>Not found</h1>
	<p> Sorry, but the page you requested does not exist.</p>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php get_footer(); ?>
