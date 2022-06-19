@extends('layouts.admin-layout')
@section('type_room','active bg-gradient-primary')
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
                        <a style="font-size: 27px;color:white" href="{{ route('admin.type.create') }}">
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
                    {{-- <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">#</th> --}}
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ຊື່ປະເພດ</th>
                    <th class="text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ps-2">ລາຍລະອຽດ</th>
                    <th class="text-secondary opacity-7"></th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($typeroom as $item)
                        <tr>
                          {{-- <td><p class="text-center font-weight-bold mb-0">{{$item->id}}</p></td> --}}
                          <td><p class="font-weight-bold mb-0">{{$item->name}}</p></td>
                          <td><p class="font-weight-bold mb-0">{{$item->detail}}</p></td>
                          <td class="align-middle">

                            <div style="display:flex">

                            
                              <a style="padding:0 10%" href="{{ route('admin.type.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                <i class="fa-solid fa-pen-to-square"></i>
                              </a>
                              {{-- <a style="padding-left: 10%" href="{{ route('admin.type.destroy',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                                <i style="color: red;" class="fa-solid fa-trash"></i>
                              </a> --}}

                              <form class="text-center font-weight-bold text-xs" method="post" action="{{ route('admin.type.destroy',$item->id) }}">
                                @csrf
                                @method('delete')
                                <a href="{{ route('admin.type.destroy',$item->id) }}" 
                                    onclick="event.preventDefault(); this.closest('form').submit(); return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                                    <i style="color: red;" class="fa-solid fa-trash"></i>
                                </a>
                            </form>
                          </div>

                          </td>
                        </tr>
                        {{-- <h1>{{ $item->room }}</h1> --}}
                    @endforeach

                </tbody>
              </table>
              {{$typeroom->links()}}
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