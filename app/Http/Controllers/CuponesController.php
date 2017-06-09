<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Cupon;
use DB;

class CuponesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $cupones = Cupon::all();

      dd($cupones[0]->primaryKey);
      return view('cupones.index',['cupones'=>$cupones]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return view('cupones.create');//Se va a la vista create
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)//crea un nuevo cliente
    {
       DB::table('cupones')->insert([
           'nombre'=>$request->Nombre,
          'precioReal'=>$request->precioReal,
          'precioOferta'=>$request->precioOferta,
          'ahorro'=>$request->ahorro,
          'cantVentas'=>$request->cantVentas,
          'validez'=>$request->validez,
          'imagen'=>$request->imagen,
          'url'=>$request->url,
        ]);
       return back()->with('success', 'Cupon agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($idCupon)
    {
       
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $cupon = Cupon::find($id);

      return view('cupones.edit',['cupones'=>$cupon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $cupon = Cupon::find($id);

        if(!$cupon){
             abort(404);
        }
        else{
              $cupones = new Cupon;
              $cupones->nombre = $request->nombre;
              $cupones->precioReal = $request->precioReal;
              $cupones->precioOferta = $request->precioOferta;
              $cupones->ahorro = $request->ahorro;
              $cupones->cantVentas = $request->cantVentas;
              $cupones->validez = $request->validez;
              $cupones->imagen = $request->imagen;
              $cupones->url=$requuest->url;
              $cupones->save();
              return redirect('cupones')->with('message','data has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idPromocion
     * @return Response
     */
    public function destroy($id)
    {
        $cupon = Cupon::find($id);

        $cupon->delete();

        return redirect('cupones')->with('message','data has been deleted!');
    }


}
