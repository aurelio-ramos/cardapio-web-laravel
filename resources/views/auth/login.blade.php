@extends('layouts.app')

{{-- @section('nav')

@endsection --}}

@section('content')
<main class="container vh-100">
    <div class="row h-100 d-flex align align-items-center">
        <section class="col-12 col-md-6">
          <img src="{{ asset('img/undraw_auth.svg') }}" alt="imagem login" class="figure-img img-fluid rounded"> 
        </section>
        <section class="col-12 col-md-6 p-5 bg-light">            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                    <label for="floatingPassword">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        
                    </div>
                    <hr class="my-3 col">                            
                    @if (Route::has('register'))
                        <a class="mt-5 btn btn-success" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                    
                </div>              
            </form>
          </section>
        </div>
    </div>         
</main>
@endsection
