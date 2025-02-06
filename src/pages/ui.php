<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui page</title>

    <link rel="preload" href="fonts/Inter-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendors.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

	<?/* Подключение библиотек (отдельно) */?>
    <script defer src="js/jquery.js"></script>    <!-- jquery -->
    <script defer src="js/jquery.maskedinput.js"></script>    <!-- maskedinput -->
    <script defer src="js/jquery.validate.js"></script>    <!-- validate -->
    <script defer src="js/messages_ru.js"></script>    <!-- validate -->
    <script defer src="js/popper.js"></script>    <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>    <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>    <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>    <!-- fancybox -->
    <script defer src="js/select2.js"></script>    <!-- select2 -->
    <script defer src="js/readmore.js"></script>    <!-- readmore -->
    <script defer src="js/flatpickr.min.js"></script>    <!-- flatpickr -->
    <script defer src="js/ru.js"></script>    <!-- flatpickr -->

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>

    <style>
        body {
            margin: 0;
            padding: 16px;
            overflow-x: hidden;
            background: #F5F5F5;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 16px;
        }
        .container-ui {
            display:flex;
            flex-wrap: wrap;
            gap: 24px;
        }
        .col-ui {
            flex: 1;
            display:flex;
            flex-direction: column;
            gap: 12px;
        }
        .row-ui {
            display:flex;
            align-items:center;
            gap: 16px;
        }
        .bg-dark {
            background-color: #b8c1f0;
        }
        .text-center {
            text-align: center;
        }
        .color-block {
            display: inline-block;
            width: 150px;
            height: 30px;
        }
        .tooltip-ui-set {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            padding: 12px;
        }
        .tooltip-ui-set:not(:last-child) {
            margin-bottom: 20px;
        }
        .tooltip-ui-iconset {
            min-width: 320px;
            border: 1px solid var(--gray3-color);
            border-radius: 8px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;
        }
        .tooltip-ui-iconset .tooltip .icon {
            fill: var(--text-primary);
        }
        .tooltip-ui-iconset .tooltip:hover .icon {
            fill: var(--red-color);
        }
    </style>
