<header>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
            </div>
        <div class="col d-flex justify-content-center">
            <a href="{{ route('home') }}">
                <img class="logo" src="<?php echo asset('storage/img/logo.png'); ?>" alt="">
                <img class="letrasSinFondo" src="<?php echo asset('storage/img/logoLetras.jpg'); ?>" alt="">
            </a>
        </div>
        <div class="col logingrid">
            <div class="navbar navbar-expand  text-decoration-none">
                <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-reset" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-reset" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="loginImg" src="<?php echo asset('storage/img/logo.png');?>" alt="">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
        </div>
    </div>
    <div class=" d-flex bd-highlight mx-4">
        <div class="p-0 flex-shrink-0 bd-highlight loginNav">
            <div class="col-sm justify-content-md-flex-center border-light" style="width: 200px;">
            </div>
        </div>
        <div class="d-flex p-0 w-100 bd-highlight logoImg">
            
        </div>
        <div class="p-0 flex-shrink-0 bd-highlight loginNav">
            <div class="col-sm justify-content-md-flex-end">
                
            </div>
        </div>
    </div>
<hr>
</header>
