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
                            <a href="javascript:;" class="cp-sidebar__link">
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
                                    <use href="img/sprite.svg#profile-2"></use>
                                </svg>
                                <span class="cp-sidebar__link-content">Мой профиль</span>
                                <svg class="icon icon-pointer icon-fill">
                                    <use href="img/sprite.svg#chevron-right"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="cp-sidebar__list-item">
                            <a href="javascript:;" class="cp-sidebar__link active">
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
                    <h1 class="h2">Контрагенты</h1>
                </div>

                <div class="empty">
                    <div class="empty__view">
                        <svg class="icon icon-fill">
                            <use href="img/tt_sad-smile.svg#tt_sad-smile"></use>
                        </svg>
                    </div>
                    <div class="empty__descr">
                        <div class="h4 empty__title">Вы еще не добавили контрагентов</div>
                        <div class="empty__subtitle">Добавьте контрагентов, чтобы быстро и удобно заполнять реквизиты при оформлении заказа</div>
                    </div>
                    <div class="empty__cta">
                        <button class="btn-reset btn" type="button">
                            <span class="text-content">Добавить контрагента</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>