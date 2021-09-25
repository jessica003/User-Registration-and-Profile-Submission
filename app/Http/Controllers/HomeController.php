<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        $users = User::leftJoin('personal_details','users.id','personal_details.user_id')
                        ->leftJoin('job_details','users.id','job_details.user_id')
                        ->leftJoin('educational_details','users.id','educational_details.user_id')
                        ->where('is_admin',0)->get();
        // dd($users);
        return view('adminHome',compact('users'));
    }
}
