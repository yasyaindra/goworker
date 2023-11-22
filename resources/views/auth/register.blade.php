@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div
      class="row justify-content-center align-items-center"
      style="height: 50vh"
    >
      <div class="col-lg-6">
        <div class="card">
          @if($errors->any())
              {{ implode('', $errors->all('<div>:message</div>')) }}
          @endif
          <div class="card-body">
            <form method="POST" action="{{route('auth.register')}}">
              @csrf
              <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" />
                @error('name')
                <div class="text-danger">
                  {{$message}}
                </div>            
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  aria-describedby="email"
                  name="email"
                />
                @error('email')
                <div class="text-danger">
                  {{$message}}
                </div>            
                @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1" 
                  name="password"
                />
                @error('password')
                <div class="text-danger">
                  {{$message}}
                </div>            
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1" name="password_confirm"
                />
                @error('password_confirm')
                <div class="text-danger">
                  {{$message}}
                </div>            
                @enderror
              </div>
              <div class="mb-3">
                <a href="{{route('login')}}">Masuk sekarang</a>
              </div>
              <button type="submit" class="btn btn-success">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection