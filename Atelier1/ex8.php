<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
</head>
<body>
    <form action='ex8.php' method="post">
    <input type="number" name='nbr'>;
    </form>
    <?php 
     if ($_POST['nbr']%2==0) {
        echo 'le nombre est pair';
     }else {
        echo 'le nombre est impair';
     }
    ?>
</body>
</html>