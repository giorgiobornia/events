 <?php
 
 //library
 $relative_path_to_library = "../../";
 
 include($relative_path_to_library . "./src/php/functions.php");
 
 $current_year = 2019;
 $current_semester = 'semester';
 
 Events::redirect_page($current_year, $current_semester);
 

 ?>
