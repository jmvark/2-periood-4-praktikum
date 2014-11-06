<?php
$username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub" ;
$password = isset($_POST["password"]) ? ($_POST["password"]) : "Puudub" ;
 if ($username = $_POST["username"] and $password = $_POST["password"]) {echo "Tere {$username} Teie parool on {$password}";} 
else {echo "Kasutajanimi või parool on puudu.";}
?>
<DOCTYPE! HTML>
<html>
  <head>
  	<title>Praktikum4</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type"text/css" href="style.css">
  </head>
  <body>
  	<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
   <input type="submit" value="saada" name="submit">
</form>
  </body>
</html>