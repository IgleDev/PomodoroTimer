<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>Pomodoro - Login</title>
</head>
<body>
    <div class="container-login">
        <form method="post" action="./controllers/logUser.php" class="form" id="form">
            <h1>POMODORO LOGIN</h1>
            <input type="text" name="username" id="user" placeholder="Username">
            <input type="password" name="password" id="pass" placeholder="Password">
            <a href="create.php"><i class="fa-solid fa-user-plus"></i> Create Account</a>
            <button onclick="return false" type="submit" id="btnLog">Go!</button>
        </form>
    </div>
</body>
<script src="./js/login.js"></script>
</html>
