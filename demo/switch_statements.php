<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // $number = 4;
        // if($number < 10) {
        //     echo "this";
        // }
        // if($number < 20) {
        //     echo "this";
        // }
        // if($number < 40) {
        //     echo "this";
        // }
        // Too many if statements!

        $number = 10;
        switch($number){
            case 34:
                echo "is it 34";
                break;
            case 37:
                echo "is it 34";
                break;
            case 35:
                echo "is it 34";
                break;
            case 24:
                echo "is it 34";
                break;
            default:
                echo "we couldn't find anything";
        }
    ?>
</body>
</html>