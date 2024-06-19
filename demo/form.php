<?php 
if(isset($_POST['submit']))
{
    echo "yess it works!" . "<br>";
}
if(isset($_POST['username']))
{
    echo $_POST['username'] . "<br>";
}
if(isset($_POST['password']))
{
    echo $_POST['password'] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <br>
        <input type="submit" name='submit'>
    </form>
</body>
</html>