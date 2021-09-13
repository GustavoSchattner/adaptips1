<!DOCTYPE html>
<html lang="en">
    @section('navbar')
    <header style = "position: fixed; top: 0px; background-color: rgba(186, 220, 88, 1)">
            <nav>
                <a href="/movie">Inicio</a>  <a href="/movie/create"> Adcionar Filme</a>
                <form action ="{{route('movie.search')}}" method = "GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-danger btn-sm" type="submit">Go!</button> 
            </div>
                </form>
            </nav>
    </header>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Name - @yield('layout')</title>
    </head>
    <body>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        @section('footer')
        <nav style="background-color: rgba(186, 220, 88, 1)">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="https://www.facebook.com/AdaptiEmpresaJr">
                    @csrf
                    Desenvolvido com 💙 2021 Adapti-Soluções Web <button style="font-size:12px"><i class="fa fa-facebook-f"></i></i></button>
                </form>
        </nav> 
    </footer>
</html>