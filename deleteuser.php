<?php
require_once('sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
</head>
<body>

<?php
if(isset($_GET['id']))
{
    $deleteid =  addslashes(trim($_GET['id']));
    //sql
    $sql ="DELETE from users WHERE id =$deleteid";
    //connection
    include_once('connection.php');
    //querying
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        header("Location: getallusers.php?msg=User ID $deleteid Deleted Successfully");
    }
}
else{
    header('Location: getallusers.php');
}
?>  
</body>
</html>