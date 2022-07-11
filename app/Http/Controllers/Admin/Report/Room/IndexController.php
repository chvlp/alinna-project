<?php

namespace App\Http\Controllers\Admin\Report\Room;

use App\Http\Controllers\Controller;
use App\rentRoom;
use App\rentRoomStory;
use App\rooms;
use App\type_room;
use App\UserOrder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $order = UserOrder::all();
        $rtype5 = type_room::where('id', 5)->get();
        $roomType5 = rooms::where('type_id', 5)->get();

        $rtype6 = type_room::where('id', 6)->get();
        $roomType6 = rooms::where('type_id', 6)->get();

        $rtype7 = type_room::where('id', 7)->get();
        $roomType7 = rooms::where('type_id', 7)->get();
        $croom5 = count($roomType5);
        $croom6 = count($roomType6);
        $croom7 = count($roomType7);

        $roomNoEmpty = rooms::where('status', 'ບໍ່ວາງ')->get();
        $croomNoEmpty = count($roomNoEmpty);

        $roomEmpty = rooms::where('status', 'ວາງ')->get();
        $croomEmpty = count($roomEmpty);

        $rentRoomStoryA = rentRoomStory::where('status', 'ຍອມຮັບ')->get();
        $sumA = rentRoomStory::where('status', 'ຍອມຮັບ')->sum('price');
        $crentRoomStoryA = count($rentRoomStoryA);

        $rentRoomStoryE = rentRoomStory::where('status', '<>','ຍອມຮັບ')->get();
        $sumE = rentRoomStory::where('status', '<>','ຍອມຮັບ')->sum('price');
        $crentRoomStoryE = count($rentRoomStoryE);

        $rentRoom = rentRoom::all();
        $crentRoom = count($rentRoom);


        return view('admin.Report.room.index', compact('order','rentRoom','crentRoom','croom5', 'croom6', 'croom7', 'roomType5', 'roomType6', 'roomType7', 'rtype5', 'rtype6', 'rtype7', 'roomNoEmpty', 'croomNoEmpty', 'roomEmpty', 'croomEmpty', 'rentRoomStoryA', 'crentRoomStoryA', 'sumA', 'rentRoomStoryE', 'crentRoomStoryE', 'sumE'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
