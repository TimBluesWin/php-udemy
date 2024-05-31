<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Make it very descriptive!
    function init(){

        // function can also be called inside function

        calculate();
        say_Something();
    }

    function calculate(){
        echo 456 + 345;
    }

    function say_Something(){
        echo "Hello Student, do you like the class? yes? okay great!";
    }

    init();

    // One purpose of function is to help initialize something.
    ?>
</body>
</html>