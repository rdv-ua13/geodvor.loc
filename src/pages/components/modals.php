<?/* auth */?>
<div id="modal-auth" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Войти в личный кабинет</div>
                <div class="modal__subtitle">
                    Нет аккаунта?
                    <a
                            class="link link-brand fw-medium"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-reg"
                    >Зарегистрироваться</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
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
                    <div class="input-wrapper has-icon-r">
                        <input
                                class="input-reset input input-secondary"
                                type="password"
                                name=""
                                value=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="input-icon input-icon-r input-icon-btn">
                            <svg class="icon icon-fill icon-default">
                                <use href="img/sprite.svg#eye-off"></use>
                            </svg>
                            <svg class="icon icon-sm icon-fill icon-show">
                                <use href="img/sprite.svg#eye-on"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                    </div>
                </div>
                <div class="form__field-area-after">
                    <a
                            class="link link-brand fw-medium"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-restore"
                    >Напомнить пароль</a>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="text-content">Войти</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc social">
                <div class="social__title fw-semibold fz-subheading-sm">Авторизуйтесь через соцсети</div>
                <div class="social__list">
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-ya.svg#soc-ya"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-vk.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-ok.svg#soc-ok"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* reg */?>
<div id="modal-reg" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Регистрация</div>
                <div class="modal__subtitle">
                    Есть аккаунт?
                    <a
                            class="link link-brand fw-medium"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти</a>
                </div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
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
                    <div class="input-wrapper has-icon-r">
                        <input
                                class="input-reset input input-secondary"
                                type="password"
                                name=""
                                value=""
                                placeholder="Пароль"
                                data-password-target
                                required
                        >
                        <label class="input-icon input-icon-r input-icon-btn">
                            <svg class="icon icon-fill icon-default">
                                <use href="img/sprite.svg#eye-off"></use>
                            </svg>
                            <svg class="icon icon-sm icon-fill icon-show">
                                <use href="img/sprite.svg#eye-on"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                        <div class="input-caption fz-caption">Минимум 6 символов</div>
                    </div>
                    <div class="input-wrapper has-icon-r">
                        <input
                                class="input-reset input input-secondary"
                                type="password"
                                name=""
                                value=""
                                placeholder="Повторите пароль"
                                data-password-target
                                required
                        >
                        <label class="input-icon input-icon-r input-icon-btn">
                            <svg class="icon icon-fill icon-default">
                                <use href="img/sprite.svg#eye-off"></use>
                            </svg>
                            <svg class="icon icon-sm icon-fill icon-show">
                                <use href="img/sprite.svg#eye-on"></use>
                            </svg>
                            <input
                                    type="checkbox"
                                    class="visually-hidden"
                                    data-password-switcher
                            >
                        </label>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit">
                        <span class="text-content">Зарегистрироваться</span>
                    </button>
                </div>
                <div class="form__field-area-agree">
                    Нажимая кнопку «Зарегистрироваться», Вы соглашаетесь с условиями
                    <a class="link link-tdu-text" href="javascript:;"><span class="text-content">политики конфиденциальности</span></a>
                </div>
            </form>
        </div>
        <div class="modal__content-item">
            <div class="modal__soc social">
                <div class="social__title fw-semibold fz-subheading-sm">Авторизуйтесь через соцсети</div>
                <div class="social__list">
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-ya.svg#soc-ya"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-vk.svg#soc-vk"></use>
                        </svg>
                    </a>
                    <a href="javascript:;" class="social__item">
                        <svg class="icon icon-fill">
                            <use href="img/soc-ok.svg#soc-ok"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* restore pass */?>
<div id="modal-restore" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Напомнить пароль</div>
                <div class="modal__subtitle modal__subtitle--primary modal__subtitle--gap">Введите электронную почту, к которой привязан ваш аккаунт и мы отправим вам новый пароль</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
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
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-restore-final">
                        <span class="text-content">Отправить пароль</span>
                    </button>
                </div>
                <div class="form__field-area-btn">
                    <a
                            class="link link-brand fw-medium"
                            href="javascript:;"
                            data-fancybox
                            data-src="#modal-auth"
                    >Войти в аккаунт</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="modal-restore-final" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon icon-fill">
                        <use href="img/lock-2-opened.svg#lock-2-opened"></use>
                    </svg>
                    <div class="h4 text-center">Мы отправили пароль<br> на вашу почту</div>
                </div>
                <div class="modal__subtitle modal__subtitle--primary text-center">Проверьте указанную электронную почту.<br> Если письма нет, то проверьте папку Спам.</div>
            </div>
            <div class="text-center">
                <a
                        class="link link-brand fw-medium"
                        href="javascript:;"
                        data-fancybox
                        data-src="#modal-auth"
                >Войти в аккаунт</a>
            </div>
        </div>
    </div>
</div>