<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox example</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{

    foreach($_POST['course'] as $item)
    {
        echo $item. " ";
    }
}
?>
<form method="POST" name="checkbox" action="">
    <input type="checkbox" name="course[]" value="PHP" >PHP
    <input type="checkbox" name="course[]" value="JAVA"  >JAVA
    <input type="checkbox" name="course[]" value="NET" >.NET
    <input type="checkbox" name="course[]" value="ANDROID"  >ANDROID
    <input type="submit" name="submit" vlaue="Send"/>
</form>
    
</body>
</html>