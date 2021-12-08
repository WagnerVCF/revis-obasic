<?php
    $conn = mysqli_connect("localhost", "root", "", "reserva");
    mysqli_set_charset($conn, "utf8");
    if(!$conn){
        echo "Erro de conexão com o BD: ".mysqli_connect_error();
    }
    
    // else {
    //    echo "Conexão bem sucedida!"; teste conexão
    //}
?>