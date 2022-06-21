
@extends('layouts.admin-layout')
@section('rentRoom','active bg-gradient-primary')
{{-- @section('searchUser','/admin/user/search') --}}
@section('title','ຈັດການຂໍ້ມູນບໍລິການເຊົ່າ')
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
                      <h6 style="" class="text-white text-capitalize ps-3">ຂໍ້ມູນບໍລິການເຊົ່າຫ້ອງ</h6>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          
          hhhh
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">      

              <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="row">

                      <div  class="col-xl-6 mb-xl-0 mb-4" >

                        <div style="border:1px solid red" class="card bg-transparent shadow-xl">
                          <div class="overflow-hidden position-relative border-radius-xl">
                            <img src="{{ asset('storage/images/rooms/'.$rentRooms->room->image) }}" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                            <span class="mask bg-gradient-dark opacity-10"></span>
                            <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                              <span class="text-white p-2">ຟຣີ</span><i class="material-icons text-white">wifi</i> &nbsp;&nbsp;&nbsp; <span class="text-white p-2">ຟຣີ  <i class="fa-solid fa-dumbbell"></i></span>
                              <h5 class="text-white  mt-4 mb-5 pb-2">ເບີຫ້ອງ: {{ $rentRooms->room->number }}</h5>
                              <div class="d-flex">
                                <div class="d-flex">
                                  <div class="me-4">
                                    <p class="text-white text-sm opacity-8 mb-0">ລາຄ່າ</p>
                                    <h6 class="text-white mb-0">{{ $rentRooms->room->price }} ₭</h6>
                                  </div>
                                  <div>
                                    <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                    <h6 class="text-white mb-0">{{date('d-m-Y', strtotime($rentRooms->intodate)) }}</h6>
                                  </div>
                                </div>
                                <div class="ms-auto walign-items-end justify-content-end">
                                  <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດອາຍຸ</p>
                                  <h6 class="text-white mb-0">{{date('d-m-Y', strtotime($rentRooms->outdate)) }}</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
          
                      <div class="col-xl-6 mb-xl-0 mb-4" style="font-family: 'Noto sans Lao">
                        <div class="card bg-transparent shadow-xl">
                          <div class="overflow-hidden position-relative border-radius-xl">
                            <img src="{{ asset('storage/images/profiles/'.$rentRooms->member->user->image) }}" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                            <span class="mask bg-gradient-dark opacity-10"></span>
                            <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                              <i class="material-icons text-white p-2"></i>
                              <h5 class="text-white mt-4 mb-5 pb-2">{{ $rentRooms->member->user->gender }} {{ $rentRooms->member->user->name }}</h5>
                              <div class="d-flex">
                                <div class="d-flex">
                                  <div class="me-4">
                                    <p class="text-white text-sm opacity-8 mb-0">ໂທ</p>
                                    <h6 class="text-white mb-0">{{ $rentRooms->member->user->phone }}</h6>
                                  </div>
                                </div>
                                <div class="ms-auto walign-items-end justify-content-end">
                                  <p class="text-white text-sm opacity-8 mb-0">ສະຖານະ</p>
                                    <h6 class="text-white mb-0">{{ $rentRooms->member->status }}</h6>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-12 mb-lg-0 mb-4" >
                        <div class="card mt-4">
                          <div class="card-header pb-0 p-3">
                            <div class="row">
                              <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0">ປະຫວັດການເຊົ່າ</h6>
                              </div>
                            </div>
                          </div>
                          <div  class="card-body p-3" >
                            <div class="row">
                                <div  class="col-xl-6">
                                      <div class="col-lg-6 col-md-6 col-sm-6 mb-md-6 mb-6">
                                        <div class="card">
                                          @foreach ($rentRoomStory as $item)

                                            <div style="border:1px solid red" class="card bg-transparent shadow-xl">
                                              <div class="overflow-hidden position-relative border-radius-xl">
                                                <span class="mask bg-gradient-dark opacity-10"></span>
                                                <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                                                  <h5 class="text-white  mt-4 mb-5 pb-2">ເບີຫ້ອງ: {{ $rentRooms->room->number }}</h5>
                                                  <div class="d-flex">
                                                    <div class="d-flex">
                                                      <div>
                                                        <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                        <h6 class="text-white mb-0">{{ date('d-m-Y'),strtotime($item->rentRoom->intodate) }}</h6>
                                                      </div>
                                                    </div>
                                                    <div class="ms-auto walign-items-end justify-content-end">
                                                      <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດອາຍຸ</p>
                                                      <h6 class="text-white mb-0">{{ date('d-m-Y'),strtotime($item->rentRoom->outdate) }}</h6>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                          @endforeach
                                        </div>
                                    </div>
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
                            <h6 class="mb-0">ອຸປະກອນຫ້ອງ</h6>
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
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                              <span class="text-xs">#RV-126749</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                              $250
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                              <span class="text-xs">#FB-212562</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                              $560
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                              <span class="text-xs">#QW-103578</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                              $120
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                            </div>
                          </li>
                          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                            <div class="d-flex flex-column">
                              <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                              <span class="text-xs">#AR-803481</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                              $300
                              <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-lg-6 col-md-6 col-sm-0 mb-md-3 mb-3">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

              <div class="bg-gradient-primary">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6 style="" class="text-white text-capitalize ps-3">ຂໍ້ມູນກນຊຳລະຄ່າໄຟຟ້າ</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
              <div class="row">
                <div class="card h-100">
                  <div class="card-body p-3 pb-0">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                          <span class="text-xs">#MS-415646</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $180
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                          <span class="text-xs">#RV-126749</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $250
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                          <span class="text-xs">#FB-212562</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $560
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                          <span class="text-xs">#QW-103578</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $120
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex flex-column">
                          <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                          <span class="text-xs">#AR-803481</span>
                        </div>
                        <div class="d-flex align-items-center text-sm">
                          $300
                          <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-0 mb-md-3 mb-3">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

            <div class="bg-gradient-primary">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 style="" class="text-white text-capitalize ps-3">ຂໍ້ມູນກນຊຳລະຄ່ານ້ຳປະປາ</h6>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
            <div class="row">
              <div class="card h-100">
                <div class="card-body p-3 pb-0">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                        <span class="text-xs">#MS-415646</span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                        $180
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                        <span class="text-xs">#RV-126749</span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                        $250
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                        <span class="text-xs">#FB-212562</span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                        $560
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                        <span class="text-xs">#QW-103578</span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                        $120
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                      </div>
                    </li>
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                        <span class="text-xs">#AR-803481</span>
                      </div>
                      <div class="d-flex align-items-center text-sm">
                        $300
                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
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
          <span class="me-auto font-weight-bold">ສຳເລັດ</span>
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
