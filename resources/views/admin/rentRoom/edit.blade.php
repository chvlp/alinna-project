@extends('layouts.admin-layout')
@section('rentRoom', 'active bg-gradient-primary')
@section('searchUser', '')
@section('title', 'ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນບໍລິການເຊົ່າ')
@section('header', 'ຂໍ້ມູນການເຊົ່າ')

@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
        <div class="row mb-4">
            <div class="col-lg-8 col-md-8 col-sm-0 mb-md-4 mb-4">
                <div class="card my-4">
                    <div style="margin-bottom: -3%">
                        <a href="{{ route('admin.rentRoom.index') }}" class="btn btn-primary">ຍອນກັບ</a>
                    </div>
                    <div class="card-body px-0 pb-2" style="font-family: 'Noto sans Lao">
                        <div class="table-responsive p-0">
                            <table style="font-family: 'Noto sans Lao" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">
                                            ຫ້ອງຖືກເຊົ່າ</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">
                                            ຜູ້ເຊົ່າຫ້ອງ</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7 ps-2">
                                            ວດປ ເຊົ່າ-ອອກ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rentRoom as $item)
                                        @if ($item->member->status == 'ກຳລັງເຊົ່າ' && $item->status == 'ກຳລັງເຊົ່າ' && $item->id == $rentRooms->id)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('storage/images/rooms/' . $item->room->image) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="mb-0 text-sm">ເບີຫ້ອງ: {{ $item->room->number }}</h6>
                                                            <p class="text-xs text-secondary mb-0">ລາຄ່າ:
                                                                {{ $item->room->price }} ₭ </p>
                                                            <p class="text-xs text-secondary mb-0">ສະຖານະ: <span
                                                                    style="color:blue;">ຈ່າຍເເລ້ວ</span> </p>
                                                            <p class="text-xs text-secondary mb-0">ຍອດຄ້າງຊຳລະ: <span
                                                                    style="color:blue;">0 ₭</span> </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('storage/images/profiles/' . $item->member->user->image) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="mb-0 text-sm"> {{ $item->member->user->gender }}
                                                                {{ $item->member->user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">ອີເມວ:
                                                                {{ $item->member->user->email }}</p>
                                                            <p class="text-xs text-secondary mb-0">ໂທ:
                                                                {{ $item->member->user->phone }}</p>
                                                            <p class="text-xs text-secondary mb-0">ສະຖານະ: <span
                                                                    style="color: blue">{{ $item->member->status }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column">
                                                            <p class="text-xs text-secondary mb-0">ວັນທີເຂົ້າ:
                                                                {{ date('d-m-Y', strtotime($item->intodate)) }}</p>
                                                            <p class="text-xs font-weight-bold">ວັນໝົດກຳນົດ: <span
                                                                    style="color: red">{{ date('d-m-Y', strtotime($item->outdate)) }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>

                                <tbody>
                                    @foreach ($rentRoom as $item)
                                        @if ($item->member->status == 'ກຳລັງເຊົ່າ' && $item->status == 'ກຳລັງເຊົ່າ' && $item->id != $rentRooms->id)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('storage/images/rooms/' . $item->room->image) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="mb-0 text-sm">ເບີຫ້ອງ: {{ $item->room->number }}
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">ລາຄ່າ:
                                                                {{ $item->room->price }} ₭ </p>
                                                            <p class="text-xs text-secondary mb-0">ສະຖານະ: <span
                                                                    style="color:blue;">ຈ່າຍເເລ້ວ</span> </p>
                                                            <p class="text-xs text-secondary mb-0">ຍອດຄ້າງຊຳລະ: <span
                                                                    style="color:blue;">0 ₭</span> </p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('storage/images/profiles/' . $item->member->user->image) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="mb-0 text-sm"> {{ $item->member->user->gender }}
                                                                {{ $item->member->user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">ອີເມວ:
                                                                {{ $item->member->user->email }}</p>
                                                            <p class="text-xs text-secondary mb-0">ໂທ:
                                                                {{ $item->member->user->phone }}</p>
                                                            <p class="text-xs text-secondary mb-0">ສະຖານະ: <span
                                                                    style="color: blue">{{ $item->member->status }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column">
                                                            <p class="text-xs text-secondary mb-0">ວັນທີເຂົ້າ:
                                                                {{ date('d-m-Y', strtotime($item->intodate)) }}</p>
                                                            <p class="text-xs font-weight-bold">ວັນໝົດກຳນົດ: <span
                                                                    style="color: red">{{ date('d-m-Y', strtotime($item->outdate)) }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>

                            </table>
                            {{ $rentRoom->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
                <div class="card my-4">


                    <div class="card-body" style="font-family: 'Noto sans Lao">
                        <form action="{{ route('admin.rentRoom.update', $rentRooms->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}


                            <div>

                                <input type="hidden" name="member_id" value="{{ $rentRooms->member->id }}">
                                <input type="hidden" name="room_id" value="{{ $rentRooms->room->id }}">

                                <div class="input-group input-group-dynamic mb-4 form-floating">
                                    <select name="status" class="form-select form-select-sm" required>
                                        <option class="text-danger" value=""> ເລືອກສະຖານະ</option>
                                        <option value="ອອກເເລ້ວ"> ອອກເເລ້ວ</option>

                                    </select>
                                    <label for="floatingSelect">ເລືອກສະຖານະຫ້ອງເຊົ່າ</label>
                                </div>



                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເເກ້ໄຂ</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
