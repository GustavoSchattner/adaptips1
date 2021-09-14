    @extends('layout.template')
    @section('title', 'Page Title')
    @section('content')
<head>
    <br>
    <br>
    <br>
    <form class="movie-search" action ="{{route('movie.search')}}" method = "GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <button class="btn-pesquisa" type="submit">OK</button> 
        </div>
    </form>
    <h1>Filmes</h1>
    <hr/>
</head> 
<body>
    @section('navbar')
    @foreach ($movies as $movie)
        <h2>{{ $movie->title }}</h2>
        <img class="movie-image" src="/storage/{{ $movie->image }}" alt="poster do filme {{$movie->title}}" width="160" height="200"/>
        <form class="movie-edit" action="{{ route('movie.edit', $movie->id)}}">
                @csrf
                <button class="btn-edit" type="submit">Editar</button>
        </form>
        <form class="movie-destroy" action="{{ route('movie.destroy', $movie->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn-destroy" type="submit">Delete</button>
        </form>
        <h4>{{$movie->genre}}</h4> 
        <h4>{{$movie->country->name}}</h4>
        <h4>{{$movie->release}}</h4>
        <h4>{{$movie->rating}}</h4>
        <h4>{{$movie->synopsis}}</h4>
    @endforeach
</body>

