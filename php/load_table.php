<?php
session_set_cookie_params(0);
session_start();

if(isset($_SESSION['data'])) {
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
}
