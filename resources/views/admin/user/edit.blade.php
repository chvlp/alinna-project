@extends('layouts.admin-layout')
@section('manageuser','active bg-gradient-primary')
@section('searchUser','/admin/user/edit/search')
@section('title','ເເກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້')
@section('content')
<div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
    <div class="row mb-4">
      <div class="col-lg-8 col-md-8 mb-md-4 mb-4">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ຂໍ້ມູນຜູ້ໃຊ້</h6>
            </div>
          </div>
          <div style="font-family: 'Noto sans Lao" class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ໄອດິ</th>
                    <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">ຊື່ & ອີເມວ</th>
                    <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">ຕຳເເໜ່ງ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ເບີໂທ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ວັນທີເເກ້ໄຂລາສຸດ</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            @if (($item->id>1) && ($item->id==$user->id))
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
                                <td> <p class="text-xs text-center font-weight-bold mb-0">{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</p></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->phone}}</span></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->updated_at->format('d/m/Y H:i:s')}}</span></td>
                                <td class="align-middle">
                                    <a class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        @if ($item->id==$user->id)
                                            <i style="color:red" class="fa-solid fa-user-pen"></i>
                                        @else
                                            <i class="fa-solid fa-user-pen"></i>
                                        @endif
                                    </a>
                                    
                                </td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
                

                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            @if (($item->id>1) && ($item->id !== $user->id))
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
                                <td> <p class="text-xs text-center font-weight-bold mb-0">{{ implode(', ', $item->roles()->get()->pluck('name')->toArray()) }}</p></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->phone}}</span></td>
                                <td class="align-middle text-center"> <span class="text-xs font-weight-bold">{{$item->updated_at->format('d/m/Y H:i:s')}}</span></td>
                                <td class="align-middle">
                                    <a href="{{route('admin.user.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        @if ($item->id==$user->id)
                                            <i style="color:red" class="fa-solid fa-user-pen"></i>
                                        @else
                                            <i class="fa-solid fa-user-pen"></i>
                                        @endif
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


      <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">ເເກ້ໄຂຂໍ້ມູນຜູ້ໃຊ້</h6>
            </div>
          </div>

          <div class="card-body" style="font-family: 'Noto sans Lao">
            <form action="{{ route('admin.user.update',$user) }}" method="POST">
                @csrf
                {{method_field('PUT')}}

           
            
            <div class="input-group input-group-dynamic mb-4 form-floating">
                <div class="d-flex px-2 py-1">
                    <div>
                        <img src="{{ asset('storage/images/profiles/'.$user->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center ">
                        <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                        <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                    </div>
                </div>
            </div>
            @if ($user->roles->pluck('id') == "[2]")
                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="roles[]" class="form-select form-select-sm" aria-label=".form-select-sm example" id="experience" onchange="showHide()" required>
                    <option class="text-danger" value=""> ເລືອກຕຳເເໜ່ງ </option>
                      @foreach ($roles as $item) 
                          @if ($item->id==4)
                              <option value="{{$item->id}}" {{$item->id == $user->roles->pluck('id')->contains($item->id) ? 'selected' : ''}}> {{$item->name}} </option>
                          @endif  
                      @endforeach
                  </select>
                  <label for="floatingSelect">ເລືອກຕຳເເໜ່ງ</label>
                </div>
            @elseif ($user->roles->pluck('id')=="[3]")

              @foreach ($member as $item)

                @if ($item->user_id == $user->id)
              
                  <div class="input-group input-group-dynamic mb-4">
                    <label  class="form-control"  >ລະຫັດປະຈຳຕົວ:  {{ $item->idcard }} {{ $item->user_id }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ບ້ານ:  {{ $item->village }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ເມືອງ:  {{ $item->distric }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ເເຂວງ:  {{ $item->province }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ປະເທດ:  {{ $item->country }}</label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" value="5" type="radio" name="roles[]" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                      ປິດບັນຊີ
                    </label>
                  </div>
                @endif

              @endforeach

            @elseif ($user->roles->pluck('id')=="[4]")
                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="roles[]" class="form-select form-select-sm" aria-label=".form-select-sm example" id="experience" onchange="showHide()" required>
                    <option class="text-danger" value=""> ເລືອກຕຳເເໜ່ງ </option >
                      @foreach ($roles as $item) 
                          @if (($item->id != 4) &&($item->id!=1) &&($item->id!=5))
                              <option value="{{$item->id}}" {{$item->id == $user->roles->pluck('id')->contains($item->id) ? 'selected' : ''}}> {{$item->name}} </option>
                          @endif  
                      @endforeach
                  </select>
                  <label for="floatingSelect">ເລືອກຕຳເເໜ່ງ</label>
                </div>

            @elseif ($user->roles->pluck('id')=="[5]")

              @foreach ($member as $item)
                @if ($item->user_id == $user->id)
                  <div class="input-group input-group-dynamic mb-4">
                    <label   class="form-control"  >ລະຫັດປະຈຳຕົວ:  {{ $item->idcard }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ບ້ານ:  {{ $item->village }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ເມືອງ:  {{ $item->distric }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ທີ່ຢູ່ເເຂວງ:  {{ $item->province }}</label>
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                      <label  class="form-control"  >ປະເທດ:  {{ $item->country }}</label>
                  </div>
                  
                  
                  <div class="form-check">
                    <input class="form-check-input" value="33" type="radio" name="roles[]" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                      ເປີດບັນຊີ
                    </label>
                  </div>
                @endif
              @endforeach
                

            @endif


      

              <div id="hidden-field"  onchange="showHide()" style="display: none;">
                <div class="input-group input-group-dynamic mb-4" >
                    <label class="form-label">ລະຫັດປະຈຳຕົວ</label>
                    <input name="idcard" type="text" class="form-control" >
                </div>
                <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">ບ້ານ</label>
                    <input name="village" type="text" class="form-control">
                </div>
                <div class="input-group input-group-dynamic mb-4" >
                    <label class="form-label">ເມືອງ</label>
                    <input name="distric" type="text" class="form-control">
                </div>
                <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">ເເຂວງ</label>
                    <input name="province" type="text" class="form-control">
                </div>
                <div class="input-group input-group-dynamic mb-4" >
                    <label class="form-label">ປະເທດ</label>
                    <input name="country" type="text" class="form-control">
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
      <div class="toast-body">{{$message}} {{ $user->name }} ເປັນ {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}.</div>
      </div>
    </div>
  </div>

@endif

  


@endsection