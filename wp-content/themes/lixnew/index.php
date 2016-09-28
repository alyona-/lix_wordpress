<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Сайт главная страница</title>
    <!--link rel="stylesheet" type="text/css" href="main_css.css"-->
    <link rel="stylesheet" type="text/css" href="<?php blockinfo('styleshelf_url')?>">
</head>
<body>

<header>
    <div class="header_up"></div>
    <div class="header_block">
        <img src="../img/logo.png" alt="logo" class="header_img">
        <h1 class="header_title">
            <span class="logo_title_red">крымский центр</span><br>
            <span class="logo_title_black">ООО "Компания Ликс"</span>
        </h1>


        <p class="header_phone">
            <span class="phone_1">+7(978)228-78-39</span><br>
            <span class="phone_2">+7(978)760-17-13</span><br>
            <span class="phone_3">+7(978)760-17-08</span>
        </p>
    </div>
    <div class="header_footer">
        <ul class="header_menu">
            <li class="header_menu__li">
                <a href="all.html" class="header_menu_link">Главная</a>
            </li>
            <li class="header_menu__li">
                <a href="forms_page_all.html" class="header_menu_link">Продукция</a>
            </li>
            <li class="header_menu__li">
                <a href="all_contacts.html" class="header_menu_link">Контакты</a>
            </li>
        </ul>

    </div>



</header>


<div  class="page">
<!--Левая часть-->
<aside>
    <ul class="left_menu">
        <li class="left_menu__li">
            <a href="#" class="left_menu_link">Форма</a>
        </li>
        <li class="left_menu__li">
            <a href="#" class="left_menu_link">Спецодежда</a>
        </li>
        <li class="left_menu__li">
            <a href="#" class="left_menu_link">Спецобувь</a>
        </li>
        <li class="left_menu__li">
            <a href="#" class="left_menu_link">
                <span class="protection">Средства</span>
                <span class="protection">индвидуальной</span>
                <span class="protection">защиты</span></a>
        </li>
        <li class="left_menu__li">
            <a href="#" class="left_menu_link">
                <span class="protection" >средства быстрой</span>
                <span class="protection" >помощи</span></a>
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
                <a class="left_article__link">читать все...</a>
            </li>
        </ul>


    </article>
</aside>




<!--Контент-->
<div class="content">
    <div class="content_up">
        <h1 class="content_up__text">
            <span class="content_logo">качество.</span>
            <span class="content_logo">надежность.</span>
            <span class="content_logo">сервис.</span>
        </h1>
        <img class="content_up__img" all="контент изображение" src="../img/content.png">

    </div>
    <div class="content_down">
        <h3 class="content_down__title">О компании</h3>
        <p class="content_down__text">Вся наша работа направлене на то, чтобы предлагать вам качественные комплексные решения в области
            охраны труда. Охрана труда сегодня - это не только забота о здоровье и защита от профессиональных рисков,
            но и средство повышения производительности труда и лояльности сотрудников к компании, в которой
            они работают.</p>
        <p class="content_down__text">Высокое качество производительности продукции, инновационные решения, применяемые в её производстве, забота
            о клиенте и чуткое реагирование на его запросы - это приоритеты в нашей работе. Вся наша продукция
            сертифицирована на соответствие ГОСТам и соответствует требованиям охраны труда.</p>
        <p class="content_down__text">Свою безопасность нам доверяют как крупные корпорации федерального масштаба, так и компании среднего и малого бизнеса, а
            также розничные покупатели. Всем нашим клиентам мы предлагаем широкий спектр услуг, таких как изготовление одежды по спецзаказу,
            разработка фирменного стиля, нанесение логотипов. Для нас важно не только качество реализуемой продукции, но и комплексный сервис
            для клиента, нацеленный на долгосрочные отношения.</p>
    </div>
</div>

</div>


<!--Подвал-->
<footer>
    <div class="footer_1">
        <img src="../img/footer_logo.png" class="footer_logo" alt="подвал лого">
        <div>
            <a class="footer__icon footer__icon_1" href="#"></a>
            <a class="footer__icon footer__icon_2" href="#"></a>
            <a class="footer__icon footer__icon_3" href="#"></a>
            <a class="footer__icon footer__icon_4" href="#"></a>
            <a class="footer__icon footer__icon_5" href="#"></a>
        </div>

        <p class="footer_text">
            <span class="footer__text_span">295005, Республика Крым</span>
            <span class="footer__text_span">г. Симферополь</span>
            <span class="footer__text_span">ул. Гагарина 14а, офис 101</span>
        </p>
    </div>

    <div class="footer_2">
        <span>Design by</span>
        <span>lixcompany@mail.ru</span>
    </div>

</footer>




</body>
</html>