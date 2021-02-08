<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt Price</title>
</head>
<body>
    <form name="userLogin" method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="price" placeholder="Price" />
        <input type="submit" name="submit" value="Get Price" />
    </from>
<?php
  if(isset($_POST['submit']))
 {
   $pr = $_POST['price'];
   echo "<table border=1>
          <tr>
             <td> Quantity</td>
             <td>Price</td>
             </tr>";
             for ($i=1; $i<=10; $i++)
             {
                 echo "<tr><td> $i </td><td>". $i*$pr."</td></tr>";
             }
             echo "</table>";
}
?>  
</body>
</html>