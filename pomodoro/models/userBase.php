<?php
    function addUser($username, $password, $gmail, $pdo){
        if(trim($username) == '' || trim($password) == '' || trim($gmail) == ''){
            exit('Error');
        }
        $query = "SELECT id FROM userpomodoro WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute() or die(implode('>>', $stmt->errorInfo()));

        if($stmt-> rowCount() > 0){
            die('Name is  not available');
        }

        $query = "INSERT INTO userpomodoro (username, password, gmail) VALUES (:username, :password, :gmail)";
        $stmt = $pdo->prepare($query);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':gmail', $gmail);
        $stmt->execute() or die(implode('>>', $stmt->errorInfo()));
    }

    function userLogin($username, $password, $pdo){
        $query = "SELECT * FROM userpomodoro WHERE username = :username";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute() or die(implode('>>', $stmt->errorInfo()));

        if($stmt->rowCount() > 0){
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            if(!password_verify($password, $user->password)){
                openSession();
                $_SESSION['user'] = $user;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    function openSession(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
?>