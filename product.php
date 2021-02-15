<?php
$pid =  123;
$pname = "Mother Board";

$products = array("123"=>"Mother Board", "124"=>"Ram", "125"=>"Hard Disk");

foreach($products as $k=>$v)
{
echo "<a href='productdetails.php?id=".$k."&name=".$v."'>".$v."</a> <br/>";
}
?>