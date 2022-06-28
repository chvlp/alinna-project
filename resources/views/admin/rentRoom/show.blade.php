@extends('layouts.admin-layout')
@section('rentRoom', 'active bg-gradient-primary')
{{-- @section('searchUser', '/admin/user/search') --}}
@section('title', 'ຈັດການຂໍ້ມູນບໍລິການເຊົ່າ')

@section('page', 'ບໍລິການເຊົ່າຫ້ອງ | ອຸປະກອນຫ້ອງ ')
@section('header', 'ຂໍ້ມູນການເຊົ່າ')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8"> <br><br>
            <div class="row">

                <div class="col-xl-8 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl">
                            <img src="{{ asset('storage/images/rooms/' . $rentRooms->room->image) }}" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                            <span class="mask bg-gradient-dark opacity-9"></span>
                            <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                                <p class="material-icons text-white p-2">

                                    <span style="font-family: 'Noto sans Lao">
                                        ເບີຫ້ອງ |
                                        {{ $rentRooms->room->number }}
                                    </span>
                                </p>

                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <h5 class="text-white mt-4 mb-5 pb-2">
                                                ຄ່າຫ້ອງ| {{ $rentRooms->room->price }} $
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                        <div>
                                            <h5 class="text-white mt-4 mb-5 pb-2">
                                                ຄ້າງຊຳລະ| {{ $rentRooms->room->price }} $
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                            <h6 class="text-white mb-0">{{ $rentRooms->intodate }}</h6>
                                        </div>
                                    </div>

                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                        <div>
                                            <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດກຳນົດ</p>
                                            <h6 class="text-white mb-0"> {{ $rentRooms->outdate }}</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div class="me-4">
                                            <p class="text-white text-sm opacity-8 mb-0">ອຸປະກອນຫ້ອງ</p>
                                            <h6 class="text-white mb-0">{{ $rentRooms->room->type_room->detail }}</h6>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl">
                            <img src="{{ asset('storage/images/profiles/' . $rentRooms->member->user->image) }}" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                            <span class="mask bg-gradient-dark opacity-9"></span>
                            <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                                <i class="material-icons text-white p-2">
                                    <span style="font-family: 'Noto sans Lao">
                                        {{ implode(', ',$rentRooms->member->user->roles()->get()->pluck('name')->toArray()) }}
                                        |
                                        {{ $rentRooms->member->status }}
                                    </span>
                                </i>
