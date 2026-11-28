@extends('layouts.app')
@section('title', $book->title)
@section('content')
    <section class="panel">
        <h1>{{ $book->title }}</h1>
        <p>Auteur: {{ $book->author }}</p>
        <p>Prix: {{ $book->price }} MAD</p>
        <p>Disponible: {{ $book->available ? 'Disponible' : 'Indisponible' }}</p>
        <div class="actions">
            <a class="button" href="{{ route('books.edit', $book) }}">Modifier</a>
            <a href="{{ route('books.index') }}">Retour à la liste</a>
        </div>
    </section>
@endsection