<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\image;
use App\rooms;
use App\type_room;
use App\UserOrder;
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
        $userOd = UserOrder::where('user_id',Auth::user()->id)->get();
        $userOrder = count($userOd);
        $userOrders = UserOrder::where('user_id',Auth::user()->id)->get();
        $typeRoom = type_room::all();
        return view('user.index',compact('typeRoom','userOrder','userOrders','userOd'));
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

        $userOrder = UserOrder::create([
            'user_id' => Auth::user()->id,
            'inday' => $request->inday,
            'detail' =>$request->detail,
            'sta' =>$request->sta,
        ]);

        $userOrder->save();
        return redirect()->back()->with('success','ການຈອງສຳເລັດ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = rooms::where('type_id',$id)->get();
        $roomType = type_room::where('id',$id)->first();
        $images= image::all();
        return view('user.show',compact('room','images','roomType'));
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
