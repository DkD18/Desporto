<?php
session_start();
/* Verificar se o formulário foi submetido */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $data = filter_input(INPUT_POST, 'data');
    $idequipa = filter_input(INPUT_POST, 'idequipa');

 /* validar os dados recebidos do formulario */
    if (empty($nome) || empty($data) || empty($idequipa)){
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }    
}
else{
   echo " ERRO - Não foi possível executar a operação editar. ";
   exit();
}

/* estabelece a ligação à base de dados */
    $ligacao = mysqli_connect("localhost","root","","clube") or die("Erro ao conectar ao banco de dados requisitado");


/* texto sql da consulta*/
$consulta = "UPDATE treinadores_adjuntos SET nome_a='$nome', dt_nasc='$data', email='$email', idequipa='$idequipa' WHERE id_Adjunto='$id' ";

/* executar a consulta e testar se ocorreu erro */
if (!$ligacao->query($consulta)) {
    echo " ERRO - Falha ao executar a consulta: \"$consulta\" <br>" . $ligacao->error;
    $ligacao->close();  /* fechar a ligação */

}else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    echo "<script>document.location.href='treinadores.php'</script>";
}
$ligacao->close();       /* fechar a ligação */
