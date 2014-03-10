<?php

/*

Template Name: Properties Page

*/

?>


<?php get_header(); ?>

<div id="featured"></div> 

	

		<div id="main-content">
			<section class="left-col">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<p><i><?php echo get_post_meta($post->ID, 'Address', true) ?></i></p>

				<?php the_content(); ?>
				

			

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		
		<?php // comments_template(); ?>

		</section> <!-- END Left Column -->	


		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>