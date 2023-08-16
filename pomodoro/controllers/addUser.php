<?php 
    require '../pdo.php';
    require '../models/userBase.php';
    addUser($_POST['username'], $_POST['password'], $_POST['gmail'], $pdo);
    header('Location: ../indexLogin.php');
?>