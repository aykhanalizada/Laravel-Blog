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
ul{
  list-style-type:none;

}
ul a{
    text-decoration: none;
    font-size:20px;
}


</style>
<body>
@include('includes.style')
@include('includes.header')

<div class="container my-5">
<section class="col-lg-8">
    <h1>{{$contents->header}}</h1>
<img src="{{$contents->image}}" alt="">

<p>{{$contents->content}}</p>
</section>


<div class="side col-lg-4">
<h3>Other Posts</h3>
<ul>
    @foreach($otherPosts as $post)
    <li><a href="{{ route('blog.show', $post->id) }}">{{ $post->header }}</a></li>
@endforeach
</ul>
</div>


</div>




@include('includes.comment')


@include('includes.footer')
</body>
</html>
