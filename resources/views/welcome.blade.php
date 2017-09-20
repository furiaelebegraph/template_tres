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
                    <div>
                        <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/id-card-3.png" alt="">
                    </div>
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
                <div class="col-11 col-sm-4 col-md-3">
                    <label for="exampleSelect2">Categoria</label>
                    <select class="form-control" id="selectCatego">

                        <option disabled selected value> Selecciona una categoria </option>
                        @foreach($categorias as $categoria)
                        <option value='{{$categoria->id}}'>{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-11 col-sm-4 col-md-3">
                    <label for="exampleSelect2">Sub Categoria</label>
                    <select disabled class="form-control" id="subcate">
                      <option>Selecciona una subcategoria</option>
                  </select>
                </div>
                <div class="col-11 col-sm-4 col-md-3">
                    <label for="exampleSelect2">Producto</label>
                    <select disabled class="form-control" id="seleProdu">
                        <option disabled selected value> Selecciona un producto </option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center margen_50">
                <div class="col-12 ">
                    <div class="row cambio">
                        @foreach($categorias as $categoria)
                        <div class="col-11 col-sm-6 col-md-3 seleccion">
                            <div class='al_100'>
                                <img class="al_100" src="{{asset($categoria->imagen)}}" data-idcate="{{$categoria->id}}" class="d-block img-fluid">
                            </div>
                            <div class="">
                                <h3>{{$categoria->nombre}}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            <!-- carousel  -->   
            </div>
        </div>

        <div class="contenedor_amarillo">
            <div class="padding_50">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-8 alineado_cent">
                        <h3 class='titulo_3'>
                            Lorem ipsum dolor sit amet.
                        </h3>
                        <div class="linea_gris">
                            
                        </div>
                        <div class="texto">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </div>
                    </div>
                    <div class="col-11 padding_50">
                        <div class="row justify-content-center">
                            <div class="col-7 col-sm-5 col-md-3 padding_5">
                                <img class='al_100' src="{{asset('img/empresa1.png')}}" alt="">
                            </div>
                            <div class="col-7 col-sm-5 col-md-3 padding_5">
                                <img class='al_100' src="{{asset('img/empresa2.png')}}" alt="">
                            </div>
                            <div class="col-7 col-sm-5 col-md-3 padding_5">
                                <img class='al_100' src="{{asset('img/empresa3.png')}}" alt="">
                            </div>
                            <div class="col-7 col-sm-5 col-md-3 padding_5">
                                <img class='al_100' src="{{asset('img/empresa4.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="galeri_3">
            <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/img_galeria_01.jpg" alt="">
            <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/img_galeria_02.jpg" alt="">
            <img src="http://elebeweb.com/2016/emprendedor/layout-tres/images/img_galeria_03.jpg" alt="">
        </div>

        <div class='container fondo_cont_1 bloques'>
            <div class="row justify-content-center">
                <div class="col-10 col-sm-6">
                    <h3 class='titulo_especialidad'>
                        Lorem ipsum dolor sit amet
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                    <p>
                        <span>t.</span>    (999) 123 45 67 / 987 65 43 <br>
                        <span>d.</span>    Av. Cielo Lindo No.123, Col. Cielo Alto <br>
                        <span>e.</span>    hola@tuempresa.com <br>
                    </p>
                </div>
                <div class="col-10 col-sm-6">
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
                        <div class="col-12 col-centered">
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
                </div>
            </div>
        </div>

        <div id='map'>
            
        </div>

        <div class='footer alineado_cent'>
            <p>All rights reserved © 2016 eLeBegraph.com</p>
        </div>

        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGV5GxIotfGKptiCdhNCWqVSpI2E9m9dk&callback=initMap">
            </script>
        <script src='{{asset('js/jquery.slides.min.js')}}'></script>
        <script src='{{asset('js/main.js')}}'></script>
    </body>
</html>
