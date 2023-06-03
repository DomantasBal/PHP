<?php include "./db.php";
include "functions.php";

if (isset($_POST["submit"])) {
    deleteUser();
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
            <form action="delete.php" method="post">
                <div class="form-group">
                    <label for="username">user</label>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">pass</label>
                    <input name="password" type="password" class="form-control">
                </div>

                <div class="form-group">

                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>



                    </select>

                </div>

                <br>
                <button class="btn btn-primary" name="submit" type="submit">Delete</button>
            </form>
        </div>
    </div>
</body>

</html>