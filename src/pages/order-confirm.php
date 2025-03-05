<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="container">
	<div class="order">
		<div class="cp-heading">
			<h1 class="h1 cp-heading__title">Ваш заказ принят!</h1>
            <div class="cp-heading__msg">Менеджер свяжется с вами для подтверждения заказа в ближайшее время</div>
		</div>

		<div class="gap-xl cp">
			<div class="cp-content">

			</div>
			<div class="cp-sidebar">
				<div class="cp-sidebar__item">
					<div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
						<div class="fw-semibold fz-subheading-sm">Ваш заказ</div>

                        <div class="order-list">
                            <div class="card card-product">
                                <a class="card__view" href="javascript:;">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/cp1.png"
                                            width="40"
                                            height="40"
                                            alt="Изображение блока"
                                    >
                                </a>
                                <div class="card__descr">
                                    <a class="card__title" href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                    <div class="card__total">
                                        <div class="card__price">
                                            <span class="card__price-current">1200 ₽</span>
                                        </div>
                                        <div class="card__amount">4 шт.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>
					<div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                        <table class="table-descr table-descr--sb table-descr--total">
                            <tbody>
                            <tr>
                                <td>
                                    <span>Итого</span>
                                </td>
                                <td>
                                    <span>7950 ₽</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
						<table class="table-descr table-descr--sb">
							<tbody>
							<tr>
								<td>
									<span class="fw-normal">4 товара</span>
								</td>
								<td>
									<span class="fw-semibold">7950 ₽</span>
								</td>
							</tr>
							<tr>
								<td>
									<span class="fw-normal">Доставка</span>
								</td>
								<td>
									<span class="fw-semibold">600 ₽</span>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>