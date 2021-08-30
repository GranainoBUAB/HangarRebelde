<nav class="navbar navbar-expand-lg navbar-light p-0 mx-5">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item fs-6">
            <a class="nav-link active" aria-current="page" href="#">Comics americano</a>
            </li>
            <li class="nav-item fs-6">
            <a class="nav-link active" href="#">Comics Marvel</a>
            </li>
            <li class="nav-item fs-6">
            <a class="nav-link active" href="#">Comics DC</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="#">Comics Europeo</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="#">Comics Español</a>
            </li>
            <li class="nav-item fs-6">
                <a class="nav-link active" href="#">Comics Manga</a>
            </li>
        </ul>
        </div>
    </div>
<form class="d-flex align-items-center" action="{{route('search')}}">
    <form class="navbar-form" >
        <div class="form-group ct-search">
            <input type="text" name="query" class="form-control search-box-w" placeholder="Buscar">
        </div>
        <button class="btn-carrito position-relative" type="submit" class="btn btn-default">🔍</button>
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
</nav>