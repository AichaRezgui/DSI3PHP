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
echo "</br><h3> Tableau Tabpays1</h3>";
$tabpays1=["Tunisie","Algerie","France","Egypte","Italie"];
foreach($tabpays1 as $val){
    echo $val." | ";
}
sort($tabpays1);
echo"<h4>trie par ordre alphabétique croissant </h4>";
foreach($tabpays1 as $key=>$val)
{
    echo $val." | ";
}
rsort($tabpays1);
echo" <H4></br>trie par ordre alphabétique decroissant</H4>";
foreach($tabpays1 as $key=>$val)
{
    echo $val." | ";
}
$tabpays2=array("Tunis"=>"Tunisie","Alger"=>"Algerie","Paris"=>"France","Caire"=>"Egypte","Rome"=>"Italie");
echo "</br><h3> Tableau Tabpays2</h3>";
foreach($tabpays2 as $key=>$val){
    echo $key.":".$val." | ";
}
echo"<h4>trie par ordre alphabétique croissant des indices </h4>";
ksort($tabpays2);
foreach($tabpays2 as $key=>$val)
{
    echo $key.":". $val." | ";
}
echo"<h4>trie par ordre alphabétique decroissant des indices </h4>";
krsort($tabpays2);
foreach($tabpays2 as $key=>$val)
{
    echo $key.":". $val." | ";
}
?>
<table border="1" class="table table-info">
    <tr class="table-light">
        <th>Pay</th>
    </tr>
<?php foreach ($tabpays1 as $note) : ?>
            <tr>
                <td><?php echo $note; ?></td>
            </tr>
        <?php endforeach; ?> 
</table>
<table border="1" class="table table-primary">
    <tr class="table-secondary">
        <th>Capital</th>
        <th>Pay</th>
    </tr>
<?php foreach ($tabpays2 as $nom => $note) : ?>
            <tr>
                <td><?php echo $nom; ?></td>
                <td><?php echo $note; ?></td>
            </tr>
        <?php endforeach; ?> 
</table>
</body>
</html>