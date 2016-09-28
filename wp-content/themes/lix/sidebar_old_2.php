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
    <ul class="left_menu">
        <li>
            <label for="trigger1">Форма</label>
            <input type="checkbox" id="trigger1" class="trigger"/>
            <ul class="sub-menu">
                <li><a href="">Коллекция Business class</a></li>
                <li><a href="">Форменные костюмы и пальто</a></li>
                <li><a href="">Сорочки и блузки</a></li>
                <li><a href="">Форменная обувь</a></li>
                <li><a href="">Аксессуары</a></li>
                <li><a href="">Корпоративная одежда на заказ</a></li>
            </ul>
        </li>

        <li>
            <label for="trigger2">Спецодежда</label>
            <input type="checkbox" id="trigger2" class="trigger"/>
            <ul class="sub-menu">
                <li><a href="">Летняя спецодежда</a></li>
                <li><a href="">Утепленная спецодежда</a></li>
                <li><a href="">Сигнальная одежда</a></li>
                <li><a href="">Одежда для охранных структур</a></li>
                <li><a href="">Одежда из огнестойких тканей</a></li>
                <li><a href="">Одежда из антистатической ткани</a></li>
                <li><a href=""><a href="">Одежда для защиты от химических воздействий</a></li>
                <li><a href=""><a href="">Защитная одежда для лесорубов</a></li>
                <li><a href="">Одежда для защиты от воздействия электрической дуги</a></li>
                <li><a href="">Влагозащитная одежда</a></li>
                <li><a href="">Одежда для медицинских работников</a></li>
                <li><a href="">Спецодежда для обслуживающего персонала</a></li>
                <li><a href="">Халаты</a></li>
                <li><a href="">Белье нательное</a></li>
                <li><a href="">Трикотаж</a></li>
                <li><a href="">Спецодежда на заказ</a></li>
                <li><a href="">Аксессуары</a></li>
            </ul>
        </li>

        <li>
            <label for="trigger3">Спецобувь</label>
            <input type="checkbox" id="trigger3" class="trigger"/>
            <ul class="sub-menu">
                <li><a href="">Летняя и демисезонная спецобувь</a></li>
                <li><a href="">Зимняя спецобувь</a></li>
                <li><a href="">Спецобувь ПВХ, резиновая</a></li>
                <li><a href="">Серия Неогард-Лайт® с композитным подноском</a></li>
                <li><a href="">Серия «Капитан»</a></li>
                <li><a href="">Серия Неогард® с композитным подноском</a></li>
                <li><a href="">Серия Техногард®</a></li>
                <li><a href="">Серия «Кофра»</a></li>
                <li><a href="">Серия Pezzol</a></li>
                <li><a href="">Серия Uvex</a></li>
                <li><a href="">Серия «Нитрил»</a></li>
                <li><a href="">Серия «Стандарт»</a></li>
                <li><a href="">Серия «Дельта»</a></li>
                <li><a href="">Защитная обувь больших размеров</a></li>
            </ul>
        </li>

        <li>
            <label for="trigger4">Средства<br> индивидуальной<br> защиты</label>
            <input type="checkbox" id="trigger4" class="trigger"/>
            <ul class="sub-menu">
                <li><a href="">Средства защиты рук</a></li>
                <li><a href="">Средства защиты органов зрения</a></li>
                <li><a href="">Средства защиты органов дыхания</a></li>
                <li><a href="">Средства защиты от падения с высоты</a></li>
                <li><a href="">Средства защиты органов слуха</a></li>
                <li><a href="">Средства защиты головы</a></li>
                <li><a href="">Средства защиты кожи</a></li>
                <li><a href="">Фартуки, нарукавники, бахилы</a></li>
                <li><a href="">Газоанализаторы</a></li>
            </ul>
        </li>

        <li>
            <label for="trigger5">Средства быстрой<br> помощи</label>
            <input type="checkbox" id="trigger5" class="trigger"/>
            <ul class="sub-menu">
                <li><a href="">Cредства для промывания глаз PLUM</a></li>
                <li><a href="">Система быстрой помощи QuickFix Plum</a></li>
                <li><a href="">Аптечки медицинские</a></li>
                <li><a href="">Стенд экстренной помощи</a></li>
            </ul>
        </li>
    </ul>


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
