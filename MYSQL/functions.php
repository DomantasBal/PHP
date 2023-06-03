<?php include "db.php";

function showAllData()
{
    // GLOBALS
    global $connection;

    // QUERY
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    // ERROR HANDLING
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    // VIEW RENDER
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];

        echo "<option value='$id'>$id</option>";
    }
}

function createUser()
{
    // GLOBALS
    global $connection;

    // COLLECTING FORM VALUES
    $username = $_POST["username"];
    $password = $_POST["password"];

    // QUERIES
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    // SENDING QUERY TO MYSQL
    $result = mysqli_query($connection, $query);

    // ERROR HANDLING
    if (!$result) {
        die("Query failed");
    }
}



function updateData()
{

    // GLOBALS
    global $connection;

    // COLLECTING FORM VALUES
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    // QUERIES
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    // SENDING QUERY TO MYSQL
    $result = mysqli_query($connection, $query);

    // ERROR HANDLING
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    } else {
        echo "query successful";
    }
}


function deleteUser()
{
    // GLOBALS
    global $connection;

    // COLLECTING FORM VALUE
    $id = $_POST["id"];

    // QUERY
    $query = "DELETE FROM users WHERE id =$id ";

    // SENDING NEW DATA TO SQL
    $result = mysqli_query($connection, $query);

    // ERROR HANDLING
    if (!$result) {
        die("QUERY FAILED") . mysqli_error($connection);
    }
}
