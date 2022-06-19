@extends('layouts.user-layout')
@section('content')
<section class="main" id="main">
    <div class="content">
      <h2 style="font-size: 20px;font-weight: bold;color:white;">ຍິນດີຕອນຮັບສູ່<br><span style="font-size: 28px;">ເວບເເນະນະຫ້ອງເເຖວ</span></h2>
      <div  class="animated-text">
        <h3>ເພີ່ມຄວາມສະດວກ</h3>
        <h3>ເພີ່ມຄວາມສະບາຍ</h3>
        <h3>ໃຫ້ກັບນ້ອງນັກສຶກສາທີ່ກຳລັງຫາຫ້ອງເເຖວ </h3>
      </div>

    </div>
  </section>

  <sectionn class="services" id="about">
    <div class="title reveal" >
      <h2 style="font-size: 1.7rem" class="section-title">ເລືອກສະຖານທີ່ສຶກສາທີ່ທ່ານຕ້ອງການຊອກຫາຫ້ອງເເຖວ</h2>
      <div class="naveme">
        <ul>
            <li><a href="/user#about">ຫ້ອງເເຖວທັງໝົດ</a> </li>
        @foreach ($schools as $item)
            <li><a href="{{URL::to('user/shool/'.$item->id.'/#about')}}">{{$item->name}}</a> </li>
            {{-- {{route('show.school',$item->id)}} --}}
        @endforeach
            </ul>
      </div>
      <p style="text-align: center">ພວກເຮົາຂໍເປັນສ່ວນໜຶ່ງໃນການເພີ່ມຄວາມສະດວກສະບາຍ ໃຫ້ກັບນ້ອງໆນັກສຶກສາ ເເລະ ບຸກຄົນທົວໄປທີ່ກຳລັງຊອກຫາຫ້ອງເເຖວໃນການອາໄສ່ຊົ່ວຄາວຢູ່ ຂອບໃຈທີ່ໃຊ້ບໍລິການຂອງພວກເຮົາ <br> ຂໍຂອບໃຈ</p>
      <h2 style="font-size: 1.7rem" class="section-title">ຫ້ອງເເຖວທັງໝົດ</h2>
    </div>
    <div class="content">
        @foreach ($dormitorys as $item)
            <div class="card reveal">
                <div class="service-icon">
                    <a title="ຄິກເພື່ອເບີ່ງລາຍລະອຽດ" href="{{URL::to('user/'.$item->id.'/#about')}}">
                        <img src="{{URL::to($item->image)}}" height="300px" width="100%" alt="Card image cap">
                    </a>
                </div>
                <div class="info">
                <h3>{{$item->name}}</h3>
                <p>{{$item->horm}}</p>
                <p>{{$item->village}}</p>
                <a title="ຄິກເພື່ອເບີ່ງລາຍລະອຽດ" href="{{URL::to('user/'.$item->id.'/#about')}}"><i class="fas fa-info-circle"></i></a>
                </div>
            </div>
      @endforeach
    </div>
    @foreach ($redormit as  $item)
        {{$item->dormitory_id}}
    @endforeach
  </sectionn>
@endsection
