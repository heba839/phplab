<?php
phpinfo();


define("HEBA", "http://localhost/day1%20php/test.php");
echo HEBA;
echo"<br>";

echo __file__ ;
echo "<br>";
echo "<pre>";
print_r ($_SERVER);
echo "</pre>";

echo "<br>";

$brotherage = "10";

switch ($brotherage) {
  case ($brotherage <" 5"):
    echo "stay at home";
    break;
  case ($brotherage == "5"):
    echo "go to kindergarden";
    break;
  case ($brotherage=="6" ||"7"||"8"||"9"||"10"):
    echo "go to grade";
    break;
  
}




?>