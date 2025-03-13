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
							<a href="javascript:;" class="cp-sidebar__link active">
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
				<div class="gap-md-plus">
                    <div class="gap-sm-plus">
                        <h1 class="h2">Мой профиль</h1>
                    </div>
                    <div class="personal-acc__profile-notice">
                        <div class="order-step__notice">
                        <span class="order-step__notice-title">
                            <span class="text-content">Для управления реквизитами юр.лиц  перейдите в раздел Контрагенты</span>
                        </span>
                            <a class="btn-reset btn btn-sm btn-secondary" href="javascript:;">
                                <span class="text-content">Перейти в контрагенты</span>
                            </a>
                        </div>
                    </div>
				</div>

                <div class="personal-acc__profile">
                    <div class="gap-md-plus">
                        <form id="" class="personal-acc__profile-item personal-acc__profile-data" action="" method="">
                            <div class="">
                                <div class="gap-xxxs">
                                    <div class="h4">Личные данные</div>
                                </div>
                                <div class="subtitle-color">Информация будет использоваться для заказов по умолчанию</div>
                            </div>

                            <div class="titled-input">
                                <div class="input-title">Телефон</div>
                                <div class="input-wrapper">
                                    <input
                                            class="input-reset input input-secondary isPhone"
                                            type="email"
                                            name=""
                                            value=""
                                            placeholder="Номер телефона для уведомлений"
                                            required
                                    >
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
                                            placeholder="Электронная почта для уведомлений"
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
                                            placeholder=""
                                    >
                                </div>
                            </div>
                            <div class="titled-input">
                                <div class="input-title">Дата рождения</div>
                                <div class="input-wrapper has-icon-r">
                                    <input
                                            class="input-reset input input-secondary flatpickr"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="__-__-____"
                                    >
                                    <label class="input-icon input-icon-r">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#calendar"></use>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                            <div class="titled-input">
                                <div class="input-title">Ваш пол</div>
                                <div class="checkbox-group">
                                    <div class="input-wrapper input-wrapper-flex">
                                        <span class="custom-radio">
                                            <input
                                                    id="pa-gender-one"
                                                    class="custom-radio__input"
                                                    type="radio"
                                                    name="paGender"
                                                    checked
                                            >
                                            <label for="pa-gender-one" class="custom-radio__label-for">Мужской</label>
                                        </span>
                                    </div>
                                    <div class="input-wrapper input-wrapper-flex">
                                        <span class="custom-radio">
                                            <input
                                                    id="pa-gender-two"
                                                    class="custom-radio__input"
                                                    type="radio"
                                                    name="paGender"
                                            >
                                            <label for="pa-gender-two" class="custom-radio__label-for">Женский</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-wrapper input-wrapper-flex">
                                <span class="success-msg">Данные успешно сохранены</span>
                            </div>

                            <button class="btn-reset btn" type="submit">
                                <span class="text-content">Сохранить личные данные</span>
                            </button>
                        </form>
                    </div>

                    <div class="gap-md-plus">
                        <form id="" class="personal-acc__profile-item personal-acc__profile-password" action="" method="">
                            <div class="">
                                <div class="h4">Сменить пароль</div>
                            </div>

                            <div class="titled-input">
                                <div class="input-title">Текущий пароль</div>
                                <div class="input-wrapper error">
                                    <input
                                            class="input-reset input input-secondary"
                                            type="password"
                                            name=""
                                            value=""
                                            placeholder=""
                                            required
                                    >
                                    <span class="input-error-label">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#warning"></use>
                                        </svg>
                                        <span class="text-content">Вы ввели неверный пароль</span>
                                    </span>
                                </div>
                            </div>
                            <div class="titled-input">
                                <div class="input-title">Новый пароль</div>
                                <div class="input-wrapper error">
                                    <input
                                            class="input-reset input input-secondary"
                                            type="password"
                                            name=""
                                            value=""
                                            placeholder="Электронная почта для уведомлений"
                                            required
                                    >
                                    <span class="input-error-label">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#warning"></use>
                                        </svg>
                                        <span class="text-content">Для пароля должна быть больше 6 символов</span>
                                    </span>
                                    <div class="input-caption fz-caption">Минимум 6 символов</div>
                                </div>
                            </div>
                            <div class="titled-input">
                                <div class="input-title">Повторите новый пароль</div>
                                <div class="input-wrapper error">
                                    <input
                                            class="input-reset input input-secondary"
                                            type="password"
                                            name=""
                                            value=""
                                            placeholder="Электронная почта для уведомлений"
                                            required
                                    >
                                    <span class="input-error-label">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#warning"></use>
                                        </svg>
                                        <span class="text-content">Введенные пароли не совпадают</span>
                                    </span>
                                </div>
                            </div>
                            <div class="input-wrapper input-wrapper-flex">
                                <span class="success-msg">Пароль успешно изменен</span>
                            </div>

                            <button class="btn-reset btn" type="submit">
                                <span class="text-content">Сменить пароль</span>
                            </button>
                        </form>
                    </div>

                    <div class="personal-acc__profile-agree">
                        <div class="gap-sm">
                            <div class="h4">Информационные сообщения</div>
                        </div>
                        <span class="custom-checkbox">
                            <input id="pa-profile-checkbox-0" class="custom-checkbox__input" type="checkbox" name="">
                            <label for="pa-profile-checkbox-0" class="custom-checkbox__label-for">Получать информацию о скидках, новинках и выгодных предложениях по E-mail</label>
                        </span>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>