<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lix
 */

?>
	<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ООО "Компания Ликс"</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/main_css.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/cssmenu/styles.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	    <script src="<?php bloginfo("template_directory"); ?>/js/jquery-3.1.0.min.js"></script>
		
		<script src="<?php bloginfo("template_directory"); ?>/js_menu/jquery.cookie.js"></script>
		<script src="<?php bloginfo("template_directory"); ?>/js_menu/jquery.dcjqaccordion.2.9.js"></script>
		<script src="<?php bloginfo("template_directory"); ?>/js_menu/jquery.hoverIntent.minified.js"></script>

	
	
	
</head>
<body>

<header>
    <div class="header_up"></div>
    <div class="header_block">
        <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="logo" class="header_img">
        <h1 class="header_title">
            <span class="logo_title_red"><?php bloginfo('description'); ?></span><br>
            <span class="logo_title_black"><?php bloginfo('name'); ?></span>
        </h1>
		<p class="header_phone">
            <?php echo get_custom('phone'); ?>
        </p>
		
    </div>
    <div class="header_footer">
			<?php 
					wp_nav_menu(array(
					  'theme_location' => 'header_menu',
					  'container'       => 'div',
					  'container_class' => 'header_footer',
					  'menu_class'      => 'header_menu'
				  ));				
			?>

    </div>



</header>
