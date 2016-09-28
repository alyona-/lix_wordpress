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
    <title>Сайт главная страница</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_directory"); ?>/new_forms_style.css">
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
        <!--ul class="header_menu" id="additionalmenu">
            <li class="header_menu__li">
                <a href="all.html" class="header_menu_link">Главная</a>
            </li>
            <li class="header_menu__li">
                <a href="forms_page_all.html" class="header_menu_link">Продукция</a>
            </li>
            <li class="header_menu__li">
                <a href="all_contacts.html" class="header_menu_link">Контакты</a>
            </li>
			 </ul-->
			<?php 
					wp_nav_menu(array(
					  'theme_location' => 'header_menu',
					  'container'       => 'div',
					  'container_class' => 'header_footer',
					  'menu_class'      => 'header_menu'
				  ));				
			?>

       



        <!--?php wp_nav_menu('primary'); ?-->

    </div>



</header>
