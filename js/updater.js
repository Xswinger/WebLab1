let xValues = document.querySelectorAll('.x');
let yValues = document.querySelector('.y');
let rValues = document.querySelectorAll('.r');
let xValue;
let yValue;
let rValue;
let infoBox = document.querySelector('.validation_message');
let infoValidation = '';

//Отправка запроса при загрузке DOM
$(document).ready(function () {
    $.get("php/load_table.php")
        .done(function(data) {
        $("#result_table>tbody").html(data);
    })
})

//Отправка запроса при нажатии кнопки
$("#forms").on("submit", function (event) {
    event.preventDefault();
    infoValidation = "";
    if (checkInputValues(xValues, yValues, rValues)) {
        yValue = Number(yValues.value.trim()).toFixed(2);
        $.get("php/index.php", {x_coordinate: xValue.value, y_coordinate: yValue, r_coordinate: rValue.value, time: new Date().getTimezoneOffset()}).done(function (data) {
            $(".check_button").attr("disabled", false);
            $("#result_table>tbody").html(data);
        }).fail(function () {
            $(".check_button").attr("disabled", false);
        })
    }
})