@extends('layouts.admin-layout')
@section('rentRoom', 'active bg-gradient-primary')
@section('searchUser', '')
@section('title', 'ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນຫ້ອງ')
@section('header', 'ເເກ້ໄຂຂໍ້ມູນຫ້ອງ')

@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <a href="{{ route('admin.rentRoom.show', $water->rentRoom_id) }}" class="btn btn-primary">ຍ້ອນກັບ</a>
                </div>
                <div class="row" style="text-align:center;margin:auto">

                    <div class="col-lg-5">
                        <div class="card" style="background-color:white">
                            <div class="container" style="font-family: 'Noto sans Lao">
                                <div class="btn btn-primary text-center" style="width: 100%; cursor: context-menu">
                                    <h2 style="color: wheat;font-family: 'Noto sans Lao">ບິນນ້ຳປະປາ</h2>
                                </div>

                                    <img style="border-radius:2%; padding-top:3%"
                                        src="{{ asset('storage/images/Waters/' . $water->image) }}" width="100%"
                                        alt="" srcset="">

                                <div class="row">
                                    <div class="col-lg-ຢຟ pt-5">

                                        <h4>ເດືອນປີ: {{ date('m-Y', strtotime($water->indate)) }}</h4>
                                        <h4>ເລກບິນ: {{ $water->IDwater }}</h4>
                                        <h4>ລາຄາ: {{ $water->price }}</h4>
                                        <h4 >ສະຖານະບິນ:
                                            @if ($water->status == 'ກຳລັງກວດສອບ')
                                                <div class="btn btn-warning" style="width: 80%">
                                                    <h2 style="font-family: 'Noto sans Lao">{{ $water->status }}</h2>
                                                </div>
                                            @elseif ($water->status == 'ຍອມຮັບ')
                                                <div class="btn btn-success" style="width: 80%">
                                                    <h2 style="font-family: 'Noto sans Lao">{{ $water->status }}</h2>
                                                </div>
                                            @else
                                                <div class="btn btn-danger" style="width: 80%">
                                                    <h2 style="font-family: 'Noto sans Lao">{{ $water->status }}</h2>
                                                </div>
                                            @endif
                                        </h4>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body" style="font-family: 'Noto sans Lao">

                                <form action="{{ route('admin.Water.update', $water->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}

                                    <div >
                                        <div class="input-group mb-0 mt-4 input-group-static">
                                            <h5 class="text-center" style="text-align:center">ເເກ້ໄຂສະຖານະການຊຳລະນ້ຳປະປາ
                                            </h5>
                                        </div>
                                        <div class="input-group input-group-dynamic mb-4 form-floating">
                                            <select name="status" class="form-select form-select-sm" required>
                                                <option class="text-danger" value=""> ເລືອກສະຖານະການບິນນ້ຳປະປາ
                                                </option>

                                                <option value="ຍອມຮັບ"> ຍອມຮັບ</option>
                                                <option value="ກຳລັງກວດສອບ"> ກຳລັງກວດສອບ</option>
                                                <option value="ຍົກເລີກ"> ຍົກເລີກ</option>

                                            </select>
                                            <label for="floatingSelect">ເລືອກສະຖານະການຊຳລະຄ່າຫ້ອງ</label>
                                        </div>

                                    </div>



                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn bg-gradient-primary w-100 my-4 mb-2">ເເກ້ໄຂ</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card" style="background-color:white">
                            <div class="container">
                                <div class="btn btn-primary text-center" style="width: 100%; cursor: context-menu">
                                    <h2 style="color: wheat;font-family: 'Noto sans Lao" >ບິນຊຳລະຄ່ານ້ຳປະປາ</h2>
                                </div>
                                    <img style="border-radius:2%; padding-top:3%"
                                        src="{{ asset('storage/images/PayWaters/' . $pay_water->image) }}"
                                        width="100%" alt="" srcset="">
                                <div class="row">
                                    <div class="col-lg-ຢຟ pt-5">
                                        <h4>ມື້ຈ່າຍ: {{ date('d-m-Y', strtotime($pay_water->created_at)) }}</h4>
                                        <h4>ຈຳນວນເງິນ: {{ $pay_water->price }}</h4>
                                        <h4>ລາຍລະອຽດ: {{ $pay_water->detail }}</h4>
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
