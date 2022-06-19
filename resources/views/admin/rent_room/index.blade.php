
@extends('layouts.admin-layout')
@section('rent_room','active bg-gradient-primary')
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
                    <div style="padding-right: 3%" class="col-lg-6 col-5 my-auto text-end">
                        <a style="font-size: 27px;color:white" href="{{ route('admin.rent_room.create') }}">
                          <i class="fa-solid fa-circle-plus"></i>
                        </a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table style="font-family: 'Noto sans Lao" class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7"> ຫ້ອງ & ຊັ້ນຫ້ອງ</th>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">ຊື່ & ອີເມວ</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">ວັນເດືອນປີເຊົ່າ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ວັນໝົດກຳນົດ</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody >
                    @foreach ($rent_room as $item)
                        <tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                      <div>
                                          <img src="{{ asset('storage/images/rooms/'.$item->room->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                      </div>
                                      <div class="d-flex flex-column justify-content-center ">
                                          <h6 class="mb-0 text-sm">ເບີຫ້ອງ: {{$item->room->number}}</h6>
                                          <p class="text-xs text-secondary mb-0">ລາຄ່າ: {{$item->room->price}} ₭ </p>
                                          <p class="text-xs text-secondary mb-0">ສະຖານະ: <span style="color:blue;">ຈ່າຍເເລ້ວ</span> </p>
                                          <p class="text-xs text-secondary mb-0">ຍອດເຫຼືອ: <span style="color:blue;">0 ₭</span> </p>
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
                                            <p class="text-xs text-secondary mb-0">ອີເມວ: {{$item->member->user->email}}</p>
                                            <p class="text-xs text-secondary mb-0">ໂທ: {{$item->member->user->phone}}</p>
                                        </div>
                                    </div>
                                    </td>


                                <td> <p class="text-xs text-center font-weight-bold mb-0">{{date('d-m-Y', strtotime($item->intodate)) }}</p></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{date('d-m-Y', strtotime($item->outdate)) }}</span></td>
                                
                                <td class="align-middle">
                                  
                                  <form class="text-center font-weight-bold text-xs" method="post" action="{{ route('admin.rent_room.destroy',$item->id) }}">
                                    @csrf
                                    @method('delete')

                                    <a style="padding-right:15%" href="{{ route('admin.rent_room.show',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit room">
                                      <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a style="padding-right:15%" href="{{ route('admin.rent_room.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    <i class="fa-solid fa-user-pen"></i>
                                    </a>

                                    <a class="text-center font-weight-bold text-xs" href="{{ route('admin.rent_room.destroy',$item->id) }}" onclick="event.preventDefault(); this.closest('form').submit(); return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                                      <i style="color: red;" class="fa-solid fa-trash"></i>
                                    </a>
                                    
                                    </form>
                                    
                                      
                                    
                                </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              {{$rent_room->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection