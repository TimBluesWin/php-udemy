<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$x = "outside";

function convert(){
    global $x;
    $x = "inside";

}

echo $x;

echo "<br>";

convert();

// $x inside convert is local. Therefore when we echo outside the function, the "inside"
// thing is never actually echoed. Hence the "global" keyword

echo $x;
?>
</body>
</html>