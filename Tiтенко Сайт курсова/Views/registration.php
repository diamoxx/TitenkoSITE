<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golds Gym - Реєстрація користувача</title>
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
            <form action="/registration" method="post">
                <h3>Реєстрація</h3>
                <p>Емейл</p>
                <input type="email" name="email" placeholder="Емейл" required>
                <p>Прізвище та ім'я</p>
                <input type="text" name="fio" placeholder="Іванов Іван" required>
                <p>Мобільний телефон</p>
                <input type="text" name="phone" placeholder="+3809693242" required>
                <p>Пароль</p>
                <input type="text" name="password" placeholder="Пароль" required>
                <button type="submit">Зареєструватися</button>
                <p>Є акаунт? <a href="/login">- авторизуйтеся!</a></p>
            </form>
        </div>
        <?php include 'partials/footer.php' ?>
    </div>

</body>

</html>