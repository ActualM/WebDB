<?php



global $connect;
require 'config/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    body{
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

    /*menu*/
    .menu{
        width: 100%;
        position: absolute;
        top: 250px;
        left: 0;
        right: 0;

    }
    .menu_inner{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;

        background-color: rgba(229, 188, 41, 1);
        border-radius: 20px;

    }
    .nav_menu{
        font-size: 24px;
        text-transform: uppercase;
        padding-top: 10px;
        margin: 1% 25px;

    }
    .nav_menu_link{
        display: inline-block;
        vertical-align: top;
        color: white;
        text-decoration: none;
        margin-right: 3%;
        transition: color 0.2s linear;


    }
    .nav_menu_link:hover{
        color: #FF5C00;
    }
    #last_elem{
        padding-left: 200px;
    }

    /*offers*/
    .offers{
        width: 100%;
        position: absolute;
        top: 370px;
        left: 0;
        right: 0;
    }
    .offers_naming{
        font-size: 32px;
        font-weight: bold;
        color: white;
    }
    .product{
        width: 300px;
        height: 405px;
        display: inline-block;
        border-radius: 20px;
        border: 3px solid #FF5C00;
        justify-content: space-between;
        transition: color 0.2s linear;
        margin-bottom: 35px;


    }
    .product:hover{
        border: 3px solid #E5BC29;


    }
    .product_wrapper{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-top: 35px;

    }
    .product_pic{
        padding-top: 15px;
        margin: 0 auto;
        display: block;
    }
    .product_naming{
        font-size: 24px;
        padding-left: 10px;
        color: white;
    }
    .product_ingredients{
        font-size: 14px;
        padding-top: 10px;
        padding-left: 10px;
        color: white;
        text-align: left;
    }
    .pizza{
        width: 100%;
        position: absolute;
        top: 970px;
        left: 0;
        right: 0;
    }

    /*footer*/
    .footer{
        width: 100%;
        position: absolute;
        top: 1470px;
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

        justify-content: space-between;
    }
    .trademark{
        color: #000;
        font-size: 24px;
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
        font-size: 24px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        padding-left: 30px;

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
    }

    /*modal*/
    .modal{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 1000;
        background-color: rgba(0, 0, 0, .3);
        display: grid;
        align-items: center;
        justify-content: center;
        overflow-y: auto;
        visibility: hidden;
        opacity: 0;
        transition: opacity .4s, visibility .4s;
    }
    .modal.open{
        visibility: visible;
        opacity: 1;
    }
    .modal_window{
        max-width: 1550px;
        padding: 45px;
        z-index: 1;
        background-color: #242424;
        margin: 30px 15px;
        border-radius: 35px;
        transform: scale(0);
        transition: transform .8s;
    }
    .modal.open .modal_window{
        transform: scale(1);
    }
    .wrapper_full{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .wrapper_description{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;

    }
    .modal_name{
        color: #FFF;


        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .modal_description_first{
        color: #FFF;


        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-top: 15px;
    }
    .modal_description_second{
        color: #FFF;

        max-width: 400px;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-top: 15px;
        text-align:justify;
        line-height: 1.7;
    }
    .wrapper_button{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .modal_small_size{
        display: grid;
        align-items: center;
        justify-content: center;
        width: 200px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #E5BC29;
        color: white;
        background: #000;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-right: 15px;
        margin-top: 15px;
    }
    .modal_medium_size{
        display: grid;
        align-items: center;
        justify-content: center;
        width: 200px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #E5BC29;
        color: white;
        background: #000;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-right: 15px;
        margin-top: 15px;
    }
    .modal_big_size{
        display: grid;
        align-items: center;
        justify-content: center;
        width: 200px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #E5BC29;
        color: white;
        background: #000;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-top: 15px;
    }
    .wrapper_button_second{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .dough_traditional{
        display: grid;
        align-items: center;
        justify-content: center;
        width: 290px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #E5BC29;
        color: white;
        background: #000;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-right: 15px;
        margin-top: 15px;
    }
    .dough_thin{
        display: grid;
        align-items: center;
        justify-content: center;
        width: 290px;
        height: 42px;
        border-radius: 15px;
        border: 1px solid #E5BC29;
        color: white;
        background: #000;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-top: 15px;
    }
    .wrapper_topping{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .cheese_first{
        display: grid;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 239px;
        height: 292px;
        border-radius: 25px;
        border: 1px solid #E5BC29;
        background: #000;
        margin-right: 20px;
    }
    .cheese_second{
        display: grid;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 239px;
        height: 292px;
        border-radius: 25px;
        border: 1px solid #E5BC29;
        background: #000;
        margin-right: 20px;
    }
    .chorizo{
        display: grid;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 239px;
        height: 292px;
        border-radius: 25px;
        border: 1px solid #E5BC29;
        background: #000;
    }
    .modal_topping_name{
        color: #FFF;


        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .modal_topping_price{
        color: #FFF;


        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .topping_h{
        color: #FFF;


        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-top: 25px;
        margin-bottom: 15px;
    }
    .wrapper_button_second_small{
        display: grid;
        align-items: center;
        justify-content: center;
    }
    .buy{
        width: 544px;
        height: 83px;
        color: #fff;
        border-radius: 25px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;

        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;

        outline: none;
        background: #FF5C00;

        border: none;
        margin-top: 25px;
        color: #FFF;


        font-size: 24px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .buy:hover{
        background: #E5BC29;
    }
    .modal_image{
        max-height: 300px;
    }
    .closeModal {
        position: absolute;
        top: 30px;
        right: 20px;
        width: 24px;
        height: 24px;
        opacity: 0.2;
        cursor: pointer;
        transition: opacity ease 0.5s;

        &:hover {
            opacity: 1;
        }
    }

    .closeModal::before,
    .closeModal::after {
        content: '';
        position: absolute;
        top: 10px;
        display: block;
        width: 24px;
        height: 3px;
        background: #fff;
    }

    .closeModal::before {
        transform: rotate(45deg);
    }

    .closeModal::after {
        transform: rotate(-45deg);
    }
    .wrapper_auth{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .input_form{
        display: grid;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }
    #login{
        padding-bottom: 20px;
    }
    .login{
        margin-bottom: 10px;
    }
    .pswrd{
        margin-bottom: 10px;
    }
    .sbmt{
        margin: 0 auto;
    }
    .creation{
        width: 100%;
        position: absolute;
        top: 1770px;
        left: 0;
        right: 0;
    }
    .redact_stuff{
        color: white;
        text-decoration: none;
        padding: 10px;
        margin-top: 50px;
        margin-right: 10px;
    }
</style>
<body>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div class="logo"><img src="assets/images/logo.png" alt=""></div>
            <nav class="nav">
                <a class="nav_link" href="#">Работа в Hot Pizza</a>
                <a class="nav_link" href="#">О нас</a>
                <a class="nav_link" href="#">Контакты</a>
                <a class="nav_link" href="#" id="auth_openup">Создать продукт</a>
                <a class="nav_link" href="account.php">Личный кабинет</a>

            </nav>
        </div>
    </div>
</header>

<div class="menu">
    <div class="container">
        <div class="menu_inner">
            <nav class="nav_menu">
                <a class="nav_menu_link" href="#">Пицца</a>
                <a class="nav_menu_link" href="#">Комбо</a>
                <a class="nav_menu_link" href="#">Закуски</a>
                <a class="nav_menu_link" href="#">Десерты</a>
                <a class="nav_menu_link" href="#">Напитки</a>
                <a class="nav_menu_link" id="last_elem" href="#">Корзина</a>
            </nav>
        </div>
    </div>
</div>

<div class="offers">
    <div class="container">
        <div class="offers_naming">Горячие предложения</div>
        <div class="product_wrapper">
            <?php



            $products = mysqli_query($connect, "SELECT * FROM `products`");



            $products = mysqli_fetch_all($products);



            foreach ($products as $product) {
            ?>
            <div class="product" id="modal_popup">
                <img src="assets/images/pizza_img.png" class="product_pic" alt="">
                <div class="product_naming"><?= $product[1] ?></div>
                <div class="product_ingredients"><?= $product[3] ?>
                </div>
                <div class="redact_stuff">
                    <a style="color: white; text-decoration: none;" href="update.php?id=<?= $product[0] ?>">Обновить информацию</a>
                    <a style="color: white; text-decoration: none; padding-left: 35px;" href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a>
                </div>
            </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<?php



$products = mysqli_query($connect, "SELECT * FROM `products`");



$products = mysqli_fetch_all($products);



foreach ($products as $product) {
?>
<div class="modal" id="my_modal">

    <div class="modal_window">
        <div class="closeModal" id="closeModal_btn"></div>

        <div class="wrapper_full">
            <div class="modal_image"><img src="assets/images/pizza_img.png" alt=""></div>
            <div class="wrapper_description">

                <div class="modal_name"><?= $product[1] ?></div>
                <div class="modal_description_first">средняя, традиционное тесто, 590г</div>
                <div class="modal_description_second"><?= $product[3] ?></div>

                <div class="wrapper_button">
                    <div class="modal_small_size">Маленькая</div>
                    <div class="modal_medium_size">Средняя</div>
                    <div class="modal_big_size">Большая</div>
                </div>
                <div class="wrapper_button_second">
                    <div class="dough_traditional">Традиционное</div>
                    <div class="dough_thin">Тонкое</div>
                </div>
                <div class="topping_h">Добавить по вкусу</div>
                <div class="wrapper_topping">
                    <div class="cheese_first">
                        <img src="assets/images/cheddar.png" alt="">
                        <div class="modal_topping_name">Чеддер</div>
                        <div class="modal_topping_price">79₽</div>
                    </div>
                    <div class="cheese_second">
                        <img src="assets/images/mozzarella.png" alt="">
                        <div class="modal_topping_name">Сливочная моцарелла</div>
                        <div class="modal_topping_price">79₽</div>
                    </div>
                    <div class="chorizo">
                        <img src="assets/images/chorizo.png" alt="">
                        <div class="modal_topping_name">Чоризо</div>
                        <div class="modal_topping_price">79₽</div>
                    </div>
                </div>

                <div class="wrapper_button_second_small"><button class="buy">Добавить в корзину за <?= $product[2] ?></button></div>
            </div>
        </div>
    </div>


</div>
<?php
    }
    ?>

<div class="modal" id="my_modalsa">
    <div class="modal_window">
        <div class="closeModal" id="auth_close_btn"></div>


        <form action="vendor/create.php" method="post">
            <p style="color: white">Название товара</p>
            <input type="text" name="title">
            <p style="color: white">Описание</p>
            <textarea name="description"></textarea>
            <p style="color: white">Цена</p>
            <input type="number" name="price"> <br> <br>
            <button type="submit">Добавить продукт

        </form>

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
                <div class="trademark">Hot Pizza © 2023
                    <br>
                    ООО “Hot Pizza Франчайзинг”
                    ОГРН 112875936158, ИНН 1341249995767001, Ростовская область, г. Новочеркасск</div>
                <div class="extra_pic"><img src="assets/images/logo_extra.png" alt=""></div>

            </div>


        </div>
    </div>
</div>

<script src="assets/js/index.js?<?=rand()?>" type="text/javascript"></script>
</body>
</html>
