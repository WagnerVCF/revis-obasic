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
        $id = $_GET['id'];
        $sql = "SELECT * FROM pessoa WHERE id=$id";
        $query = $conn->query($sql);
        while ($dados = $query->fetch_assoc()) {
            $id = $dados['id'];
            $nome = $dados['nome'];
            $cidade = $dados['cidade'];
        }
        ?>
        <form action="index.php?id=<?php echo $id; ?>" method="POST">
            Nome<br />
            <input type="text" name="nome" value="<?php echo $nome; ?>" /><br />
            Cidade<br />
            <input type="text" name="cidade" value="<?php echo $cidade; ?>" /><br /><br />
            <input type="submit" value="Atualizar" /><br />
    </center>
</body>

</html>