<?php

session_start();

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['passLength'])) {
        $passLength = $_POST['passLength'];

        $randomPassword = generateRandomPassword($passLength);
  
        $_SESSION['randomPassword'] = $randomPassword;

        header("Location: password.php");
        exit(); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Password-Maker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form class="container" method="POST">

        <div class="form-group mt-2">

            <label for="vote" class="mb-2">Quanto vuoi sia lunga la tua password??:</label>

            <input type="number" min="1" max="20" id="passLength" name="passLength" placeholder="" required>

        </div>

        <button type="submit" class="btn border-black">Submit</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>