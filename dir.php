<?php
$id =opendir("./");
//echo getcwd();

//$tab=scandir("./");
//foreach ($tab as $val) {
//  echo " ".$val."<br>";
//  echo filetype($val);
   exec("ifconfig",$tab);
   foreach ($tab as $val) {
     echo $val."<br>";
   }
   // exec("",$tab);
   // foreach ($tab as $val) {
   //   echo $val."<br>";
   // }
//echo exec("ifconfig");

 ?>
