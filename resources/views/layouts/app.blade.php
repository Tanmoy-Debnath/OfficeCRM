<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('SOUTHEAST INTEGRATED SOLUTION') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>










    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand btn btn-success" href="{{ url('/login') }}">



                    {{ 'Customer Relationship Management Software of SEIS' }}






                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                            <li class="nav-item nav-link">
                                <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            <!--
                            <br>
                            <li class="nav-item nav-link">
                                <a class="nav-link btn btn-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>


                          






                            <li class="nav-item dropdown d-none d-xl-inline-block">
                                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                    <button class="btn btn-success">Swtich Login !</button>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                                    <a class="dropdown-item p-0">
                                        <div class="d-flex border-bottom">
                                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray">Login as -></i>
                                            </div>


                                        </div>
                                    </a>
                                    <a href="{{ route('receptionistLogin-form') }}" class="dropdown-item mt-2">
                                        Receptionist
                                    </a>
                                    <a class="dropdown-item">
                                        Change Password
                                    </a>
                                    <a class="dropdown-item">
                                        Check Inbox
                                    </a>
                                    <a class="dropdown-item">
                                        Sign Out
                                    </a>
                                </div>
                            </li>



                          

                     <!---   <br>
                            <li class="nav-item">
                                <a class="nav-link btn btn-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        -->
                        
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
