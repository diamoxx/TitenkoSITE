<header>
    <div class="logo-header">
        <img src="./images/logo.png" alt="">
        <?php if(isset($_SESSION['user'])):?>
              <?= ' Вітаємо, '.$_SESSION['user']['fio'] ?>
        <?php endif;?>
    </div>
    <div class="header-menu">
        <span><a href="/">Головна</a></span>
        <span><a href="/price">Ціни на абонементи</a></span>
        <span><a href="/contact">Контакти</a></span>

        <?php if(isset($_SESSION['user']) && $_SESSION['user']['fio'] != 'admin'):?>
            <span><a href="/accounts">Особистий кабінет</a></span>
        <?php endif;?>

        <?php if(isset($_SESSION['user']) && $_SESSION['user']['fio'] == 'admin'):?>
            <span><a href="/admin">Адмінка</a></span>
        <?php endif;?>
    </div>
    <?php if(isset($_SESSION['user'])): ?>
        <div class="btn-exit">
            <a class="logout" href="/logout">Вийти</a>
        </div>
    <?php endif;?>
</header>