@extends('user.layout.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="card">
          <div class="card-body">
            <div x-data="{ currentTab: 1 }">
              <div class="row">
                <div class="col-lg-3 border-end">
                  <ul class="list-unstyled">
                    <li class="pb-3 px-2" @click="currentTab = 1">
                      <a
                        href="#"
                        class="text-decoration-none fw-bold text-success"
                        >Profile</a
                      >
                    </li>
                    <li class="pb-3 px-2" @click="currentTab = 2">
                      <a
                        href="#"
                        class="text-decoration-none fw-bold text-success"
                        >Password</a
                      >
                    </li>
                    <li class="pb-3 px-2" @click="currentTab = 3">
                      <a
                        href="#"
                        class="text-decoration-none fw-bold text-success"
                        >Account Balance</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="col-lg">
                  <div x-show="currentTab === 1">
                    <!-- Profile -->
                    <div class="row align-items-center border-bottom pb-2">
                      <div class="col-lg">
                        <h1 class="px-3 fw-bold">Account</h1>
                      </div>
                      <div class="col-lg-3 text-end d-flex gap-3">
                        <a href="" class="btn btn-outline-secondary">Edit</a>
                        @auth
                        <a class="btn btn-danger mx-3" href="{{ route('auth.logout') }}">Logout</a>
                        @endauth
                      </div>
                    </div>
                    <div class="row p-3 align-items-center">
                      <div class="col-lg-3">
                        <img
                          src="/img/profile.jpg"
                          alt=""
                          class="img-fluid"
                          style="border-radius: 200px"
                          width="130"
                        />
                      </div>
                      <div class="col-lg">
                        <div class="mb-3">
                          <h4 class="fw-bold">
                            <i class="fa-solid fa-user"></i>
                            {{ Auth::user()->name }}
                          </h4>
                        </div>
                        <div class="mb-3">
                          <h4 class="fw-bold">
                            <i class="fa-solid fa-envelope"></i>
                            {{Auth::user()->email}}
                          </h4>
                        </div>
                        <div class="mb-3">
                          <h4 class="fw-bold">
                            <i class="fa-solid fa-phone"></i>
                            {{Auth::user()->phone_number ?? '+62 '}}
                          </h4>
                        </div>
                        <div class="mb-3">
                          <h4 class="fw-bold">
                            <i class="fa-solid fa-location-dot"></i>
                            15540
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div x-show="currentTab === 2">
                    <!-- Profile -->
                    <div class="row align-items-center border-bottom pb-2">
                      <div class="col-lg">
                        <h1 class="px-3 fw-bold">Change Password</h1>
                      </div>
                      <div class="col-lg-2 text-end">
                        <a href="" class="btn btn-outline-secondary">Edit</a>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-lg">
                        <div class="container mt-3">
                          <label for="" class="fw-bold"
                            >Password: *****</label
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div x-show="currentTab === 3">
                    <!-- Profile -->
                    <div class="row align-items-center border-bottom pb-2">
                      <div class="col-lg">
                        <h1 class="px-3 fw-bold">Delete Account</h1>
                      </div>
                      <div class="col-lg-2 text-end">
                        <a href="" class="btn btn-outline-secondary">Edit</a>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-lg">
                        <div class="container mt-3">
                          <p>
                            Once you've deleted your account, you will no
                            longer be able to log in to the TaskRabbit site or
                            apps. This action cannot be undone.
                          </p>
                          <a href="" class="btn btn-outline-danger fw-bold">
                            Delete Account
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection