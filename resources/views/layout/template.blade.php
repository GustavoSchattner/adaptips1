<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmes Adapti - @yield('layout')</title>
        <link rel="stylesheet" href="{{asset('/styles.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
    </style>
<body>
    @show
    <div id="header"></div>
    <div class="left"></div>
    <div class="right"></div>
    <div id="footer"></div>
    <header class="navbar">
            <ul> 
                <li ><img id="image" src="/ASWOG.png" alt="Adapti Soluções Web" /></li>
                <a class="btn-inicio" id="btn-inicio" href="/movie">Início
                <button class="home-icons">
                    <span class="material-icons">&#xe88a;</span>
                </button></a>
                <a class="btn-create" href="/movie/create">Adcionar Filme
                <button class="create-icons">
                    <span class="material-icons">&#xe145;</span>
                </button></a>
                <hr class="linha">
    </header>
    <footer class="footer">
        <nav class="barra-inf">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="https://www.facebook.com/AdaptiEmpresaJr">
                    @csrf
                    Desenvolvido com 💙 2021 Adapti-Soluções Web <button style="font-size:12px"><i class="fa fa-facebook-f"></i></i></button>
                </form>
        </nav>
    </footer>
</body>
</html>