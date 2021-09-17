<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmes Adapti - @yield('layout')</title>
        <link rel="stylesheet" href="{{asset('/styles.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <a class="btn-inicio" id="btn-inicio" href="/movie">Início</a>
                <a class="btn-create" href="/movie/create">Adcionar Filme</a>
                @yield('navbar')
    </header>
    <footer class="footer">
        <h4> Desenvolvido com 💙 2021 Adapti-Soluções Web <a href="https://www.instagram.com/adaptiempresajr/"><i class="fab fa-instagram"></i></a></h4> 
        
        @yield('footer')        
    </footer>
</body>
</html>