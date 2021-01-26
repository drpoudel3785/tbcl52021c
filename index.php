<!DOCTYPE html>
<html lang="en">
<head>
<title>Site Layout</title>
    <?php include('headpart.php');?>
</head>
<body>
    <div class="container">
      <?php include('banner.php');?>

       <div class="row">
          <div class="col-xl-12">
          
          
         <?php include('menu.php');?>
          
          
          </div>
       </div>

       <div class="row">
          <div class="col-xl-3"><?php include('sidebar.php');?> </div>
          <div class="col-xl-9">Main Content</div>
       </div>


       <?php include('footer.php');?>
    </div><!-- container-->



    
</body>
</html>