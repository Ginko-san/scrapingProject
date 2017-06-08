@extends('layouts.app')

@section('content')

    <div class="row seccionROW" style="background-image: url('imgs/cuponsBackground.jpg'); ">
        <h1>Cupones</h1><br/>
        <div style="margin: 2%;">
            @foreach ($cupones as $cupon)
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{$cupon->nombre}}</div>

                        <div class="itemCustom" style="background-image: url('{{$cupon->imagen}}'); ">
                            <div style="background-color: rgba(0, 0, 0, 0.3); color: white;">
                               <ul>
                                    <li> Precio Real: {{$cupon->precioReal}} </li>
                                    <li> Precio de Oferta: {{$cupon->precioOferta}}</li>
                                    <li> Ahorro: {{$cupon->ahorro}}</li>
                                </ul> 
                            </div>
                            <a href="#" class="btn btn-primary pull-right">Ver Más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <br/>
    </div>
    <div class="row seccionROW" style="background-image: url('imgs/promociones.jpg');">
        <h1 >Promociones</h1><br/>
        @foreach ($promociones as $promocion)
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$promocion->nombre}}</div>

                    <div class="itemCustom" style="background-image: url('{{$promocion->imagen}}'); ">
                        <div style="background-color: rgba(0, 0, 0, 0.3); color: white;">
                            <ul>
                                <li> Precio Real: {{$promocion->precioReal}} </li>
                                <li> Precio de Oferta: {{$promocion->precioOferta}}</li>
                                <li> Ahorro: {{$promocion->ahorro}}</li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary pull-right">Ver Más</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

