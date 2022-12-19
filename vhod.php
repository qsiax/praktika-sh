<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/register.js"></script>
    <script type="text/javascript" src="script/validation.min.js"></script>

    <title>Покровский колледж</title>
</head>
<body>

    <div class="main">
        <div class="header">
            <div class="container">
                <div class="header-body">
                    <div class="box">
                        <a href="#" class="btn mr50">Новости</ф>
                        <a href="#" class="btn">Студенты</a>
                    </div>

                    <div class="box">   
                        <a href="/" class="logo-text">Покровский колледж</a>
                    </div>
                    <div class="box">
                        <a href="signup.php" class="btn mr50">Регистрация</ф>
                        <a href="vhod.php" class="btn">Вход</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-body-vhod">
                <div class="main-box-sign">
                    <div class="main-title">
                    Авторизация
                    </div>
                </div>
                <div class="main-wrap">
                    <div class="login">
                        <div class="login-body">
                            <form action="auth.php" method="post">
                                <input type="text" name="login" placeholder="Логин">
                                <input type="password" name="pass" placeholder="Пароль">
                                <button type="submit" name="submit">Войти</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>

</body>
</html>


