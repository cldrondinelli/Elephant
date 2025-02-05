<?php
require('./database.php');

if (isset($_POST['edit'])) {
    $editId = $_POST['editId'] ?? '';
    $editUsername = $_POST['editUsername'] ?? '';
    $editPassword = $_POST['editPassword'] ?? '';
}

if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE accounts SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Sucessfully Updated!")</script>';
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE USER</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .update-main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 10px;
        }

        .update-main input {
            margin: 5px;
            padding: 5px;
        }

        .read-main {
            width: 80%;
        }
    </style>
</head>

<body>
    <div class="main">
        <form class="update-main" action="/php-crud/update.php" method="post">
            <h3>UPDATE USER</h3>
            <input type="text" name="updateUsername" placeholder="Enter your username" value="<?php echo $editUsername ?>" required>
            <input type="password" name="updatePassword" placeholder="Enter your password" value="<?php echo $editPassword ?>" required>
            <input type="submit" name="update" value="UPDATE">
            <input type="hidden" name="updateId" value=" <?php echo $editId ?>">
        </form>
    </div>
</body>

</html>