<?php
@$chaine= $_POST["chaine"];
@$valider= $_POST["valider"];
$resul="";
if (isset($valider)) {
  $resul=ord($chaine);

}

 ?>
<!DOCTYPE html>
<html lang="fr">

  <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>character</title>
  </head>
  <body>
  <section>
    <form class="fo" action="" method="post">
      <div class="label">Éntre une chaine de character</div>
      <div class="input">
        <input type="text" name="chaine" value="<?php echo "$chaine"; ?>">
        <input type="submit" name="valider" value="chercher">
      </div>
    </form>
  </section>
  <?php
  echo "    $resul";
   ?>
  </body>
</html>
