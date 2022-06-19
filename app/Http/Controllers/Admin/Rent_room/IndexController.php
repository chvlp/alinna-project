<?php

namespace App\Http\Controllers\Admin\Rent_room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\rent_room;
use App\rooms;
use App\members;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rent_room = rent_room::orderBy('id')->paginate(5);
        return view('admin.rent_room.index',compact('rent_room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        // dd($rent_rooms);
        $member = members::all();
        $room = rooms::all();
        $rent_room = rent_room::orderBy('id')->paginate(5);
        return view('admin.rent_room.create',compact('rent_room','member','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rent_room = rent_room::create([
            'room_id' => $request->room_id,
            'member_id' => $request->member_id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'created_at' => Now(),
        ]);

        $rent_room->save();
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
        $rent_room = rent_room::orderBy('id')->paginate(5);
        return view('admin.rent_room.edit',compact('rent_room','room','member'));
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
