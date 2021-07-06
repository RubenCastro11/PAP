<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/flag.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/fontawesome.js')}}"></script>

    <style>
      .fundo{background-color: #fff;}
      body{
        background-color: #252429;
        color: #ffffff;
      }
      a{
        color:#ffffff;
      }
      table,tr,td,th{
        color:#ffffff;
      }
    </style>
</head>
<body>
   
  <div class="container-fluid fundo">
  <div class="row">

    <div class="col-md-12">
    <div class="text-center">
         <img style="height:auto; width:50%" src="{{asset('imagens/logo1.jpg')}}">
    </div>
  </div>
    </div>
  </div>
    
    @if(session()->has('msg'))
    <h3><div class="alert alert-danger" role="alert">{{session('msg')}}</div></h3>
    @endif
    <nav class="navbar navbar-expand-lg navbar bg-dark">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="home"><i class="fas fa-home"></i></a> 
      <a class="nav-item nav-link" href="{{route('motas.index')}}">Motas</a>
      <a class="nav-item nav-link" href="{{route('estilos.index')}}">Estilos</a>
      <a class="nav-item nav-link" href="{{route('marcas.index')}}">Marca</a>
      <a class="nav-item nav-link" href="{{route('publicidades.index')}}">Publicidades</a>


      @if(Gate::allows('admin'))
        <a class="nav-item nav-link" href="{{route('users.index')}}">Users</a>
      @endif

      <a class="nav-item nav-link" href="{{route('home')}}">Home</a>
      @guest
      @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a>
        </li>
      @endif
      @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ ('Register') }}</a>
        </li>
      @endif
      @else
      <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            </div>
          </li>
      @endguest
    </div>
</nav>

<div class="container">
  <div class="row">

    @yield('conteudo')
  </div>

</div>

</body>
</html>