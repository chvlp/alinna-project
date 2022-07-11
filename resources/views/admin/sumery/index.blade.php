@extends('layouts.admin-layout')
@section('sumery', 'active bg-gradient-primary')
@section('title', 'ໜ້າລາຍງານ')
@section('page', 'ລາຍງານ')
@section('header', 'ສັ່ງລວມຂໍ້ມູນ')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ໄອດີ ເເອັດມິນ</p>
                            <h4 class="mb-0">{{ $cuser1 }} ຄົນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask week
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ໄອດີ ພະນັກງານ</p>
                            <h4 class="mb-0">{{ $cuser2 }} ຄົນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than lask month --}}
                        {{-- </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ໄອດີ ຜູ້ເຊົ່າ</p>
                            <h4 class="mb-0">{{ $cuser3 }} ຄົນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        {{-- <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-header p-3 pt-2">
                        <div
                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <div class="text-end pt-1">
                            <p class="text-sm mb-0 text-capitalize">ໄອດີ ຜູ້ໃຊ້</p>
                            <h4 class="mb-0">{{ $cuser4 }} ຄົນ</h4>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-3">
                        {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday --}}
                        {{-- </p> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4 pt-5">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>ຜູ້ໃຊ້ທັງໝົດ</h6>
                                <i class="fa fa-check text-info" aria-hidden="true">dfdfg</i>
                                <span class="font-weight-bold ms-1">{{ $cuser5 }} ໄອດີ</span> 
                                </p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0" style="font-family: 'Noto sans Lao">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            #</th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ຊື່ ແລະ ນາມສະກຸນ</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ຕຳເເໜ່ງ</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ເບີໂທ</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ມື້ສະໝັກ </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                        <tr>
                                          <td>
                                            <div class="d-flex px-2 py-1">
      
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->id }}</h6>
                                                </div>
                                            </div>
                                        </td>

                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('storage/images/profiles/' . $item->image) }}" width="100%"
                                                            class="avatar avatar-sm me-3" alt="xd">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $item->gender }} {{ $item->name }} {{ $item->surname }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                              <div class="d-flex px-2 py-1">
        
                                                  <div class="d-flex flex-column justify-content-center">
                                                      <h6 class="mb-0 text-sm">
                                                        {{ implode(', ',$item->roles()->get()->pluck('name')->toArray()) }} |
                                                        {{ implode(', ',$item->member()->get()->pluck('status')->toArray()) }}
                                                      </h6>
                                                  </div>
                                              </div>
                                          </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="text-xs font-weight-bold"> {{ $item->phone }} </span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                              <span class="text-xs font-weight-bold"> {{ $item->created_at }} </span>
                                          </td>
                                        </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
