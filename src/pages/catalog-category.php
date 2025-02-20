<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="gap-xxxs nav-breadcrumbs-wrapper">
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/breadcrumbs.php"); ?>
</div>

<div class="container">
    <div class="catalog-category">
        <div class="catalog-heading">
            <h1 class="h1 catalog-heading__title">Геотекстиль</h1>
            <div class="catalog-heading__placeholder">— 178 товаров</div>
            <div class="catalog-heading__back">
                <a class="catalog-heading__back-link link" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <span>Каталог</span>
                </a>
            </div>
        </div>

        <div class="cp">
            <div class="cp-sidebar">
                <div class="cp-sidebar__item cp-sidebar__top cp-sidebar-category">
                    <div class="cp-sidebar__heading">Геотекстиль</div>
                    <ul class="list-reset cp-sidebar__list">
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Агроткань с разметкой</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Геотекстить Дорнит</span>
                                <span class=" stock">8</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Геотекстиль из полипропилена</span>
                                <span class="cp-sidebar__link-content stock">43</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Геотекстиль для дренажа</span>
                                <span class="cp-sidebar__link-content stock">4</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Геотекстиль для садовых дорожек</span>
                                <span class="cp-sidebar__link-content stock">16</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Геотекстиль в нарезке</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link" title="Временно статика">
                                <span class="cp-sidebar__link-content" style="color:var(--gray40-color);">Еще 5</span>
                                <svg class="cp-sidebar__link-content icon icon-fill" style="fill: var(--gray40-color);">
                                    <use href="img/sprite.svg#chevron-down"></use>
                                </svg>
                            </a>
                        </li>
                        <?/*
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Название подкатегории</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Название подкатегории</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Название подкатегории</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Название подкатегории</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <span class="cp-sidebar__link-content">Название подкатегории</span>
                                <span class="cp-sidebar__link-content stock">11</span>
                            </a>
                        </li>*/?>
                    </ul>
                </div>
                <div class="cp-sidebar__item cp-sidebar-filter" data-filter>
                    <div class="cp-sidebar-filter__header">
                        <div class="cp-sidebar-filter__title h4">Фильтр</div>
                        <div class="cp-sidebar-filter__close" data-filter-close>
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </div>
                    </div>

                    <form class="cp-sidebar-filter__selection" action="">
                        <ul class="list-reset cp-sidebar-filter__options">
                            <li class="cp-sidebar-filter__options-item">
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-0" class="custom-checkbox__input" type="checkbox" name="csf0[0]">
                                            <label for="csf-checkbox-0" class="custom-checkbox__label-for">Новые поступления</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-1" class="custom-checkbox__input" type="checkbox" name="csf0[1]">
                                            <label for="csf-checkbox-1" class="custom-checkbox__label-for">🔥 Предложения месяца</label>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Цена, ₽</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <div class="cp-sidebar-filter__range">
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="от 36"
                                                >
                                            </div>
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value="до 5000"
                                                        placeholder="до 5000"
                                                >
                                            </div>
                                        </div>

                                        <?/* @note - доделать
                                        <div class="order-step-bonus-action__item order-step-bonus-debit-range range-slider">
                                            <div id="debitRange"></div>
                                            <div class="range-slider__values">
                                                <span id="debitRangeValueMin" class="range-slider__val">0</span>
                                                <span id="debitRangeValueMax" class="range-slider__val">2726</span>
                                            </div>
                                        </div>*/?>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Марка</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-10" class="custom-checkbox__input" type="checkbox" name="csf10[0]">
                                            <label for="csf-checkbox-10" class="custom-checkbox__label-for">Дорнит ГЕО</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-11" class="custom-checkbox__input" type="checkbox" name="csf10[1]">
                                            <label for="csf-checkbox-11" class="custom-checkbox__label-for">Геоком Д</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-12" class="custom-checkbox__input" type="checkbox" name="csf10[2]">
                                            <label for="csf-checkbox-12" class="custom-checkbox__label-for">Лавсан ГЕО</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-13" class="custom-checkbox__input" type="checkbox" name="csf10[3]">
                                            <label for="csf-checkbox-13" class="custom-checkbox__label-for">Геотекс</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-14" class="custom-checkbox__input" type="checkbox" name="csf10[4]">
                                            <label for="csf-checkbox-14" class="custom-checkbox__label-for">Канвалан</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <a href="javascript:;" class="cp-sidebar__link" title="Временно статика">
                                            <span class="cp-sidebar__link-content" style="color:var(--gray40-color);">Еще 5</span>
                                            <svg class="cp-sidebar__link-content icon icon-fill" style="fill: var(--gray40-color);">
                                                <use href="img/sprite.svg#chevron-down"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Способ производства</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-20" class="custom-checkbox__input" type="checkbox" name="csf20[0]">
                                            <label for="csf-checkbox-20" class="custom-checkbox__label-for">Нетканный иглопробивной</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-21" class="custom-checkbox__input" type="checkbox" name="csf20[1]">
                                            <label for="csf-checkbox-21" class="custom-checkbox__label-for">Нетканный термоскрепленный</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-22" class="custom-checkbox__input" type="checkbox" name="csf20[2]">
                                            <label for="csf-checkbox-22" class="custom-checkbox__label-for">Тканный</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-23" class="custom-checkbox__input" type="checkbox" name="csf20[3]">
                                            <label for="csf-checkbox-23" class="custom-checkbox__label-for">Нетканный гидроскрепленный</label>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Сырье</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-30" class="custom-checkbox__input" type="checkbox" name="csf30[0]">
                                            <label for="csf-checkbox-30" class="custom-checkbox__label-for">Полиэфир</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-31" class="custom-checkbox__input" type="checkbox" name="csf30[1]">
                                            <label for="csf-checkbox-31" class="custom-checkbox__label-for">Полипропилен</label>
                                        </span>
                                    </li>
                                    <li class="cp-sidebar__list-item">
                                        <span class="custom-checkbox">
                                            <input id="csf-checkbox-32" class="custom-checkbox__input" type="checkbox" name="csf30[2]">
                                            <label for="csf-checkbox-32" class="custom-checkbox__label-for">Полипропилен термоскрепленный</label>
                                        </span>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Ширина, м</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <div class="cp-sidebar-filter__range">
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value="от 1"
                                                        placeholder="от 1"
                                                >
                                            </div>
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value="до 2"
                                                        placeholder="до 2"
                                                >
                                            </div>
                                        </div>

										<?/* @note - доделать
										<div class="order-step-bonus-action__item order-step-bonus-debit-range range-slider">
										<div id="debitRange"></div>
										<div class="range-slider__values">
										<span id="debitRangeValueMin" class="range-slider__val">0</span>
										<span id="debitRangeValueMax" class="range-slider__val">2726</span>
										</div>
										</div>*/?>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Намотка, м.п.</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <div class="cp-sidebar-filter__range">
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="от 25"
                                                >
                                            </div>
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="до 130"
                                                >
                                            </div>
                                        </div>

										<?/* @note - доделать
										<div class="order-step-bonus-action__item order-step-bonus-debit-range range-slider">
										<div id="debitRange"></div>
										<div class="range-slider__values">
										<span id="debitRangeValueMin" class="range-slider__val">0</span>
										<span id="debitRangeValueMax" class="range-slider__val">2726</span>
										</div>
										</div>*/?>
                                    </li>
                                </ul>
                            </li>
                            <li class="cp-sidebar-filter__options-item">
                                <div class="cp-sidebar__heading">Толщина, мкм</div>
                                <ul class="list-reset cp-sidebar__list">
                                    <li class="cp-sidebar__list-item">
                                        <div class="cp-sidebar-filter__range">
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="от 60"
                                                >
                                            </div>
                                            <div class="input-wrapper cp-sidebar-filter__range-item">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="до 200"
                                                >
                                            </div>
                                        </div>

										<?/* @note - доделать
										<div class="order-step-bonus-action__item order-step-bonus-debit-range range-slider">
										<div id="debitRange"></div>
										<div class="range-slider__values">
										<span id="debitRangeValueMin" class="range-slider__val">0</span>
										<span id="debitRangeValueMax" class="range-slider__val">2726</span>
										</div>
										</div>*/?>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="cp-sidebar-filter__cta">
                            <button class="btn-reset btn" data-filter-results>
                                <span class="text-content">Показать товары</span>
                            </button>
                            <button class="btn-reset btn btn-extra" data-filter-reset>
                                <span class="text-content">Сбросить фильтр</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="cp-content">
                <div class="gap-sm-plus">
                    <!---->
                    <div class="catalog-content__top">
                        <div class="catalog-content-settings">
                            <div class="catalog-content-settings__sort">
                                <div class="catalog-content-settings__sort-title">Сортировать:</div>
                                <div class="catalog-content-settings__sort-select">
                                    <span class="catalog-content-settings__sort-select-text">Сначала недорогие</span>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#chevron-down"></use>
                                    </svg>
                                </div>
                                <div class="catalog-content-settings__sort-options">
                                    <div class="catalog-content-settings__sort-item">
                                        <input id="sortByLowPrice" type="radio" class="visually-hidden" name="sortCatalogCategory" value="" checked="">
                                        <label for="sortByLowPrice" class="catalog-content-settings__sort-label active">Сначала недорогие</label>
                                    </div>
                                    <div class="catalog-content-settings__sort-item">
                                        <input id="sortByHighPrice" type="radio" class="visually-hidden" name="sortCatalogCategory" value="">
                                        <label for="sortByHighPrice" class="catalog-content-settings__sort-label">Сначала дорогие</label>
                                    </div>
                                    <div class="catalog-content-settings__sort-item">
                                        <input id="sortByPopular" type="radio" class="visually-hidden" name="sortCatalogCategory" value="">
                                        <label for="sortByPopular" class="catalog-content-settings__sort-label">Сначала популярные</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="catalog-content-filter-spoiler" data-filter-spoiler="">
                            <div class="catalog-content-filter-spoiler__view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#filter"></use>
                                </svg>
                            </div>
                            <span>Фильтры</span>
                        </div>

                        <div class="catalog-content-filter-selected" data-filter-selected="">
                            <div class="catalog-content-filter-selected__list">
                                <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable="">
                                    <span class="btn__text">Наличие: Центральный склад</span>
                                    <span class="catalog-content-filter-selected__item-delete" data-delete-trigger="">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                                </button>
                                <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable="">
                                    <span class="btn__text">Тип изделия: USB розетки</span>
                                    <span class="catalog-content-filter-selected__item-delete" data-delete-trigger="">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                                </button>
                                <button class="btn-reset btn btn-mini btn-primary catalog-content-filter-selected__item" data-removable="">
                                    <span class="btn__text">Серия: Atlas Design</span>
                                    <span class="catalog-content-filter-selected__item-delete" data-delete-trigger="">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </span>
                                </button>
                                <button class="btn-reset btn btn-mini btn-light catalog-content-filter-selected__item" data-filter-reset="">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#trash"></use>
                                    </svg>
                                    <span class="btn__text">Очистить фильтры</span>
                                </button>
                            </div>
                        </div>

                        <div class="catalog-content__banner">
                            <div class="catalog-content__banner-text">
                                <div class="catalog-content__banner-title h3">Кэшбэк 15% на серию Glossa<br> от System Electric</div>
                                <div class="catalog-content__banner-subtitle">Выгодные условия в декабре 2022 года для всех покупателей</div>
                            </div>
                            <div class="catalog-content__banner-decor">
                                <img loading="lazy" src="img/schneider-decor-1.png" class="image" width="155" height="155" alt="Изображение блока">
                                <img loading="lazy" src="img/schneider-decor-2.png" class="image" width="155" height="155" alt="Изображение блока">
                            </div>
                        </div>
                    </div>
                    <!---->
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
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
                                <button class="btn-reset btn btn-icon btn-icon--soft" type="button" data-favorites>
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#heart"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gap-xl">
                    <div class="gap-sm">
                        <div class="h3">Виды и область применения геосинтетиков</div>
                    </div>
                    <div class="spoiler-wrapper">
                        <div
                            class="spoiler"
                            data-spoiler
                            data-spoiler-more="Показать полностью"
                            data-spoiler-less="Скрыть"
                        >
                            <div class="spoiler-content">
                                Вы можете купить геосинтетические материалы для решения обширного круга задач, которые возникают в процессе строительства, земельных работ и благоустройства территории. Современная промышленность предлагает широкий выбор геосинтетиков:
                                <br>
                                <br>
                                <ul class="list-reset cp-list cp-list-default">
                                    <li>текстиль (тканые и нетканые полотна);</li>
                                    <li>мембраны;</li>
                                    <li>сетки и решетки;</li>
                                    <li>композиты (объединяют нескольких видов геосинтетиков).</li>
                                </ul>
                                <br>
                                <br>
                                Геосинтетические материалы получили широкое распространение, так как целесообразность и экономическая выгода их использования не вызывают сомнений. Сферы применения:
                                <br>
                                <br>
                                <ul class="list-reset cp-list cp-list-default">
                                    <li>строительство автомобильных и железных дорог, а также взлетно-посадочных полос аэродромов;</li>
                                    <li>обустройство полигонов для утилизации ТБО;</li>
                                    <li>укладка тротуарной плитки и брусчатки;</li>
                                    <li>укрепление берегов естественных и искусственных водоемов, противодействие эрозии;</li>
                                    <li>организация дренирования земельных участков, обустройство систем водоотведения;</li>
                                    <li>обустройство фундаментов;</li>
                                    <li>строительство теплиц, защита сельскохозяйственных культур от сорняков;</li>
                                    <li>ландшафтный дизайн.</li>
                                </ul>
                                <br>
                                <br>
                                Широкий выбор и универсальность обеспечивают широкую область применения материала, а цена на геосинтетические материалы позволяет добиться существенной экономии в процессе строительства и эксплуатации объектов гражданской, промышленной, транспортной и сельскохозяйственной инфраструктуры.
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
                <div class="basic-hca__action"></div>
            </div>
        </div>
        <div class="gap-lg">
            <div class="benefit">
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-ozon.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Premium-продавец на Ozon</div>
                        <div class="card__text-content">
                            Рейтинг 4,8 из 5<br>
                            100% доставленных заказов вовремя
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-avito.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Проверенный партнер Авито</div>
                        <div class="card__text-content">
                            Более 4-х лет на площадке<br>
                            Рейтинг 4,8 из 5
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-messages.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Более 1000 отзывов</div>
                        <div class="card__text-content">
                            На площадках
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Ozon,</span></a>
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Авито,</span></a>
                            <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Яндекс&nbsp;Карты</span></a>
                        </div>
                    </div>
                </div>
                <div class="card card-benefit">
                    <div class="card__view">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/benefit-box-tick.svg"
                                alt="Изображение блока"
                        >
                    </div>
                    <div class="card__descr">
                        <div class="card__title">Более 10 тысяч заказов</div>
                        <div class="card__text-content">
                            Доставлено нашим клиентам по всей России
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>