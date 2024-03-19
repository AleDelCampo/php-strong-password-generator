<?php
session_start();

include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset ($_POST['passLength'])) {

        $passLength = $_POST['passLength'];
        $useNumbers = isset ($_POST['useNumbers']) ? true : false;
        $useLetters = isset ($_POST['useLetters']) ? true : false;
        $useSymbols = isset ($_POST['useSymbols']) ? true : false;
        $allowRepeating = isset ($_POST['allowRepeating']) ? true : false;

        $randomPassword = generateRandomPassword($passLength, $useNumbers, $useLetters, $useSymbols, $allowRepeating);

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

    <form class="container d-flex flex-column align-items-center" method="POST">

        <div class="form-group mt-2 mb-4">
            <label for="passLength" class="mb-2">Quanto vuoi sia lunga la tua password??:</label>
            <input type="number" min="1" max="20" id="passLength" name="passLength" placeholder="" required>
        </div>
        <div class="d-flex mb-4 gap-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="useNumbers" name="useNumbers" value="1">
                <label class="form-check-label" for="useNumbers">Usa Numeri</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="useLetters" name="useLetters" value="1" checked>
                <label class="form-check-label" for="useLetters">Usa Lettere</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="useSymbols" name="useSymbols" value="1">
                <label class="form-check-label" for="useSymbols">Usa Simboli</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="allowRepeating" name="allowRepeating" value="1">
                <label class="form-check-label" for="allowRepeating">Usa Ripetizioni</label>
            </div>
        </div>
        <button type="submit" class="btn border-black w-25">Genera!!</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>