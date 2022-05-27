<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Talaba;
use App\Models\Yonalish;
use Barryvdh\DomPDF\Facade\Pdf;

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
    public function chiqish(Request $request)
    {
        if ($request->session()->has('key')) {
            $passport = $request->session()->pull('key', 'default');
        }
        return redirect()->route('boshsahifa');
    }


    public function check(Request $request)
    {
        if ($request->session()->has('key')) {
            $passport = $request->session()->get('key');
        } else {
            if (!$request->has('passport'))
                return redirect()->route('boshsahifa');

            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                return back()->with("captchax", "Xato");
            }
            $passport = $request->passport;
            $request->session()->put('key', $passport);
        }
        $t = Talaba::with(['yonalish.contract', 'shartnoma'])->get();
        #return $t;

        if ($passport != null) {
            $t = $t->where('Passport_seriya', $passport);
        }
        $t = $t->first();
        return view('User.User', compact('t'));
    }


    public function getPdf(Request $request)
    {
        $passport = $request->passport;
        // dd($passport);
        $t = Talaba::with('yonalish.contract');

        if ($passport != null) {
            $t = $t->where('Passport_seriya', $passport);
        }
        $t = $t->first();
        $pdf = PDF::loadView('mypdf', compact('t'));
        // return view('mypdf', compact('list'));
        return $pdf->download('Shartnoma.pdf');
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
