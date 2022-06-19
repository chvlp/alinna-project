<?php

namespace App\Http\Controllers\Admin\Type_room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\type_room;

class IndexController extends Controller
{
    public function index()
    {
        $typeroom = type_room::with('room')->orderBy('id')->paginate(10);
        return view('admin.type_room.Index',compact('typeroom'));
    }
    public function edit($id)
    {
        $typeroom = type_room::orderBy('id')->paginate(10);
        $typerooms = type_room::find($id)->where('id',$id)->first();
        return view('admin.type_room.edit',compact('typeroom','typerooms'));
    }
   
    public function store(Request $request)

    {
        // dd($request);
        $type_room = type_room::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'created_at' => Now(),
        ]);
        $type_room->save();
        return redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນປະເພດຫ້ອງສຳເລັດ');

        // $type_rooms = array();
        // $type_rooms['name'] = $request->name;
        // $type_rooms['detail'] = $request->detail;
        // $type_rooms['created_at'] =now();
        //     $type_rooms = type_room::insert($type_rooms);
        //     return redirect()->back()->with('succes', 'ເພີມຂໍ້ມູນຫເ້ອງເເຖວສຳເລັດ');

    }

    public function create()
    {
        $typeroom = type_room::orderBy('id')->paginate(10);
        return view('admin.type_room.create',compact('typeroom'));
    }

    public function update($id, Request $request){
        type_room::where('id', $id)->update([
            'name' => $request->name,
            'detail' => $request->detail,
            'updated_at' => Now(),
        ]);
        return redirect()->back()->with('success','ເເກ້ໄຂຂໍ້ມູນປະເພດຫ້ອງສຳເລັດ');
    }
    public function destroy($id)
    {
 
        $type_rooms=type_room::where('id',$id)->delete();
            // $type_rooms = type_room::find($id)->where('id',$id)->delete();
            return redirect()->back()->with('success','ລົບຂໍ້ມູນປະເພດຫ້ອງສຳເລັດ');
    }
}
