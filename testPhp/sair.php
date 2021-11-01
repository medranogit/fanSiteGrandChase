<?php
    session_start();
    header("Location: ../index.php");
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
?>