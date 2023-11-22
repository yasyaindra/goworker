@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div
      class="row justify-content-center align-items-center"
      style="height: 50vh"
    >
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="{{route('auth.login')}}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input
                  type="email" name="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password" name="password"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3">
                <a href="{{route('register')}}">Daftar sekarang</a>
              </div>
              <button type="submit" class="btn btn-success">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection