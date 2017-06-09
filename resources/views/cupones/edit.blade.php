@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form class="form-horizontal" role="form" action="{{route('cupones.index')}}/{{ $cupon->id }}" method="POST">
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $cupon->nombre }}">
                </div>
                <div class="form-group">
                    <label for="precioReal">Precio Real</label>
                    <input type="number" class="form-control" id="precioReal" name="precioReal" placeholder="Precio Real" value="{{ $cupon->precioReal }}"></input>
                </div>
                <div class="form-group">
                    <label for="precioOferta">Precio oferta</label>
                    <input type="number" class="form-control" id="precioOferta" name="precioOferta" placeholder="Precio Oferta" value="{{ $cupon->precioOferta }}"></input>
                </div>
                <div class="form-group">
                    <label for="ahorro">Ahorro</label>
                    <input type="number" class="form-control" id="ahorro" name="ahorro" placeholder="Ahorro" value="{{ $cupon->ahorro }}"></input>
                </div>
                <div class="form-group">
                    <label for="cantVentas">Cantidad de ventas</label>
                    <input type="number" class="form-control" id="cantVentas" name="cantVentas" placeholder="Cantidad de Ventas" value="{{ $cupon->cantVentas }}"></input>
                </div>
                <div class="form-group">
                    <label for="validez">Validez</label>
                    <input type="text" class="form-control" id="validez" name="validez" placeholder="Validez" value="{{ $cupon->validez }}"></input>
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Imagen" value="{{ $cupon->imagen }}"></input>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ $cupon->url }}"></input>
                </div>
                <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                           <input class="btn btn-primary btn-block" type="submit" value="Editar">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="hidden" name="_method" value="PUT">

                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection