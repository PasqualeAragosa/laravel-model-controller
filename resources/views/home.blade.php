@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <div class="row row-cols-4 g-5">
            @forelse($movies as $movie)
            <div class="card col mx-2" style="width: 18rem;">
                <img src="https://i.picsum.photos/id/486/200/300.jpg?hmac=yDvKMocLz1Sxg1XI9BgCJRlIyKqiBTdI9RZDij_z8xM" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $movie->nationally }}</li>
                    <li class="list-group-item">{{ $movie->date }}/li>
                    <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            @empty
            <p>sorry</p>
            @endforelse
        </div>
    </div>
</main>
@endsection