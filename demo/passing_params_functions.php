<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function greeting($message){
        echo $message;
    }

    greeting("Hello student");

    function add_numbers($number1, $number2)
    {
        $sum = $number1 + $number2;
        echo $sum;
    }
    add_numbers(48, 100);
    ?>
</body>
</html>