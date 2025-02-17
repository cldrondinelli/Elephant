<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Home</h1>
    <form action="/php-basic/main.php">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>

</html>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: main.php");
}
?>
