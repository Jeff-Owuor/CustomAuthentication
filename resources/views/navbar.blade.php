<?php
    use App\Http\Controllers\ProductController;
    $total = ProductController::cartItem();
?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><i class="fa-brands fa-phoenix-squadron fa-2x"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex mx-auto" role="search"  type="get" action="{{ url('/search')}}">
        <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav  mb-2 mb-lg-0">
        @if(Session::has('loginId'))
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="logout">Logout</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/myorders">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/productList"><i class="fa fa-cart-plus fa-2x" aria-hidden="true" style="color:orange"></i>({{$total}})</a>
        </li>
        @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="register">Register</a>
          </li>
        @endif
        
      </ul>
      
    </div>
  </div>
</nav>