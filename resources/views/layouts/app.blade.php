<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--<![METAS]>-->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!-- CSRF Token -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<![LINKS]>-->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <!--<![SCRIPTS]>-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--<![TITLE]>-->
    <title>{{ SITE_OPTION(\App\Helpers\Constants\OptionInterface::SITE_TITLE_VARIABLE) }}</title>
</head>
<body>
<div id="app">
    <!-- Header -->
    <header class="header">
        <div class="brand">
            <a href="#">
                <img src="{{ asset('images/logo.png') }}" alt="{{ SITE_OPTION(\App\Helpers\Constants\OptionInterface::SITE_TITLE_VARIABLE) }}">
                {{ SITE_OPTION(\App\Helpers\Constants\OptionInterface::SITE_TITLE_VARIABLE) }}
            </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarMainOfPortal" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMainOfPortal">
                <ul class="navbar-nav ms-auto me-auto flex-nowrap">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">{{ __('navigation.navbar.home') }}</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.store') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ __('navigation.navbar.club') }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ __('navigation.navbar.sport') }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.teather') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.socialarea') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.events') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.joinus') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('navigation.navbar.contacts') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header -->

    <main class="main">
        @yield('content')
    </main>
</div>
</body>
</html>
