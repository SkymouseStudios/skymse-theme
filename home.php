<?php get_header(); ?>
	
	<!-- This page is where all the blogposts live. -->
	<div id="page" class="blog-page cf">
	<section>
			<?php
    			$args = array('post_type' => 'post', 'order' => 'ASC');
    			$query = new WP_Query($args);
    			while($query -> have_posts()) : $query -> the_post(); ?>
    			
    			<?php if (has_post_thumbnail($post->ID)) { ?>

                      <?php $image = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
                      
                     <div id="BlogThumbnail" style="background-image: url('<?php echo $image; ?>');">
                     	<h3><?php the_title(); ?></h3>
                     	<h4>by: <?php the_author(); ?></h4>
                     </div>

                      <?php	} ?>

				<?php endwhile; ?>
	</div>
	</section>
<?php get_footer(); ?>
