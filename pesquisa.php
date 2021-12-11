<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
</head>
<body>
    <?php
    $pesquisa = $_POST['busca'] ?? '';
    include "conexao.php";

    $sql = "SELECT * FROM cidadeestado WHERE cidade LIKE '%$pesquisa%'";
    $dados = mysqli_query($conn , $sql);

    ?>
  
    <form action="pesquisa.php" method="POST">
        <h3>Pesquisar cadastros </h3>
        <a href="cadastro.php">Cadastrar</a><br><br>

        <a href="index.php"> Voltar </a>
        <br><br>

        <input type="search" name="busca" placeholder="Pesquisar cidade" autofocus>
        <input type="submit">

        <tbody>
        <?php
            while($linha = mysqli_fetch_assoc($dados)){
                $cod_id = $linha['idcidadeestado'];
                $estado = $linha['estado'];
                $cidade = $linha['cidade'];
                //$data_cadastro = $linha['data_cadastro'];

                echo "<ol>
                        <li>$estado</li>
                        <li>$cidade</li>
                        <li><a href='cadastro_edit.php?id=$cod_id'>Editar</a>  <a href='excluir.php?id=$cod_id'>Excluir</a> </li>
                    </ol>";
            }

            
            ?>
        </tbody>
    </form>
</body>
</html>