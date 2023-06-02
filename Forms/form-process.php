<?php
if (isset($_POST["submit"])) {

    echo $_POST["username"];
    echo $_POST["password"];

    echo "<br>";
    print_r($_POST);
}
