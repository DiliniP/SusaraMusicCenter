@extends('layout.main')

@section('title', 'Susara Music Center | Shopping Cart')
@section('content')
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
                                        <a href="#" class="list-group-item" data-parent="#menu1">Login</a>

                                        <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Sign-up</a>
                                            <div class="collapse" id="menu1sub1">
                                                <a href="#" class="list-group-item" data-parent="#menu1sub1">Customer</a>
                                                <a href="#" class="list-group-item" data-parent="#menu1sub1">Student</a>

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
                        <!-- Shopping Cart Link-->
                        <a href="{{ route('shop.shoppingCart') }}" class="list-group-item d-inline-block collapsed" data-parent="#sidebar">
                          <i class="fa fa-shopping-cart"></i> Shopping Cart
                          <span class="badge badge-pill badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </a>
                    </div>
                </div>
                <main class="col-md-10 col px-5 pl-md-2 pt-2 main mx-auto">

                    <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                    <div class="page-header lead">
                        <h2>SUSARA MUSIC</h2>
                    </div>
                    <p class="lead">Life is the song Love is the melody.</p>
                    <hr>
                        <!--carousel-->
            <div class="container">
              <h1 class="text-center">CheckOut</h1><br>
                <!-- CheckOut Start -->
                  <div class="row">
                      <div class="container">
                        <div class="row">
                              <!-- Summery of Cart Start-->
                                <div class="col-md-4 order-md-2 mb-4">
                                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Your cart</span>
                                    <span class="badge badge-secondary badge-pill">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                                  </h4>
                                  <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">Product name</h6>
                                        <small class="text-muted">Brief description</small>
                                      </div>
                                      <span class="text-muted">$12</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">Second product</h6>
                                        <small class="text-muted">Brief description</small>
                                      </div>
                                      <span class="text-muted">$8</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                      <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                      </div>
                                      <span class="text-muted">$5</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between bg-light">
                                      <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small>EXAMPLECODE</small>
                                      </div>
                                      <span class="text-success">-$5</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                      <span>Total (USD)</span>
                                      <strong>$20</strong>
                                    </li>
                                  </ul>

                                  <form class="card p-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Promo code">
                                      <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              <!-- Summery of Cart End-->
                                <div class="col-md-8 order-md-1">
                                  <!-- Billing Address Start -->
                                  <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}" role="alert">
                                    {{ Session::get('error') }}
                                    <!-- <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. -->
                                  </div>
                                  <h4 class="mb-3">Billing address</h4>
                                  <form class="needs-validation" novalidate="" id="checkout-form">
                                    <div class="row">
                                      <div class="col-md-6 mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required="">
                                        <div class="valid-feedback">Valid</div>
                                        <div class="invalid-feedback">
                                          Valid first name is required.
                                        </div>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required="">
                                        <div class="invalid-feedback">
                                          Valid last name is required.
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                      <label for="email">Email</label>
                                      <input type="email" class="form-control" id="email" placeholder="you@example.com" maxlength="65"required="">
                                      <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="address">Address</label>
                                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                      <div class="invalid-feedback">
                                        Please enter your shipping address.
                                      </div>
                                    </div>

                                    <div class="mb-3">
                                      <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                      <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                    </div>

                                    <div class="mb-3">
                                      <label for="contact-no">Contact No</label>
                                      <input type="tel" class="form-control" id="contact-no" placeholder="076-5555555">
                                    </div>

                                    <div class="row">
                                      <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                          <option value="">Choose...</option>
                                          <option>United States</option>
                                          <option>Sri Lanka</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Please select a valid country.
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required="">
                                          <option value="">Choose...</option>
                                          <option>California</option>
                                          <option>Sabaragamuwa</option>
                                        </select>
                                        <div class="invalid-feedback">
                                          Please provide a valid state.
                                        </div>
                                      </div>
                                      <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="postal code" maxlength="9" required="">
                                        <div class="invalid-feedback">
                                          Zip code required.
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Billing Address End -->
                                    <hr class="mb-4">
                                    <!-- Shipping Address Start -->
                                    <h4 class="mb-3">Shipping address</h4>
                                    <form class="needs-validation" novalidate="">
                                      <div class="row">
                                        <div class="col-md-6 mb-3">
                                          <label for="firstName">First name</label>
                                          <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required="">
                                          <div class="invalid-feedback">
                                            Valid first name is required.
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <label for="lastName">Last name</label>
                                          <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required="">
                                          <div class="invalid-feedback">
                                            Valid last name is required.
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="you@example.com" maxlength="65" required="">
                                        <div class="invalid-feedback">
                                          Please enter a valid email address for shipping updates.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                        <div class="invalid-feedback">
                                          Please enter your shipping address.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                      </div>

                                      <div class="mb-3">
                                        <label for="contact-no">Contact No</label>
                                        <input type="tel" class="form-control" id="contact-no" placeholder="076-5555555">
                                      </div>

                                      <div class="row">
                                        <div class="col-md-5 mb-3">
                                          <label for="country">Country</label>
                                          <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                            <option>Sri Lanka</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please select a valid country.
                                          </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                          <label for="state">State</label>
                                          <select class="custom-select d-block w-100" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                            <option>Sabaragamuwa</option>
                                          </select>
                                          <div class="invalid-feedback">
                                            Please provide a valid state.
                                          </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                          <label for="zip">Zip</label>
                                          <input type="text" class="form-control" id="zip" placeholder="postal code" maxlength="9" required="">
                                          <div class="invalid-feedback">
                                            Zip code required.
                                          </div>
                                        </div>
                                      </div>

                                    <hr class="mb-4">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="same-address">
                                      <label class="custom-control-label" for="same-address">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shipping address is the same as my billing address
                                      </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="save-info">
                                      <label class="custom-control-label" for="save-info">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save this information for next time
                                      </label>
                                    </div>
                                    <hr class="mb-4">

                                    <h4 class="mb-3">Payment</h4>

                                    <div class="d-block my-3">
                                      <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                        <label class="custom-control-label" for="credit">
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credit card
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                        <label class="custom-control-label" for="debit">
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debit card
                                        </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                        <label class="custom-control-label" for="paypal">
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paypal
                                        </label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <!-- Card Holder Name -->
                                      <div class="col-md-6 mb-3">
                                        <label for="card-name">Name on card</label>
                                        <input type="text" class="form-control" id="card-name" placeholder="" maxlength="70" required="">
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                          Name on card is required
                                        </div>
                                      </div>
                                      <!-- Card Number -->
                                      <div class="col-md-6 mb-3">
                                        <label for="card-number">Credit card number</label>
                                        <input type="number" class="form-control" id="card-number" placeholder="" maxlength="19" required="">
                                        <div class="invalid-feedback">
                                          Credit card number is required
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-3 mb-3">
                                        <label for="card-expiry-month">Expiration Month</label>
                                        <input type="number" class="form-control" id="card-expiry-month" placeholder="Month"  min="1" max="12" required="">
                                        <div class="invalid-feedback">
                                          Expiration date required
                                        </div>
                                      </div>
                                      <div class="col-md-3 mb-3">
                                        <label for="card-expiry-year">Expiration Year</label>
                                        <input type="number" class="form-control" id="card-expiry-year" placeholder="Year" maxlength="4" required="">
                                        <div class="invalid-feedback">
                                          Expiration date required
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="card-cvc">CVV</label>
                                        <input type="number" class="form-control" id="card-cvc" placeholder="CVV" maxlength="3" required="">
                                        <div class="invalid-feedback">
                                          Security code required
                                        </div>
                                      </div>
                                    </div>
                                    <hr class="mb-4">
                                    {{ csrf_field() }}
                                    <button class="btn btn-primary btn-lg" type="submit">Confirm & Pay</button>
                                  </form>
                                  <!-- Shipping Address End -->
                                </div>
                              </div>
                      </div>
                  </div>
                <!-- CheckOut End -->
            </div>
            <!--carousel end -->


    <br>
    <br>
    @endsection

    @section('scripts')
      <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
      <script type="text/javascript" src="{{ URL::to('js/checkout.js') }}"></script>
    @endsection