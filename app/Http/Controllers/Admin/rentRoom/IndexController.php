<?php

namespace App\Http\Controllers\Admin\rentRoom;

use App\electric;
use App\members;
use App\rentRoom;
use App\rooms;
use App\User;
use App\Role;
use App\rentRoomStory;


use App\Http\Controllers\Controller;
use App\UserOrder;
use App\water;
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
        $order = UserOrder::all();
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.index', compact('rentRoom','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = UserOrder::all();
        $member = members::all();
        $room = rooms::all();
        // dd($room);
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.create', compact('rentRoom', 'member', 'room','order'));
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
            'image' => $request->file('image'),
            'noContact' => $request->noContact,
            'status' => "ກຳລັງເຊົ່າ",
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/rentRooms', $image_name);
            $rentRoom->Update(['image' => $image_name]);
        }

        // dd($rentRoom->member->user->id);


        $from_date = Carbon::parse(date('Y-m-d', strtotime($request->intodate)));
        $through_date = Carbon::parse(date('Y-m-d', strtotime($request->outdate)));
        $shift_difference = $from_date->diffInDays($through_date);
        $price = $rentRoom->room->price / 30;

        $rentRoomStory = rentRoomStory::create([
            'rentRoom_id' => $rentRoom->id,
            'user_id' => $rentRoom->member->user->id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'qtyday' => $shift_difference,
            'price' => $shift_difference * $price,
            'status' => "ຍອມຮັບ",
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);

        // if (request()->hasFile('image')) {
        //     $image = request()->file('image')->getClientOriginalName();
        //     $image_name = date('day_H_s_i') . '_' . $image;
        //     request()->file('image')->storeAs('public/images/rentRoomStory', $image_name);
        //     $rentRoomStory->Update(['image' => $image_name]);
        // }



        rooms::where('id', $request->room_id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
            'status' => "ບໍ່ວາງ",
            'updated_at' => Now(),
        ]);


        $rentRoom->save();
        $rentRoomStory->save();
        // $rentRoomStory->save();
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


        $order = UserOrder::all();
        $water = water::where('rentRoom_id', $id)->get();
        $electric = electric::where('rentRoom_id', $id)->get();
        $rentRoomStory = rentRoomStory::all();
        $rentRooms = rentRoom::find($id);
        $rentRoomStory = rentRoomStory::where('rentRoom_id', $id)->get();
        // dd($rentRoomStory);
        return view('admin.rentRoom.show', compact('rentRooms', 'rentRoomStory', 'rentRoomStory', 'electric', 'water','order'));
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
        $room = rooms::all();
        $member = members::all();
        $rentRooms = rentRoom::find($id);
        $rentRoom = rentRoom::orderBy('id')->paginate(5);
        return view('admin.rentRoom.edit', compact('rentRoom', 'room', 'rentRooms', 'member','order'));
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
        $rentRoom = rentRoom::where('id', $id)->update([
            'room_id' => $request->room_id,
            'member_id' => $request->member_id,
            // 'intodate' => $request->intodate,
            // 'outdate' => $request->outdate,
            // 'noContact' => $request->noContact,
            'status' => $request->status,
            'updated_at' => Now(),
        ]);

        rooms::where('id', $request->room_id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
            'status' => "ວາງ",
            'updated_at' => Now(),
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
        $rentRooms = rentRoom::find($id);
        // dd($rentRooms->member->id);


        $rooms = rooms::where('id', $rentRooms->room->id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
            'status' => "ວາງ",
        ]);

        // $members = members::where('id', $rentRooms->member->id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
        //     'status' => "ອອກເເລ້ວ",
        // ]);

        User::where('id', $rentRooms->member->user->id)->update([
            // 'user_id' => $request->user_id,
            // 'idcard' => $request->idcard,
            // 'village' => $request->village,
            // 'distric' => $request->distric,
            // 'province' => $request->province,
            // 'country' => $request->country,
            'updated_at' => Now(),
        ]);

        $rentRooms->member->user->roles()->sync(5);
        // $user->save();

        $rentRooms->delete();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນການເຊົ່າຫສຳເລັດ');
    }
}
