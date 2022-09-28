@extends('base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="" srcset="" style="height:300px;">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['productName']}}</h2>
            <h3>Price:{{$product['price']}} </h3>
            <p>{{$product['description']}}</p>
            <h4>Category: {{$product['category']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-info">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy now</button>
            <br>
        </div>
    </div>

</div>

@endsection

