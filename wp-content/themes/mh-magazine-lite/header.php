<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<header class="header-wrap">
	<?php mh_logo(); ?>
	<nav class="main-nav clearfix">
		<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
	</nav>
</header>