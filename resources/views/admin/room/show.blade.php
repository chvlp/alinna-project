@extends('layouts.admin-layout')
@section('room','active bg-gradient-primary')
@section('searchUser','')
@section('title','ຂໍ້ມູນປະເພດຫ້ອງ')
@section('content')

<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">

    <div class="row mt-4">
        <div style="margin:auto" class="col-lg-8 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                   <img class="m-auto" src="{{ asset('storage/images/rooms/'.$rooms->image) }}" width="100%" alt="">
                </div>
                <div class="card-body">
                <h6 class="mb-0 ">ຫ້ອງ: {{ $rooms->number }}</h6>
                <p class="text-sm ">{{ $rooms->floor }}</p>
                <p class="text-sm ">{{ $rooms->type_room->name }}</p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                    <p class="mb-0 text-sm">ລາຍລະອຽດ : {{ $rooms->type_room->detail }} </p>
                </div>
                </div>
            </div>
        </div>
        
    </div>
<hr> 
    <div class="row">
      @foreach ($image as $item)
        @if ($item->room_id == $rooms->id)
          
          <div style="padding-bottom:2%" class="col-xl-3 col-sm-6 mb-xl-0 mb-20">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    
                    <div class="text-end pt-1">
                        <img src="{{ asset('storage/images/rooms/image/'.$item->image) }}" width="100%" alt="">

                    </div>
                </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                    <p class="mb-0">{{ $item->detail }}</p>
                    </div>
            </div>
          </div>
        @endif
      @endforeach
        

        <div style="padding-bottom:2%" class="col-xl-3 col-sm-6 mb-xl-0 mb-20">
          <form action="{{ route('admin.room.upload',$rooms->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="card">
                <div class="card-header p-3 pt-2">
                  <div class="text-end pt-1">
                    <div class="drop-zone">
                      <span class="drop-zone__prompt"> ວາງຮູບພາບທີ່ນີ້ ຫຼື ຄລິກເພື່ອເລືອກຮູບ</span>
                      <input type="file" name="image" class="drop-zone__input" required>
                    </div>
                  </div>
              </div>
              <hr class="dark horizontal my-0">
              <div  class="card-footer p-0">
                <div class="input-group p-3 mb-4 input-group-static">
                  <label>ປ້ອນລາຍລະອຽດຂອງຮູບພາບ</label>
                    <input name="detail" type="text" class="form-control" required> <br>
                </div>

                <button style="width: 100%" type="submit" class="btn btn-primary">ບັນທຶກ</button>
              </div>
              </div>
          </form>
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