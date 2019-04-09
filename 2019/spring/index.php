 <?php
 
 $sem_mydepth = "../../";
 
 include($sem_mydepth . "functions.php");

 $year = "2019";
 $semester = "Spring";
 $room = "MATH 110";
 $weekday = "Wednesday";
 $time = "4-5 pm";

 $discipline = "Applied Mathematics";

 generate_index_page($discipline, $sem_mydepth, $year, $semester, $room, $weekday, $mytime); 
 
 ?>
 
 

