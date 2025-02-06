<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl content-page delivery">
			<div class="cp-grid">
				<div class="cp-sidebar">
					<div class="cp-sidebar-item cp-sidebar-top">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm">
								<use href="img/sprite.svg#user-square"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Покупателям</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link active" href="javascript:;">Доставка</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Оплата</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Гарантия и возврат</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Юридическим лицам</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Физическим лицам</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Акции</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Распродажа</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Контакты</a></li>
						</ul>
					</div>
					<div class="cp-sidebar-item">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm">
								<use href="img/sprite.svg#info"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Информация</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link" href="javascript:;">Справочник электрика</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Все бренды</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Вопросы и ответы</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Новости</a></li>
							<li><a class="cp-sidebar-item__link" href="javascript:;">Статьи</a></li>
						</ul>
					</div>
				</div>

				<div class="cp-content">
					<div class="gap-xs">
						<?/* Главная - Текущая страница */?>
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
					</div>
					<div class="gap-md">
						<div class="catalog-heading">
							<div class="h1 catalog-heading__title">Доставка</div>
						</div>
					</div>
                    <div class="gap-xl">
                        <div class="gap-sm-plus catalog-extra-slider out-container-x content-wrapper-mobile-section-row">
                            <div class="basic-tabs">
                                <div class="basic-tabs-container swiper" data-tab="tab-delivery">
                                    <div class="basic-tabs-wrapper swiper-wrapper">
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger selected" type="button" data-target="0">
                                                <span class="btn__text basic-tabs-trigger__text">по москве и области</span>
                                            </button>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="1">
                                                <span class="btn__text basic-tabs-trigger__text">самовывоз</span>
                                            </button>
                                        </div>
                                        <div class="basic-tabs-item swiper-slide">
                                            <button class="btn-reset btn btn-light basic-tabs-trigger" type="button" data-target="2">
                                                <span class="btn__text basic-tabs-trigger__text">доставка в регионы</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basic-tabs-content" data-tab-content="tab-delivery">
                            <div class="basic-tabs-content__panel active" data-id="0">
                                <div class="gap-lg">
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Привезем в удобное время и место с понедельника по пятницу</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость доставки по Москве:</div>
                                                    <div>560 рублей</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость доставки Московская область:</div>
                                                    <div>790 рублей</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Самовывоз из магазина у метро «Октябрьское поле» или МЦК «Панфиловская»</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>После подтверждения менеджером наличиям. «Октябрьское поле» или МЦК «Панфиловская»ул. Маршала Рыбалко, 10</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость:</div>
                                                    <div>Бесплатно</div>
                                                </div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График работы:</div>
                                                    <div>
                                                        <div>ПН-ПТ с 09:00 до 19:00</div>
                                                        <div>СБ-ВС с 09:00 до 19:00 (<span class="text-secondary-color">только на выдачу оплаченных заказов</span>)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="contacts-map">
                                                    <div class="contacts-map-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap-lg">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Условия доставки</div>
                                    </div>
                                    <div class="content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка до 3 дней</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Заказ считается принятым и оформленным только после подтверждения заказа менеджером по телефону</div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График доставки:</div>
                                                    <div>ПН-ПТ с 09:00 до 19:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Частые вопросы</div>
                                    </div>
                                    <div class="">
                                        <div class="delivery-faq">
                                            <div class="accordion" data-id="delivery-faq">
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как оформить заказ?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Сформируйте заказ, который Вы хотите приобрести в нашем интернет-магазине, затем положите выбранный товар в корзину и подтвердите заказ через корзину. При оформлении заказа можно выбрать тип доставки и разные варианты доставки. После оформления заказа с вами свяжется менеджер для подтверждения заказа и расскажет про время доставки.</div>
                                                                <div class="gap-sm-plus">Проконсультироваться по вопросам доставки в регионы можно по телефону +7 (495) 118-37-70 с 9:00 до 18:00 московского времени или по e-mail <a class="link-dark link-tdu" href="mailto:info@amperkin.ru">info@amperkin.ru</a>. Услуги транспортной компании оплачивает клиент, мы осуществляем только отправку товара в Ваш регион.</div>
                                                                <div class="">Стоимость доставки до транспортной компании от 10000 руб. – бесплатно, до 10000 руб. – 500 руб.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как отправляется товар?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Мы собираем ваш заказ на нашем складе в день заказа и передаем его в транспортную компанию или в наш пункт выдачи.</div>
                                                                <div class="">Если товара нет в наличии на нашем складе, мы формируем запрос поставщику и, как только товар готов, он отправляется напрямую в транспортную компанию или в наш пункт выдачи.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="1">
                                <div class="gap-lg">
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Самовывоз из магазина у метро «Октябрьское поле» или МЦК «Панфиловская»</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">Стоимость:</div>
                                                    <div>Бесплатно</div>
                                                </div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График работы:</div>
                                                    <div>
                                                        <div>ПН-ПТ с 09:00 до 19:00</div>
                                                        <div>СБ-ВС с 09:00 до 19:00 (<span class="text-secondary-color">только на выдачу оплаченных заказов</span>)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div>
                                                        <a class="link-dashed link-red" href="javascript:;">Показать на карте</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Пункты выдачи СДЭК по всей России</div>
                                            </div>
                                            <div class="gap-sm-plus issuing-office">
                                                <div class="issuing-office__logo">
                                                    <img
                                                        loading="lazy"
                                                        class="image"
                                                        src="img/cdek.svg#cdek"
                                                        width="80"
                                                        height="22"
                                                        alt="Изображение блока"
                                                    >
                                                </div>
                                                <div>Более 700 пунктов выдачи по России от службы доставки СДЭК</div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div>Для получения точной информации позвоните, пожалуйста, по номеру 8 (495) 118-37-70 и наши менеджеры помогут подобрать наиболее оптимальный способ получения заказа в вашем городе.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap-lg">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Условия доставки</div>
                                    </div>
                                    <div class="content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка до 3 дней</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Заказ считается принятым и оформленным только после подтверждения заказа менеджером по телефону</div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График доставки:</div>
                                                    <div>ПН-ПТ с 09:00 до 19:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Частые вопросы</div>
                                    </div>
                                    <div class="">
                                        <div class="delivery-faq">
                                            <div class="accordion" data-id="delivery-faq">
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как оформить заказ?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Сформируйте заказ, который Вы хотите приобрести в нашем интернет-магазине, затем положите выбранный товар в корзину и подтвердите заказ через корзину. При оформлении заказа можно выбрать тип доставки и разные варианты доставки. После оформления заказа с вами свяжется менеджер для подтверждения заказа и расскажет про время доставки.</div>
                                                                <div class="gap-sm-plus">Проконсультироваться по вопросам доставки в регионы можно по телефону +7 (495) 118-37-70 с 9:00 до 18:00 московского времени или по e-mail <a class="link-dark link-tdu" href="mailto:info@amperkin.ru">info@amperkin.ru</a>. Услуги транспортной компании оплачивает клиент, мы осуществляем только отправку товара в Ваш регион.</div>
                                                                <div class="">Стоимость доставки до транспортной компании от 10000 руб. – бесплатно, до 10000 руб. – 500 руб.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как отправляется товар?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Мы собираем ваш заказ на нашем складе в день заказа и передаем его в транспортную компанию или в наш пункт выдачи.</div>
                                                                <div class="">Если товара нет в наличии на нашем складе, мы формируем запрос поставщику и, как только товар готов, он отправляется напрямую в транспортную компанию или в наш пункт выдачи.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="2">
                                <div class="gap-lg">
                                    <div class="gap-sm-plus content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Пункты выдачи СДЭК по всей России</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div class="cp-item-row">
                                                    <div>Заказы передаются на отправку только после подтверждения и получения оплаты. Отправка осуществляется службой доставки СДЭК.</div>
                                                </div>
                                            </div>
                                            <div class="issuing-office">
                                                <div class="issuing-office__logo">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/cdek.svg#cdek"
                                                            width="80"
                                                            height="22"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div>Более 700 пунктов выдачи по России</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap-lg">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Условия доставки</div>
                                    </div>
                                    <div class="content-wrapper-mobile-section">
                                        <div class="cp-item content-wrapper-mobile-section-container">
                                            <div class="gap-sm-plus">
                                                <div class="h4">Доставка до 3 дней</div>
                                            </div>
                                            <div class="gap-sm-plus">
                                                <div>Заказ считается принятым и оформленным только после подтверждения заказа менеджером по телефону</div>
                                            </div>
                                            <div class="">
                                                <div class="cp-item-row">
                                                    <div class="cp-item-row__title">График доставки:</div>
                                                    <div>ПН-ПТ с 09:00 до 19:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="gap-lg content-wrapper-mobile-section-row">
                                        <div class="h2">Частые вопросы</div>
                                    </div>
                                    <div class="">
                                        <div class="delivery-faq">
                                            <div class="accordion" data-id="delivery-faq">
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как оформить заказ?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Сформируйте заказ, который Вы хотите приобрести в нашем интернет-магазине, затем положите выбранный товар в корзину и подтвердите заказ через корзину. При оформлении заказа можно выбрать тип доставки и разные варианты доставки. После оформления заказа с вами свяжется менеджер для подтверждения заказа и расскажет про время доставки.</div>
                                                                <div class="gap-sm-plus">Проконсультироваться по вопросам доставки в регионы можно по телефону +7 (495) 118-37-70 с 9:00 до 18:00 московского времени или по e-mail <a class="link-dark link-tdu" href="mailto:info@amperkin.ru">info@amperkin.ru</a>. Услуги транспортной компании оплачивает клиент, мы осуществляем только отправку товара в Ваш регион.</div>
                                                                <div class="">Стоимость доставки до транспортной компании от 10000 руб. – бесплатно, до 10000 руб. – 500 руб.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header">
                                                        <div class="accordion__btn js-accordion-btn">
                                                            <div class="accordion__header-title h5">Как отправляется товар?</div>
                                                            <svg class="icon icon-md">
                                                                <use href="img/sprite.svg#chevron-down"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__collapse collapsed">
                                                        <div class="accordion__collapse-content">
                                                            <div class="accordion__collapse-item">
                                                                <div class="gap-sm-plus">Мы собираем ваш заказ на нашем складе в день заказа и передаем его в транспортную компанию или в наш пункт выдачи.</div>
                                                                <div class="">Если товара нет в наличии на нашем складе, мы формируем запрос поставщику и, как только товар готов, он отправляется напрямую в транспортную компанию или в наш пункт выдачи.</div>
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
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>