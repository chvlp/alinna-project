<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\rooms;
use App\type_room;
use App\image;

class IndexController extends Controller
{
    public function index()
    {   
        $rooms = rooms::orderBy('id')->paginate(10);
        return view('admin.room.index',compact('rooms'));
    }

    public function create()
    {
        $rooms = rooms::orderBy('id')->paginate(10);
        $type_rooms = type_room::all();
        return view('admin.room.create',compact('rooms','type_rooms'));
    }

    public function store(Request $request)

    {
        $rooms = rooms::create([
            'number' => $request->number,
            'floor' => $request->floor,
            'type_id' => $request->type_id,
            'price' => $request->price,
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);
        // $image = $request->file('image');
        if(request()->hasFile('image')){
                    $image = request()->file('image')->getClientOriginalName();
                    $image_name= date('day_H_s_i').'_'.$image;
                    request()->file('image')->storeAs('public/images/rooms',$image_name);
                    $rooms->Update(['image'=>$image_name]);
                }


        $rooms->save();
        return redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນຫ້ອງສຳເລັດ');


    }

    public function edit($id)
    {
        $rooms = rooms::orderBy('id')->paginate(10);
        $roomid = rooms::where('id',$id)->first();
        $type_rooms = type_room::all();
        return view('admin.room.edit',compact('rooms','type_rooms','roomid'));
    }

    public function update(Request $request, $id)
    {
        $rooms = rooms::find('id',$id)->update([
            'number' => $request->number,
            'floor' => $request->floor,
            'type_id' => $request->type_id,
            'price' => $request->price,
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);
        // $image = $request->file('image');
        if(request()->hasFile('image')){
            dd($request->image);
      }

        return redirect()->back()->with('success','ເເກ້ໄຂຂໍ້ມູນປະເພດຫ້ອງສຳເລັດ');
        
    }
    
    public function show($id)
    {
        $rooms = rooms::find($id);
        $image = image::all();
        return view('admin.room.show',compact('rooms','image'));
    }


    public function destroy($id)
    {
        
        $room_image = rooms::where('id',$id)->first();
        if(file_exists(public_path('storage/images/rooms/'.$room_image->image))){
            unlink(public_path('storage/images/rooms/'.$room_image->image));
            $rooms = rooms::where('id',$id)->delete();
          }else{
            $rooms = rooms::where('id',$id)->delete();
          }

        return redirect()->back()->with('success','ລົບຂໍ້ມູນຫ້ອງສຳເລັດ');
    }
    public function upload(Request $request,$id)
    {
        // dd($id);
        $images = image::create([
            'room_id' => $id,
            'detail' => $request->detail,
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);
        // $image = $request->file('image');
        if(request()->hasFile('image')){
                    $image = request()->file('image')->getClientOriginalName();
                    $image_name= date('day_H_s_i').'_'.$image;
                    request()->file('image')->storeAs('public/images/rooms/image',$image_name);
                    $images->Update(['image'=>$image_name]);
                }


        $images->save();
        return redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນຫ້ອງສຳເລັດ');

    }
}
