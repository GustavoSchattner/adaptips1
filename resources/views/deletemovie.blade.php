<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Filme | Adapti PS</title>
</head>
<body>
    <form action="{{route('movie.destroy', ['id' -> $movie->id]) }}" method = "POST">
        @csrf
        <label for="">Tem certeza que deseja excluir um filme ?</label><br />
        <input type="text" name="name" value="{{ $movie->name }}"><br />
        <button>Sim</button>
    </form>
    <a href="{{ route('movie.index') }}">Voltar</a>
</body>
</html>