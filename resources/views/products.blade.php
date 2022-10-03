@extends('base')

@section('content')
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
            @foreach($products as $product)
                    <div class="carousel-item {{$product['id']==1?'active': ''}}">
                        <a href="detail/{{$product['id']}}">
                            <img src="{{$product->gallery}}" class="d-block w-50" alt="..." style="height: 400px">
                            <div class="carousel-caption d-none d-md-block">
                             <h5 style="color:black">{{$product['productName']}} <span>{{$product->price}}</span></h5>
                             <p style="color:black">{{$product['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color:#35443585;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color:#35443585;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  </div>

  <div class="mb-3 mt-2 d-flex" >
      <h3 class="text-center">Trending Products</h3>
      @foreach($products as $product)
      <div class="card" style="width: 22rem;margin-left:2px">
          <img src="{{$product->gallery}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$product->productName}}</h5>
            <p class="card-text">Kes {{$product->price}}</p>
          </div>
      </div>
      @endforeach
  </div>
  </div>
@endsection

