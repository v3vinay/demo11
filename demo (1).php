<?php
$input= "Roses are Pretty";
$pattern = "/Roses/";
if(preg_match($pattern, $input)){
echo "Match Found";
}
elseif($pattern="/Hii/"){
echo "nil match";
}
?>