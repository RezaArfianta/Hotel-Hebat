<!DOCTYPE html>
<html>
<head>
    <title>Hotel Hebat</title>
</head>
<body>
    <div class="header">
        <img class="hotel" src="{!! asset('assets/image/hotel.png') !!}">
        <h1>HOTEL HEBAT</h1>
            @if(auth()->user()->is_admin == 1)
            <div class="judul">Hi Admin !</div>
            @else
            <div class="judul">Selamat Datang !</div>
            @endif
        <div class="identitas">
        <ul>
        @guest
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <li>
                    {{ Auth::user()->name }}
                    <div>
                        <a href="{{ route('logout') }}"
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
        </ul>
    </div>
    </div>
    <center>
    <div class="muka">
    </div>
    <div class="main">
    <a class="btn btn-primary" href="{{ route('kamars.index') }}">Admin</a>
    <br>
    </div>
    </center>
</body>
</html>