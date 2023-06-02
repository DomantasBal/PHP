<?php include "db.php";


$query = "SELECT * FROM users";
$response = mysqli_query($connection, $query);

// print_r($response);

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

    <?php
    while ($row = mysqli_fetch_assoc($response)) {
        print_r($row);
    }
    ?>



</body>

</html>