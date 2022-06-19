<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\RegistorUser;
use App\Role;
use App\User;
use App\members;
use Illuminate\Http\Request;
use Whoops\Run;

class IndexController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');

    }

    public function index(Request $request)
    {
        if (empty($request->all())) {
          
            $users = User::orderBy('id')->paginate(10);
            return view('admin.user.index',compact('users'));
        }
            else{
               
                $users = User::where('id','like','%'.$request->search.'%')
                ->orWhere('name','like','%'.$request->search.'%')
                ->paginate(10);
                return view('admin.user.index',compact('users'));
            }
    }

    public function edit(Request $request, User $user)
    {
        if (empty($request->all())) {

            $member = members::all();
            $users = User::orderBy('id')->paginate(10);
            $roles = Role::all();
            return view('admin.user.edit',compact('roles','users','member'))->with([
                'user' => $user,
                'roles' => $roles
            ]);

        }
        else{
            $member = members::all();
            $users = User::where('id','like','%'.$request->search.'%')
            ->orWhere('name','like','%'.$request->search.'%')
            ->paginate(10);
            $roles = Role::all();
            return view('admin.user.edit',compact('roles','users','member'))->with([
                'user' => $user,
                'roles' => $roles
            ]);
        }

    }
    public function update(Request $request, User $user)
    {

                            
        // dd($user->roles->pluck('id'));
        // dd($request);
        // dd($request->roles==[33]);
        // dd($user->roles);
        if ( $request->roles == [3] ) {
            // dd($user->id);
          
            $member = array();
            $member['user_id'] = $user->id;
            $member['idcard'] = $request->idcard;
            $member['village'] = $request->village;
            $member['distric'] = $request->distric;
            $member['province'] = $request->province;
            $member['country'] = $request->country;
            $member = members::with('user')->insert($member);

            $user->roles()->sync($request->roles);
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');
        }elseif( $request->roles == [33] ){
            $user->roles()->sync("3");
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');
        }else {
            // dd($user->name);
            $user->roles()->sync($request->roles);
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');
        }
       
    }

}
