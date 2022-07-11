@extends('layouts.customer-layout')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('../assets/bg/aboutusbg.jpg');height:85vh">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">

                        <h1 class="text-white" style="font-family: 'Noto sans Lao">Alinna Apartment ຍິນດີຕອນຮັບ <br>
                        </h1>

                        <p class="text-center text-white" style="font-family: 'Noto sans Lao">
                            ອ້ວຍພອນໄຊໃຫ້ທ່ານ ອາໄສດ້ວຍຄຄວາມສະຫວັດດີພາບ
                        </P>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" style="margin: auto">
                            <div class="card" style="text-align: center;margin:auto">
                                <div class="card-text">
                                    <div class="container py-4">
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto d-flex justify-content-center flex-column">

                                                <div class="d-flex info">
                                                    <i class="fa-solid fa-wifi text-info mb-0 pl-4"
                                                        style="font-size:30px;padding-right:"></i>
                                                    <h5>ລະຫັດ: 15102017</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-lg-6" style="margin: auto">
                                <div class="card" style="text-align: center;margin:auto">
                                    <div class="card-text">
                                        <div class="container py-4">
                                            <div class="row">
                                                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                                                    <h3 class="text-center" style="font-family: 'Noto sans Lao">
                                                        ຈອງເວລາເຂົ້າເບີ່ງ</h3>
                                                    <form action="{{ route('User.User.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="card-body" style="font-family: 'Noto sans Lao">

                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ເລືອກວັນທີເຂົ້າເບີ່ງ</label>
                                                                <input type="date" name="inday" class="form-control">
                                                            </div>
                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ປ້ອນລາຍລະອຽດ</label>
                                                                <textarea name="detail" class="form-control" id="message" rows="2"></textarea>
                                                            </div>
                                                            <input type="hidden" name="sta" value="False">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button type="submit"
                                                                        class="btn bg-gradient-dark w-100">ສົ່ງ</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    {{-- <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <section class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-solid fa-person-booth opacity-10 text-white mt-3"
                                        style="font-size-30px"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                                    <h4 class="mb-0">$53k</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                    lask week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-solid fa-plug-circle-bolt opacity-10 text-white mt-3"
                                        style="font-size-30px"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                    <h4 class="mb-0">2,300</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask
                                    month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="fa-solid fa-faucet-drip opacity-10 text-white mt-3"
                                        style="font-size-30px"></i>
                                </div>
                                <div class="text-end pt-1">
                                    <p class="text-sm mb-0 text-capitalize">New Clients</p>
                                    <h4 class="mb-0">3,462</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than
                                    yesterday</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div> --}}
@endsection
