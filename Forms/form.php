<?php
if (isset($_POST["submit"])) {

    $mockDatabase = array(
        $username = $_POST["username"],
        $password = $_POST["password"]
    );

    foreach ($mockDatabase as $data) {
        validateLength($data);
    }
}

function validateLength($userInput)
{
    if (strlen($userInput) < 3) {
        "username or pass has to be more than 3 letters";
    }
}

function loginCheck($mockDatabase)
{
    if ($mockDatabase[0] == "Dom" && $mockDatabase[1] == "pass123") {
        echo "Congrats this is the worst login form ever!";
    }
}

loginCheck($mockDatabase);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="form.php" method="post">

        <input name="username" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">
        <br>
        <input type="submit" name="submit">

    </form>




</body>

</html>