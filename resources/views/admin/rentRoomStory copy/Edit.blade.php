@extends('layouts.admin-layout')
@section('room', 'active bg-gradient-primary')
@section('searchUser', '')
@section('title', 'ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນຫ້ອງ')
@section('header', 'ເເກ້ໄຂຂໍ້ມູນຫ້ອງ')

@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
        <div class="row mb-4">
            <div class="col-lg-8 col-md-8 col-sm-0 mb-md-4 mb-4">
                <div class="card my-4">
                    <div style="margin-bottom: -3%">
                        <a href="{{ route('admin.rentRoom.show', $rentRoomStory->rentRoom_id) }}" class="btn btn-primary">ຍ້ອນກັບ</a>
                    </div>
                    <div class="card-body px-0 pb-2" style="font-family: 'Noto sans Lao">
                        <div class="table-responsive p-0">
                            {{-- <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>
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
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $rentRoomStory->id }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $rentRoomStory->intodate }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $rentRoomStory->outdate }}
                                                </h6>
                                            </div>

                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $rentRoomStory->qtyday }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">
                                                {{ ($rentRoomStory->rentRoom->room->price / 30) * $rentRoomStory->qtyday }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-xs font-weight-bold">
                                                {{ $rentRoomStory->price }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div class="d-flex">
                                                <img src="{{ asset('storage/images/rentRoomStory/'.$rentRoomStory->image) }}" width="100%"
                                                    alt="" width="45px" class="rounded-circle">

                                                @if ($rentRoomStory->status == 'ກຳລັງກວດສອບ')
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-warning">
                                                        {{ $rentRoomStory->status }}</span>
                                                @elseif ($rentRoomStory->status == 'ສຳເລັດ')
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-success">
                                                        {{ $rentRoomStory->status }}</span>
                                                @else
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-danger">
                                                        {{ $rentRoomStory->status }}</span>
                                                @endif

                                            </div>

                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('admin.rentRoomStory.edit', $rentRoomStory->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}

                            <div class="row mt-4">
                                <div style="margin:auto" class="col-lg-6 col-md-6 mt-4 mb-4">
                                    <div class="card z-index-2 ">
                                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                            <img style="border-radius: 3%" class="m-auto"
                                                src="{{ asset('storage/images/rentRoomStory/' . $rentRoomStory->image) }}"
                                                width="100%" alt="">
                                        </div>
                                        <div class="card-body">
                                            <h6 class="mb-0 ">ໄອດີ: {{ $rentRoomStory->id }}</h6>
                                            <p class="text-sm ">ມື້ເຂົ້າ: {{ $rentRoomStory->intodate }}</p>
                                            <p class="text-sm ">ມື້ອອກ: {{ $rentRoomStory->outdate }}</p>
                                            <p class="text-sm ">ຈຳນວນວັນທີ່ເຊົ່າ: {{ $rentRoomStory->qtyday }}</p>
                                            <p class="text-sm ">ລາຄ່າທີ່ຕ້ອງຈ່າຍ:
                                                {{ ($rentRoomStory->rentRoom->room->price / 30) * $rentRoomStory->qtyday }}
                                            </p>
                                            <p class="mb-0 text-sm">ລາຄາທີ່ຈ່າຍ : {{ $rentRoomStory->price }} </p>

                                            {{-- @if ($item->status == 'ກຳລັງກວດສອບ')
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-warning">
                                                        {{ $item->status }}</span>
                                                @elseif ($item->status == 'ສຳເລັດ')
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-success">
                                                        {{ $item->status }}</span>
                                                @else
                                                    <span style="cursor: default;margin-left:3px;margin-top:15px"
                                                        class="btn btn-danger">
                                                        {{ $item->status }}</span>
                                                @endif --}}

                                            @if ($rentRoomStory->status == 'ກຳລັງກວດສອບ')
                                                <h6 class="mb-0 ">ໄອດີ: <span style="cursor: default"
                                                        class="btn btn-warning"> {{ $rentRoomStory->status }}</span></h6>
                                            @elseif ($rentRoomStory->status == 'ສຳເລັດ')
                                                <h6 class="mb-0 ">ໄອດີ: <span style="cursor: default"
                                                        class="btn btn-success"> {{ $rentRoomStory->status }}</span></h6>
                                            @else
                                                <h6 class="mb-0 ">ໄອດີ: <span style="cursor: default"
                                                        class="btn btn-danger"> {{ $rentRoomStory->status }}</span></h6>
                                            @endif

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
                <div class="card my-4">

                    <div class="card-body" style="font-family: 'Noto sans Lao">
                        <form action="{{ route('admin.rentRoomStory.update', $rentRoomStory->id) }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}

                            <div>
                                <div class="input-group mb-4 input-group-static">
                                    <h5>ເເກ້ໄຂສະຖານະການຊຳລະຄ່າຫ້ອງ</h5>

                                </div>
                                <input type="hidden" name="rentRoom_id" value="{{ $rentRoomStory->rentRoom->id }}">
                                <input type="hidden" name="user_id" value="{{ $rentRoomStory->user_id }}">

                                <div class="input-group input-group-dynamic mb-4 form-floating">
                                    <select name="status" class="form-select form-select-sm" required>
                                        <option class="text-danger" value=""> ເລືອກສະຖານະການຊຳລະຄ່າຫ້ອງ</option>

                                        <option value="ສຳເລັດ"> ສຳເລັດ</option>
                                        <option value="ກຳລັງກວດສອບ"> ກຳລັງກວດສອບ</option>
                                        <option value="ຍົກເລີກ"> ຍົກເລີກ</option>

                                    </select>
                                    <label for="floatingSelect">ເລືອກສະຖານະການຊຳລະຄ່າຫ້ອງ</label>
                                </div>

                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເເກ້ໄຂ</button>
                            </div>

                            {{-- </form> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
