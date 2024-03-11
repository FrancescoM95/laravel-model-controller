@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
    <section class="p-4">
        <div class="container">
            <div class="row row-cols-3 g-4">
                @forelse ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">{{$movie->title}}</h4>
                              <h6 class="card-subtitle mb-2"><strong>Original Title:</strong> {{$movie->original_title}}</h6>
                              <h6 class="card-subtitle mb-2"><strong>Nationality:</strong> {{$movie->nationality}}</h6>
                              <h6 class="card-subtitle mb-2"><strong>Date:</strong> {{$movie->date}}</h6>
                              <h6 class="card-subtitle mb-2"><strong>Vote:</strong> {{$movie->vote}}</h6>
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