<?php
include "db.php";

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

    // PREPARED STATEMENT
    $query = "INSERT INTO users (username, password) VALUES (?, ?)";
    $statement = mysqli_prepare($connection, $query);


    // PASSWORD ENCRYPTION
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    // BIND PARAMETERS
    mysqli_stmt_bind_param($statement, "ss", $username, $password);

    // EXECUTE STATEMENT
    $result = mysqli_stmt_execute($statement);

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

    // PREPARED STATEMENT
    $query = "UPDATE users SET username = ?, password = ? WHERE id = ?";
    $statement = mysqli_prepare($connection, $query);

    // BIND PARAMETERS
    mysqli_stmt_bind_param($statement, "ssi", $username, $password, $id);

    // EXECUTE STATEMENT
    $result = mysqli_stmt_execute($statement);

    // ERROR HANDLING
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        echo "Query successful";
    }
}

function deleteUser()
{
    // GLOBALS
    global $connection;

    // COLLECTING FORM VALUE
    $id = $_POST["id"];

    // PREPARED STATEMENT
    $query = "DELETE FROM users WHERE id = ?";
    $statement = mysqli_prepare($connection, $query);

    // BIND PARAMETERS
    mysqli_stmt_bind_param($statement, "i", $id);

    // EXECUTE STATEMENT
    $result = mysqli_stmt_execute($statement);

    // ERROR HANDLING
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }
}
