<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 py-3">
    <div class="container-fluid">
        <!-- logo do Navbar -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fas fa-scroll fa-2x"></i> 
            <span class="h1">{{ config('app.name', 'Cardápio Web') }}</span>
        </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- lado-esquerdo do Navbar -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <!-- exemplo menu simples -->  
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>   --}}

          {{-- <!-- exemplo menu dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbar-model-exemplo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Model Exemplo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbar-model-exemplo">
              <li><a class="dropdown-item" href="#">cadastrar</a></li>
              <li><a class="dropdown-item" href="#">editar</a></li>
              <li><a class="dropdown-item" href="#">ver</a></li>              
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">alguma outra coisa</a></li>
            </ul>
          </li>           --}}
        </ul>
        <!-- fim: lado-esquerdo do Navbar -->
        <!-- lado-direito do Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- se o usuário não estiver logado ('guest') -->
            @guest 
            <li class="nav-item">
                <a class="btn" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt fa-3x"></i>
                </a>                
            </li>

            <!-- se o usuário estiver logado -->
            @else
                {{-- <!-- form para filtro -->
                <form class="d-flex align-items-center">
                    <div class="col-auto">
                        <label class="visually-hidden" for="search">{{__("Search")}}</label>
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="search" placeholder="{{__("Search")}}" aria-label="{{__("Search")}}">                        
                            <button class="input-group-text" type="submit">
                                <i class="fas fa-search"></i>
                            </button>                            
                        </div>
                    </div>                
                </form> --}}
                
                <li class="nav-item btn-group dropstart">
                  <a class="btn dropdown-toggle" href="#" id="navbar-logout" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-circle fa-3x"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbar-logout">
                    <li><a class="dropdown-item" href="#">{{ __('Profile') }}</a></li>                      
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" 
                          href="{{ route('logout') }}"
                          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                      </a>
                    </li>
                  </ul>
                </li>    
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>                
            @endguest
        </ul>        
      </div>
    </div>
  </nav>