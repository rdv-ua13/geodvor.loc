<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl content-page">
			<div class="cp-grid">
				<div class="cp-sidebar">
					<div class="cp-sidebar-item cp-sidebar-top">
						<div class="cp-sidebar-item__heading">
							<svg class="icon icon-sm">
								<use href="img/sprite.svg#user-square"></use>
							</svg>
							<div class="cp-sidebar-item__title h5">Оплата</div>
						</div>
						<ul class="list-reset cp-sidebar-item__list">
							<li><a class="cp-sidebar-item__link" href="javascript:;">Доставка</a></li>
							<li><a class="cp-sidebar-item__link active" href="javascript:;">Оплата</a></li>
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
							<div class="h1 catalog-heading__title">Оплата</div>
						</div>
					</div>
					<div class="gap-md">
                        <div class="content-wrapper-mobile-section">
                            <div class="content-wrapper-mobile-section-container">
                                <div class="cp-item cp-item-iconed">
                                    <div class="gap-sm-plus cp-item__row cp-item__heading">
                                        <svg class="icon icon-md">
                                            <use href="img/sprite.svg#menu-color-wallet"></use>
                                        </svg>
                                        <div class="h4">Оплата наличными</div>
                                    </div>
                                    <div class="cp-item__row">
                                        <div>Вы можете оплатить заказ наличными при самовывозе из точки выдачи</div>
                                        <div>При заказе доставки Вы можете произвести оплату наличными курьеру</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="gap-md">
                        <div class="content-wrapper-mobile-section">
                            <div class="content-wrapper-mobile-section-container">
                                <div class="cp-item cp-item-iconed">
                                    <div class="gap-sm-plus cp-item__row cp-item__heading">
                                        <svg class="icon icon-md">
                                            <use href="img/sprite.svg#menu-color-credit-card"></use>
                                        </svg>
                                        <div class="h4">Оплата банковской картой без комиссии</div>
                                    </div>
                                    <div class="gap-sm-plus cp-item__row">
                                        <ul class="list-reset payment-supports">
                                            <li>
                                                <a href="javascript:;" target="_blank">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/ps-visa.svg"
                                                            width="44"
                                                            height="15"
                                                            alt="Мы принимаем к оплате Visa"
                                                    >
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" target="_blank">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/ps-mastercard.svg"
                                                            width="39"
                                                            height="21"
                                                            alt="Мы принимаем к оплате Mastercard"
                                                    >
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" target="_blank">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/ps-maestro.svg"
                                                            width="35"
                                                            height="21"
                                                            alt="Мы принимаем к оплате Maestro"
                                                    >
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" target="_blank">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/ps-mir.svg"
                                                            width="60"
                                                            height="15"
                                                            alt="Мы принимаем к оплате Мир"
                                                    >
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" target="_blank">
                                                    <img
                                                            loading="lazy"
                                                            class="image"
                                                            src="img/ps-gpay.svg"
                                                            width="54"
                                                            height="21"
                                                            alt="Мы принимаем к оплате Google pay"
                                                    >
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gap-sm cp-item__row">
                                        <div>Вы можете оплатить свою покупку банковской картой в пункте самовывоза, а также при заказе доставки на объекте - с помощью мобильного терминала</div>
                                    </div>
                                    <div class="gap-sm cp-item__row">
                                        <div class="gap-sm semi-bold">Также можно оплатить заказ на сайте онлайн с помощью карты любого банка:</div>
                                        <ul class="list-reset cp-ul">
                                            <li>Вы сможете оплатить заказ при оформлении в корзине, выбрав оплату онлайн</li>
                                            <li>Для проведения платежа Вам может потребоваться ввод специального пароля, способ получения которого можно уточнить в банке, выпустившем карту</li>
                                        </ul>
                                    </div>
                                    <div class="gap-sm cp-item__row">
                                        <div class="gap-sm semi-bold">Возможные причины отклонения платежа:</div>
                                        <ul class="list-reset cp-ul">
                                            <li>Недостаточно средств на карте</li>
                                            <li>Карта не поддерживает технологию безопасного проведения платежей Verified by VISA или MasterCard SecureCode</li>
                                            <li>Карта не поддерживает покупки через интернет. Если Вы не уверены в наличии данной возможности, необходимо уточнить данный вопрос в сервисной службе банка, выпустившего карту</li>
                                            <li>Карта выпущена иностранным банком</li>
                                        </ul>
                                    </div>
                                    <div class="cp-item__row cp-item__extra">
                                        <p>Для оплаты (ввода реквизитов Вашей карты) Вы будете перенаправлены на платежный шлюз ПАО СБЕРБАНК. Соединение с платежным шлюзом и передача информации осуществляется в защищенном режиме с использованием протокола шифрования SSL. В случае если Ваш банк поддерживает технологию безопасного проведения интернет-платежей Verified By Visa, MasterCard SecureCode, MIR Accept, J-Secure для проведения платежа также может потребоваться ввод специального пароля.</p>
                                        <p>Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой персональной информации обеспечивается ПАО СБЕРБАНК. Введенная информация не будет предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ. Проведение платежей по банковским картам осуществляется в строгом соответствии с требованиями платежных систем МИР, Visa Int., MasterCard Europe Sprl, JCB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="">
                        <div class="cp-item cp-item-iconed">
                            <div class="gap-sm-plus cp-item__row cp-item__heading">
                                <svg class="icon icon-md">
                                    <use href="img/sprite.svg#menu-color-newspaper"></use>
                                </svg>
                                <div class="h4">Безналичный расчет для юридических лиц</div>
                            </div>
                            <div class="gap-sm cp-item__row">
                                <div>Если покупка совершается от юридического лица, оплата производится по счету, который выставляет менеджер интернет-магазина. реквизиты юридического лица следует указать при оформлении заказа.</div>
                            </div>
                            <div class="gap-sm cp-item__row">
                                <div class="cp-notice">
                                    <span class="cp-notice__title">Важно! Срок оплаты счета – до 3 дней</span>
                                    <span>Возможно продление периода оплаты счета. Для этого необходимо связаться с персональным менеджером.</span>
                                </div>
                            </div>
                            <div class="gap-sm cp-item__row">
                                <div>Товар отгружается в течение суток после поступления денежных средств на счет интернет-магазина (исключение составляют случаи оформления товаров в статусе «Под заказ»).</div>
                            </div>
                            <div class="cp-item__row">
                                <p>По согласованию с менеджером, оформляющим заказ, для юридических лиц возможна оплата наличными. Порядок оплаты и условия доставки не меняются. Пакет документов тот же, что при безналичном расчете.</p>
                                <p>Проконсультироваться по вопросам доставки в регионы можно по телефону +7 (495) 118-37-70 с 9:00 до 18:00 московского времени или по e-mail <a class="link-dark link-tdu" href="mailto:info@amperkin.ru">info@amperkin.ru</a>. Менеджер обработает и подтвердит заказ и может выставить счёт на оплату по e-mail.</p>
                            </div>
                        </div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>