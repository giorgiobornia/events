 <?php
 
 //library
 $library_path = "../../seminars_lib/";

 include($library_path . "./src/php/functions.php");
 
 //application
 $relative_path_to_app = '../';

 include($relative_path_to_app . './src/php/ttu_math_seminars.php');

 
 Seminars::redirect_page(ttu_math_seminars::$current_year, ttu_math_seminars::$current_semester);
 

 ?>
