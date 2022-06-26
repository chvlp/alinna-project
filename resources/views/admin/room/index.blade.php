@extends('layouts.admin-layout')
@section('room','active bg-gradient-primary')
@section('searchUser','')
@section('title','ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນຫ້ອງ')
@section('header', 'ສະເເດງຂໍ້ມູນຫ້ອງ')

@section('content')

<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
  <div class="row mb-4">
    <div class="col">
      <div style="text-align: right;margin-bottom: -3%">
        <a href="{{ route('admin.room.create') }}" class="btn btn-primary">ເພີ່ມປະເພດຫ້ອງ</a>
    </div>
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ເບີຫ້ອງ & ລາຍລະອຽດ</th>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ຊັ້ນ</th>
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ລາຄາ</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rooms as $item)
                <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                            <img src="{{ asset('storage/images/rooms/'.$item->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center ">
                            <h6 class="mb-0 text-sm">ຫ້ອງເບີ {{ $item->number }}</h6>
                            <p class="text-xs text-secondary mb-0">{!! Str::words($item->type_room->detail, 7,'...')  !!}</p>
                        </div>
                      </div>
                    </td>
                    <td><p class="font-weight-bold mb-0">{{ $item->floor }}</p></td>
                    {{-- <td><p class="font-weight-bold mb-0">{{ $item->equiments()->pluck('name') }} | ₭</p></td> --}}
                    <td><p class="font-weight-bold mb-0">{{ $item->price }} ₭</p></td>
                    <td class="align-middle">
                      <div style="display:flex">

                        <a style="padding-right:25%" href="{{ route('admin.room.show',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit room">
                          <i class="fa-solid fa-eye"></i>
                        </a>

                        <a style="padding-right:25%" href="{{ route('admin.room.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit room">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <form class="text-center font-weight-bold text-xs" method="post" action="{{ route('admin.room.destroy',$item->id) }}">
                          @csrf
                          @method('delete')
                          <a href="{{ route('admin.room.destroy',$item->id) }}" 
                              onclick="event.preventDefault(); this.closest('form').submit(); return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                              <i style="color: red;" class="fa-solid fa-trash"></i>
                          </a>
                      </form>
                    </div>
                    </td>
                 </tr>
            @endforeach
        </tbody>
      </table>
      {{$rooms->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection