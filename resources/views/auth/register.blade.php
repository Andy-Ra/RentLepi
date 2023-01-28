@extends('layouts.auth.auth-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-md-7 col-lg-5 my-auto mx-auto">
            <div class="trasparent-card card shadow rounded-3 mt-5 "">
                <div class=" card-title text-center mt-2 fs-2">{{ __('Register') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-floating mb-3">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="username" autofocus>
                        <label for="floatingInput">{{ __('Username') }}</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="name" autofocus>
                        <label for="floatingInput">{{ __('Full Name') }}</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        <label for="floatingInput">{{ __('Email Address') }}</label>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        <label for="floatingInput">{{ __('Password') }}</label>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="password_confirmation">
                        <label for="floatingInput">{{ __('Confirm Password') }}</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input id="phone-number" type="tel" class="form-control @error('phone-number') is-invalid @enderror" name="phone-number" required autocomplete="phone-number" placeholder="phone-number">
                        <label for="floatingInput">{{ __('Phone Number') }}</label>

                        @error('phone-number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div>
                            <button type="submit" class="btn btn-success" fw-bold">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection