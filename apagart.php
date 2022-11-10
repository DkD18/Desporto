<?php 
session_start();
/* Verificar se foi enviado o pedido para eliminar  */
$con = mysqli_connect("localhost","root","","clube") or die("Erro ao conectar ao banco de dados requisitado");

$id=$_POST["elim"];

if(!empty($id)){
	$result_usuario = "DELETE FROM treinadores WHERE id_treinador='$id'"; 
	$resultado_usuario = mysqli_query($con, $result_usuario);
	if(mysqli_affected_rows($con)){
		echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/treinadores.php'>
					<script type=\"text/javascript\">
						alert(\"Apagado com Sucesso.\");
					</script>
				";	
	}else{
		echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/treinadores.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao apagar Treinador.\");
					</script>
				";	
				}
}else{	
	echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/treinadores.php'>
					<script type=\"text/javascript\">
						alert(\"Selecione um Treinador.\");
					</script>
				";	
}