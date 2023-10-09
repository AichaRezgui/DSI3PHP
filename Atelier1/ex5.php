<?php
echo "<h1> Calcul sur les variables</h1>";
$TVA=0.2;
$prix=150;
$nombre=10;
echo'</br> le prix HT:'.$prix.'*'.$nombre.'='.$prix*$nombre;
echo'</br> le prix TTC :'.$prix*$nombre*0.2+$prix*$nombre;