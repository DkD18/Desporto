<?php session_start(); 
If (isset($_SESSION['username'])){

   }else{
   echo "<script>document.location.href='index.php'</script>";
   }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inserir Treinador</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 50px;
      font-size: 60px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 15px 0 #3263cd; 
      }
      .banner {
      position: relative;
      height: 260px;
       background-image: url("images/desporto.png"); 
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #3263cd;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 5px 0 #3263cd;
      color: #3263cd;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 28px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.checkbox {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before, label.checkbox:before{
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      label.checkbox:before{ border-radius: 5px}
      input[type=radio]:checked + label:before, label.radio:hover:before,
      input[type=checkbox]:checked + label:before, label.chekbox:hover:before {
      border: 2px solid #3263cd;
      }
      label.radio:after, label.checkbox:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #3263cd;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #3263cd;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #5b82d7;
      }
      @media (min-width: 568px) {
      .name-item, {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, {
      width: calc(50% - 20px);
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="inserirt.php" method="POST">
        <div class="banner">
          <h1>Treinadores</h1>
        </div>
        <div class="item">
          <p>Nome</p>
          <div class="name-item">
            <input type="text" name="nome"  required/>
          </div>
        </div>
        <div class="item">
          <p>Email</p>
          <input type="email" name="email" required/>
        </div>
        <div class="item">
          <p>Data de Nascimento</p>
          <input type="date" name="data" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
         <div class="item">
          <p>Escalões</p>
          <select name="idequipa" required>
              <option value=""></option>
                  <option value="1">1-Séniores: +18 Anos</option>
                    <option value="2">2-Juniores: 16/17 Anos</option>
                     <option value="3">3-Juvenis: 14/15 Anos</option>
                      <option value="4">4-Iniciados: 12/13 Anos</option>
                       <option value="5">5-Infantis: 10/11 Anos</option>
                        <option>
                </select>
        </div>
        <div class="btn-block">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </body>
</html>