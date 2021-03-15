<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>


        <link rel="icon" type="image/png" href=" {{ asset('storage/'.config('settings.site_favicon')) }} ">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
            name='viewport' />
        <!--     Fonts and icons     -->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap5/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/paper-dashboard.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/css/font-awesome-5.12.0.min.css') }}">

        @yield('custom-css')
    </head>

    <body>

        <div class="wrapper ">
            <div class="sidebar" data-color="white" data-active-color="danger">
                <div class="logo">
                    <a href="#" class="simple-text logo-mini">
                        <div class="logo-image-small">

                            <img src="">
                        </div>
                        <!-- <p>CT</p> -->
                    </a>
                    <a href="#" class="simple-text logo-normal">

                        <!-- <div class="logo-image-big">
                      <img src="../assets/img/logo-big.png">
                    </div> -->
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="link_backend ">
                            <a href="" class="link-sidebar">
                                <img class="icon-sidebar" src="{{asset('img/backend/home/home-icon.png')}}">
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="link_backend">
                            <a href="">
                                <i class="fas fa-cogs"></i>
                                <p>Setting</p>
                            </a>
                        </li>
                        <li class="link_backend">
                            <a href="" >
                                <i class="nc-icon nc-diamond"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="link_backend">
                            <a href="#">
                                <i class="nc-icon  nc-tag-content"></i>
                                <p>Branch</p>
                            </a>
                        </li>
                        <li class="link_backend">
                            <a href="#">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>Comment</p>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="javascript:;"></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <form>
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="nc-icon nc-zoom-split"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn-magnify" href="javascript:;">
                                        <i class="nc-icon nc-layout-11"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Stats</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item btn-rotate dropdown">
                                    <a class="nav-link " href="">
                                        <i class="nc-icon nc-button-power"></i>
                                        Log Out
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-rotate image-user" href="javascript:;">
                                        <div class="photo-user"><img src=""></div>
                                        <div class="user-infor">
                                            <span class="user-name">Phong Pilo</span>
                                            <b class="caret"></b>
                                        </div>
                                        <div>
                                            <span class="d-lg-none d-md-block">Account</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')

            </div>

        </div>


        <!--   Core JS Files   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script scr="{{ asset('vendor/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/js/template/index.js') }}"></script>
        <script scr="{{ asset('vendor/js/core/popper.min.js') }}"></script>
        <script scr="{{ asset('vendor/bootstrap5/js/bootstrap.min.js') }}"></script>
        <script scr="{{ asset('vendor/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>


        <!--  Google Maps Plugin    -->

        <!-- Chart JS -->
        <script scr="{{ asset('vendor/js/plugins/chartjs.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script scr="{{ asset('vendor/js/plugins/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script scr="{{ asset('vendor/js/paper-dashboard.min.js') }}"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script scr="{{ asset('js/main.js') }}"></script>




        @yield('custom-js')
    </body>

    </html>
