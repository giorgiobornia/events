 <?php
 
 //library
 $relative_path_to_library = "../../";
 
 include($relative_path_to_library . "./src/php/functions.php");
 
 $current_year = 'year';
 $current_semester = 'semester';
 
 Seminars::redirect_page($current_year, $current_semester);
 

 ?>
