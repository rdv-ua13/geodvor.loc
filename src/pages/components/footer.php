        <div class="pre-footer">
            <div class="container pre-footer__container">
                <div class="pre-footer__descr">
                    <div class="h3">Узнавайте об акциях и новостях раньше всех</div>
                    <div class="pre-footer__descr-text">Подпишитесь на полезную рассылку</div>
                </div>
                <div class="pre-footer__act">
                    <div class="pre-footer__subscribe">
                        <form id="" class="form" method="" action="javascript:;">
                            <div class="input-wrapper input-wrapper-split input-wrapper-search has-icon-l">
                                <input
                                        class="input-reset input"
                                        type="search"
                                        name=""
                                        placeholder="Введите ваш email"
                                        autocomplete="off"
                                >
                                <label class="input-icon input-icon-l">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#sms-notification"></use>
                                    </svg>
                                </label>
                                <button class="btn-reset btn btn-secondary input-search-btn" type="submit">
                                    <span class="text-content">Подписаться</span>
                                </button>
                            </div>
                            Даю согласие на обработку моих персональных данных. Соглашаюсь с Политикой конфиденциальности и ознакомлен с Политикой в отношении обработки персональных данных
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer__column">
                    <div class="footer__title">Каталог</div>
                    <ul class="list-reset footer__list">
                        <li><a class="footer__link" href="javascript:;">Геотекстиль</a></li>
                        <li><a class="footer__link" href="javascript:;">Дорнит</a></li>
                        <li><a class="footer__link" href="javascript:;">Геосетка</a></li>
                        <li><a class="footer__link" href="javascript:;">Объемная георешетка</a></li>
                        <li><a class="footer__link" href="javascript:;">Спанбонд</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Покупателям</div>
                    <ul class="list-reset footer__list">
                        <li><a class="footer__link" href="javascript:;">Доставка</a></li>
                        <li><a class="footer__link" href="javascript:;">Оплата</a></li>
                        <li><a class="footer__link" href="javascript:;">Оптовым покупателям</a></li>
                        <li><a class="footer__link" href="javascript:;">Контакты</a></li>
                        <li><a class="footer__link" href="javascript:;">О нас</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Полезное</div>
                    <ul class="list-reset footer__list">
                        <li><a class="footer__link" href="javascript:;">Готовые решения</a></li>
                        <li><a class="footer__link" href="javascript:;">Полезные советы</a></li>
                        <li><a class="footer__link" href="javascript:;">Вопросы покупателей</a></li>
                        <li><a class="footer__link" href="javascript:;">Карта сайта</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Нужна помощь?</div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom__content">
                <div class="footer__row">
                    <div class="footer__column">
                        <div class="footer__title">Мы принимаем к оплате</div>
                        <ul class="list-reset payment-supports">
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                        loading="lazy"
                                        class="image"
                                        src="img/ps-visa.svg"
                                        width="44"
                                        height="15"
                                        alt="Мы принимаем к оплате Visa"
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/ps-mastercard.svg"
                                            width="36"
                                            height="21"
                                            alt="Мы принимаем к оплате Mastercard"
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/ps-maestro.svg"
                                            width="33"
                                            height="21"
                                            alt="Мы принимаем к оплате Maestro"
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/ps-mir.svg"
                                            width="54"
                                            height="13"
                                            alt="Мы принимаем к оплате Мир"
                                    >
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" target="_blank">
                                    <img
                                            loading="lazy"
                                            class="image"
                                            src="img/ps-gpay.svg"
                                            width="53"
                                            height="17"
                                            alt="Мы принимаем к оплате Google pay"
                                    >
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__row">
                    <div class="footer__column">
                        <div class="footer__rights-info">
                            <div class="footer__rights">
                                &#169; <?= date('Y'); ?> ГЕОДВОР
                            </div>
                            <div class="footer__consent">Данный интернет-сайт geo-dvor.ru носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации. Стоимость и наличие товара просьба уточнять по телефону.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<?php /*include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/modals.php"); */?>

    <?/*<script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>*/?>
</body>
</html>