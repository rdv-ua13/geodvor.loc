<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl">
			<div class="cart">
				<div class="cart-content">
					<div class="gap-md">
						<div class="catalog-heading">
							<div class="catalog-heading__back">
								<a class="catalog-heading__back-link" href="javascript:;">
									<svg class="icon icon-xs">
										<use href="img/sprite.svg#chevron-left"></use>
									</svg>
									<span>Вернуться к покупкам</span>
								</a>
							</div>
							<div class="h1 catalog-heading__title">Корзина</div>
							<div class="catalog-heading__action">
								<a class="btn-reset btn btn-mini" href="javascript:;" data-fancybox data-src="#modal-cart-delete">
									<svg class="icon btn__icon">
										<use href="img/sprite.svg#trash"></use>
									</svg>
									<span class="btn__text">Удалить всё</span>
								</a>
							</div>
							<div class="catalog-heading__toolbar">
								<div class="catalog-heading__toolbar-item catalog-heading__toolbar-action">
									<button class="btn-reset btn btn-link">
										<svg class="icon icon-xs btn__icon">
											<use href="img/sprite.svg#printer"></use>
										</svg>
										<span class="btn__text">Распечатать</span>
									</button>
									<button class="btn-reset btn btn-link" data-fancybox data-src="#modal-share-cart">
										<svg class="icon icon-xs btn__icon">
											<use href="img/sprite.svg#share"></use>
										</svg>
										<span class="btn__text">Поделиться</span>
									</button>
									<button class="btn-reset btn btn-link" data-fancybox data-src="#modal-estimate">
										<svg class="icon icon-xs btn__icon">
											<use href="img/sprite.svg#inbox-in"></use>
										</svg>
										<span class="btn__text">В смету</span>
									</button>
								</div>
								<div class="catalog-heading__toolbar-item">
								<span class="custom-checkbox">
									<input id="cart-sort-category" class="custom-checkbox__input" type="checkbox" checked>
									<label for="cart-sort-category" class="custom-checkbox__label-for">Сортировать по категориям</label>
								</span>
								</div>
							</div>
						</div>
					</div>
					<div class="gap-md">
                        <div class="cart-quick-add">
                            <div class="input-search-wrapper">
                                <input
                                        class="input-reset input-search"
                                        type="search"
                                        name=""
                                        placeholder="Введите артикул или название для быстрого добавления товара"
                                        autocomplete="off"
                                        onclick="$(this).closest('.cart-quick-add').toggleClass('active');"
                                >
                                <button class="btn-reset btn btn-link input-delete-btn">
                                    <svg class="icon btn__icon icon-xs">
                                        <use href="img/sprite.svg#cross"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="cart-quick-add__results">
                                <div class="search-results">
                                    <div class="search-results__header">
                                        <div class="search-results__header-top">
                                            <div class="search-results__title h4">Быстрое добавление товара</div>
                                            <div class="search-results__close">
                                                <svg class="icon icon-md">
                                                    <use href="img/sprite.svg#cross"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="search-results__search">
                                            <div class="search-results__search-item">
                                                <div class="input-search-wrapper">
                                                    <input
                                                            class="input-reset input-search"
                                                            type="search"
                                                            name=""
                                                            value=""
                                                            placeholder="Введите артикул или название для быстрого добавления товара"
                                                            autocomplete="off"
                                                    >
                                                    <button class="btn-reset btn btn-link input-delete-btn">
                                                        <svg class="icon btn__icon icon-xs">
                                                            <use href="img/sprite.svg#cross"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results__suggest">
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
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
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#minus"></use>
                                                                    </svg>
                                                                    <svg class="icon icon-sm btn__icon icon-selected">
                                                                        <use href="img/sprite.svg#trash"></use>
                                                                    </svg>
                                                                </button>
                                                                <input id="" class="input-reset cart-quantity-input" type="text" placeholder="999" value="1" max="999" data-mult="1">
                                                                <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                    <svg class="icon icon-sm btn__icon">
                                                                        <use href="img/sprite.svg#plus"></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <button class="btn-reset btn btn-mini btn-primary cart-in" type="button">
                                                                <span class="btn__text">В КОРЗИНУ</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="gap-md">
						<div class="cart-delivery-info">
							<div class="cart-delivery-info__view">
								<svg class="icon">
									<use href="img/sprite.svg#menu-truck-2"></use>
								</svg>
							</div>
							<div class="cart-delivery-info__descr">
							<span class="cart-delivery-info__caption">
								<span class="cart-delivery-info__title h5">Стоимость доставки будет больше на 829 ₽</span>
								<span class="cart-delivery-info__subtitle">Добавьте товары еще на 829 рублей и стоимость доставки уменьшится</span>
							</span>
								<span class="cart-delivery-info__progress">
								<span class="progress-bar">
									<progress id="" class="visually-hidden progress-bar__indicator" value="17" max="100"></progress>
									<span class="progress-bar__bg">
										<span class="progress-bar__line"></span>
									</span>
								</span>
							</span>
							</div>
						</div>
					</div>

					<div class="cart-content__layout">
						<div class="cart-content__toolbar">
							<div class="cart-content__toolbar-item">
								<div class="custom-checkbox">
									<input
										class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
										type="checkbox"
										name=""
										data-checkall-for="cartCheckall"
									>
									<span class="text-secondary-color desktop-only">Выбрать все</span>
								</div>
							</div>
							<div class="cart-content__toolbar-item">
								<button class="btn-reset btn btn-link" data-fancybox data-src="#modal-estimate">
									<span class="btn__text">Добавить в смету</span>
								</button>
							</div>
							<div class="cart-content__toolbar-item cart-content-delete" data-fancybox data-src="#modal-cart-delete">
								<button class="btn-reset btn btn-link">
									<span class="btn__text">Удалить выбранные</span>
								</button>
							</div>
						</div>

						<div class="cart-content__grid">
                            <div class="cart-content__category" data-removable>
                                <div class="cart-content__category-heading">
                                    <div class="cart-content__category-title h5">Удлинители</div>
                                    <div class="cart-content__category-action">
                                        <a class="btn-reset btn btn-mini" href="javascript:;" data-delete-trigger>
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                            <span class="btn__text">Удалить категорию</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product" data-removable>
                                    <span class="card-product-check">
                                        <span class="custom-checkbox">
                                            <input
                                                    class="custom-checkbox__input checkall-group"
                                                    type="checkbox"
                                                    name=""
                                                    data-checkall-group="cartCheckall"
                                            >
                                        </span>
                                    </span>
                                    <span class="card-product-view">
                                        <picture>
                                            <source srcset="img/product.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/product.png"
                                                    class="image"
                                                    width="70"
                                                    height="70"
                                                    alt="Изображение блока"
                                            >
                                        </picture>
                                    </span>
                                    <span class="card-product-descr">
                                        <span class="card-product-descr__top">
                                            <span class="card-product-descr__info">
                                                <span class="product-code"><span>ZB3327018</span></span>
                                                <span class="card-product-descr__availability product-availability in-stock">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                                    </svg>
                                                    <span>Товар в наличии</span>
                                                </span>
                                            </span>

                                            <span class="card-product-descr__title">
                                                <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                            </span>
                                            <span class="card-product-descr__text">
                                                <span>0,4 кг</span>
                                            </span>
                                        </span>
                                        <span class="card-product-descr__bottom">
                                            <span class="card-product-descr__price">
                                                <span class="card-product-descr__price-total">2 956,80 ₽</span>
                                                <span class="card-product-descr__price-current">1 478,40 ₽ за шт.</span>
                                            </span>
                                            <span class="card-product-descr__cart product-card__cart cart-buy">
                                                <span class="cart-quantity">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                            <use href="img/sprite.svg#trash"></use>
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
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </span>
                                                <span class="card-product-descr__delete" data-delete-trigger>
                                                    <svg class="icon icon-sm">
                                                        <use href="img/sprite.svg#trash"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                                <div class="card-product" data-removable>
                                    <span class="card-product-check">
                                        <span class="custom-checkbox">
                                            <input
                                                    class="custom-checkbox__input checkall-group"
                                                    type="checkbox"
                                                    name=""
                                                    data-checkall-group="cartCheckall"
                                            >
                                        </span>
                                    </span>
                                    <span class="card-product-view">
								<picture>
									<source srcset="img/product.webp" type="image/webp">
									<img
                                            loading="lazy"
                                            src="img/product.png"
                                            class="image"
                                            width="70"
                                            height="70"
                                            alt="Изображение блока"
                                    >
								</picture>
							</span>
                                    <span class="card-product-descr">
								<span class="card-product-descr__top">
									<span class="card-product-descr__info">
										<span class="product-code"><span>ZB3327018</span></span>
										<span class="card-product-descr__availability product-availability in-stock">
											<svg class="icon">
												<use href="img/sprite.svg#checkbox-rec"></use>
											</svg>
											<span>Товар в наличии</span>
										</span>
									</span>

									<span class="card-product-descr__title">
										<a href="javascript:;">SE Удлинитель катушечный Thorsman 4 роз 15м 3х1.5 IP20</a>
									</span>
									<span class="card-product-descr__text">
										<span>0,4 кг</span>
									</span>
								</span>
								<span class="card-product-descr__bottom">
									<span class="card-product-descr__price">
										<span class="card-product-descr__price-total">2 956,80 ₽</span>
										<span class="card-product-descr__price-current">1 478,40 ₽ за шт.</span>
									</span>
									<span class="card-product-descr__cart product-card__cart cart-buy">
										<span class="cart-quantity">
											<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#minus"></use>
												</svg>
												<svg class="icon icon-sm btn__icon icon-selected">
													<use href="img/sprite.svg#trash"></use>
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
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#plus"></use>
												</svg>
											</button>
										</span>
										<span class="card-product-descr__delete" data-delete-trigger>
											<svg class="icon icon-sm">
												<use href="img/sprite.svg#trash"></use>
											</svg>
										</span>
									</span>
								</span>
							</span>
                                </div>
                            </div>
                            <div class="cart-content__category" data-removable>
                                <div class="cart-content__category-heading">
                                    <div class="cart-content__category-title h5">Системы автоматического управления приборами</div>
                                    <div class="cart-content__category-action">
                                        <a class="btn-reset btn btn-mini" href="javascript:;" data-delete-trigger>
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                            <span class="btn__text">Удалить категорию</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product" data-removable>
                                <span class="card-product-check">
                                    <span class="custom-checkbox">
                                        <input
                                                class="custom-checkbox__input checkall-group"
                                                type="checkbox"
                                                name=""
                                                data-checkall-group="cartCheckall"
                                        >
                                    </span>
                                </span>
                                    <span class="card-product-view">
								<picture>
									<source srcset="img/product.webp" type="image/webp">
									<img
                                            loading="lazy"
                                            src="img/product.png"
                                            class="image"
                                            width="70"
                                            height="70"
                                            alt="Изображение блока"
                                    >
								</picture>
							</span>
                                    <span class="card-product-descr">
								<span class="card-product-descr__top">
									<span class="card-product-descr__info">
										<span class="product-code"><span>ZB3327018</span></span>
										<span class="card-product-descr__availability product-availability in-stock">
											<svg class="icon">
												<use href="img/sprite.svg#checkbox-rec"></use>
											</svg>
											<span>Товар в наличии</span>
										</span>
									</span>

									<span class="card-product-descr__title">
										<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
									</span>
									<span class="card-product-descr__text">
										<span>0,4 кг</span>
									</span>
								</span>
								<span class="card-product-descr__bottom">
									<span class="card-product-descr__price">
										<span class="card-product-descr__price-total">2 956,80 ₽</span>
										<span class="card-product-descr__price-current">1 478,40 ₽ за шт.</span>
									</span>
									<span class="card-product-descr__cart product-card__cart cart-buy">
										<span class="cart-quantity">
											<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#minus"></use>
												</svg>
												<svg class="icon icon-sm btn__icon icon-selected">
													<use href="img/sprite.svg#trash"></use>
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
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#plus"></use>
												</svg>
											</button>
										</span>
										<span class="card-product-descr__delete" data-delete-trigger>
											<svg class="icon icon-sm">
												<use href="img/sprite.svg#trash"></use>
											</svg>
										</span>
									</span>
								</span>
							</span>
                                </div>
                                <div class="card-product" data-removable>
                                <span class="card-product-check">
                                    <span class="custom-checkbox">
                                        <input
                                                class="custom-checkbox__input checkall-group"
                                                type="checkbox"
                                                name=""
                                                data-checkall-group="cartCheckall"
                                        >
                                    </span>
                                </span>
                                    <span class="card-product-view">
								<picture>
									<source srcset="img/product.webp" type="image/webp">
									<img
                                            loading="lazy"
                                            src="img/product.png"
                                            class="image"
                                            width="70"
                                            height="70"
                                            alt="Изображение блока"
                                    >
								</picture>
							</span>
                                    <span class="card-product-descr">
								<span class="card-product-descr__top">
									<span class="card-product-descr__info">
										<span class="product-code"><span>ZB3327018</span></span>
										<span class="card-product-descr__availability product-availability in-stock">
											<svg class="icon">
												<use href="img/sprite.svg#checkbox-rec"></use>
											</svg>
											<span>Товар в наличии</span>
										</span>
									</span>

									<span class="card-product-descr__title">
										<a href="javascript:;">SE Удлинитель катушечный Thorsman 4 роз 15м 3х1.5 IP20</a>
									</span>
									<span class="card-product-descr__text">
										<span>0,4 кг</span>
									</span>
								</span>
								<span class="card-product-descr__bottom">
									<span class="card-product-descr__price">
										<span class="card-product-descr__price-total">2 956,80 ₽</span>
										<span class="card-product-descr__price-current">1 478,40 ₽ за шт.</span>
									</span>
									<span class="card-product-descr__cart product-card__cart cart-buy">
										<span class="cart-quantity">
											<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#minus"></use>
												</svg>
												<svg class="icon icon-sm btn__icon icon-selected">
													<use href="img/sprite.svg#trash"></use>
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
												<svg class="icon icon-sm btn__icon">
													<use href="img/sprite.svg#plus"></use>
												</svg>
											</button>
										</span>
										<span class="card-product-descr__delete" data-delete-trigger>
											<svg class="icon icon-sm">
												<use href="img/sprite.svg#trash"></use>
											</svg>
										</span>
									</span>
								</span>
							</span>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="cart-sidebar">
					<div class="cart-sidebar-gap">
						<div class="cart-sidebar__item">
							<div class="cart-sidebar__item-part cart-sidebar-ordering">
								<button class="btn-reset btn btn-primary">
									<span class="btn__text">Перейти к оформлению</span>
								</button>
							</div>
							<div class="cart-sidebar__item-part">
								<div class="gap-md">
									<table class="table-descr table-descr-sb">
										<tbody>
										<tr>
											<td>
												<span class="h5">Итого</span>
											</td>
											<td>
												<span class="h4">14 263 ₽</span>
											</td>
										</tr>
										<tr>
											<td>
												<span>Начислим баллов</span>
											</td>
											<td>
											<span class="price-bonus">
												<span class="green-color semi-bold">+ 346,99</span>
												<svg class="icon icon-xs">
													<use href="img/sprite.svg#fill-bonus"></use>
												</svg>
											</span>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
								<div class="gap-md">
                                    <div class="input-wrapper input-promocode input-promocode--has-data input-promocode--success">
                                        <input
                                                class="input-reset input"
                                                type="text"
                                                name=""
                                                placeholder="Промокод"
                                                value="ELECTRO100"
                                                autocomplete="off"
                                        >
                                        <button class="btn-reset btn btn-link input-promocode-icon">
                                            <svg class="icon btn__icon icon-xs">
                                                <use href="img/sprite.svg#fill-check-rec"></use>
                                            </svg>
                                        </button>
                                        <span class="input-promocode-note">При применении промокода, использование бонусных баллов невозможно, но их начисление за покупку сохраняется</span>
                                    </div>
                                    <?/* // promocode error
                                    <div class="input-wrapper input-promocode input-promocode--has-data input-promocode--error">
                                        <input
                                                class="input-reset input"
                                                type="text"
                                                name=""
                                                placeholder="Промокод"
                                                value="ELECTRO100"
                                                autocomplete="off"
                                        >
                                        <button class="btn-reset btn btn-link input-promocode-icon">
                                            <svg class="icon btn__icon icon-xs">
                                                <use href="img/sprite.svg#fill-cross-rec"></use>
                                            </svg>
                                        </button>
                                        <span class="input-promocode-note">Недействительный промокод</span>
                                    </div>
                                    */?>
								</div>
								<div class="">
									<table class="table-descr table-descr-sb">
										<tbody>
										<tr>
											<td>
												<span>Доступно баллов</span>
											</td>
											<td>
											<span class="price-bonus">
												<span class="semi-bold">2 726</span>
												<svg class="icon icon-xs">
													<use href="img/sprite.svg#fill-bonus"></use>
												</svg>
											</span>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="cart-sidebar__item-part">
								<div class="">
									<table class="table-descr table-descr-sb">
										<tbody>
										<tr>
											<td>
												<span>4 товара</span>
											</td>
											<td>
												<span class="semi-bold">18 276 ₽</span>
											</td>
										</tr>
										<tr>
											<td>
												<span>Скидки на товары</span>
											</td>
											<td>
												<span class="green-color semi-bold">- 1 071 ₽</span>
											</td>
										</tr>
										<tr>
											<td>
												<span>Вес заказа</span>
											</td>
											<td>
												<span class="semi-bold">3,4 кг</span>
											</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="cart-sidebar-gap">
						<div class="gap-sm">
							<button class="btn-reset become-auth-banner" type="button">
								<div><b>Авторизуйтесь, </b></div>
								<div>чтобы снизить цену</div>
							</button>
						</div>
						<div class="gap-sm">
							<button class="btn-reset become-auth-banner" type="button">
								<div><b>Зарегистрируйтесь</b> и получите </div>
								<div>500 привественных баллов</div>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="gap-xl product-card-mobile-section">
			<div class="product-card-mobile-section-container">
				<div class="gap-lg">
					<div class="h2">Вам может понадобиться</div>
				</div>

				<div class="catalog-extra-slider out-container-x">
					<div class="gap-lg">
						<div class="tag-bar swiper" data-tag-bar-slider>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<span class="btn__text">Все товары</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-wiring-products"></use>
										</svg>
										<span class="btn__text">Розетки и выключатели</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-low-voltage"></use>
										</svg>
										<span class="btn__text">Низковольтное оборудование</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-shields-cabinets"></use>
										</svg>
										<span class="btn__text">Щиты, шкафы, боксы</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-lighting"></use>
										</svg>
										<span class="btn__text">Светотехника</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-tools"></use>
										</svg>
										<span class="btn__text">Инструменты и монтажные материалы</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-ventilation"></use>
										</svg>
										<span class="btn__text">Системы вентиляции и обогрева</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-grounding"></use>
										</svg>
										<span class="btn__text">Молниезащита и заземление</span>
									</label>
								</div>
								<div class="swiper-slide">
									<label class="btn btn-mini btn-b-light tag-bar-slide-item">
										<input
											class="visually-hidden"
											type="checkbox"
											name="EXTRA[TAGS][]"
											value=""
										>
										<svg class="icon btn__icon">
											<use href="img/sprite.svg#catalog-power-devices"></use>
										</svg>
										<span class="btn__text">Элементы и устройства питания</span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="basic-slider-wrap">
						<div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>46- 312792P13</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">6 173,10 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-5.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-5.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>2348958- 87</span></span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-5.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-5.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>Z241- 0008</span></span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">5 827,99 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>ZB3327018</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability in-stock">
													<svg class="icon">
														<use href="img/sprite.svg#checkbox-rec"></use>
													</svg>
													<span>Товар в наличии</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">1 478,40 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="card-product card-product-default" data-card-product>
										<div class="card-product-view">
											<div class="mini-slider">
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-2.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-2.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 1;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-3.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-3.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<div class="mini-slider__slide">
													<picture>
														<source srcset="img/product-4.webp" type="image/webp">
														<img
															loading="lazy"
															src="img/product-4.png"
															class="mini-slider__img"
															width="208"
															height="208"
															style="opacity: 0;"
															alt="Изображение блока"
														>
													</picture>
												</div>
												<ul class="list-reset mini-slider__dots"></ul>
											</div>
											<div class="card-product-sale-label">
												<span class="sale-label sale-label-red">20%</span>
												<span class="sale-label sale-label-yellow">Распродажа</span>
												<span class="sale-label sale-label-green">Хит</span>
											</div>
										</div>
										<div class="card-product-descr">
											<div class="card-product-descr__top">
												<div class="card-product-descr__info">
													<span class="product-code"><span>46- 312792P13</span></span>
													<span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
												</div>
												<div class="card-product-descr__availability product-availability on-order">
													<svg class="icon">
														<use href="img/sprite.svg#timer"></use>
													</svg>
													<span>Под заказ</span>
												</div>
												<div class="card-product-descr__title">
													<a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
												</div>
											</div>

											<div class="card-product-descr__bottom">
												<div class="card-product-descr__price">
													<div class="card-product-descr__price-title">Цена за штуку</div>
													<div class="card-product-descr__price-display">
														<div class="card-product-descr__price-discount">
															<div class="card-product-descr__price-originally">1 624,50 ₽</div>
															<div class="card-product-descr__price-discount-label">10%</div>
														</div>
														<div class="card-product-descr__price-current">6 173,10 ₽</div>
													</div>
													<div class="card-product-descr__price-bonus">
														<span>+ 346,99</span>
														<svg class="icon">
															<use href="img/sprite.svg#fill-bonus"></use>
														</svg>
													</div>
												</div>
												<div class="card-product-descr__cart product-card__cart cart-buy">
													<div class="product-card__cart-quantity cart-quantity disabled">
														<button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#minus"></use>
															</svg>
															<svg class="icon icon-sm btn__icon icon-selected">
																<use href="img/sprite.svg#trash"></use>
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
															<svg class="icon icon-sm btn__icon">
																<use href="img/sprite.svg#plus"></use>
															</svg>
														</button>
													</div>
													<button class="btn-reset btn btn-primary cart-in" type="button">
														<span class="btn__text">В КОРЗИНУ</span>
													</button>
													<div class="card-product-act">
														<button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
															<svg class="icon btn__icon">
																<use href="img/sprite.svg#fill-more-horiz"></use>
															</svg>
														</button>
														<div class="card-product-act__list" data-card-product-act-content>
															<button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
																<svg class="icon btn__icon icon-default">
																	<use href="img/sprite.svg#bookmark-plus"></use>
																</svg>
																<span class="btn__text text-default">В избранное</span>
																<svg class="icon btn__icon icon-selected">
																	<use href="img/sprite.svg#fill-bookmark-check"></use>
																</svg>
																<span class="btn__text text-selected">В избранном</span>
															</button>
															<button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#barchart"></use>
																</svg>
																<span class="btn__text text-default">Сравнить</span>
																<span class="btn__text text-selected">В сравнении</span>
															</button>
															<button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
																<svg class="icon btn__icon">
																	<use href="img/sprite.svg#inbox-in"></use>
																</svg>
																<span class="btn__text">В смету</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-navigation">
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?/* todo (@Masterkov): добавить класс "<body class='has-cart-menu-panel'>" для страниц корзины */?>
<div class="cart-mobile-menu-panel">
    <div class="cart-mobile-menu-panel__descr">
        <div class="cart-mobile-menu-panel__title">Итого</div>
        <div class="cart-mobile-menu-panel__value">18 276 ₽</div>
    </div>
    <div class="cart-mobile-menu-panel__btn">
        <button class="btn-reset btn btn-primary">
            <span class="btn__text">Перейти к оформлению</span>
        </button>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>