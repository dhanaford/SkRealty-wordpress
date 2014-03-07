<?php

/*

Template Name: Properties Page

*/

?>


<?php get_header(); ?>

<div id="featured"></div> 

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="main-content">
				<section class="left-col">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
				<ul>
					<li>Bay spacing: <span><?php echo  get_post_meta($post->ID, 'Bay spacing:', true); ?></span></li>
					<li>City, State, Zip Code: <span><?php echo  get_post_meta($post->ID, 'City, State, Zip Code:', true); ?></span></li>
					<li>Building size: <span><?php echo  get_post_meta($post->ID, 'Building size:', true); ?></span></li>
					<li>Total square feet: <span><?php echo  get_post_meta($post->ID, 'Total square feet:', true); ?></span></li>
					<li>Clear Height: <?php echo  get_post_meta($post->ID, 'Clear Height:', true); ?></span></li>
					<li>Column Spacing: <?php echo  get_post_meta($post->ID, 'Column Spacing:', true); ?></li>
					<li>Construction Date: <?php echo  get_post_meta($post->ID, 'Construction Date:', true); ?></li>
					<li>Description: <?php echo  get_post_meta($post->ID, 'Description:', true); ?></li>
					<li>Docks: <?php echo  get_post_meta($post->ID, 'Docks:', true); ?></li>
					<li>Electrical: <?php echo  get_post_meta($post->ID, 'Electrical:', true); ?></li>
					<li>Fire Protection: <?php echo  get_post_meta($post->ID, 'Fire Protection:', true); ?></li>
					<li>Foundation: <?php echo  get_post_meta($post->ID, 'Foundation:', true); ?></li>
					<li>Frame: <?php echo  get_post_meta($post->ID, 'Frame:', true); ?></li>
					<li>Gas: <?php echo  get_post_meta($post->ID, 'Gas:', true); ?></li>
					<li>Frame: <?php echo  get_post_meta($post->ID, 'Frame:', true); ?></li>
					<li>Gross Building Area: <?php echo  get_post_meta($post->ID, 'Gross Building Area:', true); ?></li>
					<li>Improvement Description: <?php echo  get_post_meta($post->ID, 'Improvement Description:', true); ?></li>
					<li>Land Area: <?php echo  get_post_meta($post->ID, 'Land Area:', true); ?></li>
					<li>Lease term: <?php echo  get_post_meta($post->ID, 'Lease term:', true); ?></li>
					<li>Lease Type: <?php echo  get_post_meta($post->ID, 'Lease Type:', true); ?></li>
					<li>Loading areas: <?php echo  get_post_meta($post->ID, 'Loading areas:', true); ?></li>
					<li>Loading doors: <?php echo  get_post_meta($post->ID, 'Loading doors:', true); ?></li>
					<li>Lot Size: <?php echo  get_post_meta($post->ID, 'Lot Size:', true); ?></li>
					<li>Minimum Clear Height:<?php echo  get_post_meta($post->ID, 'Minimum Clear Height:', true); ?></li>
					<li>Name:<?php echo  get_post_meta($post->ID, 'Name:', true); ?></li>
					<li>Number of Suites:<?php echo  get_post_meta($post->ID, 'Number of Suites:', true); ?></li>
					<li>Occupancy:<?php echo  get_post_meta($post->ID, 'Occupancy:', true); ?></li>
					<li>Office Percentage::<?php echo  get_post_meta($post->ID, 'Office Percentage::', true); ?></li>
					<li>Minimum Clear Height:<?php echo  get_post_meta($post->ID, 'Minimum Clear Height:', true); ?></li>
					<li>Minimum Clear Height:<?php echo  get_post_meta($post->ID, 'Minimum Clear Height:', true); ?></li>
					<li>Minimum Clear Height:<?php echo  get_post_meta($post->ID, 'Minimum Clear Height:', true); ?></li>
				</ul>
				
			</div>
				<script type="text/javascript">
					$(document).ready(function() {
				if ($('ul li').length === 0)
		 				$('ul li').css("display", "none");
					}
					
					});
				</script>
			
		</div>
	</section> <!-- END Left Column -->	

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>