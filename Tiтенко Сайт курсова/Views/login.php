<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golds Gym - Авторизація користувача</title>
    <!-- links -->
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="wrap-main">
        <div class="wrap">
            <div class="main">
                <?php include 'partials/header.php' ?>
            </div>
        </div>
        <div class="form">
            <form action="/login" method="post">
                <h3>Вхід</h3>
                <p>Емейл</p>
                <input type="email" name="email" placeholder="Емейл" required>
                <p>Пароль</p>
                <input type="text" name="password" placeholder="Пароль" required>
                <button type="submit">Увійти</button>
                <p>Немає акаунта? <a href="/registration">- зареєструйтеся!</a></p>
            </form>
        </div>
        <?php include 'partials/footer.php' ?>
    </div>

</body>

</html>