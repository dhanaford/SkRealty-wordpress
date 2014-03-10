<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			

		<div id="featured"></div> 

		<div id="main-content">
				<section class="left-col">

		<div class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<!--<?php //include (//TEMPLATEPATH . '/inc/meta.php' ); ?>-->

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div><!--end entry-->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		</section> <!-- END Left Column -->	


		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>