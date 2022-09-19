//Изменение выбранного бокса для X
function changeActiveCheckboxX(id) {
    let checkbox = document.querySelectorAll('.x');
    for (let i = 0; i < checkbox.length; i++) {
        if (checkbox[i].id !== id) {
            $(checkbox[i]).prop('checked', false);
        }
    }
}

//Изменение выбранного бокса для R
function changeActiveCheckboxR(id) {
    let checkbox = document.querySelectorAll('.r');
    for (let i = 0; i < checkbox.length; i++) {
        if (checkbox[i].id !== id) {
            $(checkbox[i]).prop('checked', false);
        }
    }
}