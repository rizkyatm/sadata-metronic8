<!DOCTYPE html><!--
    Author: Keenthemes
    Product Name: Metronic
    Product Version: 8.2.0
    Purchase: https://1.envato.market/EA4JP
    Website: http://www.keenthemes.com
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Dribbble: www.dribbble.com/keenthemes
    Like: www.facebook.com/keenthemes
    License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
    --><html lang="en"><!--begin::Head--><head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8">
        <meta name="description" content="
                The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, 
                Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony &amp; Laravel versions. 
                Grab your copy now and get life-time updates for free.
            ">
        <meta name="keywords" content="
                metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, 
                Node.js, Flask, Symfony &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, 
                free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, 
                bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
            ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="
                Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, 
                Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme &amp; Template
            ">
        <meta property="og:url" content="https://keenthemes.com/metronic">
        <meta property="og:site_name" content="Keenthemes | Metronic">
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}">
    
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"> <!--end::Fonts-->
    
        <!--begin::Vendor Stylesheets(used for this page only)-->
        <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css">
        <!--end::Vendor Stylesheets-->
    
    
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
        <!--end::Global Stylesheets Bundle-->
    
        <!--Begin::Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
        </script>
        <!--End::Google Tag Manager -->
    
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->
    
    <!--begin::Body-->
    
    <body id="kt_body" class="aside-enabled">
        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
    
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
    
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
    
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->
        <!--Begin::Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!--End::Google Tag Manager (noscript) -->
    
    
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::SIDEBAR-->
                <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                    <!--begin::Aside menu-->
                    <div class="aside-menu flex-column-fluid">
                        <!--begin::Aside Menu-->
                        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper"
                            data-kt-scroll="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
                            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                                id="#kt_aside_menu" data-kt-menu="true">

                                <div class="separator mx-1 my-2"></div>

                                {{-- dashboard menu --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-chart-pie fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Dashboards</span>
                                    </a>
                                </div>

                                {{-- log activity --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-book fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Log Activity</span>
                                    </a>
                                </div>

                                <div class="separator mx-1 my-2"></div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">ITINERARY</span>
                                    </div>
                                </div>

                                {{-- Manage Itinerary --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-calendar-days fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Manage Itinerary</span>
                                    </a>
                                </div>

                                {{-- Upload Itinerary --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-calendar-plus fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Upload Itinerary</span>
                                    </a>
                                </div>

                                {{-- Approval --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa-solid fa-calendar-check fs-4"></i>
                                        </span>
                                        <span class="menu-title">Approval(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/widgets/lists.html">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Sakit/Izin/Cuti/Off</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/widgets/statistics.html">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Out Itinerary</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Store Location Update</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">MASTER DATA</span>
                                    </div>
                                </div>

                                {{-- Employee --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-user fs-4"></i>
                                        </span>
                                        <span class="menu-title">Employee(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Employee</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Employee Resign</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Employee Turn Over</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Employee Team</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Store --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-building fs-4"></i>
                                        </span>
                                        <span class="menu-title">Store(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Region</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Cabang</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Sub Area</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Channel</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Account</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Timezone</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Store</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Upload Store</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Store Coverage</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Product --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-cube fs-4"></i>
                                        </span>
                                        <span class="menu-title">Product(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Brand</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Category</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Segment</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Group</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Package</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="/Product">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product Package</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Upload Product</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product Price</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product Price Limit</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product Stock</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">OOS Product Focus</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Must SKU Listing</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Competitor --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-building fs-4"></i>
                                        </span>
                                        <span class="menu-title">Competitor</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Brand</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Product</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Type --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa fa-external-link fs-4"></i>
                                        </span>
                                        <span class="menu-title">Type</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Promo</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Display GT</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Group Promo</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Rental</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Regular Display</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">POSM</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Additional</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">OOS</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Klasifikasi</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Display Share --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa fa-bookmark fs-4"></i>
                                        </span>
                                        <span class="menu-title">Display Share</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Own VS Competitor</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Minimum Tier</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Position</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Guidance</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Gimmick --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-cubes fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Gimmick</span>
                                    </a>
                                </div>

                                {{-- Principle Promo --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-bullhorn fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Principle Promo</span>
                                    </a>
                                </div>

                                {{-- Rental --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-tags fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Rental</span>
                                    </a>
                                </div>

                                {{-- Config Sales --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-shopping-cart fs-4"></i>
                                        </span>
                                        <span class="menu-title">Config Sales</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Target Offtake</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Upload Sell In</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Sales Print Out</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- POSM --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-tags fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">POSM</span>
                                    </a>
                                </div>

                                {{-- Guidelines --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-book fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Guidelines</span>
                                    </a>
                                </div>

                                {{-- Dynamic Survey --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa fa-cogs fs-4"></i>
                                        </span>
                                        <span class="menu-title">Dynamic Survey</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Survey</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Type Survey</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Questionnaire</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">REPORT</span>
                                    </div>
                                </div>

                                {{-- Attendance --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-calendar-check fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Attendance</span>
                                    </a>
                                </div>

                                {{-- Sell Out --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-shopping-cart fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Sell Out</span>
                                    </a>
                                </div>

                                {{-- Sales --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-shopping-cart fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Sales</span>
                                    </a>
                                </div>

                                {{-- Stock --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-cubes fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Stock</span>
                                    </a>
                                </div>

                                {{-- OOS --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-cubes fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">OOS</span>
                                    </a>
                                </div>

                                {{-- Expired Date --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-calendar fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Expired Date</span>
                                    </a>
                                </div>

                                {{-- Activity(s) --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-cogs fs-4"></i>
                                        </span>
                                        <span class="menu-title">Activity(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-check-square fs-7"></i>
                                                </span>
                                                <span class="menu-title">Promo Tracking</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-calendar-days fs-7"></i>
                                                </span>
                                                <span class="menu-title">Competitor Activity</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Display(s) --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-desktop fs-4"></i>
                                        </span>
                                        <span class="menu-title">Display(s)</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa fa-line-chart fs-7"></i>
                                                </span>
                                                <span class="menu-title">Reguler Display</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-share-square fs-7"></i>
                                                </span>
                                                <span class="menu-title">Rental Display</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Price Principal --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-dollar fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Price Principal</span>
                                    </a>
                                </div>

                                {{-- Delete Report --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-trash fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Delete Report</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">Principal</span>
                                    </div>
                                </div>

                                {{-- Attendance --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-calendar-days fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Attendance</span>
                                    </a>
                                </div>

                                {{-- Achievement --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-sitemap fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Achievement</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">EXPORT</span>
                                    </div>
                                </div>

                                {{-- Download Export --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-cloud-download fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Download Export</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">SETTINGS</span>
                                    </div>
                                </div>

                                {{-- User --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-user-group fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">User</span>
                                    </a>
                                </div>

                                {{-- Lock Management --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-map fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Lock Management</span>
                                    </a>
                                </div>

                                {{-- Profile --}}
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span>
                                                <i class="fa-solid fa-cog fs-4"></i>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Profile</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content pt-8 pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-5 ls-1">CUSTOM</span>
                                    </div>
                                </div>

                                {{-- Custom --}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-jet-fighter fs-4"></i>
                                        </span>
                                        <span class="menu-title">Custom</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Master Customer (Dynamic)</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Customer</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Schedule</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Report Sampling V2 (Dynamic)</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Master Price Principal (Dynamic)</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Report Request Display (Dynamic)</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                <span class="menu-bullet">
                                                    <i class="fa-solid fa-circle-chevron-right fs-7"></i>
                                                </span>
                                                <span class="menu-title">Request Sampling</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="separator mx-1 my-4"></div>

                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Aside Menu-->
                    </div>
                    <!--end::Aside menu-->
                </div>
                <!--end::SIDEBAR-->
    
                <!--begin::Wrapper-->
                <div div="" class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                   <!--begin::Header-->
                    <div id="kt_header" style="" class="header  align-items-stretch">
                        <!--begin::Brand-->
                        <div class="header-brand">
                            <!--begin::Logo-->
                            <a href="#">
                                <img src="{{ asset('media/logos/sadata.png') }}" alt="" class="" style="height: 34px">
                            </a>
                            <!--end::Logo-->
                            <!--begin::Aside minimize-->
                            <div id="kt_aside_toggle"
                                class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                                data-kt-toggle-name="aside-minimize">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                                <span class="svg-icon svg-icon-1 me-n1 minimize-default">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black"></rect>
                                        <path
                                            d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z"
                                            fill="black"></path>
                                        <path opacity="0.5"
                                            d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                                <span class="svg-icon svg-icon-1 minimize-active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.3" width="12" height="2" rx="1"
                                            transform="matrix(-1 0 0 1 15.5 11)" fill="black"></rect>
                                        <path
                                            d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                            fill="black"></path>
                                        <path
                                            d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                            fill="#C4C4C4"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Aside minimize-->
                            <!--begin::Aside toggle-->
                            <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                                <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                    id="kt_aside_mobile_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Aside toggle-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Toolbar-->
                        <div class="toolbar d-flex align-items-stretch">
                            <!--begin::Toolbar container-->
                            <div
                                class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                                <!--begin::Page title-->
                                <div class="page-title d-flex justify-content-center flex-column me-5">
                                    <!--begin::Title-->
                                    <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">
                                            <a href="../../demo8/dist/index.html"
                                                class="text-muted text-hover-primary">Home</a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">Product</li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-dark">Add Product</li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page title-->
                                <!--begin::Action group-->
                                <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">


                                    <!--begin::Action wrapper-->
                                    <div class="d-flex align-items-center">

                                        <!--begin::Actions-->
                                        <div class="d-flex">


                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Action wrapper-->
                                    <!--begin::Theme mode-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Theme mode docs-->

                                        <img src="{{ asset('media/avatars/profiles.png') }}" alt="" class=""
                                            style="height: 36px" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end">
                                        <!--end::Theme mode docs-->

                                        <div class="menu menu-sub menu-sub-dropdown w-120px w-md-120px" data-kt-menu="true"
                                            id="kt_menu_61cf1e2d94494">
                                            <!--begin::Header-->
                                            <div class="px-2 py-2">

                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                            <span>
                                                                <i class="fa-solid fa-arrow-right-from-bracket fs-4"></i>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="fs-5 text-dark fw-bold"
                                                            style="cursor: pointer">LogOut</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Menu separator-->
                                            <div class="separator border-gray-200"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Form-->

                                            <!--end::Form-->
                                        </div>
                                    </div>

                                    <!--end::Theme mode-->
                                </div>
                                <!--end::Action group-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
    
    
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid " id="kt_content">
                        <!--begin::Post-->
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class=" container-xxl ">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-8" >
                                        <!--begin::Chart widget 18-->
                                        <div style="box-shadow: 0px 1px 4px 0.4px rgba(0, 0, 0, 0.25);" class="card card-flush h-xl-100">
                                            <!--begin::Body-->
                                            <div class="card-body px-8 pt-6 pb-6">
                                                {{-- Start::Header --}}
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <div class="symbol-label fs-2 fw-bold bg-primary text-inverse-primary">1</div>
                                                        </div>
                                                        <div class="fs-2 fw-bolder px-3">Download Template Excel</div>
                                                    </div>
                                                </div>
                                                {{-- End::Header --}}
                                                {{-- Start::body --}}
                                                <div>
                                                    <div>
                                                        <div class="pt-9 fs-4">
                                                            The template can only be filled with <span style="font-weight: bold">MS. Excel 2007 and above</span> or <span style="font-weight: bold">Libre Office.</span> Do not add any columns in the Excel file.
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn btn-primary w-100 py-1 mt-8">Download Template</a>
                                                </div>
                                                {{-- End::body --}}
                                                <div class="fs-3 fw-bolder mt-8 mb-4">Status Upload</div>
                                                {{-- start::table --}}
                                                <div style="box-shadow: 0px 1px 4px 0.4px rgba(0, 0, 0, 0.25); border-radius: 7px;">
                                                    <div class="table-responsive" >
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5"id="table_status">
                                                            <thead >
                                                                <tr style="background-color:#F9F9F9;" class="text-start text-black fw-bolder fs-7 text-uppercase gs-0">
                                                                    <th style="border-right:1px solid #99A1B7;" class="min-w-85px text-center" data-orderable="false">Options</th>
                                                                    <th style="border-right:1px solid #99A1B7;" class="text-start min-w-75px">Status</th>
                                                                    <th style="border-right:1px solid #99A1B7;" class="text-start min-w-100px">Date</th>
                                                                    <th style="border-right:1px solid #99A1B7;" class="text-start min-w-95px">Title</th>
                                                                    <th style="border-right:1px solid #99A1B7;" class="text-start min-w-90px">Request By</th>
                                                                    <th class="text-center min-w-75px" data-orderable="false">Error Log</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-danger">FAILED</span>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start fw-bold pe-0">
                                                                        2023-06-24 00:53:29 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="px-2 py-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-success">DONE</span> 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        2023-06-24 00:53:25
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-danger">FAILED</span> 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        2023-06-24 00:53:22 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="px-2 py-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-danger">FAILED</span>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start fw-bold pe-0">
                                                                        2023-06-24 00:53:29 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="px-2 py-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1" >
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-success">DONE</span> 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        2023-06-24 00:53:25
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
    
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="kt_docs_sweetalert_html px-2 py-1 btn btn-danger">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        <span class="badge badge-light-danger">FAILED</span> 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        2023-06-24 00:53:22 
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        COMPETITOR
                                                                    </td>
                                                                    <td style="border-right:1px solid #99A1B7; border-bottom: 0px" class="text-start pe-0">
                                                                        Sadatech
                                                                    </td>
                                                                    <td style="border-bottom: 0px" class="text-center">
                                                                        <div>
                                                                            <button type="button" class="px-2 py-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1" >
                                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"/></svg>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                
                                                {{-- end::table --}}
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::Chart widget 18-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <!--begin::List widget 21-->
                                        <div style="box-shadow: 0px 1px 4px 0.4px rgba(0, 0, 0, 0.25);" class="card card-flush h-xl-100">
                                            <!--begin::Body-->
                                            <div class="card-body px-9 pt-6 pb-6">
                                                {{-- Start::Header --}}
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-25px">
                                                            <div class="symbol-label fs-2 fw-bold bg-primary text-inverse-primary">2</div>
                                                        </div>
                                                        <div class="fs-2 fw-bolder px-3">Upload File Excel</div>
                                                    </div>
                                                    <div class="fw-normal pt-9">
                                                        <div class="fs-4">Select the Excel file (.xlsx) that you have converted.</div>
                                                    </div>
                                                    <form action="">
                                                        {{-- imput id::start --}}
                                                        <div style="background-color: #f5f8fa" class="notice rounded border-grey border border-dashed mb-7 p-3 mt-7 rounded-3  ">
                                                            <span class="fw-bolder fs-4 mb-0 required">Update</span>    
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-stack flex-grow-1 mt-2">
                                                                <label class="form-check form-check-custom form-check-solid align-items-start">
                                                                    <!--begin::Input-->
                                                                    <input class="form-check-input" type="checkbox" name="email-preferences[]" value="1">
                                                                    <!--end::Input-->
                                                                    
                                                                    <!--begin::Label-->
                                                                    <span class="form-check-label d-flex flex-column align-items-start">
                                                                        <span class="text-muted fw-normal fs-5 mb-0">Tick if you want to update</span>
                                                                    </span>
                                                                    <!--end::Label-->
                                                                </label>  
                                                            </div>
                                                            <!--end::Wrapper-->  
                                                        </div>
                                                        {{-- imput id::end --}}
                                                        {{-- imput title::start --}}
                                                        <div class="d-flex flex-column mb-7 fv-row rounded-3">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-4 fw-bolder mb-2">
                                                                <span class="required">Title</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" name="target_title">
                                                        </div>
                                                        {{-- imput title::end --}}
                                                        {{-- imput file::start --}}
                                                        <div class="fv-row mb-8 ">
                                                            <!--begin::Dropzone-->
                                                            <div class="h-225px d-flex justify-content-center align-items-center dropzone" id="kt_dropzonejs_file_excel">
                                                                <!--begin::Message-->
                                                                <div class="dz-message">
                                                                    <!--begin::Info-->
                                                                    <div class="w-100 h-225px"  style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                                        <div class="mb-2">
                                                                            <img src="{{ asset('media/svg/files/upload.svg') }}" alt="logo upload file">
                                                                        </div>
                                                                        <div>
                                                                            <h3 style="text-align: center;" class="fs-5 fw-bold mb-1 text-primary">Drop files here or click to upload.</h3>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                            </div>
                                                            <!--end::Dropzone-->
                                                        </div>  
                                                        {{-- imput file::end --}}
                                                        <button style="border: 1px solid #0090f7; background-color: transparent" class="rounded-3 btn btn-light-primary w-100">UPLOAD DATA</button>                                                    
                                                    </form>
                                                </div>
                                                {{-- End::Header --}}
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 21-->
                                    </div>
                                    <!--end::Col-->
                                    
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Content-->
    
                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                        <!--begin::Container-->
                        <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023©</span>
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>
    
                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2" >Support</a></li>
    
                                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->
    
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Scrolltop-->

        {{-- MODAL::START --}}
        <div class="modal fade" tabindex="-1" id="kt_modal_1">
            <div class="modal-dialog modal-lg modal-dialog-centered" style="max-width: 650px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Explanation</h3>
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
        
                    <div class="modal-body">
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">Upload Product</h4>
                                    <div class="fs-6 text-gray-700">SYSTEM ERROR : SQLSTATE[23000]: Integrity constraint violation: 1048 Column "name" cannot be null (SQL: insert into `product_categories` (`name`, `cluster_id`, `updated_at`, `created_at`) values (, 19, 2022-10-04 16:36:19, 2022-10-04 16:36:19))</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MODAL::END --}}
    
        <!--begin::Javascript-->
        <script>
            var hostUrl = "";
        </script>
    
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
    
        <!--begin::Vendors Javascript(used for this page only)-->
        <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script>
            $("#table_status").DataTable({
                "scrollY": "280px",
                "scrollX": true,
                // "scrollCollapse": true,
                "paging": true,
                "order": [[0, '']],
            });
        </script>
        <script src="{{ asset('plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <!--end::Vendors Javascript-->
    
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="{{ asset('js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('js/custom/widgets.js') }}"></script>
        <script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script>
            const buttons = document.querySelectorAll('.kt_docs_sweetalert_html');

            buttons.forEach(button => {
                button.addEventListener('click', e => {
                    e.preventDefault();
                    Swal.fire({
                        title: `<h1 style="font-size: 24px;">Are you sure?</h1>`,
                        html: `<p style="font-size: 14px;">You will not be able to recover data!</p>`,
                        icon: "info",
                        iconColor: "red",
                        buttonsStyling: false,
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it",
                        cancelButtonText: 'No, cancel',
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: 'btn btn-danger'
                        }
                    });
                });
            });
        </script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
    
        <script>
            var myDropzone = new Dropzone("#kt_dropzonejs_file_excel", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 1,
                maxFilesize: 10, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });
        </script>
    </body><!--end::Body--></html>      