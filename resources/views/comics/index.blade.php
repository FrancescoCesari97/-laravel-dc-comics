@extends('layouts.app')

@section('title', 'lista fumetti')

@section('main-content')
    <section>
        <div class="container py-4">

            <a class="btn btn-primary mb-3" href="{{ route('comics.create') }}">crea nuovo fumetto</a>


            <h1>Lista Fumetti</h1>

            <div class="row">
                @forelse($comics as $comic)
                    <div class="col-4 g-5">

                        <div class="card h-100  ">

                            <h2>{{ $comic->series }}</h2>
                            <img class="comic-cover" src="{{ $comic->thumb }}" alt="">
                            <div class="p-2">
                                <p>{{ $comic->price }}</p>
                                <div class="d-flex ">

                                    <a class="me-3" href="{{ route('comics.show', $comic) }}"><i
                                            class="fa-regular fa-newspaper"></i></a>
                                    <a class="me-3" href="{{ route('comics.edit', $comic) }}"><i
                                            class="fa-solid fa-wrench"></i></a>
                                    <form class="text-danger" action="{{ route('comics.destroy', $comic) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn pulsante-cestino"><i class="fa-solid fa-trash"></i></button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                @empty

                    <div class="card text-denger">
                        <h2 class="h4">Nessun risultato trovato</h2>
                    </div>
                @endforelse
            </div>

            <div class="py-4">
                {{ $comics->links() }}

            </div>
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
