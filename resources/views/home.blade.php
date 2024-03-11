@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
    <section class="p-4">
        <div class="container">
            <h1 class="text-center m-3">MOVIES</h1>
            <div class="row row-cols-3 g-3">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">{{$movie->title}}</h4>
                              <h4 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h4>
                              <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Nationality:</strong> {{$movie->nationality}}</h6>
                              <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Date:</strong>{{$movie->date}}</h6>
                              <h6 class="card-subtitle mb-2 text-body-secondary"><strong>Vote:</strong> {{$movie->vote}}</h6>
                            </div>
                          </div>
                    </div>
                @empty
                    <div>
                        <h2>Spiacenti, non ci sono film.</h2>
                    </div>
                    
                @endforelse
            </div>
        </div>
    </section>
@endsection