document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initOverlay();
    this.initMenu();
    this.setMenuHeightOverflow();
    this.initMenuCatalogSubmenu();
    this.initFancyBehavior();
    this.initClientTypeBehavior();
    this.initTabs();
    this.initBasicTabs();
    this.initTabsOnscroll();
    this.initCartOnscroll();
    this.initNotification();
    /*this.initSwitchContent();*/
    this.initPasswordSwitcher();
    this.initBasicSlider();
    this.initBasicGallerySlider();
    this.initMiniSlider();
    this.initSwiperTabs();
    this.initSwiperBasicTabs();
    this.initTagbarSlider();
    this.initSliders();
    this.initSelect2();
    this.setStaticStarRating();
    this.setVisibleStarRatingGrade();
    this.setCardProductActMore();
    this.initReadmore();
    this.initCartQuantity();
    /*this.initShareLink();*/
    this.initTooltips();
    this.initMaskedInput();
    this.initDatepicker();
    this.initDeleteTrigger();
    this.initDropfiles();
    this.initInputSearchBehavior();
    this.initSearchResBehavior();
    this.initMobileCitySelection();
    this.initCatalogContentSort();
    this.initCatalogContentViewSwitcher();
    this.initCatalogSidebarFilterViewSwitcher();
    this.initCheckedRadioInsurances();
    this.initCatalogSidebarFilterCheckedTags();
    this.initCatalogSidebarFilter();
    this.initCatalogSidebarSortOptionsContent();
    this.initCatalogSidebarApplyFilter();
    this.initCheckall();
    this.initOrdersMap();
    this.initContactsMap();
    this.initOrderBonusDebit();
    this.initAddingOrgData();
    this.initOpenPromocode();
    this.initAccordion();
};

// Initialize device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
}

// Initialize header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();

    function setHeaderScroll() {
        if ($(window).scrollTop() > 125) {
            $('.header').addClass('scrolled');
        } else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialize disable scroll
application.prototype.disableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    const paddingOffset = `${(window.innerWidth - body.offsetWidth)}px`;

    document.documentElement.style.scrollBehavior = 'none';
    fixBlocks.forEach(el => { el.style.paddingRight = paddingOffset; });
    body.style.paddingRight = paddingOffset;
    body.classList.add('dis-scroll');
};

// Initialize enable scroll
application.prototype.enableScroll = function () {
    const body = document.body;
    const fixBlocks = document?.querySelectorAll('.fixed-block');
    fixBlocks.forEach(el => { el.style.paddingRight = '0px'; });
    body.style.paddingRight = '0px';
    body.classList.remove('dis-scroll');
};

// Initialize burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            this.disableScroll();
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            this.enableScroll();
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        return application.prototype.enableScroll();
    }
};

// Initialize overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const body = $('body');
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            body.addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });
        
        function setTargetAction() {
            body.removeClass('overflow-hidden');
            $('.overlay').remove();
            return application.prototype.enableScroll();
        }
    }
};

// Initialize menu call
application.prototype.initMenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setCatalogClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setCatalogClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setCatalogClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
        } else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
        }
    }

    function setCatalogClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        $('.menu-catalog-header').removeClass('submenu');
        $('.overlay-transparent').remove();
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $("<div class='overlay-transparent'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setCatalogClose();
            }
        });
    }
};

// Initialize menu height overflow
application.prototype.setMenuHeightOverflow = function () {
    defineMenuOverflow();
    $(window).on('resize', function () {
        defineMenuOverflow();
    });

    function defineMenuOverflow() {
        let windowHeight = $(window).outerHeight();
        let menuHeight = $('.menu-catalog').outerHeight();

        if (menuHeight > windowHeight) {
            $('.menu-catalog').addClass('menu-catalog-overflow');
        } else {
            $('.menu-catalog').removeClass('menu-catalog-overflow');
        }
    }
};

// Initialize menu catalog behavior
application.prototype.initMenuCatalogSubmenu = function () {
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalogTitle = $('[data-catalog-title]');
    const rootItem = $('[data-submenu-section]');

    catalogSpoiler.on('click', function (e) {
        const currentRootItem = $(".menu-catalog-root-link[data-submenu-section='0']");
        const currentSubmenuItem = $(".menu-catalog-submenu-section[data-root-pointer='0']");
        let currentCatalogTitle = catalogTitle.data('catalog-title');

        catalogTitle.text(currentCatalogTitle);
        rootItem.closest('.menu-catalog-root').removeClass('hide');
        rootItem.closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        $('.menu-catalog-root-link').removeClass('selected');
        currentRootItem.addClass('selected');
        $('.menu-catalog-submenu-section').removeClass('active');
        currentSubmenuItem.addClass('active');
    });

    if (window.matchMedia('(min-width: 992px)').matches) {
        if (!$('html').hasClass('touch')) {
            rootItem.on('mouseover', function () {
                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        } else {
            rootItem.on('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                let rootItemId = $(this).data('submenu-section');

                $('.menu-catalog-submenu-section').removeClass('active');
                $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
            });
        }
    } else if (window.matchMedia('(max-width: 991.98px)').matches) {
        rootItem.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            let rootItemId = $(this).data('submenu-section');
            let currentCatalogTitle = $(this).text();

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog').find('.menu-catalog-header').addClass('submenu');
            $(this).closest('.menu-catalog-root').addClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').addClass('active');
            $('.menu-catalog-submenu-section').removeClass('active');
            $(".menu-catalog-submenu-section[data-root-pointer='" + rootItemId + "']").addClass('active');
        });

        $('.menu-catalog-title-back').on('click', function (e) {
            let currentCatalogTitle = catalogTitle.data('catalog-title');

            catalogTitle.text(currentCatalogTitle);
            $(this).closest('.menu-catalog-header').removeClass('submenu');
            $(this).closest('.menu-catalog').find('.menu-catalog-root').removeClass('hide');
            $(this).closest('.menu-catalog').find('.menu-catalog-submenu').removeClass('active');
        });
    }
};

// Initialize custom fancy behavior
application.prototype.initFancyBehavior = function () {
    const body = $('body');
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalog = $('[data-catalog]');
    const catalogSpoiler = $('[data-catalog-spoiler]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        catalog.removeClass('active');
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            body.removeClass('overflow-hidden');
            $('[data-open-promocode]').removeClass('selected');
            $('[data-open-promocode]').closest('.modal-order-promocode__list').removeClass('has-active');
            $('[data-open-promocode]').closest('.modal-order-promocode__item').removeClass('active');
            return application.prototype.enableScroll();
        }
    });
};

