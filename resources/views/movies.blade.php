<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    
    <form action ="{{route('movie.search')}}" method = "GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <button class="btn btn-danger btn-sm" type="submit">Go!</button> 
        </div>
    </form>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <p>{{ $movie->country->name }}</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
        <td class="text-center p-0 align-middle" width="70">
            <form action="{{ route('movie.edit', $movie->id)}}">
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">Editar</button>
            </form>
        </td>
        <td class="text-center p-0 align-middle" width="70">
            <form action="{{ route('movie.destroy', $movie->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
        </td>
    @endforeach
</body>
</html>