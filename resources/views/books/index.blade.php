@extends('layouts.app')
@section('title', 'Catalogue des livres')
@section('content')
    <section class="panel list">
        <h1>Catalogue des livres</h1>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Prix</th>
                    <th>Disponible</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }} MAD</td>
                        <td>{{ $book->available ? 'Disponible' : 'Indisponible' }}</td>
                        <td>
                            <a href="{{ route('books.show', $book) }}">Voir</a>
                            <a href="{{ route('books.edit', $book) }}">Modifier</a>
                            <form class="inline" action="{{ route('books.destroy', $book) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Le catalogue est vide.</td>
                    </tr>

                @endforelse
            </tbody>

        </table>
    </section> 
