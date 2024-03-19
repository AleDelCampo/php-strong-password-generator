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
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="pass-cnt">
        <h1>Password Generata:</h1>
        <small>😈😈(Per renderla almeno un briciolo segreta mi spiace ma dovrai catturarla col mouse e infastidirti un po'....)😈😈</small>
        <p id="password"><?php echo $randomPassword ?></p>
    </div>

</body>
</html>