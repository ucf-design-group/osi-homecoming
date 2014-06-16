<?php /* Template Name: Contact */

get_header(); ?>

			<div class="content-area">
				<div class="main"> 
					<?php
					while (have_posts()) {
						the_post();
						get_template_part( 'content', 'page' );
					} ?>
				</div>
					<section class="exec-board">
						<h2>Homecoming 2014 Executive Board</h2>
<?php
						$leaderLoop = new WP_QUERY(array('post_type' => 'exec-board', 'posts_per_page' => -1, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'leader-form-order'));
						while ($leaderLoop->have_posts()) {
							$leaderLoop->the_post();
							$title = get_the_title();
							$content = get_the_content();
							$image = get_the_post_thumbnail($post->ID, 'thumbnail');
							$position = get_post_meta($post->ID, 'leader-form-position', true);
							$email = get_post_meta($post->ID, 'leader-form-email', true);
							$twitter = get_post_meta($post->ID, 'leader-form-twitter', true);
?>							
						<article class="leader">
							<h3><?php echo $title; ?></h3>
							<?php echo $image; ?>
							<p><?php echo $position; ?></p>
							<a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
							<a class="twitter" href="https://twitter.com/<?php echo $twitter; ?>">@<?php echo $twitter; ?></a>
							<p><?php echo $content; ?></p>
						</article>
<?php 				}
?>
					</section>
				</div>

<?php get_footer(); ?>