<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Mini Blog</title>
</head>

@include('includes.style')



<body>
@include('includes.header')



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



@include('includes.footer')
</body>

</html>
