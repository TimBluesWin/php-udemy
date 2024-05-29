<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Comparison operators</h2>
    <pre>
        equal == (Only value, not data type)
        identical === (value and data type)
        comparison > (larger than), < (smaller than), >= (larger than or equal), <= (smaller than or equal)
        not equal != (only value)
        not identical !== (value and data type)
    </pre>

    <h2>Logical operators</h2>
    And: &&
    Or: ||
    Not: !
    <?php 
    if(4 < 4) {
        echo "<br>it is true";
        // this will not appear
    }
    if(4 <= 4) {
        echo "<br>it is true";
        // this appear
    }
    if( 4 == 4) {
        echo "<br> it is true";
        // this appear
    }
    if( 4 > 4) {
        echo "<br> it is true";
        // This will not appear
    }
    if(4 != 4) {
        echo "<br> it is true";
        // This will not appear
    }
    if(4 != 5) {
        echo "<br> it is true";
        // This will appear
    }
    
    if(4 === 4) {
        echo "<br> it is true";
        // This will appear
    }

    if(4 === "4") {
        echo "<br> it is true";
        // This will not appear because one is number, one is string
    }

    if(4 === "4" || 5 < 10) {
        echo "<br> it is true";
        // This will appear because of or
    }

    if(4 === "4" && 5 < 10) {
        echo "<br> it is true";
        // This will not appear because of and
    }

    if(4 === 4 && 5 < 10) {
        echo "<br> it is true";
        // This will not appear because of and
    }
    ?>
</body>
</html>