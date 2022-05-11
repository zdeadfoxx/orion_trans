<?php
session_start();

?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/form.css" />

    <title>Орион Транс</title>
</head>

<body>
    <!-- Обертка дял сайта -->
    <div class="wrapper">
        <header class="header">
            <!--Ограничивающий контейнер  -->
            <div class="container">
                <div class="header__body">
                    <!-- Логотип сайта -->
                    <div class="burger__img">
                        <img src="../img/burgder1.jpg" alt="burgeer" />
                    </div>
                    <!-- Меню в шапке -->
                    <nav class="header__menu">
                        <ul class="menu">
                            <li>
                                <a href="../index.html" class="item__menu">О компании</a>
                            </li>
                            <li>
                                <a href="../index.html" class="item__menu">Преимущества</a>
                            </li>
                            <li><a href="../index.html" class="item__menu">Вопросы</a></li>
                            <li><a href="../index.html" class="item__menu">Контакты</a></li>
                            <li>
                                <a href="../index.html" class="item__menu">Как мы работаем?</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Фулл скрин  -->
        <main class="page">
            <div class="container">
                <!-- Форма заявки -->
                <section class="from__application" id="application">
                    <h2 class="application__title">Оставить заявку</h2>
                    <form action="email.php" class="application__form" method="post">
                        <label for="first__city">Укажите город отправления:</label>
                        <input type="text" class="input__form" placeholder="Город отправления" name="first__city"
                            required />
                        <label for="second__city">Укажите город назначения:</label>
                        <input type="text" class="input__form" placeholder="Город назначения" name="second__city"
                            required /><!--  -->
                        <label for="car">Выберите машину:</label>
                        <select name="car" id="#form" class="list__car">
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Ford">Ford</option>
                        </select><!--  -->
                        <label for="name">Укажите ваше имя:</label>
                        <input type="text" class="input__form" placeholder="Имя" name="name" required />
                        <label for="phone">Укажите ваш телефон:</label>
                        <input type="tel" class="input__form" placeholder="+7" name="phone" required />
                        <label for="email">Укажите вашу электроную почту:</label>
                        <input type="email" class="input__form" placeholder="Электроная почта" name="email" />
                        <label for="text__info" class="text__info-title">Введите ваши пожелания:</label>
                        <textarea name="text__info" class=""> </textarea>
                        <button class="application__btn" type="submit">Отправить</button>
                        <a href="#contact__popup">
                            <div class="form__text" id="">
                                <input type="checkbox" class="checkbox" required />
                                <p class="checkbox__text">
                                    Нажимая кнопку "Отправить", я принимаю условия соглашения на
                                    обработку персональных данных
                                </p>
                            </div>
                        </a>
                    
                    </form>
                </section>
            </div>
        </main>
        <footer class="footer" class="">
            <div class="container">
                <div class="footer__info">
                    <ul class="info__list">
                        <li class="info__item">Номер счёта: 40702810823220002625</li>
                        <li class="info__item">Валюта: RUR</li>
                        <li class="info__item">
                            Название: ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ОРИОН ТРАНС"
                        </li>
                        <li class="info__item">ИНН: 5408030096</li>
                        <li class="info__item">КПП: 540801001</li>
                        <li class="info__item">
                            Банк: ФИЛИАЛ "НОВОСИБИРСКИЙ" АО "АЛЬФА-БАНК"
                        </li>
                        <li class="info__item">БИК: 045004774</li>
                        <li class="info__item">Кор. счёт: 30101810600000000774</li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Модальное окно с контактами -->
        <section class="popup" id="contact__popup">
            <a href="#form" class="popup__area"></a>
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#form" class="popup__close">Х</a>
                    <h2 class="popup__title">
                        Согласие на обработку персональных данных
                    </h2>
                    <div class="popup__text">
                        Нажимая кнопку «Отправить», я даю свое согласие на обработку моих
                        персональных данных, в соответствии с Федеральным законом от
                        27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для
                        целей, определенных в Согласии на обработку персональных данных
                    </div>
                    <div class="popup__button">
                        <a href="">Принимаю</a> <a href="">Не принимаю</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="../scripts/application.js"></script>
</body>

</html>