// Initialize custom '.client-type' behavior
application.prototype.initClientTypeBehavior = function () {
    const elem = $('[data-ct]');

    elem.on('click', function () {
        if($(this).is('#ct-entity')) {
            $('[data-ct-entity-bind]')
                .fadeIn()
                .animate({ opacity: 1 }, 200);
        } else {
            $('[data-ct-entity-bind]')
                .fadeOut(200);
        }
    });
};

// Initialize tabs
application.prototype.initTabs = function () {
    if ($('.tabs').length) {
        const tabsContainer = $('.tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        setSelectedTab();
        $(window).on('resize', setSelectedTab());

        $('.tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".tabs-container[data-tab='" + currentTabBlockId + "']").find('.tabs-trigger').removeClass('selected');
            $(this).find('.tabs-trigger').removeClass('notice').addClass('selected');

            currentSelected = $(this).find(".tabs-trigger").data("target");
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.tabs-content__panel').removeClass('active');
            $(".tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });

        function setSelectedTab () {
            if (window.matchMedia('(min-width: 992px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.desktop-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.desktop-first-elem').addClass('active');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                $('.tabs-trigger').removeClass('selected');
                $('.tabs-trigger.mobile-first-elem').addClass('selected');
                $('.tabs-content__panel').removeClass('active');
                $('.tabs-content__panel.mobile-first-elem').addClass('active');
            }
        }
    }
};

// Initialize basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('selected');
            $(this).find('.basic-tabs-trigger').removeClass('notice').addClass('selected');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialize tabs on scroll
application.prototype.initTabsOnscroll = function () {
    if ($('[data-fixed-toolbar-coord]').length) {
        const elem = $('[data-fixed-toolbar-coord]');

        setFixedToolbar();
        $(window).scroll(function() {
            setFixedToolbar();
        });

        function setFixedToolbar() {
            let scrollValue = $(window).scrollTop();

            if (window.matchMedia('(min-width: 1380px)').matches) {
                let headerHeight = elem.outerHeight();
                let elemPos = elem.offset().top - headerHeight;

                if(scrollValue > elemPos) {
                    $('.header').addClass('border-off');
                    $('.top-fixed-toolbar').addClass('active');
                } else {
                    $('.header').removeClass('border-off');
                    $('.top-fixed-toolbar').removeClass('active');
                }
            } else if (window.matchMedia('(min-width: 992px) and (max-width: 1379.98px)').matches) {
                let elemPos = elem.offset().top;

                if(scrollValue > elemPos) {
                    $('.header').addClass('border-off');
                    $('.top-fixed-toolbar').addClass('active');
                } else {
                    $('.header').removeClass('border-off');
                    $('.top-fixed-toolbar').removeClass('active');
                }
            } else {
                $('.header').removeClass('border-off');
                $('.top-fixed-toolbar').removeClass('active');
            }
        }
    }
};

// Initialize cart-buy fixed panel on scroll
application.prototype.initCartOnscroll = function () {
    if ($('[data-fixed-cart-coord]').length && $('[data-cart-coord]').length) {
        const elem = $('[data-cart-coord]');

        setFixedToolbar();
        $(window).scroll(function() {
            setFixedToolbar();
        });

        function setFixedToolbar() {
            let scrollValue = $(window).scrollTop();

            if (window.matchMedia('(max-width: 991.98px)').matches) {
                let headerHeight = elem.outerHeight();
                let elemPos = elem.offset().top + headerHeight;

                if(scrollValue > elemPos) {
                    $('[data-fixed-cart-coord]').addClass('active');
                } else {
                    $('[data-fixed-cart-coord]').removeClass('active');
                }
            } else {
                $('[data-fixed-cart-coord]').removeClass('active');
            }
        }
    }
};

// Initialize notification
application.prototype.initNotification = function () {
    const actionNotice = $('.action-notice');
    const noticeBtn = $('[data-notice]');

    noticeBtn.on('click', function () {
        let currentDataValue = noticeBtn.data('notice');

        if (!noticeBtn.hasClass('added')) {
            actionNotice.addClass('added');
        } else {
            actionNotice.removeClass('added');
        }

        showNotification();
        setTimeout(hideNotification, 5000);

    });

    function showNotification() {
        $('.action-notice')
            .fadeIn()
            .animate({ opacity: 1 }, 200);
    }

    function hideNotification() {
        $('.action-notice').fadeOut('slow');
    }
};

// Initialize switch content
application.prototype.initSwitchContent = function () {
    const switchContent = $('.switch-content');

    switchContent.on('click', function () {
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
    });
};

// todo - set using
// Initialize morph
application.prototype.initMorph = function (int, array) {
    return (array = array || ['товар', 'товара', 'товаров']) && array[(int % 100 > 4 && int % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(int % 10 < 5) ? int % 10 : 5]];
};

// Initialize password-switcher
application.prototype.initPasswordSwitcher = function () {
    if ($('input[type=password]').length) {
        $(document).on('click', 'input[data-password-switcher]', function(){
            if ($(this).is(':checked')) {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'text');
                $(this).closest('.form__input-btn').addClass('show');
            } else {
                $(this).closest('.form__field').find('input[data-password-target]').attr('type', 'password');
                $(this).closest('.form__input-btn').removeClass('show');
            }
        });
    }
};

// Initialize basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider').length) {
        const slider = $('[data-basic-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);

            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                /*loop: true,*/
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 40,
                        /*allowTouchMove: false*/
                    },
                }
            };
            const basicSliderTagsSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 12,
                direction: 'horizontal',
            };
            let basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
            let basicSliderTags = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider-tags', basicSliderTagsSetting);
        });
    }
};

// Initialize basic gallery slider
application.prototype.initBasicGallerySlider = function () {
    if ($('.basic-slider').length) {
        const slider = $('[data-basic-gallery-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-gallery-slider-wrap-' + i);

            const basicGallerySliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 8,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-gallery-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-gallery-slider-wrap-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 20,
                    },
                }
            };
            let basicGallerySlider = new Swiper('.basic-gallery-slider-wrap-' + i + ' .basic-gallery-slider', basicGallerySliderSetting);
        });
    }
};

// Initialize mini slider - change images on mouse movement
application.prototype.initMiniSlider = function () {
    if ($('.mini-slider').length) {
        $('.mini-slider').each(function(index, element) {
            if (!$(element).hasClass('init-slider')) {
                $(element).addClass('init-slider');
                let slideLength = $(element).find('.mini-slider__slide').length;
                for (let i = 0; i < slideLength; i++) {
                    $(element).find('.mini-slider__dots').append('<li class="mini-slider__dot"></li>');
                }
                $(element).find('.mini-slider__slide:eq(0)').find('.mini-slider__img').css('opacity', '1');
                $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(0)').addClass('mini-slider__dot--active');
                $(element).find('.mini-slider__slide').on('touchstart mouseover', function(event) {
                    if ($(window).innerWidth() > 991) {
                        let thisOp = $(element).find('.mini-slider__slide').index(this);
                        $(element).find('.mini-slider__slide').find('.mini-slider__img').css('opacity', '0');
                        $(element).find(this).find('.mini-slider__img').css('opacity', '1');

                        $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + thisOp + ')').addClass('mini-slider__dot--active');
                        event.stopPropagation();
                        event.preventDefault();
                    }
                });
                // if has nav btns
                /*$(element).find('.mini-slider__button').on('click', function(event) {
                    event.preventDefault();
                    let $currentVisibleSlide = $(element).find('.mini-slider__img').filter(function() {
                        return $(this).css('opacity') == '1';
                    }).closest('.mini-slider__slide')
                        , slidesCount = $(element).find('.mini-slider__slide').length;

                    $(element).find('.mini-slider__img').css('opacity', '0');
                    $(element).find('.mini-slider__dots').find('.mini-slider__dot').removeClass('mini-slider__dot--active');
                    if ($(this).hasClass('mini-slider__button--prev')) {
                        let prevSlideIndex = $currentVisibleSlide.index() - 1;
                        $(element).find('.mini-slider__img:eq(' + prevSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + prevSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                    if ($(this).hasClass('mini-slider__button--next')) {
                        let nextSlideIndex = $currentVisibleSlide.index() + 1;
                        if (nextSlideIndex >= slidesCount) {
                            nextSlideIndex = 0;
                        }
                        $(element).find('.mini-slider__img:eq(' + nextSlideIndex + ')').css('opacity', '1');
                        $(element).find('.mini-slider__dots').find('.mini-slider__dot:eq(' + nextSlideIndex + ')').addClass('mini-slider__dot--active');
                    }
                });*/
            }
        });
    }
};

// Initialize swiper tabs
application.prototype.initSwiperTabs = function () {
    if ($(".tabs-container.swiper").length) {
        const swiperTabSettings = {
            slidesPerView: "auto",
        };
        let swiperTabs = new Swiper(".tabs-container.swiper", swiperTabSettings);
    }
};

// Initialize swiper basic-tabs
application.prototype.initSwiperBasicTabs = function () {
    if ($(".basic-tabs-container.swiper").length) {
        const swiperTabSettings = {
            slidesPerView: "auto",
            spaceBetween: 8,
            breakpoints: {
                992: {
                    spaceBetween: 12,
                },
            }

        };
        let swiperTabs = new Swiper(".basic-tabs-container.swiper", swiperTabSettings);
    }
};

// Initialize tag-bar slider
application.prototype.initTagbarSlider = function () {
    if ($('[data-tag-bar-slider]').length) {
        const slider = $('[data-tag-bar-slider]');

        slider.each(function (i) {
            const tagbarSliderSetting = {
                slidesPerView: 'auto',
                spaceBetween: 8,
                direction: 'horizontal',
            };
            let tagbarSlider = null;

            slider.eq(i).addClass('tag-bar-slider-' + i);

            setCheckedSlide();
            breakpointChecker();
            $(window).on('resize', breakpointChecker);

            function breakpointChecker() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSlider !== null) tagbarSlider.destroy(true, true);
                    tagbarSlider = null;
                }
                else if (window.matchMedia('(max-width: 991.98px)').matches) {
                    tagbarSlider = new Swiper('.tag-bar-slider-' + i, tagbarSliderSetting);
                }
            }

            function setCheckedSlide() {
                $('.tag-bar-slider-' + i + ' .tag-bar-slide-item input').on('click', function () {
                   if($(this).prop('checked')) {
                       $(this).closest('.tag-bar-slide-item').addClass('checked');
                   } else {
                       $(this).closest('.tag-bar-slide-item').removeClass('checked');
                   }
                });
            }
        });
    }
};

