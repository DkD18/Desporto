<?php session_start(); 
?>

	<?php
	//Pega os dados da form

        $nome=$_POST["name"];
		$email=$_POST["email"];
		$Telemovel=$_POST["Telemovel"];
		$Mensagem=$_POST["message"];


//verificação dos dados


		//ligação	 
		
        $servername = "localhost";
	    $user = "root";
	    $password = "";
	    $dbname = "clube";

         $conn= mysqli_connect ($servername, $user, $password,$dbname ) or die ("problemas na ligação ao mysql");

          

			//coloca na base de dados o registo

			$sql = "INSERT INTO `conctatos` (`Nome`, `Email`, `NTelemovel`, `Comentario`) VALUES (' $nome','$email','$Telemovel','$Mensagem')";
			if (mysqli_query($conn, $sql)) {
			      echo "<script>document.location.href='index.php'</script>";
			} else {
			      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);



?>

