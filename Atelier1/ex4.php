<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $nom='Rezgui';
      $pre='Aicha';
      echo $nom,$pre ;
      echo '</br>'.$nom.'</br>'.$pre;
    ?>
    <table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <tr>
            <td><?=$nom?></td>
            <td><?=$pre?></td>
        </tr>
    </table>
    <?php
      $info=$nom.' '.$pre;
    ?>
    <script>
        alert(<?=$info?>);
    </script>
</body>
</html>