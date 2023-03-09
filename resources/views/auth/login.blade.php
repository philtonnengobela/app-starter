@extends('layouts.blank')

@section('content')

<div class="authincation section-padding">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="mini-logo text-center my-4">
                    <a href="index-2.html"> <!-- <img src="images/frontfootlogo_old.png" alt=""> --> <h4>Logo Here</h4></a>                    
                </div>
                <div class="auth-form card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label">{{ __('Password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="signup.html">Sign up</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
