<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

						

					</main>

					<?php // get_sidebar(); ?>

				</div>
						<?php
							$toolset_parent = types_parent_posts("profiles");
			    			$args = array('post_type' => 'profiles', 'order' => 'ASC');
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
										<a href="#">Read My Blog Posts</a>
									</div>
								</aside>
							</section>


							<?php endwhile; ?>
			</div>

<?php get_footer(); ?>
