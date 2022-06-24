<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Hello world') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/83a0cd4555.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     {{-- In line CSS cause im too lazy to put it in a seperate CSS file --}}
    <style>
        .sidebar-nav ul li a {

            font-size: 26px;

            text-decoration: none;

            display: block;

            padding: 6px 10px;

            transition: 0.5s;

        }

        .sidebar-nav ul li a:hover {

            background-color: #eeeeee;

            border-radius: 4px;

        }

        .sidebar-nav .offcanvas {

            width: 220px;

            border: none;

        }

        .sidebar-nav .offcanvas ul li a span {

            font-size: 18px;

            position: relative;

            top: -4px;

            transition: 0.5s;

        }

        .sidebar-nav .offcanvas.show ul li a:hover span {

            padding-left: 10px;

        }

        .sidebar-nav .dropdown-toggle::after {

            position: relative;

            top: 3px;

        }
    </style>


</head>

<body>

    {{-- SIDEBAR --}}
    <div id="app">
        <div class="sidebar-nav">
            <div class="navbar navbar-dark bg-dark fixed-top">
                
                
                <div class="container">
                    {{-- Mobile menu toggle button --}}
                    
                    <div class="navbar-brand">
                        <span>Careteq</span>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                   

                    {{-- Menu List --}}
                    <div class="bg-light offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">

                                <li><a href="#"> <span class="item-text">Home</span></a></li>

                                <li><a href="#"><span class="item-text">Contact Us</span></a></li>

                                <li><a href="#"><span class="item-text">About Us</span></a></li>

                                <li><a href="#"> <span class="item-text">Products</span></a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a href="#"><span class="item-text">Send</span></a></li>

                                <li><a href="#"><span class="item-text">Share</span></a></li>

                                <li><a href="#"><span class="item-text">Settings</span></a></li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Page Content --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- JS Script don't worry about it --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



</body>

</html>
