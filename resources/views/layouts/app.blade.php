@extends('layouts.includes.base')

@section('nav')
    @includeIf('layouts.includes.menu')   
@endsection

@section('content')
<main class="container-fluid vh-100">
    @yield('main')
</main>    
@endsection

@section('footer') 
<!-- Footer -->
<footer class="bg-white">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-8 col-md-6 mb-4 mb-lg-0"><img src="{{asset('img/logo.png')}}" alt="" width="180" class="mb-3">
          <p class="font-italic text-muted">Automatize seus pedidos online e tenha todas opções num só lugar.</p>
          <ul class="list-inline mt-4">
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>                        
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="linkedin-in"><i class="fab fa-linkedin-in"></i></a></li>                        
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="github"><i class="fab fa-github"></i></a></li>                        
            <li class="list-inline-item"><a href="https://fontawesome.com/icons?d=gallery&s=brands&m=free" target="_blank" title="whatsapp"><i class="fab fa-whatsapp"></i></a></li>                        
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Produtos</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2"><a href="#" class="text-muted">Categoria 1</a></li>
          </ul>
        </div>        
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          @guest
            <h6 class="text-uppercase font-weight-bold mb-4">Autenticação</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="{{route('login')}}" class="text-muted">{{ __("Login") }}</a></li>
              <li class="mb-2"><a href="{{route('register')}}" class="text-muted">{{ __("Register") }}</a></li> 
            </ul>
          @else
            <h6 class="text-uppercase font-weight-bold mb-4">Perfil</h6>
            <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="#" class="text-muted">Seu perfil</a></li>
              <li class="mb-2"><a href="#" class="text-muted">Configurações</a></li> 
              <li class="mb-2"><a href="#" class="text-muted">Sair</a></li> 
            </ul>  
          @endguest
        </div>        
      </div>
    </div>

    <!-- Copyrights -->
    <div class="bg-light py-4">
      <div class="container text-center">
        <p class="text-muted mb-0 py-2">©{{date('Y')}} <a class="text-decoration-none" href="https://www.youtube.com/watch?v=oww7oB9rjgw"><em>Bons artistas copiam, grandes artistas roubam.</em></a></p>
      </div>
    </div>
    @production
    <!-- Ambiente -->
    @else
    <div class="bg-dark">
        <div class="container text-center">
          <p class="text-muted mb-0">
              Ambiente: {{ config('app.env') }} - versão:{{ env('APP_VERSION','v1.0-pre-alpha') }}
          </p>
        </div>
      </div>
    @endproduction
    
  </footer>
  <!-- End -->     
@endsection