@extends('base')
@section("content")

<div class="container">
<table class="table">
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>Kes {{$total}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>VAT</td>
      <td>0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td>Kes 300</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Total</td>
      <td>Kes {{$total + 300}}</td>
    </tr>
  </tbody>
</table>
  <div>
        <form>
        <div class="form-group">
            <textarea class="form-control" placeholder="Enter your address"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Payment Method</label><br>
            <span>Mpesa</span><input type="radio" name="payment" id=""><br>
            <span>Cash On Delivery</span><input type="radio" name="payment" id=""><br>
        </div>
        <button type="submit" class="btn btn-primary">Place Order</button>
        </form>


   </div>
</div>

@endsection 