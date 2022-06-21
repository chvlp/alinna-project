@extends('layouts.admin-layout')
@section('type_room', 'active bg-gradient-primary')
@section('searchUser', '')
@section('title', 'ຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນປະເພດຫ້ອງ')
@section('header', 'ສະເເດງຂໍ້ມູນປະເພດຫ້ອງ')

@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
        <div class="row mb-4">
            <div class="col">
                <div style="text-align: right;margin-bottom: -3%">
                    <a href="{{ route('admin.type.create') }}" class="btn btn-primary">ເພີ່ມປະເພດຫ້ອງ</a>
                </div>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                ຊື່ປະເພດ</th>
                            <th class="text-uppercase text-secondary text-xxs  font-weight-bolder opacity-7 ps-2">
                                ລາຍລະອຽດ</th>
                            <th class="text-secondary opacity-7"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typeroom as $item)
                            <tr style="font-size:12px">
                                <td>
                                    <p style="font-size:12px" class="font-weight-bold mb-0">{{ $item->name }}</p>
                                </td>
                                <td>
                                    <p style="font-size:10px" class="font-weight-bold mb-0">{!! Str::words($item->detail, 7,'...')  !!}
                                    </p>
                                </td>
                                <td class="align-middle">

                                    <div style="display:flex">


                                        <a style="padding-right:30%" href="{{ route('admin.type.edit', $item->id) }}"
                                            class="text-center font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit user">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>


                                        <form class="text-center font-weight-bold text-xs" method="post"
                                            action="{{ route('admin.type.destroy', $item->id) }}">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('admin.type.destroy', $item->id) }}"
                                                onclick="event.preventDefault(); this.closest('form').submit(); return confirm('ຕ້ອງການລົບ ຫຼື ໍ ບໍ່?')">
                                                <i style="color: red;" class="fa-solid fa-trash"></i>
                                            </a>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $typeroom->links() }}

            </div>
        </div>
    </div>

@endsection
