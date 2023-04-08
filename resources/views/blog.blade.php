@extends('main')

@section('content')
    <div class="container" >
        <h1>CHECK IT OUT!</h1>
    
        <div class="container-fluid mt-4 rounded-4 shadow pl-5 pr-5 pt-1 pb-5" style="background-color: rgb(232, 202, 157); border-radius: 5%">
            @foreach ($blogs as $d)
                <div class="content pb-2 mt-5 pl-3 pr-3 rounded" style="background-color: bisque;">
                    <h2>
                        <a href="/blog/{{ $d->slug }}" class="text-decoration-none text-dark">
                            {{ $d->title }}
                        </a>
                    </h2>
                        <img src="img/{{ $d->authors->slug }}.jpg" alt="{{ $d->authors->name }}"  width= "70px" class="img-thumbnail rounded-circle">
                        <p>By: <a href="/authors/{{ $d->authors->slug }}" class="text-decoration-none text-info">
                            {{ $d->authors->name }}
                        </a>
                    </p>
                        <p>{{ $d->excerpt }}</p>
                </div>
                <br>
                <div class="border-bottom border-dark"></div>
            @endforeach
        </div>
    </div>
@endsection