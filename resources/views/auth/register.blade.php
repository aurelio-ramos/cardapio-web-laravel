@extends('layouts.app')

@section('content')
<main class="container vh-100">
    <div class="row h-100 d-flex align align-items-center">
        <section class="col-12 col-md-6">
          <img src="{{ asset('img/undraw_auth.svg') }}" alt="imagem login" class="figure-img img-fluid rounded"> 
        </section>
        <section class="col-12 col-md-6 bg-light p-0">
            <div class="card-header p-3">{{ __('Register') }}</div>
            <form method="POST" action="{{ route('register') }}" class="p-5">
                @csrf

                <div class="form-floating mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name" >{{ __('Name') }}</label>                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                    
                </div>

                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email" >{{ __('E-Mail Address') }}</label>                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password" >{{ __('Password') }}</label>                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>                                        
                </div>

                <div class="form-group row mt-3">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                        @if (Route::has('login'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Login if already registered') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </section>
    </div>
</main>
@endsection
