<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Talaba;
use App\Models\Yonalish;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
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


    public function check(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return back()->with("captchax", "Xato");
        }
        $passport = $request->passport;
        $list = Talaba::with('yonalish.contract');

        if ($passport != null) {
            $list = $list->where('Passport_seriya', $passport);
        }
        $list = $list->get();
        return view('User.User', compact('list'));
    }

    public function check1()
    {
        return view('User.User');
    }
    public function yonalish(Request $request)
    {
        $list = Talaba::with('yonalish.contract')->get();
        return $list;

        $list = Yonalish::with("Contract")->get();
        return view('User.Yonalish', compact('list'));
    }


    public function open_admin(Request $request)
    {
        $login  = $request->login;
        $parol = $request->password;
        $list = Admin::query();
        if ($login != null) {
            $list = $list->where('login', $login);
            if ($parol != null) {
                $list = $list->where('parol', $parol);
            }
        }
        $list = $list->get();
        return view('dashboard.index', compact('list'));
    }
}
