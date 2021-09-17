@extends('layout.template')
    @section('title', 'Page Title')
    @section('content')
    @section('styles')
    @section('navbar')
<body>
    <form class="create-film" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="movie-create">
                <label class="label-title" for="title">Título</label>
                <input class="create-title" type="text" name="title" id="title" required>
                <label class="label-genre" for="genre">Gênero</label>
                <input class="create-genre" type="text" name="genre" id="genre" required>
                <p>País</p>
                <select name="country_id" class="country-select" id="country_id">
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                <p></p><label class="label-release" for="release">Data de lançamento</label>
                <input class="create-release" type="date" name="release" id="release" required>
                <label class="label-rating" for="rating">Nota</label>
                <input class="create-rating" type="number" name="rating" id="rating" required>
                <label class="label-synopsis" for="synopsis">Sinopse</label>
                <textarea class="create-synopsis" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
                <form>
                    <div>
                        <label for="submit-image" class="submit-image">Enviar arquivo</label>
                        <input class="create-image" type="file" id= "submit-image" name="image" accept="image/*" required>
                    </div>
                </form>
                <button class="btn-save" type="submit">Criar Filme</button>
            </div> 
    </form>
    <a class="btn-back" href="{{ route('movie.index') }}">Voltar</a>
    @endsection
</body>

