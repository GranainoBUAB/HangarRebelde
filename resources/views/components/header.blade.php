<header>
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-start justify-content-md-center position-relative">
            <div class="d-flex justify-content-center">
                <a href="{{ route('home') }}">
                    <img class="logo" src="{{url('/img/logo.png')}}" alt="logo Hangar Rebelde">
                    <img class="letrasSinFondo m-3" src="{{url('/img/logoLetras.png')}}" alt="logo Hangar Rebelde">
                </a>
            </div>
            <div class="ct-session">
                <div class="navbar navbar-expand text-decoration-none ps-0 pe-3 pe-lg-4">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item d-flex align-items-center flex-nowrap">
                                <a class="nav-link text-reset p-1 li-login" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                <div class="p-1">|</div>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link text-reset p-1 li-login" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
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
                        @if (!Auth::user()->isAdmin())
                        <li>
                            <a  class="nav-link text-reset" href="{{ route('myProfile', ['id'=>Auth::user()->id]) }}" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                Mi Perfil
                            </a>
                        </li>
                        @endif
                    @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
<hr>
</header>
