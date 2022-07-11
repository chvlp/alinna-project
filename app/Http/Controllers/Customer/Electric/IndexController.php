<?php

namespace App\Http\Controllers\Customer\Electric;

use App\electric;
use App\Http\Controllers\Controller;
use App\payElectric;
use App\rentRoom;
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
        return view('customer.water.index');
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

        $payElect = payElectric::create([
            'electric_id' => $request->electric_id,
            'price' => $request->price,
            'detail' => $request->detail,
            'image' => $request->file('image'),
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/PayElectrics', $image_name);
            $payElect->Update(['image' => $image_name]);
        }

        $electric = electric::where('id',$request->electric_id)->update([

            // 'indate' => $request->indate,
            // 'rentRoom_id' => $request->rentRoom_id,
            // 'member_id' => $request->member_id,
            // 'before' => $request->before,
            // 'after' => $request->after,
            // 'IDelectric' => $request->IDelectric,
            // 'price' => $request->price,
            // 'image' => $request->file('image'),
            'status' => "ກຳລັງກວດສອບ",
            'updated_at' => Now(),

        ]);

        $payElect->save();
        return redirect()->back()->with('success', 'ສົ່ງຂໍ້ມູນການຊຳລະບິນໄຟຟ້າສຳເລັດ');

       
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
        $electric = electric::where('rentRoom_id', $id)->get();
        return view('customer.electric.index', compact('rentRooms', 'electric'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $electric = electric::where('id', $id)->first();
        return view('customer.electric.show', compact('electric'));
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
