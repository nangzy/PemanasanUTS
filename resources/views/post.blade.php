@extends('main')

@section('content')
    <h1>
        Enjoy!
    </h1>
    <div class="container-fluid mt-4 rounded-5 shadow pl-5 pr-5 pt-1 pb-5" style="background-color: rgb(232, 202, 157)">
        <div class="content pb-2 mt-5 pl-3 pr-3 rounded" style="background-color: bisque;">
            <h2>
                <a href="/blog/{{ $blogs->slug }}" class="text-decoration-none text-dark">
                    {{ $blogs->title }}
                </a>
            </h2>
            <p>By: <a href="/authors/{{ $blogs->authors->slug }}" class="text-decoration-none text-info">
                    {{ $blogs->authors->name }}
                </a>
            </p>
                <p class="text-justify">{!! $blogs->body !!}</p>
        </div>
        <br>
        <div class="border-bottom border-dark"></div>
    
@endsection