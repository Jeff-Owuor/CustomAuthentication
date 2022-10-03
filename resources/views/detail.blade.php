@extends('base')

@section('content')
<div class="container">
<a href="/"><i class="fa-solid fa-arrow-left fa-2x"></i></a>
<div class="card mb-3 mx-auto mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-6">
      <img src="{{$product->gallery}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
            <h5 class="card-title">{{$product->productName}}</h5>
            <h3 class="card-text">Kes {{$product->price}}</h3>
            <p>{{$product['description']}}</p>
            <h4>Category: {{$product['category']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-info">Add To Cart</button>
            </form>
      </div>
    </div>
  </div>
</div>

</div>

@endsection

