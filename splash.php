<?php /* Template Name: Splash */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"  />
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<script type="text/javascript">
			sourceArray = [
			{
				source:'<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.webm',
				type: 'video/webm'
			},
			{
				source: '<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.mp4',
				type: 'video/mp4'
			}]

		</script>
	</head>
	<body class="page-splash">
		<div class="content-area">
			<div class="splash-background">
				<video id="bgvid" class="bgvid" autoplay loop poster="<?php echo get_stylesheet_directory_uri(); ?>/resources/spirit.jpg">
				</video>
			</div>
			<div class="countdown-timer">
				<div id="days"></div>
				<div id="hours"></div>
				<div id="minutes"></div>
				<div id="seconds"></div>
				<h1>Until Homecoming</h1>
			</div>
			<div class="button button--dark"><a href="http://osi.ucf.edu/homecoming/home">Continue to Homepage</a></div>
			<div class="splash-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/logo.png"></div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	</body>
</html>