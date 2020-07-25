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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #body-row {
    margin-left:0;
    margin-right:0;
}
#sidebar-container {
    min-height: 100vh;   
    background-color: #333;
    padding: 0;
}


.sidebar-expanded {
    width: 230px;
}
.sidebar-collapsed {
    width: 60px;
}


#sidebar-container .list-group a {
    height: 50px;
    color: white;
}


#sidebar-container .list-group .sidebar-submenu a {
    height: 45px;
    padding-left: 30px;
}
.sidebar-submenu {
    font-size: 0.9rem;
}


.sidebar-separator-title {
    background-color: #333;
    height: 35px;
}
.sidebar-separator {
    background-color: #333;
    height: 25px;
}
.logo-separator {
    background-color: #333;    
    height: 60px;
}


#sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
  content: " \f0d7";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}

#sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
  content: " \f0da";
  font-family: FontAwesome;
  display: inline;
  text-align: right;
  padding-left: 10px;
}
    </style>
 
</head>
<body>
    <div id="app">
<!--         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
 -->                    <!-- Left Side Of Navbar -->
<!--                     <ul class="navbar-nav mr-auto">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <button type="button" id="sidebarCollapse" class="btn btn-info">
                                    <i class="fas fa-fa align-left"></i>
                                    <span>Toggle sidebar</span>
                                </button>
                            </div>
                        </nav>
                    </ul>
 -->
                    <!-- Right Side Of Navbar -->
<!--                     <ul class="navbar-nav ml-auto">
 -->                        <!-- Authentication Links -->
<!--                         @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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

 -->    


            <!-- Start Sidebar -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown d-sm-block d-md-none">
                        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                            <a class="dropdown-item" href="#">Pendamping Desa</a>
                            <a class="dropdown-item" href="#">Profile</a>
                        </div>
                    </li>
                    
                    </ul>
                </div>


                <div class="row" id="body-row">
                    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                        <ul class="list-group">
                            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                                <small>MAIN MENU</small>
                            </li>
                            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Pendamping Desa</span>
                                    <span class="submenu-icon ml-auto"></span>
                                </div>
                            </a>
                            <div id='submenu1' class="collapse sidebar-submenu">
                                <a href="/pendamping_desa" class="list-group-item list-group-item-action bg-dark text-white">
                                    <span class="menu-collapsed">Daftar Pendamping Desa</span>
                                </a>
                                <a href="/tambah_pendamping" class="list-group-item list-group-item-action bg-dark text-white">
                                    <span class="menu-collapsed">Tambah Pendamping Desa</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                    <span class="menu-collapsed">Tables</span>
                                </a>
                            </div>
                            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-start align-items-center">
                                    <span class="fa fa-user fa-fw mr-3"></span>
                                    <span class="menu-collapsed">Profile</span>
                                    <span class="submenu-icon ml-auto"></span>
                                </div>
                            </a>
                            <div id='submenu2' class="collapse sidebar-submenu">
                                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                    <span class="menu-collapsed">Settings</span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                                    <span class="menu-collapsed">Password</span>
                                </a>
                            </div>            
                        
                        </ul>
                    </div> <!-- End Sidebar -->

                    <!-- MAIN -->
                    <div class="col">
                        
                    <main class="py-4">
                        @yield('content')
                    </main>
                    </div>
                </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
</script>
</body>
</html>
