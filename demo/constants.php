<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = 10;
        $number = 1000;
        echo $number . "<br>";

        define("NAME", "Timmy");

        //This would be an error because constant cannot be changed.
        // NAME = 2000;

        // echo NAME;
    ?>
</body>
</html>