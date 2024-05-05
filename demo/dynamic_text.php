<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // if we want to make this variable appear in many pages, I believe we have to store the variable
        // in a config file, and then we can use include function.
        $title = "Timmy's official site";
    ?>
    <!-- <h1>Hello Student</h1> -->
    <h1><?php echo $title; ?></h1>
</body>
</html>