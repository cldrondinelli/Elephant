<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Name: $name <br>";
    echo "Age: $age <br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <form action="/php-basic/index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="submit" value="CLICK">
    </form>
</body>

</html>