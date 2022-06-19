<?php

namespace App\Http\Controllers\User;

use App\Dormitory;
use App\Http\Controllers\Controller;
use App\Regist_dormitory;
use App\RegistorUser;
use App\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slect = RegistorUser::where('user_id', Auth::user()->id)->get();
        $cregistu = count($slect);
        $schools = School::all();
        $redormit = Regist_dormitory::all();
        $dormitorys = Dormitory::where('status','ວ່າງ')->orderBy('phase', 'ASC')->get();
        return view('user.index',compact('dormitorys','schools','cregistu','redormit'));
    }
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $slect = RegistorUser::where('user_id', Auth::user()->id)->get();
        $cregistu = count($slect);
        $redormitt = Regist_dormitory::where('user_id',$user_id)->where('dormitory_id',$id)->get();
        $redormit = count($redormitt);

        $redormitmee = Regist_dormitory::where('user_id',$user_id)->get();
        $redormitme = count($redormitmee);

        $schools = School::all();
        $dormitorys = Dormitory::find($id);
        return view('user.show.show',compact('schools','dormitorys','cregistu','redormit','redormitt','redormitmee','redormitme'));
    }
    public function store(Request $request){

        $request->validate([
            'village' => 'required | min:3',
            'distric' => 'required | min:3',
            'province' => 'required | min:3',
            'details' => 'required | min:4',
        ],[
            'village.required' => 'ກະລຸນາປ້ອນບ້ານ',
            'village.min' => 'ກະລຸນາປ້ອນບ້ານຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'distric.required' => 'ກະລຸນາປ້ອນເມືອງ',
            'distric.min' => 'ກະລູນາປ້ອນເມືອງຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'province.required' => 'ກະລຸນາປ້ອນເເຂວງ',
            'province.min' => 'ກະລຸນາປ້ອນເເຂວງຢ່າງນ້ອຍ 3 ຕົວອັກສອນ',
            'details.required' => 'ກະລຸນາປ້ອນລາຍລະອຽດ',
            'details.min' => 'ກະລຸນາປ້ອນຢ່າງນ້ອຍ 4 ຕົວອັກສອນ',
        ]);
        // return $dormitory->id;
        RegistorUser::create([
            'user_id' =>auth()->user()->id,
            'village' =>request('village'),
            'distric' =>request('distric'),
            'province' =>request('province'),
            'details' =>request('details')
        ]);
        // dd($request);
        return redirect()->back()
        ->with('succes', 'ການສະໝັກສະມາຊິກເປັນເຈົ້າຂອງຫ້ອງເເຖວສຳເລັດກະລຸນາລໍຖ້າ ພວກເຮົາກຳລັງດຳເນີນງານ ຂໍຂອບໃຈ');
        // return redirect()->back()->with('succes', 'ການສະໝັກສະມາຊິກເປັນເຈົ້າຂອງຫ້ອງເເຖວສຳເລັດກະລຸນາລໍຖ້າ ພວກເຮົາກຳລັງດຳເນີນງານ ຂໍຂອບໃຈ');
    }
    public function showsch($id){
        $slect = RegistorUser::where('user_id', Auth::user()->id)->get();
        $cregistu = count($slect);
        $dormitorys = Dormitory::all();
        $school = School::all();
        $schools = School::find($id);
        return view('user.school.show',compact('cregistu','schools','dormitorys','school'));
    }
}
