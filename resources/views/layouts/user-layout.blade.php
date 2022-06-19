<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>Apartment Alinna</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
{{-- <link href="//db.onlinewebfonts.com/c/aec907da6ddc0232418067ecacb324a2?family=Noto+Sans+Lao" rel="stylesheet" type="text/css"/> --}}
<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('../css/style.css') }}">
<!-- Font Awesome Icons -->
{{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="{{ asset('../css/all.min.css') }}">
<script src="{{ asset('../js/all.min.js') }}"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200" style="font-family: 'Noto Sans Lao', sans-serif;">
  
  
  <!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
        Apartment Alinna
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">

        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="/">
            <i class="fa fa-home me-1"></i>
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ໜ້າຫຼັກ</p>
          </a>
        </li>

        <li class="nav-item dropdown dropdown-hover mx-2">
          <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-address-card"></i> &nbsp;
             ກ່ຽວກັບ
            <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
          </a>
          <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
            
            <div class="d-none d-lg-block">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">ຕິດຕໍ່ພວກເຮົາ</h6>
              <a href="/contact" class="dropdown-item border-radius-md"><span>ຕິດຕໍ່ພວກເຮົາ</span></a>
              <a href="/aboutus" class="dropdown-item border-radius-md"><span>ກ່ຽວກັບພວກເຮົາ</span></a>
            </div>

            <div class="d-lg-none">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">ຕິດຕໍ່ພວກເຮົາ</h6>
              <a href="/contact" class="dropdown-item border-radius-md"><span>ຕິດຕໍ່ພວກເຮົາ</span></a>
              <a href="/aboutus" class="dropdown-item border-radius-md"><span>ກ່ຽວກັບພວກເຮົາ</span></a>
            </div>

          </div>
        </li>

        @auth
          @if (Auth::user()->roles()->get()->pluck('id')  == "[1]")
          <li class="nav-item ms-lg-auto">
            <a class="nav-link nav-link-icon me-2" href="{{ route('admin.index') }}">
              <i class="fa-solid fa-right-to-bracket"></i>
              <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ກັບໜ້າເກົ່າ</p>
            </a>
          </li>
          @elseif (Auth::user()->roles()->get()->pluck('id')  == "[2]")
            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">ກັບໜ້າເກົ່າ</a>
          @elseif (Auth::user()->roles()->get()->pluck('id')  == "[3]")
            <a href="" class="text-sm text-gray-700 dark:text-gray-500 underline">ກັບໜ້າເກົ່າ</a>
          @elseif (Auth::user()->roles()->get()->pluck('id')  == "[4]")
            {{-- <a href="{{ route('admin.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ກັບໜ້າເກົ່າ</a> --}}
          @endif
        @else
            
        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="{{ route('login') }}">
            <i class="fa-solid fa-right-to-bracket"></i>
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ເຂົ້າສູ່ລະບົບ</p>
          </a>
        </li>
            @if (Route::has('register'))
              <li class="nav-item ms-lg-auto">
                <a class="nav-link nav-link-icon me-2" href="/register">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ສະໝັກສະມາຊິກ</p>
                </a>
              </li>
            @endif
        @endauth
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
</div>
</div>
</div>

@yield('content')


  

<footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="./assets/img/logo-ct-dark.png" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">Apartment Alinna</h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
  
  
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
  
  
  
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
  
            </ul>
          </div>
        </div>
  
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                  Terms & Conditions
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  

  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  
  
  
  
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="./assets/js/plugins/countup.min.js"></script>
  
  
  
  
  
  <script src="./assets/js/plugins/choices.min.js"></script>
  
  
  
  <script src="./assets/js/plugins/prism.min.js"></script>
  <script src="./assets/js/plugins/highlight.min.js"></script>
  
  
  
  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="./assets/js/plugins/rellax.min.js"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="./assets/js/plugins/tilt.min.js"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="./assets/js/plugins/choices.min.js"></script>
  
  
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="./assets/js/plugins/parallax.min.js"></script>
  
  
  
  
  
  
  
  
  
  
  
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="./assets/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>
  
  
  <script type="text/javascript">
  
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }
  </script>

<script>
  function preview() {
      frame.src = URL.createObjectURL(event.target.files[0]);
  }
  function clearImage() {
      document.getElementById('formFile').value = null;
      frame.src = "";
  }
</script>

  
  </body>
  
  </html>
  