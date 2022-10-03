@extends('base')
@section("content")
<h4 class="text-center">Result for Products</h4>
<a class="btn btn-success ms-5 mt-2" href="/ordernow">Order Now</a> <br> <br>
<div class="container">
     <div class="row">
            
            <br> <br>
            @foreach($products as $item)
             <div class="col-md-6">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-md-4">
                    <div class="">
                      <h2>{{$item->productName}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Delete</a>
             </div>
            @endforeach
          
     </div>
</div>
<a class="btn btn-success ms-5 mt-2" href="/ordernow">Order Now</a> <br> <br>

@endsection 