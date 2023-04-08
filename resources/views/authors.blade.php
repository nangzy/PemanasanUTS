@extends('main')

@section('content')

<h1 class="mb-5">Authors' Lists</h1>

<div class="container-fluid mt-4 rounded-4 shadow pl-1 pr-5 pt-1 pb-5" style="background-color: rgb(232, 202, 157); border-radius: 5%">
    <ol style="font-size: 26px">
    @foreach ($authors as $author)
    <div class="content pb-2 mt-5 pl-5 pr-3 pt-3 rounded" style="background-color: bisque;">
            <li>
                <h3>
                    <a href="/authors/{{ $author->slug }}" class="text-decoration-none text-dark">
                        {{ $author->name }}
                    </a>
                </h3>
            </li>

            <ul style="font-size: 20px">
                @foreach ($author->blogs as $ab)
                    <li>
                        <a href="/blog/{{ $ab->slug }}" class="text-decoration-none text-dark">
                            {{ $ab->title }}
                        </a>
                    </li>
                 @endforeach
            </ul>
        </div>
        <div class="border-bottom border-dark"></div>
        
        @endforeach
    </ol>
    </div>

@endsection