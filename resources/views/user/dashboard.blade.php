@extends('user.layout.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center flex-column">
      <div class="col-lg-6 text-center">
        <h1 class="fw-bold">Book Your Next Task</h1>
        <div class="input-group mb-3 mt-4">
          <input
            type="text"
            class="form-control"
            placeholder="I need help with...."
            aria-label="I need help with...."
            aria-describedby="basic-addon2"
          />
          <button class="btn btn-success input-group-text" id="basic-addon2">
            Search
          </button>
        </div>
      </div>
      <div class="col-lg-6">
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          Furniture Assembly
        </button>
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          General Mounting
        </button>
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          Help Moving
        </button>
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          Cleaning
        </button>
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          IKEA Assembly
        </button>
        <button
          type="button"
          class="btn btn-outline-success fw-bold btn-md mb-2"
        >
          Electric help
        </button>
      </div>
    </div>
  </div>
@endsection