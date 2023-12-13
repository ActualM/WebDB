<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style_account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Account</title>
</head>
<style>body{
        margin: 0;
        background: black;
        font-family: 'Montserrat', sans-serif;

        font-size: 15px;
        line-height: 1.6;
        color: #333;
    }
    h1, h2, h3, h4, h5, h6{
        margin: 0;
    }
    *,
    *:before,
    *:after{
        box-sizing: border-box;
    }

    .container{
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
    }
    /*header */
    .header{
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }
    .header_inner{
        display: flex;
        justify-content: space-between;
    }
    .nav{
        font-size: 24px;
        text-transform: uppercase;
        padding-top: 40px;
    }
    .nav_link{
        display: inline-block;
        vertical-align: top;
        margin: 0 20px;
        color: white;
        text-decoration: none;
        transition: color 0.2s linear;
    }
    .nav_link:hover{
        color: rgba(229, 188, 41, 1);
    }

    /*account*/
    .account{
        width: 100%;
        position: absolute;
        top: 230px;
        left: 0;
        right: 0;
        padding-top: 15px;

    }
    .account_wrapper{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-top: 25px;

    }
    .account_naming{
        font-size: 32px;
        font-weight: bold;
        color: white;
        padding-top: 10px;
    }
    .name{
        width: 347px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #FFF;
        background: #242424;
        padding-top: 15px;
        margin-top: 15px;
    }
    .number{
        width: 347px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #FFF;
        background: #242424;
        padding-top: 15px;
        margin-top: 15px;
    }
    .mail{
        width: 347px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #FFF;
        background: #242424;
        padding-top: 15px;
        margin-top: 15px;
    }
    .birthdate{
        width: 347px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #FFF;
        background: #242424;
        padding-top: 15px;
        margin-top: 15px;
    }
    .personal_text{
        color: #FFF;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top: 15px;
    }

    /*footer*/
    .footer{
        width: 100%;
        position: absolute;
        top: 850px;
        left: 0;
        right: 0;
    }
    .footer_wrapper{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        background-color: #E5BC29;
    }
    .product_info{
        width: 218px;
        height: 301px;
        border-radius: 25px;
        background: #659E39;
        margin-left: 5px;
    }
    .common_info{
        width: 218px;
        height: 301px;
        border-radius: 25px;
        background: #FFF;
    }
    .interest_info{
        width: 218px;
        height: 301px;
        border-radius: 25px;
        background: #FF0606;
        margin-right: 5px;
    }
    .extra_info{
        background-color: #F3F3F3;
    }
    .extra_wrapper{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .trademark{
        color: #000;
        font-size: 32px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-top: 15px;
        padding-left: 30px;
    }
    .extra_info_text{
        color: #000;
        width: 775px;
        height: 136px;
        font-size: 32px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        padding-left: 30px;
        text-align: justify;
    }
    .nav_extra{
        font-size: 16px;
    }
    #hot_pizza_first{
        font-size: 26px;
        color: white;
    }
    #hot_pizza_second{
        font-size: 26px;
        color: #FF0606;
    }
    #hot_pizza_third{
        font-size: 26px;
        color: white;
    }
    .nav_link_extra{

        display: block;
        color: white;
        text-decoration: none;
        transition: color 0.2s linear;
        padding-left: 30px;
        margin-bottom: 10px;
    }
    .nav_link_extra_second{
        display: block;
        color: #FF0606;
        text-decoration: none;
        transition: color 0.2s linear;
        padding-left: 30px;
        margin-bottom: 10px;
    }</style>
<body>
    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="logo"><img src="assets/images/logo.png" alt=""></div>
                <nav class="nav">
                    <a class="nav_link" href="index.php">На главную</a>
                    <a class="nav_link" href="#">Работа в Hot Pizza</a>
                    <a class="nav_link" href="#">О нас</a>
                    <a class="nav_link" href="#">Контакты</a>


                </nav>
            </div>
        </div>
    </header>
    <div class="account">
            <div class="container">
            <div class="account_naming">Личный кабинет</div>
            <div class="account_naming">Персональные данные</div>
            <div class="account_wrapper">
                <div class="personal_text">Имя</div>
                <div class="name"></div>
                <div class="personal_text">Номер телефона</div>
                <div class="number"></div>
                <div class="personal_text">Почта</div>
                <div class="mail"></div>
                <div class="personal_text">Дата рождения</div>
                <div class="birthdate"></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="footer_wrapper">
                <div class="product_info">
                    <nav class="nav_extra">
                        <a class="nav_link_extra" href="#" id="hot_pizza_first">Hot Pizza</a>
                        <a class="nav_link_extra" href="#">О нас</a>
                        <a class="nav_link_extra" href="#">Пицца</a>
                        <a class="nav_link_extra" href="#">Комбо</a>
                        <a class="nav_link_extra" href="#">Закуски</a>
                        <a class="nav_link_extra" href="#">Десерты</a>
                        <a class="nav_link_extra" href="#">Напитки</a>
                    </nav>
                </div>
                <div class="logo_pic"><img src="assets/images/logo_alt.png" alt=""></div>
                <div class="common_info">
                    <nav class="nav_extra">
                        <a class="nav_link_extra_second" href="#" id="hot_pizza_second">Информация</a>
                        <a class="nav_link_extra_second" href="#">Заказ и оплата</a>
                        <a class="nav_link_extra_second" href="#">Франшиза</a>
                        <a class="nav_link_extra_second" href="#">Инвестиции</a>
                        <a class="nav_link_extra_second" href="#">Поставщикам</a>
                        <a class="nav_link_extra_second" href="#">Состав блюд</a>
                    </nav>
                </div>
                <div class="logo_pic"><img src="assets/images/logo_alt.png" alt=""></div>
                <div class="interest_info">
                    <nav class="nav_extra">
                        <a class="nav_link_extra" href="#" id="hot_pizza_third">Hot Pizza</a>
                        <a class="nav_link_extra" href="#">О нас</a>
                        <a class="nav_link_extra" href="#">Пицца</a>
                        <a class="nav_link_extra" href="#">Комбо</a>
                        <a class="nav_link_extra" href="#">Закуски</a>
                        <a class="nav_link_extra" href="#">Десерты</a>
                        <a class="nav_link_extra" href="#">Напитки</a>
                    </nav>
                </div>
            </div>
            <div class="extra_info">
                <div class="extra_wrapper">
                    <div class="trademark">Hot Pizza © 2023 <br>
                        © 2023 ООО “Hot Pizza Франчайзинг”
                        ОГРН 112875936158, ИНН 1341249995767001, Ростовская область, г. Новочеркасск
                    </div>
                    <div class="extra_pic"><img src="assets/images/logo_extra.png" alt=""></div>

                </div>


            </div>
        </div>
    </div>
</body>
</html>