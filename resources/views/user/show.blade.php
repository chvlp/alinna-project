@extends('layouts.user-layout')
@section('content')
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3 mt-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8 text-start mb-5 mt-5">
                        <h3 class="text-white z-index-1 position-relative">{{ $roomType->name }}</h3>
                    </div>
                </div>
                <div class="row">

                    @foreach ($room as $item)
                        <div class="col-lg-4 mt-lg-0">
                            <div class="card mt-6">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="{{ asset('storage/images/rooms/' . $item->image) }}"
                                            alt="img-colored-shadow" class="img-fluid border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal">
                                        <a href="javascript:;">ຫ້ອງ: {{ $item->number }}</a>
                                    </h5>
                                    <div class="row">

                                        @foreach ($images as $iitem)
                                            @if ($iitem->room_id == $item->id)
                                                <div class="col-lg-3">
                                                    <a href="{{ asset('storage/images/rooms/image/' . $iitem->image) }}"
                                                        target="_blank">
                                                        <div class="card">
                                                            <img src="{{ asset('storage/images/rooms/image/' . $iitem->image) }}"
                                                                style="border-radius: 10%" width="100%" alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    </div>
@endsection
