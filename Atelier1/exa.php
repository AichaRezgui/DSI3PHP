<?php
$j=rand(1,8);
switch($j){
    case'1' : echo"Lundi";
      break;
    case'2' : echo"Mardi";
    break;
    case'3' : echo"Mercredi";
    break;
    case'4' : echo"jeudi";
    break;
    case'5' : echo"Vendredi";
    break;
    case'6' : echo"Samedi";
    break;
    case'7': echo"dimanche";
    break;
}
print"<br>";
$x=rand(0,4);
switch($x){
    case '0' :
    case '1' :
    case '2' :
         echo"$x est inférieure a 3";
    break;
    case'3' : echo"$x est egale a 3";
    break;
    case'4' : echo"$x est superieure a 3";
    break;

}

?>