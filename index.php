<?php
session_start();
$_SESSION["answer"] = rand(1, 100);
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
    <form action="formNumber.php" method="get">
        <label for="username">Name :</label>
        <input type="text" name="username" id="username">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>