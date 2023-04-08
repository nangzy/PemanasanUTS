@extends('main')

@section('filling')
<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-2 ml-5 mt-5">
            <img src="/img/{{ $author->slug }}.jpg" alt="{{ $author->name }}" width="150px" class="img-thumbnail rounded-circle mt-5 ml-4">
            <h2>{{ $author->name }}'s Posts</h2>
        </div>
    
        <div class="col-9">
            <div class="container-fluid mt-4 rounded-4 shadow pl-5 pr-5 pt-1 pb-5" style="background-color: rgb(232, 202, 157); border-radius: 5%">
                @foreach ($author->blogs as $a)
                    <div class="content pb-2 mt-5 pl-3 pr-3 rounded" style="background-color: bisque;">
                        <h3>
                            <a href="/blog/{{ $a->slug }}" class="text-decoration-none text-dark">
                                {{ $a->title }}
                            </a>
                        </h3>
                            
                            <p>By: <a href="/authors/{{ $author->slug }}" class="text-decoration-none text-info">
                                {{ $author->name }}
                            </a>
                        </p>
                            <p>{{ $a->excerpt }}</p>
                    </div>
                    <br>
                    <div class="border-bottom border-dark"></div>   
                        
                @endforeach
            </div>
    
        </div>
        
    </div>
</div>
    
@endsection