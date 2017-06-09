<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cupon;

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
      $this->validate($request,[
          'nombre'=>'required',
          'precioReal'=>'required',
          'precioOferta'=>'required',
          'ahorro'=>'required',
          'cantVentas'=>'required',
          'validez'=>'required',
          'imagen'=>'required',
          'url'=>'required',
          ]);

      $cupon = new Cupon($request->all());
      $cupon->save();
      
      return redirect()->route('cupones.index')->with('message','data has been updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
        //
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $cupon = Cupon::find($id);

      return view('cupones.edit',['cupon'=>$cupon]);
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
              $cupon = Cupon::find($id);
              $cupon->nombre = $request->nombre;
              $cupon->precioReal = $request->precioReal;
              $cupon->precioOferta = $request->precioOferta;
              $cupon->ahorro = $request->ahorro;
              $cupon->cantVentas = $request->cantVentas;
              $cupon->validez = $request->validez;
              $cupon->imagen = $request->imagen;
              $cupon->url= $request->url;
              $cupon->save();
              return redirect()->route('cupones.index')->with('message','data has been updated!');
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
