@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
          @if(Session::has('message'))
  				    <div class="alert alert-success">
  				      {{ Session::get('message') }}
  				    </div>
  				@endif
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" action='promociones/store' method="GET">
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="precioReal">Precio Real</label>
                    <input type="number" class="form-control" id="precioReal" name="precioReal" placeholder="Precio Real"></input>
                </div>
                <div class="form-group">
                    <label for="precioOferta">Precio oferta</label>
                    <input type="number" class="form-control" id="precioOferta" name="precioOferta" placeholder="Precio Oferta"></input>
                </div>
                <div class="form-group">
                    <label for="ahorro">Ahorro</label>
                    <input type="number" class="form-control" id="ahorro" name="ahorro" placeholder="Ahorro"></input>
                </div>
                <div class="form-group">
                    <label for="cantVentas">Cantidad de ventas</label>
                    <input type="number" class="form-control" id="cantVentas" name="cantVentas" placeholder="Cantidad de Ventas"></input>
                </div>
                <div class="form-group">
                    <label for="validez">Validez</label>
                    <input type="text" class="form-control" id="validez" name="validez" placeholder="Validez"></input>
                </div>

                <div class="form-group">
                    <label for="imagenusers">Imagen</label>
                    <input type="text" class="form-control" id="imagenusers" name="imagenusers" placeholder="Imagen"></input>
                </div>

                <div class="form-group">
                    <label for="url">Imagen</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL original"></input>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-primary btn-block" type="submit"  value="Guardar">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