// Initialize sliders
application.prototype.initSliders = function () {
    if ($('.product-card-descr-slider').length) {
        let productCardDescrSliderThumb = null;
        let productCardDescrSlider = null;

        breakpointChecker();
        $(window).on('resize', breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                productCardDescrSlider = null;

                productCardDescrSliderThumb = new Swiper('.product-card-descr-slider-thumb', {
                    spaceBetween: 8,
                    slidesPerView: 'auto',
                    freeMode: true,
                    watchSlidesProgress: true,
                });
                productCardDescrSlider = new Swiper('.product-card-descr-desktop .product-card-descr-slider', {
                    spaceBetween: 8,
                    pagination: {
                        el: '.product-card-descr-slider .swiper-pagination',
                    },
                    thumbs: {
                        swiper: productCardDescrSliderThumb,
                    },
                });
                initStopSlideVideoOnChange();
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                productCardDescrSliderThumb = null;
                productCardDescrSlider = null;

                productCardDescrSlider = new Swiper('.product-card-descr-mobile .product-card-descr-slider', {
                    spaceBetween: 8,
                    pagination: {
                        el: '.product-card-descr-slider .swiper-pagination',
                    },
                });
                initStopSlideVideoOnChange();
            }
        }

        function initStopSlideVideoOnChange() {
            let slideVideo = $('.product-card-descr-slider .swiper-slide video');
            productCardDescrSlider.on('slideChange', function () {
                slideVideo.each(function(i) {
                    this.pause();
                    this.currentTime = 0;
                    this.play();
                });
            });
        }
    }

    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            spaceBetween: 0,
            slidesPerView: 'auto',
        });
    }

    if ($('.menu-catalog-submenu-banners').length) {
        $('.menu-catalog-submenu-banners').each(function (i) {
            let currentElem = $(this).find('.swiper').addClass('menu-catalog-submenu-banners-slider-' + i);

            let sliderCatalogSubmenuBanners = new Swiper('.menu-catalog-submenu-banners-slider-' + i, {
                spaceBetween: 12,
                slidesPerView: 'auto',
                breakpoints: {
                    992: {
                        spaceBetween: 40
                    },
                }
            });
        });
    }

    if ($('.mobile-search-results-hint').length) {
        const MobileSearchSliderSettings = {
            spaceBetween: 8,
            slidesPerView: 'auto',
            watchOverflow: true,
            freeMode: true,
            mousewheel: true
        };

        let sliderSearchResultsHint = new Swiper('.search-results .mobile-search-results-hint .swiper', MobileSearchSliderSettings);
        let sliderMobileCityHint = new Swiper('.mobile-city .mobile-search-results-hint .swiper', MobileSearchSliderSettings);
    }

    if ($('.catalog-content__section').length) {
        let sliderCatalogContentFilterSelected = new Swiper('.catalog-content__section .swiper', {
            spaceBetween: 8,
            slidesPerView: 'auto',
            breakpoints: {
                992: {
                    spaceBetween: 20,
                }
            }
        });
    }

    if ($('.catalog-content__popular-collection').length) {
        let sliderCatalogContentPopularCollection = new Swiper('.catalog-content__popular-collection .swiper', {
            slidesPerView: 2.15,
            grid: {
                rows: 3,
            },
            spaceBetween: 12,
            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 16,
                }
            }
        });
    }

    if ($('.catalog-content__popular-color').length) {
        let sliderCatalogContentPopularColor = new Swiper('.catalog-content__popular-color .swiper', {
            spaceBetween: 8,
            slidesPerView: 'auto',
            breakpoints: {
                992: {
                    spaceBetween: 16,
                }
            }
        });
    }

    if ($('.catalog-content__grid-mobile-slider').length) {
        let sliderCatalogContentGrid = null;

        breakpointChecker();
        $(window).on('resize', breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                sliderCatalogContentGrid = null;
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                sliderCatalogContentGrid = null;

                sliderCatalogContentGrid = new Swiper('.catalog-content__grid-mobile-slider .swiper', {
                    spaceBetween: 12,
                    slidesPerView: 'auto',
                });
            }
        }
    }

    if ($('.index-slider-wrapper').length) {
        const indexSliderSettings = new Swiper('.index-slider', {
            slidesPerView: 1,
            navigation: {
                nextEl: '.index-slider .swiper-button-next',
                prevEl: '.index-slider .swiper-button-prev',
            },
            pagination: {
                el: ".index-slider .swiper-pagination",
            },
        });
        let indexSlider = new Swiper('.index-slider', indexSliderSettings);
    }

    if ($('.partners-label').length) {
        const slider = $('[data-partners-label-slider]');

        slider.each(function (i) {
            slider.eq(i).closest('.partners-label-wrapper').addClass('partners-label-wrapper-' + i);

            const partnersLabelSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: 8,
                /*loop: true,*/
                direction: 'horizontal',
                navigation: {
                    nextEl: '.partners-label-wrapper-' + i + ' .swiper-button-next',
                    prevEl: '.partners-label-wrapper-' + i + ' .swiper-button-prev',
                },
                breakpoints: {
                    992: {
                        spaceBetween: 16,
                        /*allowTouchMove: false*/
                    },
                }
            };
            let partnersLabelSlider = new Swiper('.partners-label-wrapper-' + i + ' .partners-label', partnersLabelSliderSetting);
        });
    }

    if ($('.collection-slider').length) {
        let collectionSlider = null;

        breakpointChecker();
        $(window).on('resize', breakpointChecker);

        function breakpointChecker() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                collectionSlider = null;
            }
            else if (window.matchMedia('(max-width: 991.98px)').matches) {
                collectionSlider = null;

                collectionSlider = new Swiper('.collection-slider', {
                    spaceBetween: 12,
                    slidesPerView: 'auto',
                });
            }
        }

    }
};

// Initialize select2 plagin
application.prototype.initSelect2 = function () {
    if ($('.js-select2').length) {
        $('.js-select2').select2();
    }
};

// Set behavior static star-rating
application.prototype.setStaticStarRating = function () {
    if ($('[data-star-rate-static]').length) {
        $('[data-star-rate-static]').each(function (i) {
            const rating = $(this).find('.star-rating');
            const value = parseInt($(this).find('.star-rating-value').data("value"));

            switch (value) {
                case 0:
                    rating.addClass('star-rating-0');
                    break;
                case 1:
                    rating.addClass('star-rating-1');
                    break;
                case 2:
                    rating.addClass('star-rating-2');
                    break;
                case 3:
                    rating.addClass('star-rating-3');
                    break;
                case 4:
                    rating.addClass('star-rating-4');
                    break;
                case 5:
                    rating.addClass('star-rating-5');
                    break;
                default:
                    rating.addClass('star-rating-0');
            }
        });
    }
};

// Set caption to star rating
application.prototype.setVisibleStarRatingGrade = function () {
    if ($('.star-rating-label').length) {
        let caption = '';

        $('[data-star-grade]').hover(
            function () {
                caption = $(this).data('star-grade');

                $(this).closest('.star-rating-label').find('.star-rating-grade').text(caption);
            },
            function () {
                $(this).closest('.star-rating-label').find('.star-rating-grade').text('');
            }
        );
    }
};

// Set behavior to button "more" in card-product
application.prototype.setCardProductActMore = function () {
    if ($('[data-card-product-act-more]').length) {
        $('[data-card-product-act-more]').on('click', function () {
            if(!$(this).hasClass('active')) {
                $('[data-card-product-act-more]').not($(this)).removeClass('active');
                $('[data-card-product-act-content]').removeClass('active');
                $(this).addClass('active');
                $(this).siblings('[data-card-product-act-content]').addClass('active');
            } else {
                $(this).removeClass('active');
                $(this).siblings('[data-card-product-act-content]').removeClass('active');
            }
        });

        $(document).on('click', function (e) {
            if ($('.card-product-act').is(e.target) || $('.card-product-act').has(e.target).length === 0) {
                $('[data-card-product-act-more]').removeClass('active');
                $('[data-card-product-act-content]').removeClass('active');
            }
        });
    }
};

