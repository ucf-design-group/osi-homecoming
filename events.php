<?php /* Template Name: Events */

get_header(); ?>

			<div class="content-area">
				<div class="main">
					<section class="importantevents">
<!-- Loop for Super Important Events -->
<?php
						$counter = 0;
						$eventLoop = new WP_QUERY(array('post_type' => 'osi-events', 'posts_per_page' => 2, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'oe-form-start', 'category_name' => 'superimportant'));
						while ($eventLoop->have_posts()) {
							$eventLoop->the_post();
							$title = get_the_title();
							$start = get_post_meta($post->ID, 'oe-form-start', true);
							$end = get_post_meta($post->ID, 'oe-form-end', true);
							$content = get_the_content();
							$link = get_post_meta($post->ID, 'oe-form-url', true);
							$image = get_the_post_thumbnail($post->ID, 'medium');
							$image_url = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');

							if ($end == "none")
								$dates = date('l F jS, g:ia', $start);
							else if (date('F j', $start) == date('F j', $end))
								$dates = date('l F jS, g:ia', $start) . " - " . date('g:ia', $end);
							else
								$dates = date('F jS, g:ia', $start) . " to " . date('F jS, g:ia', $end);
?>	
						<article class="importantevent" style="background-image: url('<?php echo $image_url[0]; ?>') ">
							<div class="importanteventtop">
								<h3><?php echo $title; ?></h3>
								<h4><?php echo $dates; ?></h4>
							</div>
							<div class="moreinfo moreinfo--l">
								<span class="arrowspan"><i class="fa fa-arrow-circle-up"></i></span>
								<div class="importanteventbottom">
									<a class="img fancybox" href="<?php echo $image_url[0]; ?>"><?php echo $image; ?></a>
									<div class="importanteventdescription">
										<p><?php echo $content; ?></p>
									</div>
	<?php
										if ($link != "") {
	?>
										<div class="button button--dark"><a href="<?php echo $link; ?>" target="_blank">Purchase Tickets HERE</a></div>
										<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-type="button"></div>
	<?php				}
	?>
								</div>
							</div>
						</article>
<?php
						$counter++;
					}

					if ($counter == 0) {
?>
						<p>There are no events to display... yet.</p>
	<?php
					}
	?>
					</section>
<!-- Loop for Uncategorized -->
					<section class="events">
<?php
						$counter = 0;
						$eventLoop = new WP_QUERY(array('post_type' => 'osi-events', 'posts_per_page' => -1, 'orderby' =>'meta_value', 'order' => 'ASC', 'meta_key' => 'oe-form-start', 'category_name' => 'uncategorized'));
						while ($eventLoop->have_posts()) {
							$eventLoop->the_post();
							$title = get_the_title();
							$start = get_post_meta($post->ID, 'oe-form-start', true);
							$end = get_post_meta($post->ID, 'oe-form-end', true);
							$content = get_the_content();
							$link = get_post_meta($post->ID, 'oe-form-url', true);
							$image = get_the_post_thumbnail($post->ID, 'medium');
							$image_url = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full');

							if ($end == "none")
								$dates = date('l F jS, g:ia', $start);
							else if (date('F j', $start) == date('F j', $end))
								$dates = date('l F jS, g:ia', $start) . " - " . date('g:ia', $end);
							else
								$dates = date('F jS, g:ia', $start) . " to " . date('F jS, g:ia', $end);
?>	
						<article class="event" style="background-image: url('<?php echo $image_url[0]; ?>') ">
							<div class="eventtop">
								<h3><?php echo $title; ?></h3>
								<h4><?php echo $dates; ?></h4>
							</div>
							<div class="moreinfo moreinfo--s">
								<span class="arrowspan"><i class="fa fa-arrow-circle-up"></i></span>
								<div class="eventbottom">
								<p><?php echo $content; ?></p>
	<?php
								if ($link != "") {
	?>
								<p><a href="<?php echo $link; ?>" target="_blank">Purchase Tickets HERE</a></p>
								<div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-type="button"></div>
	<?php				}
	?>
							</article>
	<?php
							$counter++;
						}

						if ($counter == 0) {
	?>
							<p>There are no events to display... yet.</p>
		<?php
						}
		?>
								</div>
							</div>
					</section>
				</div>
			</div>



<?php get_footer(); ?>