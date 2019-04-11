 <?php
 
  include("../functions.php");

 $title_in_toolbar = 'Seminars by week';
 
 $sem_mydepth = "./";
 
 
 Seminars::set_html_head($sem_mydepth, $title_in_toolbar);
 

 
 $year = 2019;
 $semester = "spring"; //lowercase for the folder names
 $month_begin = 4;
 $day_begin = 2;
 $month_end = 4;
 $day_end = 7;

 Seminars::generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end);

 ?>
