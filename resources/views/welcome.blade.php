<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="col-12 col-centered">
                @if (Session::has('mensaje'))
                   <div id='mensaje_email' class="alert alert-success">{{ Session::get('mensaje') }}</div>
                @endif
            </div>
        <div class='fondo_nav'>
            <div class='container'>
                <nav class="navbar navbar-toggleable-sm navbar-fixed-top">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Register</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link" href="#">Website Name</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Rates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Help</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
            <div>
                <div id="slides">
                  <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/galeria_01.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
                  <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/galeria_02.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
                  <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/galeria_03.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
                </div>
                <div class="container_slides_texto">
                    <div id="slide_texto">
                        <div class="texto">
                            <p>
                                Somos una empresa <br>
                                <span>DE GRAN NIVEL </span>
                            </p>
                        </div>
                        <div class="texto">
                            <p>
                                Somos una empresa<br>
                                <span>LÍDER EN EL MERCADO</span>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
            <div class='container'>
                <div class="row justify-content-center ">
                    <div class="col-12 col-sm-8">
                        <p class='p_rectangulo_flotando'>
                            Lorem ipsum dolor sit amet
                        </p>
                        <div id="linea_negra"></div>
                        <div class='div_elebne'>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
        <div class='container'>
    
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-6 col-md-4">
                    <h3>
                        Cum sociis natoque penatibus et magnis dis parturient montes.
                    </h3>
                    <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                         
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 alineado_cent">
                    <img class='imagen_iphone' src="http://elebeweb.com/2016/emprendedor/layout-tres/images/iphone_mock.png" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <h3>
                        Cum sociis natoque penatibus et magnis dis.
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
            </div>
        </div>


            <div class="container" id='galeria'>
                    <div class="row justify-content-center margen_50">
                        <div class="col-8 col-sm-4 col-md-2">
                            <label for="exampleSelect2">Categoria</label>
                            <select class="form-control" id="selectCatego">

                                <option disabled selected value> Selecciona una categoria </option>
                            @foreach($categorias as $categoria)
                                <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-8 col-sm-4 col-md-2">
                            <label for="exampleSelect2">Sub Categoria</label>
                            <select disabled class="form-control" id="subcate">
                              <option>Selecciona una subcategoria</option>
                            </select>
                        </div>
                        <div class="col-8 col-sm-4 col-md-2">
                            <label for="exampleSelect2">Producto</label>
                            <select disabled class="form-control" id="seleProdu">
                                <option disabled selected value> Selecciona un producto </option>
                            </select>
                        </div>
                    </div>
                <div class="row margen_50">
                <div class="carrusel">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" id="slider">
                                    <div id="myCarousel" class="carousel slide">
                                        <!-- main slider carousel items -->
                                        <div class="carousel-inner">
                                            <div class="aparece">

                                                @foreach($galerias->ima as $keygale=>$galeria)
                                                    <div class="item carousel-item" data-slide-number="{{$keygale}}">
                                                        <img src="{{$galeria->imagen}}" class="d-block img-fluid">
                                                    </div>
                                                @endforeach
                                                
                                            </div>

                                            <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                            <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                                        </div>
                                        <!-- main slider carousel nav controls -->


                                        <ul id='thumbs_galeria' class="carousel-indicators list-inline">

                                            @foreach($galerias->ima as $keygale=>$galeria)
                                                <li class="list-inline-item">
                                                    <a id="carousel-selector-{{$keygale}}" data-slide-to="{{$keygale}}" data-target="#myCarousel">
                                                        <img src="{{$galeria->imagen}}" class="img-fluid">
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- carousel  -->   
                </div>

            </div>


        <div class='container fondo_cont_1 bloques'>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6">
                    <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/movie_versus_comic_by_lerms-d3519nh-u1751-fr.jpg" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <h1>
                        Let's Take a Closer Look
                    </h1>
                    <p>
                        Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitonec id eli.
                    </p>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    </p>
                </div>
            </div>
        </div>
        <div class="bloques bloque_3">
            <div class="container">
                    <div class="row justify-content-center alineado_cent">
                        <div class="col-12 alineado_cent">
                            <h3 class='titulos'>Features lorem ipsum dolor</h3>
                        </div>
                        <div class="col-10 alineado_cent">
                            Nullam id dolor id nibh ultricies vehicula ut id elit.
                            Curabitur blandit tempus porttitonec id eli
                        </div>
                    </div>
                    <div class="row justify-content-center margin_arriba_50">
                        <div class="col-12 col-sm-3 alineado_cent">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-dos/images/radar.png" alt="">
                            <h3>
                                LOREM IPSUM DOLOR AMET
                            </h3>
                            <p>
                                Lorem ipsum dolor sit, adipiscing elit. Praesent neque elit, hendrerit eleifend mi et, luctus nisl. Nunc euismod id augue sed.
                            </p>
                        </div>
                        <div class="col-12 col-sm-3 alineado_cent">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-dos/images/flag-4.png" alt="">
                            <h3>
                                LOREM IPSUM DOLOR AMET
                            </h3>
                            <p>
                                Lorem ipsum dolor sit, adipiscing elit. Praesent neque elit, hendrerit eleifend mi et, luctus nisl. Nunc euismod id augue sed.
                            </p>
                            
                        </div>
                        <div class="col-12 col-sm-3 alineado_cent">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-dos/images/calendar-1.png" alt="">
                            <h3>
                                LOREM IPSUM DOLOR AMET
                            </h3>
                            <p>
                                Lorem ipsum dolor sit, adipiscing elit. Praesent neque elit, hendrerit eleifend mi et, luctus nisl. Nunc euismod id augue sed.
                            </p>
                            
                        </div>
                        <div class="col-12 col-sm-3 alineado_cent">
                            <img src="http://elebeweb.com/2016/emprendedor/layout-dos/images/agenda.png" alt="">
                            <h3>
                                LOREM IPSUM DOLOR AMET
                            </h3>
                            <p>
                                Lorem ipsum dolor sit, adipiscing elit. Praesent neque elit, hendrerit eleifend mi et, luctus nisl. Nunc euismod id augue sed.
                            </p>
                            
                        </div>
                    </div>    
            </div>   
        </div>

        <div class="container bloques">
            <div class="row justify-content-center">
                <div class="col-12 alineado_cent">
                    <h3 class='titulos'>
                        Gallery lorem ipsum dolor
                    </h3>
                    <p>
                        Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitonec id eli
                    </p>
                </div>
                <div class="col-12 margin_arriba_50">
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <img class='al_100' src="{{asset('img/galeria_01.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class='al_100' src="{{asset('img/galeria_02.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class='al_100' src="{{asset('img/galeria_03.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bloques">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class='titulos alineado_cent'>
                        Featured in lorem ipsum dolor sit amet
                    </h3>
                </div>
                <div class="col-12 margin_arriba_50">
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/svg-pegado-3209x99.svg" alt="">
                        </div>
                        <div class="col-2">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/svg-pegado-2974x68.svg" alt="">
                        </div>
                        <div class="col-2">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/svg-pegado-285.svg" alt="">
                        </div>
                        <div class="col-2">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/svg-pegado-2769x40.svg" alt="">
                        </div>
                        <div class="col-2">
                            <img class='al_100' src="http://elebeweb.com/2016/emprendedor/layout-dos/images/svg-pegado-171.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bloques">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 alineado_cent">
                        <h3 class='titulos'>
                            Contact lorem ipsum dolor
                        </h3>
                        <p>
                            Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitonec id eli
                        </p>
                        
                    </div>
                </div>
            </div>

            <div class='container margen_50' id='contacto'>
                <div class="row row-centered">
                    @if (count($errors) > 0)
                        <div class="col-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br> 
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        </div>
                    @endif
                    <div class="col-10 col-centered">
                        <form method='POST' action='{{url('enviar_correo')}}'>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            
                          <div class="form-group">
                            <input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="Agregar nombre">
                            @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
                          </div>
                          <div class="form-group">
                            <input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agregar email">
                            @if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" name='contenido' id="exampleTextarea" rows="3" placeholder="Escriba su mensaje"></textarea>
                            @if ($errors->has('contenido')) <p class="help-block">{{ $errors->first('contenido') }}</p> @endif
                          </div>
                          <button type="submit" class="btn_submit">Submit</button>
                        </form>
                        
                    </div>
                </div>
                <!-- emails  -->
            </div>  
        </div>

        <div class='footer alineado_cent'>
            <p>All rights reserved © 2016 eLeBegraph.com</p>
        </div>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src='{{asset('js/jquery.slides.min.js')}}'></script>
        <script src='{{asset('js/main.js')}}'></script>
    </body>
</html>
