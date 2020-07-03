<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ryan') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/be3bc09dcd.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">


    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">




</head>


<body>

    <div id="app">
        <!-- <nav class="navbar  navbar-expand-md navbar-light bg-white shadow-sm mb-0">
            <div class="container d-flex justify-content-between-fluid">


                <div>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SportPoint') }}
                    </a>

                </div>
                <div class="menu flex justify-content-around">

                    <a href="./about">About</a>


                    <a>123</a>

                </div>




            </div>



        </nav> -->


        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent" id="topnavbar">
            <a class="navbar-brand text-white" href="/">{{ config('app.name', 'Ryan') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-hover="dropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./about">About <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="">Link</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="#">
                                <img src="{{ asset('pic/fb.svg') }}">
                                FB
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="#">
                                <img src="{{ asset('pic/ig.svg') }}">
                                IG
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-dark" href="#">More Informaion</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>


            </div>
        </nav>


        <div class="wrapper">



            <!-- Page Content Holder -->
            <div id="content">

                <main>
                    @yield('content')
                </main>

            </div>

        </div>

    </div>
    <a id="button"></a>



    <!--Footer-->

    <div class="footer">
        <hr>
        <div class="text-center">Copyright 2020 | All Rights Reserved.</div>
        <div class="text-center">If there is any infringement, please inform love99067333@gmail.com.I'll remove immediately</div>

    </div>

</body>

</html>