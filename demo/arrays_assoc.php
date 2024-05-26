<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $number = array(10, 20, 49);

    $names = array('juanita', 'maria', 'jose');

    echo $number[2] . "<br>";

    print_r($names);

    echo "<br>";

    // Associative arrays are used when labeling is important
    $names_list = array("first_name" => 'Edwin', "Last_Name" => 'Diaz');

    //print_r($names_list);

    echo $names_list['first_name'] . ' ' . $names_list['Last_Name'];
    ?>
</body>
</html>