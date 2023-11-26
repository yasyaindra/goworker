@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{$user->profile_pic}}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg">
                                <h5 class="card-title fw-bold">{{$user->name}} <badge class="badge {{ $user->role == 'user' ? 'bg-warning' : 'bg-success' }}">{{$user->role == 'user' ? 'User' : 'Tasker' }}</badge></h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user->username}} 
                                </h6>
                                <h6 class="text-secondary">🌆 {{$user->city}}</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="https://wa.me/{{$user->phone_number}}" class="card-link btn btn-success fw-bold">WhatsApp</a>
                                <a href="mailto:{{$user->email}}" class="card-link btn btn-primary fw-bold">Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection