<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Role;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            $user = User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'gender' => $data['gender'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'image' => 'Profile.png',
                'password' => Hash::make($data['password']),
            ]);

            if(request()->hasFile('image')){
                $image = request()->file('image')->getClientOriginalName();
                $image_name= date('day_H_s_i').'_'.$image;
                request()->file('image')->storeAs('public/images/profiles',$image_name);
                $user->Update(['image'=>$image_name]);
            }

          $role =Role::select('id')->where('name','ຜູ້ໃຊ້')->first();
          $user->roles()->attach($role);
        return $user;
        
    }

    public function redirectTo()
    {
        if(Auth::user()->hasRole('ເຈົ້າຂອງອາພາດເມັ້ນ')){
            $this->redirectTo = route('admin.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ພະນັກງານ')){
            $this->redirectTo = route('dormit.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ຜູ້ເຊົ່າ')){
            $this->redirectTo = route('user.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ຜູ້ໃຊ້')){
            $this->redirectTo = route('admin.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ປິດບັນຊີ')){
            $this->redirectTo = route('user.index');
            return $this->redirectTo;
        }
        // else{
        //     $this->redirectTo = route('block.index');
        //     return $this->redirectTo;
        // }

    }
}
