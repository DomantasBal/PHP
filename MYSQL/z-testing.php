<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    echo $name;


    $connection = mysqli_connect("localhost", "root", "", "loginapp");

    $query = "INSERT INTO register(name) VALUE ('$name')";

    // CONNECTION RESPONSE IF CONNECTED
    if ($connection) {
        echo "connected";
    } else {
        die("DB connection failed..");
    }

    $result = mysqli_query($connection, $query);

    // if (!$result) {
    //     echo "failed";
    // } else {
    //     echo "it's aliiiiive!!!";
    // }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>

                <br>
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>