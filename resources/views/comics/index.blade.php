@extends('layouts.app')

@section('title', 'lista fumetti')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1>Lista Fumetti</h1>

            <div class="row">
                @forelse($comics as $comic)
                    <div class="col-4 g-5">

                        <div class="card h-100  ">

                            <h2>{{ $comic->series }}</h2>
                            <img class="comic-cover" src="{{ $comic->thumb }}" alt="">
                            <p>{{ $comic->price }}</p>
                            <a href="{{ route('comics.show', $comic) }}"><i class="fa-regular fa-newspaper"></i></a>
                        </div>
                    </div>
                @empty

                    <div class="card text-denger">
                        <h2 class="h4">Nessun risultato trovato</h2>
                    </div>
                @endforelse
            </div>
            {{ $comics->links() }}
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
