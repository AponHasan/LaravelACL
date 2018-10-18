<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.14/sweetalert2.min.js"></script>
    <!-- Fonts -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
</head>
<body class="page-header-fixed">
    <div id="app">
<div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  
                  <div class="logo">
                     <img  src="{{URL::asset('logo4.png')}}" height="50px" >
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                           <input type="text" class="form-control" placeholder="Search...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Search</button>
                           </span>
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: #fff;padding-top: 4px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item btn btn-danger btn-sm" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>                            
                            </li>                            
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>

    <div class="page-content">
        <div class="row">
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="/home"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> WareHouse
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="/warehouse/create">Stock</a></li>
                            <li><a href="#">Loan</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="glyphicon glyphicon-stats"></i> Accounts </a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-record"></i> Employee</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-pencil"></i> H.R Admin</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Profile</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
          </div>
          <div class="col-md-10">
            
                @yield('content')
            
          </div>
        </div>
    </div>

    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        @yield('script')
    </div>                                      
</body>
</html>
