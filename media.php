<?php /* Template Name: Media */

get_header(); ?>

			<div class="content-area">
				<div class="main"> 
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>

				<section class="photos">
<?php
						$albumloop = new WP_QUERY(array('post_type' => 'fb-albums', 'posts_per_page' => -1, 'orderby' =>'date', 'order' => 'DESC'));
						while ($albumloop->have_posts()) {
							$albumloop->the_post();
							$title = get_the_title();
							$albumid = get_post_meta($post->ID, 'album-form-id', true);
							$albumlink = get_post_meta($post->ID, 'album-form-link', true);
?>	
						<article class="album">
							<!-- <h3><?php echo $title; ?></h3> -->
							<?php echo do_shortcode('[fbalbum url="' . $albumlink . '" limit=36]'); ?>
							<a href="<?php echo $albumlink; ?>">See More on Facebook &#x279c;</a>
						</article>
<?php 				}
?>
					</section> 
			
			</div>

<?php get_footer(); ?>