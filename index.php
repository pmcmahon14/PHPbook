<html>
<?php
echo("Hello World! ");
?>
<?php
echo ("OK");//output OK this comment is used on a single line
echo(" Hello");/*output Hello
this comment is used on multiple lines*/
?>
</html><br>
<html>
<?php
echo "PHP said \"Hello World!\"\r";
echo "Hello \t\t\t World!";
?>
</html><br>
<html>
<?php
$num = 200;
function test() {
    $num = 100;
}echo $num;
?>
</html><br>
<html>
<?php
function sum($a, $b, $c) {
    $sum = $a+$b+$c;
    echo $sum;
}
sum(3, 6, 9);
?>
</html>
