@extends('layouts.admin-layout')
@section('manageuser', 'active bg-gradient-primary')
@section('searchUser', '/admin/user/search')
@section('title', 'ຈັດການຂໍ້ມູນຜູ້ໃຊ້')

@section('page', 'ຈັດການຂໍ້ມູນຜູ້ໃຊ້')
@section('header', 'ສະເເດງຂໍ້ມູນຜູ້ໃຊ້')


@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">

        <div class="table-responsive p-0">
            <table style="font-family: 'Noto sans Lao" class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">ໄອດິ</th>
                        <th class="text-uppercase text-secondary text-xxs text-left font-weight-bolder opacity-7">ຊື່ & ອີເມວ
                        </th>
                        <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">
                            ຕຳເເໜ່ງ</th>
                        <th
                            class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                            ເບີໂທ</th>
                        <th
                            class="text-center text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                            ວັນທີສະໝັກ</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            @if ($item->id > 1)
                                <td>
                                    <p class="text-center font-weight-bold mb-0">{{ $item->id }}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('storage/images/profiles/' . $item->image) }}"
                                                class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center ">
                                            <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs text-center font-weight-bold mb-0">
                                        {{ implode(', ',$item->roles()->get()->pluck('name')->toArray()) }} |
                                        {{ implode(', ',$item->member()->get()->pluck('status')->toArray()) }}</p>
                                </td>
                                <td class="align-middle text-center"> <span
                                        class="text-xs font-weight-bold">{{ $item->phone }} </span></td>
                                <td class="align-middle text-center"> <span
                                        class="text-xs font-weight-bold">{{ $item->created_at->format('d/m/Y H:i:s') }}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.user.edit', $item->id) }}"
                                        class="text-center font-weight-bold text-xs" data-toggle="tooltip"
                                        data-original-title="Edit user">
                                        <i class="fa-solid fa-user-pen"></i>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $users->links() }}

        </div>
    @endsection
