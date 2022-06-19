@extends('layouts.admin-layout')
@section('rent_room','active bg-gradient-primary')
@section('searchUser','')
@section('title','ຂໍ້ມູນປະເພດຫ້ອງ')
@section('content')

<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
  <div class="row mb-4">
    <div class="col">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

              <div class="bg-gradient-primary">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6 style="" class="text-white text-capitalize ps-3">ຂໍ້ມູນປະເພດຫ້ອງ</h6>
                  </div>
                  <div style="padding-right: 3%" class="col-lg-6 col-5 my-auto text-end">
                      <a style="font-size: 27px;color:white" href="{{ route('admin.room.create') }}">
                        <i class="fa-solid fa-circle-plus"></i>
                      </a>
                  </div>
                </div>
              </div>
              
          </div>
        </div>

        <div class="card-body px-0 pb-2" style="font-family: 'Noto sans Lao">
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
  @if ($message = Session::get('success'))
  <div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="card-body p-3 pb-0">
      <div class="alert alert-primary alert-dismissible text-white" role="alert"  aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="material-icons text-success me-2">check</i>
          <span class="me-auto font-weight-bold">ສຳເລັດ </span>
        </div>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <hr class="horizontal dark m-0">
      <div class="toast-body">{{$message}}.</div>
      </div>
    </div>
  </div>

@endif

@endsection