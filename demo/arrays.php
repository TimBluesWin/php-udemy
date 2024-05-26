<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $numberList = array(267, 8765, 345, '5345', 345, '<h1>Hello</h1>');

    print_r($numberList);

    //echo $numberList[0];

    echo '<br>';
    echo $numberList[1];
    echo '<br>';
    echo $numberList[2];
    echo '<br>';
    echo $numberList[3];
    echo '<br>';
    echo $numberList[4];
    echo '<br>';
    echo $numberList[5];

    $numberListModified = [2, 34, 2, 4];

    ?>
</body>
</html>