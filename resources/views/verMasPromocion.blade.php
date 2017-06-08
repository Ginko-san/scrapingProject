@extends('layouts.app')

@section('pop')
<div class="col-md-8">
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
@endsection
