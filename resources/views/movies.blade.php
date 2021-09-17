    @extends('layout.template')
    @section('title', 'Page Title')
    @section('content')

<head>
    <div class="search-bardiv">
        <form class="movie-search" action ="{{route('movie.search')}}" method = "GET">
            <div class="submit-line">
                <input type="text" class="searchbar" id="search" name="search" />
                <label id="icone-busca" for="search">
                    <i class="fa fa-search"></i>
                </label>
            </div>
        </form>
    </div>
</head> 
<header>
    @section('navbar')
    @endsection
</header>
<body>
    <div class="container">
        @foreach ($movies as $movie)
        <div class="cards">
            <h2 class="movie-title">{{ $movie->title }}</h2>
            <img class="movie-image" src="/storage/{{ $movie->image }}" alt="poster do filme {{$movie->title}}" width="160" height="200"/>
            <p class="movie-status">Gênero: {{$movie->genre}}</p> 
            <p class="movie-status">País: {{$movie->country->name}}</p>
            <p class="movie-status">Data de Lançamento: {{$movie->release}}</p>
            <p class="movie-status">Nota: {{$movie->rating}}</p>
            <p class="movie-synopsis">Sinopse: {{$movie->synopsis}}</p>
            <a class="btn-edit" href="{{ route('movie.edit', $movie->id)}}"><i class="fas fa-edit"></i></a>
            <form class="movie-destroy" action="{{ route('movie.destroy', $movie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn-destroy" type="submit"><i class="far fa-trash-alt"></i></button>
            </form>
        </div>
        @endforeach
    </div>  
</body>

