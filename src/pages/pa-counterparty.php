<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="gap-xl personal-acc personal-acc-counterparty">
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
				<div class="gap-md personal-acc-counterparty__heading">
					<h1 class="h2 personal-acc-counterparty__heading-title">Контрагенты</h1>
                    <div class="personal-acc-counterparty__heading-cta">
                        <button class="btn-reset btn" type="button" data-fancybox data-src="#modal-add-counterparty-empty">
                            <span class="text-content">Добавить контрагента</span>
                        </button>
                    </div>
				</div>

                <div class="personal-acc-counterparty__list">
                    <div class="personal-acc-counterparty__item">
                        <div class="personal-acc-counterparty__descr">
                            <div class="personal-acc-counterparty__title">Кривицкий Сергей Олегович</div>
                            <div class="personal-acc-counterparty__subtitle">Физ. лицо</div>
                        </div>
                        <div class="personal-acc-counterparty__cta">
                            <button class="btn-reset btn btn-sm btn-extra personal-acc-counterparty__cta-edit" type="button" data-fancybox data-src="#modal-edit-counterparty">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#edit"></use>
                                </svg>
                                <span class="text-content">Редактировать</span>
                            </button>
                            <button class="btn-reset btn btn-sm btn-icon btn-ghost btn-delete" type="button" data-delete-trigger="" data-fancybox data-src="#modal-delete-counterparty">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#trash"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="personal-acc-counterparty__item" data-removable="">
                        <div class="personal-acc-counterparty__descr">
                            <div class="personal-acc-counterparty__title">ИП Кривицкий Сергей Олегович</div>
                            <div class="personal-acc-counterparty__subtitle">ИНН: 424625536653</div>
                        </div>
                        <div class="personal-acc-counterparty__cta">
                            <button class="btn-reset btn btn-sm btn-extra personal-acc-counterparty__cta-edit" type="button">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#edit"></use>
                                </svg>
                                <span class="text-content">Редактировать</span>
                            </button>
                            <button class="btn-reset btn btn-sm btn-icon btn-ghost btn-delete" type="button" data-delete-trigger="">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#trash"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="personal-acc-counterparty__item">
                        <div class="personal-acc-counterparty__descr">
                            <div class="personal-acc-counterparty__title">ООО «Авокадо»</div>
                            <div class="personal-acc-counterparty__subtitle">ИНН: 789426637715</div>
                        </div>
                        <div class="personal-acc-counterparty__cta">
                            <button class="btn-reset btn btn-sm btn-extra personal-acc-counterparty__cta-edit" type="button">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#edit"></use>
                                </svg>
                                <span class="text-content">Редактировать</span>
                            </button>
                            <button class="btn-reset btn btn-sm btn-icon btn-ghost btn-delete" type="button" data-delete-trigger="">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#trash"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>