<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
    <div class="gap-md personal-acc">
        <div class="cp-heading">
            <div class="cp-heading__back">
                <a class="cp-heading__back-link link" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <span>Личный кабинет</span>
                </a>
            </div>
        </div>

        <div class="cp">
            <div class="cp-sidebar cp-sidebar-nav">
                <div class="cp-sidebar__item">
                    <ul class="list-reset cp-sidebar__list">
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link active">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#box"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Мои заказы</span>
                                <svg class="icon icon-pointer icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#heart"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Избранные товары</span>
                                <svg class="icon icon-pointer icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#user-square"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Мой профиль</span>
                                <svg class="icon icon-pointer icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#company"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Контрагенты</span>
                                <svg class="icon icon-pointer icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item sign-out">
                            <a href="javascript:;" class="cp-sidebar__link">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#logout"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Выйти</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cp-content">
                <div class="gap-sm-plus">
                    <h1 class="h2">Заказы</h1>
                </div>

                <div class="personal-acc__filter">
                    <form id="" class="personal-acc__search" action="" method="">
                        <div class="personal-acc__search-item personal-acc__search-order input-wrapper input-wrapper-search has-icon-l">
                            <input
                                    class="input-reset input input-secondary"
                                    type="search"
                                    name=""
                                    placeholder="Найти по номеру заказа"
                            >
                            <label class="input-icon input-icon-l">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <button class="btn-reset btn input-delete-btn">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#cross"></use>
                                </svg>
                            </button>
                        </div>

                        <div class="personal-acc__search-item personal-acc__search-date input-wrapper input-wrapper-search has-icon-r">
                            <input
                                    class="input-reset input input-secondary flatpickr"
                                    type="text"
                                    name=""
                                    placeholder="Дата заказа"
                            >
                            <label class="input-icon input-icon-r">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#calendar"></use>
                                </svg>
                            </label>
                        </div>

                        <button class="personal-acc__search-item personal-acc__search-btn btn-reset btn btn-secondary" type="submit">
                            <span class="text-content">Найти заказ</span>
                        </button>
                    </form>

                    <div class="personal-acc__tabs basic-tabs">
                        <div class="gap-sm-plus slider-out basic-slider-wrap">
                            <div class="basic-tabs-container basic-slider swiper" data-tab="pa-tabs" data-basic-slider data-basic-slider-xxs>
                                <div class="basic-tabs-slider-list swiper-wrapper">
                                    <div class="basic-tabs-item swiper-slide">
                                        <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger" data-target="all"><span>Все заказы</span></span>
                                    </div>
                                    <div class="basic-tabs-item swiper-slide">
                                        <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger active" data-target="work"><span>Активные</span></span>
                                    </div>
                                    <div class="basic-tabs-item swiper-slide">
                                        <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger" data-target="completed"><span>Завершенные</span></span>
                                    </div>
                                    <div class="basic-tabs-item swiper-slide">
                                        <span class="btn btn-sm btn-extra-secondary basic-tabs-trigger" data-target="canceled"><span>Отмененные</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="basic-tabs-content" data-tab-content="pa-tabs">
                            <div class="basic-tabs-content__panel" data-id="all">
                                <div class="basic-tabs-content__content empty">
                                    <div class="personal-acc__orders">
                                        <div class="personal-acc__orders-item">
                                            <div class="personal-acc__orders-view">
                                                <svg class="icon icon-fill">
                                                    <use href="img/pa-empty.svg#pa-empty"></use>
                                                </svg>
                                            </div>
                                            <div class="personal-acc__orders-descr">
                                                <div class="h4">У вас еще нет заказов</div>
                                                <div class="personal-acc__orders-hint">
                                                    Воспользуйтесь <a class="link link-tdu-text" href="javascript:;"><span class="text-content">поиском</span></a> или <a class="link link-tdu-text" href="javascript:;"><span class="text-content">каталогом</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel active" data-id="work">
                                <div class="basic-tabs-content__content">
                                    <div class="gap-md personal-acc__orders">
                                        <a href="javascript:;" class="personal-acc__orders-item">
                                            <span class="personal-acc__orders-descr">
                                                <span class="personal-acc__orders-header">
                                                    <span class="personal-acc__orders-header-title">
                                                        <span class="personal-acc__orders-header-id">
                                                            <span class="clipboard" data-clipboard>
                                                                <span class="clipboard-target">Заказ №14151345</span>
                                                                <span class="clipboard-trigger">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="personal-acc__orders-header-date">от 26.01.2025 16:18</span>
                                                    </span>
                                                    <span class="personal-acc__orders-header-status product-stock on-order">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#timer"></use>
                                                        </svg>
                                                        <span>Активный</span>
                                                    </span>
                                                </span>
                                                <span class="personal-acc__orders-details">
                                                    <span class="personal-acc__orders-details-item personal-acc__orders-view">
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp1.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp2.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="personal-acc__orders-info">
                                                <span class="personal-acc__orders-total">
                                                    <span class="title-line">Сумма заказа:</span>
                                                    <span class="value-line">5 827,99 ₽</span>
                                                </span>
                                                <span class="personal-acc__orders-action">
                                                    <span class="personal-acc__orders-status"><span>Заказ оплачен</span></span>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="javascript:;" class="personal-acc__orders-item">
                                            <span class="personal-acc__orders-descr">
                                                <span class="personal-acc__orders-header">
                                                    <span class="personal-acc__orders-header-title">
                                                        <span class="personal-acc__orders-header-id">
                                                            <span class="clipboard" data-clipboard>
                                                                <span class="clipboard-target">Заказ №14151345</span>
                                                                <span class="clipboard-trigger">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="personal-acc__orders-header-date">от 26.01.2025 16:18</span>
                                                    </span>
                                                    <span class="personal-acc__orders-header-status product-stock on-order">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#timer"></use>
                                                        </svg>
                                                        <span>Ждёт оплаты</span>
                                                    </span>
                                                </span>
                                                <span class="personal-acc__orders-details">
                                                    <span class="personal-acc__orders-details-item personal-acc__orders-view">
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp1.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp2.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="personal-acc__orders-info">
                                                <span class="personal-acc__orders-total">
                                                    <span class="title-line">Сумма заказа:</span>
                                                    <span class="value-line">5 827,99 ₽</span>
                                                </span>
                                                <span class="personal-acc__orders-action">
                                                    <span class="personal-acc__orders-status"><span>Заказ не оплачен</span></span>
                                                    <span class="personal-acc__orders-pay">
                                                        <span class="btn-reset btn btn-sm" href="javascript:;">Оплатить онлайн</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="javascript:;" class="personal-acc__orders-item">
                                            <span class="personal-acc__orders-descr">
                                                <span class="personal-acc__orders-header">
                                                    <span class="personal-acc__orders-header-title">
                                                        <span class="personal-acc__orders-header-id">
                                                            <span class="clipboard" data-clipboard>
                                                                <span class="clipboard-target">Заказ №345325</span>
                                                                <span class="clipboard-trigger">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="personal-acc__orders-header-date">от 26.01.2025 16:18</span>
                                                    </span>
                                                    <span class="personal-acc__orders-header-status product-stock out-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#splash"></use>
                                                        </svg>
                                                        <span>Отменен</span>
                                                    </span>
                                                </span>
                                                <span class="personal-acc__orders-details">
                                                    <span class="personal-acc__orders-details-item personal-acc__orders-view">
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp1.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp2.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp3.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp1.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item personal-acc__orders-view-more">+3</span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="personal-acc__orders-info">
                                                <span class="personal-acc__orders-total">
                                                    <span class="title-line">Сумма заказа:</span>
                                                    <span class="value-line">5 827,99 ₽</span>
                                                </span>
                                            </span>
                                        </a>
                                        <a href="javascript:;" class="personal-acc__orders-item">
                                            <span class="personal-acc__orders-descr">
                                                <span class="personal-acc__orders-header">
                                                    <span class="personal-acc__orders-header-title">
                                                        <span class="personal-acc__orders-header-id">
                                                            <span class="clipboard" data-clipboard>
                                                                <span class="clipboard-target">Заказ №654734523</span>
                                                                <span class="clipboard-trigger">
                                                                    <svg class="icon icon-fill">
                                                                        <use href="img/sprite.svg#copy"></use>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <span class="personal-acc__orders-header-date">от 26.01.2025 16:18</span>
                                                    </span>
                                                    <span class="personal-acc__orders-header-status product-stock in-stock">
                                                        <svg class="icon icon-fill">
                                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                                        </svg>
                                                        <span>Завершен</span>
                                                    </span>
                                                </span>
                                                <span class="personal-acc__orders-details">
                                                    <span class="personal-acc__orders-details-item personal-acc__orders-view">
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp1.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp2.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                        <span class="personal-acc__orders-view-item">
                                                            <img
                                                                    loading="lazy"
                                                                    class="image"
                                                                    src="img/cp3.png"
                                                                    width="48"
                                                                    height="48"
                                                                    alt="Изображение блока"
                                                            >
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="personal-acc__orders-info">
                                                <span class="personal-acc__orders-total">
                                                    <span class="title-line">Сумма заказа:</span>
                                                    <span class="value-line">5 827,99 ₽</span>
                                                </span>
                                                <span class="personal-acc__orders-action">
                                                    <span class="personal-acc__orders-status"><span>Заказ оплачен</span></span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="gap-md pagination-wrapper">
										<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/pagination.php"); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="completed">
                                <div class="basic-tabs-content__content"></div>
                            </div>
                            <div class="basic-tabs-content__panel" data-id="canceled">
                                <div class="basic-tabs-content__content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>