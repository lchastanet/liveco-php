<?php
session_start();

$answer = $_SESSION["answer"];
$guess  = $_GET["guess"];

if ($answer < $guess) {
    $url = 'formNumber.php?hint=less';
} else if ($answer > $guess) {
    $url = 'formNumber.php?hint=more';
} else {
    $url = 'success.php';
}

header('Location:' . $url);
