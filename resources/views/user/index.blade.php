@extends('layouts.user-layout')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('../assets/bg/aboutusbg.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Alinna Apartment ຍິນດີຕອນຮັບ</h1>
                        <p class="lead mb-4 text-white opacity-8">
                            ພວກເຮົາມີຄວາມພວກພູມໃຈທີ່ເປັນສວນໜື່ງໃນການໃຫ້ບໍລິການທີ່ຢູ່ອາໄສໃຫ້ເເກ່ທ່ານ</p>
                    </div>
                        @if ($userOrder == 1)
                            <div class="row">
                                <div class="col-lg-6" style="margin: auto">
                                    <div class="card" style="text-align: center;margin:auto">
                                        <div class="card-text">
                                            <div class="container py-4">
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto d-flex justify-content-center flex-column">
                                                        @foreach ($userOd as $item)
                                                        <h3 class="text-center" style="font-family: 'Noto sans Lao">
                                                            ວັນທີທ່ານຈະເຂົ້າເບີ່ວ {{ date('d-m-Y', strtotime($item->inday)) }}</h3>
                                                        @endforeach
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else

                        <div class="row">
                            <div class="col-lg-6" style="margin: auto">
                                <div class="card" style="text-align: center;margin:auto">
                                    <div class="card-text">
                                        <div class="container py-4">
                                            <div class="row">
                                                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                                                    <h3 class="text-center" style="font-family: 'Noto sans Lao">
                                                        ຈອງເວລາເຂົ້າເບີ່ງ</h3>
                                                    <form action="{{ route('User.User.store') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="card-body" style="font-family: 'Noto sans Lao">

                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ເລືອກວັນທີເຂົ້າເບີ່ງ</label>
                                                                <input type="date" name="inday"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="input-group mb-4 input-group-static">
                                                                <label>ປ້ອນລາຍລະອຽດ</label>
                                                                <textarea name="detail" class="form-control" id="message" rows="2"></textarea>
                                                            </div>
                                                            <input type="hidden" name="sta" value="False">
                                                            <div class="row">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="row justify-content-start">

                            <div class="col-md-3">
                                <div class="info">
                                    <i class="fa-solid fa-wifi text-info mb-3" style="font-size:30px"></i>
                                    <h5>ຟຣີ</h5>
                                    <p>ໃຊ້ງານ ອິນເຕີເນັດໄດ້ຕະຫຼອດ 24 ຊົວໂມງ. ວອງໄວ ເໝາະກັບການເບີ່ງໜັງຝັງເພງ</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info">
                                    <i class="fa-solid fa-dumbbell text-info mb-3" style="font-size:30px"></i>
                                    <h5>ຟຣີ</h5>
                                    <p>ພວກເຮົາມີຄວາມໄຍຕໍ່ສູຂະພາບຂອງທ່ານ ,ທ່ານສາມາດ ອອກກຳລັງກາຍໄດ້ທຸກເວລາ</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info">
                                    <i class="fa-solid fa-broom text-info mb-3" style="font-size:30px"></i>
                                    <h5>ຟຣີ</h5>
                                    <p>ມີການອະນາໄມທຸກວັນ ນອກຈາກວັນອາທິດ</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info">
                                    <i class="fa-solid fa-person-military-pointing text-info mb-3"
                                        style="font-size:30px"></i>
                                    <h5>ພະນັກງານຮັກສາຄວາມປອດໄພ 24 ຊົວໂມງ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves <i class="fa-solid fa-user-police-tie"></i> -->

        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-start mb-5 mt-5">
                        <h3 class="text-white z-index-1 position-relative">ປະເພດຫ້ອງ</h3>
                        <p class="text-white opacity-8 mb-0">ພວກເຮົາໄດ້ຈັດກຽມຫ້ອງໄວ້ໃຫ້ທ່ານ 3 ປະເພດໃຫ້ທ່ານເລືອກ</p>
                    </div>
                </div>
                <div class="row">

                    @foreach ($typeRoom as $item)
                        <div class="col-lg-12 col-12">
                            <div class="card card-profile mt-6">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                        <a href="{{ route('User.User.show',$item->id) }}">
                                            <div class="p-3 pe-md-0">
                                                <img class="w-100 border-radius-md shadow-lg"
                                                    src="{{ asset('storage/images/TypeRooms/' . $item->image) }}"
                                                    alt="image">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-12 my-auto">
                                        <div class="card-body ps-lg-0">
                                            <h5 class="text-info">{{ $item->name }}</h5>
                                            {{-- <h6 class="text-info">UI Designer</h6> --}}
                                            <p class="mb-0">{{ $item->detail }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->

        <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
        <section class="my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8 text-start mb-5 mt-5">
                        <h3 class="text-black z-index-1 position-relative">ນັກພັດທະນາລະບົບ</h3>
                        <p class="text-black opacity-8 mb-0">ພວກເຮົາພັດທະນາລະບົບນີ້ ເພື່ອໃຫ້
                            ເຈົ້າຂອງອາພາດເມັ້ນມີຄວາມສະດວກຕໍ່ການກວດລາຍງານຕ່າງ, ໃຫ້ງ່າຍຕໍ່ການຄົ້ນຫາ ແລະ
                            ຈັດເກັບຂໍ້ມູນຂອງພະນັກງານ ແລະ ລູກຄ້າ.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 ms-auto mt-lg-0 mt-6">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                        alt="img-colored-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">ທ້າວ ທອງເພັດ ຈິດວິລະພົນ</a>
                                </h5>
                                <p class="mb-0">
                                    Website visitors today demand a frictionless user expericence — especially when using
                                    search. Because of the hight standards.
                                </p>
                                <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3"><i
                                        style="font-size:14px" class="fa-brands fa-facebook"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ms-auto mt-lg-0 mt-6">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                        alt="img-colored-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">ທ້າວ ທິນນະກອນ ສີມະວົງ</a>
                                </h5>
                                <p class="mb-0">
                                    Website visitors today demand a frictionless user expericence — especially when using
                                    search. Because of the hight standards.
                                </p>
                                <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3"><i
                                        style="font-size:14px" class="fa-brands fa-facebook"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 ms-auto mt-lg-0 mt-6">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <a class="d-block blur-shadow-image">
                                    <img src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                        alt="img-colored-shadow" class="img-fluid border-radius-lg">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="font-weight-normal">
                                    <a href="javascript:;">ທ້າວ ລຳເງິນ</a>
                                </h5>
                                <p class="mb-0">
                                    Website visitors today demand a frictionless user expericence — especially when using
                                    search. Because of the hight standards.
                                </p>
                                <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3"><i
                                        style="font-size:14px" class="fa-brands fa-facebook"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    </div>
@endsection
