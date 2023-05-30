<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golds Gym - Головна сторінка</title>
    <!-- links -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <div class="wrap">
        <div class="main">
            <?php include 'partials/header.php' ?>
            <div class="content-header">
                <div class="block">
                    <h4 class="title-name">Golds Gym <img src="./images/icon-1.png" alt=""></h4>
                    <h1>Піт, посмішка <br> І наповтор</h1>
                    <p>
                        Тренажерний зал – це клуб, будівля або велике приміщення, яке зазвичай містить спеціальне
                        обладнання, куди ходять люди займатися спортом.
                    </p>
                    <?php if(!isset($_SESSION['user'])):?>
                        <div class="btn-a">
                            <a href="/login">Увійти в особистий кабінет</a>
                        </div>
                    <?php endif;?>
                    <img class="bot-img" src="./images/Exercise.png" alt="">
                </div>
                <div class="block">
                    <img src="./images/img-main.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="our-services">
        <h2>Наш сервіс</h2>
        <div class="wrap-block-services">
            <div class="block-serv">
                <img src="./images/Vector (1).png" alt="">
                <h4>Медитаційна програма</h4>
            </div>
            <div class="block-serv">
                <img src="./images/Vector (2).png" alt="">
                <h4>Будівля м'язів</h4>
            </div>
            <div class="block-serv">
                <img src="./images/Vector (3).png" alt="">
                <h4>Кардіо програма</h4>
            </div>
            <div class="block-serv">
                <img src="./images/Vector (4).png" alt="">
                <h4>Збалансоване харчування</h4>
            </div>
        </div>
    </div>
    <div class="wrap-desc">
        <div class="block">
            <img src="/images/Rectangle 3150.png" alt="">
        </div>
        <div class="block text">
            <h4 class="impor">Користь для здоров'я</h4>
            <h1>Фізичні вправи роблять <br>
                Твоє тіло крилатим</h1>
            <p>
                Фізична активність і фізичні вправи можуть мати негайну та довгострокову користь для здоров’я.
                Найголовніше, регулярні заняття можуть покращити якість вашого життя. Вправи можуть покращити ваше
                здоров’я та зменшити ризик захворюваності.
            </p>
        </div>
    </div>
    <div class="wrap-desc">
        <div class="block text">
            <h4 class="impor">Хороший настрій</h4>
            <h1>Робить вас більш активними<br>
                І покращує настрій</h1>
            <p>
                Фізична активність і фізичні вправи можуть мати негайну та довгострокову користь для здоров’я.
                Найголовніше, регулярні заняття можуть покращити якість вашого життя. Вправи можуть покращити ваше
                здоров’я та зменшити ризик захворюваності.
            </p>
        </div>
        <div class="block">
            <img src="/images/Rectangle 3150 (1).png" alt="">
        </div>
    </div>
    <div class="swiper mySwiper">
        <h2 class="impor">Відгуки клієнтів</h2>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/img-people.jpeg" alt="">
                <h2>Іванов Іван</h2>
                <p>Дуже крутий зал, є басейн рекомендую!</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/img-people-2.jpeg" alt="">
                <h2>Терлій Настя</h2>
                <p>Купила місячний абонемент, все сподобалося!</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/img-people-3.jpeg" alt="">
                <h2>Флук Ігор</h2>
                <p>Завжди чисто, охайно, персонал привітний, рекомендую 5/5
                </p>
            </div>
            <div class="swiper-slide">
                <img src="./images/img-people.jpeg" alt="">
                <h2>Іванов Іван</h2>
                <p>Дуже крутий зал, є басейн рекомендую!</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/img-people-2.jpeg" alt="">
                <h2>Терлій Настя</h2>
                <p>Купила місячний абонемент, все сподобалося!</p>
            </div>
            <div class="swiper-slide">
                <img src="./images/img-people-3.jpeg" alt="">
                <h2>Флук Христина</h2>
                <p>Завжди чисто, охайно, персонал привітний, рекомендую 5/5
                </p>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- footer -->
    <?php include 'partials/footer.php'?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>