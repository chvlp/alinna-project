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
                                        @if ($item->member->status == 'ກຳລັງເຊົ່າ')
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

                                                {{-- <td class="align-middle">
                              
                              <form class="text-center font-weight-bold text-xs" method="post" action="{{ route('admin.rentRoom.destroy',$item->id) }}">
                                @csrf
                                @method('delete')

                                <a style="padding-right:15%" href="{{ route('admin.rentRoom.show',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit room">
                                  <i class="fa-solid fa-eye"></i>
                                </a>

                                <a style="padding-right:15%" href="{{ route('admin.rentRoom.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                <i class="fa-solid fa-user-pen"></i>
                                </a>

                                <a class="text-center font-weight-bold text-xs" href="{{ route('admin.rentRoom.destroy',$item->id) }}" onclick="event.preventDefault(); this.closest('form').submit(); return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                                  <i style="color: red;" class="fa-solid fa-trash"></i>
                                </a>
                                
                                </form>
                                
                                  
                                
                            </td> --}}
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
                        <form action="{{ route('admin.rentRoom.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>

                                <div class="input-group input-group-dynamic mb-4 form-floating">
                                    <select name="member_id" class="form-select form-select-sm" required>
                                        <option class="text-danger" value=""> ເລືອກຜູ້ເຊົ່າ</option>
                                        @foreach ($member as $item)
                                            @if ($item->status == 'ກຳລັງເຊົ່າ')
                                                <option value="{{ $item->id }}"> {{ $item->user->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">ເລືອກຜູ້ເຊົ່າ</label>
                                </div>

                                <div class="input-group input-group-dynamic mb-4 form-floating">
                                    <select name="room_id" class="form-select form-select-sm" required>
                                        <option class="text-danger" value=""> ເລືອກຫ້ອງ</option>

                                        @foreach ($room as $item)
                                            @if ($item->status == 'ວາງ')
                                                <option value="{{ $item->id }}"> {{ $item->number }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                    <label for="floatingSelect">ເລືອກຫ້ອງ</label>
                                </div>



                                <div class="input-group mb-4 input-group-static">
                                    <label>ເລືອກມື້ເຂົ້າພັກ</label>
                                    <input name="intodate" type="date" class="form-control" required>
                                </div>

                                <div class="input-group mb-4 input-group-static">
                                    <label>ເລືອກມື້ອອກ</label>
                                    <input name="outdate" type="date" class="form-control" required>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເພີ່ມ</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
