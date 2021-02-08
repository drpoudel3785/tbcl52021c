<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form name="userLogin" method="POST" action="" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username" />
        <input type="text" name="password" placeholder="Passowrd" />
        <input type="submit" name="submit" value="Login" />
    </from>
<?php
   //Captucher the data from the form
   // $_GET $_POST $_REQUEST
// isset()   empty()
 //Trying to get the date if form is submitted
 if(isset($_POST['submit']))
 {
   $uname = $_POST['username'];
   $pass = $_POST['password'];
   if(empty($uname) && empty($pass))
   {
       echo "Please fill the Username and password";
   }
   else if(empty($pass))
   {
       echo "Please fill the password";
   }
   else if(empty($uname))
   {
       echo "Please fillUsername";
   }
   else{
    echo "The User name is $uname and Password is" .$pass;
   }
}
?>  
</body>
</html>