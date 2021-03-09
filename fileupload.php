<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    //error, size, type, name, tmp_name
    $uploads_dir = 'uploads/';
        $tmp_name = $_FILES["uploadMe"]["tmp_name"];
        $type = $_FILES["uploadMe"]["type"];
        $size = $_FILES["uploadMe"]["size"]; //bytes
       if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png" || $type=="image/gif" )
       {
           if($size<=400*1024) //bytes
           {
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["uploadMe"]["name"]);
            if(move_uploaded_file($tmp_name, "$uploads_dir/$name"))
             echo "File Uploaded Successfully";
            }
            else
                echo "You can upload on 400KB size";
         }
       else
           echo "Only Allowed JPEG or JPG or PNG or GIF";
}
?>
<form method="POST" name="fileUpload" action="" enctype="multipart/form-data">
    <fieldset>
        <legend>Please Choose File to Upload</legend>
        <input type="file" name="uploadMe" />
        <input type="submit" name="submit" value="Upload"/>
    </fieldset>
</form>
    
</body>
</html>