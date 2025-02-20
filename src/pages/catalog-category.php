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
                <div class="gap-lg">
                    <h1 class="h1">Каталог продукции Геодвор</h1>
                </div>
                <div class="gap-lg card-list card-list--catalog">
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc1.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Спанбонд</span>
                        <span class="card__text-content">254 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc2.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Геотекстиль</span>
                        <span class="card__text-content">178 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc3.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Габионы сварные</span>
                        <span class="card__text-content">56 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc4.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Габионы</span>
                        <span class="card__text-content">41 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc5.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Профилированная мембрана</span>
                        <span class="card__text-content">1 810 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc6.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Фасадная сетка</span>
                        <span class="card__text-content">254 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc7.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Пленки</span>
                        <span class="card__text-content">178 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc8.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Дренажная система</span>
                        <span class="card__text-content">56 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc9.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Канализация</span>
                        <span class="card__text-content">41 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc10.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Водоснабжение</span>
                        <span class="card__text-content">1 810 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
                    <a class="card card-catalog-category" href="javascript:;">
                    <span class="card__view">
                        <img
                            loading="lazy"
                            src="img/cc11.png"
                            class="image"
                            width="77"
                            height="77"
                            alt="Изображение блока"
                        >
                    </span>
                        <span class="card__descr">
                        <span class="card__title">Геосетки</span>
                        <span class="card__text-content">345 товара</span>
                        <span class="card__fall-pointer">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#chevron-right"></use>
                            </svg>
                        </span>
                    </span>
                    </a>
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
                            data-spoiler-mobile-only
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
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>