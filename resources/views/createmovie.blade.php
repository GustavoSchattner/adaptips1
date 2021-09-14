@extends('layout.template')
@section('title', 'Page Title')
@section('content')
@section('navbar')
<body>
    <br>
    <br>
    <br>
    <form class="create-film" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="label-title" for="title">Título</label>
        <input class="movie-title" type="text" name="title" id="title" required>
        <label class="label-genre" for="genre">Gênero</label>
        <input class="movie-genre" type="text" name="genre" id="genre" required>
        <select name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <label class="label-release" for="release">Data de lançamento</label>
        <input class="movie-release" type="date" name="release" id="release" required>
        <label class="label-rating" for="rating">Nota</label>
        <input class="movie-rating" type="number" name="rating" id="rating" required>
        <label class="label-synopsis" for="synopsis">Sinopse</label>
        <textarea class="movie-synopsis" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input class="movie-image" type="file" name="image" accept="image/*" required>
        <button class="btn-save" type="submit">Criar Filme</button>
    </form>
    <a class="brn-back" href="{{ route('movie.index') }}">Voltar</a>
</body>
