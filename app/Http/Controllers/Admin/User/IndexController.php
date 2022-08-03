<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\RegistorUser;
use App\Role;
use App\User;
use App\members;
use App\rooms;
use App\rentRoom;
use App\UserOrder;
use Illuminate\Http\Request;
use Whoops\Run;

class IndexController extends Controller
{
    
    // public function __construct()
    // {
    //     $this -> middleware('auth');

    // }

    public function index(Request $request)
    {
        if (empty($request->all())) {

        $order = UserOrder::all();
        $users = User::orderBy('id')->paginate(10);
            return view('admin.user.index',compact('users','order'));
        }
            else{

        $order = UserOrder::all();
        $users = User::where('id','like','%'.$request->search.'%')
                ->orWhere('name','like','%'.$request->search.'%')
                ->paginate(10);
                return view('admin.user.index',compact('users','order'));
            }
    }

    public function edit(Request $request, User $user)
    {
        if (empty($request->all())) {

        $order = UserOrder::all();
        $member = members::all();
            $users = User::orderBy('id')->paginate(10);
            $roles = Role::all();
            return view('admin.user.edit',compact('roles','users','member','order'))->with([
                'user' => $user,
                'roles' => $roles
            ]);

        }
        else{
        $order = UserOrder::all();
        $member = members::all();
            $users = User::where('id','like','%'.$request->search.'%')
            ->orWhere('name','like','%'.$request->search.'%')
            ->paginate(10);
            $roles = Role::all();
            return view('admin.user.edit',compact('roles','users','member','order'))->with([
                'user' => $user,
                'roles' => $roles
            ]);
        }

    }
    public function update(Request $request, User $user)
    {
        // dd($request->rentRoomIdd);


        if ( $request->roles == [3] ) {

            $member = array();
            $member['user_id'] = $user->id;
            $member['idcard'] = $request->idcard;
            $member['village'] = $request->village;
            $member['distric'] = $request->distric;
            $member['province'] = $request->province;
            $member['country'] = $request->country;
            $member['status'] = "ກຳລັງເຊົ່າ";
            $member = members::with('user')->insert($member);

            $user->roles()->sync($request->roles);
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');


        }elseif( $request->roles == [33] ){
            // dd($request->rentRoomIddd);
            $member = members::where('id', $request->id)->update([
                'user_id' => $request->user_id,
                // 'idcard' => $request->idcard,
                // 'village' => $request->village,
                // 'distric' => $request->distric,
                // 'province' => $request->province,
                // 'country' => $request->country,
                'status' => "ກຳລັງເຊົ່າ",
                'updated_at' => Now(),
            ]);

            $rooms = rooms::where('id', $request->rentRoomIddd)->update([
                // 'user_id' => $request->user_id,
                // 'idcard' => $request->idcard,
                // 'village' => $request->village,
                // 'distric' => $request->distric,
                // 'province' => $request->province,
                // 'country' => $request->country,
                'status' => "ບໍ່ວາງ",
                'updated_at' => Now(),
            ]);


            $user->roles()->sync("3");
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');


        }elseif( $request->roles == [5] ){

// dd($request->rentRoomIdd);
            $member = members::where('id', $request->id)->update([
                'user_id' => $request->user_id,
                // 'idcard' => $request->idcard,
                // 'village' => $request->village,
                // 'distric' => $request->distric,
                // 'province' => $request->province,
                // 'country' => $request->country,
                'status' => "ອອກເເລ້ວ",
                'updated_at' => Now(),
            ]);

            $rooms = rooms::where('id', $request->rentRoomIdd)->update([
                // 'user_id' => $request->user_id,
                // 'idcard' => $request->idcard,
                // 'village' => $request->village,
                // 'distric' => $request->distric,
                // 'province' => $request->province,
                // 'country' => $request->country,
                'status' => "ວາງ",
                'updated_at' => Now(),
            ]);

            $rentRoom = rentRoom::where('id', $request->rentId)->update([
                // 'user_id' => $request->user_id,
                // 'idcard' => $request->idcard,
                // 'village' => $request->village,
                // 'distric' => $request->distric,
                // 'province' => $request->province,
                // 'country' => $request->country,
                'status' => "ອອກເເລ້ວ",
                'updated_at' => Now(),
            ]);




            $user->roles()->sync($request->roles);
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');

        }else {
            $user->roles()->sync($request->roles);
            $user->updated_at=Now();
            $user->save();
            return redirect()->route('admin.user.edit',$user)
                            ->with('success','ອັບເດດຂໍ້ມູນຂອງ');
        }

    }

}
