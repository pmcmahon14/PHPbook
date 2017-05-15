<html>
<?php
class one{ //more than one class fixes icon problem but still nothing on page

}
class setDate { //define a class "setDate"
    var $day;  //declare three variable members
    var $month;
    var $year;
    function construct($m,$d,$y) {  //constructor
        $this->month = $m;  //initialization
        $this->day = $d;
        $this->year = $y;
        echo "Constructor is called!<br><br>";
        echo "The date is:".$this->month."/".$this->day."/".$this->year;
        echo "<br><br>";
    }
    function destruct(){  //destructor
        echo "Destructor is called!";
    }
}
$obj = new setDate("12","25","2016");  /*create an object and call constructor automatically*/
?>
</html>
