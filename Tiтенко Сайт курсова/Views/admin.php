<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golds Gym - Особистий кабінет</title>
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
        <div class="contact">
            <h2>Вітаємо вас, <span class="name">Адміністратор</span></h2>
            <?php foreach ($abonements as $id => $abonement):?>
                <div class="applicaion">
                    <h2>Абонемент №<?= ++$id ?></h2>
                    <p>Ім'я: <b><?= $abonement['user_fio'] ?></b></p>
                    <p>Абонемет: <b><?= $abonement['type'] ?></b></p>
                    <p>Час замовлення: <b><?= date('d.m.Y', strtotime($abonement['created_at'])) ?></b></p>
                    <p>Вартість: <b><?= $abonement['price'] ?> грн</b></p>
                    <p>Мобільний телефон: <b><?= $abonement['phone'] ?></b></p>

                    <a class="delete_abonement" href="/delete-abonement-admin?id=<?= $abonement['id'] ?>">Видалити</a>
                </div>
            <?php endforeach;?>
        </div>
        <?php include 'partials/footer.php' ?>
    </div>

</body>

</html>