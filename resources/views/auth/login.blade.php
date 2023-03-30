@extends('layouts.app')

@section('content')

<div>
    <div class="text-center m-5">

        <p class="text-center font-weight-bold text-primary m-1">Welcome to</p>
        <h1 class="text-center font-weight-bold text-primary md-3">Profile <span class="bg-primary text-white rounded p-1">book</span></h1>
        <i class="fa-solid fa-earth-americas text-primary fa-2xl m-3"></i>
    </div>

    <div class="row">
        <div class="col-4"></div>
        <form class="col-4 border border-primary p-3 rounded" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <h5 class="text-primary">Login to continue</h5>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form2Example1" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <label class="form-label" for="form2Example1">{{ __('E-Mail Address') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" />
                <label class="form-label" for="form2Example2">{{ __('Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> {{ __('Remember Me') }} </label>
                    </div>
                </div>

                <div class="col">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-block btn-primary">
                {{ __('Login') }}
            </button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <a href="{{ url('auth/facebook') }}"><i class="fab fa-facebook-f"></i></a>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <a href="{{url('auth/google')}}"><i class="fab fa-google"></i></a>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
        <div class="col-4"></div>
    </div>
</div>

@endsection