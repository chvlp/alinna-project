<?php

namespace App\Http\Controllers\Admin\rentRoom;
use App\members;
use App\rentRoom;
use App\rooms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.index',compact('rentRoom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = members::all();
        $room = rooms::all();
        // dd($room);
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.create',compact('rentRoom','member','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rentRoom = rentRoom::create([
            'room_id' => $request->room_id,
            'member_id' => $request->member_id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'created_at' => Now(),
        ]);
        $rentRoom->save();

        $rooms = rooms::where('id', $request->room_id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
            'status' => "ບໍ່ວາງ",
            'updated_at' => Now(),
        ]);

        return redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນການເຊົ່າສຳເລັດ');

        $room = rooms::create([
            'room_id' => $request->room_id,
            'member_id' => $request->member_id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'created_at' => Now(),
        ]);
        $rentRoom->save();
        return redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນການເຊົ່າສຳເລັດ');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = rooms::all();
        $member = members::all();
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.edit',compact('rentRoom','room','member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
