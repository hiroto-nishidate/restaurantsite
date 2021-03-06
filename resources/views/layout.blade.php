<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <link rel='stylesheet'href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <title>omisse</title>
        <style>body { padding-top: 80px;}</style>
        <script src='{{ asset("js/app.js") }}' defer></script>
    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-dark bg-info fixed-top'>
            <a class='navbar-brand' href={{route('shop.list')}}>restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
       　　　　 <span class="navbar-toggler-icon"></span>
       　　  </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
        </nav>
        <div class='container'>
        @yield('content')
        </div>
    </body>
    <footer class="fixed-bottom">  
　　　　<nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a href="{{ url('/about') }}" class="navbar-brand">Find a Western restaurantとは</a>
  　　　　<div class="collapse navbar-collapse justify-content-end" id="navmenu">
    　　<div class="navbar-nav">
    　　<a class="nav-item nav-link active" a href="{{ url('/user/index') }}">👤</a>    
      　<a class="nav-item nav-link active" a href="{{ url('/contact') }}">お問い合わせ</a>
      　<a class="nav-item nav-link active" a href="{{ url('/rule') }}">利用規約</a>
    </div>
  </div>
</nav>
 </footer>
</html>