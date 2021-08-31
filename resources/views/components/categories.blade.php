<nav class="navbar navbar-expand-lg navbar-light p-0 mt-1" style="height: 12px;">
    <div class="container-fluid">
        <a class="navbar-brand mx-4" href="#">NOVEDADES</a>
        </button>
        <div class="navbar" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
        </ul>
        <form class="d-flex align-items-center" action="{{route('search')}}">
            <div class="form-group ct-search">
                <input type="text" name="query" class="form-control search-box-w" placeholder="Buscar">
            </div>
            <button class="btn-carrito position-relative" type="submit" class="btn btn-default">
                <img class="imgcarrito" src="<?php echo asset('storage/img/lupa.png'); ?>" alt="">
            </button>
        </form>
    </div>
    </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light p-0 mx-4 mt-4">
    <div class="container-fluid px-2">
        
        <div class="navbar p-0" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item fs-6">
            <a class="nav-link active" aria-current="page" href="{{ route('filter', ['Comic Americano']) }}">Comics americano</a>
            </li>
            <li class="nav-item fs-6">
            <a class="nav-link active" href="{{ route('filter', ['Comic Americano', 'Comic Marvel']) }}">Comics Marvel</a>
            </li>
            <li class="nav-item fs-6">
            <a class="nav-link active" href="{{ route('filter', ['Comic Americano', 'Comic DC']) }}">Comics DC</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="{{ route('filter', ['Comic Europeo']) }}">Comics Europeo</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="{{ route('filter', ['Comic Europeo', 'Comic Español']) }}">Comics Español</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="{{ route('filter', ['Comic Manga']) }}">Comics Manga</a>
            </li>
        </ul>
        </div>
    </div>

    <img class="imgcarrito me-1" src="<?php echo asset('storage/img/carrito.png'); ?>" alt="" href="#">
    <button class="btn-products position-relative me-4">
        (2) 34,21€
        <span
            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger visually-hidden">
            02
        </span>
    </button>
</form>
</nav>