<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo ='/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectTo()
    {
        if(Auth::user()->hasRole('ເຈົ້າຂອງອາພາດເມັ້ນ')){
            $this->redirectTo = route('admin.index');
            return $this->redirectTo;   
        }
        if(Auth::user()->hasRole('ພະນັກງານ')){
            $this->redirectTo = route('admin.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ຜູ້ເຊົ່າ')){
            $this->redirectTo = route('Customer.Customer.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ຜູ້ໃຊ້')){
            $this->redirectTo = route('User.User.index');
            return $this->redirectTo;
        }
        if(Auth::user()->hasRole('ອອກ')){
            $this->redirectTo = route('User.User.index');
            return $this->redirectTo;
        }
        // else{
        //     $this->redirectTo = route('block.index');
        //     return $this->redirectTo;
        // }

    }
}
