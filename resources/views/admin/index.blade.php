
@extends('layouts.admin-layout')
@section('main','active bg-gradient-primary')
@section('title','ໜ້າຫຼັກ')
@section('page', 'ຫຼັກ')
@section('header', 'ສັ່ງລວມຂໍ້ມູນ')
@section('content')

   <div class="container" style="text-align:center" style="height: 80vh">
    <div class="card-text"  style="font-family: 'Noto sans Lao">
      <h1 class="mt-10" style="text-align: center;font-family: 'Noto sans Lao">ຍິນດີຕອນຮັບ {{ Auth::user()->name }}</h1>

    </div>
   </div>


@endsection
