<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
    <div class="container">
        <div class="gap-xl">
            <div class="order order-confirm">
                <div class="gap-lg catalog-heading">
                    <div class="catalog-heading__back">
                        <a class="catalog-heading__back-link" href="javascript:;">
                            <svg class="icon icon-xs">
                                <use href="img/sprite.svg#chevron-left"></use>
                            </svg>
                            <span>Вернуться в корзину</span>
                        </a>
                    </div>
                    <div class="gap-sm h1 catalog-heading__title">Ваш заказ принят!</div>
                    <div class="catalog-heading__subtitle">Менеджер свяжется с вами для подтверждения заказа в ближайшее время. Наш номер +7 495 118-37-70</div>
                </div>
                <div class="order-content">
                    <div class="gap-lg-plus product-card-mobile-section">
                        <div class="product-card-mobile-section-container">
                            <div class="order-step">
                                <div class="order-step__content">
                                    <div class="order-step__gift">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#gift"></use>
                                        </svg>
                                        <span class="order-step__gift-descr">
                                            <span class="h5">Вам подарок!</span>
                                            <span>Выберите один из подарочных промокодов и используйте его в следующих заказах</span>
                                        </span>
                                        <span class="order-step__gift-promocode">
                                            <button class="btn-reset btn btn-primary" data-fancybox data-src="#modal-order-promocode">
                                                <span class="btn__text">Выбрать промокод</span>
                                            </button>
                                        </span>
                                    </div>
                                    <div class="order-step__data order-step__data-confirm">
                                        <div class="order-step-row">
                                            <div class="order-status">
                                                <div class="gap-xs h4">
                                                    Номер заказа – <span class="red-color">82509</span>
                                                </div>
                                                <div class="order-status-pay">
                                                    <span>Статус:</span>
													<?/*<span class="order-status-pay__pointer paid">Оплачен</span>*/?>
                                                    <span class="order-status-pay__pointer waiting">Ждёт оплаты</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="order-step-row">
                                            <div class="gap-sm h5">Детали доставки</div>
                                            <table class="table-descr">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span>Способ получения</span>
                                                    </td>
                                                    <td>
                                                        <span>СДЭК Самовывоз</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>Пункт самовывоза</span>
                                                    </td>
                                                    <td>
                                                        <span>пр. Ленина, 114, оф. 218</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="order-step-row">
                                            <div class="gap-sm h5">Оплата заказа</div>
                                            <table class="table-descr">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <span>Способ оплаты</span>
                                                    </td>
                                                    <td>
                                                        <span>При получении (наличными или картой)</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>Статус оплаты</span>
                                                    </td>
                                                    <td>
                                                        <span>Ожидает оплаты</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>Использованы бонусные баллы</span>
                                                    </td>
                                                    <td>
                                                        <span class="bonus">
                                                            <span class="bonus__value fw-normal">1500</span>
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                            </svg>
                                                        </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="order-step-row">
                                            <div class="btn-g">
                                                <button class="btn-reset btn btn-b-light">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#printer"></use>
                                                    </svg>
                                                    <span class="btn__text">Распечатать заказ</span>
                                                </button>
                                                <button class="btn-reset btn btn-b-light">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#share"></use>
                                                    </svg>
                                                    <span class="btn__text">Поделиться заказом</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-sidebar">
                    <div class="order-sidebar-gap">
                        <div class="order-sidebar__item">
                            <div class="order-sidebar__item-part">
                                <div class="order-final">
                                    <div class="order-final__title h5">Ваш заказ</div>
                                    <div class="order-final__content">
                                        <div class="card-product">
                                        <span class="card-product-view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </span>
                                            <span class="card-product-descr">
                                            <span class="card-product-descr__title">
                                                <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                            </span>
                                            <span class="card-product-descr__price">2 956,80 ₽</span>
                                        </span>
                                        </div>
                                        <div class="card-product">
                                        <span class="card-product-view">
                                            <picture>
                                                <source srcset="img/product.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/product.png"
                                                        class="image"
                                                        width="40"
                                                        height="40"
                                                        alt="Изображение блока"
                                                >
                                            </picture>
                                        </span>
                                            <span class="card-product-descr">
                                            <span class="card-product-descr__title">
                                                <a href="javascript:;">SE Удлинитель катушечный Thorsman 4 роз 15м </a>
                                            </span>
                                            <span class="card-product-descr__price">7 956,80 ₽</span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-sidebar__item-part">
                                <div class="gap-xs">
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
                                        </tbody>
                                    </table>
                                </div>
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
                                                <span>Доставка</span>
                                            </td>
                                            <td>
                                                <span class="semi-bold">560 ₽</span>
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
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>