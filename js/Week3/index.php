<?php
session_start();
require_once "pdo.php";
if (!isset($_SESSION['name'])) {
    header("Location: loginscreen.php");
    return;
}
$stmt = $pdo->query("SELECT profile_id, first_name,last_name , headline from users join Profile on users.user_id = Profile.user_id");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Domantas Balciunas 5ad39ace Resume Registry</title>
    <?php require_once "bootstrap.php"; ?>
</head>

<body>
    <div class="container">
        <h2>Domantas Balciunas (5ad39ace) Resume Registry</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p style="color:red">' . $_SESSION['error'] . "</p>\n";
            unset($_SESSION['error']);
        }
        ?>
        <?php
        if (isset($_SESSION['success'])) {
            echo ('<p style="color: green;">' . htmlentities($_SESSION['success']) . "</p>\n");
            unset($_SESSION['success']);
        }
        ?>

        <ul>

            <?php
            if (!isset($_SESSION['name'])) {
                echo "<p><a href='login.php'>Please log in</a></p>";
            }
            if (true) {
                if (true) {
                    echo "<table border='1'>";
                    echo " <thead><tr>";
                    echo "<th>Name</th>";
                    echo " <th>Headline</th>";
                    if (isset($_SESSION['name'])) {
                        echo ("<th>Action</th>");
                    }
                    echo " </tr></thead>";
                    foreach ($rows as $row) {
                        echo "<tr><td>";
                        echo ("<a href='view.php?profile_id=" . $row['profile_id'] . "'>" . $row['first_name'] . $row['last_name']  . "</a>");
                        echo ("</td><td>");
                        echo ($row['headline']);
                        echo ("</td>");
                        if (isset($_SESSION['name'])) {
                            echo ("<td>");
                            echo ('<a href="edit.php?profile_id=' . $row['profile_id'] . '">Edit</a> / <a href="delete.php?profile_id=' . $row['profile_id'] . '">Delete</a>');
                        }
                        echo ("</td></tr>\n");
                    }
                    echo "</table>";
                } else {
                    echo 'No rows found';
                }
            }
            echo '</li></ul>';
            ?>
            <a href="add.php">Add New Entry</a> |
            <a href="logout.php">Logout</a>

    </div>
</body>

</html>