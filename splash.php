<?php /* Template Name: Splash */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	</head>
	<body>
		<div class="content-area">
			<div class="main"> 
				<?php
				while (have_posts()) {
					the_post();
					get_template_part( 'content', 'page' );
				} ?>
			</div>
				<video autoplay loop poster="<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.png" id="bgvid">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.mp4" type="video/mp4">
				</video>

				<div class="countdown-timer">
					<div id="days"></div>
					<div id="hours"></div>
					<div id="minutes"></div>
					<div id="seconds"></div>
					<h1>Until Homecoming</h1>
				</div>
		</div>
	<footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	</footer>
	</body>
</html>