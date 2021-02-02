<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and Loop</title>
</head>
<body>
<?php
    // array must be defined by array keyword.
    $colors = array("Green" , "Yellow", "Red", "Purple" ,"magenta");
    //There are three types of array in php
    /*
       # 1 Indexed Arrray    # 2. Associative array 
       # 3. Multidimensional Array
    */
    //how to print the array value
echo $colors['1'];
echo "<br/>";
//for debuging purpose use print_r and serialize functions
print_r($colors);
echo "<br/>";
echo serialize($colors);
$colors[2]="blue";
$colors[]="Skyblue";
echo serialize($colors) ."<br/>";
//let print all the values by using loop    //for loop
   echo "<br/>";
   for($i=0; $i<4; $i++)
   {
       echo $colors[$i]. "<br/>";
   }
   
   //let print all the values by using loop
   //for loop
   echo "<br/>";
   for($i=0; $i<count($colors); $i++)
   {
       echo $colors[$i]. "<br/>";
   }

   //alternative for printing these loops contents
   foreach($colors as $value)
   {
    echo $value. "<br/>";
   }


   //associative array
   $names = array("ram"=>22, "Sita"=>32, "Gita"=>34, "Manish"=>23);
   echo "<br/>";
   //trying to pring sitas age
   echo "The age of sita is" .$names["Sita"] ."<br>";

   foreach($names as $key=>$value )
   {
       echo "The Name  is ".$key. " and Age is ". $value. "<br/>";
   }


   //multidimensional Array
   // Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",   "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",   "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",   "email" => "harrypotter@mail.com",
    ),
    array(
        "name" => "Dharma Raj Poudel",   "email" => "DPAUDEL@thebritishcollege.edu.np",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
//getting all the members name and email
foreach($contacts as $key){
    foreach ($key as $k => $v)
    {
        echo  ucfirst($k). " " .strtolower($v). "<br>";
    }
    echo "<hr/>";
}
?>
</body>
</html>
