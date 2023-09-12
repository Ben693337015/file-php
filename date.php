<?php
//echo date("D/M/Y :w");
//echo "<br/>";
////echo date("H:m:s:a");
//print_r(getdate());

            @$str =$_POST["str"];
            @$valider =$_POST["valider"];
             $message = "";

            if(isset($valider)){
              @$tab = explode("/",$str);
                if(checkdate( $tab[1],$tab[0],$tab[2]))
                    $message ="Date valide";
                    else
                        $message ="Date invalider";

            }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel="stylesheet" type="text/css" href="style.css"/>
   <meta charset="utf-8"/>
</head>
  <body>
    <form name="fo" method="post" action="">
      <input type="text" name="str" value="<?php echo $str ?>"/>
      <input type="submit" name="valider" value="valider" />
    </form>
    <?php echo "$message" ?>
  </body>
 </html>
