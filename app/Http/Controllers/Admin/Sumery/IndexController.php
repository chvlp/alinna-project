<?php

namespace App\Http\Controllers\Admin\Sumery;

use App\Http\Controllers\Controller;
use App\RoleUser;
use App\User;
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
        $user = User::all();
        $user1 = RoleUser::where('role_id',1)->get();
        $user2 = RoleUser::where('role_id',2)->get();
        $user3 = RoleUser::where('role_id',3)->get();
        $user4 = RoleUser::where('role_id',4)->get();
        $cuser1 = count($user1);
        $cuser2 = count($user2);
        $cuser3 = count($user3);
        $cuser4 = count($user4);
        $cuser5 = count($user);
        // dd($cuser1);
        return view('admin.sumery.index',compact('order','user','cuser1','cuser2','cuser3','cuser4','cuser5'));
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
