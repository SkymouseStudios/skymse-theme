<?php get_header(); ?>

	<div id="page" class="contact cf">
		<section class="parallax">
			<aside>
				<div class="content">
					<h3>How to get in touch:</h3>
					<p>We would love to talk to you and find out if we can work together! </p>

					<p>Send us a message here and we will do our best to get back to you as soon as we can!</p>
				</div>
				
			</aside>

		</section>

		<section id="proposal" class="cf">
				
				<aside>
					<p>If you have a project you’d like to talk about or want to get some ideas about how we can help you, 
					fill out this fun little form and we will get back to you as soon as we can!</p>
					
					<img alt="Ready For lift-off!" src="<?php echo get_template_directory_uri(); ?>/library/images/blastoff-rocket.png">

				</aside>

                <aside>
                    
                    <?php get_template_part('library/partials/contact'); ?>
                    
                </aside>

			</section>
		
	</div>

<?php get_footer(); ?>