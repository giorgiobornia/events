 <?php
 
 //library =============
 $library_path = "../../../../"; //folder where the library class is
 
 include($library_path . "./src/php/functions.php");
 
 $institution = "University of Nowhere";  //this string is what you'll see on the page
 $department = "Department of Nothing";   //this string is what you'll see on the page
 
 $discipline = 'discipline';  //this must match the folder name; below you have the translation that you'll see on the page
 $year = 'year';              //this must match the folder name; it is also what you'll see on the page, only Capitalized
 $semester = 'semester';      //this must match the folder name; it is also what you'll see on the page, only Capitalized
  
 
 $discipline_folder_to_string = array(
 "discipline" => "Discipline"  //the first component must match with the folder name above!
 );
 
 $icon_in_toolbar ='';   //we'll leave it empty ///@todo put some default
 
 Seminars::generate_seminar_page_by_topic($library_path, 
                                          $institution, 
                                          $department,  
                                          $discipline, 
                                          $year, 
                                          $semester,
                                          $icon_in_toolbar,
                                          $discipline_folder_to_string); ///@todo here I should only pass my own translation from folder to string
 
 ///@todo make this completely TTU-independent
  
 ?>

 
