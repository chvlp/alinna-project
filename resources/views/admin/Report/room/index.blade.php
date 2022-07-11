@extends('layouts.admin-layout')
@section('reproom', 'active bg-gradient-primary')
@section('title', 'ລາຍງານຂໍ້ມູນຫ້ອງ')
@section('page', 'ຂໍ້ມູນຫ້ອງ')
@section('header', 'ສັ່ງລວມຂໍ້ມູນ')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ກຳລັງເຊົ່າ</p>
                            <h4 class="mb-0">{{ $croomNoEmpty }} ຫ້ອງ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">
                            @foreach ($roomNoEmpty as $item)
                                <span class="text-success text-sm font-weight-bolder">
                                    {{ $item->number }},
                                </span>
                            @endforeach
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ຫ້ອງວາງ</p>
                            <h4 class="mb-0">{{ $croomEmpty }} ຫ້ອງ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">

                        <p class="mb-0">
                            @foreach ($roomEmpty as $item)
                                <span class="text-success text-sm font-weight-bolder">
                                    {{ $item->number }},
                                </span>
                            @endforeach

                        </p>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຫ້ອງທີ່ຈ່າຍເງິນສຳເລັດ</p>
                            <h4 class="mb-0">{{ $crentRoomStoryA }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0">
                            {{-- @foreach ($rentRoomStoryA as $item) --}}
                            <span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $sumA }} $
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
                            <i class="material-icons opacity-10">weekend</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ບິນຫ້ອງທີ່ຈ່າຍເງິນຍັງບໍ່ສຳເລັດ</p>
                            <h4 class="mb-0">{{ $crentRoomStoryE }} ບິນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">
                                ລວມຈຳນວນ:{{ $sumE }} $
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4" style="font-family: 'Noto sans Lao">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 " style="font-family: 'Noto sans Lao">
                    @foreach ($rtype5 as $item)
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            {{-- <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"> --}}
                            {{-- <div class="chart"> --}}

                            {{-- <canvas id="chart-bars" class="chart-canvas" height="170"></canvas> --}}
                            {{-- @foreach ($rtype5 as $item) --}}
                            <img style="border-radius: 3%" src="{{ asset('storage/images/TypeRooms/' . $item->image) }}"
                                width="100%" alt="">
                            {{-- @endforeach --}}

                            {{-- </div> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="card-body" style="font-family: 'Noto sans Lao">
                            <h6 class="mb-0 ">{{ $item->name }}</h6>
                            {{-- @foreach ($roomType5 as $item) --}}
                            <p class="text-sm ">{{ $croom5 }} ຫ້ອງ</p>
                            {{-- @endforeach --}}

                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                @foreach ($roomType5 as $iitem)
                                    <p class="mb-0 text-sm">{{ $iitem->number }},</p>
                                @endforeach
                                {{-- <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 ">
                    @foreach ($rtype6 as $item)
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            {{-- <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"> --}}
                            {{-- <div class="chart"> --}}

                            {{-- <canvas id="chart-bars" class="chart-canvas" height="170"></canvas> --}}
                            {{-- @foreach ($rtype5 as $item) --}}
                            <img style="border-radius: 3%" src="{{ asset('storage/images/TypeRooms/' . $item->image) }}"
                                width="100%" alt="">
                            {{-- @endforeach --}}

                            {{-- </div> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="card-body" style="font-family: 'Noto sans Lao">
                            <h6 class="mb-0 ">{{ $item->name }}</h6>
                            {{-- @foreach ($roomType5 as $item) --}}
                            <p class="text-sm ">{{ $croom6 }} ຫ້ອງ</p>
                            {{-- @endforeach --}}

                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                @foreach ($roomType6 as $iitem)
                                    <p class="mb-0 text-sm">{{ $iitem->number }},</p>
                                @endforeach
                                {{-- <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 ">
                    @foreach ($rtype7 as $item)
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            {{-- <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"> --}}
                            {{-- <div class="chart"> --}}

                            {{-- <canvas id="chart-bars" class="chart-canvas" height="170"></canvas> --}}
                            {{-- @foreach ($rtype5 as $item) --}}
                            <img style="border-radius: 3%" src="{{ asset('storage/images/TypeRooms/' . $item->image) }}"
                                width="100%" alt="">
                            {{-- @endforeach --}}

                            {{-- </div> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="card-body" style="font-family: 'Noto sans Lao">
                            <h6 class="mb-0 ">{{ $item->name }}</h6>
                            {{-- @foreach ($roomType5 as $item) --}}
                            <p class="text-sm ">{{ $croom7 }} ຫ້ອງ</p>
                            {{-- @endforeach --}}

                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                @foreach ($roomType7 as $iitem)
                                    <p class="mb-0 text-sm">{{ $iitem->number }},</p>
                                @endforeach
                                {{-- <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


        </div>
        <div class="row mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>ຂໍ້ມູນການເຊົ່າຫ້ອງທັງໝົດ</h6>
                                <i class="fa fa-check text-info" aria-hidden="true">dfdfg</i>
                                <span class="font-weight-bold ms-1">ຫ້ອງເຊົ່າ ຫຼື ຫ້ອງ ເຄິີຍເຊົ່າ ທັງໝົດ
                                    {{ $crentRoom }}</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0" style="font-family: 'Noto sans Lao">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ເບີຫ້ອງ</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        ຜູ້ເຊົ່າ</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ມື້ເຂົ້າ</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ມື້ອອກ</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ສະຖານະ</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rentRoom as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('storage/images/rooms/' . $item->room->image) }}"
                                                        class="avatar avatar-sm me-3" alt="xd">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->room->number }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('storage/images/profiles/' . $item->member->user->image) }}"
                                                        class="avatar avatar-sm me-3" alt="xd">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->member->user->name }}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">{{ $item->intodate }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold"> {{ $item->outdate }} </span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">
                                                @if ($item->status == 'ອອກເເລ້ວ')
                                                    <div class="btn btn-danger">
                                                        {{ $item->status }}
                                                    </div>
                                                @else
                                                    <div class="btn btn-success">
                                                        {{ $item->status }}
                                                    </div>
                                                @endif

                                            </span>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
