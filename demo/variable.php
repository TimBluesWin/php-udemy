<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Timmy";
        $number = 100;

        //best practice: camelCase (all lowercase, but second and subsequent words are capitalized.)

        $number_List = 100.7; // float

        // $0number = 100; -> not allowed too.

        // $num-ber = 100;

        $NUMBER = 100;
        $NUMBeR = "100"; // number as string

        // variables are case sensitive

        //$num-ber is not an okay variable because people will think it will substract

        echo $name . " " . $number;

        $name = "<H1>HELLO</H1>"; //use html tags inside variable

        echo $name;
    ?>
</body>
</html>