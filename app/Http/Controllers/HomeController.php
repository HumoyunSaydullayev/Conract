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
        $passport = $request->passport;
        $jshir = $request->jshir;
        $list = Talaba::all();
        $list = Talaba::query();



        $list = $list->get();
        // return view('maruza.table', compact('list'));
        return 1;
    }
}
