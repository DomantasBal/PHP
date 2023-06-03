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

function updateData()
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $id = $_POST["id"];

    // QUERY TO SQL
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    global $connection;
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    } else {
        echo "query successful";
    }
}


function deleteUser()
{
    global $connection;
    $id = $_POST["id"];

    $query = "DELETE FROM users WHERE id =$id ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("QUERY FAILED") . mysqli_error($connection);
    }
}
