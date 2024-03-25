@extends('layouts.app')


@section('title', 'dettagli fumetto')


@section('main-content')
    <section>
        <div class="container py-4 text-center">
            <h1>{{ $comic->series }}</h1>

            <div class="d-flex py-5">
                <img src="{{ $comic->thumb }}" alt="">
                <p class="fs-5 ">{{ $comic->description }}</p>

            </div>
            <h4>{{ $comic->price }}</h4>



        </div>
    </section>
@endsection
