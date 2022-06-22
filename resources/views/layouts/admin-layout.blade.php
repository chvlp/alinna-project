<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/Alinna.png">
    <link rel="icon" type="image/png" href="../../../assets/Alinna.png">
    <title>
        @yield('title')
    </title>
    {{-- juary --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('.../../../css/all.min.css') }}">
    <script src="{{ asset('.../../../.../../../js/all.min.js') }}"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <link id="pagestyle" href="../../../assets/css/main.css" rel="stylesheet" />


</head>

<body class="g-sidenav-show  bg-gray-200" style="font-family: Noto sans Lao">


    <div class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('admin.index') }}">
                {{-- <img src="../../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
                <span style="color: rgb(211, 0, 70);font-size:20px;text-align:center" class="ms-3 font-weight-bold">Hi
                    <img class="rounded-circle" src="{{ asset('storage/images/profiles/' . Auth::user()->image) }} "
                        width="38%" alt=""></span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div style="height:80%" class="collapse navbar-collapse" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">ຈັດການຂໍ້ມູນ
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white @yield('main')" href="{{ route('admin.index') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house-chimney"></i>
                        </div>
                        <span class="nav-link-text ms-1">ໜ້າຫຼັກ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white @yield('manageuser') " href="{{ route('admin.user.index') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <span class="nav-link-text ms-1">ຈັດການຂໍ້ມູນຜູ້ໃຊ້</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @yield('type_room') " href="{{ route('admin.type.index') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person-booth"></i>
                        </div>
                        <span class="nav-link-text ms-1">ຈັດການຂໍ້ມູນປະເພດຫ້ອງ</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white @yield('room') " href="{{ route('admin.room.index') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-people-roof"></i>
                        </div>
                        <span class="nav-link-text ms-1">ຈັດການຂໍ້ມູນຫ້ອງ</span>
                    </a>
                </li>



                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">ບໍລິການ</h6>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white @yield('rentRoom') " href="{{ route('admin.rentRoom.index') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                        <span class="nav-link-text ms-1">ການບໍລິການ</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">ລາຍງານ</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-users-line"></i>
                        </div>
                        <span class="nav-link-text ms-1">ລາຍງານຂໍ້ມູນຜູ້ໃຊ້</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="text-center mb-2">
                <p style="color: rgb(255, 255, 255)" class="nav-link-text ms-1">" Source: 'Phet CHVLP' "</p>
            </div>
        </div>

    </div>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-2" style="font-family: 'Noto sans Lao">
            <div class="row mb-4">
                <div class="col">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg">

                                <nav class="navbar  navbar-main navbar-expand-lg  shadow-none border-radius-xl"
                                    id="navbarBlur" navbar-scroll="true">
                                    <div class="container-fluid py-1 px-3">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                                                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                                    >ໜ້າ</a></li>
                                                <li style="color:white" class="breadcrumb-item text-sm text-white"
                                                    aria-current="page">@yield('page');
                                                </li>
                                            </ol>
                                            <h6 class="font-weight-bolder mb-0" style="color:white">@yield('header')</h6>
                                        </nav>
                                        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
                                            id="navbar">
                                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                                <div class="input-group input-group-outline">
                                                    <label style="color: black" class="form-label">Type
                                                        here...</label>
                                                    <input style="background:white" type="text"
                                                        class="form-control" placeholder="ຄົ້ນຫາທີ່ນີ້ ...">
                                                </div>
                                            </div>
                                            <ul class="navbar-nav  justify-content-end">
                                                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                                    <a href="javascript:;" class="nav-link text-body p-0"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i style="color:white" class="fa fa-bell cursor-pointer"></i>
                                                    </a>
                                                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                                        aria-labelledby="dropdownMenuButton">

                                                        <li class="mb-2">
                                                            <a class="dropdown-item border-radius-md"
                                                                href="javascript:;">
                                                                <div class="d-flex py-1">
                                                                    <div class="my-auto">
                                                                        <img src="../../../assets/img/team-2.jpg"
                                                                            class="avatar avatar-sm  me-3 ">
                                                                    </div>
                                                                    <div
                                                                        class="d-flex flex-column justify-content-center">
                                                                        <h6 class="text-sm font-weight-normal mb-1">
                                                                            <span
                                                                                class="font-weight-bold">ການເເຈ້ງເຕືອນໃໝ່</span>
                                                                            ຈາກ ບັນດາ
                                                                        </h6>
                                                                        <p class="text-xs text-secondary mb-0">
                                                                            <i class="fa fa-clock me-1"></i>
                                                                            13 ນາທີຜ່ານມາ
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <form id="logout-form" action="{{ route('logout') }}"
                                                    method="POST" class="d-none">
                                                    @csrf
                                                </form>

                                                <li style="padding: 0 20px"
                                                    class="nav-item d-flex align-items-center">
                                                    <a class="nav-link text-body font-weight-bold px-0"
                                                        href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <i style="color: rgb(255, 255, 255)"
                                                            class="fa-solid fa-right-from-bracket"></i>
                                                        <span style="color: rgb(255, 255, 255)"
                                                            class="d-sm-inline d-none">ອອກຈາກລະບົບ</span>
                                                    </a>
                                                </li>

                                                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                                    <a href="javascript:;" class="nav-link text-body p-0"
                                                        id="iconNavbarSidenav">
                                                        <div class="sidenav-toggler-inner">
                                                            <i class="sidenav-toggler-line"></i>
                                                            <i class="sidenav-toggler-line"></i>
                                                            <i class="sidenav-toggler-line"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        @yield('content')


                    </div>
                </div>
            </div>
        </div>

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




        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["M", "T", "W", "T", "F", "S", "S"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "rgba(255, 255, 255, .8)",
                    data: [50, 20, 10, 22, 50, 10, 40],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["ມັງກອນ", "ກຸມພາ", "ມີນາ", "ພຶດສະພາ", "ມີຖຸນາ", "ກໍລະກົດ", "ສິງຫາ", "ກັນຍາ", "ຕຸລາ",
                    "ພະຈິກ", "ທັນວາ"
                ],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    {{-- for hide textbox --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#experience").change(function() {
                if ($("#experience").val() == 3) {
                    $("#hidden-field").show();
                } else {
                    $("#hidden-field").hide();
                }
            })
        });
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/material-dashboard.min.js?v=3.0.2"></script>

    <script src="../../../assets/js/main.js"></script>

    <script>
        window.onload = function() {
            document.getElementById("setfocus").focus();
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
