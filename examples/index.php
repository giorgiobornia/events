 <?php
 
 //library
 $library_path = "../";

 include($library_path . "./src/php/functions.php");
 
 $current_discipline = 'discipline'; 
 $current_year = 2019;
 $current_semester = 'semester';
 
 $path = $current_discipline . '/' . $current_year . '/' . $current_semester;
 
 Events::redirect_page_with_path($path);
 

 ?>
