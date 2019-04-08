<!DOCTYPE html>

 
<html>
<head>

 <?php $sem_mydepth = "../../"; ?>
 <?php include($sem_mydepth . "sem_head_links.php");  ?>
 <?php include($sem_mydepth . "sem_title.php");  ?>
 
</head>

<body>


 <?php include($sem_mydepth . "sem_navbar.php");  ?>
 <?php include($sem_mydepth . "sem_banner.php");  ?>

 <?php $mysem = "Spring 2019"; ?>
 <?php $myroom = "MATH 110"; ?>
 <?php $mytime = "Wednesday, 4-5 pm"; ?>
 
 <?php event_default_coords_banner($mysem, $myroom, $mytime); ?>
 
 
 <div class="container text-center">

 <?php include($sem_mydepth . "events_loop.php");  ?>
 
 
  <br>
  <br>
  <br>
  

 </div>
</body>
</html>

