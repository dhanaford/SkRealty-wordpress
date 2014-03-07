


<?php 
//get the form elements and store them in variables
$contactname=$_POST["contactname"]; 
$contactemail=$_POST["contactemail"]; 

//establish connection
$con = mysqli_connect("localhost","root","root","wordpress"); 
//on connection failure, throw an error
if(!$con) {  
die('Could not connect: '.mysql_error()); 
}

$sql="INSERT INTO `wordpress`.`wp_contacts` ( `name` , `email_id` ) VALUES ( '$contactname','$contactemail')"; 
mysqli_query($con,$sql); 

?>


<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	
	
	<title>
		    - SK Realty Management	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/SKRealty/style.css">

	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/SKRealty/css/media-queries.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,100italic,300italic,400italic' rel='stylesheet' type='text/css'>

	
	<link rel="pingback" href="http://localhost/wordpress/xmlrpc.php">

	
	<link rel="alternate" type="application/rss+xml" title="SK Realty Management &raquo; Feed" href="http://localhost/wordpress/feed/" />
<link rel="alternate" type="application/rss+xml" title="SK Realty Management &raquo; Comments Feed" href="http://localhost/wordpress/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="SK Realty Management &raquo; Welcome to SK Realty Management Comments Feed" href="http://localhost/wordpress/home/feed/" />
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=3.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://localhost/wordpress/wp-includes/css/dashicons.min.css?ver=3.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='http://localhost/wordpress/wp-includes/css/admin-bar.min.css?ver=3.8.1' type='text/css' media='all' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=3.8.1'></script>
<script type='text/javascript' src='http://localhost/wordpress/wp-includes/js/comment-reply.min.js?ver=3.8.1'></script>
<link rel='prev' title='10 Weaver Road' href='http://localhost/wordpress/properties/10-weaver-road/' />
<link rel='next' title='contact process' href='http://localhost/wordpress/contact-process-2/' />
<link rel='canonical' href='http://localhost/wordpress/' />
<link rel='shortlink' href='http://localhost/wordpress/?p=23' />
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>

	<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/SKRealty/js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/SKRealty/js/custom.js"></script>



</head>

<body id="home" class="home page page-id-23 page-template-default logged-in admin-bar no-customize-support">
	
	<div id="wrapper">
	<header>
			<img id="logo" src="http://localhost/wordpress/wp-content/themes/SKRealty/images/logo.png" alt="sk realty management logo" />
			<nav id="nav" class="default">
			<div>
				<div class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12"><a href="http://localhost/wordpress/">Home</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="http://localhost/wordpress/about-us/">About Us</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="http://localhost/wordpress/properties/">Properties</a></li>
<li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="http://localhost/wordpress/contact-us/">Contact Us</a></li>
</ul></div>				<div class="clearfix"></div>
			</div>
			</nav>	
	</header>

		
				

		<div id="featured"></div> 

		<div id="main-content">
				<section class="left-col">

		<div class="post" id="post-23">

			<h1>Thank You!</h1>

			<!---->

			<div class="entry">

				<p>
				Your message has been sent.
				</p>
				
			</div>

		</div>
		
		
		</section> <!-- END Left Column -->	


		

    	<aside class="sidebar">
    
    	<div id="text-3" class="widget widget_text"><h2>Contact Us</h2>			<div class="textwidget"><hr />
					<p><b>SK Realty Management</b><br />Penn Plaza, Suite 512<br />New York, NY 10001<br />T: 212 356 9231<br />F: 212 736 6363</p>
					</div>
		</div>                    <img src="http://localhost/wordpress/wp-content/themes/SKRealty/images/sidebar.jpg" alt="warehouse" />
        </aside>
    </div> <!-- main-content -->
    <div class="clearfix"></div>
            
    </section>  


	</div><!--end wrapper-->
		

	<footer>
		<div class="wrap">
		<div class="left-col" style="border-right: none;">
		<nav>
			<div>
				<div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12"><a href="http://localhost/wordpress/">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="http://localhost/wordpress/about-us/">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="http://localhost/wordpress/properties/">Properties</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="http://localhost/wordpress/contact-us/">Contact Us</a></li>
</ul></div>			</div>
		</nav>
		</div>
		<div class="copy-right"><p>&copy; 2014 SK Realty Management</p></div>
		</div>
	</footer>

	</div>

	<script type='text/javascript' src='http://localhost/wordpress/wp-includes/js/admin-bar.min.js?ver=3.8.1'></script>
	<script type="text/javascript">
		(function() {
			var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

			request = true;

			b[c] = b[c].replace( rcs, ' ' );
			b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
		}());
	</script>
			<div id="wpadminbar" class="nojq nojs" role="navigation">
			<a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Skip to toolbar</a>
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Top navigation toolbar." tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/about.php" title="About WordPress"><span class="ab-icon"></span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/about.php">About WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item"  href="http://wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item"  href="http://codex.wordpress.org/">Documentation</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item"  href="http://wordpress.org/support/">Support Forums</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item"  href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/">SK Realty Management</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/">Dashboard</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/themes.php">Themes</a>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2Fwordpress%2F">Customize</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/widgets.php">Widgets</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/nav-menus.php">Menus</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/edit-comments.php" title="0 comments awaiting moderation"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/post-new.php" title="Add New"><span class="ab-icon"></span><span class="ab-label">New</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/post-new.php">Post</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/media-new.php">Media</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/post-new.php?post_type=page">Page</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/user-new.php">User</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-edit"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/post.php?post=23&#038;action=edit">Edit Page</a>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://localhost/wordpress/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" /><input type="submit" class="adminbar-button" value="Search"/></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item"  aria-haspopup="true" href="http://localhost/wordpress/wp-admin/profile.php" title="My Account">Howdy, dhanaford<img alt='' src='http://1.gravatar.com/avatar/f77ecb641840493caafdfab20511e1b7?s=26&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D26&amp;r=G' class='avatar avatar-26 photo' height='26' width='26' /></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://localhost/wordpress/wp-admin/profile.php"><img alt='' src='http://1.gravatar.com/avatar/f77ecb641840493caafdfab20511e1b7?s=64&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' /><span class='display-name'>dhanaford</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item"  href="http://localhost/wordpress/wp-admin/profile.php">Edit My Profile</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item"  href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=79588b883c">Log Out</a>		</li></ul></div>		</li></ul>			</div>
						<a class="screen-reader-shortcut" href="http://localhost/wordpress/wp-login.php?action=logout&#038;_wpnonce=79588b883c">Log Out</a>
					</div>

			
	<!-- Don't forget analytics -->
	
</body>

</html>
