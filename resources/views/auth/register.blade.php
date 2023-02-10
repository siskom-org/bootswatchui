@extends('layouts.auth')

@section('content')
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" name="name" class="form-control form-control-lg"
              value="{{ old('name') }}" />
            <label class="form-label" for="name">Full name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg"
              value="{{ old('email') }}" />
            <label class="form-label" for="email">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg" />
            <label class="form-label" for="password">Password</label>
          </div>

          <!-- Password confirm input -->
          <div class="form-outline mb-3">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" />
            <label class="form-label" for="password_confirmation">Confirm password</label>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                class="link-danger">Log in</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
