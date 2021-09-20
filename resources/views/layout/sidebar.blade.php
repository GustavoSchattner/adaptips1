<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmes Adapti - @yield('layout')</title>
        <link rel="stylesheet" href="{{asset('/styles.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
    </style>
<body>
    @show
    <div class="sidebar">
        <div class="logo-details">
            <img class="img" src="/ASWOG.png" alt="Adapti Soluções Web" />
            <div class="logo_name">Filmes Adapti</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <div class="searchbardiv">
                    <form class="movie-search" action ="{{route('movie.search')}}" method = "GET">
                        <div class="submit-line">
                            <input type="text" class="searchbar" id="search" name="search" />
                            <span class="tooltip">Pesquisar</span>
                            <label id="icone-busca" for="search">
                                <i class="fa fa-search"></i>
                            </label>
                        </div>
                    </form>
                </div>
            </li>
            <li class="lista">
                <a href="/movie" id="btnhome">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Início</span>  
                </a>
                    <span class="tooltip">Início</span>
            </li>
            <li class="lista">
                <a href="/movie/create">
                <i class="far fa-plus-square"></i>
                    <span class="links_name">Adcionar Filme</span>
                </a>
                    <span class="tooltip">Adcionar</span>
            </li> 
            <li class="profile">
                <div class="profile-details">
                    <img src="/gustavo.png" alt="Foto do usuário">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i id="log_out" ></i>
            </li>
        </ul>
        @yield('sidebar')
    </div>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");
            let searchBtn = document.querySelector("#icone-busca");

            closeBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("open");
                menuBtnChange();
            });

            searchBtn.addEventListener("click", ()=>{ 
                sidebar.classList.toggle("open");
                menuBtnChange(); 
            });

            function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
            }
            }
        </script>
</body>
</html>


