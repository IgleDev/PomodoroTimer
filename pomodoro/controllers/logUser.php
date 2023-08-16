<?php 
    require '../pdo.php';
    require '../models/userBase.php';
    $user = $_POST['username'];
    
    if(userLogin($_POST['username'], $_POST['password'], $pdo)){
        header('Location: ../pomodoro.php');
    }else{
        die('Name or Password doesnt exist');
    }
?>