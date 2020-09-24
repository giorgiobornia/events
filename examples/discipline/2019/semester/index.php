
 <?php
                                                        

//==========================================
 //library
 $relative_path_to_library = "../../../../";

 include_once($relative_path_to_library . "./src/php/functions.php");  //this is the include that works

 //application-specific
 $relative_path_to_app = '../../../../';

 $base_folder = 'events_lib';  //@todo could we avoid specifying this string?
 
 $filename = __FILE__;
  
 $array = Events::get_discipline_year_semester($filename);

 
 $institution = "University of Nowhere";  //this string is what you'll see on the page
 $department = array("Department of Nothing",'https://www.google.com');   //this string is what you'll see on the page


 //=================
 $colloquium_array = array(
 'examples' => array('Examples', array("discipline" => "Discipline") )
   //the first component must match with the folder name above!
 );
 
$all_schemes = array();
array_push($all_schemes, $colloquium_array);

$father_scheme_string = Events::get_father_scheme_from_filename($filename, $base_folder);
$father_scheme_idx = Events::get_father_scheme_index_from_string($father_scheme_string, $all_schemes);
 //=================

 
 $icon_in_toolbar ='';   //we'll leave it empty ///@todo put some default
 
 $are_input_files_local = true;
 
 
 $array = Events::get_discipline_year_semester($filename);

 
 $event_container_remote_path_prefix = ''; //no final slash here!!!
 
 $event_container_local_path_prefix = $relative_path_to_app; //no final slash here!!!

 
 Events::generate_topic_page_by_topic_year_semester($relative_path_to_library,
 
                                                        $event_container_remote_path_prefix,
                                                        $event_container_local_path_prefix,
                                                        $are_input_files_local,
                                                        
                                                        $institution,
                                                        $department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                                    $all_schemes,
                                                                    $father_scheme_idx
                                                                    );
 
 ?>
 
