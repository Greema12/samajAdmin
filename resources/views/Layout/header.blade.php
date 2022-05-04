<!DOCTYPE html>
<html lang="en">
    <head>
        <!--this link is use for active n deactive status for javascript   -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
  
        <meta charset="utf-8" />
        <title>Adminto - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
         


<link href="{{asset('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
       
         <!-- App favicon -->
        
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- dropify -->
        <link href="{{asset('assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Morris Chart-->
        <link rel="stylesheet" href="{{asset('assets/libs/morris-js/morris.css')}}" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Plugins css -->
      <!--  <link href="{{asset('assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('assets/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
 -->
 <!--  this 2 links are use for text editor field. -->   
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>



<!-- <link href="{{asset('assets/assets/libs/multiselect/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
 -->

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
 
            <!-- Topbar Start -->
            <div class="navbar-custom">
                   <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                           
                             <ul class="navbar-nav ml-auto">
           @guest
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
            
                     </a>  
                      

                    </ul>
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="{{asset('assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">

                            <i class="fas fa-home">&nbsp;&nbsp;</i>

                              Dashboard
                      
                        </h4>
                    </li>
        
                </ul>
            </div>
        </div>
            <!-- end Topbar -->

               