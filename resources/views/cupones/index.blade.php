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
                                <th scope="row">{{ $cupon->id }}</th>
                                <th>{{ $cupon->nombre }}</th>
                                <th>{{ $cupon->precioReal }}</th>
                                <th>{{ $cupon->precioOferta }}</th>
                                <th>{{ $cupon->ahorro }}</th>
                                <th>{{ $cupon->cantVentas }}</th>
                                <th>{{ $cupon->validez }}</th>
                                <th>{{ $cupon->imagen }}</th>
                                <th>
                                   <p>
                                   <a href="{{route('cupones.index')}}/{{$cupon->id}}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                     <form action="{{route('cupones.index')}}/{{ $cupon->id}}" method="POST">
                                       <input type="submit" value="Eliminar">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <input type="hidden" name="_method" value="DELETE">
                                     </form>
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
