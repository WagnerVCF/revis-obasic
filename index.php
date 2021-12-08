<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title>Revisão PHP</title>
</head>

<body>
    <center>Revisão PHP</center>
    <hr/>
    <center> <a href="cadpessoa.php">Cadastrar</a></center>
    <br/><br/>
    <center><table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>
        <tr>
            <?php
                include 'conecta.php';
                $pesquisa = mysqli_query($conn, "SELECT * FROM pessoa");
                $row = mysqli_num_rows($pesquisa);
                if($row > 0){
                    while($pessoa = $pesquisa->fetch_array()){
                        $id = $pessoa['id'];
                        echo    "<tr>";
                        echo    "<td>".$pessoa['id']."</td>";
                        echo    "<td>".$pessoa['nome']."</td>";
                        echo    "<td>".$pessoa['cidade']."</td>";
                        echo    "<td><a href='edita.php?id=$id'>Editar | <a href='excluir.php?id=$id'>Excluir<a/></td>";
                        echo    "</tr>";
                    }
                    mysqli_close($conn);
                }else{
                    echo    "Não há pessoas para listar!!";
                    echo    "</tr>";
                    mysqli_close($conn);
                }
            ?>
        </tr>
    </table></center>
</body>

</html>