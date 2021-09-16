@extends('layout.template')
    @section('title', 'Page Title')
    @section('content')
<body>
    <form id="form-create" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <br>
        <br>
        <br>
        <label class="label-title" for="title">Título</label>
        <input class="movie-title" value="{{$movie->title}}" type="text" name="title" id="title" required>
        <label class="label-genre" for="genre">Gênero</label>
        <input class="movie-genre" value="{{ $movie->genre}}" type="text" name="genre" id="genre" required>
        <select name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <label class="label-release" for="release">Data de lançamento</label>
        <input class="movie-release" value="{{ $movie->release}}" type="date" name="release" id="release" required>
        <label class="label-rating" for="rating">Nota</label>
        <input class="movie-rating" value="{{ $movie->rating}}" type="number" name="rating" id="rating" required>
        <label class="label-synopsis" for="synopsis">Sinopse</label>
        <textarea class="movie-synopsis" name="synopsis" id="synopsis" cols="30" rows="10">{{$movie->synopsis}}</textarea>
        <input class="movie-image" value="storage/{{ $movie->image}}" type="file" name="image" accept="image/*" required>
        <button class="btn-save" type="submit">Criar Filme</button>
    </form>
    <a class="brn-back" href="{{ route('movie.index') }}">Voltar</a>
</body>

