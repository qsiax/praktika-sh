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
                        <?php
                            if($_COOKIE['users'] == ''):
                        ?>
                        <a href="signup.php" class="btn mr50">Регистрация</ф>
                        <a href="vhod.php" class="btn">Вход</a>
                        <?php else: ?>
                            <a class="btn" href="exit.php"><?=$_COOKIE['users']?></a>
                        <? endif; ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-body">
                <div class="main-box">
                    <div class="main-title">
                        ПОкровский
                        колледж
                    </div>
                    <div class="main-wrapper">
                        <div class="main-heading">Новости и события</div>
                        <div class="main-text">Наш колледж набирает талантливых ребят в свои ряды</div>
                        <div class="main-btn">Все новости <span></span></div>
                    </div>
                </div>
                <img src="img/main-img.png">
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>

</body>
</html>