// Initialize readmore plugin
application.prototype.initReadmore = function () {
    if ($('[data-spoiler]').length) {
        const spoiler = $('[data-spoiler]');

        spoiler.each(function (i) {
            let currentMoreText = spoiler.eq(i).data('spoiler-more');
            let currentLessText = spoiler.eq(i).data('spoiler-less');
            let defaultHeight = 200;
            let defaultMoreText = 'Показать все';
            let defaultLessText = 'Свернуть';
            let currentElemHeight = spoiler.eq(i).data("collapsed-height");

            if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined &&
                currentLessText === '' || currentLessText === null || currentLessText === undefined)
            {
                currentMoreText = defaultMoreText;
                currentLessText = defaultLessText;
            } else if (currentMoreText === '' || currentMoreText === null || currentMoreText === undefined) {
                currentMoreText = defaultMoreText;
            } else if (currentLessText === '' || currentLessText === null || currentLessText === undefined) {
                currentLessText = defaultLessText;
            }

            if (currentElemHeight === '' || currentElemHeight === null || currentElemHeight === undefined) {
                currentElemHeight = defaultHeight;
            }

            spoiler.eq(i).addClass("spoiler-" + i);
            $(".spoiler-" + i).readmore({
                collapsedHeight: currentElemHeight,
                moreLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">' + currentMoreText + '</span>\n' +
                    '                                    </a>',
                lessLink: '<a href="javascript:;" class="link-dashed link-red spoiler-trigger">\n' +
                    '                                        <span class="btn__text">' + currentLessText + '</span>\n' +
                    '                                    </a>'
            });
        });
    }
};

// Initialize cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $('.cart-buy .cart-in').on("click", function() {
            if(!$(this).hasClass('active')) {
                $(this).addClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').removeClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').addClass('selected');
            } else {
                $(this).removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').removeClass('selected');
                $(this).closest('.cart-buy').find('input.cart-quantity-input').val(1);
            }
        });

        $(document).on('click','.cart-quantity-btn--remove', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
                $(this).closest('.cart-quantity').addClass('disabled');
            }
        });

        $(document).on('click', '.cart-quantity-btn', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;

                if(newVal > 1) {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');
                } else {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                }
            } else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');

                    if(oldValue > 1 && oldValue < 3) {
                        $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                    }
                } else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};

// todo - tmp don`t work
// Initialize share link
application.prototype.initShareLink = function () {
    if ($('[data-share-link]').length) {
        let copyBtn = $('[data-share-link-btn]');

        copyBtn.on('click', function () {
            let copyValue = $(this).closest('[data-share-link]').find('[data-share-link-input]');
            copyToClipboard(copyValue);
        });

        function copyToClipboard(element) {
            let temp = $('<input class="visually-hidden">');
            $(this).append(temp);
            temp.attr("contenteditable", true)
                .html(element.html()).select()
                .on("focus", function() { document.execCommand('selectAll',false,null); })
                .focus();
            document.execCommand("copy");
            temp.remove();
        }
    }
};

// Initialize tooltips
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        tippy(".tooltip", {
            allowHTML: true,
            trigger: "mouseenter click",
        });
    }
};

// Mobile number mask
application.prototype.initMaskedInput = function () {
    $(".isPhone").mask("+7 (999) 999-99-99", { autoclear: false });
};

// Init datepicker
application.prototype.initDatepicker = function () {
    if ($(".flatpickr").length) {
        const dateElem = $(".flatpickr");

        let newFlatpickr = flatpickr(dateElem, {
            dateFormat: "d.m.Y",
            disableMobile: "true",
            locale: "ru"
        });
    }
};

// Initialize delete trigger
application.prototype.initDeleteTrigger = function () {
    $('[data-delete-trigger]').on("click", function () {
        $(this).closest('[data-removable]').remove();
    });
};

// Initialize drop files
application.prototype.initDropfiles = function () {
    File.prototype.convertToBase64 = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function (e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsDataURL(this);
    };

    File.prototype.convertToSvgHtml = function (callback) {
        let reader = new FileReader();

        reader.onloadend = function(e) {
            callback(e.target.result, e.target.error);
        };
        reader.readAsText(this);
    };

    const getDataImage = (file, callback) => {
        let filename = file.name,
            idxDot = filename.lastIndexOf(".") + 1,
            extFile = filename.substr(idxDot, filename.length).toLowerCase();

        if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
            file.convertToBase64((base64) => {
                callback(base64, false);
            })
        } else {
            alert('Неверный формат файла (Поддерживаемые форматы: png, jpeg)');
        }
    };

    $('body').on('dragenter', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    $('body').on('dragover', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).addClass('dragover');
    });

    $('body').on('dragleave', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).removeClass('dragover');
    });

    $('body').on('drop', '.js-drop-file', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $(this).removeClass('dragover');
        $(this).closest('.js-upload-photos').addClass('has-attached');

        let type = $(this).closest('.dropfile').attr('data-type');
        let countFiles = $(this).closest('.js-upload-photos').find('.dropfile-image__item').length + e.originalEvent.dataTransfer.files.length;

        if (type === 'image') {
            if (countFiles > 10) {
                return;
            }
            for (let i in e.originalEvent.dataTransfer.files) {
                if (e.originalEvent.dataTransfer.files.hasOwnProperty(i)) {
                    let file = e.originalEvent.dataTransfer.files[i];
                    getDataImage(file, (data, isSvg) => {
                        appendImage($(this), data, isSvg);
                    });
                }
            }
        }
    });

    $('.js-drop-file').on('change', '.js-change-file', function () {
        let type = $(this).closest('.dropfile').attr('data-type');
        let countFiles = $(this).closest('.js-upload-photos').find('.dropfile-image__item').length + $(this)[0].files.length;

        $(this).closest('.js-upload-photos').addClass('has-attached');

        if (type === 'image') {
            if (countFiles > 10) {
                return;
            }
            for (let i in $(this)[0].files) {
                if ($(this)[0].files.hasOwnProperty(i)) {
                    let file = $(this)[0].files[i];

                    if (type === 'image') {
                        getDataImage(file, (data, isSvg) => {
                            appendImage($(this), data, isSvg);
                        });
                    }
                }
            }
        }
    });

    function appendImage($input, data, isSvg) {
        let image = '',
            $parent = $input.closest('.dropfile');

        if(isSvg) {
            image = data;
        } else {
            image = `<img src="` + data + `" class="image">`;
        }

        let html = `
                    <div class="dropfile-image__item">
                        ` + image + `
                        <div class="dropfile-image__remove js-remove-image">
                            <svg class="icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </div>
                        <input class="js-image" type="hidden" name="` + $parent.attr('data-input-name') + `" value='` + data + `'>
                    </div>
                    `;

        if($parent.hasClass('js-upload-photos')) {
            $parent
                .find('.dropfile-gallery')
                .show()
                .append(html);
        }
    };

    $('body').on('click', '.js-remove-image', function (e) {
        e.preventDefault();
        e.stopPropagation();

        let $parent = $(this).closest('.dropfile');
        let galleryItem = $parent.find('.dropfile-image__item');

        if($parent.hasClass('js-upload-photos')) {
            $(this).closest('.dropfile-image__item').remove();

            if (galleryItem.length < 2) {
                $parent.removeClass('has-attached');
            }
        }
    });
};

