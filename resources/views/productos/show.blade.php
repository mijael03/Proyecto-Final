@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('productos.index')}}">Productos</a></li>

                    <li class="nav-item dropdown">


                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/products/' . $producto->imagen) }}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">{{ $producto->categoria }}</div>
                    <h1 class="display-5 fw-bolder">{{ $producto->nombre }}</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through"><b>S/. </b>{{ $producto->precio }}</span>

                    </div>
                    <p class="lead">{{ $producto->descripcion }}</p>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark flex-shrink-0">Comprar</button>
                        <button class="btn" type="button">

                            @if (count(Cart::getContent()))
                            <a href="{{route('cart.checkout')}}">VER CARRITO <span >{{count(Cart::getContent())}}</span></a>
                            @endif
                        </button>
                        <form action="{{route('cart.add')}}" method="post">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{$producto->_id}}">
                            <input type="submit" name="btn" class="btn btn-outline-dark flex-shrink-0 " value="Agregar al carrito">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js%22%3E</script>
    <!-- Core theme JS-->

@endsection