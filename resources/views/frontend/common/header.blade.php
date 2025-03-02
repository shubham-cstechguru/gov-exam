@php
$setting = App\Model\Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $setting->title }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ url('/public/images/logo/'.$setting->logo) }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <!-- {{ HTML::style('assets/css/app.min.css') }} -->
    {{ HTML::style('assets/css/form.min.css') }}
    {{ HTML::style('assets/css/app.css') }}
    {{ HTML::style('assets/css/styles/all-themes.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/responsive.css') }}
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ url('/public/images/logo/'.$setting->logo) }}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar active" style="background-color: #353c48 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-7">
                    <div class="d-inline-block">
                        <a href="{{ url('/') }}"><img src="{{ url('/public/images/logo/'.$setting->logo) }}" alt="" class="logo-main"></a>
                    </div>
                    <h2 class="d-inline-block"><a href="{{ url('/') }}" class="text-white site-name-main">{{ $setting->title }}</a></h2>
                </div>
                <div class="col-md-6 col-xs-1 col-2 text-center">
                    <form action="{{ url('/examlist') }}" class=" search-input">
                        <input type="text" name="s" autocomplete="off" placeholder="Search" class="form-control bg-white mt-3 pl-2 pr-2 masterSearch" data-url="{{ url('/ajex/search') }}" data-baseurl="{{ url('/') }}" style="height: 30px; align-items: center; border: 0; border-radius: 4px;">
                        <div class="search-result" style="display: block;">
                            <ul style="width: 550px;" class="listing m-0 p-0">
                            </ul>
                        </div>
                    </form>
                    <div class="search-icon d-inline-block">
                        <i class="material-icons" onclick="Search()" style="cursor: pointer;">search</i>
                    </div>
                </div>
                <div class="col-md-3 col-xs-1 col-3 text-right">
                    @if(auth()->user())
                    <div class="user_profile d-inline-block">
                        <div class="dropdown">
                            <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <img src="{{ url('extraimage/images.jpg') }}" alt="user image" style="border-radius: 100%;" width="24" height="24" class="d-inline-block" title="{{ auth()->user()->name }}">
                            </a>
                            <ul class="dropdown-menu pullDown">
                                <li class="body">
                                    <ul class="user_dw_menu">
                                        <li>
                                            <a href="{{ url('user') }}">
                                                <i class="material-icons">person</i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('account/logout') }}">
                                                <i class="material-icons">power_settings_new</i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="d-inline-block">
                        <div class="menu-icon">
                            <i class="material-icons" onclick="openNav()" style="cursor: pointer;">menu</i>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        <section class="menu menu1" id="mySidenav">
            <i class="material-icons back-arrow" onclick="openNav()" style="cursor: pointer;">arrow_forward</i>
            <div>
                <ul>
                    <li class="menu-header">
                        <div class="text-center">
                            <a href="{{ url('/') }}"><img src="{{ url('/public/images/logo/'.$setting->logo) }}" alt="" class="menu-logo"></a>
                        </div>
                        <div class="text-center"><a href="{{ url('/') }}" class="text-white site-name">{{ $setting->title }}</a></div>
                        <div class="row">
                            <div class="col-6 app-icon pr-0">
                                <a href="{{ url('/') }}">
                                    <img src="{{ url('images/playstore.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-6 app-icon pl-0">
                                <a href="{{ url('/') }}">
                                    <img src="{{ url('images/istore.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li> <a href="{{ url('/') }}">Home</a></li>
                    <li> <a href="">Result</a></li>
                    <li> <a href="">Exams</a></li>
                    <li> <a href="">Notification</a></li>
                </ul>
            </div>
        </section>
    </nav>
    <div class="search-part d-none" id="search-part">
        <a href="#" class="active"></a>
        <form method="GET" action="{{ url('/examlist') }}" accept-charset="UTF-8" novalidate="novalidate">
            <div class="search-box" style="display: block;">
                <input type="text" name="s" class="squareInput" id="search-input" placeholder="Search">
                <button><i class="material-icons">search</i></button>
            </div>
        </form>
    </div>
    <div class="float-sm">
        <a class="pb-2" href="{{ route('currentaffair') }}">
            <div class="fl-fl float-su">
                <i class="far fa-newspaper mr-4"></i>
                Current Affairs
            </div>
        </a>
    </div>
    <!-- #Top Bar -->