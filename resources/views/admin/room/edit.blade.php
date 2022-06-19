
@extends('layouts.admin-layout')
@section('room','active bg-gradient-primary')
@section('searchUser','')
@section('title','ຂໍ້ມູນປະເພດຫ້ອງ')
@section('content')
<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
    <div class="row mb-4">
      <div class="col-lg-8 col-md-8 col-sm-0 mb-md-4 mb-4">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div class="bg-gradient-primary">
                  <div class="row">
                    <div class="col-lg-6 col-7">
                      <h6 style="" class="text-white text-capitalize ps-3">ຂໍ້ມູນຫ້ອງ</h6>
                    </div>
                    <div style="padding-right: 3%" class="col-lg-6 col-5 my-auto text-end">
                        <a style="font-size: 27px;color:white" href="{{ route('admin.room.index') }}">
                          <i class="fa-solid fa-arrow-left"></i>
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
                    {{-- <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">#</th> --}}
                    <th class="text-uppercase text-secondary font-weight-bolder opacity-7">ເບີຫ້ອງ & ລາຍລະອຽດ</th>
                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">ຊັ້ນ</th>
                    <th class="text-uppercase text-secondary text-center font-weight-bolder opacity-7">ລາຄາ</th>
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
                                        <p class="text-xs text-secondary mb-0">{{ $item->type_room->detail}}</p>
                                    </div>
                                </div>
                            </td>
                            <td><p class="text-center font-weight-bold mb-0">{{ $item->floor }}</p></td>
                            <td><p class="text-center font-weight-bold mb-0">{{ $item->price }} $</p></td>
                            <td class="align-middle">
                              @if ($item->id == $roomid->id )
                                <a class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  <i style="color: purple" class="fa-solid fa-pen-to-square"></i>
                                </a>
                              @else
                                <a href="{{ route('admin.room.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                              @endif
                            </td>

                      </tr>
                    @endforeach
                </tbody>
                {{$rooms->links()}}
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ເເກ້ໄຂຂໍ້ມູນຫ້ອງ</h6>
            </div>
          </div>

          <div class="card-body" style="font-family: 'Noto sans Lao">
            <form action="{{ route('admin.room.update',$roomid->id) }}" method="POST">
              @csrf
              {{method_field('PUT')}}

              <div >
                <div class="input-group mb-4 input-group-static">
                  <label>ປ້ອນເບີຫ້ອງ</label>
                    <input name="number" type="text" value="{{ $roomid->number }}" class="form-control" required>
                </div>

                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="floor" class="form-select form-select-sm" required>
                    <option class="text-danger" value=""> ເລືອກຊັ້ນຫ້ອງ</option >
                      @if ($roomid->floor == "ຊັ້ນ 2")
                        <option value="ຊັ້ນ 2" selected>ຊັ້ນ 2</option >
                        <option value="ຊັ້ນ 3">ຊັ້ນ 3</option >
                        <option value="ຊັ້ນ 4">ຊັ້ນ 4</option >
                        <option value="ຊັ້ນ 5">ຊັ້ນ 5</option >
                      @elseif ($roomid->floor == "ຊັ້ນ 3")
                        <option value="ຊັ້ນ 2" >ຊັ້ນ 2</option >
                        <option value="ຊັ້ນ 3" selected>ຊັ້ນ 3</option >
                        <option value="ຊັ້ນ 4">ຊັ້ນ 4</option >
                        <option value="ຊັ້ນ 5">ຊັ້ນ 5</option >
                      @elseif ($roomid->floor == "ຊັ້ນ 4")
                        <option value="ຊັ້ນ 2" >ຊັ້ນ 2</option >
                        <option value="ຊັ້ນ 3" >ຊັ້ນ 3</option >
                        <option value="ຊັ້ນ 4" selected>ຊັ້ນ 4</option >
                        <option value="ຊັ້ນ 5">ຊັ້ນ 5</option >
                      @elseif ($roomid->floor == "ຊັ້ນ 5")
                        <option value="ຊັ້ນ 2" >ຊັ້ນ 2</option >
                        <option value="ຊັ້ນ 3" >ຊັ້ນ 3</option >
                        <option value="ຊັ້ນ 4" >ຊັ້ນ 4</option >
                        <option value="ຊັ້ນ 5" selected>ຊັ້ນ 5</option >
                      @endif
                  </select>
                  <label for="floatingSelect">ເລືອກປະເພດຫ້ອງ</label>
                </div>
                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="type_id" class="form-select form-select-sm" required>
                    <option class="text-danger" value=""> ເລືອກປະເພດຫ້ອງ</option >
                      @foreach ($type_rooms as $item) 
                          <option value="{{$item->id}}" {{$item->id == $roomid->type_id ? 'selected' : ''}}> {{$item->name}}</option>
                      @endforeach
                      
                  </select>
                  <label for="floatingSelect">ເລືອກປະເພດຫ້ອງ</label>
                </div>

                <div class="input-group mb-4 input-group-static">
                  <label>ປ້ອນລາຄາຫ້ອງ</label>
                    <input name="price" type="number" value="{{ $roomid->price }}" class="form-control" required>
                </div>

                <div class="input-group mb-2 input-group-static">
                  <label for="floatingSelect">ເລືອກຮູບຫ້ອງ</label>
                    <input width="40%" class="form-control" type="file" id="formFile" name="image" onchange="preview()">
                  <img id="frame" width="35%" src="{{ asset('storage/images/rooms/'.$roomid->image) }}" class="img-fluid" />
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
  @if ($message = Session::get('success'))
  <span style="color: #0fa034"><i class="fas fa-check"></i> </span>
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
