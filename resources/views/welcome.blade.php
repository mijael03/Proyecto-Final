<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/welcome.css">
        <link href="https://fonts.googleapis.com/css?family=Anton|Montserrat&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <header class="header">
            <div class="bg-dark ">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
    
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class=" navg navbar-nav w-100 justify-content-center " >
                                <a class="nav-item nav-link active" href="{{route('productos.index')}}">Productos</a>
                                <a class="nav-item nav-link active" href="https://github.com/mijael03/Proyecto-Final">GitHub</a>

                              
                              
                             
                              
                            </div>
                        </div>
                      </nav>
                </div>
            </div>
    
            <div class="text-header d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2> TEC<span> SHOP </span> </h2>
                            <p> <b>Principiante con las compras online?...</b> </p>
                            <p><b>Compra con nosotros productos tecnologicos al mejor precio y con la confianza de una primera compra</b></p>
                            @if (Route::has('login'))
                   <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                       @auth
                           <a href="{{ url('/productos') }}" class="btn btn-yo">Tienda</a>
                       @else
                           <a href="{{ route('login') }}" class="btn btn-yo">Log in</a>
    
                           @if (Route::has('register'))
                               <a href="{{ route('register') }}" class="btn btn-yo">Register</a>
                           @endif
                       @endauth
                   </div>
               @endif
                        </div>
    
                    </div>
                </div>
            </div>
    
        </header>
    
            <section>
    
            </section>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

