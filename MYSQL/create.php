<?php
include "db.php";
include "functions.php";

if (isset($_POST["submit"])) {
    createUser();
}
?>


<?php include "includes/header.php"; ?>


<div class="container">
    <div class="col-xs-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">user</label>
                <input name="username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">pass</label>
                <input name="password" type="password" class="form-control">
            </div>

            <br>
            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
        </form>
    </div>

    <?php include "includes/footer.php"; ?>