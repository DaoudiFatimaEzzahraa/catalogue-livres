@extends('layouts.app')
@section('content')
    <section class="panel">
        <h1>Modifier le livre</h1>
        <form action="{{ route('books.update', $book) }}" method="POST" novalidate>
            @csrf
            @method('PUT') 
            @include('books._form', ['book' => $book]) 
            <div class="actions">
                <button type="submit">Enregistrer les modifications</button>
                <a href="{{ route('books.index') }}">Annuler</a>
            </div>
        </form>
    </section>
@endsection