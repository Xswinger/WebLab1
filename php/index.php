<?php
include "checker.php";

//Проверка попадания в 1 четверть
function checkFirstQuarter($x, $y, $r) {
    if (($x >= 0 && $y >= 0) && ($x * $y <= $r) && ($x <= $r && $y <= $r)) {
        return true;
    } else {return false;}
}

//Проверка попадания в 2 четверть
function checkSecondQuarter($x, $y, $r) {
    if (($x <= 0 && $y >= 0) && ((pow($x,2)) + (pow($y,2)) < ($r/2))) {
        return true;
    } else {return false;}
}

//Проверка попадания в 3 четверть
function checkThirdQuarter($x, $y, $r) {
    if (($x <= 0 && $y <= 0) && (($r * ($r/2)) >= ($x * $y))) {
        return true;
    } else {return false;}
}

session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array();
}

$x = @$_GET['x_coordinate'];
$y = @$_GET['y_coordinate'];
$r = @$_GET['r_coordinate'];
$time = @$_GET['time'];

if (checkFirstQuarter($x, $y, $r) || checkSecondQuarter($x, $y, $r) || checkThirdQuarter($x, $y, $r)) {
    $check_hit = "Попадание";
}
else {
    $check_hit = "Промах";
}

if (checkX($x) && checkY($y) && checkR($r)) {
    $lead_time = round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 7);
    $current_time = date("j F Y G:i:s", time() - $time*60);
    $request = array("x" => $x, "y" => $y, "r" => $r, "check_hit" => $check_hit, "current_time" => $current_time, "lead_time" => $lead_time);
    $_SESSION['data'][] = $request;
}

foreach ($_SESSION['data'] as $datum) {
    echo "<tr class='columns'>";
    echo "<td>" . $datum['x'] . "</td>";
    echo "<td>" . $datum['y'] . "</td>";
    echo "<td>" . $datum['r'] . "</td>";
    echo "<td>" . $datum['current_time'] . "</td>";
    echo "<td>" . $datum['lead_time'] . "</td>";
    echo "<td>" . $datum['check_hit'] . "</td>";
    echo "</tr>";
}