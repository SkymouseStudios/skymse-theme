<?php 
/*
 Template Name: Our Work
*/
 ?>

<!-- Add parallax back in -->
<!-- Add Javascript to allow for slide-over of each section (to show the portfolios) -->

<?php get_header(); ?>

	<div id="page" class="our-work">
		
		<!-- MOTION PROJECTS -->
		<section class="parallax motion cf">
			
			<!-- Section Introducing motion projects -->
			<aside>
				<div class="content left">
					<h3>Motion</h3>
					<p>Move your customers. Make them cry. (tears of joy)</p>
					
					<div id="openButtonMotion" title="See Our Projects">
					<img class="left-open-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/left-arrow.svg"><span>See Motion Projects</span>
					</div>

				</div>
			</aside>

			<!-- BEGIN SLIDER -->
			<div id="slideSectionMotion" class="overlayLeftOff">  
	            <a href="javascript:void(0)" id="closeButtonMotion"><img class="right-close-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/right-arrow.svg"></a>

	            <div class="project" id="Franciscan">
	                <div class="innerProject">
		                <h3>Franciscan University of Steubnville</h3>
		                <p>Animation</p>
	                </div>    
	            </div>
	    
	            <div class="project" id="MesaTec">
	                <div class="innerProject">
		                <h3>Mesa Technical Associates</h3>
		                <p>Promotional Video</p>
		                <a href="https://www.youtube.com/watch?v=2qsuGQd9VFk">Watch Here</a>
	                </div>
	            </div>
	    
	            <div class="project" id="Resource">
	                <div class="innerProject">
		                <h3>Resource Commercial Real Estate</h3>
		                <p>Animation</p>
	                </div>
	            </div>

	            <div class="project" id="Scan">
	                <div class="innerProject">
		                <h3>The Student Creative Arts Network</h3>
		                <p>Audio and Animation</p>
		                <a href="https://www.youtube.com/watch?v=wclmoPGA80c">Watch Here</a>
	            	</div>
	            </div>
        	</div>
        	<!-- END SLIDER -->

		</section>

		<!-- DEVELOPMENT PROJECTS -->
		<section class="parallax dev cf">
			<aside>
				<div class="content left">
					<h3>Development</h3>
					<p>Reach your customers where they are. (On the internet)</p>

					<div id="openButtonDev" title="See Our Projects">
					<img class="left-open-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/left-arrow.svg"><span>See Development Projects</span>
					</div>
				</div>
			</aside>

			<!-- BEGIN SLIDER -->
			<div id="slideSectionDev" class="overlayLeftOff">  
	            <a href="javascript:void(0)" id="closeButtonDev"><img class="right-close-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/right-arrow.svg"></a>

	            <div class="project" id="Man">
	                <div class="innerProject">
		                <h3>Man: The Movie</h3>
		                <p>Website</p>
	                </div>    
	            </div>
	    
	            <div class="project" id="Welch">
	                <div class="innerProject">
		                <h3>Welch Title and Abstract</h3>
		                <p>Website</p>
	                </div>
	            </div>
        	</div>
        	<!-- END SLIDER -->

		</section>

		<!-- DESIGN PROJECTS -->
		<section class="parallax design cf">
			<aside>
				<div class="content right">
					<h3>Design</h3>
					<p>From user experience to customer experience. (Make it beautiful)</p>

					<div id="openButtonDesign" title="See Our Projects">
					<span>See Design Projects</span><img class="left-open-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/right-arrow.svg">
					</div>
				</div>
			</aside>

			<!-- BEGIN SLIDER -->
			<div id="slideSectionDesign" class="overlayRightOff">  
	            <a href="javascript:void(0)" id="closeButtonDesign"><img class="left-close-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/right-arrow.svg"></a>

	            <div class="project" id="Welch">
	                <div class="innerProject">
		                <h3>Welch Abstract and Title</h3>
		                <p>Logo and Brand Development</p>
	                </div>    
	            </div>
	    
	            <div class="project" id="WillysFarm">
	                <div class="innerProject">
		                <h3>Willy's Farm and Cider Mill</h3>
		                <p>Logo and Brand Development</p>
	                </div>
	            </div>
        	</div>
        	<!-- END SLIDER -->

		</section>

		<!-- AUDIO PROJECTS -->
		<section class="parallax audio cf">
			<aside>
				<div class="content right">
					<h3>Audio</h3>
					<p>Listen to your customers, and they will listen to you. (Hopefully)</p>
					
					<div id="openButtonAudio" title="See Our Projects">
					<span>See Audio Projects</span><img class="left-open-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/right-arrow.svg">
					</div>
				</div>
			</aside>

			<!-- BEGIN SLIDER -->
			<div id="slideSectionAudio" class="overlayRightOff">  
	            <a href="javascript:void(0)" id="closeButtonAudio"><img class="left-close-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/left-arrow.svg"></a>

	            <div class="project" id="Resource">
	                <div class="innerProject">
		                <h3>RESOURCE Commercial Real Estate</h3>
		                <p>Soundtrack, sound design and voice over</p>
		                <a href="https://soundcloud.com/user-687707994/rcre-animation-soundtrack">Listen Here</a>
	                </div>    
	            </div>
	    
	            <div class="project" id="MesaTec">
	                <div class="innerProject">
		                <h3>Mesa Technical Associates</h3>
		                <p>Soundtrack and voice over</p>
		                <a href="https://soundcloud.com/user-687707994/mesa-promo-vid-soundtrack">Listen Here</a>
	                </div>
	            </div>
        	</div>
        	<!-- END SLIDER -->

		</section>
				
				
	</div>

<?php get_footer(); ?>