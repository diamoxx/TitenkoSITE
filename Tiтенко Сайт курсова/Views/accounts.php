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
            <h2>Вітаємо вас, <span class="name"><?= $user['fio'] ?></span></h2>
            <p class="info">
                В особистому кабінеті ви можете забронювати собі абонемент в онлайні та оплатити його коли прийдете до нас в зал. Також є <span class="green">унікальний</span> абонемент, який дає доступ до всіх можливостей даного залу, таких як: басейн, масажі, тренажерний зал, теніс, бокс і тд.
            </p>
            <form action="/create-abonement" method="post">
                <h4>Оформлення абонемента</h4>

                <select name="type" id="abonement">
                    <?php foreach ($listAbonements as $key => $typeAbonement):?>
                        <option value="<?= $key ?>"><?= $typeAbonement['title']?></option>
                    <?php endforeach;?>
                </select>
                <input type="hidden" name="user_id" value="<?= $user['id']?>">
                <button type="submit" id="btn">Забронювати</button>
            </form>

            <?php foreach ($userAbonements as $id => $abonement):?>
                <div class="applicaion">
                    <h2>Абонемент №<?= ++$id ?></h2>
                    <p>Абонемент: <b><?= $abonement['type'] ?></b></p>
                    <p>Час замовлення: <b><?= date('d.m.Y', strtotime($abonement['created_at'])) ?></b></p>
                    <p>Вартість: <b><?= $abonement['price'] ?> грн</b></p>
                    <p>Мобільний телефон: <b><?= $abonement['phone'] ?></b></p>

                    <a class="delete_abonement" href="/delete?id=<?= $abonement['id'] ?>">Видалити</a>
                </div>
            <?php endforeach;?>
        </div>
        <?php include 'partials/footer.php' ?>
    </div>

</body>

</html>