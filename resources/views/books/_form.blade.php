<label for="title">Titre</label>
@if ($errors->any())
    <div style="color: red; background-color: #ffe6e6; padding: 10px; margin-bottom: 15px; border: 1px solid red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<input id="title" name="title" value="{{ old('title', $book->title ?? '') }}" >
@error('title')
    <p class="error">{{ $message }}</p>
@enderror

<label for="author">Auteur</label>
<input id="author" name="author" value="{{ old('author', $book->author ?? '') }}" >
@error('author')
    <p class="error">{{ $message }}</p>
@enderror

<label for="price">Prix en MAD</label>
<input id="price" name="price" inputmode="decimal" value="{{ old('price', $book->price ?? '') }}" >
@error('price')
    <p class="error">{{ $message }}</p>
@enderror

<input type="hidden" name="available" value="0">
<label>
    <input type="checkbox" name="available" value="1" @checked(old('available', $book->available ?? true))>
    Disponible
</label>
@error('available')
    <p class="error">{{ $message }}</p>
@enderror