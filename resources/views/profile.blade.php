@extends('main')

@section('content')
    <h1 class="mb-5">Website's Profile</h1>

    <div class="container p-5 shadow rounded-4" style="background-color: rgb(223, 205, 181)">

        <div style="display: flex; justify-content: center">
            <img src="img/Nicholaus.png" alt="nicholaus" width="200px" class="shadow img-thumbnail rounded-circle border-dark">
        </div>
        <h4 class="mt-3 text-center">{{ $name }}</h4>
    
        <div class="container mt-5" style="display: flex; justify-content: center">
            <div class="card shadow rounded-4 p-3" style="background-color: rgb(240, 196, 140)">
                <p class="text-justify">
                    {{ $about }}
                </p>
            </div>
        </div>
    </div>
@endsection