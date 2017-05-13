<html>
<?php
echo "2.1 ";
$a = 100; $b = 200;
$result1 = ($a<$b) ? "apple <br>" : "banana <br>";
echo $result1;
$result2 = ($a>$b) ? "apple <br>" : "banana <br>";
echo $result2;
?>
</html><br><br>
<html>
<?php
echo "2.2 ";
$add = 100 + 200; echo $add;
$div = 800 / 200; echo $div;
$mod = 100 % 3; echo $mod;
$inc = 10; echo ++$inc;
$str = "abc"."de"; echo $str;
?>
</html><br><br>
<html>
<?php
echo "2.3 ";
$a = true; $b = false;
$test1 = ($a && $b) ? "true":"false";
$test2 = ($a || $b) ? "true":"false";
$test3 = (!$a) ? "true":"false";
$test4 = (!$b) ? "true":"false";
echo $test1;
echo $test2;
echo $test3;
echo $test4;
?>
</html>

