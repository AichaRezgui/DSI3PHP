<DOCTYPE! >
   <HTML>
    <HEAD LANG="eng">
</HEAD>
<BODY> 
<?php
$a=1; // type int 
$b=1.5 ;// type float
$classe = "l2dsi3";// type string
$ok= true ; // type bool
echo"<H2>Bonjour tout le monde</H2>";
echo"<H2>Bonjour $classe </H2>";
echo'<H2>Bonjour '.$classe.'</H2>';
echo "<script> alert('bonjour')</script>";
// commentaire seul ligne
# commentaire seul ligne
/* commentaire plusieur ligne*/ 
?>
 <SCRIPT> 
      alert('bonjour <?= $classe ?>')//alert('bonjour <? echo" $classe" ?>')
</SCRIPT>
</BODY>
</HTML>

