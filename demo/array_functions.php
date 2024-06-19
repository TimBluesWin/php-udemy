<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $list = [343, 34, 323, 23, 54, 232, 453];

        echo max($list); // maximum in array

        echo "<br>";
        
        echo min($list); // minimum in array

        echo "<br>";

        echo print_r($list); // print the array

        sort($list);

        echo "<br>";
    ?>
</body>
</html>