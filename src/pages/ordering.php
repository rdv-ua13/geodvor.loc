<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl">
			<form action="" method="" class="order">
				<div class="order-content">
					<div class="gap-lg-plus">
						<div class="catalog-heading">
							<div class="catalog-heading__back">
								<a class="catalog-heading__back-link" href="javascript:;">
									<svg class="icon icon-xs">
										<use href="img/sprite.svg#chevron-left"></use>
									</svg>
									<span>Вернуться в корзину</span>
								</a>
							</div>
							<div class="h1 catalog-heading__title">Оформление заказа</div>
						</div>
					</div>
                    <div class="gap-lg-plus product-card-mobile-section">
                        <div class="product-card-mobile-section-container">
                            <div class="order-step">
                                <div class="order-step__header">
                                    <div class="order-step__title-pre">
                                        <span>01</span>
                                        <span>—</span>
                                    </div>
                                    <div class="order-step__title h4">Данные покупателя</div>
                                </div>
                                <div class="order-step__content">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container swiper" data-tab="tab-order-step-one">
                                            <div class="basic-tabs-wrapper swiper-wrapper">
                                                <div class="basic-tabs-item swiper-slide">
                                                    <button class="btn-reset btn btn-light basic-tabs-trigger selected" type="button" data-target="0">
                                                        <span class="btn__text basic-tabs-trigger__text">Физическое лицо</span>
                                                    </button>
                                                </div>
                                                <div class="basic-tabs-item swiper-slide">
                                                    <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="1">
                                                        <span class="btn__text basic-tabs-trigger__text">Юридическое лицо</span>
                                                    </button>
                                                </div>
                                                <div class="basic-tabs-item swiper-slide">
                                                    <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="2">
                                                        <span class="btn__text basic-tabs-trigger__text">ИП</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="basic-tabs-content" data-tab-content="tab-order-step-one">
                                        <div class="basic-tabs-content__panel active" data-id="0">
                                            <div class="order-step__data">
                                                <div class="order-step-row order-step__notice">
                                                    <svg class="icon icon-sm">
                                                        <use href="img/sprite.svg#user-square"></use>
                                                    </svg>
                                                    <span>
                                                        Не хотите каждый раз заново заполнять данные?
                                                        <a class="link-red" href="javascript:;">Войдите в профиль</a>
                                                    </span>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Номер телефона для связи</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input isPhone"
                                                                    type="tel"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="+7 (999) 999-99-99"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Электронная почта</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="email"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="mail@mail.ru"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Ваше имя</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Ваше имя"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input">
                                                        <div class="input-title semi-bold">Сфера деятельности</div>
                                                        <div class="input-wrapper input-wrapper-radio">
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-individual-one"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityIndividual"
                                                                >
                                                                <label for="order-activity-individual-one" class="custom-radio__label-for">Розничный покупатель</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-individual-two"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityIndividual"
                                                                >
                                                                <label for="order-activity-individual-two" class="custom-radio__label-for">Электромонтажник</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-individual-three"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityIndividual"
                                                                >
                                                                <label for="order-activity-individual-three" class="custom-radio__label-for">Дизайнер</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-individual-four"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityIndividual"
                                                                >
                                                                <label for="order-activity-individual-four" class="custom-radio__label-for">Щитовик</label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content__panel" data-id="1">
                                            <div class="order-step__data">
                                                <div class="order-step-row order-step__notice">
                                                    <svg class="icon icon-sm">
                                                        <use href="img/sprite.svg#user-square"></use>
                                                    </svg>
                                                    <span>
                                                        Не хотите каждый раз заново заполнять данные?
                                                        <a class="link-red" href="javascript:;">Войдите в профиль</a>
                                                    </span>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Номер телефона для связи</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input isPhone"
                                                                    type="tel"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="+7 (999) 999-99-99"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Электронная почта</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="email"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="mail@mail.ru"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Ваше имя</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Ваше имя"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row" data-org-container>
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">ИНН организации</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Найти по ИНН"
                                                                    autocomplete="off"
                                                                    data-org-trigger
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input">
                                                        <div class="input-title semi-bold">Сфера деятельности</div>
                                                        <div class="input-wrapper input-wrapper-radio">
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-one"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-one" class="custom-radio__label-for">OEM партнер</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-two"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-two" class="custom-radio__label-for">Эксплуатация</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-three"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-three" class="custom-radio__label-for">Электромонтажник</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-four"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-four" class="custom-radio__label-for">Дизайнер</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-five"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-five" class="custom-radio__label-for">Щитовик</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-entity-six"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityEntity"
                                                                >
                                                                <label for="order-activity-entity-six" class="custom-radio__label-for">СМО (Строительно-монтажная организация)</label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content__panel" data-id="2">
                                            <div class="order-step__data">
                                                <div class="order-step-row order-step__notice">
                                                    <svg class="icon icon-sm">
                                                        <use href="img/sprite.svg#user-square"></use>
                                                    </svg>
                                                    <span>
                                                        Не хотите каждый раз заново заполнять данные?
                                                        <a class="link-red" href="javascript:;">Войдите в профиль</a>
                                                    </span>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Номер телефона для связи</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input isPhone"
                                                                    type="tel"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="+7 (999) 999-99-99"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Электронная почта</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="email"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="mail@mail.ru"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Ваше имя</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Ваше имя"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row" data-org-container>
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">ИНН организации</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Найти по ИНН"
                                                                    autocomplete="off"
                                                                    data-org-trigger
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input">
                                                        <div class="input-title semi-bold">Сфера деятельности</div>
                                                        <div class="input-wrapper input-wrapper-radio">
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-one"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-one" class="custom-radio__label-for">OEM партнер</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-two"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-two" class="custom-radio__label-for">Эксплуатация</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-three"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-three" class="custom-radio__label-for">Электромонтажник</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-four"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-four" class="custom-radio__label-for">Дизайнер</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-five"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-five" class="custom-radio__label-for">Щитовик</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-six"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-six" class="custom-radio__label-for">СМО (Строительно-монтажная организация)</label>
                                                            </span>
                                                            <span class="custom-radio">
                                                                <input
                                                                        id="order-activity-private-entrepreneur-seven"
                                                                        class="custom-radio__input"
                                                                        type="checkbox"
                                                                        name="orderActivityPrivateEntrepreneur"
                                                                >
                                                                <label for="order-activity-private-entrepreneur-seven" class="custom-radio__label-for">Розничный покупатель</label>
                                                            </span>
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

                    <div class="gap-lg-plus product-card-mobile-section">
                        <div class="product-card-mobile-section-container">
                            <div class="order-step">
                                <div class="order-step__header">
                                    <div class="order-step__title-pre">
                                        <span>02</span>
                                        <span>—</span>
                                    </div>
                                    <div class="order-step__title h4">Выберите способ получения</div>
                                </div>
                                <div class="order-step__content">
                                    <div class="basic-tabs">
                                        <div class="basic-tabs-container swiper" data-tab="tab-order-step-two">
                                            <div class="basic-tabs-wrapper swiper-wrapper">
                                                <div class="basic-tabs-item swiper-slide">
                                                    <button class="btn-reset btn btn-light basic-tabs-trigger selected" type="button" data-target="0">
                                                        <span class="btn__text basic-tabs-trigger__text">Доставка</span>
                                                    </button>
                                                </div>
                                                <div class="basic-tabs-item swiper-slide">
                                                    <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="1">
                                                        <span class="btn__text basic-tabs-trigger__text">Самовывоз</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="basic-tabs-content" data-tab-content="tab-order-step-two">
                                        <div class="basic-tabs-content__panel active" data-id="0">
                                            <div class="order-step__data order-step-list">
                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Укажите адрес доставки</div>
                                                        <div class="input-wrapper">
                                                            <input
                                                                    class="input-reset input"
                                                                    type="text"
                                                                    name=""
                                                                    value=""
                                                                    placeholder="Начните вводить адрес"
                                                                    autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-delivery-one"
                                                                    class="custom-radio__input checked"
                                                                    type="checkbox"
                                                                    name="orderReceiveDelivery"
                                                                    checked
                                                            >
                                                            <label for="order-receive-delivery-one" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>Доставка курьером</span>
                                                                <span class="label-caption">560 ₽ + вернем 560 бонусов</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-delivery-two"
                                                                    class="custom-radio__input"
                                                                    type="checkbox"
                                                                    name="orderReceiveDelivery"
                                                            >
                                                            <label for="order-receive-delivery-two" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>СДЭК (самовывоз)</span>
                                                                <span class="label-caption">490 ₽ + вернем 490 бонусов. Срок доставки: 1 день</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-delivery-three"
                                                                    class="custom-radio__input"
                                                                    type="checkbox"
                                                                    name="orderReceiveDelivery"
                                                            >
                                                            <label for="order-receive-delivery-three" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>Доставка курьером</span>
                                                                <span class="label-caption">600 ₽ + вернем 600 бонусов. Только в пределах МКАД</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="order-step-row order-step-row-map">
                                                    <div class="order-map">
                                                        <div id="orderMap" class="order-map-content"></div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Комментарий к доставке</div>
                                                        <div class="input-wrapper">
                                                            <textarea
                                                                    class="textarea"
                                                                    name=""
                                                                    placeholder="Укажите дополнительные комментарии к доставке"
                                                            ></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <label for="order-receive-delivery-one" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span class="semi-bold">Стоимость доставки – 560 ₽</span>
                                                                <span class="label-caption">Вернем 560 бонусов</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-tabs-content__panel" data-id="1">
                                            <div class="order-step__data order-step-list">
                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-pickup-one"
                                                                    class="custom-radio__input checked"
                                                                    type="checkbox"
                                                                    name="orderReceivePickup"
                                                                    checked
                                                            >
                                                            <label for="order-receive-pickup-one" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>Центральный магазин</span>
                                                                <span class="label-caption">Москва, ул. Маршала Рыбалко, 10<br> Время работы: 09:00 – 20:00</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-pickup-two"
                                                                    class="custom-radio__input"
                                                                    type="checkbox"
                                                                    name="orderReceivePickup"
                                                            >
                                                            <label for="order-receive-pickup-two" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>Садовое кольцо</span>
                                                                <span class="label-caption">Москва, ул. Тверская, 114, корп. 2<br> Время работы: 10:00 – 21:00</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="order-step-row order-step-row-radio">
                                                    <div class="input-wrapper input-wrapper-radio">
                                                        <span class="custom-radio">
                                                            <input
                                                                    id="order-receive-pickup-three"
                                                                    class="custom-radio__input"
                                                                    type="checkbox"
                                                                    name="orderReceivePickup"
                                                            >
                                                            <label for="order-receive-pickup-three" class="custom-radio__label-for custom-radio__label-for-caption">
                                                                <span>Ленинградское ш.</span>
                                                                <span class="label-caption">Москва, ш. Ленинградское, 123/1<br> Время работы: 10:00 – 21:00</span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="order-step-row">
                                                    <div class="titled-input titled-input-label">
                                                        <div class="input-title">Комментарий к доставке</div>
                                                        <div class="input-wrapper">
                                                            <textarea
                                                                    class="textarea"
                                                                    name=""
                                                                    placeholder="Укажите дополнительные комментарии к доставке"
                                                            ></textarea>
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

                    <div class="gap-lg-plus product-card-mobile-section">
                        <div class="product-card-mobile-section-container">
                            <div class="order-step">
                                <div class="order-step__header">
                                    <div class="order-step__title-pre">
                                        <span>03</span>
                                        <span>—</span>
                                    </div>
                                    <div class="order-step__title h4">Выберите способ оплаты</div>
                                </div>
                                <div class="order-step__content">
                                    <div class="order-step__data order-step-list">
                                        <div class="order-step-row order-step-row-radio">
                                            <div class="input-wrapper input-wrapper-radio">
                                                <span class="custom-radio">
                                                    <input
                                                            id="order-payment-method-one"
                                                            class="custom-radio__input checked"
                                                            type="checkbox"
                                                            name="orderPaymentMethod"
                                                            checked
                                                    >
                                                    <label for="order-payment-method-one" class="custom-radio__label-for custom-radio__label-for-caption">
                                                        <span>При получениии (наличными или картой)</span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="order-step-row order-step-row-radio">
                                            <div class="input-wrapper input-wrapper-radio">
                                                <span class="custom-radio">
                                                    <input
                                                            id="order-payment-method-two"
                                                            class="custom-radio__input"
                                                            type="checkbox"
                                                            name="orderPaymentMethod"
                                                    >
                                                    <label for="order-payment-method-two" class="custom-radio__label-for custom-radio__label-for-payment-card">
                                                        <span>Банковской картой на сайте</span>
                                                        <span class="payment-card">
                                                            <span class="payment-card__item">
                                                                <img
                                                                        loading="lazy"
                                                                        class="image icon-visa"
                                                                        src="img/ps-visa.svg"
                                                                        width="32"
                                                                        height="11"
                                                                        alt="Изображение блока"
                                                                >
                                                            </span>
                                                            <span class="payment-card__item">
                                                                <img
                                                                        loading="lazy"
                                                                        class="image icon-mastercard"
                                                                        src="img/ps-mastercard.svg"
                                                                        width="30"
                                                                        height="16"
                                                                        alt="Изображение блока"
                                                                >
                                                            </span>
                                                            <span class="payment-card__item">
                                                                <img
                                                                        loading="lazy"
                                                                        class="image icon-mir"
                                                                        src="img/ps-mir.svg"
                                                                        width="40"
                                                                        height="10"
                                                                        alt="Изображение блока"
                                                                >
                                                            </span>
                                                        </span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="order-step__data order-step-bonus">
                                        <div class="gap-md h5">Использовать бонусные баллы</div>

                                        <div class="order-step-bonus-action">
                                            <div class="order-step-bonus-action__item order-step-bonus-available">
                                                <table class="table-descr table-descr-sb">
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Доступно баллов</span>
                                                        </td>
                                                        <td>
                                                            <span class="bonus">
                                                                <span class="bonus__value">2 726</span>
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#fill-bonus"></use>
                                                                </svg>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="order-step-bonus-action__item order-step-bonus-debit">
                                                <span class="order-step-bonus-debit__item">Оплатить баллами</span>
                                                <div class="input-wrapper order-step-bonus-debit__item">
                                                    <input
                                                            id="debitInputValue"
                                                            class="input-reset input"
                                                            type="text"
                                                            name=""
                                                            value=""
                                                            placeholder="0"
                                                            autocomplete="off"
                                                    >
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="order-step-bonus-action__item order-step-bonus-debit-range range-slider">
                                                <div id="debitRange"></div>
                                                <div class="range-slider__values">
                                                    <span id="debitRangeValueMin" class="range-slider__val">0</span>
                                                    <span id="debitRangeValueMax" class="range-slider__val">2726</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gap-lg-plus">
                        <div class="order-step-total">
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
                            <div class="gap-md">
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
                            <div class="order-sidebar-ordering">
                                <button class="btn-reset btn btn-primary">
                                    <span class="btn__text">Подтвердить заказ</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="seo-block">
                        <div class="seo-block__descr">
                            <p>Оформляя заказ, Вы принимаете условия <a class="link-red" href="javascript:;">оферты</a> и даете согласие на обработку персональных данных в соответствии с <a class="link-red" href="javascript:;">Положением о персональных данных</a>.</p>
                            <p>С подробными условиями доставки можно ознакомиться на странице <a class="link-red" href="javascript:;">Доставка</a>.</p>
                        </div>
                    </div>
				</div>
				<div class="order-sidebar">
					<div class="order-sidebar-gap">
						<div class="order-sidebar__item">
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
                                <div class="gap-md">
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
                                <div class="order-sidebar-ordering">
                                    <button class="btn-reset btn btn-primary">
                                        <span class="btn__text">Подтвердить заказ</span>
                                    </button>
                                </div>
                            </div>

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
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>