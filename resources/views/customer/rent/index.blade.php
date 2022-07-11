@extends('layouts.customer-layout')
@section('content')
    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-5">Check my latest blogposts</h3>
                </div>
            </div>
            <div style="text-align: center" class="row">

                @foreach ($rentRoom as $item)

                    <div class="col-lg-3 col-sm-6 pt-4">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ asset('storage/images/rooms/'.$item->room->image) }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>
                            <div class="card-body px-0">
                                <h5>
                                    <a href="javascript:;" class="text-dark font-weight-bold">ຫ້ອງເບີ:
                                        {{ $item->room->number }}</a>
                                </h5>
                                <h5>
                                    <a href="javascript:;"
                                        class="text-dark font-weight-bold">{{ $item->room->type_room->name }}</a>
                                </h5>
                                <p>
                                    {{ $item->room->type_room->detail }}
                                </p>

                            </div>

                            <a href="{{ route('Customer.rent.show', $item->id) }}">
                                <button style="width: 80%" class="btn btn-success">
                                    <i class="fa-solid fa-person-booth"></i> ເບີ່ງການເຊົ່າຫ້ອງ
                                </button>
                            </a>

                            <a href="{{ route('Customer.electric.show', $item->id) }}">
                                <button style="width: 80%" class="btn btn-success">
                                    <i class="fa-solid fa-plug-circle-bolt"></i> ເບີ່ງບິນໄຟຟ້າ
                                </button>
                            </a>

                            <a href="{{ route('Customer.water.show', $item->id) }}">
                                <button style="width: 80%" class="btn btn-success">
                                    <i class="fa-solid fa-faucet-drip"></i> ເບີ່ງບິນນ້ຳປະປາ
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
