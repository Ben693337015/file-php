<?php

$message="";

if(isset($_POST["valider"])){

  $message ="Nom du fichier: <b>".$_FILES["monfichier"]["name"]."<br/>";

  $message.="Nom temporaire du fichier:<b> ".$_FILES["monfichier"]["tmp_name"]."<br/><br>";

  $message.="Taille du fichier:<b> ".$_FILES["monfichier"]["size"]." octet"."<br/><br>";

 if(move_uploaded_file($_FILES["monfichier"]["tmp_name"],"/Images".$_FILES["monfichier"]["name"])){

  chmod("/Images/".$_FILES["monfichier"]["name"],0644);

}else {
  $message.="Erreur de chargement du fichier";
}


}
 ?>
<!ƊOCTYPE html>
<html>
    <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <h1> Upload </h1>
      <form name="fo" method="post" action="" enctype="multipart/form-data">
        <input type="file" name="monfichier" /><br/>
        <input type="submit" name="valider" value="charger"/>
      </form>
      <div>
        <?php
        echo $message;
         ?>
      </div>
    </body>
    </html>
