<?php
$email = $_POST['email'];
$password = $_POST['password'];

$dogruEmail = "b241210072@sakarya.edu.tr";
$dogruSifre = "b241210072"; 

if ($email === $dogruEmail && $password === $dogruSifre) {
    echo "<h2>Hoşgeldiniz $dogruSifre</h2>";
} else {
    header("Location: giris.html");
    exit;
}
?>
