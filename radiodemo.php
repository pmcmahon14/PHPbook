<html>
<p>Please select your favorite color</p>
<form method="get">
    <input type="radio" name="color" value="red">Red<br>
    <input type="radio" name="color" value="yellow">Yellow<br>
    <input type="radio" name="color" value="green">Green<br>
    <br><br>
    <input type="submit" value="Submit">
    <br><br>
</form>
</html>
<?php
echo "You select:<br><br>";
$hobby = $_GET['color'];
echo ($hobby);
?>