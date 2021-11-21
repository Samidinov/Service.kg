<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-part.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm position-fixed w-100 main-menu">
            <div class="container">
                <a class="navbar-brand" href="{{ route('work.index') }}">
                    {{ __('menu.company_name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                {{__('menu.description')}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        @guest
                            <li class="mt-2 mr-2 nav-item">
                                <span class="fa fa-user"></span>
                            </li>
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('menu.login') }}</a>
                                </li>
                            @endif
                                        <span class="mt-2">|</span>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('menu.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown mr-2">
                                <i class="fa fa-user d-inline"></i>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle d-inline" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary fa fa-newspaper-o " title="{{__('menu.my_ads')}}" href="{{route('work.userWorks', Auth::user()->id)}}">
                                        {{__('menu.my_ads')}}
                                    </a>
                                    <a class="dropdown-item text-primary fa fa-bookmark" title="{{__('menu.my_saved_list')}}" href="{{route('saved-ads.show', Auth::user()->id)}}">
                                        {{__('menu.my_saved_list')}}
                                    </a>
                                    <a class="dropdown-item text-primary fa fa-star-half-full" title="{{__('menu.registration_as_master_hover')}}" href="{{route('master.show', Auth::user()->id)}}">
                                           {{__('menu.registration_as_master')}}
                                    </a>
                                    <a class="dropdown-item text-primary fa fa-user-circle" title="{{__('menu.setting_user_hover')}}" href="{{route('user.show', Auth::user()->id)}}">
                                           {{__('menu.setting_user')}}
                                    </a>
{{--                                    <a class="dropdown-item text-primary fa fa-user-circle" title="{{__('menu.admin_page_btn_hover')}}" href="{{route('admin.adminIndex', Auth::user()->id)}}">--}}
{{--                                        {{__('menu.admin_page_btn')}}--}}
{{--                                    </a>--}}
                                    <a class="dropdown-item fa fa-sign-out" title="{{__('menu.logout_user_hover')}}" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('menu.logout_user') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown ml-4">
                                <i class="fa fa-bars d-inline"></i>
                                <a id="navbarDropdown-menu" class="nav-link dropdown-toggle d-inline" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('menu.menu') }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown-menu">

                                    <a href="{{route('work.index')}}" class=" dropdown-item text-primary" ><i class="fa fa-home mr-2"></i>{{ __('menu.home_page') }}</a>
                                    <a href="{{route('work.create')}}" class=" dropdown-item text-primary" ><i class="fa fa-sticky-note mr-2"></i>{{ __('menu.add_ads') }}</a>
                                    <a href="{{route('master.contracts', Auth::user()->id)}}" class=" dropdown-item text-primary" ><i class="fa fa-handshake-o mr-2"></i>{{ __('menu.contracts') }}</a>
                                    <a href="#" class=" dropdown-item text-primary" ><i class="fa fa-shopping-cart mr-2"></i>{{ __('menu.shop_page') }}</a>
                                    <a href="{{route('master.index')}}" class=" dropdown-item text-primary" ><i class="fa fa-shopping-cart mr-2"></i>{{ __('menu.experts') }}</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
{{--        @include('inc.header-bottom')кийин шилтеме страницалар даяр болгондо кошулат--}}
        <main class="py-4 container content shadow rounded main-content pt-5 pb-4 min-vh-100">
                <div class="pt-4" style="min-height: 700px;">
                    @yield('content')
                </div>
        </main>
        <footer class="col-12 footer border-top pb-0 bg-light">
            <div class=" container main-content mt-0 pt-0">
                <!-- Footer -->
                <footer class="text-center text-lg-start bg-light text-muted">
                    <!-- Section: Social media -->
                    <section
                        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
                    >
                        <!-- Left -->
                        <div class="me-5 d-none d-lg-block">
                            <span>{{ __('footer.connect_with_us_on_social_networks_title') }}</span>
                        </div>
                        <!-- Left -->

                        <!-- Right -->
                        <div>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 text-reset mr-2">
                                <i class="fa fa-github"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
                    <section class="">
                        <div class="container text-center text-md-start mt-5">
                            <!-- Grid row -->
                            <div class="row mt-3">
                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <h6 class="text-uppercase fw-bold mb-4 font-weight-bolder">
                                        <i class="fa fa-gem me-3 text-primary"></i>{{__('footer.company')}}
                                    </h6>
                                    <p>
                                        {{__('footer.company_slogan')}}
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4  font-weight-bolder">
                                        Products
                                    </h6>
                                    <p>
                                        <a href="#!" class="text-reset">{{__('footer.news')}}</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">{{__('footer.notifications')}}</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">{{__('footer.shop')}}</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">{{__('footer.partners')}}</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4 font-weight-bolder">
                                         {{__('footer.useful_pages')}}
                                    </h6>
                                    <p>
                                        <a href="{{ route('work.index') }}" class="text-reset">{{__('footer.ads')}}</a>
                                    </p>
                                    <p>
                                        <a href="{{route('master.index')}}" class="text-reset">{{__('footer.masters')}}</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">another</a>
                                    </p>
                                    <p>
                                        <a href="#!" class="text-reset">{{__('footer.help')}}</a>
                                    </p>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4 font-weight-bolder">
                                        {{__('footer.contacts')}}
                                    </h6>
                                    <p><i class="fa fa-home me-3"></i> {{__('footer.address')}}</p>
                                    <p>
                                        <i class="fa fa-envelope me-3"></i>
                                      {{__('footer.email')}}
                                    </p>
                                    <p><i class="fa fa-phone me-3"></i> {{__('footer.phone')}}</p>
                                    <p><i class="fa fa-print me-3"></i> {{__('footer.fax-number')}}</p>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </div>
                    </section>
                </footer>
                <!-- Footer -->
            </div>
        </footer>
    </div>
</body>
</html>