<br><br><br>
                              <div class="d-flex">
                                <div class="d-flex">
                                    <h5 class="text-white mt-4 mb-5 pb-2">
                                        {{ $rentRooms->member->user->gender }}
                                        {{ $rentRooms->member->user->name }}
                                        {{ $rentRooms->member->user->surname }}
                                    </h5>

                                </div>
                                <div class="ms-auto w-20 d-flex align-items-end justify-content-end">

                                </div>
                            </div>

                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div>
                                            <p class="text-white text-sm opacity-8 mb-0">| ເບີໂທ</p>
                                            <h6 class="text-white mb-0">| {{ $rentRooms->member->user->phone }}</h6>
                                        </div>

                                    </div>
                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">

                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div>
                                            <p class="text-white text-sm opacity-8 mb-0">| ອີເມວ</p>
                                            <h6 class="text-white mb-0">| {{ $rentRooms->member->user->email }}</h6>
                                        </div>

                                    </div>
                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0">ປະຫວັດການເຊົ່າ</h6>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">

                                <div style="padding-top: 2%" class="col-md-6 mb-md-0 mb-4">
                                    <div class="card card-body border bg-gradient-dark opacity-9 card-plain border-radius-lg d-flex align-items-center flex-row">
                                        <div class="d-flex" style="font-family: 'Noto sans Lao">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->intodate }}</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດກຳນົດ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->outdate }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="padding-top: 2%" class="col-md-6 mb-md-0 mb-4">
                                    <div class="card card-body border bg-gradient-dark opacity-9 card-plain border-radius-lg d-flex align-items-center flex-row">
                                        <div class="d-flex" style="font-family: 'Noto sans Lao">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->intodate }}</h6>
                                            </div>

                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດກຳນົດ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->outdate }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="padding-top: 2%" class="col-md-12 mb-md-0 mb-8">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-dynamic mb-4">
                                                <div class="input-group mb-4 input-group-static">
                                                    <label>ເລືອກມື້ອອກ</label>
                                                    <input name="outdate" type="date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-dynamic">
                                                <div class="input-group mb-4 input-group-static">
                                                    <label>ເລືອກມື້ອອກ</label>
                                                    <input name="outdate" type="date" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark bg-gradient-dark opacity-9" type="submit"> ບັນທຶກ </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">ໃບສັນຍາ</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3 pb-0">
                    <ul class="list-group">
                        <img style="border-radius: 5%" src="{{ asset('storage/images/rentRooms/' . $rentRooms->image) }}" alt="">
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <div class="row">
        {{-- elect tric --}}
        <div class="col-md-6 mt-4">
            <div class="card bg-gradient-primary opacity-9">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">ຂໍ້ມູນລາຍການຈ່າຍຄ່າໄຟຟ້າ</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">

                        <li class="list-group-item border-0 d-flex p-4 mb-0 bg-gray-100 border-radius-lg ">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-2 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3 input-group-static">
                                            <label>ເລືອກມື້ອອກ</label>
                                            <input name="outdate" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3 input-group-static">
                                            <label>ເລືອກມື້ອອກ</label>
                                            <input name="outdate" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark bg-gradient-dark opacity-9" type="submit"> ບັນທຶກ </button>
                                </div>

                        </li>

                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg" style="font-family: 'Noto sans Lao">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">06/2022 | ເລກປະຈຳຕົວ: 098232987332</h6>
                                <span class="mb-2 text-xs">ເຈົ້ງຂອງບິນ: <span class="text-dark font-weight-bold ms-sm-2"> {{ $rentRooms->member->user->gender }} {{ $rentRooms->member->user->name }}</span></span>
                                <span class="mb-2 text-xs">ບິນຂອງຫ້ອງ: <span class="text-dark ms-sm-2 font-weight-bold">{{ $rentRooms->room->number }}</span></span>
                                <span class="text-xs">ຕົວເລກຄັ້ງນີ້: <span class="text-dark ms-sm-2 font-weight-bold">755</span></span>
                                <span class="text-xs">ຕົວເລກຄັ້ງກ່ອນ: <span class="text-dark ms-sm-2 font-weight-bold">752</span></span>



                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                <h1 style="font-family: 'Noto sans Lao">ຈ່າຍເເລ້ວ</h1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- water --}}

        <div class="col-md-6 mt-4">
            <div class="card  bg-gradient-dark opacity-9">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">ຂໍ້ມູນລາຍການຈ່າຍຄ່ານ້ຳປະປາ</h6>
                </div>
                <div class="card-body pt-4 p-3 ">
                    <ul class="list-group">


                        <li class="list-group-item border-0 d-flex p-4 mb-0 bg-gray-100 border-radius-lg ">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-2 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-2 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="text" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-group mb-3 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3 input-group-static">
                                        <label>ເລືອກມື້ອອກ</label>
                                        <input name="outdate" type="date" class="form-control" required>
                                    </div>
                                </div>
                                <button class="btn btn-dark bg-gradient-dark opacity-9" type="submit"> ບັນທຶກ </button>
                            </div>

                        </li>


                        <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg" style="font-family: 'Noto sans Lao">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">06/2022 | ເລກປະຈຳຕົວ: 098232987332</h6>
                                <span class="mb-2 text-xs">ເຈົ້ງຂອງບິນ: <span class="text-dark font-weight-bold ms-sm-2"> {{ $rentRooms->member->user->gender }} {{ $rentRooms->member->user->name }}</span></span>
                                <span class="mb-2 text-xs">ບິນຂອງຫ້ອງ: <span class="text-dark ms-sm-2 font-weight-bold">{{ $rentRooms->room->number }}</span></span>
                                <span class="text-xs">ຕົວເລກຄັ້ງນີ້: <span class="text-dark ms-sm-2 font-weight-bold">755</span></span>
                                <span class="text-xs">ຕົວເລກຄັ້ງກ່ອນ: <span class="text-dark ms-sm-2 font-weight-bold">752</span></span>



                            </div>
                            <div class="ms-auto text-end">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                <h1 style="font-family: 'Noto sans Lao">ຈ່າຍເເລ້ວ</h1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- ອຸປະກອນ --}}
{{--
        <div class="col-md-2 mt-2">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="mb-0">ອຸປະກອນຫ້ອງ</h6>
                        </div>
                    </div>
                </div>
                <div style="border:1px" class="card-body pt-4 p-3">

                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">ອຸປະກອນນອນ</h6>

                    <ul style="border:1px solid red" class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_more</i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                                    <span class="text-xs">27 March 2020, at 12:30 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                                - $ 2,500
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Apple</h6>
                                    <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 2,000
                            </div>
                        </li>
                    </ul>


                    <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">ອຸປະກອນເຮືອນຄົວ</h6>
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">

                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                                    <span class="text-xs">26 March 2020, at 13:45 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 750
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                                    <span class="text-xs">26 March 2020, at 12:30 PM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 1,000
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                                    <span class="text-xs">26 March 2020, at 08:30 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                + $ 2,500
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">priority_high</i></button>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                                    <span class="text-xs">26 March 2020, at 05:00 AM</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                Pending
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection
