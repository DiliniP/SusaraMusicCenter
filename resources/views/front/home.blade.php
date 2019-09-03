@extends('layout.main')

@section('content')
    <!--side bar -->
    <div class="col-3">

    </div>
        <div class="container-fluid">
            <div class="row d-flex d-md-block flex-nowrap wrapper">
                <div class="col-md-2 float-left col-2 pl-0 pr-0 collapse width " id="sidebar" >
                        <div class="list-group border-0 card text-center text-md-left">
                        
                            <a href="#menu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                aria-expanded="false"><i class="fa fa-user-circle-o"></i> <span class="d-none d-md-inline">Join</span> </a>
                        
                                <div class="collapse" id="menu">
                        @guest 
                                        <a href="{{ route('login') }}" class="list-group-item" data-parent="#menu1">Login</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="list-group-item" data-parent="#menu1">Register</a>
                                            <div class="collapse" id="menu1sub1">
                                                
                                            </div>
                                            @endif

                                            @else
                                            
                                    </div>
                        @endguest

                            <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Products</span> </a>

                            <div class="collapse" id="menu1">
                                <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Instrument </a>
                                <div class="collapse" id="menu1sub1">
                                    <a href="{{url("/percution")}}" class="list-group-item" data-parent="#menu1sub1">Percution</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1sub1">Strings</a>
                                    <a href="#" class="list-group-item" data-parent="#menu1sub1">wind</a>
                                    <a href="#menu1sub1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Others
                                    </a>
                                    <!--If neccassary u can add sub-sub categories here-->
                                    <div class="collapse" id="menu1sub1sub1">
                                        <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem </a>
                                        <a href="#" class="list-group-item" data-parent="#menu1sub1sub1">Subitem </a>
                                    </div>

                                </div>
                                <a href="#" class="list-group-item" data-parent="#menu1">Electronics</a>
                                <a href="#" class="list-group-item" data-parent="#menu1">Parts</a>
                            </div>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-book"></i> <span class="d-none d-md-inline">Tutorials</span></a>
                        
                        <a href="{{url('tuner/')}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Tuner</span></a>
                        <!-- <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Message</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Events</span></a>
                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Add</span></a>
                        <a href="{{url("/tuner/")}}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Add</span></a> -->
                       
                       <!-- Shopping Cart Link-->
    
                        <a href="{{ route('shop.shoppingCart') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                          <i class="fa fa-shopping-cart"></i> Shopping Cart
                          <span class="badge badge-pill badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </a>

                        @guest
                        @if (Route::has('register'))

                        @endif
                        @else
                        <a href="{{ route('edit.profile') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Manage Your Profile
                        <br>
                        {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                        <br>
                        
                        </span></a> 
                        @endguest

                        <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-phone"></i> <span class="d-none d-md-inline">Contact Us</span></a>
                    </div>
                </div>
                <main class="col-md-150 col px-10 pl-md-2 pt-2 main mx-auto">

                    <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                    <div class="page-header lead">
                        <h2>SUSARA MUSIC</h2>
                    </div>
                    <p class="lead">Life is the song Love is the melody.</p>
                    <hr>

                    <div class="row">



                        <!--carousel-->
            <div class="container">
                <div class="carousel slide carousel-fade" data-ride="carousel" id="control"style="margin-bottom:10px" >

                    <ol class="carousel-indicators">

                        <li data-target="#control" data-slide-to="0"></li>
                        <li data-target="#control" data-slide-to="1"></li>
                        <li data-target="#control" data-slide-to="2"></li>

                    </ol>

                    <div class="carousel-inner">

                        <div class="carousel-item active" data-intervel="5000">
                            <img src="{{asset('dist/img/1.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h4>LIFE</h4>
                                <p>Life is a song Love is the meolody </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="5000">
                            <img src="{{asset('dist/img/2.png')}}" class="d-block w-100" alt="...">

                            <div class="carousel-caption">
                                <h4>MUSIC</h4>
                                <p>Music is my drug </p>
                            </div>
                        </div>

                        <div class="carousel-item" data-interval="5000">
                            <img src="{{('dist/img/3.png')}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption">
                                <h4>CHOICE</h4>
                                <p>Your all choice is our responsibility</p>
                            </div>
                        </div>

                        <!--controllers-->
                        <a href="#control" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>

                        <a href="#control" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>

                </div>
            </div><!--carousel end -->


            <div>

                 <!--Add your code here-->
                 <br>
                 <br>

            </div>
    @endsection
