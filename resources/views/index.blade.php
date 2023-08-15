<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Mini Blog</title>
</head>


<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    section {
        flex: 1;
    }

    footer {
        background-color: #212529;
        flex-wrap: wrap;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
    }

    .blog-content {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin-top: 100px;
    }


    .article-card {
        background: #f8f9fa;
        padding: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        flex: 0 0 calc(33.33% - 20px);
        box-sizing: border-box;
        height: 500px;
    }

    .article-header {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .article-content {
        font-size: 16px;
    }

    .article-image {
        width: 100%;
        max-height: 200px;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .w-5 {
        display: none;
    }

    .pagination {
        display: flex;
        justify-content: center;
        padding: 10px;
    }

    .pagination a,
    .pagination span {
        margin: 0 5px;
        padding: 5px 10px;
        border-radius: 3px;
        background-color: #f1f1f1;
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .active span {
        background-color: #007bff;
        color: white;
    }

    .pagination .disabled span {
        background-color: #f1f1f1;
        color: #888;
    }
</style>


<body>

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
                        <li class="nav-item ms-5">
                            <a class="nav-link active" aria-current="page"
                                href="{{ route('tag.posts', 'programming') }}">Programming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tag.posts', 'religion') }}">Religion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tag.posts', 'philosophy') }}">Philosophy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tag.posts', 'chess') }}">Chess</a>
                        </li>
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




    <section class="container">

        @yield('content')

        @foreach ($articles as $article)
            <div class="article-card">

                @if ($article->image)
                    <img src="{{ asset($article->image) }}" alt="{{ $article->image }}" class="article-image">
                @else
                    <img src="{{ asset('images/default_image.jpg') }}" alt="Default Image" class="article-image">
                @endif


                <a class="article-header" href="{{ route('blog.show', $article->id) }}">{{ $article->header }}</a>
                <p class="article-content">{{ Str::limit($article->content, 150) }}</p>




                <!-- Etiketler-->
                <div>
                    Etiketler:
                    @foreach ($article->tags as $tag)
                        <span>{{ $tag->name }}</span>
                    @endforeach
                </div>

            </div>
        @endforeach


    </section>


    <span>
        {{ $articles->links('paginations.custom') }}
    </span>



    <footer class="py-5 px-5 mt-5">
        <div class="col-md-4">
            <h6 class=" mb-4 text-white">About Us</h3>
                <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat
                    reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis
                    obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
        </div>
        <p class="text-center text-secondary">© 2023 Company, Inc</p>
    </footer>

</body>

</html>
