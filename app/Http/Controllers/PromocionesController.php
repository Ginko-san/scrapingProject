<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promociones;

class PromocionesController extends Controller {

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
      $promociones = Promociones::all(); 
      return view('promociones.create',['promociones'=>$promociones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('promociones.create');//Se va a la vista create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)//crea un nuevo cliente
    {
        $this->validate($request,[
          'nombre'=>'required',
          'precioReal'=>'required',
          'precioOferta'=>'required',
          'ahorro'=>'required',
          'cantVentas'=>'required',
          'validez'=>'required',
          'imagenusers'=>'required',
      ]);
      $promociones = new Promociones($request->all());;
      
      $promociones->save();

      return redirect('promocion')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function show($id)
    {
        $cliente = Cliente::find($id);
        if(!$cliente){
            abort(404);
         }

         return view('cliente.detail')->with('cliente',$cliente);
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($idPromocion)
    {
      $promocion = Promociones::find($idPromocion);

      return view('promociones.edit',['promocion'=>$promocion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$idPromocion)
    {
        $cliente = Cliente::find($cedula);

        if(!$cliente){
             abort(404);
        }
        else{
              $promociones = new Promociones;
              $promociones->nombre = $request->nombre;
              $promociones->precioReal = $request->precioReal;
              $promociones->precioOferta = $request->precioOferta;
              $promociones->ahorro = $request->ahorro;
              $promociones->cantVentas = $request->cantVentas;
              $promociones->validez = $request->validez;
              $promociones->imagenusers = $request->imagenusers;
              $promociones->save();
              return redirect('promocion')->with('message','data has been updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $idPromocion
     * @return Response
     */
    public function destroy($idPromocion)
    {
        $promocion = Promociones::find($idPromocion);

        $promocion->delete();

        return redirect('promocion')->with('message','data has been deleted!');
    }


}