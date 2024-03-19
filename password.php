<?php

session_start();

if(isset($_SESSION['randomPassword'])) {

    $randomPassword = $_SESSION['randomPassword'];
    unset($_SESSION['randomPassword']);

} else {

    header("Location: index.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Password-Generated</title>
</head>
<body>

    <h1>Password Generata:</h1>
    <p><?php echo $randomPassword ?></p>

</body>
</html>