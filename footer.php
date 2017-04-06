			<!-- Convert the Nav to a wordpress nav-->
			
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
					
				<a href="<?php echo home_url(); ?>" rel="nofollow">
				<img class="footer-logo" alt="Skymouse Studios Logo" src="<?php echo get_template_directory_uri(); ?>/library/images/skymse-logo.svg"></a>
					
				<!-- This needs to be converted to a real-live Wordpress Navigation system. I am just imtimdated. -->
				<nav class="footer">
				
						<div class="social-media">
					<ul>
							<li><a href="https://bit.ly/skyBook" class="social-icon"> <i class="fa fa-facebook"></i>
							</a></li>
							<li><a href="https://bit.ly/skyGram" class="social-icon"> <i class="fa fa-instagram"></i>
							</a></li>
							<li><a href="https://bit.ly/skyTweets" class="social-icon"> <i class="fa fa-twitter"></i>
							</a></li>
							<li><a href="https://bit.ly/skyLinkedIn" class="social-icon"> <i class="fa fa-linkedin"></i>
							</a></li>
							<li><a href="https://bit.ly/skyGoogle" class="social-icon"> <i class="fa fa-google-plus"></i>
							</a></li>
						</ul>
					</div>
				
				</nav>
				<!-- End imposter navigation -->

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<div class="info">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?>&nbsp;Skymouse Studios, LLC</p>

					<ul>
						<li>
							<a title="Privacy" href="/index.php/privacy">Privacy</a>
						</li>
						<li>
							<a title="Help" href="/index.php/help">Help</a>
						</li>
					</ul>	
					</div>

				</div>
 
			</footer> <!-- END The footer -->

		</div> <!-- END The container -->			

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
		<?php include_once("library/partials/analyticstracking.php"); ?>

	</body>

</html> <!-- end of site. what a ride! -->
