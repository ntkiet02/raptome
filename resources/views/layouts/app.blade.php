<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <?php include_once "resources/views/Different/head.php"?>
    @yield('javascript')
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="#"><img src="resources/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('typebeat') }}">Type Beat</a></li>
										<li><a href="{{ route('musician') }}">Musician</a></li>
										<li><a href="{{ route('songs') }}">Songs</a></li>                                      
										<li><a href="{{ route('status') }}">Status</a></li>
										<li><a href="{{ route('portflolio') }}">Portfolio</a></li>
                                        <li><a href="{{ route('user') }}">User</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
								@guest
                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}">Log in</a> </li>
								@endif
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a> </li>
                                @endif
                                @else
                                <li>
                                    <a href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-light fa-user-circle"></i> {{ Auth::user()->name }}
                                    </a>
                                    <div>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fa-light fa-fw fa-sign-out-alt"></i> Đăng xuất
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest  
                            </ul>
                        </nav>
                       
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header> 
       

    <main class="pt-3">
   
        <!-- <section class="hero">
            <div class="hero__slider owl-carousel">
               <img src = "resources/img/Sakura.jpg" /> 
           
            </div>
            
        </section> -->
        @yield('content')
    </main>

        <hr class="shadow-sm" />
        <?php include_once "resources/views/Different/footer.php"?>
        <?php include_once "resources/views/Different/Scripitadd.php"?>
    </div>

</body>

</html>