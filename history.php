<?php /* Template Name: History */
get_header(); ?>

			<div class="content-area">
				<div class="imgWrap">
					<img class="historyImg" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/history.png" alt="History Page Image">					
				</div>
				<div class="main">
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
				</div>
				<!-- <aside> -->
					<!-- OPTIONAL -->
				<!-- </aside> -->
			</div>

<?php get_footer(); ?>