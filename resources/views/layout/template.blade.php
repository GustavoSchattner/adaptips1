<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmes Adapti - @yield('layout')</title>
    </head>
    @section('navbar')
    <header style = "position: fixed; top: 0px; background-color: rgba(186, 220, 88, 1)">
            <ul>
                <a class="btn-inicio" href="/movie">Início</a>
                <a class="btn-create" href="/movie/create">Adcionar Filme</a>  
            </ul>
            @yield('navbar')

    </header>
    <body>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        <nav style="background-color: rgba(186, 220, 88, 1)">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="https://www.facebook.com/AdaptiEmpresaJr">
                    @csrf
                    Desenvolvido com 💙 2021 Adapti-Soluções Web <button style="font-size:12px"><i class="fa fa-facebook-f"></i></i></button>
                </form>
        </nav> 
    </footer>
</html>