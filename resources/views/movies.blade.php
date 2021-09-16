    @extends('layout.template')
    @section('title', 'Page Title')
    @section('content')

<head>
    <br>
    <br>
    <br>

    <form class="movie-search" action ="{{route('movie.search')}}" method = "GET">
        <div class="submit-line">
            <input type="text" class="searchbar" id="search" name="search" />
            <label for="search">
                <i class="fa fa-search"></i>
            </label>
        </div>
    </form>

</head> 
<header>
    @section('navbar')
    @endsection
</header>
<body>
    @foreach ($movies as $movie)
        <main class="inline-blocls">
        <div class="container">
            <div class="cards">
                <h2 class="movie-title">{{ $movie->title }}</h2>
                <img class="movie-image" src="/storage/{{ $movie->image }}" alt="poster do filme {{$movie->title}}" width="160" height="200"/>
                <p>{{$movie->genre}}</p> 
                <p>{{$movie->country->name}}</p>
                <p>{{$movie->release}}</p>
                <p>{{$movie->rating}}</p>
                <p>{{$movie->synopsis}}</p>
                </div>
            </div>    
        </main>
        <form class="movie-edit" action="{{ route('movie.edit', $movie->id)}}">
                @csrf
                <button class="btn-edit" type="submit">Editar</button>
        </form>
        <form class="movie-destroy" action="{{ route('movie.destroy', $movie->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn-destroy" type="submit">Delete</button>
        </form>
    @endforeach
</body>

