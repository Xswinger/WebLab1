//Функция проверки значений
function checkInputValues(xValues, yValue, rValues) {

    function checkX() {
        for (let i = 0; i < xValues.length; i++) {
            if (xValues[i].checked) {
                xValue = xValues[i];
                return true;
            }
        }
        invalidX();
        return false;
    }

    function checkY() {
        if (yValue.value.trim()) {
            if (Number(yValue.value.trim()) > -5 && Number(yValue.value.trim()) < 3) {
                return true;
            } else {
                invalidY();
                return false;
            }
        } else {
            notSetY();
            return false;
        }
    }

    function checkR() {
        for(let i=0; i < rValues.length; i++) {
            if (rValues[i].checked) {
                rValue = rValues[i];
                return true;
            }
        }
        invalidR();
        return false;
    }

    let checkValidation = checkX() && checkY() && checkR();

    infoBox.innerHTML = infoValidation;

    return checkValidation;
}