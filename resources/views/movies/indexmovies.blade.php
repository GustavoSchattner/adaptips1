<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <p>{{ $movie->country->name }}</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
        <a href="{{ route('movie.edit', $movie->id) }}">Editar</a> Excluir</a></center></td>;
    @endforeach
</body>
</html>