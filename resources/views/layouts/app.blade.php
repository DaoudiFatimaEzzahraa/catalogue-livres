<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Le Rayon')</title>
        <link rel="stylesheet" href="{{ asset('css/catalogue.css') }}">
    </head>
    <body>
        <header>
            <a class="brand" href="{{ route('books.index') }}">Le Rayon</a>
            <nav>
                <a href="{{ route('books.index') }}">Catalogue</a>
                <a class="button" href="{{ route('books.create') }}">Ajouter un livre</a>
            </nav>
        </header>
        <main>
            @if (session('success'))
                <p class="success=">{{ session('success') }}</p>
            @endif
            @yield('content')
        </main>
    </body>
</html>