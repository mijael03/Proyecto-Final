@extends('layouts.app')


@section('content')
<style>
    body{
        background-color: rgb(201, 200, 200);
    }
    
    .card{
        background-color: rgb(136, 136, 136);;
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
      <section class="py-5 bg-light">
          <div class="container px-4 px-lg-5 mt-5">
              
              <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  
    @foreach ($products as $product)
      <div class="col mb-5">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="{{ asset('storage/products/' . $product->imagen) }}" alt="Producto" />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">{{ $product->nombre }}</h5>
                                  <!-- Product price-->
                                  ${{ $product->precio }}
                                  
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="row"></div>
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('productos.show',$product->id) }}">Comprar</a></div>
        
                          </div>
                      </div>
                  
      
                  </div>
    @endforeach
  
                  
</div>
</div>
</section>
  </div>
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