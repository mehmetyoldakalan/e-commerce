<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Symfonysoft.com</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/themes/semi-dark-layout.css')}}">


    <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/plugins/extensions/toastr.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/vendors/css/extensions/toastr.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/vendors/css/extensions/sweetalert2.min.css')}}"/>


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('build/app-assets/css/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/plugins/file-uploaders/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/app-assets/css/pages/data-list-view.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('build/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu  2-columns  navbar-floating footer-static  "
      data-open="hover"
      data-menu="horizontal-menu"
      data-col="2-columns"
      data-layout="dark-layout">

@include('alerts.toasts')

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item">
                <a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template-dark/index.html">
                    <div class="brand-logo"></div>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                                <i class="ficon feather icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="app-todo.html"
                               data-toggle="tooltip"
                               data-placement="top"
                               title="Todo">
                                <i class="ficon feather icon-check-square"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="app-chat.html"
                               data-toggle="tooltip"
                               data-placement="top"
                               title="Chat">
                                <i class="ficon feather icon-message-square"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="app-email.html"
                               data-toggle="tooltip"
                               data-placement="top"
                               title="Email">
                                <i class="ficon feather icon-mail"></i>
                            </a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="app-calender.html"
                               data-toggle="tooltip"
                               data-placement="top"
                               title="Calendar">
                                <i class="ficon feather icon-calendar"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link bookmark-star">
                                <i class="ficon feather icon-star warning"></i>
                            </a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon">
                                    <i class="feather icon-search primary"></i>
                                </div>
                                <input class="form-control input"
                                       type="text"
                                       placeholder="Explore Vuexy..."
                                       tabindex="0"
                                       data-search="template-list">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link"
                           id="dropdown-flag" href="#"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <i class="flag-icon flag-icon-us"></i>
                            <span class="selected-language">English</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item"
                               href="#"
                               data-language="en">
                                <i class="flag-icon flag-icon-us"></i>
                                English
                            </a>
                            <a class="dropdown-item"
                               href="#"
                               data-language="fr">
                                <i class="flag-icon flag-icon-fr"></i>
                                Turkish
                            </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link nav-link-expand">
                            <i class="ficon feather icon-maximize"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search">
                            <i class="ficon feather icon-search"></i>
                        </a>
                        <div class="search-input">
                            <div class="search-input-icon">
                                <i class="feather icon-search primary"></i>
                            </div>
                            <input class="input"
                                   type="text"
                                   placeholder="Explore Vuexy..."
                                   tabindex="-1"
                                   data-search="template-list">
                            <div class="search-input-close">
                                <i class="feather icon-x"></i>
                            </div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label"
                           href="#"
                           data-toggle="dropdown">
                            <i class="ficon feather icon-bell"></i>
                            <span class="badge badge-pill badge-primary badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white">1 New</h3>
                                    <span class="notification-title">App Notifications</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list">
                                <a class="d-flex justify-content-between"
                                   href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left">
                                            <i class="feather icon-plus-square font-medium-5 primary"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading">You have new order!</h6>
                                            <small class="notification-text">
                                                Are your going to meet me tonight?
                                            </small>
                                        </div>
                                        <small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago
                                            </time>
                                        </small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-menu-footer">
                                <a class="dropdown-item p-1 text-center"
                                   href="javascript:void(0)">
                                    Read all notifications
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link"
                           href="#"
                           data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                </span>
                                <span class="user-status">Available</span>
                            </div>
                            <span>
                                <img class="round"
                                     src="{{asset('build/app-assets/images/portrait/small/avatar-s-11.jpg')}}"
                                     alt="avatar"
                                     height="40"
                                     width="40">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                               href="{{route('profile.edit')}}">
                                <i class="feather icon-user"></i>
                                Edit Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">
                                <i class="feather icon-power"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
        <a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50">
                    <img src="{{asset('build/app-assets/images/icons/xls.png')}}"
                         alt="png"
                         height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p>
                    <small class="text-muted">
                        Marketing
                        Manager
                    </small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50">
                    <img src="{{asset('build/app-assets/images/icons/jpg.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p>
                    <small class="text-muted">
                        FontEnd Developer
                    </small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50">
                    <img src="{{asset('build/app-assets/images/icons/pdf.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p>
                    <small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50">
                    <img src="{{asset('build/app-assets/images/icons/doc.png')}}" alt="png" height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong</p>
                    <small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a>
    </li>
    <li class="d-flex align-items-center">
        <a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50">
                    <img src="{{asset('build/app-assets/images/portrait/small/avatar-s-8.jpg')}}"
                         alt="png"
                         height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p>
                    <small class="text-muted">UI designer</small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50">
                    <img src="{{asset('build/app-assets/images/portrait/small/avatar-s-1.jpg')}}"
                         alt="png"
                         height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p>
                    <small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50">
                    <img src="{{asset('build/app-assets/images/portrait/small/avatar-s-14.jpg')}}"
                         alt="png"
                         height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p>
                    <small class="text-muted">
                        Digital Marketing Manager
                    </small>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
        <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50">
                    <img src="{{asset('build/app-assets/images/portrait/small/avatar-s-6.jpg')}}"
                         alt="png"
                         height="32">
                </div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p>
                    <small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a>
    </li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start">
                <span class="mr-75 feather icon-alert-circle"></span>
                <span>No results found.</span>
            </div>
        </a>
    </li>
</ul>


<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-without-dd-arrow navbar-shadow menu-border"
         role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="{{route('dashboard')}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0"
                       data-toggle="collapse">
                        <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                        <i class="toggle-icon feather
                        icon-disc font-medium-4 d-none
                         d-xl-block collapse-toggle-icon
                         primary" data-ticon="icon-disc">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li><a class="dropdown-item"
                       href="{{route('dashboard')}}"
                       data-i18n="Analytics">
                        <i class="feather icon-home"></i>
                        Anasayfa
                    </a>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#"
                       data-toggle="dropdown">
                        <i class="feather icon-package"></i>
                        <span data-i18n="Apps">Ürün Yönetimi</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="{{route('products.index')}}"
                               data-toggle="dropdown"
                               data-i18n="Email">
                                <i class="feather icon-list"></i>
                                Ürün Listesi
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="{{route('products.create')}}"
                               data-toggle="dropdown"
                               data-i18n="Chat">
                                <i class="feather icon-plus-circle"></i>Ürün Ekle
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="{{route('products.create')}}"
                               data-toggle="dropdown"
                               data-i18n="Chat">
                                <i class="feather icon-plus-circle"></i>Ürün Alım Planlama
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#"
                       data-toggle="dropdown">
                        <i  class="feather icon-layers"></i>
                        <span data-i18n="UI Elements">Sipariş Yönetimi</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item" href="#"
                               data-toggle="dropdown"
                               data-i18n="Colors">
                                <i class="feather icon-droplet"></i>
                                Aktif Siparişler
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item" href="#"
                               data-toggle="dropdown"
                               data-i18n="Colors">
                                <i class="feather icon-droplet"></i>
                                Geçmiş Siparişler
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#"
                       data-toggle="dropdown">
                        <i class="feather icon-edit-2"></i>
                        <span data-i18n="Forms &amp; Tables">
                            Ticket Yönetimi
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Form Layout">
                                <i class="feather icon-box"></i>
                                Aktif Ticketlar
                            </a>
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Form Layout">
                                <i class="feather icon-box"></i>
                                Tüm Ticketler
                            </a>
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Form Layout">
                                <i class="feather icon-box"></i>
                                Yeni Oluştur
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
                        <i class="feather icon-file"></i>
                        <span data-i18n="Pages">
                            Müşteri Yönetimi
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Invoice">
                                <i class="feather icon-file"></i>
                                Müşteriler
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">
                        <i class="feather icon-bar-chart-2"></i>
                        <span data-i18n="Charts &amp; Maps">
                            Raporlar & İstatistikler
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Google Maps">
                                <i class="feather icon-map"></i>
                                Gelir Raporları
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Google Maps">
                                <i class="feather icon-map"></i>
                                Müşteri Ve Ziyaretçi Raporları
                            </a>
                        </li>
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Google Maps">
                                <i class="feather icon-map"></i>
                                Ürün Rapor Ve İstatistikleri
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown">
                    <a class="dropdown-toggle nav-link" href="#"
                       data-toggle="dropdown">
                        <i class="feather icon-more-horizontal"></i>
                        <span data-i18n="Others">
                            Fatura Yönetimi
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li data-menu="">
                            <a class="dropdown-item"
                               href="#"
                               data-toggle="dropdown"
                               data-i18n="Raise Support">
                                <i class="feather icon-life-buoy"></i>
                                Faturalar
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Anasayfa</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">@yield('content-title')
                                </li>
                                <!--  <li class="breadcrumb-item"><a href="#">Data List</a>
                                  </li>
                                  <li class="breadcrumb-item active">List View
                                  </li>-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            @yield('content')

        </div>
    </div>
</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<footer class="footer footer-static footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">
            COPYRIGHT &copy; {{\Carbon\Carbon::now()->year}}
            <a class="text-bold-800 grey darken-2"
               href="https://symfonysoft.com"
               target="_blank">symfonysoft.com,
            </a>
            All rights Reserved
        </span>
        <button class="btn btn-primary btn-icon scroll-top" type="button">
            <i class="feather icon-arrow-up"></i>
        </button>
    </p>
</footer>


<script src="{{asset('build/app-assets/vendors/js/vendors.min.js')}}"></script>

<script src="{{asset('build/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('build/app-assets/js/scripts/extensions/sweet-alerts.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>

<script src="{{asset('build/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('build/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('build/app-assets/js/scripts/components.js')}}"></script>

<script src="{{asset('build/app-assets/js/scripts/ui/data-list-view.js')}}"></script>
<script src="{{asset('build/app-assets/js/scripts/extensions/toastr.js')}}"></script>
<script src="{{asset('build/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('build/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>

@livewireScripts

</body>

</html>
