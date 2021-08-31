<nav class="navbar navbar-expand-lg navbar-light p-0 mt-1" style="height: 12px;">
    <div class="container-fluid">
        <a class="navbar-brand mx-4" href="#">NOVEDADES</a>
        </button>
        <div class="navbar" id="navbarSupportedContent">
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


<nav class="navbar navbar-expand-lg navbar-light p-0 mx-5 mt-4">
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
</form>
</nav>