</head>
<body>
    <h3 class="text-center">Variables css</h3>
    <h4>Fonts</h4>
    <div style="font-family: var(--font-family-inter);">Inter &#8212; var(--font-family-inter)</div>

    <br>
    <h4>Colors</h4>
    <div class="container-ui">
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--black-color);"
                ></span>&nbsp;&#8212; var(--black-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--white-color);"
                ></span>&nbsp;&#8212; var(--white-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray1-color);"
                ></span>&nbsp;&#8212; var(--gray1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray2-color);"
                ></span>&nbsp;&#8212; var(--gray2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray3-color);"
                ></span>&nbsp;&#8212; var(--gray3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray4-color);"
                ></span>&nbsp;&#8212; var(--gray4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray5-color);"
                ></span>&nbsp;&#8212; var(--gray5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--gray6-color);"
                ></span>&nbsp;&#8212; var(--gray6-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--yellow-color);"
                ></span>&nbsp;&#8212; var(--yellow-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--yellow2-color);"
                ></span>&nbsp;&#8212; var(--yellow2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--red-color);"
                ></span>&nbsp;&#8212; var(--red-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--orange-color);"
                ></span>&nbsp;&#8212; var(--orange-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--green-color);"
                ></span>&nbsp;&#8212; var(--green-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-primary);"
                ></span>&nbsp;&#8212; var(--text-primary)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-secondary);"
                ></span>&nbsp;&#8212; var(--text-secondary)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text-caption);"
                ></span>&nbsp;&#8212; var(--text-caption)
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Отступы в проекте</h3>
    <div class="container-ui">
        <pre>
        @media (min-width: 992px) {
            .gap-xs {
                margin-bottom: 12px !important;
            }
            .gap-sm {
                margin-bottom: 16px !important;
            }
            .gap-md {
                margin-bottom: 24px !important;
            }
            .gap-lg {
                margin-bottom: 32px !important;
            }
            .gap-lg-plus {
                margin-bottom: 48px !important;
            }
            .gap-xl {
                margin-bottom: 64px !important;
            }
        }
        @media (max-width: 991.98px) {
            .gap-xs,
            .gap-sm {
                margin-bottom: 12px !important;
            }
            .gap-md,
            .gap-lg,
            .gap-lg-plus,
            .gap-xl {
                margin-bottom: 16px !important;
            }
        }
        </pre>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Icons</h3>
    <div class="container-ui">
        <h4>
            .icon-fill - строго запрещает свойство "stroke"
            <br>
            .icon-stroke - строго запрещает свойство "fill"
        </h4>
        <div>
            <h4 class="text-center">sprite.svg#id_из_тултип</h4>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#search"
                      data-tippy-theme="light"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#search"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#shopping-cart-2"
                      data-tippy-placement="right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#shopping-cart-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#inbox-filled"
                      data-tippy-placement="bottom"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#inbox-filled"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#inbox-in"
                      data-tippy-placement="left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#inbox-in"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#barchart"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#barchart"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#burger"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#burger"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#star"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#star"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#question"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#question"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#new-release"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#new-release"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#history"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#history"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#filter"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#filter"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#log-out"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#log-out"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#share"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#share"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#truck"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#truck"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pos"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pos"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#lightning"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#lightning"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmark"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmark"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmark-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmark-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bookmarks"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bookmarks"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pin"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pin"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#user-square"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#user-square"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#trash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#trash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#box-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#box-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#briefcase"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#briefcase"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#timer"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#printer"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#printer"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#call-calling"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#call-calling"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#bulb"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#bulb"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#copy"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#copy"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#procent-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#procent-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sliders-horiz"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sliders-horiz"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#image-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#image-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sort-ascending"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sort-ascending"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#sort-decending"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#sort-decending"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#comment-text"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#comment-text"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#info"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#info"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#alert-triangle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#alert-triangle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#alert-octagon"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#alert-octagon"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-left"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#arrow-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#arrow-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-up"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-up"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-down"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-down"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-left"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-left"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#chevron-right"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#chevron-right"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#minus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#minus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#cross"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#cross"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#check-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#check-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#excel"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#excel"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#word"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#word"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#pdf"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#pdf"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#image"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#image"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#file-download"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#file-download"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#gift"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#gift"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#percentage-circle"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#percentage-circle"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#catalog-cable"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-cable"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-cable-systems"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-cable-systems"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-connectors"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-connectors"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-electric-motors"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-electric-motors"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-grounding"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-grounding"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-lighting"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-lighting"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-low-voltage"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-low-voltage"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-miscellaneous"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-miscellaneous"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-power-devices"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-power-devices"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-shields-cabinets"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-smart-house"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-smart-house"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-tools"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-tools"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-ventilation"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-ventilation"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-wiring"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-wiring"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#catalog-wiring-products"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#catalog-wiring-products"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#menu-box-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-box-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-comment-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-comment-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-comment-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-comment-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-file-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-file-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-layers"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-layers"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-lock-2-opened"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-lock-2-opened"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-refresh-ccw"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-refresh-ccw"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-repeat"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-repeat"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-shopping-cart-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-shopping-cart-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-star-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-star-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-truck-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-truck-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#menu-color-box-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-box-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-checkbox-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-checkbox-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-comment-plus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-comment-plus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-comment-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-comment-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-file-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-file-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-layers"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-layers"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-lock-2-opened"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-lock-2-opened"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-refresh-ccw"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-refresh-ccw"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-repeat"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-repeat"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-shopping-cart-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-shopping-cart-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-star-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-star-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-truck-2"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-truck-2"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-credit-card"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-credit-card"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-newspaper"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-newspaper"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#menu-color-wallet"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#menu-color-wallet"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#fill-bookmark-check"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-check-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-check-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-cross-rec"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-cross-rec"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-eye"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-eye"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-eye-slash"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-eye-slash"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-grid"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-grid"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-list"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-list"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-more-horiz"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-more-horiz"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-more-vert"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-more-vert"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-star"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-star"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-table"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-table"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#fill-bonus"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#fill-bonus"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
            <div class="tooltip-ui-set tooltip-ui-iconset">
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ok"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ok"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-tg"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-tg"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-vk"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-vk"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-ya"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-ya"></use>
                    </svg>
                    <!--end ui content-->
                </span>
                <span class="tooltip"
                      data-tippy-content="#soc-logo-yt"
                >
                    <!--start ui content-->
                    <svg class="icon">
                        <use href="img/sprite.svg#soc-logo-yt"></use>
                    </svg>
                    <!--end ui content-->
                </span>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Buttons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">default</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">primary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">secondary</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-secondary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-secondary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">light</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">mini</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-mini btn-primary active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-mini btn-primary active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">light border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-light active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-light active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">dark border</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-b-dark active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-b-dark active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">active lightgray</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-active-lightgray active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-active-lightgray active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 320px">btn-link</h4>
                <div class="container-ui">
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                    <div class="col-ui" style="max-width: 148px">
                        <div class="tooltip-ui-set">
                            <div class="tooltip"
                                 data-tippy-content="class='btn-reset btn btn-link active'"
                            >
                                <!--start ui content-->
                                <button class="btn-reset btn btn-link active">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="btn__text">Кнопка</span>
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                </button>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Links</h3>
    <div class="container-ui bg-dark">
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">default</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-light</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-light">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-dark</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dark">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-ui">
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-red</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-gray</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-gray">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="text-center flex-1" style="max-width: 148px">link-dashed</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div>
                            <!--start ui content-->
                            <a class="link-dashed link-red">Ссылка</a>
                            <!--end ui content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons (для примера состояний стоит type=checkbox)</h3>
    <div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox">
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input disabled" type="checkbox" disabled>
                        </div>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="checked"
                    >
                        <!--start ui content-->
                        <div class="custom-radio">
                            <input class="custom-radio__input" type="checkbox" checked>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 320px">checkbox label</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-1" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-1" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-2" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-2" class="custom-checkbox__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-1" class="custom-radio__input" type="checkbox">
                            <label for="radio-ui-1" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-radio">
                            <input id="radio-ui-2" class="custom-radio__input disabled" type="checkbox" disabled>
                            <label for="radio-ui-2" class="custom-radio__label-for">Label</label>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h4 class="text-center flex-1" style="max-width: 320px">checkbox label + brand</h4>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-3" class="custom-checkbox__input" type="checkbox" checked>
                            <label for="checkbox-ui-3" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-4" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-4" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <svg class="icon">
                                    <use href="img/sprite.svg#burger"></use>
                                </svg>
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-ui">
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="default"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input" type="checkbox">
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                    loading="lazy"
                                    src="img/test.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
            <div class="col-ui" style="max-width: 148px">
                <div class="tooltip-ui-set">
                    <div class="tooltip"
                         data-tippy-content="disabled"
                    >
                        <!--start ui content-->
                        <span class="custom-checkbox">
                            <input id="checkbox-ui-5" class="custom-checkbox__input disabled" type="checkbox" disabled>
                            <label for="checkbox-ui-5" class="custom-checkbox__label-for">Label</label>
                            <span class="custom-checkbox__brand">
                                <img
                                        loading="lazy"
                                        src="img/test.png"
                                        class="image"
                                        width=""
                                        height=""
                                        alt="Изображение блока"
                                >
                            </span>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <h3 class="text-center">Check all</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; gap: 15px;">
                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                type="checkbox"
                                data-checkall-for="checkallTest"
                        >
                        all
                    </div>

                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tabs</h3>
    <div class="container-ui">
        <div class="col-ui">
            class="tabs"
            <div class="row-ui ">
                <div>
                    <!--start ui content-->
                    <div class="tabs">
                        <div class="tabs-container" data-tab="tab-ui-1">
                            <div class="tabs-wrapper">
                                <div class="tabs-item">
                                    <button class="btn-reset tabs-trigger selected" type="button" data-target="0">
                                        <span class="tabs-trigger__text">Tab 1</span>
                                    </button>
                                </div>
                                <div class="tabs-item">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="1">
                                        <span class="tabs-trigger__text">Tab 2</span>
                                    </a>
                                </div>
                                <div class="tabs-item">
                                    <button class="btn-reset tabs-trigger" type="button" data-target="2">
                                        <span class="tabs-trigger__text">Tab 3</span>
                                    </button>
                                </div>
                                <div class="tabs-item">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="3">
                                        <span class="tabs-trigger__text">Tab 4</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?/* ".tabs-content" должен располагаться за пределами ".tabs-wrapper" */?>
                    <div class="tabs-content" data-tab-content="tab-ui-1">
                        <div class="tabs-content__panel active" data-id="0">
                            Tabs 1 content
                        </div>
                        <div class="tabs-content__panel" data-id="1">
                            Tabs 2 content
                        </div>
                        <div class="tabs-content__panel" data-id="2">
                            Tabs 3 content
                        </div>
                        <div class="tabs-content__panel" data-id="3">
                            Tabs 4 content
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="tabs slider"
            <div class="row-ui ">
                <div>
                    <!--start ui content-->
                    <div class="tabs">
                        <div class="tabs-container swiper" data-tab="tab-ui-2">
                            <div class="tabs-wrapper swiper-wrapper">
                                <div class="tabs-item swiper-slide">
                                    <button class="btn-reset tabs-trigger selected" type="button" data-target="0">
                                        <span class="tabs-trigger__text">Tab 1</span>
                                    </button>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="1">
                                        <span class="tabs-trigger__text">Tab 2</span>
                                    </a>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <button class="btn-reset tabs-trigger" type="button" data-target="2">
                                        <span class="tabs-trigger__text">Tab 3</span>
                                    </button>
                                </div>
                                <div class="tabs-item swiper-slide">
                                    <a class="btn-reset tabs-trigger" href="javascript:;" data-target="3">
                                        <span class="tabs-trigger__text">Tab 4</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?/* ".tabs-content" должен располагаться за пределами ".tabs-wrapper" */?>
                    <div class="tabs-content" data-tab-content="tab-ui-2">
                        <div class="tabs-content__panel active" data-id="0">
                            Tabs 1 content
                        </div>
                        <div class="tabs-content__panel" data-id="1">
                            Tabs 2 content
                        </div>
                        <div class="tabs-content__panel" data-id="2">
                            Tabs 3 content
                        </div>
                        <div class="tabs-content__panel" data-id="3">
                            Tabs 4 content
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Sale label</h3>
    <div class="container-ui">
        <div class="col-ui" style="max-width: 148px">
            <div class="tooltip-ui-set">
                <div class="tooltip"
                     data-tippy-content='class="sale-label sale-label-yellow"'
                >
                    <!--start ui content-->
                    <span class="sale-label sale-label-yellow">Распродажа</span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-ui">
        <div class="col-ui" style="max-width: 148px">
            <div class="tooltip-ui-set">
                <div class="tooltip"
                     data-tippy-content='class="sale-label sale-label-red"'
                >
                    <!--start ui content-->
                    <span class="sale-label sale-label-red">Распродажа</span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-ui">
        <div class="col-ui" style="max-width: 148px">
            <div class="tooltip-ui-set">
                <div class="tooltip"
                     data-tippy-content='class="sale-label sale-label-green"'
                >
                    <!--start ui content-->
                    <span class="sale-label sale-label-green">Распродажа</span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Select (select2)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <form id="" class="form authreg-form" method="POST" action="">
                        <select
                                id=""
                                class="input-reset form__input form__input--select2 js-select2"
                                name=""
                                required
                        >
                            <option value="0">Селект 1</option>
                            <option value="1">Селект 2</option>
                            <option value="2">Селект 3</option>
                        </select>
                    </form>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn-primary" data-fancybox data-src="#modal-ui-compare">
                        <span class="btn__text">Селект в мадальном окне</span>
                    </button>
                    <!--end ui content-->
                </div>
            </div>

            <div id="modal-ui-compare" class="modal modal-big">
                <div class="modal__content">
                    <div class="modal__content-item">
                        <div class="modal__header">
                            <div class="modal__title h4">Селект в мадальном окне</div>
                        </div>

                        <form id="" class="form" method="" action="javascript:;">
                            <div class="form__field-area">
                                <div class="form__field">
                                    <select
                                            id=""
                                            class="input-reset form__input form__input--select2 js-select2"
                                            name=""
                                            required
                                    >
                                        <option value="0">Селект 1</option>
                                        <option value="1">Селект 2</option>
                                        <option value="2">Селект 3</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Modal</h3>
    <div class="container-ui">
        <div class="col-ui">
            <a href="https://fancyapps.com/" target="_blank">Using plugin fancybox</a>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn-secondary" type="button" data-fancybox data-src="#modal-test111">
                        <span class="btn__text">Вызов модалльного окна fancybox</span>
                    </button>

                    <div id="modal-test111" class="modal" style="padding: 30px;">
                        <div class="modal__content">
                            <div class="modal__title h4">Вызываемое мадальное окно</div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tooltip</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    tooltip -&nbsp;
                    <!--start ui content-->
                    <span class="tooltip"
                          data-tippy-content="<div class='tooltip-content'>
                                                    <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                    <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                        <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                    </p>
                                                </div>"
                    >
                        <svg class="icon">
                            <use href="img/sprite.svg#info"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Обёртка для input flatpickr</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; max-width: 500px;">
                    <!--start ui content-->
                    <div class="form__field form__field--flatpickr">
                        <input
                                id=""
                                class="input-reset form__input flatpickr"
                                type="text"
                                name=""
                                placeholder="дата"
                        >
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Star rating (input) [star-rating = 16px, star-rating--min = 14px, star-rating--max = 28px]</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating star-rating--max">
                        <form class="star-rating__container" action="" method="post">
                            <input
                                    id="starrateTestOne"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui1"
                                    value="5"
                            >
                            <label for="starrateTestOne">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestTwo"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui1"
                                    value="4"
                            >
                            <label for="starrateTestTwo">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestThree"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui1"
                                    value="3"
                            >
                            <label for="starrateTestThree">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFour"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui1"
                                    value="2"
                            >
                            <label for="starrateTestFour">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFive"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui1"
                                    value="1"
                            >
                            <label for="starrateTestFive">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>
                        </form>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (input) with grade caption</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating star-rating-label star-rating--max star-rating--stroke">
                        <form class="star-rating__container" action="" method="post">
                            <input
                                    id="starrateTestOne"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui2"
                                    value="5"
                            >
                            <label for="starrateTestOne" data-star-grade="&nbsp;– отлично">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestTwo"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui2"
                                    value="4"
                            >
                            <label for="starrateTestTwo" data-star-grade="&nbsp;– хорошо">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestThree"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui2"
                                    value="3"
                            >
                            <label for="starrateTestThree" data-star-grade="&nbsp;– удовлетворительно">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFour"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui2"
                                    value="2"
                            >
                            <label for="starrateTestFour" data-star-grade="&nbsp;– плохо">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFive"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrateui2"
                                    value="1"
                            >
                            <label for="starrateTestFive" data-star-grade="&nbsp;– ужасно">
                                <svg class="icon">
                                    <use href="img/sprite.svg#fill-star"></use>
                                </svg>
                            </label>
                        </form>
                        <span class="star-rating-grade"></span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 5stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper" data-star-rate-static>
                        <span class="star-rating-value" data-value="4.8">4.8</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--mobile-frame" data-star-rate-static>
                        <span class="star-rating-value" data-value="2.2">2.2</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 1stars/ mob - 1stars) - frame</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--frame">
                        <span class="star-rating-value" data-value="3.5">3.5</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 1stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--noframe">
                        <span class="star-rating-value" data-value="3.5">3.5</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#fill-star"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tags</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 300px; width: 300px;">
                    <!--start ui content-->
                    <div class="tag-bar-wrapper">
                        <div class="tag-bar swiper" data-tag-bar-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#burger"></use>
                                        </svg>
                                        <span class="btn__text">Кнопка</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#burger"></use>
                                        </svg>
                                        <span class="btn__text">Кнопка</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#burger"></use>
                                        </svg>
                                        <span class="btn__text">Кнопка</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#burger"></use>
                                        </svg>
                                        <span class="btn__text">Кнопка</span>
                                    </label>
                                </div>
                                <div class="swiper-slide">
                                    <label class="btn btn-mini btn-b-light">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="EXTRA[TAGS][]"
                                                value=""
                                        >
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#burger"></use>
                                        </svg>
                                        <span class="btn__text">Кнопка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Counter with button "buy"</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 300px; width: 300px;">
                    <!--start ui content-->
                    <div class="cart-buy">
                        <div class="cart-quantity disabled">
                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                <svg class="icon icon-sm btn__icon">
                                    <use href="img/sprite.svg#minus"></use>
                                </svg>
                                <svg class="icon icon-sm btn__icon icon-selected">
                                    <use href="img/sprite.svg#trash"></use>
                                </svg>
                            </button>
                            <input
                                    id=""
                                    class="input-reset cart-quantity-input"
                                    type="text"
                                    placeholder="999"
                                    value="1"
                                    max="999"
                                    data-mult="1"
                            >
                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                <svg class="icon icon-sm btn__icon">
                                    <use href="img/sprite.svg#plus"></use>
                                </svg>
                            </button>
                        </div>
                        <button class="btn-reset btn btn-primary cart-in" type="button">
                            <span class="btn__text">В КОРЗИНУ</span>
                        </button>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Spoiler for text</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="h5">Default values: height = 200px; data-spoiler-more = 'Показать все'; data-spoiler-less = 'Свернуть';</div>
            </div>
            <div class="row-ui ">
                <div class="flex-v-center">
                    <div>
                        <!--start ui content-->
                        <div class="spoiler-wrapper">
                            <div
                                    class="spoiler"
                                    data-spoiler
                                    data-spoiler-more="Все характеристики"
                                    data-spoiler-less="Скрыть"
                            >
                                <div class="spoiler-content">
                                    <table class="table-descr">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span>Артикул</span>
                                            </td>
                                            <td>
                                                <span>ST9431B</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Тип товара</span>
                                            </td>
                                            <td>
                                                <span>Удлинитель</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Производитель</span>
                                            </td>
                                            <td>
                                                <span class="red-color">Schneider Electric</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Серия</span>
                                            </td>
                                            <td>
                                                <span class="red-color">Электромонтажная система OPTILINE 45</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Цвет</span>
                                            </td>
                                            <td>
                                                <span class="red-color">Чёрный</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Степень защиты</span>
                                            </td>
                                            <td>
                                                <span class="red-color">IP20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Материал корпуса</span>
                                            </td>
                                            <td>
                                                <span>Пластик</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Поперечное сечение жилы</span>
                                            </td>
                                            <td>
                                                <span>1.5 мм²</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Количество штепсельных розеток с заземляющим контактом:</span>
                                            </td>
                                            <td>
                                                <span>4</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Количество жил</span>
                                            </td>
                                            <td>
                                                <span>3</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Длина кабеля, м</span>
                                            </td>
                                            <td>
                                                <span>15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>С термозащитой</span>
                                            </td>
                                            <td>
                                                <span>Да</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Заземление</span>
                                            </td>
                                            <td>
                                                <span>Да</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>test</span>
                                            </td>
                                            <td>
                                                <span>test</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Card-product</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div style="margin-bottom: 20px;">
                <h4 class="text-center flex-1" style="max-width: 200px">default</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div class="row-ui ">
                            <div class="flex-v-center" style="gap: 20px;">
                                <!--start ui content-->
                                <div class="card-product card-product-default" data-card-product>
                                    <div class="card-product-view">
                                        <div class="mini-slider">
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-2.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-3.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-4.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <ul class="list-reset mini-slider__dots"></ul>
                                        </div>
                                        <div class="card-product-sale-label">
                                            <span class="sale-label sale-label-red">20%</span>
                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                            <span class="sale-label sale-label-green">Хит</span>
                                        </div>
                                    </div>
                                    <div class="card-product-descr">
                                        <div class="card-product-descr__top">
                                            <div class="card-product-descr__info">
                                                <span class="product-code"><span>46- 312792P13</span></span>
                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                    <span class="star-rating">
                                                        <span class="star-rating__container">
                                                            <label>
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#fill-star"></use>
                                                                </svg>
                                                            </label>
                                                        </span>
                                                    </span>
                                                    <span class="star-rating-value" data-value="5.0">5.0</span>
                                                </span>
                                            </div>
                                            <div class="card-product-descr__availability product-availability in-stock">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <div class="card-product-descr__title">
                                                <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                            </div>
                                            <div class="card-product-descr__text">
                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                <span>
                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                        </svg>
                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="card-product-descr__bottom">
                                            <div class="card-product-descr__price">
                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                <div class="card-product-descr__price-display">
                                                    <div class="card-product-descr__price-discount">
                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                    </div>
                                                    <div class="card-product-descr__price-current">1 666 173,10 ₽</div>
                                                </div>
                                                <div class="card-product-descr__price-bonus">
                                                    <span>+ 346,99</span>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn btn-primary cart-in switch-content" type="button">
                                                    <span class="btn__text text-default">В КОРЗИНУ</span>
                                                    <span class="btn__text text-selected">в корзине</span>
                                                </button>
                                                <div class="card-product-act">
                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                            <svg class="icon btn__icon icon-default">
                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">В избранное</span>
                                                            <svg class="icon btn__icon icon-selected">
                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                            </svg>
                                                            <span class="btn__text text-selected">В избранном</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#barchart"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">Сравнить</span>
                                                            <span class="btn__text text-selected">В сравнении</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                            </svg>
                                                            <span class="btn__text">В смету</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <h4 class="text-center flex-1" style="max-width: 200px">list</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div class="row-ui ">
                            <div class="flex-v-center" style="gap: 20px;">
                                <!--start ui content-->
                                <div class="card-product card-product-list" data-card-product>
                                    <div class="card-product-view">
                                        <div class="mini-slider">
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-2.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-3.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-4.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <ul class="list-reset mini-slider__dots"></ul>
                                        </div>
                                        <div class="card-product-sale-label">
                                            <span class="sale-label sale-label-red">20%</span>
                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                            <span class="sale-label sale-label-green">Хит</span>
                                        </div>
                                    </div>
                                    <div class="card-product-descr">
                                        <div class="card-product-descr__top">
                                            <div class="card-product-descr__info">
                                                <span class="product-code"><span>46- 312792P13</span></span>
                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                    <span class="star-rating">
                                                        <span class="star-rating__container">
                                                            <label>
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#fill-star"></use>
                                                                </svg>
                                                            </label>
                                                        </span>
                                                    </span>
                                                    <span class="star-rating-value" data-value="5.0">5.0</span>
                                                </span>
                                            </div>
                                            <div class="card-product-descr__availability product-availability on-order">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#timer"></use>
                                                </svg>
                                                <span>Под заказ</span>
                                            </div>
                                            <div class="card-product-descr__title">
                                                <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                            </div>
                                            <div class="card-product-descr__text">
                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                <span>
                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                        </svg>
                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="card-product-descr__bottom">
                                            <div class="card-product-descr__price">
                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                <div class="card-product-descr__price-display">
                                                    <div class="card-product-descr__price-discount">
                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                    </div>
                                                    <div class="card-product-descr__price-current">1 666 173,10 ₽</div>
                                                </div>
                                                <div class="card-product-descr__price-bonus">
                                                    <span>+ 346,99</span>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn btn-primary cart-in switch-content" type="button">
                                                    <span class="btn__text text-default">В КОРЗИНУ</span>
                                                    <span class="btn__text text-selected">в корзине</span>
                                                </button>
                                                <div class="card-product-act">
                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                            <svg class="icon btn__icon icon-default">
                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">В избранное</span>
                                                            <svg class="icon btn__icon icon-selected">
                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                            </svg>
                                                            <span class="btn__text text-selected">В избранном</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#barchart"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">Сравнить</span>
                                                            <span class="btn__text text-selected">В сравнении</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                            </svg>
                                                            <span class="btn__text">В смету</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 20px;">
                <h4 class="text-center flex-1" style="max-width: 200px">table</h4>
                <div class="container-ui">
                    <div class="col-ui">
                        <div class="row-ui ">
                            <div class="flex-v-center" style="gap: 20px;">
                                <!--start ui content-->
                                <div class="card-product card-product-table" data-card-product>
                                    <div class="card-product-view">
                                        <div class="mini-slider">
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-2.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 1;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-3.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <div class="mini-slider__slide">
                                                <picture>
                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/product-4.png"
                                                            class="mini-slider__img"
                                                            width="208"
                                                            height="208"
                                                            style="opacity: 0;"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                            <ul class="list-reset mini-slider__dots"></ul>
                                        </div>
                                        <div class="card-product-sale-label">
                                            <span class="sale-label sale-label-red">20%</span>
                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                            <span class="sale-label sale-label-green">Хит</span>
                                        </div>
                                    </div>
                                    <div class="card-product-descr">
                                        <div class="card-product-descr__top">
                                            <div class="card-product-descr__info">
                                                <span class="product-code"><span>46- 312792P13</span></span>
                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                    <span class="star-rating">
                                                        <span class="star-rating__container">
                                                            <label>
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#fill-star"></use>
                                                                </svg>
                                                            </label>
                                                        </span>
                                                    </span>
                                                    <span class="star-rating-value" data-value="5.0">5.0</span>
                                                </span>
                                            </div>
                                            <div class="card-product-descr__availability product-availability out-stock">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#slash"></use>
                                                </svg>
                                                <span>Нет в наличии</span>
                                            </div>
                                            <div class="card-product-descr__title">
                                                <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                            </div>
                                            <div class="card-product-descr__text">
                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                <span>
                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                        </svg>
                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="card-product-descr__bottom">
                                            <div class="card-product-descr__price">
                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                <div class="card-product-descr__price-display">
                                                    <div class="card-product-descr__price-discount">
                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                    </div>
                                                    <div class="card-product-descr__price-current">1 666 173,10 ₽</div>
                                                </div>
                                                <div class="card-product-descr__price-bonus">
                                                    <span>+ 346,99</span>
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#minus"></use>
                                                        </svg>
                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                    </button>
                                                    <input
                                                            id=""
                                                            class="input-reset cart-quantity-input"
                                                            type="text"
                                                            placeholder="999"
                                                            value="1"
                                                            max="999"
                                                            data-mult="1"
                                                    >
                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                        <svg class="icon icon-sm btn__icon">
                                                            <use href="img/sprite.svg#plus"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <button class="btn-reset btn btn-primary cart-in switch-content" type="button">
                                                    <span class="btn__text text-default">В КОРЗИНУ</span>
                                                    <span class="btn__text text-selected">в корзине</span>
                                                </button>
                                                <div class="card-product-act">
                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                            <svg class="icon btn__icon icon-default">
                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">В избранное</span>
                                                            <svg class="icon btn__icon icon-selected">
                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                            </svg>
                                                            <span class="btn__text text-selected">В избранном</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#barchart"></use>
                                                            </svg>
                                                            <span class="btn__text text-default">Сравнить</span>
                                                            <span class="btn__text text-selected">В сравнении</span>
                                                        </button>
                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                            </svg>
                                                            <span class="btn__text">В смету</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end ui content-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Basic slider with overflow nav buttons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="margin: 0 -10px; width: 100vw;">
                    <!--start ui content-->
                    <div class="container">

                        <div class="gap-xl product-card-mobile-section">
                        <div class="product-card-mobile-section-container">
                            <div class="gap-lg">
                                <div class="h2">Вам может понадобиться</div>
                            </div>

                            <div class="catalog-extra-slider out-container-x">
                                <div class="gap-lg">
                                    <div class="tag-bar swiper" data-tag-bar-slider>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <span class="btn__text">Все товары</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-wiring-products"></use>
                                                    </svg>
                                                    <span class="btn__text">Розетки и выключатели</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-low-voltage"></use>
                                                    </svg>
                                                    <span class="btn__text">Низковольтное оборудование</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                                                    </svg>
                                                    <span class="btn__text">Щиты, шкафы, боксы</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-lighting"></use>
                                                    </svg>
                                                    <span class="btn__text">Светотехника</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-tools"></use>
                                                    </svg>
                                                    <span class="btn__text">Инструменты и монтажные материалы</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-ventilation"></use>
                                                    </svg>
                                                    <span class="btn__text">Системы вентиляции и обогрева</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-grounding"></use>
                                                    </svg>
                                                    <span class="btn__text">Молниезащита и заземление</span>
                                                </label>
                                            </div>
                                            <div class="swiper-slide">
                                                <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                    <input
                                                            class="visually-hidden"
                                                            type="checkbox"
                                                            name="EXTRA[TAGS][]"
                                                            value=""
                                                    >
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#catalog-power-devices"></use>
                                                    </svg>
                                                    <span class="btn__text">Элементы и устройства питания</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="basic-slider-wrap">
                                    <div class="basic-slider card-product-default-wrap swiper" data-basic-slider>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>ZB3327018</span></span>
                                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                        <span class="star-rating">
                                                            <span class="star-rating__container">
                                                                <label>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-star"></use>
                                                                    </svg>
                                                                </label>
                                                            </span>
                                                        </span>
                                                        <span class="star-rating-value" data-value="4.5">4.5</span>
                                                    </span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability in-stock">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                                </svg>
                                                                <span>Товар в наличии</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-4.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>46- 312792P13</span></span>
                                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                        <span class="star-rating">
                                                            <span class="star-rating__container">
                                                                <label>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-star"></use>
                                                                    </svg>
                                                                </label>
                                                            </span>
                                                        </span>
                                                        <span class="star-rating-value" data-value="5.0">5.0</span>
                                                    </span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability on-order">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#timer"></use>
                                                                </svg>
                                                                <span>Под заказ</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-4.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-5.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-5.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>2348958- 87</span></span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability on-order">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#timer"></use>
                                                                </svg>
                                                                <span>Под заказ</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-4.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-5.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-5.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>Z241- 0008</span></span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability in-stock">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                                </svg>
                                                                <span>Товар в наличии</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>ZB3327018</span></span>
                                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                        <span class="star-rating">
                                                            <span class="star-rating__container">
                                                                <label>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-star"></use>
                                                                    </svg>
                                                                </label>
                                                            </span>
                                                        </span>
                                                        <span class="star-rating-value" data-value="4.5">4.5</span>
                                                    </span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability in-stock">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                                </svg>
                                                                <span>Товар в наличии</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>ZB3327018</span></span>
                                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                        <span class="star-rating">
                                                            <span class="star-rating__container">
                                                                <label>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-star"></use>
                                                                    </svg>
                                                                </label>
                                                            </span>
                                                        </span>
                                                        <span class="star-rating-value" data-value="4.5">4.5</span>
                                                    </span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability in-stock">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                                </svg>
                                                                <span>Товар в наличии</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card-product card-product-default" data-card-product>
                                                    <div class="card-product-view">
                                                        <div class="mini-slider">
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-2.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-2.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 1;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-3.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-3.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <div class="mini-slider__slide">
                                                                <picture>
                                                                    <source srcset="img/product-4.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/product-4.png"
                                                                            class="mini-slider__img"
                                                                            width="208"
                                                                            height="208"
                                                                            style="opacity: 0;"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                            <ul class="list-reset mini-slider__dots"></ul>
                                                        </div>
                                                        <div class="card-product-sale-label">
                                                            <span class="sale-label sale-label-red">20%</span>
                                                            <span class="sale-label sale-label-yellow">Распродажа</span>
                                                            <span class="sale-label sale-label-green">Хит</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-product-descr">
                                                        <div class="card-product-descr__top">
                                                            <div class="card-product-descr__info">
                                                                <span class="product-code"><span>46- 312792P13</span></span>
                                                                <span class="star-rating-wrapper star-rating-wrapper--noframe">
                                                        <span class="star-rating">
                                                            <span class="star-rating__container">
                                                                <label>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-star"></use>
                                                                    </svg>
                                                                </label>
                                                            </span>
                                                        </span>
                                                        <span class="star-rating-value" data-value="5.0">5.0</span>
                                                    </span>
                                                            </div>
                                                            <div class="card-product-descr__availability product-availability on-order">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#timer"></use>
                                                                </svg>
                                                                <span>Под заказ</span>
                                                            </div>
                                                            <div class="card-product-descr__title">
                                                                <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                            </div>
                                                            <div class="card-product-descr__text">
                                                                <span>Заземление: Да; Тип товара: Розетка; Бренд: Schneider Electric; Установка: Открытая; Вид розетки: Двойной; Количество гнезд: 2; Номинальное напряжение (В): 220; Номинальный ток: 16;</span>

                                                                <span>
                                                                    <a class="btn-reset btn btn-link" href="javascript:;">
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#sliders-horiz"></use>
                                                                        </svg>
                                                                        <span class="btn__text">Перейти в конфигуратор</span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="card-product-descr__bottom">
                                                            <div class="card-product-descr__price">
                                                                <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                <div class="card-product-descr__price-display">
                                                                    <div class="card-product-descr__price-discount">
                                                                        <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                        <div class="card-product-descr__price-discount-label">10%</div>
                                                                    </div>
                                                                    <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                </div>
                                                                <div class="card-product-descr__price-bonus">
                                                                    <span>+ 346,99</span>
                                                                    <svg class="icon">
                                                                        <use href="img/sprite.svg#fill-bonus"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                <div class="product-card__cart-quantity cart-quantity disabled">
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#minus"></use>
                                                                        </svg>
                                                                        <svg class="icon icon-sm btn__icon icon-selected">
                                                                            <use href="img/sprite.svg#trash"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <input
                                                                            id=""
                                                                            class="input-reset cart-quantity-input"
                                                                            type="text"
                                                                            placeholder="999"
                                                                            value="1"
                                                                            max="999"
                                                                            data-mult="1"
                                                                    >
                                                                    <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                        <svg class="icon icon-sm btn__icon">
                                                                            <use href="img/sprite.svg#plus"></use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                    <span class="btn__text">В КОРЗИНУ</span>
                                                                </button>
                                                                <div class="card-product-act">
                                                                    <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                        <svg class="icon btn__icon">
                                                                            <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="card-product-act__list" data-card-product-act-content>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                            <svg class="icon btn__icon icon-default">
                                                                                <use href="img/sprite.svg#bookmark-plus"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">В избранное</span>
                                                                            <svg class="icon btn__icon icon-selected">
                                                                                <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-selected">В избранном</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#barchart"></use>
                                                                            </svg>
                                                                            <span class="btn__text text-default">Сравнить</span>
                                                                            <span class="btn__text text-selected">В сравнении</span>
                                                                        </button>
                                                                        <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                            <svg class="icon btn__icon">
                                                                                <use href="img/sprite.svg#inbox-in"></use>
                                                                            </svg>
                                                                            <span class="btn__text">В смету</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-navigation">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Basic heading-content-more block</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="margin: 0 -10px; width: 100vw;">
                    <!--start ui content-->
                    <div class="container">
                        <div class="gap-xl product-card-mobile-section">
                            <div class="product-card-mobile-section-container">
                                <div class="basic-hcm">
                                    <div class="basic-hcm__heading">
                                        <div class="h2">Актуальные предложения</div>
                                    </div>

                                    <div class="basic-hcm__content catalog-extra-slider out-container-x">
                                        <div class="gap-lg">
                                            <div class="tag-bar swiper" data-tag-bar-slider>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <span class="btn__text">Все товары</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-wiring-products"></use>
                                                            </svg>
                                                            <span class="btn__text">Розетки и выключатели</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-low-voltage"></use>
                                                            </svg>
                                                            <span class="btn__text">Низковольтное оборудование</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-shields-cabinets"></use>
                                                            </svg>
                                                            <span class="btn__text">Щиты, шкафы, боксы</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-lighting"></use>
                                                            </svg>
                                                            <span class="btn__text">Светотехника</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-tools"></use>
                                                            </svg>
                                                            <span class="btn__text">Инструменты и монтажные материалы</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-ventilation"></use>
                                                            </svg>
                                                            <span class="btn__text">Системы вентиляции и обогрева</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-grounding"></use>
                                                            </svg>
                                                            <span class="btn__text">Молниезащита и заземление</span>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <label class="btn btn-mini btn-b-light tag-bar-slide-item">
                                                            <input
                                                                    class="visually-hidden"
                                                                    type="checkbox"
                                                                    name="EXTRA[TAGS][]"
                                                                    value=""
                                                            >
                                                            <svg class="icon btn__icon">
                                                                <use href="img/sprite.svg#catalog-power-devices"></use>
                                                            </svg>
                                                            <span class="btn__text">Элементы и устройства питания</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="basic-slider-wrap">
                                            <div class="basic-slider card-product-default-wrap swiper border-bottom-mobile border-bottom-gap-md" data-basic-slider>
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>ZB3327018</span></span>
                                                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability in-stock">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                                                        </svg>
                                                                        <span>Товар в наличии</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-4.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-4.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>46- 312792P13</span></span>
                                                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability on-order">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#timer"></use>
                                                                        </svg>
                                                                        <span>Под заказ</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-4.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-4.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-5.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-5.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>2348958- 87</span></span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability on-order">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#timer"></use>
                                                                        </svg>
                                                                        <span>Под заказ</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">SE Unica Extend Бел Удлинитель 3 розетки 2К+З, кабель 1,5м</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-4.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-4.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-5.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-5.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>Z241- 0008</span></span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability in-stock">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                                                        </svg>
                                                                        <span>Товар в наличии</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">SE Unica System+ Антрацит Блок розеточный (2к+з)+usb тип А</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">5 827,99 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>ZB3327018</span></span>
                                                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability in-stock">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                                                        </svg>
                                                                        <span>Товар в наличии</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>ZB3327018</span></span>
                                                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="4.5">4.5</span>
											</span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability in-stock">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#checkbox-rec"></use>
                                                                        </svg>
                                                                        <span>Товар в наличии</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">Haupa Отвёртка двухкомпонентная PH 2</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">1 478,40 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="card-product card-product-default" data-card-product>
                                                            <div class="card-product-view">
                                                                <div class="mini-slider">
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-2.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-2.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 1;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-3.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-3.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <div class="mini-slider__slide">
                                                                        <picture>
                                                                            <source srcset="img/product-4.webp" type="image/webp">
                                                                            <img
                                                                                    loading="lazy"
                                                                                    src="img/product-4.png"
                                                                                    class="mini-slider__img"
                                                                                    width="208"
                                                                                    height="208"
                                                                                    style="opacity: 0;"
                                                                                    alt="Изображение блока"
                                                                            >
                                                                        </picture>
                                                                    </div>
                                                                    <ul class="list-reset mini-slider__dots"></ul>
                                                                </div>
                                                                <div class="card-product-sale-label">
                                                                    <span class="sale-label sale-label-red">20%</span>
                                                                    <span class="sale-label sale-label-yellow">Распродажа</span>
                                                                    <span class="sale-label sale-label-green">Хит</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-product-descr">
                                                                <div class="card-product-descr__top">
                                                                    <div class="card-product-descr__info">
                                                                        <span class="product-code"><span>46- 312792P13</span></span>
                                                                        <span class="star-rating-wrapper star-rating-wrapper--noframe">
												<span class="star-rating">
													<span class="star-rating__container">
														<label>
															<svg class="icon">
																<use href="img/sprite.svg#fill-star"></use>
															</svg>
														</label>
													</span>
												</span>
												<span class="star-rating-value" data-value="5.0">5.0</span>
											</span>
                                                                    </div>
                                                                    <div class="card-product-descr__availability product-availability on-order">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#timer"></use>
                                                                        </svg>
                                                                        <span>Под заказ</span>
                                                                    </div>
                                                                    <div class="card-product-descr__title">
                                                                        <a href="javascript:;">Haupa Инструмент обжимной для конечных гильз 0,25-6</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card-product-descr__bottom">
                                                                    <div class="card-product-descr__price">
                                                                        <div class="card-product-descr__price-title">Цена за штуку</div>
                                                                        <div class="card-product-descr__price-display">
                                                                            <div class="card-product-descr__price-discount">
                                                                                <div class="card-product-descr__price-originally">1 624,50 ₽</div>
                                                                                <div class="card-product-descr__price-discount-label">10%</div>
                                                                            </div>
                                                                            <div class="card-product-descr__price-current">6 173,10 ₽</div>
                                                                        </div>
                                                                        <div class="card-product-descr__price-bonus">
                                                                            <span>+ 346,99</span>
                                                                            <svg class="icon">
                                                                                <use href="img/sprite.svg#fill-bonus"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-product-descr__cart product-card__cart cart-buy">
                                                                        <div class="product-card__cart-quantity cart-quantity disabled">
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#minus"></use>
                                                                                </svg>
                                                                                <svg class="icon icon-sm btn__icon icon-selected">
                                                                                    <use href="img/sprite.svg#trash"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <input
                                                                                    id=""
                                                                                    class="input-reset cart-quantity-input"
                                                                                    type="text"
                                                                                    placeholder="999"
                                                                                    value="1"
                                                                                    max="999"
                                                                                    data-mult="1"
                                                                            >
                                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                                <svg class="icon icon-sm btn__icon">
                                                                                    <use href="img/sprite.svg#plus"></use>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <button class="btn-reset btn btn-primary cart-in" type="button">
                                                                            <span class="btn__text">В КОРЗИНУ</span>
                                                                        </button>
                                                                        <div class="card-product-act">
                                                                            <button class="btn-reset btn btn-light card-product-act__more" data-card-product-act-more>
                                                                                <svg class="icon btn__icon">
                                                                                    <use href="img/sprite.svg#fill-more-horiz"></use>
                                                                                </svg>
                                                                            </button>
                                                                            <div class="card-product-act__list" data-card-product-act-content>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" data-notice="favorites" title="В избранное">
                                                                                    <svg class="icon btn__icon icon-default">
                                                                                        <use href="img/sprite.svg#bookmark-plus"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">В избранное</span>
                                                                                    <svg class="icon btn__icon icon-selected">
                                                                                        <use href="img/sprite.svg#fill-bookmark-check"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-selected">В избранном</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn switch-content" title="Сравнить" data-notice="compare">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#barchart"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text text-default">Сравнить</span>
                                                                                    <span class="btn__text text-selected">В сравнении</span>
                                                                                </button>
                                                                                <button class="btn-reset btn card-product-act__btn" title="В смету" data-fancybox data-src="#modal-estimate">
                                                                                    <svg class="icon btn__icon">
                                                                                        <use href="img/sprite.svg#inbox-in"></use>
                                                                                    </svg>
                                                                                    <span class="btn__text">В смету</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-navigation">
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="basic-hcm__more">
                                        <a class="btn-reset btn btn-mini btn-b-light" href="javascript:;">
                                            <span class="btn__text">Смотреть все</span>
                                            <svg class="icon icon-xs btn__icon desktop-only">
                                                <use href="img/sprite.svg#arrow-right"></use>
                                            </svg>
                                            <svg class="icon icon-xs btn__icon mobile-only">
                                                <use href="img/sprite.svg#chevron-right"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>