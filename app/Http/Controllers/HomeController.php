<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
        $promociones = DB::table('promociones')->paginate(6);

        $cupones = DB::table('cupones')->paginate(6);

        //$cosas = $cupones->sortByDesc('cantVentas');
        //$articulos = $cosas->paginate(5);
       // $articulos = DB::table('cupones')->sortByDesc('cantVentas')->values()->all();

        $articulos = DB::table('cupones')->orderBy('cantVentas', 'desc')->get();
      

        return view('home',['promociones'=> $promociones , 'cupones' => $cupones, 'articulos'=> $articulos]);
    }


    public function cuponesPopulares(){

        $categoria = Cupon::all();
        //$articulos = $categoria->articulos()->paginate(5);

        $articulos = $categoria->sortByDesc('cantVentas');
       // $ordenados = $articulos->sortByDesc('cantVentas')->paginate(5);

       // $ordenados->values()->all();
        //return view('home')->with("articulos",$articulos);
        return view('home',['articulos'=> $articulos]);
    }
}
