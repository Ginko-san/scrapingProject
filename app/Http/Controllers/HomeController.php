<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $promociones = DB::table('promociones')->limit(30)->get();

        $cupones = DB::table('cupones')->limit(30)->get();

        return view('home',['promociones'=> $promociones , 'cupones' => $cupones]);
    }
}
