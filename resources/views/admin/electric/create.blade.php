
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
                        <a style="font-size: 27px;color:white" href="{{ route('admin.electric.index') }}">
                          <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2" style="font-family: 'Noto sans Lao">
            <div class="table-responsive p-0">
              <table style="font-family: 'Noto sans Lao" class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ໄອດິບບິນ & ລາຄ່າ</th>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7"> ຫ້ອງ & ຊັ້ນຫ້ອງ</th>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">ຊື່ & ອີເມວ</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">ເດືອນ & ປີ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ວັນໝົດກຳນົດ</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody >
                    @foreach ($electric as $item)
                        <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="{{ asset('storage/images/electrics/'.$item->image) }}" class="avatar avatar-sm me-3 border-radius-lg"  alt="user1">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center ">
                                          <h6 class="mb-0 text-sm">ລະຫັດບິນ: {{$item->IDwater}}</h6>
                                          <p class="text-xs text-secondary mb-0">ລາຄ່າ: {{$item->price}} ₭ </p>
                                          <p class="text-xs text-secondary mb-0">ສະຖານະ: <span style="color:blue;">ຈ່າຍເເລ້ວ</span> </p>
                                          <p class="text-xs text-secondary mb-0">ຍອດເຫຼືອ: <span style="color:blue;">0 ₭</span> </p>
                                      </div>
                                  </div>
                                </td>
                                <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('storage/images/rooms/'.$item->room->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center ">
                                        <h6 class="mb-0 text-sm">ຫ້ອງ: {{$item->room->number}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{$item->room->floor}}</p>
                                    </div>
                                </div>
                                </td>

                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('storage/images/profiles/'.$item->member->user->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center ">
                                            <h6 class="mb-0 text-sm"> {{$item->member->user->gender}} {{$item->member->user->name}}</h6>
                                            <p class="text-xs text-secondary mb-0">{{$item->member->user->phone}}</p>
                                        </div>
                                    </div>
                                    </td>


                                <td> <p class="text-xs text-center font-weight-bold mb-0">{{ $item->created_at->format('m-Y') }}</p></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{date('d-m-Y', strtotime($item->dateLine)) }}</span></td>
                                
                                <td class="align-middle">

                                    <a style="padding-right:25%" href="{{ route('admin.electric.show',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit room">
                                      <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.electric.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    <i class="fa-solid fa-user-pen"></i>
                                    </a>
                                </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              {{$electric->links()}}
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ເພີ່ມຂໍ້ມູນບິນໄຟຟ້າ</h6>
            </div>
          </div>

          <div class="card-body" style="font-family: 'Noto sans Lao">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

              <div >
                <div class="input-group mb-4 input-group-static">
                  <label>ປ້ອນເບີຫ້ອງ</label>
                    <input name="number" type="text" class="form-control" required>
                </div>

                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="floor" class="form-select form-select-sm" required>
                    <option class="text-danger" value=""> ເລືອກຫ້ອງ</option >
                  @foreach ($room as $item) 
                          <option value="{{$item->id}}"> {{$item->number}}</option>
                      @endforeach
                  </select>
                  <label for="floatingSelect">ເລືອກຫ້ອງ</label>
                </div>

                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="type_id" class="form-select form-select-sm" required>
                    <option class="text-danger" value=""> ເລືອກຜູ້ເຊົ່າ</option >
                      @foreach ($member as $item) 
                          <option value="{{$item->id}}"> {{$item->user->name}}</option>
                      @endforeach
                  </select>
                  <label for="floatingSelect">ເລືອກຜູ້ເຊົ່າ</label>
                </div>

                <div class="input-group mb-4 input-group-static">
                  <label>ປ້ອນລາຄາຫ້ອງ</label>
                    <input name="price" type="number" class="form-control" required>
                </div>

                <div class="input-group mb-2 input-group-static">
                  <label for="floatingSelect">ເລືອກຮູບຫ້ອງ</label>
                    <input width="40%" class="form-control" type="file" id="formFile" name="image" onchange="preview()">
                  <img id="frame" width="35%" src="" class="img-fluid" />
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
