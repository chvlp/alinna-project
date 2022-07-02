@extends('layouts.loginRegis-layout')
@section('content-login')
    <div class="page-header align-items-start min-vh-100"
        style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');"
        loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">ເຂົ້າສູ່ລະບົບ</h4>
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
                        <div class="card-body">
                            <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="input-group mb-4 input-group-static">
                                    <label>ອີເມວ</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        required autofocus>
                                </div>

                                <div class="input-group mb-4 input-group-static">
                                    <label>ລະຫັດຜ່ານ</label>
                                    <input type="password" class="form-control" name=" password" required>
                                </div>

                                <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label mb-0 ms-2" for="rememberMe">ຈົດຈຳ</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-primary w-100 my-4 mb-2">ເຂົ້າສູ່ລະບົບ</button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    <a href="/register">ຍັງບໍ່ມີບັນຊີບໍ່?</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
