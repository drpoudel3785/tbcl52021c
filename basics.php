<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Basics</title>
</head>
<body>
<?php
   echo "Good Morning All";
   echo "<br/>";
   echo "<hr/>";
   echo "This is a web applications and technology class";
   echo "<br/>";
   $name="Dharma";
   echo "<h1>Good Morning $name </h1>";

   //Single line comments
   /*Multiple 
   line
   comments
   */
  $qty=5;
  $price=1000;
  $amount=$qty*$price;
  echo "<br/>the total is $amount";
  echo "<br/>the total is ".$amount;
  echo '<br/>the price is $price';
  echo '<br/>the total is ' .$amount;

  //how to get the datatyps
  //gettype() which is built in function
  echo "<br> " .gettype($qty);
  $name="Ram ";
  echo "<br> ".gettype($name); 
  $amt=12.548;
  echo "<br> ".gettype($amt); 
  $amt1='12.548';
  echo "<br> ".gettype($amt1); 
  $res = TRUE;
  echo "<br> ".gettype($res); 

echo "
</body>
</html> ";

?>