<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="gap-xl">
        <div class="empty no-page">
            <div class="empty__view">
                <svg class="icon icon-fill">
                    <use href="img/tt_sad-smile.svg#tt_sad-smile"></use>
                </svg>
            </div>
            <div class="empty__descr">
                <div class="h2 empty__title">Упс! Запрашиваемая страница не найдена...</div>
                <div class="empty__subtitle">Попробуйте перейти на главную страницу или воспользуйтесь поиском по каталогу</div>
            </div>
            <div class="empty__cta">
                <form id="" class="form" method="" action="javascript:;">
                    <div class="input-wrapper input-wrapper-split input-wrapper-search has-icon-l">
                        <input
                                class="input-reset input input-search"
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
        </div>

        <div class="gap-xl">
            <div class="hr hr-out"></div>
        </div>

        <div class="gap-xl">
            <div class="basic-hca">
                <div class="basic-hca__heading">
                    <div class="h2">Лучшие предложения месяца</div>
                </div>
                <div class="basic-hca__content">
                    <div class="slider-out basic-slider-wrap">
                        <div class="basic-slider nav-out swiper" data-basic-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Доставим завтра</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                            <div class="card__characteristics">
                                                <p>Цвет: Белый</p>
                                                <p>Плотность: 150 гр/м2</p>
                                                <p>Ширина рулона: 2 м</p>
                                                <p>Длина рулона: 10 м</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_01_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за</span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                        <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_01_square_meter">
                                                            <span>м<sup>2</sup></span>
                                                        </span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger" data-target="id_01_piece"><span>штуку</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_01_card-price">
                                                        <div class="basic-tabs-content__panel active" data-id="id_01_square_meter">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">910 ₽</span>
                                                                <span class="card__price-origin">1230 ₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="basic-tabs-content__panel" data-id="id_01_piece">
                                                            <div class="basic-tabs-content__content">
                                                                <div class="card__price-current">210 ₽</div>
                                                                <div class="card__price-origin">430 ₽</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Доступно сегодня</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                            <div class="card__characteristics">
                                                <p>Плотность: 100 мкм</p>
                                                <p>Намотка: 10 м.п.</p>
                                                <p>Ширина: 3м</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_02_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за штуку</span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_02_card-price">
                                                        <div class="basic-tabs-content__panel active">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">300 ₽</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock on-order">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#timer"></use>
                                                </svg>
                                                <span>Под заказ</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                            <div class="card__characteristics">
                                                <p>Цвет: Синий</p>
                                                <p>Размер, м: 2х3</p>
                                                <p>Шаг люверсов, см: 50</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_03_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за</span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                        <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_03_square_meter">
                                                            <span>м<sup>2</sup></span>
                                                        </span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger" data-target="id_03_piece"><span>рулон</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_03_card-price">
                                                        <div class="basic-tabs-content__panel active" data-id="id_03_square_meter">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">225 ₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="basic-tabs-content__panel" data-id="id_03_piece">
                                                            <div class="basic-tabs-content__content">
                                                                <div class="card__price-current">210 ₽</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock out-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#splash"></use>
                                                </svg>
                                                <span>Нет в наличии</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2</a>

                                            <div class="card__characteristics">
                                                <p>Плотность: 300 гр/м2</p>
                                                <p>Ширина рулона: 2 м</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_04_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за</span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                        <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_04_square_meter">
                                                            <span>м<sup>2</sup></span>
                                                        </span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger" data-target="id_04_piece"><span>штуку</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_04_card-price">
                                                        <div class="basic-tabs-content__panel active" data-id="id_04_square_meter">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">5800 ₽</span>
                                                                <span class="card__price-origin">5950 ₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="basic-tabs-content__panel" data-id="id_04_piece">
                                                            <div class="basic-tabs-content__content">
                                                                <div class="card__price-current">210 ₽</div>
                                                                <div class="card__price-origin">430 ₽</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Доступно сегодня</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Объемная георешетка ГА ОР 210/100 мм</a>

                                            <div class="card__characteristics">
                                                <p>Цвет: Белый</p>
                                                <p>Плотность: 150 гр/м2</p>
                                                <p>Ширина рулона: 2 м</p>
                                                <p>Длина рулона: 10 м</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_05_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за м2</span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_05_card-price">
                                                        <div class="basic-tabs-content__panel active">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">127 ₽</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock product-stock on-order">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#timer"></use>
                                                </svg>
                                                <span>Под заказ</span>
                                            </div>

                                            <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                            <div class="card__characteristics">
                                                <p>Цвет: Синий</p>
                                                <p>Размер, м: 2х3</p>
                                                <p>Шаг люверсов, см: 50</p>
                                            </div>

                                            <div class="card__price">
                                                <div class="basic-tabs">
                                                    <div class="basic-tabs-container" data-tab="id_06_card-price">
                                                        <div class="basic-tabs-item basic-tabs-item-label">
                                                            <span class="card__price-tab card__price-title tab">Цена за</span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                <span class="card__price-tab tab basic-tabs-trigger active" data-target="id_06_square_meter">
                                                    <span>м<sup>2</sup></span>
                                                </span>
                                                        </div>
                                                        <div class="basic-tabs-item">
                                                            <span class="card__price-tab tab basic-tabs-trigger" data-target="id_06_piece"><span>рулон</span></span>
                                                        </div>
                                                    </div>
                                                    <div class="basic-tabs-content" data-tab-content="id_06_card-price">
                                                        <div class="basic-tabs-content__panel active" data-id="id_06_square_meter">
                                                            <div class="basic-tabs-content__content">
                                                                <span class="card__price-current">225 ₽</span>
                                                            </div>
                                                        </div>
                                                        <div class="basic-tabs-content__panel" data-id="id_06_piece">
                                                            <div class="basic-tabs-content__content">
                                                                <div class="card__price-current">210 ₽</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__cart cart-buy">
                                                <div class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn cart-in" type="button">
                                                    <span class="text-content">В корзину</span>
                                                </button>
                                                <button class="btn-reset btn btn-icon btn-icon-switch btn-icon--soft" type="button" data-favorites>
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#heart"></use>
                                                    </svg>
                                                    <svg class="icon icon-fill selected">
                                                        <use href="img/sprite.svg#filled-heart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-prev btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-left"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gap-xl">
            <div class="basic-hca">
                <div class="basic-hca__heading">
                    <div class="h3">Вы недавно смотрели</div>
                </div>
                <div class="basic-hca__content">
                    <div class="slider-out basic-slider-wrap">
                        <div class="basic-slider nav-out swiper" data-basic-slider data-basic-slider-watched>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                            <div class="card__price">
                                                <span class="card__price-current">910 ₽</span>
                                                <span class="card__price-origin">1230 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                            <div class="card__price">
                                                <span class="card__price-current">300 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                            <div class="card__price">
                                                <span class="card__price-current">225 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product card-product--watched">
                                        <a class="card__view" href="javascript:;">
                                            <div class="mini-slider">
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="mini-slider__slide">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="mini-slider__img"
                                                            width="160"
                                                            height="160"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <ul class="list-reset mini-slider__dots"></ul>
                                            </div>
                                        </a>
                                        <div class="card__descr">
                                            <a class="card__title " href="javascript:;">Объемная георешетка ГА ОР 210/100 мм</a>

                                            <div class="card__price">
                                                <span class="card__price-current">127 ₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-prev btn btn-icon">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#chevron-left"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>