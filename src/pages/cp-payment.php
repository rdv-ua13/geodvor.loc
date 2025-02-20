<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
    <div class="cp">
        <div class="cp-sidebar cp-sidebar-nav">
            <div class="cp-sidebar__item">
                <div class="cp-sidebar__heading">Покупателям</div>
                <ul class="list-reset cp-sidebar__list">
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Доставка</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link active">
                            <span class="cp-sidebar__link-content">Оплата</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Оптовым покупателям</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Контакты</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">О нас</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cp-sidebar__item">
                <div class="cp-sidebar__heading">Полезное</div>
                <ul class="list-reset cp-sidebar__list">
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Готовые решения</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Полезные советы</span>
                        </a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">
                            <span class="cp-sidebar__link-content">Вопросы покупателей</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cp-content">
            <div class="gap-lg">
                <h1 class="h1">Оплата</h1>
            </div>
            <div class="gap-lg cp-column">
                <div class="cp-item cp-item--frame cp-label">
                    <svg class="icon icon-fill cp-label-icon">
                        <use href="img/sprite.svg#menu-wallet"></use>
                    </svg>
                    <div class="cp-label-content">
                        <div class="h4">Оплата наличными</div>
                        <div class="cp-item__content">
                            Вы можете оплатить заказ наличными при самовывозе со склада.
                            <br>При заказе доставки Вы можете произвести оплату наличными курьеру
                        </div>
                    </div>
                </div>
                <div class="cp-item cp-item--frame cp-label">
                    <svg class="icon icon-fill cp-label-icon">
                        <use href="img/sprite.svg#menu-credit-card"></use>
                    </svg>
                    <div class="cp-label-content">
                        <div class="h4">Оплата банковской картой без комиссии</div>
                        <ul class="list-reset payment-supports">
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/ps-visa-origin.svg"
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
                                            src="img/ps-mastercard-origin.svg"
                                            width="36"
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
                                            src="img/ps-mir-origin.svg"
                                            width="54"
                                            height="13"
                                            alt="Мы принимаем к оплате Мир"
                                    >
                                </a>
                            </li>
                        </ul>
                        <div class="cp-item__content">
                            Вы можете оплатить свою покупку банковской картой в пункте самовывоза, а также при заказе доставки на объекте - с помощью мобильного терминала
                            <br>
                            <br>
                            <span class="fw-semibold">Также можно оплатить заказ на сайте онлайн с помощью карты любого банка РФ:</span>
                            <br>
                            <br>
                            <ul class="list-reset cp-list">
                                <li>Вы сможете оплатить заказ при оформлении в корзине, выбрав оплату онлайн</li>
                                <li>Для проведения платежа Вам может потребоваться ввод специального пароля, способ получения которого можно уточнить в банке, выпустившем карту</li>
                            </ul>
                            <br>
                            <span class="fw-semibold">Возможные причины отклонения платежа:</span>
                            <br>
                            <br>
                            <ul class="list-reset cp-list">
                                <li>Недостаточно средств на карте</li>
                                <li>Карта не поддерживает технологию безопасного проведения платежей</li>
                                <li>Карта не поддерживает покупки через интернет. Если Вы не уверены в наличии данной возможности, необходимо уточнить данный вопрос в сервисной службе банка, выпустившего карту</li>
                                <li>Карта выпущена иностранным банком</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cp-item cp-item--frame cp-label">
                    <svg class="icon icon-fill cp-label-icon">
                        <use href="img/sprite.svg#menu-newspaper"></use>
                    </svg>
                    <div class="cp-label-content">
                        <div class="h4">Безналичный расчет для юридических лиц</div>
                        <div class="cp-item__content">
                            Если покупка совершается от юридического лица, оплата производится по счету, который выставляет менеджер интернет-магазина. Реквизиты юридического лица следует указать при оформлении заказа.
                            <br>
                            Проконсультироваться по вопросам доставки в регионы можно по телефону +7 981 155-82-47 с 9:00 до 18:00 московского времени или по e-mail info@geo-dvor.ru. Менеджер обработает и подтвердит заказ и может выставить счёт на оплату по e-mail.
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap-lg">
                <div class="gap-sm-plus">
                    <div class="h3">Информация о возврате товара</div>
                </div>
                На основании статьи 25 Закона Российской Федерации О правах потребителей и защите потребительских прав, покупатель может вернуть обратно в магазин в течении 14 дней с момента заключения сделки (покупки). Потребитель вправе обменять непродовольственный товар надлежащего качества на аналогичный товар у продавца, у которого этот товар был приобретен, если указанный товар.
                <br>
                <br>
                Потребитель имеет право на обмен непродовольственного товара надлежащего качества в течение четырнадцати дней, не считая дня его покупки.
                <br>
                <br>
                Обмен непродовольственного товара надлежащего качества проводится, если указанный товар не был в употреблении, сохранены его товарный вид, потребительские свойства, пломбы, фабричные ярлыки, а также имеется товарный чек или кассовый чек либо иной подтверждающий оплату указанного товара документ. Отсутствие у потребителя товарного чека или кассового чека либо иного подтверждающего оплату товара документа не лишает его возможности ссылаться на свидетельские показ
            </div>
            <div class="gap-xl">
                <div class="gap-sm-plus">
                    <div class="h3">Необходимые документы для обмена/возврата</div>
                </div>
                <ul class="list-reset cp-list">
                    <li>Паспорт РФ</li>
                    <li>Товарный и кассовый чеки или их копии</li>
                    <li>Оригинал банковской карты и слип-чек, если оплата была произведена банковской картой (предъявляется владельцем карты)</li>
                    <li>Доверенность, если возврат на юридическое лицо</li>
                    <li>Заявление и возвратная накладная – заполняется в строительном центре при возврате или оформляется водителем на адресе</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>