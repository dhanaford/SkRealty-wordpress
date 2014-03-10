<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/media-queries.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,100italic,300italic,400italic' rel='stylesheet' type='text/css'>

	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>



</head>

<body id="home" <?php body_class(); ?>>
	
	<div id="wrapper">
	<header>
			<img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="sk realty management logo" />
			<nav id="nav" class="default">
			<div>
				<?php wp_nav_menu(array('menu' => "Main Menu")); ?>
				<div class="clearfix"></div>
			</div>
			</nav>	
	</header>

		