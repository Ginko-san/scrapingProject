@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="{{ route('cupones.create') }}" class="btn btn-primary" role="button">Nuevo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                           <th>id Cupon</th>
                           <th>Nombre</th>
                           <th>Precio Real</th>
                           <th>Precio de Oferta</th>
                           <th>Ahorro</th>
                           <th>Cantidad de ventas</th>
                           <th>Validez</th>
                           <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cupones as $cupon)
                            <tr>
                                <th scope="row">{{ $cupon->idCupon }}</th>
                                <th>{{ $cupon->nombre }}</th>
                                <th>{{ $cupon->precioReal }}</th>
                                <th>{{ $cupon->precioOferta }}</th>
                                <th>{{ $cupon->ahorro }}</th>
                                <th>{{ $cupon->cantVentas }}</th>
                                <th>{{ $cupon->validez }}</th>
                                <th>{{ $cupon->imagen }}</th>
                                <th>
                                   <p>
                                    <a href="{{route('cupones.index')}}/{{ $cupones->idCupon}}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                     <form action="{{route('cupones.index')}}/{{ $cupon->idCupon }}" method="POST">
                                       <input type="submit" value="Eliminar">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="hidden" name="_method" value="DELETE">
                                     </form>

                                     <!--a href="{{route('cliente.index')}}/{{ $cliente->cedula }}" class="btn btn-primary" role="button">Eliminar</a-->
                                  </p>
                                 </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@stop
