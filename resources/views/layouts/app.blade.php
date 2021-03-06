<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- スクロール表示用 -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <!-- font -->
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container ml-0">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/images/musubi.jpg" width="50" height="40" alt="" loading="lazy">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('mypage.show') }}">店舗一覧</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('mypage.mypagelist') }}">マイページ一覧</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('mypage.mylistcheck') }}">マイページリスト</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-3" href="{{ route('mypage.request') }}">リクエスト</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link pl-5" href="{{ route('mypage.create') }}">新規登録</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('mypage.check') }}">登録店更新</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('mypage.requestlist') }}">リクエストリスト</a>
                        </li>
                    <!-- </ul> -->



                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ml-auto"> -->
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
            </div>
        </nav>
  

        <main class="mt-5 mx-1">
            @yield('content')
        </main>
    </div>
    
    <footer class="footer bg-light border-top">
        <div class="container text-center">
            <p class="text-muted py-3 m-0">Place sticky footer content here.</p>
        </div>
    </footer>
</body>
</html>
