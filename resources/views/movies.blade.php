<!DOCTYPE html>
<html lang="en">
    @extends('layout.template')
    @section('title', 'Page Title')
    @section('navbar')
        @parent
        @endsection
    @section('content')
    @endsection
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    @section('navbar')
    <a href="{{ route('movie.create') }}"></a>
    @foreach ($movies as $movie)
        <br>
        <h2>{{ $movie->title }}</h2>
        <h4>{{$movie->genre}}</h4>
        <h4>{{$movie->country->name}}</h4>
        <h4>{{$movie->rating}}</h4>
        <h4>{{$movie->synopsis}}</h4>
        <img src="/storage/{{ $movie->image }}" alt="Imagem" width="160" height="200"/>
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
                <h4></h4>
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
        </td>
    @endforeach

</body>
</html>