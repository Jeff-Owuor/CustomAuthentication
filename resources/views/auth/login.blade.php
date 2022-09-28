@extends('auth.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto" style="margin-top:40px">
            <h3>Login</h3>
            <hr>
            <form action="{{route('sign-in')}}" method="post">
                @csrf
                @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" value="{{old('email')}}">
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" value="">
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
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