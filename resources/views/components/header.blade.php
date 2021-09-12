<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center">
            </div>
            <div class="col d-flex justify-content-center">
                <a href="{{ route('home') }}">
                    <img class="logo" src="{{url('/img/logo.png')}}" {{-- src="<?php echo asset('storage/img/logo.png'); ?>" --}} alt="">
                    <img class="letrasSinFondo" src="{{url('/img/logoLetras.jpg')}}" {{-- src="<?php echo asset('public/logoLetras.jpg'); ?>" --}} alt="">
                </a>
            </div>
            <div class="col logingrid p-0">
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
                        <li class="nav-item dropup">
                            <a id="navbarDropdown" class="nav-link text-reset dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
<hr>
</header>
