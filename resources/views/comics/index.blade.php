@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Lista Fumetti</h1>

            <div class="row">
                @forelse($comics as $comic)
                    <div class="col-4">

                        <div class="card">
                            <h2>{{ $comic->series }}</h2>
                            <img src="{{ $comic->thumb }}" alt="">
                            <p>{{ $comic->price }}</p>
                        </div>
                    </div>
                @empty

                    <div class="card text-denger">
                        <h2 class="h4">Nessun risultato trovato</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
