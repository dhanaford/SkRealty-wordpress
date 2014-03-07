<?php

/*

Template Name: Contact Page

*/


?>




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

				<hr />
				<form action="<?php bloginfo('template_url'); ?>/contact-process.php" onsubmit="return validateForm()" method="post" name="contactForm">
					<p>Name</p>
					<input id="contactname" type="text" name="contactname" />
					<p>Email <span style="color:red;">*</span></p>
					<input id="contactemail" type="text" name="contactemail" />
					<p>Message</p>
					<textarea name="contactmessage" cols="60" rows="6"></textarea>
					<br />
					<br />
					<input id="submit" type="submit" value="Submit" />
				</form>

				<!--form validation-->
				<script type="text/javascript">
					function validateForm()
					{
							/* Validating email field */
						var x=document.forms["contactForm"]["contactemail"].value;
						var atpos=x.indexOf("@");
						var dotpos=x.lastIndexOf(".");
							if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
							 {
							 alert("Not a valid e-mail address");
							 return false;
							 }
					}
				</script>

			</div>


			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		</section> <!-- END Left Column -->	


		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>



<?php get_footer(); ?>


