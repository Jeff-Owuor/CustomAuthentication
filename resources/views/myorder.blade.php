@extends('base')
@section("content")
<h4 class="text-center">My orders</h4>
<div class="container">
     <div class="row">
            @foreach($orders as $item)
             <div class="col-md-5">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-md-5">
                      <h2>{{$item->productName}}</h2>
                      <h4>Delivery status: {{$item->status}}</h4>
                      <h4>Address: {{$item->address}}</h4>
                      <h4>Payment status: {{$item->payment_status}}</h4>
                      <h4>Payment method: {{$item->payment_method}}</h4>
                   
             </div>
            @endforeach

     </div>
</div>
@endsection 