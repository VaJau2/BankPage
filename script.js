function loadYears() {
    for(let year = 1; year <= 5; year+=1) {
        let temp_option = document.createElement("option");
        let yearName = "год";
        if (year > 1)
        {
            yearName = "года";
            if (year > 4)
            {
                yearName = "лет";
            }
        }

        temp_option.innerHTML = year + " " + yearName;
        temp_option.value = year;
        calc_years.appendChild(temp_option);
    }
}

//--------------------------------------------------------
//input number functions
function sliderChange(event, ui) {
    if (event.target.id == "calc_slider1") {
        calc_input1.value = ui.value.toLocaleString();
    }
    else {
        calc_input2.value = ui.value.toLocaleString();
    }
}

function parseSpacedInt(number) {
    number = number.replace(/\s/g, '');
    return parseInt(number);
}

function sliderToLocale(input) {
    let value = parseSpacedInt(input.value);
    input.value = value.toLocaleString();

    if (input.id == "calc_input1") {
        $("#calc_slider1").slider( "value", value );
    }
    else {
        $("#calc_slider2").slider( "value", value );
    }
}

function sliderCheckMinMax(input) {
    let value = parseSpacedInt(input.value);
    if (value < 1000) {
        value = 1000;
    }
    else if(value > 3000000) {
        value = 3000000;
    }
    input.value = value.toLocaleString();
}

function daysInMonth (month, year) {
    return new Date(year, month+1, 0).getDate();
}

//--------------------------------------------------------
//ajax function
function makeRequest() {
    let summ1 = parseSpacedInt(calc_input1.value);
    let summAdd = parseSpacedInt(calc_input2.value);

    if (!Number.isInteger(summ1) || !Number.isInteger(summAdd)) 
    {
        alert("Необходимо ввести число");
        return;
    }

    let date = $.datepicker.parseDate( "mm/dd/yy", calc_date.value );
    date.setDate(1);
    date = daysInMonth(date.getMonth(), date.getFullYear());

    let calc_sum_value = calc_sum.checked;

    let requestData = {
        "summ1": summ1,
        "summAdd": summAdd,
        "daysN": date,
        "makeSumm": calc_sum_value,
        "years": calc_years.options[calc_years.selectedIndex].value
    }

    $.ajax({
        type: "POST",
        url: "calc.php",
        data: requestData,
        success: function(data){
            getData(data);
        }
      });
}

function getData(data){
    data = parseInt(data);
    result_label.style.display = "inline";
    result.innerHTML = data.toLocaleString() + " руб";
}



//--------------------------------------------------------
//start functions
$(function() {
    loadYears();

    $("#calc_date").datepicker({
        beforeShow: function() {
            setTimeout(function(){
                $('.ui-datepicker').css('z-index', 3);
            }, 0);
        }
    });

    $(".slider").slider({
        min: 1000,
        max: 3000000,
        slide: sliderChange
    });
});
