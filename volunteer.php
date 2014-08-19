<?php /* Template Name: Volunteer */

get_header(); ?>

			<div class="content-area">
				<div class="main">
					<div class="imgWrap">
						<img class="historyImg" src="<?php echo get_stylesheet_directory_uri(); ?>/resources/volunteer.png" alt="History Page Image">					
					</div>
					<div class="descriptionWrap">
						<h1>KNIGHTRO WANTS YOU</h1>
						<h2>To Volunteer For Homecoming.</h2>
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content' );
					} ?>
					</div>
				</div>
				<!-- <aside> -->
					<!-- OPTIONAL -->
				<!-- </aside> -->
			</div>

<?php get_footer(); ?>