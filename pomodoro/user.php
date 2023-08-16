<?php
    require './models/userBase.php';
    openSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Pomodoro - User</title>
</head>
<body>
    <nav class="nav"><ul><li class="li"><button type="button" id="btn-goBack"><i class="fa-solid fa-x"></i></button></li></ul></nav>
    <div class="container-user">
        <div class="container-user-color">
            <div class="container-user-text">
                <h1>POMODORO USER</h1>
                <p>User: <span><?= $_SESSION['user']->username ?></span></p>
                <p>Gmail: <span><?= $_SESSION['user']->gmail?> </span></p>
            </div>
            <div class="container-user-btns">
                <button id="btnLogOut">Log Out</button>
            </div>
            <div class="container-user-photoCreator">
                <a href="https://github.com/IgleDev/" target="_blank"><img src="img/pomodoro.png" alt="Pomodoro Creator"></a>
            </div>
        </div>
    </div>
    <script src="./js/user.js"></script>
</body>
</html>