// Initialize input-search behavior
application.prototype.initInputSearchBehavior = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialize search result behavior
application.prototype.initSearchResBehavior = function () {
    $(document).on('click', '.search-results__close', function () {
        $(this).closest('.header-search-results').removeClass('active');
        $(this).closest('.cart-quick-add').removeClass('active');
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            $('.search-results__close').closest('.header-search-results').removeClass('active');
            $('.search-results__close').closest('.cart-quick-add').removeClass('active');
        }
    });
};

// Initialize mobile city selection
application.prototype.initMobileCitySelection = function () {
    if ($('.mobile-menu-city').length) {
        $('[data-mobile-city-spoiler]').on('click', function () {
            $('.mobile-city').addClass('active');
        });

        $('.mobile-city__close').on('click', function () {
            $(this).closest('.mobile-city').removeClass('active');
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                $('.mobile-city').removeClass('active');
            }
        });
    }
};

// Initialize catalog content sort
application.prototype.initCatalogContentSort = function () {
    if ($('.catalog-content-settings__sort-options').length) {
        initCatalogContentSortSwitch();

        catalogSettingsSortSelect();
        $(window).on('resize', catalogSettingsSortSelect);

        $(document).on('click', function (e) {
            if (!$('.catalog-content-settings__sort-select').is(e.target) &&
                !$('.catalog-content-settings__sort-options').is(e.target) &&
                $('.catalog-content-settings__sort-options').has(e.target).length === 0)
            {
                closeCatalogContentSettingsSort();
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                closeCatalogContentSettingsSort();
            }
        });

        function initCatalogContentSortSwitch() {
            $('.catalog-content-settings__sort-options input[type="radio"]').on('click', function () {
                if($(this).prop('checked')) {
                    $(this).closest('.catalog-content-settings__sort-options').find('.catalog-content-settings__sort-label').removeClass('active');
                    $(this).siblings('.catalog-content-settings__sort-label').addClass('active');
                } else {
                    $(this).siblings('.catalog-content-settings__sort-label').removeClass('active');
                }

                if (window.matchMedia('(max-width: 1199.98px)').matches) {
                    let selectPlaceholder = $('.catalog-content-settings__sort-label.active').text();

                    $('.catalog-content-settings__sort').find('.catalog-content-settings__sort-select-text').text(selectPlaceholder);
                    closeCatalogContentSettingsSort();
                }
            });
        }

        function catalogSettingsSortSelect() {
            if (window.matchMedia('(min-width: 1200px)').matches) {
                closeCatalogContentSettingsSort();
            } else if (window.matchMedia('(max-width: 1199.98px)').matches) {
                $('.catalog-content-settings__sort-select').on('click', function () {
                    if (!$(this).hasClass('active')) {
                        $(this).addClass('active');
                        $(this).siblings('.catalog-content-settings__sort-options').addClass('active');
                    } else if ($(this).hasClass('active')) {
                        $(this).removeClass('active');
                        $(this).siblings('.catalog-content-settings__sort-options').removeClass('active');
                    }
                });
            }
        }

        function closeCatalogContentSettingsSort () {
            $('.catalog-content-settings__sort-select').removeClass('active');
            $('.catalog-content-settings__sort-options').removeClass('active');
        }
    }
};

// Initialize catalog content view switcher
application.prototype.initCatalogContentViewSwitcher = function () {
    if ($('[data-catalog-content-grid]').length) {
        const viewSwitcherContainer = $('[data-catalog-content-view]');
        const viewSwitcher = $('[data-catalog-content-grid]');

        $(window).on('resize', responsiveDefaultGrid);

        viewSwitcher.on('click', function () {
            let defaultValue = $('[data-catalog-content-grid="grid"]');
            let currentValue = $(this).data('catalog-content-grid');

            switch (currentValue) {
                case 'list':
                    viewSwitcherContainer.removeClass('catalog-category--grid catalog-category--table');
                    viewSwitcherContainer.addClass('catalog-category--list');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                case 'grid':
                    viewSwitcherContainer.removeClass('catalog-category--list catalog-category--table');
                    viewSwitcherContainer.addClass('catalog-category--grid');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                case 'table':
                    viewSwitcherContainer.removeClass('catalog-category--list catalog-category--grid');
                    viewSwitcherContainer.addClass('catalog-category--table');
                    viewSwitcher.removeClass('active');
                    $(this).addClass('active');
                    break;
                default:
                    viewSwitcherContainer.addClass('catalog-category--grid');
                    viewSwitcher.removeClass('active');
                    defaultValue.addClass('active');
            }
        });
        
        function responsiveDefaultGrid() {
            viewSwitcherContainer.removeClass('catalog-category--list catalog-category--table');
            viewSwitcherContainer.addClass('catalog-category--grid');
            viewSwitcher.removeClass('active');
            $('[data-catalog-content-grid="grid"]').addClass('active');
        }
    }
};

