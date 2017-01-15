<!doctype html>

<!-- I am still having issues with that gap at the top of ths screen! -->

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">	

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title('|'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // Seo Suff ?>
		<meta name="description" content="Skymouse Studios helps you tell stories, design better, and develop a brand people love.">
		<meta property="og:title" content="Skymouse Studios" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://skymse.com" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png" />


		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // Google Analytics ?>
		<?php include_once("library/partials/analyticstracking.php"); ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<?php // Conditional Statement for a background image ?>
			<?php if (has_post_thumbnail($post->ID)) { ?>

                  <?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
                  <header class="header" style="background:rgba(0,0,0,.40);" role="banner" itemscope itemtype="http://schema.org/WPHeader">
                 

                 <div class="bg-image" style="background-image: url('<?php echo $image; ?>');"></div>
                  <?php } else { ?>

                  <header class="header <?php echo the_field('background_color'); ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">

                  <?php	} ?>
                <?php // END Header Background ?>
			
				<div id="inner-header" class="wrap cf">

					<a href="<?php echo home_url(); ?>" rel="nofollow">
					<img alt="Skymouse Studios Logo" src="<?php echo get_template_directory_uri(); ?>/library/images/skymse-logo.svg"></a>

					<div id="menu-burger"><i class="icon-menu"></i></div>
					<div id="searchicon">		
					</div>

					<nav id="menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav menu top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>

				</div> <?php // END The Inner Header ?> 

				<div class="hero">
					


					<?php // Front Page Title ?>	

						<?php   if ( is_front_page() ) { ?>
						    
						   <h1>Skymouse Studios</h1>

						<? } else { ?>

						    <h1><?php echo get_the_title(); ?></h1>
							<p><?php echo the_field('subheading'); ?></p>

						<?php } ?>

						<!--begin Error 404-->
						<?php   if ( is_404() ) { ?>
						    
						   <h1>Captain, We May Have a problem</h1>
							<h4>Whoops! This page is missing!</h4>

							<p>You 
								<?php
								$adminemail = get_option('admin_email'); #the administrator email address, according to wordpress
								$website = get_bloginfo('url'); #gets your blog's url from wordpress
								$websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

								  if (!isset($_SERVER['HTTP_REFERER'])) {
								    #politely blames the user for all the problems they caused
								        echo "tried going to "; #starts assembling an output paragraph
									$casemessage = "All is not lost!";
								  } elseif (isset($_SERVER['HTTP_REFERER'])) {
								    #this will help the user find what they want, and email me of a bad link
									echo "clicked a link to"; #now the message says You clicked a link to...
								        #setup a message to be sent to me
									$failuremess = "A user tried to go to $website"
								        .$_SERVER['REQUEST_URI']." and received a 404 (page not found) error. ";
									$failuremess .= "It wasn't their fault, so try fixing it.  
								        They came from ".$_SERVER['HTTP_REFERER'];
									mail($adminemail, "Bad Link To ".$_SERVER['REQUEST_URI'],
								        $failuremess, "From: $websitename <noreply@$website>"); #email you about problem
									$casemessage = "An administrator has been emailed 
								        about this problem, too.";#set a friendly message
								  }
								  echo " ".$website.$_SERVER['REQUEST_URI']; ?> 
								and it doesn't exist. <?php echo $casemessage; ?>  You can click back 
								and try again or try going back to our <a href="<?php echo get_home_url(); ?>">home page</a>!
								</p>

						<?php } ?><!--End Error 404-->


						<?php // Blog Post Subtitle ?>
						<?php   if ( is_single() ) { ?>
						    
						    <p class="byline entry-meta vcard">
                    			

                    			<?php 

                    			$toolset_parent = wp_get_post_parent_id( $post_ID );

                    			echo types_render_field( 'professional-title' , array('id'=>'$parent' )); ?>

                  			</p>
						<?php } else { }?>

				</div>

				<a title="Please Scroll Down" href="<?php echo the_permalink(); ?>#promise" rel="nofollow"><img alt="Down Arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/down-arrow.svg"></a>

			</header>
