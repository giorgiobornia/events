 <?php
 
 //library =============
 $relative_path_to_app = "../../../";
 $relative_path_to_library = "../../../../"; //folder where the library class is
 
 include($relative_path_to_library . "./src/php/functions.php");
 
 $institution = "University of Nowhere";  //this string is what you'll see on the page
 $department = array("Department of Nothing",'https://www.google.com');   //this string is what you'll see on the page
 
 $discipline = 'discipline';  //this must match the folder name; below you have the translation that you'll see on the page
 $year = 'year';              //this must match the folder name; it is also what you'll see on the page, only Capitalized
 $semester = 'semester';      //this must match the folder name; it is also what you'll see on the page, only Capitalized
  
 
 $discipline_folder_to_string = array(
 "discipline" => "Discipline"  //the first component must match with the folder name above!
 );
 
 $icon_in_toolbar ='';   //we'll leave it empty ///@todo put some default
 
 $are_input_files_local = true;
 
 $math_server_url_base = ''; //not needed if files are local
 
 $array = Seminars::get_discipline_year_semester(__FILE__);

 Seminars::generate_seminar_page_by_topic_year_semester($relative_path_to_library,
                                                        $server_url_base,
                                                        $relative_path_to_app,
                                                        $are_input_files_local,
                                                        $institution,
                                                        $department,
                                                        $array,
                                                        $icon_in_toolbar,
                                                        $discipline_folder_to_string);
  
 ?>

 