// Initialize catalog sidebar filter view switcher
application.prototype.initCatalogSidebarFilterViewSwitcher = function () {
    if ($('[data-filter-option-view]').length && $('[data-filter-option-content]').length) {
        const viewSwitcherContainer = $('[data-filter-option]');
        const viewSwitcher = $('[data-filter-option-view]');
        const viewSwitcherContent = $('[data-filter-option-content]');

        viewSwitcher.on('click', function () {
            if (!$(this).hasClass('collapse-view-in')) {
                $(this).addClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).addClass('collapse-content-in');
            } else if ($(this).hasClass('collapse-view-in')) {
                $(this).removeClass('collapse-view-in');
                $(this).closest(viewSwitcherContainer).find(viewSwitcherContent).removeClass('collapse-content-in');
            }
        });
    }
};

// Initialize checked radio insurances
application.prototype.initCheckedRadioInsurances = function () {
    if ($('.custom-radio').length) {
        $('.custom-radio__input').on('click',function () {
            let name = $(this).attr('name');

            $('.custom-radio__input[name="' + name + '"]').removeClass('checked');
            $('.custom-radio__input[name="' + name + '"]').not(this).prop('checked', false);
            $(this).addClass('checked');
        });
    }
};

// Initialize catalog sidebar filter checked tags
application.prototype.initCatalogSidebarFilterCheckedTags = function () {
    if ($('.catalog-sidebar-filter__tag').length) {
        $('.catalog-sidebar-filter__tag input[type="checkbox"]').on('click',function () {
            $(this).closest('.catalog-sidebar-filter__tag').toggleClass('checked');
        });
    }
};

// Initialize catalog sidebar filter
application.prototype.initCatalogSidebarFilter = function () {
    if ($('[data-filter]').length && $('[data-filter-spoiler]').length) {
        const filter = $('[data-filter]');
        const filterSpoiler = $('[data-filter-spoiler]');
        const filterClose = $('[data-filter-close]');

        setResponsiveFilter();
        setCheckChangeFilter();
        $(window).on('resize', setResponsiveFilter, setCloseFilter, setCheckChangeFilter);

        filterClose.on('click', function () {
            setCloseFilter();
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setCloseFilter();
            }
        });

        function setResponsiveFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                setCloseFilter();
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filterSpoiler.on('click', function () {
                    $(this).addClass('active');
                    filter.addClass('active');
                });
            }
        }

        function setCloseFilter() {
            filter.removeClass('active');
            filterSpoiler.removeClass('active');
        }

        function setCheckChangeFilter() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                filter.removeClass('has-filter');
            } else if (window.matchMedia('(max-width: 991.98px)').matches) {
                filter.on('change', function () {
                    filter.addClass('has-filter');
                    filterSpoiler.addClass('has-filter');
                });
            }
        }
    }
};

// Initialize catalog sidebar sort options content
application.prototype.initCatalogSidebarSortOptionsContent = function () {
    $('.catalog-sidebar-filter__options-item').each(function(i, e) {
        $(e).find('.catalog-sidebar-filter__options-search .input-search').on('input', function() {
            let text = $(this).val().toLowerCase();
            $(this).parents('.catalog-sidebar-filter__options-item').find('.catalog-sidebar-filter__item .custom-checkbox__label-for').each(function() {
                if ($(this).text().toLowerCase().indexOf(text) === -1) {
                    $(this).closest('.catalog-sidebar-filter__item').fadeOut(200);
                    $(this).closest('.spoiler').addClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').addClass('visually-hidden');
                } else {
                    $(this).closest('.catalog-sidebar-filter__item').fadeIn(200);
                    $(this).closest('.spoiler').removeClass('height-auto');
                    $(this).closest('.catalog-sidebar-filter__options-content-item').find('.spoiler-trigger').removeClass('visually-hidden');
                }
            });
        });

        $(e).find('.catalog-sidebar-filter__options-search .input-search').siblings('.input-delete-btn').on('click', function(e) {
            e.preventDefault();

            $(this).closest('.catalog-sidebar-filter__options-content').find('.catalog-sidebar-filter__item').fadeIn(200);
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler').removeClass('height-auto');
            $(this).closest('.catalog-sidebar-filter__options-content').find('.spoiler-trigger').removeClass('visually-hidden');
        });
    });

};

// Initialize catalog sidebar apply filter
application.prototype.initCatalogSidebarApplyFilter = function () {
    let trigger = null;
    let coordsTrigger = null;
    let wTrigger = null;
    let hTrigger = null;
    let html = '<div class="catalog-sidebar-apply-filter">' +
        '           <div class="catalog-sidebar-apply-filter__title">Показать</div>' +
        '           <div class="catalog-sidebar-apply-filter__value">2 184 товара</div>' +
        '       </div>';

    $(document).on('click', '.catalog-sidebar-filter__item .custom-checkbox__input', '.catalog-sidebar-filter__item .custom-checkbox__label-for', function () {
        let scroll = $(window).scrollTop();
        trigger = $(this).closest('.custom-checkbox');
        coordsTrigger = trigger.offset();
        wTrigger = trigger.outerWidth();
        hTrigger = trigger.outerHeight();

        $('.catalog-sidebar-apply-filter').remove();
        $('body').append(html);
        $('.catalog-sidebar-apply-filter').css({
           'top': parseInt(coordsTrigger.top + (hTrigger * 0.5)) - scroll + 'px',
           'left': parseInt(coordsTrigger.left + (wTrigger - 2)) + 'px',
        });
        setTimeout(function () {
            $('.catalog-sidebar-apply-filter').remove();
        }, 5000);

    });

    $(window).on('scroll', function () {
        $('.catalog-sidebar-apply-filter').remove();
    });
};

// Initialize check all group
application.prototype.initCheckall = function () {
    if ($('.checkall-for').length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $('.checkall-for').each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop('checked', false);
                    } else if(checkallForState === true) {
                        checkallFor.prop('checked', true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');

                    if(allChecked) checkallFor.removeClass('custom-checkbox__input--checkline');
                }
            });
        }

        function initOnclickCheckallFor() {
            $('.checkall-for').on('click', function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');

                if(checkallFor.is(':checked')) {
                    checkallFor.prop('checked', true);
                    checkallFor.removeClass('custom-checkbox__input--checkline');
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);
                } else if(!checkallFor.is(':checked')) {
                    checkallFor.prop('checked', false);
                    $(".checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);
                }
            });
        }

        function initOnclickCheckallGroup() {
            $('.checkall-group').on('click', function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data('checkall-group');

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === 'notChecked');

                    if(allChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass('custom-checkbox__input--checkline');
                    } else if(allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', false);
                    } else if(!allChecked && !allNotChecked) {
                        $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);

                        if(!$(".checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass('custom-checkbox__input--checkline')) {
                            $(".checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass('custom-checkbox__input--checkline');
                        }
                    }
                }
            });
        }
    }
};

