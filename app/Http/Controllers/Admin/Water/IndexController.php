<?php

namespace App\Http\Controllers\Admin\Water;

use App\Http\Controllers\Controller;
use App\payWater;
use App\UserOrder;
use App\water;
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
        $water = water::create([
            'indate' => $request->indate,
            'rentRoom_id' => $request->rentRoom_id,
            'member_id' => $request->member_id,
            'IDwater' => $request->IDwater,
            'price' => $request->price,
            'image' => $request->file('image'),
            'status' => "ຍັງບໍ່ທັນຈ່າຍ",
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/Waters', $image_name);
            $water->Update(['image' => $image_name]);
        }
        $water->save();
        return redirect()->back()->with('success', 'ເພີ່ມຂໍ້ມູນຄ່ານ້ຳປະປາສຳເລັດ');
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
        $pay_water = payWater::where('water_id', $id)->first();
        $water = water::where('id', $id)->first();
        return view('admin.water.Edit', compact('water', 'pay_water','order'));
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
        $electric = water::where('id', $id)->update([
            // 'indate' => $request->indate,
            // 'rentRoom_id' => $request->rentRoom_id,
            // 'member_id' => $request->member_id,
            // 'IDwater' => $request->IDwater,
            // 'price' => $request->price,
            // 'image' => $request->file('image'),
            'status' => $request->status,
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/Waters', $image_name);
            $electric->Update(['image' => $image_name]);
        }
        return redirect()->back()->with('success', 'ເເກ້ໄຂຂໍ້ມູນຄ່ານ້ຳປະປາສຳເລັດ');
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
