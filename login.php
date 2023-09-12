
<?php  session_start(); ?>
<h1>page s2</h1>
<?php
 @$login =$_POST["login"];
 @$pass =$_POST["pass"];
 @$valider=$_POST["valider"];
 $erreur="";

 if (isset($valider)) {
   if($login=="user" && $pass=="123"){
     //header("location:session.php");
     $_SESSION["autoriser"]="oui";
      header("location:session.php");
   }else {
    $erreur = "Mauvais login ou mot de passe";
   }

 }

  ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
      <header>Inscription</header>
      <form name="fo" method="post" action="">
        <div class="label">login</div>
        <input type="text" name="login" value="<?php  echo "$login"; ?>"/>
        <br/>
        <div class="label"> Mot de passe </div>
        <input type="password" name="pass"  value="$pass"><br/>
        <input type="submit" name="valider" value="s'authentifier"/>

      </form>
      <?php  if(!empty($erreur)){ ?>
        <div id="erreur">
        <? echo $erreur ?>;
        </div>
    <?php  } ?>

    </body>
</html>
