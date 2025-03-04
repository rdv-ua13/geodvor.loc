<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }
            .ready {
                color: forestgreen;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img src="img/logo.svg" width="180" height="50" alt="Логотип компании">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">21 + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">29 + ui (всего страниц в макете)</span>
        </span>
    </div>

    <div>
        <ul>
            <li><a class="ready" href="index.php" target="_blank">Главная</a></li>
            <br>

            <li><a class="ready" href="catalog.php" target="_blank">Каталог - Верхний уровень</a></li>
            <li><a class="ready" href="catalog-category.php" target="_blank">Каталог - Категория каталога</a></li>
            <li><a class="ready" href="search-result.php" target="_blank">Результаты поиска</a></li>
            <li><a class="ready" href="card-detail.php" target="_blank">Карточка товара</a></li>
            <br>

            <li><a class="ready" href="cart.php" target="_blank">Корзина</a></li>
            <li><a class="ready" href="cart-empty.php" target="_blank">Корзина пуста</a></li>
            <br>

            <li><a class="ready" href="order.php" target="_blank">Оформление заказа</a></li>
            <li><a class="ready" href="order-confirm.php" target="_blank">Подтверждение заказа</a></li>
            <li><a class="ready" href="order-confirm-company.php" target="_blank">Подтверждение заказа (Юр. лица)</a></li>
            <br>

            <li><a class="ready" href="pa-orders.php" target="_blank">ЛК - Заказы</a></li>
            <li><a class="ready" href="pa-orders-menu-mobile.php" target="_blank">ЛК - Меню мобильное</a></li>
            <br>

            <li><a class="ready" href="cp-contacts.php" target="_blank">Контентная страница - Контакты</a></li>
            <li><a class="ready" href="cp-payment.php" target="_blank">Контентная страница - Оплата</a></li>
            <li><a class="ready" href="cp-delivery.php" target="_blank">Контентная страница - Доставка</a></li>
            <li><a class="ready" href="cp-about.php" target="_blank">Контентная страница - О нас</a></li>
            <li><a class="ready" href="cp-wholesale.php" target="_blank">Контентная страница - Оптовым покупателям</a></li>
            <li><a class="ready" href="cp-questions.php" target="_blank">Контентная страница - Вопросы покупателей</a></li>
            <li><a class="ready" href="cp-solutions.php" target="_blank">Контентная страница - Готовые решения</a></li>
            <li><a class="ready" href="cp-adviсe.php" target="_blank">Контентная страница - Полезные советы</a></li>
            <li><a class="ready" href="cp-services.php" target="_blank">Контентная страница - Услуги</a></li>

            <?/*
            <li><a href="card-product.php" target="_blank" class="ready">Карточка товара</a></li>
            <br>


            <li><a href="catalog-section.php" target="_blank" class="ready">Каталог - Разделы</a></li>
            <li><a href="catalog-category.php" target="_blank" class="ready">Категории каталога - Изделия</a></li>
            <li><a href="catalog-category-socket-switches.php" target="_blank" class="ready">Категории каталога - Розетки и выключатели</a></li>
            <br>

            <li><a href="search-searchbar.php" target="_blank" class="ready">Поиск через строку поиска</a></li>
            <li><a href="search-searchbar-product-off.php" target="_blank" class="ready">Отсутствующий товар</a></li>
            <br>

            <li><a href="cart.php" target="_blank" class="ready">Корзина</a></li>
            <li><a href="cart-category.php" target="_blank" class="ready">Корзина - сортировка по категориям</a></li>
            <li><a href="cart-user.php" target="_blank" class="ready">Корзина - пользователь</a></li>
            <li><a href="cart-empty.php" target="_blank" class="ready">Корзина - пусто</a></li>
            <br>

            <li><a href="ordering.php" target="_blank" class="ready">Оформление заказа</a></li>
            <li><a href="order-confirm.php" target="_blank" class="ready">Подтверждение заказа</a></li>
            <br>


            <li><a href="cp-warranty.php" target="_blank" class="ready">Контентные страницы - Гарантия</a></li>
            <li><a href="cp-promotions.php" target="_blank" class="ready">Контентные страницы - Акции</a></li>
            <li><a href="cp-news.php" target="_blank" class="ready">Контентные страницы - Новости</a></li>
            <li><a href="cp-news-details.php" target="_blank" class="ready">Контентные страницы - Одна новость</a></li>
            <li><a href="cp-articles.php" target="_blank" class="ready">Контентные страницы - Статьи</a></li>
            <li><a href="cp-articles-details.php" target="_blank" class="ready">Контентные страницы - Одна статья</a></li>*/?>
            <br>

            <li><a class="ready" href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>