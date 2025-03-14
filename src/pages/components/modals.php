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
                    <div class="input-wrapper error">
                        <input
                                class="input-reset input input-secondary"
                                type="email"
                                name=""
                                value=""
                                placeholder="Электронная почта"
                                required
                        >
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Такой пользователь не зарегистрирован</span>
                        </span>
                    </div>
                    <div class="input-wrapper has-icon-r error">
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
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Вы ввели неверный пароль</span>
                        </span>
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
                    <div class="input-wrapper error">
                        <input
                                class="input-reset input input-secondary"
                                type="email"
                                name=""
                                value=""
                                placeholder="Электронная почта"
                                required
                        >
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Неправильный формат электронной почты</span>
                        </span>
                    </div>
                    <div class="input-wrapper has-icon-r error">
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
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Для пароля должна быть больше 6 символов</span>
                        </span>
                    </div>
                    <div class="input-wrapper has-icon-r error">
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
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Введенные пароли не совпадают</span>
                        </span>
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
                    <div class="input-wrapper error">
                        <input
                                class="input-reset input input-secondary"
                                type="email"
                                name=""
                                value=""
                                placeholder="Электронная почта"
                                required
                        >
                        <span class="input-error-label">
                            <svg class="icon icon-fill">
                                <use href="img/sprite.svg#warning"></use>
                            </svg>
                            <span class="text-content">Указанной электронной почты не существует</span>
                        </span>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-restore-success">
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
<div id="modal-restore-success" class="modal">
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

<?/* calc */?>
<div id="modal-calc" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Заявка на расчет</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона <span class="required-star">*</span></div>
                        <div class="input-wrapper error">
                            <input
                                    class="input-reset input input-secondary isPhone"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="+7 999 999-99-99"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Email <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="Электронная почта"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Необязательно"
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Сообщение об ошибке</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Название организации</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Необязательно"
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Сообщение об ошибке</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-request-success">
                        <span class="text-content">Отправить заявку</span>
                    </button>
                </div>
                <div class="form__field-area-agree">
                    Нажимая кнопку «Отправить заявку», Вы соглашаетесь с условиями
                    <a class="link link-tdu-text" href="javascript:;"><span class="text-content">политики конфиденциальности</span></a>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* call */?>
<div id="modal-call" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Заказать звонок менеджера</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона <span class="required-star">*</span></div>
                        <div class="input-wrapper error">
                            <input
                                    class="input-reset input input-secondary isPhone"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="+7 999 999-99-99"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Необязательно"
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Сообщение об ошибке</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-request-success">
                        <span class="text-content">Позвоните мне</span>
                    </button>
                </div>
                <div class="form__field-area-agree">
                    Нажимая кнопку «Позвоните мне», Вы соглашаетесь с условиями
                    <a class="link link-tdu-text" href="javascript:;"><span class="text-content">политики конфиденциальности</span></a>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* appeal */?>
<div id="modal-appeal" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Написать обращение</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона <span class="required-star">*</span></div>
                        <div class="input-wrapper error">
                            <input
                                    class="input-reset input input-secondary isPhone"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="+7 999 999-99-99"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Email <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="Электронная почта"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Необязательно"
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Сообщение об ошибке</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Сообщение</div>
                        <div class="input-wrapper">
                            <textarea
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder=""
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-request-appeal-success">
                        <span class="text-content">Отправить</span>
                    </button>
                </div>
                <div class="form__field-area-agree">
                    Нажимая кнопку «Отправить», Вы соглашаетесь с условиями
                    <a class="link link-tdu-text" href="javascript:;"><span class="text-content">политики конфиденциальности</span></a>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* question */?>
