<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="gap-xl personal-acc personal-acc-favorites">
		<div class="cp-heading">
			<div class="cp-heading__back">
				<a class="cp-heading__back-link link" href="javascript:;">
					<svg class="icon icon-fill">
						<use href="img/sprite.svg#chevron-left"></use>
					</svg>
					<span>Личный кабинет</span>
				</a>
			</div>
		</div>

		<div class="cp">
			<div class="cp-sidebar cp-sidebar-nav">
				<div class="cp-sidebar__item">
					<ul class="list-reset cp-sidebar__list">
						<li class="cp-sidebar__list-item">
							<a href="javascript:;" class="cp-sidebar__link">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#box"></use>
								</svg>
								<span class="cp-sidebar__link-content">Мои заказы</span>
								<svg class="icon icon-pointer icon-fill">
									<use href="img/sprite.svg#chevron-right"></use>
								</svg>
							</a>
						</li>
						<li class="cp-sidebar__list-item">
							<a href="javascript:;" class="cp-sidebar__link active">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#heart"></use>
								</svg>
								<span class="cp-sidebar__link-content">Избранные товары</span>
								<svg class="icon icon-pointer icon-fill">
									<use href="img/sprite.svg#chevron-right"></use>
								</svg>
							</a>
						</li>
						<li class="cp-sidebar__list-item">
							<a href="javascript:;" class="cp-sidebar__link">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#profile-2"></use>
								</svg>
								<span class="cp-sidebar__link-content">Мой профиль</span>
								<svg class="icon icon-pointer icon-fill">
									<use href="img/sprite.svg#chevron-right"></use>
								</svg>
							</a>
						</li>
						<li class="cp-sidebar__list-item">
							<a href="javascript:;" class="cp-sidebar__link">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#company"></use>
								</svg>
								<span class="cp-sidebar__link-content">Контрагенты</span>
								<svg class="icon icon-pointer icon-fill">
									<use href="img/sprite.svg#chevron-right"></use>
								</svg>
							</a>
						</li>
						<li class="cp-sidebar__list-item sign-out">
							<a href="javascript:;" class="cp-sidebar__link">
								<svg class="icon icon-fill">
									<use href="img/sprite.svg#logout"></use>
								</svg>
								<span class="cp-sidebar__link-content">Выйти</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="cp-content">
				<div class="gap-sm-plus">
					<h1 class="h2">Избранные товары</h1>
				</div>

                <div class="gap-sm-plus">
                    <div class="cp-content__sort">
                        <div class="cp-content__sort-title">Сортировать:</div>
                        <div class="cp-content__sort-select">
                            <span class="text-content">Сначала популярные</span>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-down-select"></use>
                            </svg>
                        </div>
                        <div class="cp-content__sort-options">
                            <div class="cp-content__sort-item">
                                <input id="sort0" type="radio" class="visually-hidden" name="sortCatalogCategory" value="" checked="">
                                <label for="sort0" class="cp-content__sort-label active">Сначала популярные</label>
                            </div>
                            <div class="cp-content__sort-item">
                                <input id="sort1" type="radio" class="visually-hidden" name="sortCatalogCategory" value="">
                                <label for="sort1" class="cp-content__sort-label">Сначала подешевле</label>
                            </div>
                            <div class="cp-content__sort-item">
                                <input id="sort2" type="radio" class="visually-hidden" name="sortCatalogCategory" value="">
                                <label for="sort2" class="cp-content__sort-label">Сначала подороже</label>
                            </div>
                            <div class="cp-content__sort-item">
                                <input id="sort3" type="radio" class="visually-hidden" name="sortCatalogCategory" value="">
                                <label for="sort3" class="cp-content__sort-label">По алфавиту</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-lg card-list card-list--lg">
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
                <div class="pagination-wrapper">
					<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/pagination.php"); ?>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>