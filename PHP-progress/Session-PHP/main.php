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
    <form action="/php-basic/main.php" method="post">
        <input type="text" name="username" placeholder="Enter your username"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <button type="submit" name="login" value="Log In">Login</button>
    </form>
</body>

</html>
<?php
if (isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        header("Location: home.php");
    }
}
?>
