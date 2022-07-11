@extends('layouts.admin-layout')
@section('walelec', 'active bg-gradient-primary')
@section('title', 'ລາຍງານຂໍ້ມູນຄ່ານ້ຳ-ຄ່າໄຟຟ້າ')
@section('page', 'ຂໍ້ມູນຄ່ານ້ຳ-ຄ່າໄຟຟ້າ')
@section('header', 'ສັ່ງລວມຂໍ້ມູນ')
@section('content')

    <div class="container-fluid py-4 pt-10">
        <div class="row ">



            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-faucet-drip mt-3" style="color: white;font-size:20px"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຄ່າໄຟຟ້າທີ່ສຳລະສຳເລັດ</p>
                            <h4 class="mb-0">{{ $celectA }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">
                            <span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $sumA }} $
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-faucet-drip mt-3" style="color: white;font-size:20px"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຄ່າໄຟຟ້າທີ່ສຳລະຍັງບໍ່ສຳເລັດ</p>
                            <h4 class="mb-0">{{ $celectB }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $sumB }} $
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-plug-circle-bolt mt-3" style="color: white;font-size:20px"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຄ່ານ້ຳປະປາທີ່ສຳລະເລັດ</p>
                            <h4 class="mb-0">{{ $cwaterA }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">
                            {{-- @foreach ($rentRoomStoryA as $item) --}}
                            <span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $wsumA }} $
                            </span>
                            {{-- @endforeach --}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="fa-solid fa-plug-circle-bolt mt-3" style="color: white;font-size:20px"></i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຄ່ານ້ຳປະປາທີ່ສຳລະຍັງບໍ່ສຳເລັດ</p>
                            <h4 class="mb-0">{{ $cwaterB }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $wsumB }} $
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>

    </div>


@endsection
