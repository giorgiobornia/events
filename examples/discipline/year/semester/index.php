 <?php
 
 //library =============
 $library_path = "../../../../"; //folder where the library class is
 
 include($library_path . "./src/php/functions.php");
 
 $topic = 'discipline';
 $year = 'year'; 
 $semester = 'semester';
  
 $institution = "University";
 $department = "Department";
 
 $discipline_array = array(
 "discipline" => "Discipline"  //the first component must match with the folder name above!
 );
 
 $icon_in_toolbar ='';   //we'll leave it empty ///@todo put some default
 
 Seminars::generate_seminar_page_by_topic($library_path, 
                                          $institution, 
                                          $department,  
                                          $topic, 
                                          $year, 
                                          $semester,
                                          $icon_in_toolbar,
                                          $discipline_array); ///@todo here I should only pass my own translation from folder to string
 
 ///@todo the semester conversion should be passed explicitly, just like the discipline conversion
 ///@todo make this completely TTU-independent
  
 ?>

 
