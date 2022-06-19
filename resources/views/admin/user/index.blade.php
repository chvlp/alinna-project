{{-- @extends('layouts.admin-layout')
@section('title','ຂໍ້ມູນຜູ້ນໃຊ້')
@section('content')
<div class="sidebar">
    <ul class="sidebar-nav">
        <li class="sidebar-nav-item">
            <a  href="{{route('admin.index')}}" class="sidebar-nav-link">
                <div>
                    <i  class="fas fa-home"></i>
                </div>
                <span>ໜ້າຫຼັກ</span>
            </a>
        </li>
        <li class="sidebar-nav-item">
            <a href="{{route('admin.user.index')}}" class="sidebar-nav-link active">
                <div>
                    <i  class="fas fa-users-cog"></i>
                </div>
                <span>ຈັດການຂໍ້ມູນຜູ້ໃຊ້</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('school.index')}}" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-university"></i>
                </div>
                <span>ຈັດການຂໍ້ມູນໂຮງຮຽນ</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('dormitory.index')}}" class="sidebar-nav-link ">
                <div>
                    <i class="fas fa-store-alt"></i>
                </div>
                <span>ຈັດການຂໍ້ມູນຫ້ອງເເຖວ</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('comment.index')}}" class="sidebar-nav-link ">
                <div>
                    <i class="fas fa-comment-alt"></i>
                </div>
                <span>ຈັດການຂໍ້ມູນຄອມເມັ້ນ</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('report.index')}}" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <span>ລາຍງານຫ້ອງເເຖວ</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('report_user.index')}}" class="sidebar-nav-link">
                <div>
                    <i class="far fa-address-book"></i>
                </div>
                <span>ລາຍງານຜູ້ໃຊ້</span>
            </a>
        </li>
        <li  class="sidebar-nav-item">
            <a href="{{route('report_user_dormit.index')}}" class="sidebar-nav-link">
                <div>
                    <i class="fas fa-address-book"></i>
                </div>
                <span>ລາຍງານເຈົ້າຂອງຫ້ອງເເຖວ</span>
            </a>
        </li>
    </ul>
</div>
<!-- main content -->
<div class="wrapper">
    <div class="row">

        <div class="col-12 col-m-24 col-sm-24">
            <div class="counter bg-primary">
                <p>ຈຳນວນຜູ້ໃຊ້</p>
                <h3>{{$cuser-1}} ຄົນ</h3>
                <p>
                    <i class="fas fa-user"></i>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3 col-m-6 col-sm-6">
            <form action="/user/search" method="get" class="navbar-search" >
                <input style="border:1px solid #4834d4;" type="text" name="search" class="search-input" placeholder="ຄົ້ນຫາທີ່ນີ້...">
                <button style="border: none;" type="submit"><i style="color:#4834d4;margin-top: -13px;" class="fas fa-search"></i></button>
            </form>
        </div>
       <div style="margin-top: 10px;" class="col-6 col-m-6 col-sm-6">
            @if ($message = Session::get('succes'))
                <span class="sucs"><i class="fas fa-check"></i> {{$message}}</span>
            @endif
        </div>
    </div>
     <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        ຕາຕະລາງ
                    </h3>
                </div>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th>ຊື່</th>
                                <th>ອີເມວ</th>
                                <th>ເບີໂທ</th>
                                <th>ຕຳເເໜ່ງ</th>
                                <th>ຈັດການ</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                @if ($item->id>1)
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a href="{{route('admin.user.edit',$item->id) }}"><i style="font-size: 12px;" class="fas fa-edit"></a></i>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{$users->links()}}
                </div>
            </div>
        </div>
</div>
@endsection --}}

@extends('layouts.admin-layout')
@section('manageuser','active bg-gradient-primary')
@section('searchUser','/admin/user/search')
@section('title','ຈັດການຂໍ້ມູນຜູ້ໃຊ້')
@section('content')
<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
    <div class="row mb-4">
      <div class="col">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ຂໍ້ມູນຜູ້ໃຊ້</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table style="font-family: 'Noto sans Lao" class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ໄອດິ</th>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">ຊື່ & ອີເມວ</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">ຕຳເເໜ່ງ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ເບີໂທ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ວັນທີສະໝັກ</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody >
                    @foreach ($users as $item)
                        <tr>
                            @if ($item->id>1)
                                <td><p class="text-center font-weight-bold mb-0">{{$item->id}}</p></td>
                                <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{ asset('storage/images/profiles/'.$item->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center ">
                                        <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{$item->email}}</p>
                                    </div>
                                </div>
                                </td>
                                <td> <p class="text-xs text-center font-weight-bold mb-0">{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }} | {{ implode(', ', $item->member()->get()->pluck('status')->toArray()) }}</p></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->phone}} </span></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->created_at->format('d/m/Y H:i:s')}}</span></td>
                                <td class="align-middle">
                                    <a href="{{route('admin.user.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    <i class="fa-solid fa-user-pen"></i>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
              </table>
              {{$users->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection