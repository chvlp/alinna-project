<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="../../../../../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../../../../../assets/img/favicon.png">

    <title>Apartment Alinna</title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    {{-- <link href="//db.onlinewebfonts.com/c/aec907da6ddc0232418067ecacb324a2?family=Noto+Sans+Lao" rel="stylesheet" type="text/css"/> --}}
    <!-- Nucleo Icons -->
    <link href="../../../../../../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../../../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('.../../../../../../../css/style.css') }}">
    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('.../../../../../../../css/all.min.css') }}">
    <script src="{{ asset('.../../../../../../../js/all.min.js') }}"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->



    <link id="pagestyle" href="../../../../../../../assets/css/material-kit.css?v=3.0.2" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200" style="font-family: 'Noto Sans Lao', sans-serif;">


    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip"
                            title="Designed and Coded by Creative Tim" data-placement="bottom">
                            Apartment Alinna
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">

                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="{{ route('User.User.index') }}">
                                        <i class="fa fa-home me-1"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ໜ້າຫຼັກ</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="/aboutus">
                                        <i class="fa-solid fa-address-card"></i> &nbsp;
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="ກັບໄປຍັງໜ້າຫຼັກ">ກ່ຽວກັບອາພາດເມັ້ນ</p>
                                    </a>
                                </li>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="ອອກຈາກລະບົບ">ອອກຈາກລະບົບ</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    @yield('content')


    @if ($message = Session::get('success'))
    <span style="color: #0fa034"><i class="fas fa-check"></i> </span>
    <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="card-body p-3 pb-0">
            <div class="alert alert-primary alert-dismissible text-white" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="material-icons text-success me-2">check</i>
                    <span class="me-auto font-weight-bold">ສຳເລັດ</span>
                </div>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <hr class="horizontal dark m-0">
                <div class="toast-body">{{ $message }}.</div>
            </div>
        </div>
    </div>
@endif

    <footer class="footer pt-5 mt-5">
        <div class="container">
            <div class=" row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-dark my-4 text-sm font-weight-normal">
                           Alinna Apartment <a >Created by GROUP 082</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <!--   Core JS Files   -->
    <script src="../../../../../../../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../../../../../../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../../../../../assets/js/plugins/perfect-scrollbar.min.js"></script>




    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="../../../../../../../assets/js/plugins/countup.min.js"></script>





    <script src="../../../../../../../assets/js/plugins/choices.min.js"></script>



    <script src="../../../../../../../assets/js/plugins/prism.min.js"></script>
    <script src="../../../../../../../assets/js/plugins/highlight.min.js"></script>



    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="../../../../../../../assets/js/plugins/rellax.min.js"></script>
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="../../../../../../../assets/js/plugins/tilt.min.js"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="../../../../../../../assets/js/plugins/choices.min.js"></script>


    <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
    <script src="../../../../../../../assets/js/plugins/parallax.min.js"></script>











    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    <!--  Google Maps Plugin    -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="../../../../../../../assets/js/material-kit.min.js?v=3.0.2" type="text/javascript"></script>


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
