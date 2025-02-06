<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl">
			<div class="cart">
				<div class="cart-content cart-content--empty">
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

					<div class="cart-content__layout">
						<div class="cart-content__grid">
							<div class="cart-content-empty">
							    <div class="cart-content-empty-container">
                                    <a class="cart-content-empty__view" href="javascript:;">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#menu-shopping-cart-2"></use>
                                        </svg>
                                    </a>
                                    <div class="cart-content-empty__descr">
                                        <div class="cart-content-empty__title h4">Корзина пуста</div>
                                        <div class="cart-content-empty__subtitle">
                                            Воспользуйтесь <a class="cart-content-empty__descr-link" href="javascript:;">поиском</a> или <a class="cart-content-empty__descr-link" href="javascript:;">каталогом</a>
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