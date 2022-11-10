<?php session_start(); 
  If (isset($_SESSION['username'])){

   }else{
   echo "<script>document.location.href='index.php'</script>";
   }

?>

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->

 <link rel="icon" type="image/png" href="images/icons/bola.ico"/>
   <title>Home</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>

      <style>
        #divBusca{
  background-color:#01010a;
  border:solid 2px #5F9EA0;
  border-radius:10px;
  width:300px;
  height:32px;
}

#txtBusca{
  float:left;
  background-color:transparent;
  padding-left:5px;
  font-size:18px;
  border:none;
  height:32px;
  width:191px;
}

#btnBusca{
  border:none;
  float:left;
  height:32px;
  border-radius:0 7px 7px 0;
  width:70px;
  font-weight:bold;
  background:#5F9EA0;
}

#divBusca img{
  float:left;
}
      ></style>
      <!-- END LOADER -->
       <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                            
                           </div>
                        </div>
                     </div>
                     <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                   <a href="logout.php" class="login"><i class="fa fa-user"></i>Logout</a>
                              </li>
                           </ul>
                           <!-- end button section -->
                     <div class="col-md-6">
                        <div class="right_top_section">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                     <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="Home.php">Home</a></li>
                                          <li><a href="atletas.php">Atletas</a></li>
                                          <li><a href="treinadores.php">Treinadores</a></li>
                                             <li><a href="medico.php">Departamento Médico</a></li>
                                              <li><a href="socios.php">Sócios</a></li>
                                              <li><a href="staff.php">Staff</a></li>
                                          <li><a href="mensagem.php">Mensagens</a></li>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
                                    <!-- /.nav-collapse -->
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
      </section>
 <div class="inner-information-text">
            <div class="container">
               <h3>Jogos</h3>
                <ul class="breadcrumb">
         <form method="POST" action="pesquisarjogos.php" align="center">
        <div id="divBusca">
        <input type="text" id="txtBusca"  name="pesquisar" placeholder="Buscar..."/>
        <button id="btnBusca" type="submit">Buscar</button>
      </div>

               </ul>
            </div>
         </div>
      <?php 
$servidor="localhost";
         $user="root";
         $senha="";
         $bdname="clube";
         $connect= mysqli_connect ($servidor, $user, $senha, $bdname ) or die ("problemas na ligação ao mysql");

         $sql = "SELECT * FROM jogos Inner join equipas where equipas.id_equipa=jogos.equipalocal "; 
         $qry = mysqli_query($connect, $sql); 
         echo "<table class='table table-bordered table-responsive schedule-table' bgcolor='white'>"; 
         echo "<tr><th>Nossa Equipa</th>
         <th>Equipa Adversária</th>
         <th>Escalão</th>
         <th>Data</th>
         <th>Hora</th>
         <th>Resultado</th> 
         <th>Local</th>
         <th>Departamento Médico</th></tr>"; 
         while ($row = mysqli_fetch_assoc($qry)) 
            printf("<tr></tr><tr><td>"  . $row["Nome_Local"] . "</td><td>" . $row["Nome_Fora"] . "</td><td>" . $row["Escalao"] . "</td><td>" . $row["Data"] . "</td><td>" . $row["Hora"] . "</td><td>" . $row["Resultado"] .  "</td><td>" . $row["local"] . "</td><td>" . $row["Id_Dep"] .   "</td></tr>"); 
         echo "</table>";
          mysqli_free_result($qry);
           mysqli_close($connect); 
           ?>
   </form>

      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="images/logoclube.png" alt="#" /></a>
                        </div>
                        <p></p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="facebook.com/Saavedra-Guedes-1504683079845270" target="blank"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="https://twitter.com/_diioguinho18_" target="blank"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="https://www.youtube.com/watch?v=gGhXdU6VIXA" target="blank"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.php">Sobre Nós</a></li>
                             <li><a href="contacto.php">Conctate nos</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Conctate nos</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Local: R. Prof. Saavedra Guedes 33, 3860-465 Pardilhó</li>
                           <li><i class="fa fa-phone"></i>(+351) 234 286 352 </li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> acrsaavedraguedes@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">

                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2020 Diogo Oliveira.</p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>
</html>

<script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette6",Message:"Este site usa cookies para garantir que você obtenha a melhor  experiência em nosso site.",LinkText:"Mais Sobre!",ButtonText:"Aceitar",Location:"https://www.php.net/manual/pt_BR/features.cookies.php",Time:"1",})</script>