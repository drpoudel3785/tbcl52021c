<?php
$uname = "user";
$upass = md5("user");
$uemail = "user@thebritishcollege.edu.np";
$urole = 1;
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
?>