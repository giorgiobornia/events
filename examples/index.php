 <?php
 
 //library
 $library_path = "../";

 include($library_path . "./src/php/functions.php");
 
 $current_year = 'year';
 $current_semester = 'semester';
 
 Seminars::redirect_page($current_year, $current_semester);
 

 ?>
