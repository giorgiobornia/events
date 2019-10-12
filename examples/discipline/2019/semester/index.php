
 <?php
                                                        

//==========================================
 //library
 $relative_path_to_library = "../../../../";

 include_once($relative_path_to_library . "./src/php/functions.php");  //this is the include that works

 //application-specific
 $relative_path_to_app = '../../../';

 
 $filename = __FILE__;
  
 $array = Events::get_discipline_year_semester($filename);

 
 $institution = "University of Nowhere";  //this string is what you'll see on the page
 $department = array("Department of Nothing",'https://www.google.com');   //this string is what you'll see on the page


 //=================
//    $is_seminar_colloquium_all: 0 seminar, 1 colloquium, 2 all
 $is_seminar_colloquium_all = 1; 
 
 $discipline_array = array();
  
 $colloquium_array = array(
 "discipline" => "Discipline"  //the first component must match with the folder name above!
 );
 
 $seminar_container =  '';
 $colloquium_container = '';
 //=================

 
 $icon_in_toolbar ='';   //we'll leave it empty ///@todo put some default
 
 $are_input_files_local = true;
 
 
 $array = Events::get_discipline_year_semester(__FILE__);

 
 $event_container_remote_path_prefix = ''; //no final slash here!!!
 
 $event_container_local_path_prefix = $relative_path_to_app; //no final slash here!!!

 
 
 Events::generate_seminar_page_by_topic_year_semester($relative_path_to_library,  //to find src/ in the library
 
                                                        $event_container_remote_path_prefix,
                                                        $event_container_local_path_prefix,
                                                        $are_input_files_local,
                                                        
                                                        $institution,
                                                        $department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                        
                                                        $discipline_array,
                                                        $colloquium_array,
                                                        $seminar_container,
                                                        $colloquium_container,
                                                        $is_seminar_colloquium_all
                                                        ///@todo I am adding a new argument here, and later I will remove several others
                                                        );                                                         
  
 ?>
 
