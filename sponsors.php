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
					<section class="sponsor-table">
						<div class="table-holder">
							<div id="firstcol"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend-of-logo.png" alt="Friend of Homecoming!" /></div>	
							<div id="seccol"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight-logo.png" alt="Black Knight!" /></div>	
							<div id="thirdcol"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight-logo.png" alt="Gold Knight!" /></div>
							<div id="fourthcol"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight-logo.png" alt="Ultimate Knight!" /></div>
							<br />
							<table>
								<tr class="shader">
									<td class="wide-cell"><p>Donation amount</p></td>
									<td><span class="pricing">$500-1000</span></td>
									<td><span class="pricing">$2500</span></td>
									<td><span class="pricing">$5000</span></td>
									<td><span class="pricing">$10,000</span></td>
								</tr>
								<tr>
									<td class="wide-cell"><p>Event(s) Advertising</p></td>
									<td><span class="title">Select One: </span><ul><li>Movie Knight</li><li>or</li><li>Skit Knight</li><li>or</li><li>Service Day</li></ul></td>
									<td><span class="title">Select One: </span><ul><li>Comedy Knight</li><li>or</li><li>Special Event</li></ul></td>
									<td><span class="title">Select One: </span><ul><li>Concert Knight</li><li>or</li><li>Spirit Splash</li></ul></td>
									<td><span class="title">All Events: </span><ul><li>Movie Knight</li><li>and</li><li>Skit Knight</li><li>and</li><li>Comedy Knight</li><li>and</li><li>Concert Knight</li><li>and</li><li>Spirit Splash</li><li>and</li><li>Service Day</li></ul></td>
								</tr>
								<tr class="shader">
									<td class="wide-cell"><p>Name/Logo on Homecoming website/Facebook <br />(over 10,000 followers)</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr>
									<td class="wide-cell"><p>Company banner displayed at event(s)*</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr class="shader">
									<td class="wide-cell"><p>Name/logo displayed on video screens/announced during event(s)</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<!-- <tr>
									<td class="wide-cell"><p>Complimentary entry into the Homecoming parade <br />($50 value)</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr> -->
								<tr>
									<td class="wide-cell"><p>Name/logo displayed on event(s) print advertising</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr class="shader">
									<td class="wide-cell"><p>Name/logo on Spirit Splash shirt <br />(approx 5,000 produced)</p></td>
									<td></td>
									<td></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr>
									<td class="wide-cell"><p>Name/logo on official Homecoming shirt <br />(approx 5,000 produced)</p></td>
									<td></td>
									<td></td>
									<td></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr class="shader">
									<td class="wide-cell"><p>Promotional video to play at event(s)**</p></td>
									<td></td>
									<td></td>
									<td></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr>
									<td class="wide-cell"><p>Name/logo on promotional items***</p></td>
									<td></td>
									<td></td>
									<td></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
								<tr class="shader">
									<td class="wide-cell"><p>Oppurtunity to reach nearly 60,000 students at the second largest university in the nation!</p></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/friend.png" alt="Friend of Homecoming" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/black-knight.png" alt="Black Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/gold-knight.png" alt="Gold Knight" /></td>
									<td><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/table/ultimate-knight.png" alt="Ultimate Knight" /></td>
								</tr>
							</table>
						</div>
						<sub>
							* Business must provide banner.
							<br />** Business must create video.
							<br />*** Promotional items allotted where space allowed.
						</sub>
					</section>
				</div>
			</div>


<?php get_footer(); ?>