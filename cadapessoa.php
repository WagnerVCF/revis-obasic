<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title>Revisão PHP</title>
</head>

<body>
    <center>Revisão PHP</center>
    <hr />
    <center> <a href="index.php">Voltar</a></center>
    <br /><br />
    <center>
        <?php
            include 'conecta.php';
            $nome = $_POST['nome'];
            $cidade = $_POST['cidade'];
            $sql = "INSERT INTO pessoa(nome,cidade) VALUES ('$nome', '$cidade')";
            if(mysqli_query($conn, $sql)){
                echo "Pessoa cadastrada com sucesso!";
            }else{
                echo    "Pessoa não cadastrada!";
            }
            mysqli_close($conn);
        ?>
    </center>
</body>

</html>