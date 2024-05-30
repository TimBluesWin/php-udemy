<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>
    <?php 
        // while(4 < 10) {
        //     // This would result in an infinite loop
        //     echo "hello Student";
        // }
        $counter = 0;
        while($counter < 10) {
            echo "hello Student";
            //$counter = $counter + 1;
            $counter++;
        }
    ?>
</body>
</html>