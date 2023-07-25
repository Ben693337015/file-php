<?php
include("form.php");

//@$valider =$_POST["valider"];

$erreur="";
if(isset($valider)){
        if (empty($nom)) $erreur="<li>nom laissé vider</li>";
        if (empty($prenom)) $erreur.="<li>prenom laissé vider</li>";
        if (!is_numeric($age)) $erreur.="<li>àge invalider!</li>";
}
?>

<!DOCTYPE html>
<html>
    <head>
      <title>inscription</title>
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <meta charset="utf-8"/>
    </head>
    <body>
      <header>Inscription</header>
      <section>
          <form name="fo" method="post" action="">
            <div class="label">NOM</div>
            <div class="input">
              <input type="text" name="nom"/>
            </div>

            <div class="label">PRENOM</div>
            <div class="input">
              <input type="text" name="prenom"/>
            </div>

            <div class="label">Àge</div>
            <div class="input">
              <input type="number" min="10" name="age"/>
            </div>

            <div class="input">
              <input type="submit" name="valider" value="M'inscrire"/>
            </div>
          </form>

          <?php if(!empty($erreur)){?>
          <div id="erreur">
            <?php echo "$erreur";   ?>
          <?php } ?>
          </div>
      </section>
    </body>
</html>
