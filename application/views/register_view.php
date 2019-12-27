<?php
/** @var Model_Register $model */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style-reg.css">

    <title>Регистрация</title>
</head>
<!--<body>-->
<!--<form action="http://mvc-registr/user/register" method="post">-->
<!--    <div>-->
<!--        <div>-->
<!--            <p>Введите имя пользователя:</p>-->
<!--            <input type="text" name="username">-->
<!--        </div>-->
<!--        <div>-->
<!--            <p>Введите электронную почту:</p>-->
<!--            <input type="text" name="email">-->
<!--        </div>-->
<!--        <div>-->
<!--            <p>Введите пароль:</p>-->
<!--            <input type="password" name="password">-->
<!--        </div>-->
<!--        <div>-->
<!--            <input type="submit">-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->
<!--</body>-->
<body>
<form action="http://mvc-register/user/register" method="post">
    <input checked="" id="signin" name="action" type="radio" value="signin">
    <label for="signin">Sign in</label>
    <input id="signup" name="action" type="radio" value="signup">
    <label for="signup">Sign up</label>
    <input id="reset" name="action" type="radio" value="reset">
    <label for="reset">Reset</label>
    <div id="wrapper">
        <div id="arrow"></div>
        <input id="repass" placeholder="username" name="username" type="text">
        <input id="email" placeholder="email" name="email" type="text">
        <input id="pass" placeholder="password" name="password" type="password">

    </div>
    <button type="submit">
    <span>
      Reset password
      <br>
      Sign in
      <br>
      Sign up
    </span>
    </button>
    <div class="error">
        <?php
        if (!$model->errors){
            echo "<script>alert('Регистрация выполнена успешно')</script>";
        }
        ?>

        <?php
        foreach ($model->errors as $value){
            echo "$value<br>";
        }
        ?>
    </div>
</form>

</body>
</html>

