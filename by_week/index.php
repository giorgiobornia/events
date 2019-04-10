 <?php
 
 
 include("../functions.php");

 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 2;
 $day_begin = 6;
 $month_end = 2;
 $day_end = 6;

 generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end);

 ?>
