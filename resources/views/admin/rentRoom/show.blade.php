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
                                <img src="{{ asset('storage/images/rooms/' . $rentRooms->room->image) }}"
                                    class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100"
                                    alt="pattern-tree">
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

                                        {{-- <div class="ms-auto w-50 d-flex align-items-end justify-content-end">
                                            <div>
                                                <h5 class="text-white mt-4 mb-5 pb-2">
                                                    ຄ້າງຊຳລະ| {{ $rentRooms->room->price }} $
                                                </h5>
                                            </div>
                                        </div> --}}

                                    </div>

                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->intodate }}</h6>
                                            </div>
                                        </div>

                                        <div class="ms-auto w-50 d-flex align-items-end justify-content-end">
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
                                <img src="{{ asset('storage/images/profiles/' . $rentRooms->member->user->image) }}"
                                    class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100"
                                    alt="pattern-tree">
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
                            <div class="card-body p-1">
                                <div class="row">
                                    {{-- @foreach ($rentRoomStory as $item)
                                        @if ($item->rentRoom_id == $rentRooms->id)
                                            <div style="font-family:'Notopadding-top: 2%"
                                                class="col-md-12 mb-md-0 mb-4 pt-3">
                                                <div
                                                    class="card card-body border bg-gradient-dark opacity-9 card-plain border-radius-lg d-flex align-items-center flex-row">
                                                    <div class="d-flex" style="font-family: 'Noto sans Lao">
                                                        <div class="me-4">
                                                            <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                            <h6 class="text-white mb-0">{{ $item->intodate }}</h6>
                                                        </div>
                                                    </div>

                                                    <div class="ms-auto w-30 d-flex align-items-end justify-content-end">
                                                        <div>
                                                            <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດກຳນົດ</p>
                                                            <h6 class="text-white mb-0">{{ $item->outdate }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto w-30 d-flex align-items-end justify-content-end">
                                                        <div>
                                                            <p class="text-white text-sm opacity-8 mb-0">ລາຄ່າທີ່ຕ້ອງຈ່າຍ</p>
                                                            <h6 class="text-white mb-0">{{ $item->outdate }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto w-30 d-flex align-items-end justify-content-end">
                                                        <div class="d-flex">
                                                            <h5
                                                                style="font-family: 'Noto sans Lao';color:red;padding-right:5px;margin-top:16px">
                                                                ຈ່າຍແລ້ວ</h5>
                                                            <i style="padding-left:4px;margin-top: 14px;font-size:30px"
                                                                class="fa-solid fa-pen-to-square"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach --}}
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>

                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ວັນທີ່ເດືອນປີເຂົ້າ</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        ວັນທີ່ເດືອນປີອອກ</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        ຈຳນວນວັນທັງໝົດ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ຈຳນວນທີ່ຕ້ອງຈ່າຍ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ຈຳນວນເງິນທີ່ຈ່າຍ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ຮູບພາບ & ສະຖານະ ການຊຳລະ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ຜູ້ເພີ່ມຂໍ້ມູນ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rentRoomStory as $item)
                                                    @if ($item->rentRoom_id == $rentRooms->id)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2 py-1">
                                                                    <div class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-sm">{{ $item->intodate }}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{ $item->outdate }}
                                                                    </h6>
                                                                </div>

                                                            <td class="align-middle text-center text-sm">
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{ $item->qtyday }}
                                                                    </h6>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <span class="text-xs font-weight-bold">
                                                                    {{ ($item->rentRoom->room->price / 30) * $item->qtyday }}</span>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <span class="text-xs font-weight-bold">
                                                                    {{ $item->price }}</span>
                                                            </td>
                                                            <td class="align-middle text-center text-sm">
                                                                <div class="d-flex">
                                                                    <a href="{{ asset('storage/images/rentRoomStory/' . $item->image) }}"
                                                                        target="_blank">
                                                                        <img src="{{ asset('storage/images/rentRoomStory/' . $item->image) }}"
                                                                            alt="" width="45px"></a>

                                                                    @if ($item->status == 'ກຳລັງກວດສອບ')
                                                                        <span
                                                                            style="cursor: default;margin-left:15px ;margin-top:15px;width:150px"
                                                                            class="btn btn-warning">
                                                                            {{ $item->status }}</span>
                                                                    @elseif ($item->status == 'ສຳເລັດ')
                                                                        <span
                                                                            style="cursor: default;margin-left:15px ;margin-top:15px;width:150px"
                                                                            class="btn btn-success">
                                                                            {{ $item->status }}</span>
                                                                    @else
                                                                        <span
                                                                            style="cursor: default;margin-left:15px ;margin-top:15px;width:150px"
                                                                            class="btn btn-danger">
                                                                            {{ $item->status }}</span>
                                                                    @endif

                                                                </div>

                                                            </td>

                                                            <td class="align-middle text-center text-sm">
                                                                <span class="text-xs font-weight-bold">
                                                                    {{ $item->user->name }}</span>
                                                            </td>

                                                            <td class="align-middle">
                                                                @if ($item->status == 'ສຳເລັດ')
                                                                @else
                                                                    <a
                                                                        href="{{ route('admin.rentRoomStory.edit', $item->id) }}"><i
                                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                                @endif




                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="padding-top: 2%" class="col-md-12">
                                        <li class="list-group-item rounded-lg">
                                            <form action="{{ route('admin.rentRoomStory.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group input-group-dynamic mb-4">
                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ເລືອກມື້ເຂົ້າ</label>
                                                                <input name="intodate" type="date"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input name="price" type="hidden" class="form-control"
                                                        value="0">
                                                    <input name="rentRoom_id" type="hidden" class="form-control"
                                                        value="{{ $rentRooms->id }}">
                                                    <input name="image" type="hidden" class="form-control"
                                                        value="">

                                                    <div class="col-md-6">
                                                        <div class="input-group input-group-dynamic">
                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ເລືອກມື້ອອກ</label>
                                                                <input name="outdate" type="date" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark bg-gradient-dark opacity-9"
                                                        type="submit">
                                                        ບັນທຶກ
                                                    </button>
                                                </div>
                                            </form>
                                        </li>
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
                            <img style="border-radius: 5%"
                                src="{{ asset('storage/images/rentRooms/' . $rentRooms->image) }}" alt="">
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
                                <form action="{{ route('admin.electric.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group mb-2 input-group-static">
                                                <label>ເລືອກເດືອນ</label>
                                                <input name="indate" type="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="rentRoom_id" value="{{ $rentRooms->id }}">
                                        <input type="hidden" name="member_id" value="{{ $rentRooms->member->id }}">
                                        <div class="col-md-4">
                                            <div class="input-group mb-2 input-group-static">
                                                <label>ເລກຄັ່ງນີ້</label>
                                                <input name="before" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ເລກຄັ່ງກ່ອນ</label>
                                                <input name="after" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ລະຫັດປະຈຳຕົວ</label>
                                                <input name="IDelectric" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ປ້ອນລາຄາ</label>
                                                <input name="price" type="number" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ເລືອກຮູບ</label>
                                                <input name="image" type="file" class="form-control" required>
                                            </div>
                                        </div>

                                        <button class="btn btn-dark bg-gradient-dark opacity-9" type="submit"> ບັນທຶກ
                                        </button>
                                    </div>
                                </form>
                            </li>

                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"
                                style="font-family: 'Noto sans Lao">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>

                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ເດືອນ ປີ</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    ເລກຄັ້ງນີ້</th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    ເລກຄັ້ງກ່ອນ</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ຮູບບິນ</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ເລກປະຈຳຕົວ</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ລາຄາ</th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    ສະຖານະບິນ</th>

                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($electric as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ date('m-Y', strtotime($item->indate)) }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $item->before }}
                                                            </h6>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold">
                                                            {{ $item->after }}</span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <a href="{{ asset('storage/images/Electrics/' . $item->image) }}"
                                                            target="_BLANK">
                                                            <img src="{{ asset('storage/images/Electrics/' . $item->image) }}"
                                                                alt="" width="45px">
                                                        </a>

                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold">
                                                            {{ $item->IDelectric }}</span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-xs font-weight-bold">
                                                            {{ $item->price }}$</span>
                                                    </td>
                                                    <td class="align-middle text-center text-sm">

                                                        @if ($item->status == 'ກຳລັງກວດສອບ')
                                                            <div class="btn btn-warning"
                                                                style="width: 100%;cursor: context-menu">
                                                                <p>{{ $item->status }}</p>
                                                            </div>
                                                        @elseif ($item->status == 'ຍອມຮັບ')
                                                            <div class="btn btn-success"
                                                                style="width: 100% ;cursor: context-menu">
                                                                <p>{{ $item->status }}</p>
                                                            </div>
                                                        @else
                                                            <form
                                                                action="{{ route('admin.electric.update', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                {{ method_field('PUT') }}
                                                                <input type="hidden" name="status" value="ຍອມຮັບ">
                                                                <button type="submit" class="btn btn-danger"
                                                                    style="width: 100%;cursor: context-menu">
                                                                    <p>{{ $item->status }}</p>
                                                                </button>
                                                            </form>
                                                        @endif


                                                    </td>

                                                    <td class="align-middle">
                                                        @if ($item->status == 'ກຳລັງກວດສອບ')
                                                            <a href="{{ route('admin.electric.edit', $item->id) }}"><i
                                                                    class="fa-solid fa-pen-to-square"></i></a>
                                                        @else
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
                                <form action="{{ route('admin.Water.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-2 input-group-static">
                                                <label>ເລືອກວັນເດືອນປີ</label>
                                                <input name="indate" type="date" class="form-control" required>
                                            </div>
                                        </div>

                                        <input type="hidden" name="rentRoom_id" value="{{ $rentRooms->id }}">
                                        <input type="hidden" name="member_id" value="{{ $rentRooms->member->id }}">

                                        <div class="col-md-6">
                                            <div class="input-group mb-2 input-group-static">
                                                <label>ປ້ອນເລກບິນ</label>
                                                <input name="IDwater" type="text" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ປ້ອນຈຳນວນເງິນ</label>
                                                <input name="price" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 input-group-static">
                                                <label>ເລືອກຮູບພາບ</label>
                                                <input name="image" type="file" class="form-control" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark bg-gradient-dark opacity-9" type="submit"> ບັນທຶກ
                                        </button>
                                    </div>
                                </form>

                            </li>


                            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg"
                                style="font-family: 'Noto sans Lao">
                                <table class="table align-items-center mb-0">
                                    <thead>

                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ເດືອນປີ</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ເລກບິນ</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                ຮິບພາບ</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ລາຄາ</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ສະຖານະບິນ</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($water as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ date('m-Y', strtotime($item->indate)) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $item->IDwater }}
                                                        </h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <a href="{{ asset('storage/images/Waters/' . $item->image) }}"
                                                        target="_BLANK">
                                                        <img src="{{ asset('storage/images/Waters/' . $item->image) }}"
                                                            alt="" width="45px">
                                                    </a>

                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <span class="text-xs font-weight-bold">
                                                        {{ $item->price }}$</span>
                                                </td>

                                                <td class="align-middle text-center text-sm">

                                                    @if ($item->status == 'ກຳລັງກວດສອບ')
                                                        <div class="btn btn-warning"
                                                            style="width: 100%;cursor: context-menu">
                                                            <p>{{ $item->status }}</p>
                                                        </div>
                                                    @elseif ($item->status == 'ຍອມຮັບ')
                                                        <div class="btn btn-success"
                                                            style="width: 100% ;cursor: context-menu">
                                                            <p>{{ $item->status }}</p>
                                                        </div>
                                                    @else
                                                    <form
                                                    action="{{ route('admin.Water.update', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    {{ method_field('PUT') }}
                                                    <input type="hidden" name="status" value="ຍອມຮັບ">
                                                    <button type="submit" class="btn btn-danger"
                                                        style="width: 100%;cursor: context-menu">
                                                        <p>{{ $item->status }}</p>
                                                    </button>
                                                </form>
                                                    @endif


                                                </td>

                                                <td class="align-middle">
                                                    @if ($item->status == 'ກຳລັງກວດສອບ')
                                                        <a href="{{ route('admin.Water.edit', $item->id) }}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                    @else

                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- ອຸປະກອນ --}}
            {{-- <div class="col-md-2 mt-2">
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
