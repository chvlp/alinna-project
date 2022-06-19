<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Dormitory;
use App\Http\Controllers\Controller;
use App\RegistorUser;
use App\RoleUser;
use App\School;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('admin.index');
    }
}
