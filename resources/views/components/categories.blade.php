


<nav class="navbar navbar-expand-lg navbar-light p-0 mx-5 mt-4">
    <div class="container-fluid px-2">
        <div class="navbar p-0 listCat" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item fs-6">
                <a class="nav-link active listCat" aria-current="page" href="{{ route('filter', ['Comic Americano']) }}">Comics americano</a>
                </li>
                <li class="nav-item fs-6">
                <a class="nav-link active listCat" href="{{ route('filter', ['Comic Americano', 'Comic Marvel']) }}">Comics Marvel</a>
                </li>
                <li class="nav-item fs-6">
                <a class="nav-link active listCat" href="{{ route('filter', ['Comic Americano', 'Comic DC']) }}">Comics DC</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active listCat" href="{{ route('filter', ['Comic Europeo']) }}">Comics Europeo</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active listCat" href="{{ route('filter', ['Comic Europeo', 'Comic Español']) }}">Comics Español</a>
                </li>
                <li class="nav-item fs-6">
                    <a class="nav-link active listCat" href="{{ route('filter', ['Comic Manga']) }}">Comics Manga</a>
                </li>
            </ul>
        </div>
    </div>
</form>
</nav>