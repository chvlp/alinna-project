@extends('layouts.user-layout')
@section('content')
    <header>
        <div class="page-header min-height-400" style="background-image: url('../assets/bg/aboutusbg.jpg');"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <!-- START Testimonials w/ user image & text & info -->
        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                src="../assets/img/bruce-mars.jpg" alt="bruce" loading="lazy">

                        </div>
                        <div style="text-align: center" class="Justify-content-center align-items-center mb-2">
                            <h3 class="mb-0">ທ້າວ ບຸນເລີດ </h3>
                        </div>

                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">

                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0">Alinna Apartment</h3>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <span class="h6">ສ້າງເມື່ອວັນທີ</span>
                                        <span>15/10/2017</span>
                                    </div>

                                </div>
                                <p class="text-lg mb-0">
                                    Decisions: If you can’t decide, the answer is no.
                                    If two equally difficult paths, choose the one more
                                    painful in the short term (pain avoidance is creating
                                    an illusion of equality). Choose the path that leaves
                                    you more equanimous. <br><a href="javascript:;" class="text-info icon-move-right">More
                                        about me
                                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Testimonials w/ user image & text & info -->
        <!-- START Blogs w/ 4 cards w/ image & text & link -->
        <section class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="mb-5">ສະຖານທີ່ໄກ້ຄຽງ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a href="https://www.google.com/maps/place/%E0%BA%95%E0%BA%B0%E0%BA%AB%E0%BA%BC%E0%BA%B2%E0%BA%94%E0%BB%82%E0%BA%9E%E0%BA%99%E0%BB%80%E0%BA%84%E0%BA%B1%E0%BA%87+(Phonkheng+Market)/@17.985735,102.6332295,18z/data=!3m1!4b1!4m21!1m15!4m14!1m6!1m2!1s0x312467c21979fd19:0x724b36b07074b650!2zQWxpbm5hIEFwYXJ0bWVudCDguq3gurLguqXgurTgupngupngurIg4Lqt4Lqy4Lqe4Lqy4LqU4LuA4Lqh4Lqx4LqZ!2m2!1d102.6383268!2d17.9858624!1m6!1m2!1s0x31246795dc9f128b:0xfc307e38f769bc95!2sSeafood+World!2m2!1d102.6348158!2d17.9858047!3m4!1s0x312467c8f961d519:0x38ab65a7251492e0!8m2!3d17.9857388!4d102.6343174"
                                    class="d-block blur-shadow-image" target="_blank">
                                    <img src="{{ asset('assets/user/phonkheng.png') }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">ຕະຫລາດໂພນເຄັງ</a>
                                </h5>
                                <p>
                                    ຫາງຈາກ ຕະຫລາດໂພນເຄັງ 500 ເເມັດ
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ asset('assets/user/itec.jpg') }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">ໄອເຕັກມໍ</a>
                                </h5>
                                <p>
                                    ຫາງຈາກ ໄອເຕັກມໍ 3 ກິໄລເເມັດ
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ asset('assets/user/thatluang.jpg') }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">ທາດຫຼວງ</a>
                                </h5>
                                <p>
                                    ຫາງຈາກ ທາດຫຼວງ 1.7 ກິໄລເເມັດ
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="../assets/img/examples/blog-9-4.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">MateLabs machine learning</a>
                                </h5>
                                <p>
                                    If you’ve ever wanted to train a machine learning model
                                    and integrate it with IFTTT, you now can with ...
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Blogs w/ 4 cards w/ image & text & link -->
    </div>
@endsection
