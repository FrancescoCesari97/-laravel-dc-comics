@extends('layouts.app')

@section('title', 'cerca Fumetto')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1 class="text-center">Cerca Fumetto</h1>

            <form action="{{ route('comics.store') }}" class="py-5 row g-5" method="POST">
                @csrf
                <div class="col-4">
                    <label class="form-label" for="title">Titolo</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" id="title"
                        name="title" {{-- required --}}>
                    <div class="invalid-feedback">titolo mancante o non valido</div>
                </div>

                <div class="col-4">
                    <label class="form-label" for="sale_date">data</label>
                    <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date"
                        name="sale_date" {{-- required --}}>
                    <div class="invalid-feedback">data mancante o non valida</div>
                </div>

                <div class="col-4">
                    <label class="form-label" for="price">prezzo</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="text" id="price"
                        name="price" {{-- required --}}>
                    <div class="invalid-feedback">prezzo mancante o non valido</div>
                </div>

                <div class="col-4">
                    <label class="form-label" for="thumb">Url Immagine</label>
                    <input class="form-control" type="url" id="thumb" name="thumb">
                </div>


                <div class="col-4">
                    <label class="form-label" for="type">Tipo</label>
                    <select class="form-control" id="type" name="type" {{-- required --}}>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>

                    </select>
                </div>

                <div class="col-4">
                    <label class="form-label" for="series">Series</label>
                    <input class="form-control @error('series') is-invalid @enderror" type="text" id="series"
                        name="series" {{-- required --}}>
                    <div class="invalid-feedback">serie mancante o non valida</div>
                </div>

                <div class="col-12">
                    <label class="form-label" for="description">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>


                <div class="col-3">

                    <button class="btn btn-success">crea nuovo</button>
                </div>

            </form>

        </div>
    </section>
@endsection
