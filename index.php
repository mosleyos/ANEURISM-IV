<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corvax WL - Проект по игре Space Station 14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Проверяем, ввел ли пользователь пароль -->
    <?php
    // Задаем пароль для доступа к сайту
    $password = "corvax2023";

    // Если пароль не введен или неверный, показываем форму ввода пароля
    if (!isset($_POST["password"]) || $_POST["password"] != $password) {
    ?>
    <div class="password-form">
        <h1>Введите пароль для доступа к сайту</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" value="Войти">
        </form>
    </div>
    <?php
    // Если пароль введен и верный, показываем содержимое сайта
    } else {
    ?>
    <header>
        <h1>Corvax WL</h1>
        <p>Проект по игре Space Station 14</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Главная</a></li>
            <li><a href="about.html">О проекте</a></li>
            <li><a href="contact.html">Контакты</a></li>
        </ul>
    </nav>
    <main>
        <h2>Добро пожаловать на сайт проекта Corvax WL</h2>
        <p>Corvax WL - это первый русскоязычный сервер по игре Space Station 14, целью которого является полный перевод игры на русский язык, поддержка актуальных изменений из основного репозитория, а так же добавление собственных изменений по необходимости[^1^][1].</p>
        <img src="corvax-wl-logo.png" alt="Логотип Corvax WL">
        <h3>Администрация проекта</h3>
        <p>Проект Corvax WL возглавляют следующие люди:</p>
        <ul>
            <li>Corvax - главный администратор и разработчик</li>
            <li>Worm - администратор и переводчик</li>
            <li>Stalker - администратор и тестировщик</li>
        </ul>
        <h3>Как присоединиться к проекту</h3>
        <p>Если вы хотите поиграть на нашем сервере, вам нужно сделать следующее:</p>
        <ol>
            <li>Скачать игру Space Station 14 с [официального сайта](https://stackoverflow.com/questions/9381479/password-protect-a-web-page-using-css-html) или [Steam](https://stackoverflow.com/questions/6565357/git-push-requires-username-and-password).</li>
            <li>Запустить игру и выбрать Corvax WL в списке серверов.</li>
            <li>Создать своего персонажа и наслаждаться игрой.</li>
        </ol>
        <p>Если вы хотите помочь нам в разработке и переводе игры, вы можете связаться с нами через наш [Discord](https://stackoverflow.com/questions/45727197/rest-service-http-code-for-forcing-a-change-of-password) или [GitHub](https://github.com/owner/repo.git).</p>
    </main>
    <footer>
        <p>© 2023 Проект Corvax WL. Все права защищены.</p>
    </footer>
    <?php
    // Закрываем условие проверки пароля
    }
    ?>
</body>
</html>
