<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="cart">
		<div class="cp-heading">
            <h1 class="h1 cp-heading__title">Корзина</h1>
			<div class="cp-heading__back">
				<a class="cp-heading__back-link link" href="javascript:;">
					<svg class="icon icon-fill">
						<use href="img/sprite.svg#chevron-left"></use>
					</svg>
					<span>Вернуться к покупкам</span>
				</a>
			</div>
			<div class="cp-heading__cta">
				<button class="btn-reset btn btn-sm btn-ghost" type="button">
					<svg class="icon icon-fill">
						<use href="img/sprite.svg#print"></use>
					</svg>
					<span class="text-content">Распечатать</span>
				</button>
			</div>
		</div>

		<div class="gap-xl cp">
			<div class="cp-content">
                <div class="cart-quick-add">
                    <div class="cart-quick-add__search">
                        <div class="input-wrapper input-wrapper-search has-icon-l">
                            <input
                                    class="input-reset input input-secondary  testShowDropmenu01"
                                    type="search"
                                    name=""
                                    placeholder="Быстрое добавление товара"
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
                        </div>
                    </div>

                    <div class="cart-quick-add__results">
                        <div class="search-results">
                            <div class="search-results__header">
                                <div class="search-results__header-top">
                                    <div class="search-results__title h4">Быстрое добавление товара</div>
                                    <div class="search-results__close  testHideDropmenu01">
                                        <svg class="icon icon-fill icon-lg">
                                            <use href="img/sprite.svg#cross"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="search-results__search">
                                    <div class="search-results__search-item">
                                        <div class="input-wrapper input-wrapper-search has-icon-l">
                                            <input
                                                    class="input-reset input has-data"
                                                    type="search"
                                                    name=""
                                                    value="геотекстиль"
                                                    placeholder="Быстрое добавление товара"
                                            >
                                            <label class="input-icon input-icon-l">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#search"></use>
                                                </svg>
                                            </label>
                                            <button class="btn-reset btn input-delete-btn input-delete-btn--text">
                                                <span class="text-content">Очистить</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-results__preview-title">Товары:</div>
                            </div>
                            <div class="search-results__suggest">
                                <div class="search-results__suggest-list-wrapper">
                                    <div class="search-results__suggest-list">
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp1.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">910,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp2.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">300 ₽</div>
                                                        <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp3.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">225 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp1.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">910,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp2.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">300 ₽</div>
                                                        <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp3.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">225 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp1.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">910,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp2.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">300 ₽</div>
                                                        <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="search-results-product">
                                            <div class="search-results-product__view">
                                                <img
                                                        loading="lazy"
                                                        src="img/cp3.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </div>
                                            <div class="search-results-product__descr">
                                                <div class="search-results-product__info">
                                                    <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                    <div class="search-results-product__price">
                                                        <div class="search-results-product__price-current">225 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="search-results-product__cart">
                                                    <button class="btn-reset btn" type="button">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shopping-cart"></use>
                                                        </svg>
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list">
                    <div class="card card-product">
                        <a class="card__view" href="javascript:;">
                            <img
                                loading="lazy"
                                class="image"
                                src="img/cp1.png"
                                width="40"
                                height="40"
                                alt="Изображение блока"
                            >
                        </a>
                        <div class="card__descr">
                            <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                            <div class="card__stock product-stock in-stock">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                </svg>
                                <span>Доставим завтра</span>
                            </div>

                            <div class="card__cta">
                                <div class="card__price">
                                    <span class="card__price-current">910 ₽</span>
                                    <span class="card__price-origin">300 ₽ за рулон</span>
                                </div>

                                <div class="card__cart cart-buy">
                                    <div class="cart-quantity enabled">
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
                                    <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger data-fancybox data-src="#modal-delete-product">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#trash"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-product" data-removable>
                        <a class="card__view" href="javascript:;">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/cp2.png"
                                    width="40"
                                    height="40"
                                    alt="Изображение блока"
                            >
                        </a>
                        <div class="card__descr">
                            <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                            <div class="card__stock product-stock in-stock">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                </svg>
                                <span>Доставим завтра</span>
                            </div>

                            <div class="card__cta">
                                <div class="card__price">
                                    <span class="card__price-current">300 ₽</span>
                                    <span class="card__price-origin">300 ₽ за шт.</span>
                                </div>

                                <div class="card__cart cart-buy">
                                    <div class="cart-quantity enabled">
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
                                    <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#trash"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card card-product">
                        <a class="card__view" href="javascript:;">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/cp3.png"
                                    width="40"
                                    height="40"
                                    alt="Изображение блока"
                            >
                        </a>
                        <div class="card__descr">
                            <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                            <div class="card__stock product-stock in-stock">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                </svg>
                                <span>Доставим завтра</span>
                            </div>

                            <div class="card__cta">
                                <div class="card__price">
                                    <span class="card__price-current">225 ₽</span>
                                    <span class="card__price-origin">225 ₽ за шт.</span>
                                </div>

                                <div class="card__cart cart-buy">
                                    <div class="cart-quantity enabled">
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
                                    <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#trash"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card card-product">
                        <a class="card__view" href="javascript:;">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/cp1.png"
                                    width="40"
                                    height="40"
                                    alt="Изображение блока"
                            >
                        </a>
                        <div class="card__descr">
                            <a class="card__title " href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2 с длинным названием</a>

                            <div class="card__stock product-stock in-stock">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                </svg>
                                <span>Доставим завтра</span>
                            </div>

                            <div class="card__cta">
                                <div class="card__price">
                                    <span class="card__price-current">5800 ₽</span>
                                    <span class="card__price-origin">5800 ₽ за шт.</span>
                                </div>

                                <div class="card__cart cart-buy">
                                    <div class="cart-quantity enabled">
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
                                    <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#trash"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="gap-md cp-sidebar cp-content-sidebar">
                    <div class="cp-sidebar__item">
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
                            <button class="btn-reset btn w-100" type="button">
                                <span class="text-content">Перейти к оформлению</span>
                            </button>
                        </div>
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                            <table class="table-descr table-descr--sb table-descr--total">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Итого</span>
                                    </td>
                                    <td>
                                        <span>7950 ₽</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input input-secondary"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Промокод"
                                >
                            </div>
                        </div>
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                            <table class="table-descr table-descr--sb">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-normal">4 товара</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">7950 ₽</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-normal">Скидки на товары</span>
                                    </td>
                                    <td>
                                        <span class="brand-color fw-semibold">-570 ₽</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
			<div class="cp-sidebar">
				<div class="cp-sidebar__item">
                    <div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
                        <button class="btn-reset btn w-100" type="button">
                            <span class="text-content">Перейти к оформлению</span>
                        </button>
                    </div>
                    <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                        <table class="table-descr table-descr--sb table-descr--total">
                            <tbody>
                            <tr>
                                <td>
                                    <span>Итого</span>
                                </td>
                                <td>
                                    <span>7950 ₽</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Промокод"
                            >
                        </div>
                    </div>
                    <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                        <table class="table-descr table-descr--sb">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="fw-normal">4 товара</span>
                                </td>
                                <td>
                                    <span class="fw-semibold">7950 ₽</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-normal">Скидки на товары</span>
                                </td>
                                <td>
                                    <span class="brand-color fw-semibold">-570 ₽</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>

		<div class="gap-xl">
			<div class="hr hr-out"></div>
		</div>

		<div class="gap-xl">
			<div class="basic-hca">
				<div class="basic-hca__heading">
					<div class="h2">Вам может понадобиться</div>
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
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>