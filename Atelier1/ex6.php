<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function add(val1, val2) {
            document.write('Le résultat est ' + (val1 + val2));
        }
    </script>

    <form>
        <input type="number" name='valeur1'>
        <?php echo "+";?>
        <input type="number" name='valeur2'>
        <input type="button" value="Calculer" id="calculateButton">
    </form>

    <script>
        document.getElementById('calculateButton').addEventListener('click', function() {
            var a = parseInt(document.getElementsByName('valeur1')[0].value);
            var b = parseInt(document.getElementsByName('valeur2')[0].value);
            add(a, b);
        });
    </script>
</body>
</html>
