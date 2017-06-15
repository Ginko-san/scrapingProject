

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
                 <div class="col-md-8">
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
                                <a href="{{route('cupones.index')}}/{{$cupon->id}}" data-toggle="popover" class="btn btn-primary pull-right" data-content="yield(pop)">Ver Más</a>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>

                <h1>Top 5 cupones</h1><br>
                <aside class="col-md-4" id="slideSection">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="panel-heading">{{$articulos[0]->nombre}}</div>
                            <img src="{{$articulos[0]->imagen}}"  "max-width:600px">
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$articulos[1]->nombre}}</div>
                              <img src="{{$articulos[1]->imagen}}" >
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$articulos[2]->nombre}}</div>
                              <img src="{{$articulos[2]->imagen}}" >
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$articulos[3]->nombre}}</div>
                              <img src="{{$articulos[3]->imagen}}" >
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$articulos[4]->nombre}}</div>
                              <img src="{{$articulos[4]->imagen}}" >
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
                </aside>
                </div>
                <?php echo $cupones->render(); ?>
            </div>
            <div class="row seccionROW" style="background-image: url('imgs/promociones.jpg'); "></div>

            <div class="cuadro">
                <h1>Promociones</h1><br/>
                <div class="container" >
                    <div class="col-md-8">
                    @foreach ($promociones as $promocion)
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">{{$promocion->nombre}}</div>
                            <div class="itemCustom" style="background-image: url('{{$promocion->imagenusers}}'); ">
                                <div style="background-color: rgba(0, 0, 0, 0.3); color: white;">
                                    <ul>
                                        <li> Precio de Oferta: {{$promocion->precioOferta}}</li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Ver</button>s
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{$promocion->nombre}}</h4>

                      </div>
                      <div class="modal-body">
                        <div class="itemCustom" style="background-image: url('{{$promocion->imagenusers}}'); "></div>
                          <ul>
                              <li> Precio Real: {{$promocion->precioReal}} </li>
                              <li> Precio de Oferta: {{$promocion->precioOferta}}</li>
                              <li> Ahorro: {{$promocion->ahorro}}</li>
                          </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              <h2>Top 5 promociones</h2><br>
                <aside class="col-md-4" id="slideSection">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                          <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <div class="panel-heading">{{$promotions[0]->nombre}}</div>
                            <img src="{{$promotions[0]->imagenusers}}"  "max-width:600px">
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$promotions[1]->nombre}}</div>
                              <img src="{{$promotions[1]->imagenusers}}" >
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$promotions[2]->nombre}}</div>
                              <img src="{{$promotions[2]->imagenusers}}">
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$promotions[3]->nombre}}</div>
                              <img src="{{$promotions[3]->imagenusers}}" >
                          </div>
                          <div class="item">
                            <div class="panel-heading">{{$promotions[4]->nombre}}</div>
                              <img src="{{$promotions[4]->imagenusers}}">
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
                </aside>
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
