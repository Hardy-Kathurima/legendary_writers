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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toast/toastr.min.css') }}">
</head>
@livewireStyles

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
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
                            <a class="nav-link" href="tel:0752314563">Call Us !</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/how-we-work">How we work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/free-samples">Free samples</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our thoughts</a>
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

        <main class="py-4">
            @yield('content')
        </main>
        <section class="thankyou">
            <div class="container-lg">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="display-3 text-primary fw-bolder mb-3">Thank you for trusting us with your essay
                        </h2>
                        <p class="lead text-muted">Let us cover any of your writing needs! </p>
                        <div class="mb-4"><a class="btn btn-primary btn-lg" href="{{ route('create.order') }}">Place
                                your order</a></div>
                    </div>
                </div>
            </div>

        </section>
        <section class="bg-primary text-white" id="footer">
            <div class="container-lg">
                <div class="row justify-content-between mb-5">
                    <div class="col-md-4">
                        <h3 class="mb-3">IntelWriters</h3>
                        <p>We are a diverse group of graduates who provide students with professional writing and
                            homework
                            assistance. Our team consists of seasoned writers with various writing experiences and
                            academic
                            credentials. We work hard to make your academic life easier, and it gives us great pleasure
                            to see
                            you
                            graduate.</p>

                    </div>
                    <div class="col-md-3">
                        <h3 class="fw-bold">Legal Info</h3>
                        <p>Moneyback Gurantee</p>
                        <p>Terms & Conditions</p>
                        <p>Privacy Policy</p>
                        <p>No plagiarism guarantee</p>
                        <p>Paper revision policy</p>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="my-3">
                            <h3 class="fw-bold">About us</h3>
                            <p>After graduating from college and reflecting on the problem we had combining work and
                                assignment
                                deadlines, the notion for help with my homework arose. We established our business to
                                assist
                                students who are smart enough to delegate some of their schoolwork and focus on other
                                essential
                                aspects of their lives. Since our inception, we've expanded to a small team of highly
                                skilled
                                and knowledgeable individuals who are available to assist you with your schoolwork 24
                                hours a
                                day, seven days a week. We will achieve amazing things with your trust and our
                                assistance.</p>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="fw-bolder">
            <div class="py-3 ps-4">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script> | intelWriters All rights Reserved
            </div>
        </section>



        <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('toast/toastr.min.js') }}"></script>


        @livewireScripts

        <script>
            window.livewire.on('not-connected',()=>{
                    toastr.error("Please Check Your Connection and try again");
            });
            window.livewire.on('guest-sent',()=>{
                            toastr.success("Email Sent Successfully!");
            });
        </script>
</body>

</html>