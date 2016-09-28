<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lix
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside>

	<?php
        wp_nav_menu(array(
					  'theme_location' => 'left_menu',
					  'container'       => 'aside',
					 /* 'menu_class'      => 'left_menu'*/
					  'menu_class'      => 'left_menu'
				  ));
			?>
 


    <article class="left_article">
        <h2 class="left_aticle__title">Новости</h2>
        <p class="left_article__text">
            Мы рады приветствовать<br>
            Вас на нашем сайте!<br>
            Напишите нам и наши<br>
            специалисты свяжуться<br>
            с Вами в
        </p>

        <!--a class="left_article__link">читать все</a-->


        <ul class="menu_news">
            <li class="menu_news_list">
                <a class="left_article__link" href="#">читать все...</a>
            </li>
        </ul>


    </article>
	
</aside>
