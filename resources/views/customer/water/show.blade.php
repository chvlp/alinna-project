@extends('layouts.customer-layout')
@section('content')
    <div class="container mt-6">
        <div class="row">
            <div class="col-lg-12"> <br><br>
                <div class="row">
                    <div class="col-xl-12 mb-xl-0 mb-4">
                        <div class="card">



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
                                            <tr>

                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ date('d-m-Y', strtotime($water->outdate)) }}
                                                        </h6>
                                                    </div>

                                                <td class="align-middle text-center text-sm">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $water->IDwater }}
                                                        </h6>
                                                    </div>
                                                </td>
                                                
                                                <td class="align-middle text-center text-sm">
                                                 <div class="d-flex flex-column justify-content-center">
                                                     <h6 class="mb-0 text-sm">{{ $water->price }} $
                                                     </h6>
                                                 </div>
                                             </td>

                                                <td class="align-middle text-center text-sm">
                                                    <a href="{{ asset('storage/images/Waters/' . $water->image) }}"
                                                        target="_blank">
                                                        <img src="{{ asset('storage/images/Waters/' . $water->image) }}"
                                                            alt="" width="45px"></a>
                                                </td>

                                                <td class="align-middle text-center text-sm">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        @if ($water->status == 'ກຳລັງກວດສອບ')
                                                             <a href="{{ route('Customer.water.edit',$water->id) }}">
                                                                <h6 class="mb-0 text-sm">
                                                                   <button style="cursor: context-menu;width:80%"
                                                                       class="btn btn-warning">
                                                                       {{ $water->status }}
                                                                   </button>
                                                               </h6>
                                                             </a>
                                                           
                                                        @elseif ($water->status == 'ຍອມຮັບ')
                                                            <h6 class="mb-0 text-sm">
                                                                <button style="cursor: context-menu;width:80%"
                                                                    class="btn btn-success">
                                                                    {{ $water->status }}
                                                                </button>

                                                            </h6>
                                                        @else
                                                            <h6 class="mb-0 text-sm">
                                                             <a href="{{ route('Customer.water.edit',$water->id) }}">
                                                                <button style="cursor: context-menu;width:80%"
                                                                    class="btn btn-danger">
                                                                    {{ $water->status }}
                                                                </button>
                                                             </a>
                                                            </h6>
                                                        @endif

                                                    </div>

                                                </td>


                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <section>
                            <div class="container py-4">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                                        <h3 class="text-center">ປ້ອນຂໍ້ມູນການຊຳລະຄານ້ຳປະປາ</h3>
                                        <form action="{{ route('Customer.water.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-group mb-4 input-group-static">
                                                            <label>ປ້ອນລາຄາຂອງບິນ</label>
                                                            <input class="form-control" name="price"
                                                                aria-label=" ປ້ອນລາຄາທີ່ຈ່າຍ..." type="number">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="water_id" value="{{ $water->id }}">
                                                    <div class="col-md-6 ps-2">
                                                        <div class="input-group mb-4 input-group-static">
                                                            <label>ເລືອກຮູບພາບທີ່ຈ່າຍບິນ</label>
                                                            <input type="file" name="image" class="form-control"
                                                                placeholder="" aria-label="ເລືອກຮູບພາບບິນ...">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-4 input-group-static">
                                                    <label>ປ້ອນລາຍລະອຽດ</label>
                                                    <textarea name="detail" class="form-control" id="message" rows="4"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit"
                                                            class="btn bg-gradient-dark w-100">ສົ່ງ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
