<?php

function checkX($x) {
    if (in_array($x, array("-3", "-2", "-1", "0", "1", "2", "3", "4", "5"))) {
        return true;
    } else {return false;}
}

function checkY($y) {
    if (is_numeric($y) && $y < 3 && $y > -5) {
        return true;
    } else {return false;}
}

function checkR($r) {
    if (in_array($r, array("1", "2", "3", "4", "5"))) {
        return true;
    } else {return false;}
}
