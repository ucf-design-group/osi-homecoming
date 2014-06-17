<?php /* Template Name: Sponsors */

 get_header(); ?>

			<div class="content-area">
				<div class="main"> 
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content', 'page' );
					} ?>
				
					<section class="sponsors">
<?php
						$sponsorsLoop = new WP_QUERY(array('post_type' => 'sponsors', 'posts_per_page' => -1, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'sponsor-form-order'));
						while ($sponsorsLoop->have_posts()) {
							$sponsorsLoop->the_post();
							$title = get_the_title();
							$content = get_the_content();
							$image = get_the_post_thumbnail($post->ID, 'medium');
?>	
						<article class="sponsor">
							<h3><?php echo $title; ?></h3>
							<?php echo $image; ?>
							<p><?php echo $content; ?><p>
						</article>
<?php 				}
?>
					</section>
				</div>
			</div>


<?php get_footer(); ?>