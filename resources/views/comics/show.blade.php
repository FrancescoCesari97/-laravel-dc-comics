@extends('layouts.app')


@section('title', 'dettagli fumetto')


@section('main-content')
    <section>
        <div class="container py-4">

            <a class="btn btn-primary py-2" href="{{ route('comics.index') }}">torna alla lista</a>
            <h1 class=" text-center">{{ $comic->series }}</h1>

            <div class="row py-5">
                <div class="col-3">
                    <img src="{{ $comic->thumb }}" alt="">

                </div>
                <div class="col-9 justify-content-start ">
                    <p class="fs-5  ">{{ $comic->description }}</p>

                </div>


                <h4>{{ $comic->price }}</h4>

            </div>



        </div>
    </section>
@endsection
