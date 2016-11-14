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

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	
	<!-- GOOGLE ANALYTICS SCRIPT -->
	<?php include_once("analyticstracking.php") ?>

		<div id="container">

			<!-- Conditional Statement for a background image -->
			<?php if (has_post_thumbnail($post->ID)) { ?>

                  <?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
                  <header class="header" style="background:rgba(0,0,0,.40);" role="banner" itemscope itemtype="http://schema.org/WPHeader">
                 

                 <div class="bg-image" style="background-image: url('<?php echo $image; ?>');"></div>
                  <?php } else { ?>

                  <header class="header <?php echo the_field('background_color'); ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">

                  <?php	} ?>

			
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

				</div> <!-- END The Inner Header -->

				<div class="hero">
					


					<?php // IF THIS IS A BLOG POST ?>	

						<?php   if ( is_front_page() ) { ?>
						    
						   <h1>Skymouse</h1>
							<h4>Studios</h4>

						<? } else { ?>

						    <h1><?php echo get_the_title(); ?></h1>
							<p><?php echo the_field('subheading'); ?></p>

						<?php } ?>

						<?php   if ( is_single() ) { ?>
						    
						    <p class="byline entry-meta vcard">
                    			

                    			<?php 

                    			$toolset_parent = wp_get_post_parent_id( $post_ID );

                    			echo types_render_field( 'professional-title' , array('id'=>'$parent' )); ?>



                  			</p>
        
						<?php } else { }?>

				</div>

				<a title="Please Scroll Down" href="<?php echo home_url(); ?>/#" rel="nofollow"><img alt="Down Arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/down-arrow.svg"></a>

			</header>
