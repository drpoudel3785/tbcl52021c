<?php
if(isset($_POST['submit']))
{
$uname = $_POST['username'];
$upass = md5($_POST['password']);
$uemail = $_POST['email'];
$urole = 2;
$ustatus = 1;
//Writing SQL
$sql = "INSERT INTO users(username, password, email, role, status) VALUES ('$uname', '$upass', '$uemail' , '$urole', '$ustatus')";
//connecting to db
include('connection.php');
//mysqli_query()
$qry = mysqli_query($conn, $sql);

if($qry)
{
    echo "User Inserted Successfully";
}
else{
    echo "Oops! Something Error";
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<form  method="POST" action="" name="Register">
  <input type="text" name="username" placeholder="Username" />
  <input type="password" name="password" placeholder="Password" />
  <input type="email" name="email" placeholder="you@domain.com" />
  <input type="submit" name="submit" value="Register"/>

</from>
    
</body>
</html>