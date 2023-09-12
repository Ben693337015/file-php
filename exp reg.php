<?php
@$str =$_POST["str"];
@$valider= $_POST["valider"];
$erreur="";

if (isset($valider)) {
  if (preg_match("#[0-9][A-Z]#",$str)) {
  $erreur ="<div style=' background-color:green'> Bravo chaine valider</div>";
}else {
  $erreur ="<li style=' background-color:red'>chaine invalider</li>";

}

}


 ?>
<!DOCTYPE html>
<html>
    <head>
      <title>expresion regulier </title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <form class="fo" method="post" action="">
        <div class="label">ENTREZ UNE CHAINNE SVP :</div>
        <input type="text" name="str" value="<?php echo $str; ?>">
        <input type="submit" name="valider" value="envoyer" >
      </form>
    </body>
    <?php echo $erreur; ?>
</html>
