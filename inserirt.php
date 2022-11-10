<html>
<head>
</head>
<body>

	<?php
	//Pega os dados da form
   
        $nome=$_POST["nome"];
		$email=$_POST["email"];
		$data=$_POST["data"];
		$idequipa=$_POST["idequipa"];


	


		//ligação	
        $servername = "localhost";
	    $user = "root";
	    $password = "";
	    $dbname = "clube";

         $conn= mysqli_connect ($servername, $user, $password,$dbname ) or die ("problemas na ligação ao mysql");

           //confirma se o email ja esta a ser utilizado.
			$vUser= "SELECT email FROM treinadores WHERE email ='$email'";
			$result= mysqli_query($conn,$vUser);
			$resultCheck=mysqli_num_rows($result);
			

			if ($resultCheck>0) {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/treinadores.php'>
					<script type=\"text/javascript\">
						alert(\"O Email já está a ser utilizado.\");
					</script>
					";
                }

			
			$vUser= "SELECT idequipa FROM treinadores WHERE idequipa ='$idequipa'";
			$result= mysqli_query($conn,$vUser);
			$resultCheck=mysqli_num_rows($result);
			

			if ($resultCheck>0) {
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/treinadores.php'>
					<script type=\"text/javascript\">
						alert(\"Já existe um treinador nessa equipa.\");
					</script>
					";
			}else{
				$sql = "INSERT INTO `treinadores`( `nome_t`, `dt_nasc`, `email`, `idequipa`) VALUES ('$nome','$data', '$email','$idequipa')";
			if (mysqli_query($conn, $sql)) {
			      echo "<script>document.location.href='treinadores.php'</script>";$erro=1;
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
