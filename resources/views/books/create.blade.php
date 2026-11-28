@extends('layouts.app')
@section('content')
    <section class="panel">
        <h1>Ajouter un livre</h1>
        <form action="{{ route('books.store') }}" method="POST" novalidate>
            @csrf
            @include('books._form') 
            <div class="actions">
                <button type="submit">Enregistrer</button>
                <a href="{{ route('books.index') }}">Annuler</a>
            </div>
        </form>
    </section>
@endsection