@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-7">
                <img src="img/join.jpg" class="img-fluid" width="100%" alt="">
            </div>
            <div class="col-lg">
                <h1 class="fw-bold mb-3">Earn money your way</h1>
                <h5 class="mb-3">See how much you can make tasking on TaskRabbit</h5>
                <form method="POST" action="{{ route('become-tasker.update', Auth::user()->id) }}">
                  @csrf
                    <div class="mb-3">
                      <h4 for="area" class="form-label fw-bold">Select Your Area</h4>
                      <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="province">
                        <option selected>Choose City</option>
                        @foreach ($areas as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                      </select>                      
                    </div>
                    <div class="mb-3">
                      <h4 for="area" class="form-label fw-bold">Choose Category</h4>
                      <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="service_id">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        @foreach ($services as $service)
                        <option value="{{$service->id}}">{{$service->name}}</option>
                        @endforeach
                      </select>                      
                    </div>
                        <button type="submit" class="btn btn-success fw-bold">Get Started</button>
                  </form>
            </div>
        </div>
    </div>
@endsection