<?php get_header(); ?>

	<div id="page" class="about">

		<!-- Each Section In here should be converted to PHP Fields and Queries -->
		<!-- Add a "join the team" section in here -->
		<!-- Add Parallax (was taken away for now as well to streamline the process) -->
		<!-- Add a mailchimp pop-up when you hit the subscribe button -->
		
		<!-- THE PAST -->
		<section class="past cf">
			<aside class="left">
				<div class="content">
					<h3>A Brief History</h3>
					<h4>Boys will become men.</h4>
					<p>Everyone and their mother can use photoshop. Anyone can slap a Wordpress template up in the internet. There are too many “companies” that make money off mediocrity.  It’s our goal to change all that.
					</p>
					<p>In the hot summer of 2015, two friends went on a road trip across the country in a 1989 Toyota Corolla. On that trip we talked about everything we loved doing, the things the world was doing wrong and how we wanted to provide solutions that people would love. At our old jobs we were shocked at how many media firms were selling crappy designs and charging an arm and a leg for it! Utter robbery! We realized all we needed was a name and eight hours later Skymouse was born. (SkyRat just wasn’t as catchy.)</p>
					<p>We moved out to Indianapolis and lived in a small dark apartment together and didn’t get much work done. But we argued a lot and talked about how cool we were. Wives were found, and money needed to be made so we finally buckled down and started doing cool stuff that actually got us places.</p>
				</div>
			</aside>
		</section>

			<!-- THE PRESENT -->
			<section class="present cf">
				<aside class="right">
					<div class="content">
						<h3>The Present</h3>
						<h4>We are on a mission.</h4>
						<p>Every project is different and has new, exciting challenges. We love what we do and we try to share it with anyone who will listen. Check out some of our past projects here. You can also follow the action (almost) live on one of our social media accounts.</p>
						<p>	
						We love our families and our friends and are always trying to help the people that we work with and interact with. We may not be saving lives, but we can definitely make people’s lives easier and (hopefully) happier.
						</p>
						<p>
						If you want to get updates to what we are doing and what we are up to subscribe to our newsletter > Sarcastic yet surprisingly educational emails right to your inbox.
						</p>
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
							<form action="//SkymouseStudios.us14.list-manage.com/subscribe/post?u=5fc6a176308c70d104c908aac&amp;id=8b5af5eabf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							    <div id="mc_embed_signup_scroll">
									<label for="mce-EMAIL">Subscribe to our annoying emails...</label>
									<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
								    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5fc6a176308c70d104c908aac_8b5af5eabf" tabindex="-1" value=""></div>
								    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							    </div>
							</form>
						</div>
						<!-- End MailChimp Signup Form -->
						<p>Everything we do, we want to do better. </p>

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

					</div>
				</aside>
			</section>
			

			<!-- THE FUTURE -->
			<section class="parallax future cf">
				<aside class="left">
					<div class="content">
						<h3>The Future.</h3>
						<h4>We have big plans.</h4>
						<p>We want to do great things. We have so many ideas and dreams, some crazy, others not to far off into the future. For us, Skymouse isn’t just where we work–it’s a lifestyle. We are craftsman and as long as we are crafting something, we are happy. We love entertainment and are always trying to find new ways to keep people entertained, including ourselves. No matter what, family comes first and we are just trying to make our way through the universe to provide the best we have to offer. We want to be proud of what we do. Our wives demand it.</p>
						<ul>
						<li>+	Full Audio Studio</li>
						<li>+	Television Shows approproate for our kids</li>
						<li>+	Have 8 kids each (That’s 16 kids total)</li>
						<li>+	A private jet would be cool</li>
						<li>+	Keeping our wives happy</li>
						<li>+	Start a indie-rock band</li>
						<li>+	Write books about how we keep failing</li>
						<li>+	Make a cooking show. We love food.</li>
						<li>+	A coffee shop with phenom coffee</li>
						<ul>
					</div>
				</aside>
			</section>
	
			<!-- Eventual PHP Query for Showing all the profiles of company memebers -->
				<!-- Set up past three blog posts to be queries and displayed -->
				<!-- Set up a link to the author's post archive -->
				<!-- Set up output for showing social media links and info -->

			<?php
    			$args = array('post_type' => 'profile', 'order' => 'ASC');
    			$query = new WP_Query($args);
    			while($query -> have_posts()) : $query -> the_post(); ?>
    			

    			<section class="parallax profile <?php echo(types_render_field( "background-color", array( 'raw' => true) )); ?> cf">
					<aside class="<?php echo(types_render_field( "picture-alignment", array( 'raw' => false) )); ?>">
						<div class="profile-pic" style="background-image: url('<?php echo(types_render_field( "profile-picture", array( 'raw' => true) )); ?>');">
						</div>
					</aside>

					<aside class="<?php echo(types_render_field( "picture-alignment", array( 'raw' => false) )); ?>">
						<div class="content">
							<h3><?php the_title(); ?></h3>
							<h4><?php echo(types_render_field( "professional-title", array( 'raw' => true) )); ?></h4>
							<p><?php echo(types_render_field( "profile-description", array( 'raw' => false) )); ?>
							</p>
							<div class="social-media">
								<ul>
									<li><a href="<?php echo(types_render_field( "profile-twitter", array( 'raw' => true) )); ?>" class="social-icon"> <i class="fa fa-twitter"></i>
									</a></li>
									<li><a href="<?php echo(types_render_field( "profile-linkedin", array( 'raw' => true) )); ?>" class="social-icon"> <i class="fa fa-linkedin"></i>
									</a></li>
									</ul>
							</div>
						</div>
					</aside>
				</section>
				<?php endwhile; ?>
				<!-- End Profile query -->			
	</div>

<?php get_footer(); ?>