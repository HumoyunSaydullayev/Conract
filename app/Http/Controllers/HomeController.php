<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talaba;


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
        $list = Talaba::all();
        $list = Talaba::query();
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
}
