<body>
    <form class="movie-destroy" action="{{route('movie.destroy', ['id' -> $movie->id]) }}" method = "POST">
        @csrf
    </form>
    <a href="{{ route('movie.index') }}">Voltar</a>
</body>
