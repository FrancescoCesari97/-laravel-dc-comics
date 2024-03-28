<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>{{ env('APP_NAME', 'Laravel project') }} - @yield('title', 'My page') </title>

    @vite('resources/js/app.js')

    @yield('css')
</head>

<body>
    <div class="wrapper">
        @include('partials.header')

        <main>


            @if (session('message'))
                <section>
                    <div class="container my-3">
                        <div class="alert alert-info alert-dismissible">
                            <div class="">
                                {{ session('message') }}
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </section>
            @endif
            @yield('main-content')
        </main>

        @include('partials.footer')
    </div>

    @yield('modal')
    @yield('js')
</body>

</html>
