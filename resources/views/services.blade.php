@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row align-items-center">
            <div class="pb-5 pt-5">
                <h1 class="fw-bold text-center">Your To Do List in Us</h1>
                <h4 class="text-center fw-bold">Hire trusted Tasker presto</h4>
            </div>
            @if (count($services) > 0)
            @foreach ($services->chunk(4) as $key => $group)
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="{{asset('img/services.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-success">Features Task</h5>
                        <h6 class="text-secondary"> Let Taskers help tackle your to-do list. </h6>
                        <hr>
                        <p class="card-text">
                            <ul class="list-unstyled">
                                @foreach ($group as $service)
                                <li class="mb-2"><a href="#" class="text-decoration-none text-success">{{$service->name}}</a></li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection