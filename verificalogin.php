<?php session_start(); ?>

<html>
<body>

	<?php

		$username=$_POST["username"];
		$password=$_POST["password"];
		
		//verificação dos dados
		$erro=0;

		if (empty($username)==True) {
			$erro=1;
			echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/login.php'>
					<script type=\"text/javascript\">
						alert(\"Username Errado.\");
					</script>
				";	
		}

		if (empty($password)==True) {
			$erro=2;
			echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/login.php'>
					<script type=\"text/javascript\">
						alert(\"Password Errada.\");
					</script>
				";	
		}
		
		//ligação	 
		if ($erro==0) {
			$servidor="localhost";
			$user="root";
			$senha="";
			$bdname="clube";
			$ligação= mysqli_connect ($servidor, $user, $senha, $bdname ) or die ("problemas na ligação ao mysql");

			//confirma se o username asociado á palavra passe existe.
			$vUser= ("SELECT Username FROM Admin WHERE Username='$username' AND Password='$password'");
			$result= mysqli_query($ligação,$vUser);
			$resultCheck=mysqli_num_rows($result);

			if ($resultCheck>0) {
				$_SESSION['username']= $username;
    		    $_SESSION['password']= $password;
				echo "<script>document.location.href='Home.php'</script>";

				
			}else{
				$erro=3;
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/site desporto/login.php'>
					<script type=\"text/javascript\">
						alert(\"Login Incorreto.\");
					</script>
				";	
			 // echo "Login Incorreto";;

				
			}
		}	
	?>

</body>
</html>