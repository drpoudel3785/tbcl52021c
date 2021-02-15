<?php
//isset is used for check the existance for variable
//$_GET is used for getting the data from URL
//You can again get the data from the form is Method is GET
if(isset($_GET['id']) && isset($_GET['name']))
{
    $productId = $_GET['id'];
    $productName = $_GET['name'];
    echo "The Product ID is $productId and Product Name is $productName";
}
else
{
    //header is used for redirect
    header('Location: product.php');
}
?>