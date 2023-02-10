@extends('layouts.auth')

@section('content')
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        @if (session('status') == 'verification-link-sent')
          <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new email verification link has been emailed to you!') }}
          </div>
        @else
          <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Please verify your email address.') }}
          </div>
          <form action="/email/verification-notification" method="post">
            @csrf
            <button type="submit" class="btn btn-dark">{{ __('Resend verification') }}</button>
          </form>
        @endif

        <p class="small fw-bold mt-2 pt-1 mb-0">
          Back to <a href="{{ route('home') }}" class="link-danger">home</a>
        </p>
      </div>
    </div>
  </div>
@endsection
