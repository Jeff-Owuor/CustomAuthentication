@extends('auth.base')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:24px">
            <h3>Sign up</h3>
            <hr>
            <form action="{{route('sign-up')}}" method="post">
                @csrf
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Enter your username" name="name" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
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
                    <button class="btn btn-primary btn-block mt-2" type="submit">Sign up</button>
                </div>
                <p class="mt-1">Already have an account? <a href="login">Login here</a></p>
            </form>
        </div>
    </div>
  </div>
@endsection