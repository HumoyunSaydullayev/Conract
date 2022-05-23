<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;


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

    public function open_check()
    {
        return view('User.Login_talaba');
    }
    public function check(Request $request)
    {
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return back()->with("captchax", "Xato");
        }
        $passport = $request->passport;
        $list = Admin::all();
        $list = Admin::query();
        if ($passport != null) {
            $list = $list->where('Passport_seriya', $passport);
        }
        $list = $list->get();
        return view('User.User', compact('list'));
    }

    public function admin()
    {
        return view('Admin.Login_Admin');
    }
    public function open_admin(Request $request)
    {
        $login  = $request->login;
        $parol = $request->password;
        $list = Admin::all();
        $list = Admin::query();
        if ($login != null) {
            $list = $list->where('login', $login);
            if ($parol != null) {
                $list = $list->where('parol', $parol);
            }
        }
        $list = $list->get();
        return view('Admin.dashboard', compact('list'));
    }
}
