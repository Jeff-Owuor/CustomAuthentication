@extends('auth.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:24px">
            <h3>Login</h3>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block mt-2" type="submit">Login</button>
                </div>
                <p>Don't have an account <a href="register">Sign up</a></p>
            </form>
        </div>
    </div>
  </div>
@endsection