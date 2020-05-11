<?php
session_start();
unset(
    $_SESSION['login']
);
//redirecionar o usuario para a pagina de login
header("Location: login.php");
?>

