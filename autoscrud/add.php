<?php
session_start();
if (!isset($_SESSION['name'])) {
    die("ACCESS DENIED");
}

require_once "pdo.php";

if (isset($_POST['add'])) {
    if (empty($_POST['make']) || empty($_POST['model']) || empty($_POST['year']) || empty($_POST['mileage'])) {
        $_SESSION['error'] = 'All fields are required';
        header("Location: add.php");
        return;
    } elseif (!is_numeric($_POST['year']) || !is_numeric($_POST['mileage'])) {
        $_SESSION['error'] = "Mileage and year must be numeric";
        header("Location: add.php");
        return;
    } else {
        $stmt = $pdo->prepare('INSERT INTO autos (make, model, year, mileage) VALUES (:make, :model, :year, :mileage)');
        $stmt->execute(
            array(
                ':make' => $_POST['make'],
                ':model' => $_POST['model'],
                ':year' => $_POST['year'],
                ':mileage' => $_POST['mileage']
            )
        );
        $_SESSION['success'] = "Record added.";
        header("Location: index.php");
        return;
    }
}

if (isset($_POST['cancel'])) {
    header("Location: index.php");
    return;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Domantas Balciunas (7520e724) Login Page</title>
    <?php require_once "bootstrap.php"; ?>
</head>

<body style="font-family: sans-serif;">
    <div class="container">
        <h1>Tracking Autos for <?php echo $_SESSION['name']; ?></h1>
        <?php
        if (isset($_SESSION["error"])) {
            echo ('<p style="color:red">' . $_SESSION["error"] . "</p>\n");
            unset($_SESSION["error"]);
        }
        ?>
        <form method="post">
            <p>Make:
                <input type="text" name="make" size="40" />
            </p>
            <p>Model:
                <input type="text" name="model" size="40" />
            </p>
            <p>Year:
                <input type="text" name="year" size="10" />
            </p>
            <p>Mileage:
                <input type="text" name="mileage" size="10" />
            </p>
            <input type="submit" name='add' value="Add">
            <input type="submit" name="cancel" value="Cancel">
        </form>
    </div>
</body>

</html>