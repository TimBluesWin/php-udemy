<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo 56 + 45;
        echo "<br>";
        echo 56 - 45;
        echo "<br>";
        echo 56 * 45;
        echo "<br>";
        echo 56 / 45;
        echo "<br>";
        echo "<br>";
        echo 45 + 34 * 45 / 421 - 45;
        echo "<br>";
        echo 5 + 5 * 10; // operator precedence
        echo "<br>";
        echo 5 + 5 / 10; // operator precedence
        echo "<br>";
        echo (5 + 5) * 10; // brackets for forcing certain operations to be carried out first.
        echo "<br>";

        $number1 = 12;
        $number2 = 24;
        
        echo $number1 + $number2;
        echo "<br>";
        echo $number1 * $number2;
    ?>
</body>
</html>