// Initialize orders map
application.prototype.initOrdersMap = function () {
    if ($('#orderMap').length) {
        ymaps.ready(init);

        let myMap;

        function init () {
            let zoomControl = new ymaps.control.ZoomControl({
                options: {
                    size: 'large',
                    float: 'none',
                    position: {
                        top: 50,
                        right: 10,
                        left: 'auto',
                    },
                }
            });

            // Параметры карты можно задать в конструкторе.
            myMap = new ymaps.Map(
                // ID DOM-элемента, в который будет добавлена карта.
                'orderMap',
                // Параметры карты.
                {
                    // Географические координаты центра отображаемой карты.
                    center: [55.798186, 37.489652],
                    // Масштаб.
                    zoom: 15,
                    controls: ['fullscreenControl'],
                }, {
                    // Поиск по организациям.
                    searchControlProvider: 'yandex#search'
                }
            );
            myMap.controls.add(zoomControl);
        }
    }
};

// Initialize contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts-map').length) {
        ymaps.ready(init);

        let myMap;
        let mapItem = $('.contacts-map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let zoomControl = new ymaps.control.ZoomControl({
                    options: {
                        size: 'large',
                        float: 'none',
                        position: {
                            top: 50,
                            right: 10,
                            left: 'auto',
                        },
                    }
                });

                // Параметры карты можно задать в конструкторе.
                myMap = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [55.798186, 37.489652],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );
                myMap.controls.add(zoomControl);
            });
        }
    }
};

// Initialize range slider ".order-step-bonus-debit-range"
application.prototype.initOrderBonusDebit = function () {
    if ($('.order-step-bonus-debit-range').length) {
        let slider = $('#debitRange')[0];
        let minVal = $('#debitRangeValueMin');
        let maxVal = $('#debitRangeValueMax');
        let maxValData = parseInt(maxVal.text());
        let inputVal = $('#debitInputValue');
        let minValCurrent;

        noUiSlider.create(slider, {
            start: 0,
            step: 1,
            connect: 'lower',
            range: {
                'min': 0,
                'max': maxValData,
            }
        });

        slider.noUiSlider.on('update', function () {
            minValCurrent = parseInt(slider.noUiSlider.get());
            minVal.text(minValCurrent);
            inputVal.val(minValCurrent)
        });

        inputVal.on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
                slider.noUiSlider.set(0);
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
                slider.noUiSlider.set($(this).val());
            }
        });
    }
};

// Initialize adding organization data
application.prototype.initAddingOrgData = function () {
    if ($('[data-org-trigger]').length) {
        let trigger = $('[data-org-trigger]');

        let kppOrg = `<div class="titled-input titled-input-label" data-org-kpp>
                            <div class="input-title">КПП организации</div>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="КПП организации"
                                        autocomplete="off"
                                >
                            </div>
                        </div>`;
        let titleAddressOrg = `<div class="order-step-row" data-org-title>
                            <div class="titled-input titled-input-label">
                                <div class="input-title">Название организации</div>
                                <div class="input-wrapper">
                                    <input
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Название организации"
                                            autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="order-step-row" data-org-legal-address>
                            <div class="titled-input titled-input-label">
                                <div class="input-title">Юридический адрес</div>
                                <div class="input-wrapper">
                                    <input
                                            class="input-reset input"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Юридический адрес"
                                            autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>`;

        trigger.on('input', function () {
            trigger.each(function (i) {
                if ($(this).val() === '' || $(this).val() === null) {
                    $(this).removeClass('has-data');
                    $(this).closest('.order-step__data').find('[data-org-kpp]').remove();
                    $(this).closest('.order-step__data').find('[data-org-title]').remove();
                    $(this).closest('.order-step__data').find('[data-org-legal-address]').remove();
                } else if ($(this).val() !== '' && $(this).val() !== null) {
                    $(this).addClass('has-data');

                    if (!$(this).closest('.order-step__data').find('[data-org-kpp]').length &&
                        !$(this).closest('.order-step__data').find('[data-org-title]').length &&
                        !$(this).closest('.order-step__data').find('[data-org-legal-address]').length)
                    {
                        $(this).closest('[data-org-container]').append(kppOrg);
                        $(this).closest('[data-org-container]').after(titleAddressOrg);
                    }
                }
            });
        });
    }
};

// Initialize open promocode on click
application.prototype.initOpenPromocode = function () {
    if ($('[data-open-promocode]').length) {
        let trigger = $('[data-open-promocode]');

        trigger.on('click', function () {
            if (!$(this).closest('.modal-order-promocode__list').hasClass('has-active')) {
                $(this).addClass('selected');
                $(this).closest('.modal-order-promocode__list').addClass('has-active');
                $(this).closest('.modal-order-promocode__list').find('.modal-order-promocode__item').removeClass('active');
                $(this).closest('.modal-order-promocode__item').addClass('active');
            }
        });
    }
};

// Initialize accordion
application.prototype.initAccordion = function () {
    if ($(".accordion").length) {
        initAccordionResponsive();
        $(window).on("resize", initAccordionResponsive, reloadAccordionResponsive);

        function reloadAccordionResponsive() {
            setTimeout(function () {
                location.reload();
            }, 300);
        }
        function initAccordionResponsive() {
            $(".accordion__collapse").hide();

            $(".js-accordion-btn").on("click", function () {
                if (!$(this).hasClass("open")) {
                    $(this).addClass("open");
                    $(this).closest(".accordion__item").addClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").removeClass("collapsed");
                    $(this).closest(".accordion__item").find(".accordion__collapse").slideDown(160);
                } else if ($(this).hasClass("open")) {
                    $(this).removeClass("open");
                    $(this).closest(".accordion__item").removeClass("active");
                    $(this).closest(".accordion__item").find(".accordion__collapse").slideUp(160);
                    setTimeout(function () {
                        $(this).closest(".accordion__item").find(".accordion__collapse").addClass("collapsed");
                    }, 160);
                }
            });
        }
    }
};