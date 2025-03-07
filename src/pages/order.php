<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="order order-reg">
        <div class="cp-heading">
            <h1 class="h1 cp-heading__title">Оформление заказа</h1>
            <div class="cp-heading__back">
                <a class="cp-heading__back-link link" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <span>Вернуться в корзину</span>
                </a>
            </div>
        </div>

		<div class="gap-xl cp">
			<div class="cp-content">
                <form action="" method="" class="order-content">
                    <div class="order-step">
                        <div class="h3">Данные покупателя</div>

                        <div class="basic-tabs">
                            <div class="gap-sm-plus slider-out basic-slider-wrap">
                                <div class="basic-tabs-container basic-slider swiper" data-tab="order-step-one-tabs" data-basic-slider data-basic-slider-xxs>
                                    <div class="basic-tabs-slider-list swiper-wrapper">
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger active" data-target="0"><span>Физическое лицо</span></span>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger" data-target="1"><span>Юридическое лицо</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="basic-tabs-content" data-tab-content="order-step-one-tabs">
                                <div class="basic-tabs-content__panel active" data-id="0">
                                    <div class="basic-tabs-content__content">
                                        <div class="order-step__data">
                                            <div class="order-step-row order-step__notice">
                                                <span class="order-step__notice-title">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#profile"></use>
                                                    </svg>
                                                    <span class="text-content">Не хотите каждый раз заново заполнять данные?</span>
                                                </span>
                                                <a class="btn-reset btn btn-sm btn-secondary" href="javascript:;">
                                                    <span class="text-content">Войти в профиль</span>
                                                </a>
                                            </div>

                                            <div class="order-step-row order-step-row--twin">
                                                <div class="titled-input">
                                                    <div class="input-title">Номер телефона для связи <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary isPhone"
                                                                type="tel"
                                                                name=""
                                                                value=""
                                                                placeholder="+7 (999) 999-99-99"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="titled-input">
                                                    <div class="input-title">Имя</div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Ваше имя"
                                                        >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Электронная почта <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="email"
                                                                name=""
                                                                value=""
                                                                placeholder="Электронная почта"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basic-tabs-content__panel" data-id="1">
                                    <div class="basic-tabs-content__content">
                                        <div class="order-step__data">
                                            <div class="order-step-row order-step__notice">
                                                <span class="order-step__notice-title">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#profile"></use>
                                                    </svg>
                                                    <span class="text-content">Не хотите каждый раз заново заполнять данные?</span>
                                                </span>
                                                <a class="btn-reset btn btn-sm btn-secondary" href="javascript:;">
                                                    <span class="text-content">Войти в профиль</span>
                                                </a>
                                            </div>

                                            <div class="order-step-row order-step-row--twin">
                                                <div class="titled-input">
                                                    <div class="input-title">Номер телефона для связи <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary isPhone"
                                                                type="tel"
                                                                name=""
                                                                value=""
                                                                placeholder="+7 (999) 999-99-99"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="titled-input">
                                                    <div class="input-title">Имя</div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Ваше имя"
                                                        >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Электронная почта <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="email"
                                                                name=""
                                                                value=""
                                                                placeholder="Электронная почта"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">ИНН организации <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Найти по ИНН"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-step">
                        <div class="h3">Способ доставки</div>

                        <div class="basic-tabs">
                            <div class="gap-sm-plus slider-out basic-slider-wrap">
                                <div class="basic-tabs-container basic-slider swiper" data-tab="order-step-two-tabs" data-basic-slider data-basic-slider-xxs>
                                    <div class="basic-tabs-slider-list swiper-wrapper">
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger active" data-target="0"><span>Доставка</span></span>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger" data-target="1"><span>Самовывоз</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="basic-tabs-content" data-tab-content="order-step-two-tabs">
                                <div class="basic-tabs-content__panel active" data-id="0">
                                    <div class="basic-tabs-content__content">
                                        <div class="order-step__data">
                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Укажите адрес доставки  <span class="required-star">*</span></div>
                                                    <div class="input-wrapper">
                                                        <input
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Начните вводить адрес"
                                                                required
                                                        >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="contacts-map order-map">
                                                    <div class="contacts-map-content" data-x="59.767013" data-y="30.592935"></div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Особенности подъезда</div>
                                                    <div class="input-wrapper">
                                                        <textarea
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="С какой улицы, двор, арка, пропуск, место для разгрузки"
                                                                autocomplete="off"
                                                        ></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Контакты ответственного за приём на месте</div>
                                                    <div class="input-wrapper">
                                                        <textarea
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Имя, номер телефона"
                                                                autocomplete="off"
                                                                rows="1"
                                                        ></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Другие комментарии к доставке</div>
                                                    <div class="input-wrapper">
                                                        <textarea
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Укажите дополнительные комментарии к доставке"
                                                                autocomplete="off"
                                                        ></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="basic-tabs-content__panel" data-id="1">
                                    <div class="basic-tabs-content__content">
                                        <div class="order-step__data">
                                            <div class="order-step-row">
                                                <div class="order-shop">
                                                    <div class="order-shop__view">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#shop"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="order-shop__descr">
                                                        <div class="order-shop__title">Санкт-Петербург, Колпино, ул. Загородная 6Б</div>
                                                        График работы:
                                                        <br>
                                                        ПН-ПТ с 09:00 до 18:00
                                                        <br>
                                                        СБ с 09:00 до 16:00
                                                        <br>
                                                        ВС - выходной
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="contacts-map order-map">
                                                    <div class="contacts-map-content" data-x="59.767013" data-y="30.592935"></div>
                                                </div>
                                            </div>

                                            <div class="order-step-row">
                                                <div class="titled-input">
                                                    <div class="input-title">Комментарий к заказу</div>
                                                    <div class="input-wrapper">
                                                        <textarea
                                                                class="input-reset input input-secondary"
                                                                type="text"
                                                                name=""
                                                                value=""
                                                                placeholder="Укажите дополнительные комментарии к заказу"
                                                                autocomplete="off"
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

                    <div class="order-step">
                        <div class="h3">Способ оплаты</div>

                        <div class="order-step__data order-step__data--list">
                            <div class="order-step-row order-step-row-radio">
                                <div class="input-wrapper">
                                    <span class="custom-radio">
                                        <input
                                                id="order-payment-method-one"
                                                class="custom-radio__input"
                                                type="radio"
                                                name="orderPaymentMethod"
                                                checked
                                        >
                                        <label for="order-payment-method-one" class="custom-radio__label-for">
                                            Банковской картой на сайте
                                            <ul class="list-reset payment-supports">
                                                <li>
                                                    <a class="payment-supports__item" href="javascript:;" target="_blank">
                                                        <img
                                                                loading="lazy"
                                                                class="image"
                                                                src="img/ps-visa-origin.svg"
                                                                width="32"
                                                                height="10"
                                                                alt="Мы принимаем к оплате Visa"
                                                        >
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="payment-supports__item" href="javascript:;" target="_blank">
                                                        <img
                                                                loading="lazy"
                                                                class="image"
                                                                src="img/ps-mastercard-origin.svg"
                                                                width="28"
                                                                height="16"
                                                                alt="Мы принимаем к оплате Mastercard"
                                                        >
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="payment-supports__item" href="javascript:;" target="_blank">
                                                        <img
                                                                loading="lazy"
                                                                class="image"
                                                                src="img/ps-mir-origin.svg"
                                                                width="35"
                                                                height="9"
                                                                alt="Мы принимаем к оплате Мир"
                                                        >
                                                    </a>
                                                </li>
                                            </ul>
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
                                                type="radio"
                                                name="orderPaymentMethod"
                                        >
                                        <label for="order-payment-method-two" class="custom-radio__label-for">Картой при получении</label>
                                    </span>
                                </div>
                            </div>
                            <div class="order-step-row order-step-row-radio">
                                <div class="input-wrapper input-wrapper-radio">
                                    <span class="custom-radio">
                                        <input
                                                id="order-payment-method-three"
                                                class="custom-radio__input"
                                                type="radio"
                                                name="orderPaymentMethod"
                                        >
                                        <label for="order-payment-method-three" class="custom-radio__label-for">Наличными при получении</label>
                                    </span>
                                </div>
                            </div>
                            <div class="order-step-row order-step-row-radio">
                                <div class="input-wrapper input-wrapper-radio">
                                    <span class="custom-radio">
                                        <input
                                                id="order-payment-method-four"
                                                class="custom-radio__input"
                                                type="radio"
                                                name="orderPaymentMethod"
                                        >
                                        <label for="order-payment-method-four" class="custom-radio__label-for">Выставить счёт</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-step order-step--total">
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
                                    <span class="fw-normal">Доставка</span>
                                </td>
                                <td>
                                    <span class="fw-semibold">600 ₽</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <button class="btn-reset btn" type="button">
                            <span class="text-content">Подтвердить заказ</span>
                        </button>
                    </div>

                    <div class="seo-block">
                        Оформляя заказ, Вы принимаете <a class="link link-tdu-text" href="javascript:;"><span class="text-content">условия оферты</span></a> и даете согласие на обработку персональных данных в соответствии с <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Положением о персональных данных</span></a>. С подробными условиями доставки можно ознакомиться на странице <a class="link link-tdu-text" href="javascript:;"><span class="text-content">Доставка</span></a>
                    </div>
                </form>
			</div>
			<div class="cp-sidebar">
				<div class="cp-sidebar__item">
					<div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
						<div class="fw-semibold fz-subheading-sm">Ваш заказ</div>

						<div class="order-list">
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
									<a class="card__title" href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

									<div class="card__total">
										<div class="card__price">
											<span class="card__price-current">1200 ₽</span>
										</div>
										<div class="card__amount">4 шт.</div>
									</div>
								</div>
							</div>
							<div class="card card-product">
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
									<a class="card__title" href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

									<div class="card__total">
										<div class="card__price">
											<span class="card__price-current">300 ₽</span>
										</div>
										<div class="card__amount">1 шт.</div>
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
									<a class="card__title" href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

									<div class="card__total">
										<div class="card__price">
											<span class="card__price-current">225 ₽</span>
										</div>
										<div class="card__amount">1 шт.</div>
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
									<a class="card__title" href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2 с длинным названием</a>

									<div class="card__total">
										<div class="card__price">
											<span class="card__price-current">5800 ₽</span>
										</div>
										<div class="card__amount">1 шт.</div>
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

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>