
<?php
session_start();

if( @$_SESSION["autoriser"]!="oui"){
  header("location:login.php");
  exit();
}
 ?>
<!DOCTYPE html>
<html>
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
      </head>
      <body>
        <h1> page confidentielle <a href="deconnexion.php">Deconnexion</a></h1>
        <div>  Feliçitation ,vous-vous ètes authentifiés avec succès </div>
      </body>
</html>
