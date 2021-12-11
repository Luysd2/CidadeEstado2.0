<?php
//define('HOST', '127.0.0.1');
//define('USUARIO', 'root');
//define('SENHA', '');
//define('DB', 'CidadeEstado2');
/* definindo o banco de dados com seus campos */

//$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die("Não foi possivel conectar");
/* fazendo a conexão com o banco de dados */

$server = "127.0.0.1";
$user = "root";
$pass = "";
$bd = "CidadeEstado2";

//$conn =  mysqli_connect($server, $user, $pass, $bd);

if($conn = mysqli_connect($server, $user, $pass, $bd)){
    //echo "deu certo";
}else{
    //echo "deu errado";
}
?>