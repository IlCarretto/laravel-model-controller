@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2>Lista dei film</h2>
            <div class="row row-cols-5">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="ms-card">
                            <img src="{{ $movie->image }}" alt="">
                            <h3>{{ $movie->title }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
