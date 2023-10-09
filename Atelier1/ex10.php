<?php
$randomNumber = rand(1, 100); 
while ($randomNumber % 2 != 0) {
 $randomNumber = rand(1, 100);
}
echo "Le premier entier pair obtenu est : $randomNumber";
?>