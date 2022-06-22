@extends('layouts.admin-layout')
@section('room','active bg-gradient-primary')
@section('searchUser','')
@section('title','ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນຫ້ອງ')
@section('header', 'ສະເເດງຂໍ້ມູນຫ້ອງ')

@section('content')

<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">

    <div class="row mt-4">
        <div style="margin:auto" class="col-lg-6 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                   <img style="border-radius: 3%" class="m-auto" src="{{ asset('storage/images/rooms/'.$rooms->image) }}" width="100%" alt="">
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

        {{-- <div class="col-lg-4">
          <div class="card h-100">
              <div class="card-header pb-0 p-3">
                  <div class="row">
                      <div class="col-6 d-flex align-items-center">
                          <h6 class="mb-0">ໃບສັນຍາ ແລະ ອຸປະກອນຫ້ອງ</h6>
                      </div>
                      <div class="col-6 text-end">
                          <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                      </div>
                  </div>
              </div>
              <div class="card-body p-3 pb-0">
                  <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                          <div class="d-flex flex-column">
                              <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                              <span class="text-xs">#MS-415646</span>
                          </div>
                          <div class="d-flex align-items-center text-sm">
                              $180
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                      class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                  PDF</button>
                          </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                          <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                              <span class="text-xs">#RV-126749</span>
                          </div>
                          <div class="d-flex align-items-center text-sm">
                              $250
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                      class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                  PDF</button>
                          </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                          <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                              <span class="text-xs">#FB-212562</span>
                          </div>
                          <div class="d-flex align-items-center text-sm">
                              $560
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                      class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                  PDF</button>
                          </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                          <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                              <span class="text-xs">#QW-103578</span>
                          </div>
                          <div class="d-flex align-items-center text-sm">
                              $120
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                      class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                  PDF</button>
                          </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                          <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                              <span class="text-xs">#AR-803481</span>
                          </div>
                          <div class="d-flex align-items-center text-sm">
                              $300
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                      class="material-icons text-lg position-relative me-1">picture_as_pdf</i>
                                  PDF</button>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div> --}}

        
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

@endsection