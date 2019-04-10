 <?php
 
 $sem_mydepth = "../";
 
 include($sem_mydepth . "functions.php");

 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 2;
 $day_begin = 2;
 $month_end = 3;
 $day_end = 3;

 generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end);

 ?>
