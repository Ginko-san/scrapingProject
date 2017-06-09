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
                            <a href="#" data-toggle="popover" class="btn btn-primary pull-right" data-content="yield(pop)">Ver Más</a>
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
<div id="footer">
        <div class="row">
            <br>
              <div class="col-md-4">
                <center>
                    <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                    <br>
                    <h4 class="footertext">Backend</h4>
                    <p class="footertext"><a href="https://www.facebook.com/kim.morales3">Kimberly Morales Arias</a><br>
                    <p class="footertext"><a href="https://www.facebook.com/GinkoSans">Andrés García Salas</a><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                    <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                    <br>
                    <h4 class="footertext">Frontend</h4>
                    <p class="footertext"><a href="https://www.facebook.com/paolafabiana.chavesalvarado">Paola Chaves Alvarado</a><br>
                    <p class="footertext"><a href="https://www.facebook.com/mariela.gomez.9484">Yerlin Ávila Gómez</a><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                   <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                   <br>
                   <h4 class="footertext">Lenguaje de Programación</h4>
                   <p class="footertext"><a href="https://laravel.com/">Laravel</a><br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><p class="footertext">Copyright 2017</p></center></p>
        </div>
</div>
 <script>
/**$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});*/
</script>

@endsection