<div id="modal-question" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Задать вопрос</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="titled-input">
                        <div class="input-title">Номер телефона <span class="required-star">*</span></div>
                        <div class="input-wrapper error">
                            <input
                                    class="input-reset input input-secondary isPhone"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="+7 999 999-99-99"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Email <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="email"
                                    name=""
                                    value=""
                                    placeholder="Электронная почта"
                                    required
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Это поле обязательное</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Ваше имя</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Необязательно"
                            >
                            <span class="input-error-label">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#warning"></use>
                                </svg>
                                <span class="text-content">Сообщение об ошибке</span>
                            </span>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Ваш вопрос</div>
                        <div class="input-wrapper">
                            <textarea
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder=""
                            ></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn">
                    <button class="btn-reset btn btn-primary" type="submit" data-fancybox data-src="#modal-request-question-success">
                        <span class="text-content">Отправить</span>
                    </button>
                </div>
                <div class="form__field-area-agree">
                    Нажимая кнопку «Отправить», Вы соглашаетесь с условиями
                    <a class="link link-tdu-text" href="javascript:;"><span class="text-content">политики конфиденциальности</span></a>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* address */?>
<div id="modal-address" class="modal modal-lg">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Как проехать до нашего склада</div>
            </div>

            <div class="modal__row">
                <div class="contacts-address contacts-address--sm">
                    <div class="contacts-address__item contacts-address__item--unbordered">
                        <div class="contacts-address__info">
                            <div class="contacts-address__info-content contacts-address__info-content--lg">
                                <div class="cp-gaps">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#shop"></use>
                                    </svg>
                                    Санкт-Петербург, Колпино, ул. Загородная 6Б
                                </div>
                                <div class="cp-gaps text-secondary">
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
            </div>
            <div class="modal__row">
                <div class="contacts-map order-map">
                    <div class="contacts-map-content" data-x="59.767013" data-y="30.592935"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?/* order-cancel */?>
<div id="modal-order-cancel" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Причина отмены заказа</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area">
                    <div class="form__field-area-checkbox">
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-one"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-one" class="custom-radio__label-for">Хочу изменить адрес доставки</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-two"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-two" class="custom-radio__label-for">Хочу убрать/добавить некоторые позиции</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-three"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-three" class="custom-radio__label-for">Проблема с оплатой</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-four"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-four" class="custom-radio__label-for">Заказ задерживается</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-five"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-five" class="custom-radio__label-for">Не устраивает цена</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-six"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-six" class="custom-radio__label-for">Нашел с доставкой быстрее</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-seven"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-seven" class="custom-radio__label-for">Заказ больше не актуален</label>
                            </span>
                        </div>
                        <div class="input-wrapper input-wrapper-flex">
                            <span class="custom-radio">
                                <input
                                        id="modal-order-cancel-eight"
                                        class="custom-radio__input"
                                        type="radio"
                                        name="modalOrderCancel"
                                >
                                <label for="modal-order-cancel-eight" class="custom-radio__label-for">Другая причина</label>
                            </span>
                        </div>
                    </div>
                    <div class="input-wrapper input-wrapper-flex">
                        <textarea
                                class="input-reset input input-secondary"
                                type="text"
                                name=""
                                value=""
                                placeholder="Расскажите подробнее"
                                rows="3"
                        ></textarea>
                    </div>
                    <button class="btn-reset btn btn-extra" type="submit" data-fancybox data-src="#modal-order-cancel-success">
                        <span class="text-content">Отменить заказ</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* add-counterparty-empty */?>
<div id="modal-add-counterparty-empty" class="modal modal-md">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Добавить контрагента</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="gap-sm-plus form__field-area">
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
                <div class="form__field-area-btn-g">
                    <button class="btn-reset btn btn-primary form-btn-full" type="submit" data-fancybox data-src="#modal-add-counterparty">
                        <span class="text-content">Добавить контрагента</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* add-counterparty */?>
<div id="modal-add-counterparty" class="modal modal-md">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Добавить контрагента</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="gap-sm-plus form__field-area">
                    <div class="titled-input">
                        <div class="input-title">ИНН организации <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="7730 1596 3525"
                                    placeholder="Найти по ИНН"
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Название организации <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="ИП ОСТРОВСКИЙ АЛЕКСАНДР ВАЛЕРИЕВИЧ"
                                    placeholder=""
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Юридический адрес</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Адрес и индексом"
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">БИК банка <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="044 525 225"
                                    placeholder=""
                                    required
                            >
                            <div class="input-caption fz-caption">ПАО Сбербанк</div>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Номер счета <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="4080 2810 9380 0018 0520"
                                    placeholder=""
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Должность и ФИО подписанта</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Должность, ФИО полностью"
                                    required
                            >
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn-g">
                    <button class="btn-reset btn form-btn-full" type="submit">
                        <span class="text-content">Добавить контрагента</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* edit-counterparty */?>
