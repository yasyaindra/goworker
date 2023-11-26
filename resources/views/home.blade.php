@extends('layout.app')

@section('content')
<div class="container">
  <div class="card mt-5">
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto">
          <h2 class="fw-bold text-center">
            <span style="color: #157347"> Hire someone </span>
            to do job that ChatGPT can't
          </h2>
          <h5 class="text-center">Choose your task</h5>
          <div class="input-group mb-3 mt-4">
            <input
              type="text"
              class="form-control"
              placeholder="I need help with...."
              aria-label="I need help with...."
              aria-describedby="basic-addon2"
            />
            <button
              class="btn btn-success input-group-text"
              id="basic-addon2"
            >
              Search
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Popular Projects -->
<div class="container mt-5">
  <h3 class="fw-bold">Popular projects in your area</h3>
  <div class="row mt-4">
    @foreach ($services as $service)
    <div class="col-lg-3 col-6 mb-5">
      <a
        href=""
        class="link-underline-opacity-0 ink-offset-2 link-underline"
      >
        <div class="card">
          <img src="{{asset('img/furniture.jpeg')}}" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h6 class="card-title fw-bold">{{ $service->name }}</h6>
            <p class="card-text">Avg. Project: $52 - $122</p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
<!-- End Popular -->
<!-- Benefits -->
<div class="container mt-5">
  <div class="row h-100 align-items-center">
    <div class="col-lg">
      <h3 class="fw-bold">Everyday life made easier</h3>
      <p>
        When life gets busy, you don’t have to tackle it alone. Get time
        back for what you love without breaking the bank.
      </p>
      <ul class="list-unstyled">
        <li>
          <i class="fa-solid fa-check"></i>
          Choose your Tasker by reviews, skills, and price
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          Schedule when it works for you — as early as today
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          Chat, pay, tip, and review all through one platform
        </li>
      </ul>
    </div>
    <div class="col-lg">
      <img src="/img/asset.jpg" alt="" class="img-fluid" />
    </div>
  </div>
</div>
<!-- Taskers -->
<div class="container mt-5">
  <h3 class="fw-bold">Feature taskers</h3>
  <div class="row mt-4 justify-content-lg-between justify-content-center">
    @foreach ($servants as $servant)
    <div class="col-lg-4 mb-3">
      <div class="card shadow border-0">
        <div class="card-body">
          <div class="row flex-row">
            <div class="col-lg-3 col-3">
              <img src="img/profile.jpg" class="img-fluid rounded" alt="" />
            </div>
            <div class="col-lg col-6 text-start">
              <a href="{{route('profile', $servant->username)}}">
                <h4 class="m-0 fw-bold">{{$servant->name}}</h4>
              </a>
              <p class="m-0">100% positive reviews</p>
              <p class="m-0">174 Completes</p>
            </div>
          </div>
          <hr />
          <div class="row mb-2">
            <div class="col-lg">
              <h5>Featured Skills</h5>
            </div>
          </div>
          <div class="row mb-2">
            <div
              class="col-lg d-flex align-items-baseline justify-content-between"
            >
              <h5 class="fw-bold">{{$servant->service->name ?? 'Job'}}</h5>
              <h5 class="fw-bold">$52.94/hr</h5>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg">
              <h5 class="fw-bold">I'm the right person for the job:</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Accusamus, suscipit. Lorem ipsum dolor sit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- End Taskers -->
<!-- Benefit 2 -->
<div class="container mt-5">
  <div class="row h-100 align-items-center">
    <div class="col-lg">
      <img src="/img/asset_2.jpg" alt="" class="img-fluid" />
    </div>
    <div class="col-lg">
      <h3 class="fw-bold">A go-to team at your fingertips</h3>
      <p>
        Build your team of local, background-checked Taskers to help with —
        and for — life. Whatever you need, they’ve got it covered.
      </p>
      <ul class="list-unstyled">
        <li>
          <i class="fa-solid fa-check"></i>
          Compare Tasker reviews, ratings, and prices
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          Choose and connect with the best person for the job
        </li>
        <li>
          <i class="fa-solid fa-check"></i>
          Save your favorites to book again and again
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- End Benefit 2 -->
<!-- Search -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <h3 class="fw-bold">Cities where we work</h3>
    <div class="col-lg-6">
      <div class="input-group mb-3 mt-4">
        <input
          type="text"
          class="form-control"
          placeholder="Search by zip"
          aria-label="Search by zip"
          aria-describedby="basic-addon2"
        />
        <button class="btn btn-success input-group-text" id="basic-addon2">
          Check availability
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Search -->
<!-- Testimonials -->
<div class="container mt-5">
  <div class="row">
    <h3 class="fw-bold">Don't just take our word for it</h3>
    <p class="fw-bold text-secondary">
      See how Taskers are saving the day for people like you.
    </p>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Help Moving</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Mounting</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Help Moving</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Mounting</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Help Moving</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Mounting</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Help Moving</span>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="row mb-3">
        <div class="col-lg-2">
          <img
            src="img/profile.jpg"
            class="img-fluid"
            width="90"
            alt=""
            style="border-radius: 200px"
          />
        </div>
        <div class="col-lg">
          <h6 class="fw-bold">Cameron S. ⭐⭐⭐⭐</h6>
          <p class="mb-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            tenetur molestiae facilis ullam harum doloremque magni officia
            nisi quidem ad. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Ipsam, temporibus.
          </p>
          <span class="text-success fw-bold m-0">Mounting</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials -->
<!-- Blog -->
<div class="container mt-5">
  <h3 class="fw-bold">Get inspired</h3>
  <p class="fw-bold text-secondary">
    Explore tips, home tours, and Tasker stories.
  </p>
  <p></p>
  <div class="row">
    <div class="col-lg-4">
      <div class="card">
        <img src="img/blog.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title fw-bold mb-4">
            Tour a French Chateau Inspired Post-Breakup Sanctuary
          </h5>
          <a href="#" class="btn btn-success fw-bold">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="img/blog.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title fw-bold mb-4">
            Tour a French Chateau Inspired Post-Breakup Sanctuary
          </h5>
          <a href="#" class="btn btn-success fw-bold">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="img/blog.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title fw-bold mb-4">
            Tour a French Chateau Inspired Post-Breakup Sanctuary
          </h5>
          <a href="#" class="btn btn-success fw-bold">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Blog -->
<!-- Ready To Start -->
@guest
<div class="container mt-5">
  <div class="row justify-content-center">
    <h2 class="fw-bold text-center">Ready to get started?</h2>
    <div class="col-lg-5 text-center">
      <img
        src="/img/client-sign-up-img@2x.png"
        class="img-fluid mt-4"
        width="320"
        alt=""
      />
      <h4 class="fw-bold mt-4">
        Hear that? The sweet sigh of relief. Start getting more done.
      </h4>
      <button class="btn btn-success fw-bold mt-4">Sign Up</button>
    </div>
    <div class="col-lg-5 text-center">
      <img
        src="/img/become-a-tasker-img@2x.png"
        class="img-fluid mt-4"
        width="320"
        alt=""
      />
      <h4 class="fw-bold mt-4">
        Grow your own business while saving the day for busy neighbors.
      </h4>
      <button class="btn btn-success fw-bold mt-4">Become a tasker</button>
    </div>
  </div>
</div>
@endguest
<!-- End Ready To Starts -->
@endsection

