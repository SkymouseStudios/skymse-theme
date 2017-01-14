<?php get_header(); ?>

		<div id="page">	
			
			
			<!-- #1 The Promise: What we do for our customers and the value that it brings them .....................-->

			<section id="promise" class="cf">
				
				<!-- PARALLAX Way Front -->
				<aside class="px-fore">
					<div class="content">
						<h2>Skymouse helps you tell stories, design better, and develop a brand people love. When people love your brand they give you money.</h2>
						<p>Everyone and their mother can use photoshop. Anyone can build a Wordpress template. We build beautiful brands that work. There are too many “companies” that make money off mediocrity. It’s our goal to change all that.</p>
					</div>
				</aside>
				
				<!-- PARALLAX Front -->
				<div class="terrain px-base"></div>
				
				<!-- PARALLAX Back -->
				<div class="sky-cheese px-back"></div>

				<!-- PARALLAX Far Back -->
				<div class="sky px-deep"></div>
			</section>

			<section id="process" class="cf">
				<div class="top">
					<div class="brand-experience">
						<h3>What is a Brand?</h3>
						<p>A brand isn’t just a logo and custom-made coffee mugs. Show your customers that you have exactly what they need. Help them experience your brand. Here's how we can do that together:</p>
					</div>
				</div>
				
				<aside>
				<img alt="Story" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon_Story.svg">
					<div class="story">
						<h3>Story</h3>
						<p>There should be a natural flow to every customer’s journey. (Spoiler: You’re in one now.) Is your story a clear aspect of your brand? </p>
					</div>
				</aside>
				
				<aside>
					<img alt="Design" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon_Design.svg">
					<div class="design">
						<h3>Design</h3>
						<p>People go on and on about design. What is it? It's how your customers see you. Design should be a visual representation of your story (see first point). Don’t use cover-up when you can get a face-lift.</p>
					</div>	
				</aside>
				
				<aside>
					<img alt="Function" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/icon_Function.svg">
					<div class="function">
						<h3>Function</h3>
						<p>Intuitive. Easy to use. Great services and amazing products mean nothing if people don’t understand your brand. Don’t be a bike with no wheels or a website with no scroll-bar.</p>
					</div>
				</aside>

			</section>

			<section id="proof" class="cf">
				<aside>
					<div class="motion">
						<div class="overlay">
						<h3>Motion</h3>
						<a class="btn" title="Read the Case Study" href="http://skymse.com/wp-content/uploads/2016/11/CS-Mesa-Tec.pdf">Read the Case Study</a>
						<img alt="Motion Rocket" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/motion-rocket.png">
						</div>
					</div>

				</aside>
				
				<aside>
					<div class="audio">
					<div class="overlay">
						<h3>Audio</h3>
						<a class="btn" title="Read the Case Study" href="http://skymse.com/wp-content/uploads/2016/11/CS-RCRE.pdf">Read the Case Study</a>
						<img alt="Audio Balloon" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/audio-balloon.png">
					</div></div>
				</aside>

				<aside>
					<div class="design">
						<div class="overlay">
							<h3>Design</h3>
							<a class="btn" title="Read the Case Study" href="http://skymse.com/wp-content/uploads/2016/11/CS-Welch.pdf">Read the Case Study</a>
							<img alt="Design Blimp" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/design-blimp.png">
						</div>
					</div>
				</aside>
				
				<aside>
					<div class="development">
						<div class="overlay">
							<h3>Development</h3>
							<a class="btn" title="Read the Case Study" href="http://skymse.com/wp-content/uploads/2016/11/CS-Welch.pdf">Read the Case Study</a>
							<img alt="Development Jet" src="<?php echo get_template_directory_uri(); ?>/library/images/icons/development-jet.png">
						</div>
					</div>	
				</aside>

				<div class="our-work">
					<a class="no-border-btn" title="See Our Work" href="/index.php/our-work">Check Out Our Work&nbsp;&nbsp;></a>
				</div>
			</section>

			<section id="proposal" class="cf">
				
				<aside>
					<h4>Got a project?</h4>
					<p>We can help. Fill out this quick form. It’s like ad-libs but it actually gets you places.</p>
					<img alt="Ready For lift-off!" src="<?php echo get_template_directory_uri(); ?>/library/images/blastoff-rocket.png">

				</aside>

				<aside>

					<?php get_template_part('library/partials/contact'); ?>
		
				</aside>
			</section>
		</div>

<?php get_footer(); ?>

