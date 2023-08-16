<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dataBase = "pomodoro";

    try{
        $dns = ("mysql:host=$server;dbname=$dataBase;");
        $pdo = new PDO($dns, $user, $pass);
    }catch(PDOException $e){
        exit($e->getMessage());
    }
?>