

 @section('content')
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Laravel 5 - @yield('Proyecto Final')</title>
        
    </head>
    @extends('layouts.app')
    <body>
        @section('header')

            <div class="row seccionROW" style="background-image: url('imgs/cuponsBackground.jpg'); "></div>

            <div class="cuadro">
                <h1 >Cupones</h1><br/>
                <div class="container" >
                 <div class="col-md-10">
                    @foreach ($cupones as $cupon)
                    <div class="col-md-5">
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
                <div class="col-md-2">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                               
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="{{$articulos[0]->imagen}}" alt="Los Angeles">
                                    </div>
                                    <div class="item">
                                        <img src="{{$articulos[1]->imagen}}" alt="Chicago">
                                    </div>
                                    <div class="item">
                                        <img src="{{$articulos[2]->imagen}}" alt="Chicago">
                                    </div>
                                    <div class="item">
                                        <img src="{{$articulos[3]->imagen}}" alt="Chicago">
                                    </div>
                                    <div class="item">
                                        <img src="{{$articulos[4]->imagen}}" alt="Chicago">
                                    </div>
                                  </div>
                               
                                                                 <!-- Left and right controls -->
                                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>

                </div>

                </div>
                <?php echo $cupones->render(); ?>
            </div>
            <div class="row seccionROW" style="background-image: url('imgs/promociones.jpg'); "></div>

            <div class="cuadro">
                <h1>Promociones</h1><br/>
                <div class="container" >
                    <div class="col-md-10">
                    @foreach ($promociones as $promocion)
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$promocion->nombre}}</div>
                            <div class="itemCustom" style="background-image: url('{{$promocion->imagenusers}}'); ">
                                <div style="background-color: rgba(0, 0, 0, 0.3); color: white;">
                                    <ul>
                                        <li> Precio Real: {{$promocion->precioReal}} </li>
                                        <li> Precio de Oferta: {{$promocion->precioOferta}}</li>
                                        <li> Ahorro: {{$promocion->ahorro}}</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary pull-right">Ver Más</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-2">
                            "hi"
                </div>
                </div>
                <?php echo $cupones->render(); ?>
            </div>
            <div class="row seccionROW" style="background-image: url('imgs/promociones.jpg'); "></div>

        @show
         
        <div class="container">
            @yield('content')
        </div>
 
        @section('footer')
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
        @show
        
    </body>
</html>


