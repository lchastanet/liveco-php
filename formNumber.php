<?php
session_start();

if (empty($_SESSION["username"])) {
    $_SESSION["username"] = $_GET["username"];
}

$hint = isset($_GET['hint']) ? $_GET['hint'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
</head>

<body>
    <?php if (!empty($hint) && $hint == 'more') : ?>
        <p> C'est plus </p>
    <?php elseif (!empty($hint) && $hint == 'less') : ?>
        <p> C'est moins </p>
    <?php endif; ?>

    <form action="checkAnswer.php" method="get">
        <label for="username">Choose a number (1 - 100) :</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>