<?php
require_once('sessioncheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<?php
if(isset($_GET['id']))
{
    //details info of users
    $editid = addslashes(trim($_GET['id']));
    $sql = "SELECT * FROM users WHERE id = $editid";
    include_once('connection.php');
    $qry = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        while($r = mysqli_fetch_assoc($qry))
        {
            $uid = $r['id'];
            $uname = $r['username'];
            $upass = $r['password'];
            $uemail = $r['email'];
            $urole = $r['role'];
            $ustatus = $r['status'];
        }
        ?> 
       <form method="POST" action="edituserprocess.php" name="editUser">
        <fieldset><legend><?php echo $uname;?> Edit Records</legend>
        <input type="hidden" name="id" value="<?php echo $uid;?>" />
        <input type="text" name="username" value="<?php echo $uname;?>" /><br/>
        <input type="text" name="password" placeholder="leave bank if you don't want to chage the password" /><br/>
        <input type="email" name="email" value="<?php echo $uemail;?>" /><br/>
        <input type="number" name="role" value="<?php echo $urole;?>" /><br/>
        <input type="radio" name="status" value="1" <?php if($ustatus==1) echo "checked";?>>Active
        <input type="radio" name="status" value="0" <?php if($ustatus==0) echo "checked";?>>Deactive
        <input type="submit" name="submit" value="UPdate"/>
        </fieldset>
        </form>
<?php
}
}
else{
    header('Location: getallusers.php');
}
?>
</body>
</html>