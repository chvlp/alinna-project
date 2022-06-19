@extends('layouts.loginRegis-layout')
@section('content-login')
<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">ສະໝັກສະມາຊິກ</h4>
                {{-- <div class="row mt-3">
                  <div class="col-2 text-center ms-auto">
                    <a class="btn btn-link px-3" href="#">
                        <i style="color:#0a4dd4;font-size:40px" class="fa-brands fa-facebook"></i>
                    </a>
                  </div>
                  <div class="col-2 text-center me-auto">
                    <a class="btn btn-link px-3" href="#">
                        <i style="color:#ff0000;font-size:40px" class="fa-brands fa-google-plus-g"></i>
                    </a>
                  </div>
                </div> --}}
              </div>
            </div>

            <div style="font-family: 'Noto Sans Lao" class="card-body">                    
              <form role="form" class="text-start"  method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">ຊື່</label>
                    <input  type="input" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                @error('name')
                  <span class="IIII" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
                
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">ນາມສະກຸນ</label>
                  <input type="input" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                </div>

                <div class="input-group input-group-dynamic mb-4 form-floating">
                  <select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="ທ້າວ"> ຊາຍ</option>
                    <option value="ນາງ"> ຍິງ</option>
                  </select>
                  <label for="floatingSelect"> ເພດ </label>
              </div>

                <div class="input-group input-group-outline my-3">
                <label class="form-label">ເບີໂທ</label>
                    <input  type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                </div>
                @error('phone')
                <span class="IIII" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-group input-group-outline my-3">
                  <label class="input-group-text" for="inputGroupFile">ເລືອກຮູບ</label>
                  <input width="40%" class="form-control" type="file" id="formFile" name="image" onchange="preview()">
                  <img id="frame" width="35%" src="" class="img-fluid" />
                </div>

                <div class="input-group input-group-outline my-3">
                  <label class="form-label">ອີເມວ</label>
                  <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                </div>

               

                @error('email')
                <span class="IIII" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">ລະຫັດຜ່ານ</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                </div>

                @error('password')
                <span class="IIII" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label class="form-label">ຢືນຢັນລະຫັດຜ່ານ</label>
                    <input type="password" class="form-control" name="password_confirmation" required >
                  </div>

                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເຂົ້າສູ່ລະບົບ</button>
                </div>
                <p class="mt-0 mb-0 text-sm text-center">
                  <a href="{{ route('login') }}">ມີບັນຊີເເລ້ວ</a> 
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

@endsection
