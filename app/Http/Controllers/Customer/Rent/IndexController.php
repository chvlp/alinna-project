<?php

namespace App\Http\Controllers\Customer\Rent;

use App\Http\Controllers\Controller;
use App\members;
use App\rentRoom;
use App\rentRoomStory;
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
        $user_id = members::where('user_id', Auth::user()->id)->first();
        $rentRoom = rentRoom::where('member_id', $user_id->id)->get();
        $rentStory = rentRoomStory::where('user_id', Auth::user()->id)->get();
        return view('customer.rent.index', compact('rentRoom', 'rentStory'));
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
        $from_date = Carbon::parse(date('Y-m-d', strtotime($request->intodate)));
        $through_date = Carbon::parse(date('Y-m-d', strtotime($request->outdate)));
        $shift_difference = $from_date->diffInDays($through_date);

        $rentRoomStory = rentRoomStory::create([
            'rentRoom_id' => $request->rentRoom_id,
            'user_id' => Auth::user()->id,
            'intodate' => $request->intodate,
            'outdate' => $request->outdate,
            'qtyday' => $shift_difference,
            'price' => $request->price,
            'status' => "ກຳລັງກວດສອບ",
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/rentRoomStory', $image_name);
            $rentRoomStory->Update(['image' => $image_name]);
        }

        $rentRoomStory->save();
        return redirect()->back()->with('success', 'ການຕໍ່ຂໍ້ມູນການເຊົ່າສຳເລັດ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rentRooms = rentRoom::find($id);
        $rentRoomStory = rentRoomStory::where('user_id',Auth::user()->id)->get();

        // dd($rentRoomStory);
        return view('customer.rent.show', compact('rentRooms','rentRoomStory'));
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
