@extends('layouts.app')


@section('content')
<style>
    body{
        background-color: rgb(126, 126, 126);
    }
    
    .card{
        background-color: rgb(207, 207, 207);;
    }
    
</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                    <h1>Productos</h1>
                </div>
            </div>
            <div class="container">
                @if (count(Cart::getContent()))
                <a class="btn btn-info" href="{{route('cart.checkout')}}">VER CARRITO <span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                @endif
               
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


 
    <div class="row">
	    @foreach ($products as $product)
        
        <div class="col-sm-3 mb-3" style="width: 18rem;">
            <div class="card">
            <img class="card-img-top" src="{{ asset('storage/products/' . $product->imagen) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $product->nombre }}</h5>
              <p class="card-text">{{ $product->descripcion }}</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">${{ $product->precio }}</li>
                <li class="list-group-item"><b>Categoria:</b> {{ $product->categoria }}</li>
              </ul>
              <div class="row">
                <a href="{{ route('productos.show',$product->id) }}" class="btn btn-primary">Show</a>
                <form action="{{route('cart.add')}}" method="post">
                  @csrf
                  <input type="hidden" name="producto_id" value="{{$product->_id}}">
                  <input type="submit" name="btn" class="btn btn-success" value="Agregar al carrito">
              </div>
              
            </form>
            </div>
          </div>
        </div>
	    @endforeach
        <div class="container">
          <div class="row justify-content-center">
          <nav >
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Previous</a></li>
              <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}">Next</a></li>
            </ul>
          </nav>
        </div>
        
    </div>
        </div>
      
        </div>
    </div>
  
  <div class="container">
      
    
  </div>

    


@endsection