<?php
    require './models/userBase.php';
    openSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pomodoro - Study</title>
</head>
<body>
    <nav class="nav"><ul><li class="li"><button type="button" id="btn-User"><i class="fas fa-user-circle"></i></button></li></ul></nav>
    <div class="container">
        <div class="container-color">
            <h1>POMODORO TIMER</h1>
            <div class="container-btns">
                <button id="btn-study">Study</button>
                <button id="btn-break">Break</button>
                <button id="btn-longbreak">Long Break</button>
            </div>
            <h3 id="state">Study!</h3>
            <p class="container-timer"> <span id="min">25</span> : <span id="sec">00</span> </p>
            <button id="btnTimer">Start</button>
        </div>
    </div>
</body>
<script src="./js/pomodoro.js"></script>
</html>