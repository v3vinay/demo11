<!DOCTYPE html>
<html>
<body>
<?php
$date = date('F Y');
while (strtotime($date) <= strtotime(date('Y-m') . '-' . date('t', strtotime($date)))) {
    $day_num = date('j', strtotime($date));
    $day_name = date('l', strtotime($date));
    $day_abrev = date('S', strtotime($date));
    $day = "$day_name $day_num $day_abrev";
    $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
    echo $day . '<br>';
}
?>
</body>
</html>
