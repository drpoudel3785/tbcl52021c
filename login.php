<?php
// Start the session
session_start();

//checking the form is submitted or not
  if(isset($_POST['submit']))
  {
      $name = $_POST['uname'];
      $pass = md5($_POST['upass']);
      //checking the username and password is empty
      if(!empty($name) && !empty($pass))
      {
        //Making SQL Statement
          $sql = "SELECT * FROM users WHERE username='$name' && password = '$pass' && status=1";
        //Making Connection
          include('connection.php');  
          //Executing Query
          $qry = mysqli_query($conn, $sql);
       // var_dump($qry);
          //Counting the number or rows
          $count = mysqli_num_rows($qry);
          if($count==1)
          {  
            $_SESSION['username'] = $name;
            
            header("Location: getallusers.php"); 
          }
          else { echo "Login Failed"; }
      }
      else{  echo "Pls fill all the fields";   }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="POST" action="" name="Login">
   <input type="text" name="uname" placeholder="Username"/>
   <input type="password" name="upass" placeholder="Password" />
   <input type="submit" name="submit" value="Login" />
</form>
    
</body>
</html>