 <?php
 
 //library
 $library_path = "../";

 include($library_path . "./src/php/functions.php");
 
 $current_discipline = 'discipline'; 
 $current_year = 'year';
 $current_semester = 'semester';
 
 $path = $current_discipline . '/' . $current_year . '/' . $current_semester;
 
 Seminars::redirect_page_with_path($path);
 

 ?>
