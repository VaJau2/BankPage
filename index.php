<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <img src="icon.png" class="header_bankIcon">
            <b class="header_backName">WORLD BANK Publications</b></span>

            <span class="header_phoneNumbers">
                8-800-100-5005
                +7(3452)522-00
            </span>

            <div class="gray header_menu">
                <input type="button" value="Кредитные карты"> <span class="menu_border"></span>
                <input type="button" value="Вклады"> <span class="menu_border"></span>
                <input type="button" value="Дебетовая карта"> <span class="menu_border"></span>
                <input type="button" value="Страхование"> <span class="menu_border"></span>
                <input type="button" value="Друзья"> <span class="menu_border"></span>
                <input type="button" value="Интернет-банк">
            </div>
        </div>

        <div class="body">
            <p class="body_path"><a href="#">Главная</a> - <a href="#">Вклады</a> - Калькулятор</p>

            <div class="calculator">
                <p class="calc_header">Калькулятор</p>
                
                <p><span class="calc_label">Дата оформления вклада</span> <input type="date" class="calc_input"></p>
                <p><span class="calc_label">Сумма вклада </span> <input type="text" class="calc_input" value="10 000"></p>
                <p><span class="calc_label">Срок вклада</span> <select class="calc_input"></select></p>
                <p><span class="calc_label">Пополнение вклада</span> <input type="radio"> Нет <input type="radio"> Да</p>
                <p><span class="calc_label">Сумма пополнения вклада</span> <input type="text" class="calc_input" value="10 000"></p>

                <p><input class="calc_button" type="button" value="Рассчитать"> <span class="result_label">Результат:</span> 10 250 руб</p>
            </div>
        </div>

        <div class="gray footer">
            <a href="#">Кредитные карты</a>
            <a href="#">Вклады</a>
            <a href="#">Дебетовая карта</a>
            <a href="#">Страхование</a>
            <a href="#">Друзья</a>
            <a href="#">Интернет-банк</a>
        </div>
    </body>
</html>