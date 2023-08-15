@extends('index')

@section('content')
    @if($articles->isEmpty())
    <div class="container blog-content">
        <p class="text-center h4">No articles found for your search query.</p>
    </div>
    @endif

@endsection
