<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
    }
?>