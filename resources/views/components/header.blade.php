<header>
    <div>
        <div class="containerLogo">
            <a href="{{ route('home') }}">
                <img class="logo" src="<?php echo asset('storage/img/logo.png'); ?>" alt="">
            </a>
        </div>

        <div>
            <a href="{{ route('create') }}">
                <button type="text" class="btn btn-primary">Create</button>
            </a>
        </div>
        
        <div class="navbar navbar-expand-md navbar-light">
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <hr>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active home-link" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                aria-selected="true">🏠 Inicio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link calendar-link " id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">📅 Calendario</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link trophy-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">🏆 Torneos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link news-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">📰 Noticias</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link shop-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">🛍️ Tienda</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link aboutUs-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">👥 Sobre Nosotros</button>
                        </li>
                    </ul>
                    {{-- <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                    </div> --}}
                </div>

                
                
                <form class="d-flex align-items-center" action="{{route('search')}}">

                    <form class="navbar-form navbar-left" >
                        <div class="form-group ct-search">
                            <input type="text" name="query" class="form-control search-box-w" placeholder="Search">
                        </div>
                        <button class="btn-carrito position-relative" type="submit" class="btn btn-default">Search</button>
                    </form>

                    <img class="imgcarrito" src="<?php echo asset('storage/img/carrito.png'); ?>" alt="" href="#">
                    <button class="btn-carrito position-relative">
                        2 productos - 34,21€
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger visually-hidden">
                            02
                        </span>
                    </button>
                </form>

            </div>
        </nav>

    </div>
</header>
