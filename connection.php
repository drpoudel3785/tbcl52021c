<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "l52021c");
//mysqli_connect()
$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
if(!$conn)
{
    echo "Error! While connecting to the database";
}
?>