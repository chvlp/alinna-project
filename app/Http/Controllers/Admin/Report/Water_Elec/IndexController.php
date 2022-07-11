<?php

namespace App\Http\Controllers\Admin\Report\Water_Elec;

use App\electric;
use App\Http\Controllers\Controller;
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
        $order = UserOrder::all();
        $electA = electric::where('status','ຍອມຮັບ')->get();
        $sumA = electric::where('status','ຍອມຮັບ')->sum('price');
        $celectA = count($electA);


        $electB = electric::where('status','<>','ຍອມຮັບ')->get();
        $sumB = electric::where('status','<>','ຍອມຮັບ')->sum('price');
        $celectB = count($electB);

        $waterA = water::where('status','ຍອມຮັບ')->get();
        $wsumA = water::where('status','ຍອມຮັບ')->sum('price');
        $cwaterA = count($electA);


        $waterB = water::where('status','<>','ຍອມຮັບ')->get();
        $wsumB = water::where('status','<>','ຍອມຮັບ')->sum('price');
        $cwaterB = count($electB);

        return view('admin.Report.water_elect.index',compact('order','electA','celectA','sumA','electB','celectB','sumB','waterA','cwaterA','wsumA','waterB','cwaterB','wsumB'));
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
