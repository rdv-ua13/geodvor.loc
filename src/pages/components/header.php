<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/Manrope-Regular.eot" as="font" type="font/eot" crossorigin>
    <link rel="preload" href="fonts/Manrope-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Manrope-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.eot" as="font" type="font/eot" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Manrope-Semibold.eot" as="font" type="font/eot" crossorigin>
    <link rel="preload" href="fonts/Manrope-Semibold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Semibold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Manrope-Semibold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.eot" as="font" type="font/eot" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/Manrope-ExtraBold.eot" as="font" type="font/eot" crossorigin>
    <link rel="preload" href="fonts/Manrope-ExtraBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-ExtraBold.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="fonts/Manrope-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="css/main.css?v=<?=time();?>" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>         <!-- validate -->
    <script defer src="js/messages_ru.js"></script>             <!-- validate -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->
    <script defer src="js/ru.js"></script>                      <!-- flatpickr -->
    <script defer src="js/nouislider.js"></script>              <!-- nouislider -->
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/readmore.js"></script>                <!-- readmore -->
    <script defer src="js/select2.js"></script>                 <!-- select2 -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js?v=<?=time();?>"></script>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
</head>


<body class="<?=(strpos($_SERVER["REQUEST_URI"], "index.php"))? 'index' : ''?> <?=(strpos($_SERVER["REQUEST_URI"], "card-product.php"))? 'card-product-page' : ''?>">
    <header
            class="header fixed-block
                <?=(!strpos($_SERVER["REQUEST_URI"], "index.php") && !strpos($_SERVER["REQUEST_URI"], "catalog.php"))? 'header-less' : ''?>
                <?=(strpos($_SERVER["REQUEST_URI"], "order.php"))? 'header-order' : ''?>"
    >
        <div class="header-top">
            <div class="container header-container header-top-container">
                <div class="header-top-nav">
                    <a class="link-secondary header-top__link" href="javascript:;">
                        <span class="text-content">Доставка</span>
                    </a>
                    <a class="link-secondary header-top__link" href="javascript:;">
                        <span class="text-content">Оптовым покупателям</span>
                    </a>
                    <a class="link-secondary header-top__link" href="javascript:;">
                        <span class="text-content">Контакты</span>
                    </a>
                    <a class="link header-top__link" href="javascript:;">
                        <span class="text-content">🏡&nbsp;&nbsp;Услуги</span>
                    </a>
                </div>
                <div class="header-top-info">
                    <a class="link-flex link header-top__link header-top__location" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#location"></use>
                        </svg>
                        <span class="text-content">Склад: Колпино, ул. Загородная 6Б</span>
                    </a>
                    <a class="link-brand header-top__link" href="javascript:;">
                        <span class="text-content">Как проехать</span>
                    </a>
                </div>
                <div class="header-top-info">
                    <a class="link-flex link link-tdu-text header-top__link" href="mailto:info@geo-dvor.ru">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#sms"></use>
                        </svg>
                        <span class="text-content">info@geo-dvor.ru</span>
                    </a>
                    <div class="social header-top-social">
                        <div class="social__list">
                            <a href="javascript:;" class="social__item">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-vk"></use>
                                </svg>
                            </a>
                            <a href="javascript:;" class="social__item">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-tg"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
				<?/* login
                <div class="header-top-profile">
                    <div class="header-top-profile__view">
                        <picture>
                            <source srcset="img/avatar.webp" type="image/webp">
                            <img
                                loading="lazy"
                                src="img/avatar.png"
                                width="28"
                                height="28"
                                alt="Изображение блока"
                            >
                        </picture>
                    </div>
                    <div class="header-top-profile__descr">
                        <div class="header-top-profile__name">Илья маковецкий</div>
                        <div class="header-top-profile__bonus">
                            <div class="header-top-profile__bonus-value">
                                <span>2746,99</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#fill-bonus"></use>
                                </svg>
                            </div>
                            <div class="header-top-profile__bonus-exp">до 01.04</div>
                        </div>
                    </div>
                    <div class="header-top-profile__pointer">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-down"></use>
                        </svg>
                    </div>
                </div>*/?>
				<?/* not logged */?>
                <div class="header-top-profile not-logged">
                    <button class="btn-reset btn btn-sm btn-extra" data-fancybox data-src="#modal-auth">
                        <span class="text-content">Войти</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container header-container header-nav-container">
                <div class="header-logo">
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        <span class="logo">
                    <?else:?>
                        <a class="logo" href="javascript:;">
                    <?endif;?>
                        <img
                                loading="lazy"
                                class="image"
                                src="img/logo.svg"
                                width="130"
                                height="36"
                                alt="ГЕОДВОР"
                        >
					<?if(strpos($_SERVER["REQUEST_URI"], "index.php")):?>
                        </span>
                    <?else:?>
                        </a>
                    <?endif;?>
                </div>

                <div class="header-back">
                    <a class="link link-flex" href="javascript:;">
                        <svg class="icon icon-sm icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                        <span>Вернуться в корзину</span>
                    </a>
                </div>

                <div class="header-catalog-spoiler">
                    <button
                            class="btn-reset btn menu-catalog-spoiler"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-catalog-spoiler
                            data-overlay-transparent
                    >
                        <svg class="icon icon-fill menu-catalog-spoiler__icon">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                        <svg class="icon icon-fill menu-catalog-spoiler__icon-active">
                            <use href="img/sprite.svg#cross"></use>
                        </svg>
                        <span class="text-content">Каталог</span>
                    </button>
                </div>

                <div class="header-search">
                    <form id="" class="form" method="" action="javascript:;">
                        <div class="input-wrapper input-wrapper-split input-wrapper-search has-icon-l">
                            <input
                                    class="input-reset input"
                                    type="search"
                                    name=""
                                    placeholder="Найти товар или услугу"
                                    autocomplete="off"
                                    onclick="$(this).closest('.header-search').find('.header-search-results').toggleClass('active');"
                                    readonly
                            >
                            <label class="input-icon input-icon-l">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <button class="btn-reset btn input-delete-btn">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#cross"></use>
                                </svg>
                            </button>
                            <button class="btn-reset btn input-search-btn" type="submit">
                                <span class="text-content">Найти</span>
                            </button>
                        </div>
                    </form>
                    <div class="header-search-results">
                        <div class="search-results">
                            <div class="search-results__header">
                                <div class="search-results__header-top">
                                    <div class="search-results__title h4">Поиск</div>
                                    <div class="search-results__close">
                                        <svg class="icon icon-fill icon-md">
                                            <use href="img/sprite.svg#cross"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="search-results__search">
                                    <div class="search-results__search-item">
                                        <form id="" class="form" method="" action="javascript:;">
                                            <div class="input-wrapper input-wrapper-split input-wrapper-search has-icon-l">
                                                <input
                                                        class="input-reset input"
                                                        type="search"
                                                        name=""
                                                        placeholder="Найти товар или услугу"
                                                        autocomplete="off"
                                                >
                                                <label class="input-icon input-icon-l">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </label>
                                                <button class="btn-reset btn input-delete-btn">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#cross"></use>
                                                    </svg>
                                                </button>
                                                <button class="btn-reset btn input-search-btn" type="submit">
                                                    <span class="text-content">Найти</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
									<?/*<div class="search-results__search-item">
                                        <div class="mobile-search-results-hint">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <button class="btn-reset btn">
                                                            <span class="text-content">Москва</span>
                                                        </button>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <button class="btn-reset btn">
                                                            <span class="text-content">Санкт-петербург</span>
                                                        </button>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <button class="btn-reset btn">
                                                            <span class="text-content">Казань</span>
                                                        </button>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <button class="btn-reset btn">
                                                            <span class="text-content">Воронеж</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>*/?>
                                </div>
                            </div>
							<?/*<div class="search-results__sidebar">
                                <div class="search-results__sidebar-item search-results__match search-results__match--history">
                                    <div class="search-results__sidebar-title">История поиска</div>
                                    <div class="search-results__match-item" data-removable>
                                        <a class="btn-reset btn search-results__link" href="javascript:;">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#history"></use>
                                            </svg>
                                            <span class="text-content">выключатель двойной</span>
                                        </a>
                                        <div class="search-results__link-delete" data-delete-trigger>
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search-results__match-item" data-removable>
                                        <a class="btn-reset btn search-results__link" href="javascript:;">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#history"></use>
                                            </svg>
                                            <span class="text-content">автоматический выключатель</span>
                                        </a>
                                        <div class="search-results__link-delete" data-delete-trigger>
                                            <svg class="icon icon-fill icon-sm">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-results__sidebar-item search-results__categories">
                                    <div class="search-results__sidebar-title">Искать в категории:</div>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Розетки и выключаетели</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Розетки двухпостовые</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Рамки для розеток</span>
                                    </a>
                                </div>
                                <div class="search-results__sidebar-item search-results__brands">
                                    <div class="search-results__sidebar-title">Бренды:</div>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">ABB</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">DEKraft</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Legrand</span>
                                    </a>
                                </div>
                                <div class="search-results__sidebar-item search-results__series">
                                    <div class="search-results__sidebar-title">Серии:</div>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">BA-101</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Valena Classic</span>
                                    </a>
                                    <a class="btn-reset btn search-results__link" href="javascript:;">
                                        <span class="text-content">Averes</span>
                                    </a>
                                </div>
                            </div>
                            <div class="search-results__suggest">
                                <div class="search-results__suggest-title">Товары:</div>
                                <div class="search-results__suggest-list">
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">ZB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-2.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-2.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">AB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Удлинитель катушечный Thorsman 4 роз 15м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-3.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-3.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">BB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-4.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-4.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">CB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Белый Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product-5.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product-5.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">DB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica Extend Черный Удлинитель 3 розетки 2К+З, кабель 1,5м</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results-product">
                                        <div class="search-results-product__view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="64"
                                                        height="64"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </div>
                                        <div class="search-results-product__descr">
                                            <div class="search-results-product__descr-header">
                                                <div class="search-results-product__info">
                                                    <span class="product-code">EB3327018</span>
                                                </div>
                                                <div class="search-results-product__title">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</div>
                                            </div>
                                            <div class="search-results-product__descr-bottom">
                                                <div class="search-results-product__price">
                                                    <div class="search-results-product__price-current">1 478,40 ₽</div>
                                                    <div class="search-results-product__price-originally">1 624,50 ₽</div>
                                                </div>
                                                <div class="search-results-product__cart cart-buy">
                                                    <div class="cart-quantity disabled">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#minus"></use>
                                                            </svg>
                                                            <svg class="icon icon-fill icon-sm icon-selected">
                                                                <use href="img/sprite.svg#trash"></use>
                                                            </svg>
                                                        </button>
                                                        <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                            <svg class="icon icon-fill icon-sm">
                                                                <use href="img/sprite.svg#plus"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <button class="btn-reset btn cart-in" type="button">
                                                        <span class="text-content">В КОРЗИНУ</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-results__suggest-details">
                                    <div class="search-results__suggest-found">Найдено товаров: 178</div>
                                    <a class="btn-reset btn btn-light search-results__suggest-more" href="javascript:;">Показать все найденные товары</a>
                                </div>
                            </div>*/?>
                        </div>
                    </div>
                </div>

                <div class="header-contacts">
                    <a class="link fw-semibold fz-subheading-sm header-contacts__tel" href="tel:+79811558247">+7 981 155-82-47</a>
                    <a class="link-brand header-contacts__cta" href="javascript:;">Заявка на расчет</a>
                </div>

                <div class="header-profile">
                    <button class="btn-reset header-profile__btn">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#heart"></use>
                            </svg>
                            <span class="header-profile__btn-count">24</span>
                        </span>
                        <span class="header-profile__btn-text">Избранное</span>
                    </button>
                    <button class="btn-reset header-profile__btn header-profile__btn-cart">
                        <span class="header-profile__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#shopping-cart"></use>
                            </svg>
                            <span class="header-profile__btn-count">3</span>
                        </span>
                        <span class="header-profile__btn-text">Корзина</span>
                    </button>
                </div>

                <div class="header-catalog">
                    <div class="slider-out basic-slider-wrap">
                        <div class="basic-slider swiper" data-basic-slider data-header-catalog-slider>
                            <div class="swiper-wrapper">
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Геотекстиль</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Геосетки</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Пленки</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Профилированная мембрана</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Спанбонд</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Габионы сварные</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">Габионы</a>
                                <a class="swiper-slide header-catalog__item" href="javascript:;">&#x1F525; Предложения месяца</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-mobile-menu">
                    <button
                            class="btn-reset burger"
                            aria-label="Открыть меню"
                            aria-expanded="false"
                            data-menu-spoiler
                            data-overlay
                    >
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#menu"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu" data-menu>
        <div class="mobile-menu-close" data-menu-close>
            <svg class="icon icon-fill">
                <use href="img/sprite.svg#cross"></use>
            </svg>
        </div>

        <div class="mobile-menu-catalog">
            <button
                    class="btn-reset btn menu-catalog-spoiler"
                    aria-label="Открыть меню"
                    aria-expanded="false"
                    data-catalog-spoiler
                    data-overlay-transparent
            >
                <svg class="icon icon-fill menu-catalog-spoiler__icon">
                    <use href="img/sprite.svg#menu"></use>
                </svg>
                <svg class="icon icon-fill menu-catalog-spoiler__icon-active">
                    <use href="img/sprite.svg#cross"></use>
                </svg>
                <span class="text-content">Каталог</span>
            </button>
        </div>

        <ul class="list-reset mobile-menu-list">
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Доставка</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Оплата</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Оптовым покупателям</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">Контакты</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">О нас</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="mobile-menu__link" href="javascript:;">
                    <span class="text-content">🏡  Услуги</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                </a>
            </li>
        </ul>

        <div class="mobile-menu-footer">
            <div class="mobile-menu-login">
                <button class="btn-reset btn btn-extra" data-fancybox data-src="#modal-auth">
                    <span class="text-content">Войти</span>
                </button>
            </div>

            <div class="mobile-menu-contacts">
                <a class="link h4" href="tel:+79811558247">+7 981 155-82-47</a>
                <a class="link-brand " href="javascript:;">Заявка на расчет</a>
            </div>

            <div class="mobile-menu-connection">
                <a class="mobile-menu-connection__item" href="mailto:info@geo-dvor.ru">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#sms"></use>
                    </svg>
                    <span class="text-content">info@geo-dvor.ru</span>
                </a>
                <div class="mobile-menu-connection__soc">
                    <a href="javascript:;" class="mobile-menu-connection__soc-item">
                        <svg class="icon icon-fill icon-xl">
                            <use href="img/sprite.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="mobile-menu-connection__soc-item">
                        <svg class="icon icon-fill icon-xl">
                            <use href="img/sprite.svg#soc-tg"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-catalog" data-catalog>
        <div class="container menu-catalog-container">
            <div class="menu-catalog-header">
                <div class="menu-catalog-title h4">
                    <div class="menu-catalog-title-back">
                        <svg class="icon icon-fill icon-md">
                            <use href="img/sprite.svg#arrow-left"></use>
                        </svg>
                    </div>
                    <span data-catalog-title="Каталог">Каталог</span>
                </div>
                <div class="menu-catalog-close" data-catalog-close>
                    <svg class="icon icon-fill icon-md">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                </div>
            </div>
            <div class="menu-catalog-root">
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link selected" href="javascript:;" data-submenu-section="0">
                        <span class="text-content">Спанбонд</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;" data-submenu-section="1">
                        <span class="text-content">Геотекстиль</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Габионы сварные</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Профилированная мембрана</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Фасадная сетка</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Пленки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Дренажная система</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Канализация</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Водоснабжение</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Геосетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Газонные решетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Тенты укрывные</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Объемная георешетка</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Анкер металлический</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Поверхностный водоотвод</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Защита кабеля</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Садовые решетки</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Бордюры садовые</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка от кротов</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка для ограждения</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Фиксаторы под арматуру</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Мастики, праймер</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Сетка от грызунов</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Гидроизоляционные ленты</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="menu-catalog-root-item">
                    <a class="menu-catalog-root-link" href="javascript:;">
                        <span class="text-content">Инструмент и комплектующие</span>
                        <span class="menu-catalog-root-item-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="menu-catalog-submenu">
                <div class="menu-catalog-submenu-section active" data-root-pointer="0">
                    <div class="h3 menu-catalog-submenu-section__title">Геотекстиль</div> <?/* @note h3 change by design*/?>
                    <div class="menu-catalog-submenu-links">
                        <ul class="list-reset menu-catalog-submenu-links__list"> <?/* @note переделать в div без списка, либо добавить liшкам класс*/?>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Все товары раздела</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Агроткань с разметкой</span></a></li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль Дорнит</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль из полипропилена</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль для дренажа</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Геотекстиль для садовых дорожек</span></a></li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль в нарезке</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль для заезда на участок</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="menu-catalog-submenu-link" href="javascript:;">
                                    <span class="text-content">Геотекстиль под фундамент</span>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#chevron-right"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;"><span class="text-content">Пункт подменю</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu-catalog-submenu-section" data-root-pointer="1">
                    <div class="h3 menu-catalog-submenu-section__title">Пункт меню 2</div>
                    <div class="menu-catalog-submenu-links">
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                        <ul class="list-reset menu-catalog-submenu-links__list">
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                            <li><a class="menu-catalog-submenu-link" href="javascript:;">Пункт подменю</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-panel">
        <div class="mobile-menu-panel__cart product-card__cart cart-buy" data-fixed-cart-coord>
            <div class="product-card__cart-quantity cart-quantity disabled">
                <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                    <svg class="icon icon-fill icon-sm">
                        <use href="img/sprite.svg#minus"></use>
                    </svg>
                    <svg class="icon icon-fill icon-sm icon-selected">
                        <use href="img/sprite.svg#trash"></use>
                    </svg>
                </button>
                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                    <svg class="icon icon-fill icon-sm">
                        <use href="img/sprite.svg#plus"></use>
                    </svg>
                </button>
            </div>
            <button class="btn-reset btn cart-in" type="button">
                <span class="text-content">В КОРЗИНУ</span>
            </button>
        </div>

        <div class="mobile-menu-panel__toolbar">
            <ul class="list-reset mobile-menu-panel__list">
                <li>
                    <button class="btn-reset header-profile__btn mobile-menu-panel__btn" data-catalog-spoiler>
                        <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#catalog"></use>
                            </svg>
                        </span>
                        <span class="header-profile__btn-text">Каталог</span>
                    </button>
                </li>
                <li>
                    <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#heart"></use>
                        </svg>
                        <span class="header-profile__btn-count">12</span>
                    </span>
                        <span class="header-profile__btn-text">Избранное</span>
                    </button>
                </li>
                <li>
                    <button class="btn-reset header-profile__btn mobile-menu-panel__btn">
                    <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#profile"></use>
                        </svg>
                    </span>
                        <span class="header-profile__btn-text">Кабинет</span>
                    </button>
                </li>
                <li>
                    <button class="btn-reset header-profile__btn mobile-menu-panel__btn mobile-menu-panel__btn-secondary">
                        <span class="header-profile__btn-view mobile-menu-panel__btn-view">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#shopping-cart"></use>
                            </svg>
                            <span class="header-profile__btn-count">3</span>
                        </span>
                        <span class="header-profile__btn-text">12 470 ₽</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <main class="main">