<div id="modal-edit-counterparty" class="modal modal-md">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Редактировать контрагента</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="gap-sm-plus form__field-area">
                    <div class="titled-input">
                        <div class="input-title">ИНН организации <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="7730 1596 3525"
                                    placeholder="Найти по ИНН"
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Название организации <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="ИП ОСТРОВСКИЙ АЛЕКСАНДР ВАЛЕРИЕВИЧ"
                                    placeholder=""
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Юридический адрес</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Адрес и индексом"
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">БИК банка <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="044 525 225"
                                    placeholder=""
                                    required
                            >
                            <div class="input-caption fz-caption">ПАО Сбербанк</div>
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Номер счета <span class="required-star">*</span></div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value="4080 2810 9380 0018 0520"
                                    placeholder=""
                                    required
                            >
                        </div>
                    </div>
                    <div class="titled-input">
                        <div class="input-title">Должность и ФИО подписанта</div>
                        <div class="input-wrapper">
                            <input
                                    class="input-reset input input-secondary"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Должность, ФИО полностью"
                                    required
                            >
                        </div>
                    </div>
                </div>
                <div class="form__field-area-btn-g">
                    <button class="btn-reset btn form-btn-full" type="submit">
                        <span class="text-content">Сохранить изменения</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* delete-counterparty */?>
<div id="modal-delete-counterparty" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Удалить контрагента?</div>
                <div class="modal__subtitle modal__subtitle--primary">Вы уверены, что хотите удалить выбранного контрагента?</div>
            </div>

            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field-area-btn-g">
                    <button class="btn-reset btn form-btn-half" type="submit">
                        <span class="text-content">Удалить</span>
                    </button>
                    <button class="btn-reset btn btn-extra form-btn-half" type="button">
                        <span class="text-content">Отменить</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?/* request-success */?>
<div id="modal-request-success" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon icon-fill">
                        <use href="img/checkbox-rec.svg#checkbox-rec"></use>
                    </svg>
                    <div class="h4 text-center">Мы получили вашу заявку</div>
                </div>
                <div class="modal__subtitle modal__subtitle--primary text-center">В ближайшее время с вами свяжется менеджер</div>
            </div>
        </div>
    </div>
</div>

<?/* request-appeal-success */?>
<div id="modal-request-appeal-success" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon icon-fill">
                        <use href="img/checkbox-rec.svg#checkbox-rec"></use>
                    </svg>
                    <div class="h4 text-center">Мы получили ваше обращение</div>
                </div>
                <div class="modal__subtitle modal__subtitle--primary text-center">В ближайшее время с вами свяжется менеджер</div>
            </div>
        </div>
    </div>
</div>

<?/* request-question-success */?>
<div id="modal-request-question-success" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header modal__header-icon">
                <div class="modal__title-icon">
                    <svg class="icon icon-fill">
                        <use href="img/checkbox-rec.svg#checkbox-rec"></use>
                    </svg>
                    <div class="h4 text-center">Мы получили ваш вопрос</div>
                </div>
                <div class="modal__subtitle modal__subtitle--primary text-center">В ближайшее время с вами свяжется менеджер</div>
            </div>
        </div>
    </div>
</div>

<?/* request-question-success */?>
<div id="modal-order-cancel-success" class="modal">
    <div class="modal__content">
        <input class="visually-hidden" type="text" name="" value="">
        <div class="modal__content-item">
            <div class="modal__header">
                <div class="modal__title h4">Отмена заказа</div>
                <div class="modal__subtitle modal__subtitle--primary">Заказ №14151345 успешно отменен</div>
            </div>
        </div>
    </div>
</div>