 <!DOCTYPE html>
<html>
<body>
<?php
$x="vvvvvv";
$y=substr($x,-3);
echo $y;
echo "<br>";
if($x[0]==$y[0]){
echo "Both have similar start";
}
else{
echo "both are different";
}
?>
</body>
</html>
