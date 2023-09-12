<?php
// connexion à une base de donné avec mysqli

 $id = @mysqli_connect("localhost","AZIZ","AZIZ123","tutophp") or die("Erreure de connexion");

// @$req = $_POST["rq"];
// @$valider = $_POST["valider"];
//  $message="";

 // if (isset($valider)) {
 //   if(empty($req)){
   mysqli_query($id,"insert into YAHYA (nom,type) values ('American','last year')");
//    $message="Requet prise en compte";
//  }else {
//    $message="Requet ne pas bien formule";
//
//   }
// }


 //
 //
 ?>
