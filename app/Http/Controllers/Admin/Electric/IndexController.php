<?php

namespace App\Http\Controllers\Admin\Electric;

use App\electric;
use App\rooms;
use App\members;

use App\Http\Controllers\Controller;
use App\payElectric;
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
        $electric = electric::orderBy('id')->paginate(5);
        return view('admin.electric.index', compact('electric','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $room = rooms::all();
        // $member = members::all();
        // $electric = electric::orderBy('id')->paginate(10);
        // return view('admin.electric.create',compact('electric','room','member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $electric = electric::create([
            'indate' => $request->indate,
            'rentRoom_id' => $request->rentRoom_id,
            'member_id' => $request->member_id,
            'before' => $request->before,
            'after' => $request->after,
            'IDelectric' => $request->IDelectric,
            'price' => $request->price,
            'image' => $request->file('image'),
            'status' => "ຍັງບໍ່ທັນຈ່າຍ",
            'created_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/Electrics', $image_name);
            $electric->Update(['image' => $image_name]);
        }

        $electric->save();
        return redirect()->back()->with('success', 'ເພີ່ມຂໍ້ມູນຄ່າໄຟຟ້າສຳເລັດ');
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
        $pay_electric = payElectric::where('electric_id',$id)->first();
        $electric = electric::where('id',$id)->first();
        return view('admin.electric.Edit',compact('electric','pay_electric','order'));
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
        $electric = electric::where('id', $id)->update([
            // 'indate' => $request->indate,
            // 'rentRoom_id' => $request->rentRoom_id,
            // 'member_id' => $request->member_id,
            // 'before' => $request->before,
            // 'after' => $request->after,
            // 'IDelectric' => $request->IDelectric,
            // 'price' => $request->price,
            // 'image' => $request->file('image'),
            'status' => $request->status,
            'updated_at' => Now(),
        ]);

        if (request()->hasFile('image')) {
            $image = request()->file('image')->getClientOriginalName();
            $image_name = date('day_H_s_i') . '_' . $image;
            request()->file('image')->storeAs('public/images/Electrics', $image_name);
            $electric->Update(['image' => $image_name]);
        }

        return redirect()->back()->with('success', 'ເເກ້ໄຂຂໍ້ມູນຄ່າໄຟຟ້າສຳເລັດ');
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
