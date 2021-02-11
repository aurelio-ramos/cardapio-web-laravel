@extends('layouts.app')

@section('content')
<main class="container vh-100">
    <div class="row h-100 d-flex align align-items-center">
        <section class="col-12 col-md-6">
          <img src="{{ asset('img/undraw_auth.svg') }}" alt="imagem login" class="figure-img img-fluid rounded"> 
        </section>
        <section class="col-12 col-md-6 bg-light p-0">
            <div class="card-header p-3">{{ __('Reset Password') }}</div>               

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="p-3">
                    @csrf

                    <div class="form-floating mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="form-floating">                       
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>                       
                    </div>
                </form>
            </div>            
        </div>
    </section>
</main>
@endsection
