@extends('layouts.admin-layout')
@section('type_room', 'active bg-gradient-primary')
@section('searchUser', '')
@section('title', 'ເພີ່ມຂໍ້ມູນປະເພດຫ້ອງ')

@section('page', 'ຈັດການຂໍ້ມູນປະເພດຫ້ອງ')
@section('header', 'ສະເເດງຂໍ້ມູນປະເພດຫ້ອງ')

@section('content')
    <div class="container-fluid py-4" style="font-family: 'Noto sans Lao">
        <div class="row mb-4">
            <div class="col-lg-8 col-md-8 col-sm-0 mb-md-4 mb-4">
                <div class="card my-4">
                    <div style="margin-bottom: -3%">
                        <a href="{{ route('admin.type.index') }}" class="btn btn-primary">ຍອນກັບ</a>
                    </div>
                    <div class="card-body px-0 pb-2" style="font-family: 'Noto sans Lao">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        {{-- <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">#</th> --}}
                                        <th
                                            class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                            ຊື່ປະເພດ</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            ລາຍລະອຽດ</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typeroom as $item)
                                        <tr>
                                            {{-- <td><p class="text-center font-weight-bold mb-0">{{$item->id}}</p></td> --}}
                                            <td>
                                                <p style="font-size:11px" class=" font-weight-bold mb-0">{{ $item->name }}
                                                </p>
                                            </td>
                                            <td>
                                                <p style="font-size:9px" class="font-weight-bold mb-0">
                                                    {!! Str::words($item->detail, 7, '...') !!}</p>
                                            </td>
                                            {{-- <td class="align-middle">
                              <a href="{{ route('admin.type.edit',$item->id) }}" class="text-center font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                  <i class="fa-solid fa-pen-to-square"></i>
                              </a>
                          </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $typeroom->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mb-md-3 mb-3">
                <div class="card my-4">


                    <div class="card-body" style="font-family: 'Noto sans Lao">
                        <form action="{{ route('admin.type.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- {{method_field('Post')}} --}}

                            <div>
                                <div class="input-group mb-4 input-group-static">
                                    <label>ຊື່ປະເພດ</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="input-group mb-4 input-group-static">
                                    <label>ເລືອກຮູບ</label>
                                    <input name="image" type="file" class="form-control">
                                </div>

                                <div class="input-group mb-4 input-group-static">
                                    <label>ລາຍລະອຽດ</label>
                                    <textarea name="detail" class="form-control" id="message" rows="4"></textarea>
                                </div>
                            </div>



                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">ເພີ່ມ</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
