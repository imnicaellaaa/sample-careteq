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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    {{-- <div class="navbar-brand">
                        <span>CareTeQ</span>
                    </div> --}}

                    {{-- Menu List --}}
                    <div class="bg-light offcanvas offcanvas-start shadow" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">

                                <div>
                                    <h1 class="text-center fs-5 mb-3">logo here</h1>
                                </div>

                                {{-- Profile Image --}}
                                <li>
                                    <div class="d-flex-inline">
                                        @foreach ($admin as $admins )
                                        <img src="/images/uploads/admin_avatars/{{ $admins->adminprofile_photo }}"
                                            class="rounded mx-auto d-block" style="width:150px; height:150px;">


                                        <p class="text-center fs-6 text-black fw-bold mt-2">{{$admins->name}}
                                        @endforeach</p>
                                        <a class="text-center fs-6 mt-2" href="">
                                            <i class="fa-solid fa-pen-to-square"></i> Edit Profile</a>
                                    </div>

                                </li>

                                <hr>

                                <span></span>

                                <h6
                                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>Admin Actions</span>
                                    <a class="link-secondary" href="#" aria-label="Add a new report">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>

                                <li class="nav-item"><a href="http://25.11.205.10/admin/working_hours/create/"><span class="item-text"><i
                                    class="fa fa-hourglass-half"></i> Working Hours</span></a></li>

                                <li class="nav-item"><a href="http://25.11.205.10/admin/appointments/create/?patientdetails=?patientid={{$value->id}} ?=patientname{{$value->firstname}} {{$value->lastname}}"><span class="item-text"><i
                                    class="fa-solid fa fa-calendar"></i> Appointments</span></a></li>

                                <li class="nav-item"><a href="http://25.11.205.10/admin/employees"><span class="item-text"><i
                                                class="fa-solid fa-user-doctor"></i> Doctors</span></a></li>

                                {{--  <li><a href="#"><span class="item-text"><i class="fa-solid fa-book-medical"></i>
                                            Reports</span></a></li>  --}}

                                <li><a href="{{ url('admin/patientlist')}}"><span class="item-text"><i class="fa-solid fa-head-side-mask"></i>
                                            Patients</span></a></li>

                                <li><a href="{{ url('admin/prescriptionlist')}}"><span class="item-text"><i class="fa-solid fa-file-medical"></i>
                                            Prescriptions</span></a></li>

                                <h6
                                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                    <span>Actions</span>
                                    <a class="link-secondary" href="#" aria-label="Add a new report">
                                        <span data-feather="plus-circle"></span>
                                    </a>
                                </h6>

                                <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span class="item-text text-danger"><i
                                                class="fa-solid fa-arrow-right-from-bracket"></i> Logout</span></a></li>
                                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

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
