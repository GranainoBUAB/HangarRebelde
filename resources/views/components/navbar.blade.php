<div class="container-fluid navInicio sticky-top bg-light p-0">
    <nav class="navbar navbar-expand-lg navbar-light p-0 d-flex justify-content-sm-center">
        <div class="navbar d-flex flex-wrap flex-lg-nowrap w-100">
            <button class="navbar-toggler me-md-3 mb-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills mb-2 d-flex flex-wrap flex-lg-nowrap justify-content-space-between" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="true" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <img class="imgcarrito" src="{{url('/img/home.svg')}}" alt="https://www.freepik.com">
                            Inicio</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="false" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img class="imgcarrito" src="{{url('/img/calendario.svg')}}"  alt="https://www.flaticon.es/autores/srip">
                            Calendario</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="false" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img class="imgcarrito" src="{{url('/img/trofeo.svg')}}"  alt="https://www.freepik.com">
                            Torneos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#" class="nav-link text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="false" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img class="imgcarrito" src="{{url('/img/megafono.svg')}}"  alt="https://www.flaticon.es/autores/good-ware">
                            Noticias</a>
                    </li><li class="nav-item" role="presentation">
                        <a href="{{ route('home') }}" class="nav-link active text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="false" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img class="imgcarrito" src="{{url('/img/tienda.svg')}}"  alt="https://www.flaticon.es/autores/nikita-golubev">
                            Tienda</a>
                    </li><li class="nav-item" role="presentation">
                        <a href="#" class="nav-link text-decoration-none text-reset" tabindex="-1" role="button" aria-disabled="false" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img class="imgcarrito" src="{{url('/img/group.svg')}}" alt="https://www.freepik.com">
                            Sobre nosotros</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse p-0 d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="nav nav-pills mb-2 d-flex flex-nowrap" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <form class="d-flex align-items-center inputSearch" action="{{route('search')}}">
                            <div class="form-group ct-search">
                                <input class="form-control me-1 inputSearch" name = "query" type="text" placeholder="Buscar" aria-label="Search">
                            </div>
                            <button class="btn-lupa position-relative" type="submit" class="btn btn-default">
                                <img class="imgcarrito" src="{{url('/img/lupa.png')}}" alt="">
                            </button>
                        </form>
                    </li>
                    <li class="nav-item ms-xl-3 ms-lg-1 me-sm-2 li-carrito" role="presentation">
                        <a href="{{ route('getCart') }}">
                            <img class="icoCardHeader" src="{{url('/img/shopping-cart.svg')}}" alt="">
                        </a>
                        <a href="{{ route('getCart') }}">
                            <button class="btn-products position-relative">
                                {{$sum}}€
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{$quantity}}     {{-- 99+ --}}
                                </span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar-expand-lg navbar-light" >
        <div class="container-fluid categories-nav" {{-- style="background-color: #FF8300" --}}>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            CATEGORIAS
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link ct-cat" aria-current="page" aria-selected="true" href="{{ route('home') }}">Novedades</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ct-cat" aria-selected="false" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comic Americano
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('filter', ['Comic Americano']) }}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{ route('filter', ['Comic Americano', 'Comic Marvel']) }}">Marvel</a></li>
                            <li><a class="dropdown-item" href="{{ route('filter', ['Comic Americano', 'Comic DC']) }}">DC Comics</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ct-cat" aria-selected="false" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comic Europeo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ route('filter', ['Comic Europeo']) }}">Todos</a></li>
                            <li><a class="dropdown-item" href="{{ route('filter', ['Comic Europeo', 'Comic Español']) }}">Español</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ct-cat" aria-current="page" aria-selected="false"  href="{{ route('filter', ['Comic Manga']) }}">Comic Manga</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <nav class="navbar-expand-lg p-0 mx-4 mt-3 rounded"  style="background-color: #FF8300">
        <div class="d-sm-flex flex-row bd-highlight mb-3 p-2">
            <ul class="nav nav-pills text-decoation-none" id="pills-tab" role="tablist">
                <li class="nav-item fs-6" type="button">
                <a class="text-decoation-none text-reset d-flex listCat" aria-current="page" href="{{ route('filter', ['Comic Americano']) }}">Comic americano</a>
                </li>
                <li class="nav-item fs-6 mx-2" type="button">
                <a class="text-reset d-flex listCat" href="{{ route('filter', ['Comic Americano', 'Comic Marvel']) }}">Comic Marvel</a>
                </li>
                <li class="nav-item fs-6 mx-2" type="button">
                <a class="text-reset d-flex listCat" href="{{ route('filter', ['Comic Americano', 'Comic DC']) }}">Comic DC</a>
                </li>
                <li class="nav-item fs-6 mx-2" type="button">
                    <a class="text-reset d-flex listCat" href="{{ route('filter', ['Comic Europeo']) }}">Comic Europeo</a>
                </li>
                <li class="nav-item fs-6 mx-2" type="button">
                    <a class=" text-reset d-flex listCat" href="{{ route('filter', ['Comic Europeo', 'Comic Español']) }}">Comic Español</a>
                </li>
                <li class="nav-item fs-6 mx-2" type="button">
                    <a class=" navbar-nav text-reset d-flex flex-wrap listCat" href="">Comic Manga</a>
                </li>
            </ul>
        </div>
    </nav> --}}
</div>
