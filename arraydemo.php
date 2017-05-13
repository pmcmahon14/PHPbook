<html>
<body>
<?php
$a = array("zero", "one", "two");
echo "In array('zero', 'one', 'two'): <br><br>";
foreach ($a as $key=>$v) {
    echo "The number ".$key." element:<br>";
    echo "key is ".$key.", ";
    echo "value is: ".$v."<br><br><br>";
}
?>
</body>
</html>
