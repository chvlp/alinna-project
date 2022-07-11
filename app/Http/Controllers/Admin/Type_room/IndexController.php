<?php

namespace App\Http\Controllers\Admin\Type_room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\type_room;
use App\UserOrder;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $order = UserOrder::all();
        $typeroom = type_room::with('room')->orderBy('id')->paginate(10);
        return view('admin.type_room.Index',compact('typeroom','order'));
    }
    public function edit($id)
    {
        $order = UserOrder::all();
        $typeroom = type_room::orderBy('id')->paginate(10);
        $typerooms = type_room::find($id)->where('id',$id)->first();
        return view('admin.type_room.edit',compact('typeroom','typerooms','order'));
    }
   
    public function store(Request $request)

    {

        $type_room = type_room::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);
        if(request()->hasFile('image')){
            $image = request()->file('image')->getClientOriginalName();
            $image_name= date('day_H_s_i').'_'.$image;
            request()->file('image')->storeAs('public/images/TypeRooms',$image_name);
            $type_room->Update(['image'=>$image_name]);
        }

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
        $order = UserOrder::all();
        $typeroom = type_room::orderBy('id')->paginate(10);
        return view('admin.type_room.create',compact('typeroom','order'));
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
