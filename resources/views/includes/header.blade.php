<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-4" data-bs-theme="dark">
        <div class="container-fluid ">
            <a class="navbar-brand me-5" href="{{ route('blog') }}">Mini Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($tags as $tagName)
                        <li class="nav-item ms-5">
                            <a class="nav-link"
                                href="{{ route('tag.posts', $tagName->name) }}">{{ $tagName->name }}</a>
                        </li>
                    @endforeach
                </ul>

                <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
                    <input class="form-control me-2" name="query" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>

        </div>
    </nav>

</header>
