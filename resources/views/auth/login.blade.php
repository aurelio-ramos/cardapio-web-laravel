@extends('layouts.app')

{{-- @section('nav')

@endsection --}}

@section('content')
<main class="container vh-100">
    <div class="row h-100 d-flex align align-items-center">
        <section class="col-12 col-md-6">
          <img src="{{ asset('img/undraw_auth.svg') }}" alt="imagem login" class="figure-img img-fluid rounded"> 
        </section>
        <section class="col-12 col-md-6 p-0 bg-light">
            <div class="card-header p-3">{{ __('Login') }}</div>            
            <form action="{{ route('login') }}" method="POST" class="p-5">
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
                    <input id="password" name="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    
                </div>

                <div class="form-floating mb-3">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif                        
                    </div>
                </div>              
                <div class="form-group row m-0">                    
                    <hr class="mt-3 mb-0 col">                            
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
