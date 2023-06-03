<?php
// MAKING CONNECTION WITH MYSQL
$connection = mysqli_connect("localhost", "root", "", "loginapp");

// CONNECTION FAIL RESPONSE
if (!$connection) {
    die("Connection failed");
}
