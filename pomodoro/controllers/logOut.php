<?php 
    require '../models/userBase.php';
    openSession();
    unset($_SESSION['user']);
    session_destroy();
    header('Location: ../indexLogin.php');
?>