<?php
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $dbname = "adaptips";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_movies = "SELECT * FROM movies WHERE name LIKE '%$pesquisar%' LIMIT 5";
    $resultado_movies = mysqli_query($conn, $result_movies);
    
    while($rows_movies = mysqli_fetch_array($resultado_movies)){
        echo "Nome do filme: ".$rows_movies['name']."<br>";
    }
?>