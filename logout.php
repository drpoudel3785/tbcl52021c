<?php
require_once('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?php
//to destroy the session 
// unset($_SESSION['username']); 
// session_destroy() 
session_destroy();
header('Location: login.php');
?>
    
</body>
</html>