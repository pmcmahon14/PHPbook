<?php
echo "while statement: <br>";
$value1 = 1;
while ($value1 <=10) {
    echo $value1."&nbsp;";
    $value1++;
}
echo "<br><br>";
echo "do ... while statement: <br>";
$value2 = 1;
do {
    echo $value2."&nbsp;";
    $value2++;
} while ($value2 <=10);
echo "<br><br>";
echo "for statement: <br>";
for ($i=1; $i<=10; $i++) {
    $value3 = $i;
    echo $value3."&nbsp;";
}
?>