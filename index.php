<?php
function multiply($x, $y) {
    calculate($x, $y);
}
function calculate ($a, $b){
    $result = $a * $b;
    echo ("The value is $result");
}
?>
<?php
multiply (10, 20);
?>

