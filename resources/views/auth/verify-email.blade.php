@extends('auth.layout')

@section('content')
  @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
      A new email verification link has been emailed to you!
    </div>
  @else
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ __('Please verify your email address.') }}
    </div>
  @endif
@endsection
