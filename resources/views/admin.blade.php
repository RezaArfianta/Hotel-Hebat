<!DOCTYPE html>
<html>
<head>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="/assets/ui/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/ui/vendors/linericon/style.css">
        <link rel="stylesheet" href="/assets/ui/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="/assets/ui/css/style.css">
        <link rel="stylesheet" href="/assets/ui/css/responsive.css">

    <title>Hotel Hebat</title>
</head>
<body>
    <br></br><br></br><br></br><br></br>
    <div class="header">
        <h1 class="title_color" align="center">HOTEL HEBAT</h1>
            @if(auth()->user()->is_admin == 1)
            <div class="judul">Hi Admin !</div>
            @else
            <h4 align="center">{{ Auth::user()->name }}, Are you sure to logout?</h3>
            @endif
        <div class="identitas">
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
            <center>
            <div align="center">                    
                    
                    <div align="center">
                        <a class="btn btn-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
                        <a class="btn btn-secondary" href="{{ url('home') }}">Cancel</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
            </div>
            @endguest
    </div>
    </div>
</center>
</body>
</html>