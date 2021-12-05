<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Eden Travel Template"> 
    <meta name="author" content="Themefisher.com">
    <title>Dream House</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Ionic Icon Css -->
    <link rel="stylesheet" href="{{ url('assets/plugins/Ionicons/css/ionicons.min.css') }}">
    <!-- Flaticon Css -->
    <link rel="stylesheet" href="{{ url('assets/plugins/flaticon/font/flaticon.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ url('assets/plugins/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/nice-select/nice-select.css') }}">
    <!-- DATE PICKER -->
    <link href="{{ url('assets/plugins/bootstrap-datepicker-master/bootstrap-datepicker.min.css') }}" type="text/css" rel="stylesheet" />
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ url('assets/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ url('assets/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/use.fontawesome.com/releases/v5.7.2/css/all.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <!-- Styles -->
 <!--  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
  <style>
  div.stars {
  width: 270px;
  display: inline-block;
  }
  /*google map*/
  #mapahme {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

  .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}

  </style> 
</head>
<body>
  <header class="navigation">
    <nav class="navbar navbar-expand-lg bg-white w-100 p-0" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/images/dreamhouse.png') }}" width="72px" alt="Eden" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}"  aria-haspopup="true" aria-expanded="false">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}"aria-haspopup="true" aria-expanded="false">COntact us</a>
                <!-- <ul class="dropdown-menu" aria-labelledby="dropdown03">
                  <li><a class="dropdown-item" href="booking-step1.html">Select Room</a></li>
                  <li><a class="dropdown-item" href="booking-step2.html">Make Resrvation</a></li>
                  <li><a class="dropdown-item" href="booking-step3.html">Payment</a></li>
                  <li> <a class="dropdown-item" href="confirmation.html">Confirmation</a></li>
                </ul> -->
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('gallery') }}"  aria-haspopup="true" aria-expanded="false">Gallery</a>  
              </li>
             <!--  <li class="nav-item dropdown form-inline my-2 my-md-0 ml-lg-4">
                <a class="nav-link dropdown-toggle btn btn-main" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                  @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                </ul>
              </li> -->
             @if (Auth::guest())
              <form class="form-inline my-2 my-md-0 ml-lg-4">
                <a class="btn btn-main" href="{{ route('register') }}">Register</a>&nbsp;&nbsp;
                <a class="btn btn-main" href="{{ route('login') }}">Login</a>
              </form>
              @else

              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
                       
            </ul>
              @endif
          </div>
        </div>
    </nav>
</header>
</body>