<div class="navInicio ms-2">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container-fluid navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item text-reset" role="presentation">
                        <a class="text-decoration-none text-reset" href="https://www.hangarrebelde.com/" target="_blank">
                            <button class="nav-link text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/home.png'); ?>" alt="">
                                    Inicio
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="text-decoration-none text-reset" href="https://www.hangarrebelde.com/eventos/" target="_blank">
                            <button class="nav-link text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/calendario.png'); ?>" alt="">
                                    Calendario
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="text-decoration-none text-reset" href="https://www.hangarrebelde.com/" target="_blank">
                            <button class="nav-link text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/torneo.png'); ?>" alt="">
                                    Torneos
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="text-decoration-none text-reset" href="#" target="_blank">
                            <button class="nav-link text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/news.png'); ?>" alt="">
                                    Noticias
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="text-decoration-none text-reset" href="{{ route('home') }}">
                            <button class="nav-link active text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/tienda-b.png'); ?>" alt="">
                                    Tienda
                            </button>
                        </a>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <a class="text-decoration-none text-reset" href="https://www.hangarrebelde.com/#historia" target="_blank">
                            <button class="nav-link text-reset p-0 px-2 py-2" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/aboutUs.png'); ?>" alt="">
                                    Sobre Nosotros
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse p-0" id="navbarSupportedContent">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item  me-2" role="presentation">
                        <form class="d-flex align-items-center" action="{{route('search')}}">
                            <div class="form-group ct-search">
                                <input type="text" name="query" class="form-control search-box-w" placeholder="Buscar">
                            </div>
                            <button class="btn-carrito position-relative" type="submit" class="btn btn-default">
                                <img class="imgcarrito" src="<?php echo asset('storage/img/lupa.png'); ?>" alt="">
                            </button>
                        </form>
                    </li>
                    <li class="nav-item me-2" role="presentation">
                        <img class="imgcarrito" src="<?php echo asset('storage/img/carrito.png'); ?>" alt="" href="#">
                        <button class="btn-products position-relative">
                            (12) 034,21€
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand-xs p-0 mx-5 mt-4">
        <div class="d-sm-flex flex-row bd-highlight mb-3">
            <ul class="navbar-nav">
                <li class="nav-item fs-6">
                <a class="nav-link active d-flex listCat" aria-current="page" href="{{ route('filter', ['Comic Americano']) }}">Comics americano</a>
                </li>
                <li class="nav-item fs-6">
                <a class="nav-link active d-flex listCat" href="{{ route('filter', ['Comic Americano', 'Comic Marvel']) }}">Comics Marvel</a>
                </li>
                <li class="nav-item fs-6">
                <a class="nav-link active d-flex listCat" href="{{ route('filter', ['Comic Americano', 'Comic DC']) }}">Comics DC</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active d-flex listCat" href="{{ route('filter', ['Comic Europeo']) }}">Comics Europeo</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active d-flex listCat" href="{{ route('filter', ['Comic Europeo', 'Comic Español']) }}">Comics Español</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active listCat" href="{{ route('filter', ['Comic Manga']) }}">Comics Manga</a>
                </li>
            </ul>
        </div>
    </nav>
</div>