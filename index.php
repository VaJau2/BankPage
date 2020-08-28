<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="script.js"></script>
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
                
                <p><span class="calc_label">Дата оформления вклада</span> 
                    <input id="calc_date" type="text" class="calc_input">
                </p>

                <p><span class="calc_label">Сумма вклада </span> 
                    <input id="calc_input1" class="calc_input" type="text" onkeyup="sliderToLocale(this)" onchange="sliderCheckMinMax(this)">
                    <span class="slider_area">
                        <span id="calc_slider1" class="slider"></span>
                        <span>1 тыс. руб.</span>
                        <span>3 000 000</span>
                    </span>
                </p>

                <p><span class="calc_label">Срок вклада</span> <select name="years" id="calc_years" class="calc_input"></select></p>
                <p><span class="calc_label">Пополнение вклада</span> 
                    <input type="radio" name="calc_radio" checked> Нет 
                    <input id="calc_sum" type="radio" name="calc_radio"> Да
                </p>
                <p><span class="calc_label">Сумма пополнения вклада</span> 
                    <input id="calc_input2" class="calc_input" type="text" onkeyup="sliderToLocale(this)" onchange="sliderCheckMinMax(this)">
                    <span class="slider_area">
                        <span id="calc_slider2" class="slider"></span>
                        <span>1 тыс. руб.</span>
                        <span>3 000 000</span>
                    </span>
                </p>

                <p><input class="calc_button" type="button" value="Рассчитать" onclick="makeRequest()"> 
                    <span id="result_label">Результат:</span> <span id="result"></span>
                </p>
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