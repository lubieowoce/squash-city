<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Squash City</title>
	<link type="text/plain" rel="author" href="http://domain/humans.txt" />


	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/scss/app.css" type="text/css" media="screen" />

	<!-- Open Sans -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- Material Design Icons -->
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr.js"></script>

	<?php wp_head(); ?>
</head>
<body>
<?php get_template_part('navbar') ?>