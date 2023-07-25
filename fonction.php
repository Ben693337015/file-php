<?php
 function fac($nbr){
   if($nbr==0){
     return(1);
   }else {
     return $nbr*fac($nbr-1);
   }
 }
echo fac(3);

 ?>
