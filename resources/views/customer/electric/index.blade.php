@extends('layouts.customer-layout')
@section('content')
    <div class="container mt-6">
        <div class="row">
            <div class="col-lg-12"> <br><br>
                <div class="row">
                    <div class="col-xl-12 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl">
                                <img src="{{ asset('storage/images/rooms/' . $rentRooms->room->image) }}"
                                    class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100"
                                    alt="pattern-tree">
                                <span class="mask bg-gradient-dark opacity-9"></span>
                                <div class="card-body position-relative z-index-1 p-3" style="font-family: 'Noto sans Lao">
                                    <p class="material-icons text-white p-2">

                                        <span style="font-family: 'Noto sans Lao">
                                            ເບີຫ້ອງ |
                                            {{ $rentRooms->room->number }}
                                        </span>
                                    </p>

                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <h5 class="text-white mt-4 mb-5 pb-2">
                                                    ຄ່າຫ້ອງ| {{ $rentRooms->room->price }} $ / 1 ເດືອນ
                                                </h5>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">ວ.ດ.ປ ເຊົ່າ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->intodate }}</h6>
                                            </div>
                                        </div>

                                        <div class="ms-auto w-50 d-flex align-items-end justify-content-end">
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">ວັນໝົດກຳນົດ</p>
                                                <h6 class="text-white mb-0">
                                                    {{-- {{ date('d-m-Y',strtotime(now())) }} --}}
                                                    @if (date('d-m-Y', strtotime($rentRooms->outdate)) <= date('d-m-Y', strtotime(Now())))
                                                        <button class="btn btn-danger">
                                                            {{ date('d-m-Y', strtotime($rentRooms->outdate)) }}
                                                        </button>
                                                    @else
                                                        <button class="btn btn-success">
                                                            {{ date('d-m-Y', strtotime($rentRooms->outdate)) }}
                                                        </button>
                                                    @endif



                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">ອຸປະກອນຫ້ອງ</p>
                                                <h6 class="text-white mb-0">{{ $rentRooms->room->type_room->detail }}</h6>
                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-body p-1">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="card bg-transparent shadow-xl">
                                            <div class="overflow-hidden position-relative border-radius-xl">
                                                <img src="{{ asset('assets/ATM/bcel.jpg') }}"
                                                    class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100"
                                                    alt="pattern-tree">
                                                <span class="mask bg-gradient-dark opacity-10"></span>
                                                <div class="card-body position-relative z-index-1 p-3">
                                                    <i class="material-icons text-white p-2">ເລກບັນຊີ</i>
                                                    <h5 class="text-white mt-4 mb-5 pb-2">
                                                        4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
                                                    </h5>
                                                    <div class="d-flex">
                                                        <div class="d-flex">
                                                            <div class="me-4">
                                                                <p class="text-white text-sm opacity-8 mb-0">ຊື່ບັນຊີ</p>
                                                                <h6 class="text-white mb-0">Bounlert Khountavong.MR</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card h-100">
                                            <div class="card-header pb-0 p-3">
                                                <div class="row">
                                                    <div class="col-6 d-flex align-items-center">
                                                        <h6 class="mb-0">ໃບສັນຍາ</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-3 pb-0">
                                                <ul class="list-group">
                                                    <a href="{{ asset('storage/images/rentRooms/' . $rentRooms->image) }}"
                                                        target="_blank">
                                                        <img style="border-radius: 5%"
                                                            src="{{ asset('storage/images/rentRooms/' . $rentRooms->image) }}"
                                                            width="100%" alt="">
                                                    </a>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h6 class="mb-0">ບິນໄຟຟ້າ</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body p-1">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table align-items-center mb-0">
                                            <thead>

                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        ເດືອນປີ</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                        ເລກໃບບິນ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ເລກຄັ້ງກ່ອນ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ເລກຄັ້ງນີ້</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ລາຄາ</th>

                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ຮູບພາບ</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ສະຖານະ ການຊຳລະ</th>
                                                        <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        </th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($electric as $item)
                                                    <tr>

                                                        <td>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ date('d-m-Y', strtotime($item->outdate)) }}
                                                                </h6>
                                                            </div>

                                                        <td class="align-middle text-center text-sm">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $item->IDelectric }}
                                                                </h6>
                                                            </div>
                                                        </td>

                                                        <td class="align-middle text-center text-sm">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $item->before }}
                                                                </h6>
                                                            </div>
                                                        </td>

                                                        <td class="align-middle text-center text-sm">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ $item->after }}
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        
                                                        <td class="align-middle text-center text-sm">
                                                         <div class="d-flex flex-column justify-content-center">
                                                             <h6 class="mb-0 text-sm">{{ $item->price }} $
                                                             </h6>
                                                         </div>
                                                     </td>

                                                        <td class="align-middle text-center text-sm">
                                                            <a href="{{ asset('storage/images/rentRoomStory/' . $item->image) }}"
                                                                target="_blank">
                                                                <img src="{{ asset('storage/images/rentRoomStory/' . $item->image) }}"
                                                                    alt="" width="45px"></a>
                                                        </td>

                                                        <td class="align-middle text-center text-sm">

                                                            <div class="d-flex flex-column justify-content-center">
                                                                @if ($item->status == 'ກຳລັງກວດສອບ')
                                                                     <a href="{{ route('Customer.electric.edit',$item->id) }}">
                                                                        <h6 class="mb-0 text-sm">
                                                                           <button style="cursor: context-menu;width:80%"
                                                                               class="btn btn-warning">
                                                                               {{ $item->status }}
                                                                           </button>
                                                                       </h6>
                                                                     </a>
                                                                   
                                                                @elseif ($item->status == 'ຍອມຮັບ')
                                                                    <h6 class="mb-0 text-sm">
                                                                        <button style="cursor: context-menu;width:80%"
                                                                            class="btn btn-success">
                                                                            {{ $item->status }}
                                                                        </button>

                                                                    </h6>
                                                                @else
                                                                    <h6 class="mb-0 text-sm">
                                                                     <a href="{{ route('Customer.electric.edit',$item->id) }}">
                                                                        <button style="cursor: context-menu;width:80%"
                                                                            class="btn btn-danger">
                                                                            {{ $item->status }}
                                                                        </button>
                                                                     </a>
                                                                    </h6>
                                                                @endif

                                                            </div>

                                                        </td>


                                                    </tr>
                                                @endforeach
                                                {{-- {{ $electric }} --}}
                                            </tbody>
                                        </table>
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
@endsection
