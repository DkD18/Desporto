<html>
<head>
</head>
<body>

	<?php
	//Pega os dados da form
   
        $nome=$_POST["nome"];
		$idade=$_POST["idade"];
		$nif=$_POST["nif"];
		$sexo=$_POST["sexo"];
		$data=$_POST["data"];
		$ecd=$_POST["ecd"];
		$idequipa=$_POST["idequipa"];


	


		//ligação	
        $servername = "localhost";
	    $user = "root";
	    $password = "";
	    $dbname = "clube";

         $conn= mysqli_connect ($servername, $user, $password,$dbname ) or die ("problemas na ligação ao mysql");

           //confirma se o username ja esta a ser utilizado.
			$vUser= "SELECT NIF FROM atletas WHERE NIF ='$nif'";
			$result= mysqli_query($conn,$vUser);
			$resultCheck=mysqli_num_rows($result);
			
         if ($resultCheck>0) {
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/atletas.php'>
					<script type=\"text/javascript\">
						alert(\"O NIF já está a ser utilizado.\");
					</script>
				";	
			}else{
				$sql = "INSERT INTO `atletas`(`Nome`, `idade`, `NIF`, `Sexo`, `data_inscricao`, `Nome_Encarregado_Educacao`, `id_equipa`) VALUES ('$nome', '$idade','$nif', '$sexo','$data', '$ecd' , '$idequipa')";
			if (mysqli_query($conn, $sql)) {
			      echo "<script>document.location.href='atletas.php'</script>";$erro=1;
			} else {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

			}
	
	
?>
</body>	
</html>
<br>
<br>
