<?php include "db.php";

function showAllData()
{
    global $connection;

    $query = "SELECT * FROM users";
    $response = mysqli_query($connection, $query);

    if (!$response) {
        die("Query failed: " . mysqli_error($connection));
    }



    while ($row = mysqli_fetch_assoc($response)) {
        $id = $row["id"];

        echo "<option value='$id'>$id</option>";
    }
}
