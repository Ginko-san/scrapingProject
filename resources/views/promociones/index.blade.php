@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="panel-body">
              <a href="{{ route('promociones.create') }}" class="btn btn-primary" role="button">Nuevo</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                           <th>id Promocion</th>
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
                        @foreach ($promociones as $promocion)
                            <tr>
                                <th scope="row">{{ $promocion->idPromocion }}</th>
                                <th>{{ $promocion->nombre }}</th>
                                <th>{{ $promocion->precioReal }}</th>
                                <th>{{ $promocion->precioOferta }}</th>
                                <th>{{ $promocion->ahorro }}</th>
                                <th>{{ $promocion->cantVentas }}</th>
                                <th>{{ $promocion->validez }}</th>
                                <th>{{ $promocion->imagenusers }}</th>
                                <th>
                                   <p>
                                     <a href="{{route('promociones.index')}}/{{ $promociones->idPromocion }}/edit" class="btn btn-primary" role="button">Editar</a>
                                     
                                     <form action="{{route('promociones.index')}}/{{ $promocion->idPromocion }}" method="POST">
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
