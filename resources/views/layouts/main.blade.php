<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toast/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
@livewireStyles

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="/how-we-work">How we work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/free-samples">Free samples</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('price') }}">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            @yield('content')

        </main>
        <div class="order-banner my-3 bg-primary text-white">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h3 class="text-center mb-3">Order Now and get your order in less than 24hrs</h3>
                        <div class="text-center">
                            <a class="btn btn-secondary rounded-pill text-white px-3"
                                href="{{ route('create.order') }}">Make an
                                order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="footer" class="py-5 bg-primary mt-5">
            <footer>
                <div class="container">
                    <div class="row text-white">
                        <div class="col-md-6 mb-3">
                            <div class="display-6"> <i class="fa fa-graduation-cap"></i> LegendaryWriters
                                <small>.com</small> </div>
                        </div>
                        <div class="col-md-3">
                            <div><a href="#" class="text-white">About us</a></div>
                            <div><a href="#" class="text-white">Prices</a></div>
                            <div><a href="#" class="text-white">Terms and conditions</a></div>
                        </div>
                        <div class="col-md-3">
                            <div><a href="#" class="text-white">Contact us</a></div>
                            <div><a href="#" class="text-white">Free Samples</a></div>
                            <div><a href="#" class="text-white">Refund Plolicy</a></div>
                        </div>
                    </div>
                    <hr class="text-white fw-bold">
                    <div class="row text-white justify-content-between">
                        <div class="col-md-6 mb-3">
                            &copy; <script>
                                document.write(new Date().getFullYear())
                            </script> - <i class="fa fa-graduation-cap"></i> LegendaryWriters. All rights Reserved
                        </div>
                        <div class="col-md-6 justify-self-end">
                            <img src="{{ asset('images/pay-now.png') }}" style="height: 50px" class="img-fluid"
                                alt="payment methods">
                        </div>
                    </div>
                </div>
            </footer>

        </section>



        <div class="cookie-container">
            <div class="container py-3">
                <p>
                    We use cookies in this website to give you the best experience on our site and show you relevant
                    ads.
                    To find out more ,read our <a href="{{ route('terms') }}">Terms and coditions</a> and <a
                        href="{{ route('cookie-policy') }}">cookie policy</a>.
                </p>
                <button class="cookie-btn btn btn-secondary px-4">okay</button>
            </div>
        </div>


        <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('toast/toastr.min.js') }}"></script>
        <script src="{{ asset('main.js') }}"></script>

        @livewireScripts
        <script>
            window.livewire.on('guest-sent',()=>{
  toastr.success("Email sent successfully!");
    });
        </script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6248502f2abe5b455fc39214/1fvl7iepd';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
        </script>
        <!--End of Tawk.to Script-->
</body>

</html>