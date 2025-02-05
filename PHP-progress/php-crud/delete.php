<?php
require('./database.php');

if (isset($_POST['delete'])) {
    $deleteId = $_POST['deleteId'];

    $queryDelete = "DELETE FROM accounts WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo '<script>alert("Sucessfully Deleted!")</script>';
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
} else {
    echo '<script>window.location.href = "/php-crud/index.php"</script>';
}
