<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<?php
$notes=array("Rami"=>7.50,"Mohamed"=>19.00,"Amira"=>15.50,"Asma"=>10.00,"Ahmed"=>09.5,
"Yassine"=>15.5,"Islem"=>12.00,);
foreach($notes as $key=>$val)
{
    if ($val>=10) {
        echo $key."</br>";
    }
}
$nbr=count($notes);
echo "Le nombre d'Etudiants :  ".$nbr;
$m=0;
$n="";
foreach($notes as $key=>$val)
{
    if ($val>$m) {
        $m=$val;
        $n=$key;
    }
}
echo "</br>l'etudiant qui a la meilleur note :".$n;
?>
<table border="1" class="table table-secondary">
    <tr class="table-primary">
        <th>Nom</th>
        <th>Note en PHP</th>
    </tr>
    <?php foreach ($notes as $nom => $note) : ?>
            <tr>
                <td><?php echo $nom; ?></td>
                <td><?php echo $note; ?></td>
            </tr>
        <?php endforeach; ?> 
</table>
<?php 
echo"<b> trie selon un ordre croisant des notes</b></br>";
        asort($notes);
        foreach($notes as $key=>$val)
        {
            echo $key." ".$val."</br>";
        }
 echo"<b> trie selon un ordre décroisant des noms</b></br>";  
        krsort($notes);
        foreach($notes as $key=>$val)
        {
            echo $key." ".$val."</br>";
        }
echo "la moyenne des notes est = ";
$somme=array_sum($notes);
echo $somme/$nbr;
?>
</body>
</html>