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
				<div class="gap-lg">
                    <form action="" method="" class="order-content">
                        <div class="order-step">
                            <div class="h3">Данные покупателя</div>

                            <div class="slider-out basic-slider-wrap">
                                <div class="basic-tabs-container basic-slider swiper" data-tab="tab-order-step-one" data-basic-slider data-basic-slider-xxs>
                                    <div class="basic-tabs-slider-list swiper-wrapper">
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-extra-secondary basic-tabs-trigger active" data-target="0"><span>Физическое лицо</span></span>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <span class="btn btn-extra-secondary basic-tabs-trigger" data-target="1"><span>Юридическое лицо</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="basic-tabs-content" data-tab-content="tab-order-step-one">
                                <div class="basic-tabs-content__panel active" data-id="0">
                                    <div class="order-step__data">
                                        <div class="order-step-row order-step__notice">
                                            <svg class="icon icon-sm">
                                                <use href="img/sprite.svg#profile"></use>
                                            </svg>
                                            <span>
                                                Не хотите каждый раз заново заполнять данные?
                                                <a class="btn-reset btn btn-secondary" href="javascript:;">
                                                    <span class="text-content">Войти в профиль</span>
                                                </a>
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
                            </div>
                        </div>


                        <!--<div class="order-reg-content__heading">
						<div class="h4">Номер заказа – <span class="brand-dark-color">82509</span></div>
						<div>Статус: <span class="on-order-color fw-semibold">Ждёт оплаты</span></div>
					</div>-->
                        <div class="order-reg-content__item">
                            <div class="order-reg-content__title">Данные покупателя</div>

                        </div>
                        <div class="order-reg-content__item">
                            <div class="order-reg-content__title">Детали доставки</div>
                            <table class="table-descr">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Способ получения</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">Доставка</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-normal">Адрес доставки</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">пр. Ленина, 114, оф. 218</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="order-reg-content__item">
                            <div class="order-reg-content__title">Оплата заказа</div>
                            <table class="table-descr">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Способ оплаты</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">Картой при получении</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-normal">Статус оплаты</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">Ожидает оплаты</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="order-reg-content__item">
                            <button class="btn-reset btn btn-extra" type="button">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#print"></use>
                                </svg>
                                <span class="text-content">Распечатать заказ</span>
                            </button>
                        </div>
                    </form>
				</div>
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