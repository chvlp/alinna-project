<?php

namespace App\Http\Controllers\Admin\rentRoomStory;

use App\Http\Controllers\Controller;
use App\rentRoom;
use App\rentRoomStory;
use App\UserOrder;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
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
        // dd($request->rentRoom_id);

        $rentRoom = rentRoom::where('id', $request->rentRoom_id)->first();

        $from_date = Carbon::parse(date('Y-m-d', strtotime($request->intodate)));
        $through_date = Carbon::parse(date('Y-m-d', strtotime($request->outdate)));
        $shift_difference = $from_date->diffInDays($through_date);
        $price = $rentRoom->room->price / 30;

        $rentRoomStory = rentRoomStory::create([
            'rentRoom_id' => $request->rentRoom_id,
            'user_id' => Auth::user()->id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'qtyday' => $shift_difference,
            'price' => $shift_difference * $price,
            'status' => "ສຳເລັດ",
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/rentRoomStory', $image_name);
            $rentRoomStory->Update(['image' => $image_name]);
        }

        $rentRoom = rentRoom::where('id', $request->rentRoom_id)->update([
            // 'room_id' => $request->room_id,
            // 'member_id' => $request->member_id,
            // 'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            // 'noContact' => $request->noContact,
            // 'status' => $request->status,
            'updated_at' => Now(),
        ]);

        $rentRoomStory->save();
        return redirect()->back()->with('success', 'ເພີ່ມຂໍ້ມູນການເຊົ່າສຳເລັດ');
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
        $order = UserOrder::all();
        $back = rentRoomStory::where('rentRoom_id', $id)->get();
        $rentRoomStory = rentRoomStory::where('id', $id)->first();
        // dd($rentRoomStory);
        return view('admin.rentRoomStory.Edit', compact('rentRoomStory', 'back','order'));
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
        // dd($id);
        // dd($request->outdate);
        $rentRoomStory = rentRoomStory::where('id', $id)->update([
            'rentRoom_id' => $request->rentRoom_id,
            'user_id' => $request->user_id,
            // 'intodate' => $request->intodate,
            // 'outdate' => $request->outdate,
            // 'noContact' => $request->noContact,
            'status' => $request->status,
            'updated_at' => Now(),
        ]);
        // dd($rentRoomStory->outdate);

        $rentRoom = rentRoom::where('id',$request->rentRoom_id)->update([
            'outdate'=>$request->outdate,
        ]);

        return redirect()->back()->with('success', 'ເເກ້ໄຂຂໍ້ມູນການເຊົ່າຫສຳເລັດ');
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
