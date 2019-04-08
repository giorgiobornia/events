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
 <?php include($sem_mydepth . "sem_coords.php");  ?>
<!-- Maybe I should make a database for the seminar coords -->
 
 
 <div class="container text-center">

 <br>
 
 <!-- =========================== -->
<!-- =========================== -->
<!-- =========================== -->

 <?php include($sem_mydepth . "events_loop.php");  ?>


  
 
 
  <br>  <br>  <br>

 </div>
</body>
</html>

