<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="container">
    <div class="cp">
        <div class="cp-sidebar cp-sidebar-nav">
            <div class="cp-sidebar__item">
                <div class="cp-sidebar__heading">Покупателям</div>
                <ul class="list-reset cp-sidebar__list">
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link active">Доставка</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Оплата</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Оптовым покупателям</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Контакты</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">О нас</a>
                    </li>
                </ul>
            </div>
            <div class="cp-sidebar__item">
                <div class="cp-sidebar__heading">Полезное</div>
                <ul class="list-reset cp-sidebar__list">
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Готовые решения</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Полезные советы</a>
                    </li>
                    <li class="cp-sidebar__list-item">
                        <a href="javascript:;" class="cp-sidebar__link">Вопросы покупателей</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cp-content">
            <div class="gap-lg">
                <h1 class="h1">Доставка и самовывоз</h1>
            </div>
            <div class="gap-lg">
                <div class="gap-sm-plus">
                    <div class="h3">Самовывоз</div>
                </div>
                <div class="gap-sm-plus contacts-address contacts-address--sm">
                    <div class="contacts-address__item contacts-address__item--unbordered">
                        <div class="contacts-address__info">
                            <div class="contacts-address__info-content contacts-address__info-content--lg">
                                <div class="cp-gaps">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#shop"></use>
                                    </svg>
                                    Санкт-Петербург, Колпино, ул. Загородная 6Б
                                </div>
                                <div class="cp-gaps">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#clock"></use>
                                    </svg>
                                    ПН-ПТ с 09:00 до 18:00
                                    <br>
                                    СБ с 09:00 до 16:00,
                                    <br>
                                    ВС - выходной
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-address__item contacts-address__item--unbordered">
                        <div class="contacts-address__info-content contacts-address__info-content--lg contacts-address__info-content--end">
                            <button class="btn-reset btn btn-secondary" type="button">
                                <span class="text-content">Построить маршрут в Яндекс Картах</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="contacts-map">
                    <div class="contacts-map-content" data-x="59.767013" data-y="30.592935"></div>
                </div>
            </div>

            <div class="gap-lg">
                <div class="gap-sm-plus">
                    <div class="h3">По Санкт-Петербургу</div>
                </div>
                Стоимость доставки до адресата по Санкт-Петербургу (в пределах КАД) от 2 600 до 3 500 рублей.
                <br>
                <br>
                Нестандартные машины рассчитываются индивидуально
            </div>

            <div class="gap-lg">
                <div class="gap-sm-plus">
                    <div class="h3">По Ленинградской области</div>
                </div>
                По Ленинградской области доставка рассчитывается индивидуально
            </div>

            <div class="gap-xl">
                <div class="gap-sm-plus">
                    <div class="h3">Доставка по России</div>
                </div>
                Осуществляется транспортно-логистическими компаниями, в зависимости от наличия расположения филиала в вашем городе:
                <br>
                <br>
                <ul class="list-reset cp-list">
                    <li>ПЭК (Первая Экспедиционная Компания)</li>
                    <li>Деловые линии</li>
                    <li>ЖелДорЭкспедиция</li>
                    <li>КИТ</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>