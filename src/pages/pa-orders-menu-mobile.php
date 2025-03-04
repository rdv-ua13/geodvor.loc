<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="personal-acc personal-acc-cta-mobile">
		<div class="cp-heading">
            <h1 class="h1 cp-heading__title">Личный кабинет</h1>
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
			<div class="cp-content"></div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>