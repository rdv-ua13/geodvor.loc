<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="gap-xl">
	<div class="container">
		<div class="gap-xl content-page media-page">
			<div class="gap-xs">
				<?/* Главная - Текущая страница */?>
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/breadcrumbs.php"); ?>
			</div>
			<div class="gap-lg">
				<div class="catalog-heading">
					<div class="h1 catalog-heading__title">Новости Амперкин.ру</div>
                    <form id="" class="form catalog-heading__search" method="" action="javascript:;">
                        <div class="">
                            <div class="input-search-wrapper input-search-wrapper-btn-outside">
                                <div class="input-search-field">
                                    <input
                                            class="input-reset input-search"
                                            type="search"
                                            name=""
                                            placeholder="Найти новость по названию или тегу"
                                            autocomplete="off"
                                    >
                                    <button class="btn-reset btn btn-link input-delete-btn">
                                        <svg class="icon btn__icon icon-xs">
                                            <use href="img/sprite.svg#cross"></use>
                                        </svg>
                                    </button>
                                </div>
                                <button class="btn-reset btn btn-secondary input-search-btn" type="submit">
                                    <span class="btn__text">Найти</span>
                                </button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<div class="gap-xl content-wrapper-mobile-section">
				<div class="content-wrapper-mobile-section-container">
                    <div class="gap-lg">
                        <div class="media media-news">
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">7 Апреля 2023</span>
                                <span class="media__title h3">Рамки ИЭК из натуральных материалов!</span>
                                <span class="media__descr">Стекло или металл – выбирай, соединяй, включай свой стиль!</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">17 Февраля 2023</span>
                                <span class="media__title h3">Модная. Доступная. Твоя. Legrand Inspiria</span>
                                <span class="media__descr">Модная. Доступная. Твоя. Legrand Inspiria</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">26 Января 2023</span>
                                <span class="media__title h3">Legrand INSPIRIA французский дизайн для российского рынка</span>
                                <span class="media__descr">Дизайн разработан французской студией Legrand для российского рынка. Сочетание четких линий и мягких форм.</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">9 Декабря 2022</span>
                                <span class="media__title h3">Акция с 9 декабря по 9 января</span>
                                <span class="media__descr">Совершите покупки серий AtlasDesign Profi54, Glossa, AtlasDesign Nature и получите 10% кешбэка в виде промокодов Qiwi.</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">7 Апреля 2023</span>
                                <span class="media__title h3">Рамки ИЭК из натуральных материалов!</span>
                                <span class="media__descr">Стекло или металл – выбирай, соединяй, включай свой стиль!</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">17 Февраля 2023</span>
                                <span class="media__title h3">Модная. Доступная. Твоя. Legrand Inspiria</span>
                                <span class="media__descr">Модная. Доступная. Твоя. Legrand Inspiria</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">26 Января 2023</span>
                                <span class="media__title h3">Legrand INSPIRIA французский дизайн для российского рынка</span>
                                <span class="media__descr">Дизайн разработан французской студией Legrand для российского рынка. Сочетание четких линий и мягких форм.</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">9 Декабря 2022</span>
                                <span class="media__title h3">Акция с 9 декабря по 9 января</span>
                                <span class="media__descr">Совершите покупки серий AtlasDesign Profi54, Glossa, AtlasDesign Nature и получите 10% кешбэка в виде промокодов Qiwi.</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">7 Апреля 2023</span>
                                <span class="media__title h3">Рамки ИЭК из натуральных материалов!</span>
                                <span class="media__descr">Стекло или металл – выбирай, соединяй, включай свой стиль!</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">17 Февраля 2023</span>
                                <span class="media__title h3">Модная. Доступная. Твоя. Legrand Inspiria</span>
                                <span class="media__descr">Модная. Доступная. Твоя. Legrand Inspiria</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">26 Января 2023</span>
                                <span class="media__title h3">Legrand INSPIRIA французский дизайн для российского рынка</span>
                                <span class="media__descr">Дизайн разработан французской студией Legrand для российского рынка. Сочетание четких линий и мягких форм.</span>
                            </a>
                            <a class="media__item" href="javascript:;">
                                <span class="media__date">9 Декабря 2022</span>
                                <span class="media__title h3">Акция с 9 декабря по 9 января</span>
                                <span class="media__descr">Совершите покупки серий AtlasDesign Profi54, Glossa, AtlasDesign Nature и получите 10% кешбэка в виде промокодов Qiwi.</span>
                            </a>
                        </div>
                    </div>

                    <div class="pagination-wrapper">
						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                        <div class="pagination-more">
                            <button class="btn-reset btn btn-b-light">
                                <span class="btn__text">Показать еще</span>
                            </button>
                        </div>
                    </div>
				</div>
			</div>
			<div class="gap-xl">
				<div class="seo-block">
					<div class="seo-block__bottom seo-block__bottom--mobile-border-none">
						<div class="seo-block__bottom-item">
							<div class="seo-block__bottom-view">
								<svg class="icon">
									<use href="img/sprite.svg#menu-color-shopping-cart-2"></use>
								</svg>
							</div>
							<div class="seo-block__bottom-descr">
								<b>Широкий ассортимент</b> <br>
								электрооборудования, расходных материалов и инструментов
							</div>
						</div>
						<div class="seo-block__bottom-item">
							<div class="seo-block__bottom-view">
								<svg class="icon">
									<use href="img/sprite.svg#menu-color-box-2"></use>
								</svg>
							</div>
							<div class="seo-block__bottom-descr">
								<b>Быстрая и удобная доставка</b> <br>
								товаров в удобное время и место с понедельника по пятницу
							</div>
						</div>
						<div class="seo-block__bottom-item">
							<div class="seo-block__bottom-view">
								<svg class="icon">
									<use href="img/sprite.svg#menu-color-layers"></use>
								</svg>
							</div>
							<div class="seo-block__bottom-descr">
								<b>Многоуровневая программа лояльности</b> <br>
								для постоянных клиентов
							</div>
						</div>
						<div class="seo-block__bottom-item">
							<div class="seo-block__bottom-view">
								<svg class="icon">
									<use href="img/sprite.svg#menu-color-repeat"></use>
								</svg>
							</div>
							<div class="seo-block__bottom-descr">
								<b>Простой возврат товаров</b> <br>
								которые не пригодились в течение гарантийного срока
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>