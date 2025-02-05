<?php
require('./read.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .create-main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 10px;
        }

        .create-main input {
            margin: 5px;
            padding: 5px;
        }

        .read-main {
            width: 80%;
        }

        .read-main th {
            padding: 5px;
        }

        .read-main td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main">
        <form class="create-main" action="/php-crud/create.php" method="post">
            <h3>CREATE USER</h3>
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="submit" name="create" value="CREATE">
        </form>

        <table class="read-main">
            <tr>
                <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
                <th><a href="?column=username&sort=<?php echo $sort ?>">USERNAME</a></th>
                <th><a href="?column=password&sort=<?php echo $sort ?>">PASSWORD</a></th>
                <th>ACTIONS</th>
            </tr>
            <?php while ($results = mysqli_fetch_array($sqlAccounts)) { ?>
                <tr>
                    <td><?php echo $results['id'] ?></td>
                    <td><?php echo $results['username'] ?></td>
                    <td><?php echo $results['password'] ?></td>
                    <td>
                        <form action="/php-crud/update.php" method="post">
                            <input type="submit" name="edit" value="EDIT">
                            <input type="hidden" name="ediId" value="<?php echo $results['id'] ?>">
                            <input type="hidden" name="editUsername" value="<?php echo $results['username'] ?>">
                            <input type="hidden" name="editPassword" value="<?php echo $results['password'] ?>">

                        </form>
                        <form action="/php-crud/delete.php" method="post">
                            <input type="submit" name="delete" value="DELETE">
                            <input type="hidden" name="deleteId" value="<?php echo $results['id'] ?>">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>