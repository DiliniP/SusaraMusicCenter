<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/loginNew.css">
    <title>Susara Music</title>
</head>
<body>

        <body>

            <!--side bar -->
            <div class="col-3">

            </div>
                <div class="container-fluid">
                    <div class="row d-flex d-md-block flex-nowrap wrapper">
                        <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
                                <div class="list-group border-0 card text-center text-md-left">

                                    <a href="#menu" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                        aria-expanded="false"><i class="fa fa-user-circle-o"></i> <span class="d-none d-md-inline">Join</span> </a>

                                        <div class="collapse" id="menu">
                                                <a href="{{ route('login') }}" class="list-group-item" data-parent="#menu1" data-toggle="modal" data-target="#elegantModalForm">Login</a>

                                                <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Sign-up</a>
                                                    <div class="collapse" id="menu1sub1">
                                                        <a href="{{ route('register') }}" class="list-group-item" data-parent="#menu1sub1"  data-toggle="modal" data-target="#exampleModal">Customer</a>
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></button> -->

                                                        <!-- <a href="#" class="list-group-item" data-parent="#menu1sub1">Student</a> -->

                                                    </div>

                                            </div>

                                    <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                                        aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="d-none d-md-inline">Products</span> </a>

                                    <div class="collapse" id="menu1">
                                        <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Instrument </a>
                                        <div class="collapse" id="menu1sub1">
                                            <a href="#" class="list-group-item" data-parent="#menu1sub1">Percution</a>
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
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-phone"></i> <span class="d-none d-md-inline">Contact</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-clock-o"></i> <span class="d-none d-md-inline">Tuner</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Message</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-gear"></i> <span class="d-none d-md-inline">Add</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-calendar"></i> <span class="d-none d-md-inline">Events</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-envelope"></i> <span class="d-none d-md-inline">Add</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-bar-chart-o"></i> <span class="d-none d-md-inline">Add</span></a>
                                <a href="#" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-star"></i> <span class="d-none d-md-inline">Add</span></a>
                            </div>
                        </div>
                        <main class="col-md-10 col px-5 pl-md-2 pt-2 main mx-auto">

                            <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                            <div class="page-header lead">
                                <h2>SUSARA MUSIC</h2>
                            </div>
                            <p class="lead">Life is the song Love is the melody.</p>
                            <hr>

                            <div class="row">



                                <!--carousel-->
                    <div class="container">
                        <div class="carousel slide carousel-fade" data-ride="carousel" id="control"style="margin-bottom:20px" >

                            <ol class="carousel-indicators">

                                <li data-target="#control" data-slide-to="0"></li>
                                <li data-target="#control" data-slide-to="1"></li>
                                <li data-target="#control" data-slide-to="2"></li>

                            </ol>

                            <div class="carousel-inner">

                                <div class="carousel-item active" data-intervel="5000">
                                    <img src="images/1.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h4>LIFE</h4>
                                        <p>Life is a song Love is the meolody </p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-interval="5000">
                                    <img src="images/2.png" class="d-block w-100" alt="...">

                                    <div class="carousel-caption">
                                        <h4>MUSIC</h4>
                                        <p>Music is my drug </p>
                                    </div>
                                </div>

                                <div class="carousel-item" data-interval="5000">
                                    <img src="images/3.png" class="d-block w-100" alt="...">
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

                            <div class="container-fluid">
                                <footer class="page-footer font-small bg-dark pt-4">

                                        <!-- Footer Links -->
                                        <div class="container text-center text-md-left">

                                          <!-- Footer links -->
                                          <div class="row text-center text-md-left mt-3 pb-3">

                                            <!-- Grid column -->
                                            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                                              <p>Implement a web based music-learning environment with instrument simulator and an online instrument retail system. We mainly target to
                                                  improve knowledge about music and vend music instrument to customer.
                                                </p>
                                            </div>
                                            <!-- Grid column -->

                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                                              <p>
                                                <a href="#!">Percution</a>
                                              </p>
                                              <p>
                                                <a href="#!">Strings</a>
                                              </p>
                                              <p>
                                                <a href="#!">Wind</a>
                                              </p>
                                              <p>
                                                <a href="#!">Electronics</a>
                                              </p>
                                            </div>
                                            <!-- Grid column -->

                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                                              <p>
                                                <a href="#!">Your Account</a>
                                              </p>
                                              <p>
                                                <a href="#!">Become an Affiliate</a>
                                              </p>
                                              <p>
                                                <a href="#!">Shipping Rates</a>
                                              </p>
                                              <p>
                                                <a href="#!">Help</a>
                                              </p>
                                            </div>

                                            <!-- Grid column -->
                                            <hr class="w-100 clearfix d-md-none">

                                            <!-- Grid column -->
                                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3  text-light">
                                              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                                              <p>
                                                <i class="fa fa-home mr-3"></i> susara music, Dambula road,kurunegala</p>
                                              <p>
                                                <i class="fa fa-envelope mr-3"></i>susara@gmail.com</p>
                                              <p>
                                                <i class="fa fa-phone mr-3"></i>+94 776960232</p>
                                              <p>
                                                <i class="fa fa-print mr-3"></i>+94 37 567 89</p>
                                            </div>
                                            <!-- Grid column -->

                                          </div>
                                          <!-- Footer links -->

                                          <hr>

                                          <!-- Grid row -->
                                          <div class="row d-flex align-items-center">

                                            <!-- Grid column -->
                                            <div class="col-md-7 col-lg-8">

                                              <!--Copyright-->
                                              <p class="text-center text-md-left">© 2019 Copyright:
                                                <a href="#">
                                                  <strong > NDW Creations</strong>
                                                </a>
                                              </p>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-5 col-lg-4 ml-lg-0">

                                              <!-- Social buttons -->
                                              <div class="text-center text-md-right">
                                                <ul class="list-unstyled list-inline">
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-facebook-f"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-twitter"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-google-plus"></i>
                                                    </a>
                                                  </li>
                                                  <li class="list-inline-item">
                                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                                      <i class="fa fa-linkedin"></i>
                                                    </a>
                                                  </li>
                                                </ul>
                                              </div>

                                            </div>
                                            <!-- Grid column -->

                                          </div>
                                          <!-- Grid row -->

                                        </div>
                                        <!-- Footer Links -->

                                      </footer>
                                      <!-- Footer -->
                            </div>

                            <!-- registration form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="glyphicon glyphicon-eye-open" id="exampleModalLabel">Register New Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal " action="{{route('custom.register')}}" method="post">
                @csrf
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-8">

                             <!-- <div class="form-group">
                                <input type="text" class="form-control" name="customerId" placeholder="CustomerId*" value="{{old('customerId')}}" />
                            </div> -->

                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name *" value="{{old('fname')}}" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="last Name *" value="{{old('lname')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email Address *" value="{{old('email')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile No*" value="{{old('mobile')}}" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Home No"  name="no" value="{{old('no')}}" name="no" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Street *"  name="street"  value="{{old('street')}}"/>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City *"  value="{{old('city')}}"  name="city"/>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" name="password_confirmation"/>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <button type="submit" class=" btn btn-primary btn-block">Register</button>

                </div>
            </form>
    </div>
  </div>
</div>
              <!-- end of registration form -->

              <!-- Login form -->
        <!-- Modal -->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
              Password?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
            Sign Up</a></p>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
              <!-- end of login form -->

</div>
  <main class="py-4">
     @yield('content')
  </main>
</div>

  </div><!--side bar -->

                <div class="form">
                    <div class="note">
                        <p>User Registration</p>
                    </div>
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">
                                {{$error}}
                            </p>
                        @endforeach
                    @endif

                </div>
          </div>


</div>




                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                </body>

</body>
</html>
