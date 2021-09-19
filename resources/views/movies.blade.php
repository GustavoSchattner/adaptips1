    @extends('layout.template')
    @section('title', 'Page Title')
    @section('content')

<header>
    @section('navbar')
    @endsection
</header>
<body>
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
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">User</span>
                </a>
                    <span class="tooltip">User</span>
            </li>
            <li class="lista">
                <a href="/movie/create">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Adcionar Filme</span>
                </a>
                    <span class="tooltip">Adcionar</span>
            </li>
            <li class="lista">
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Setting</span>
                </a>
                    <span class="tooltip">Setting</span>
            </li>     
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out" ></i>
            </li>
        </ul>
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

            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
            if(sidebar.classList.contains("open")){
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
                closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
            }
        </script>
        <div class="home-section">
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

