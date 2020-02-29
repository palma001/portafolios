<?php

namespace App\Http\Controllers;

use App\Equipment;
use App\Setting;
use App\Work;
use Illuminate\Http\Request;

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
        $equipments = Equipment::with('professions')->paginate();
        $setting = Setting::first();
        $works = Work::all();
        return view('home', compact('equipments', 'setting', 'works'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
