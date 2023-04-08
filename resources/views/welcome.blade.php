@extends('main')

@section('content') 
    <h1 class="text-center pb-4 border-bottom border-dark"> Nicholaus' Website menerapkan konsep one to one dan one to many relationship pada bagian blog. </h1>
    <div class="border-top border-dark pt-5">
        <h3> <a href="https://laravel.com/docs/10.x/eloquent-relationships#one-to-one" class="text-decoration-none text-dark"> One to One Relationship </a></h3>
        <p>
            One to one relationship artinya sebuah record table memiliki hubungan ke satu dan hanya satu record di tabel lain. Contohnya setiap post-an hanya dapat ditulis oleh satu penulis saja.
        </p>
        <div class="mt-4 border-bottom border-dark pb-5">
            <a href="https://laravel.com/docs/10.x/eloquent-relationships#one-to-one" class="text-decoration-none">Read More..</a>
        </div>
    </div>

    <div class="mt-5">
        <h3> <a href="https://laravel.com/docs/10.x/eloquent-relationships#one-to-many" class="text-decoration-none text-dark"> One to Many Relationship</a></h3>
        <p>
            One to many relationship artinya sebuah record table memiliki hubungan ke banyak record di tabel lain. Contohnya setiap penulis dapat memiliki banyak post-an.
        </p>
        <div class="mt-4">
            <a href="https://laravel.com/docs/10.x/eloquent-relationships#one-to-many" class="text-decoration-none">Read More..</a>
        </div>
    </div>
@endsection