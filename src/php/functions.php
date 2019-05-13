<?php


class Seminars {

 
 public static function get_discipline_year_semester($file_in) {
 //retrieve the information from the path 
 
 $current_file = $file_in;
 $current_file = str_replace('\\', '/', $current_file);  //for Windows file paths

 $explosion = explode('/',$current_file);
 
//  print_r($explosion);
  
 $array[0] = $explosion[count($explosion) - 4];
 $array[1] = $explosion[count($explosion) - 3];
 $array[2] = $explosion[count($explosion) - 2];
 
  return $array;


 }
 
private static function get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local) {
//this is the prefix wrt. the seminars folder

  $prefix = '';

 if ($are_input_files_local == true) { $prefix = $local_path_prefix  /*. '/'*/; }  ///@todo these paths MUST already have a slash in them; I should do a function that checks this
 else {                                $prefix = $remote_path_prefix /*. '/'*/; }  ///@todo putting an additional '/' is actually not always a good idea

 return $prefix;

}


public static function include_file($remote_path_prefix, $local_path_prefix, $file, $are_input_files_local) {
//either use include for local files, or use curl request for external ones
//include of external files may be disabled by a server for security reasons


 if ($are_input_files_local == true) {
       
 include($local_path_prefix . '/' . $file);
 
 }
 
 else {
 
  $absolute_url = $remote_path_prefix . '/' . $file;
  
       // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $absolute_url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 
      
         echo $output;

        // close curl resource to free up system resources 
        curl_close($ch); 
        
  }

}


public static function redirect_page($year, $semester) {
///@todo see if you can even avoid generating the index page

// There are other solutions to this based on Apache or PHP

     echo '<!DOCTYPE html>';

     echo '<html>';
     echo '<head>';
     echo '<title> Redirecting </title>';
     echo '<meta http-equiv="refresh" content="0;url=./' . $year .'/' . $semester . '/' . '">';
     echo '</head>';
     echo '<body>';
     echo '</body>';
     echo '</html>';


}



public static function generate_seminar_page_list($discipline_array, $colloquia) {

$depth_all_sems = Seminars::go_up(3);

     echo '<br/>';
     
     echo '<h3> &nbsp <strong> Colloquia and seminars by topic </strong> </h3>';

     echo '<br/>';
     echo '<br/>';
     
     echo '<ul>';
     echo '<li>';
     echo '<a href="' . $depth_all_sems  . $colloquia . '/' . '"> Colloquia </a>';
     echo '</li>';
     echo '</ul>';
     
     echo '<br/>';
     echo '<br/>';
     
     echo '<ul>';
     
    foreach ($discipline_array as $discipline => $discipline_string) {
    
     echo '<li>';
     echo '<a href="' . $depth_all_sems . './' . $discipline . '">' . $discipline_string . '</a>';
     echo '</li>';
     echo '<br/>';
     
    }

     echo '</ul>';
     
}


public static function generate_seminar_page_by_topic_year_semester($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $t_y_s, $icon_in_toolbar, $discipline_array) {

   $discipline = $t_y_s[0];
   $year       = $t_y_s[1];
   $semester   = $t_y_s[2];

   Seminars::generate_seminar_page_by_topic($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $discipline, $year, $semester, $icon_in_toolbar, $discipline_array);

}


private static function generate_seminar_page_by_topic($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $discipline, $year, $semester, $icon_in_toolbar, $discipline_array) {

 
echo '<!DOCTYPE html>';

echo '<html>';


echo '<head>';

  $title_in_toolbar = $discipline_array[ $discipline ];
  
  Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
  
echo '</head>';

  
  echo '<body>';


    Seminars::set_seminars_by_topic_body($remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $discipline, $year, $semester, Seminars::$abstracts_folder, Seminars::$images_folder, $discipline_array);

  echo '</body>';
  
  

echo '</html>';

 }
 

 
 
public static function generate_page_with_all_seminars_by_time_range($library_path,  
                                                                     $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                                     $institution, 
                                                                     $department,
                                                                     $icon_in_toolbar,
                                                                     $year,
                                                                     $semester,
                                                                     $month_begin,
                                                                     $day_begin,
                                                                     $month_end,
                                                                     $day_end,
                                                                     $discipline_array) {

// Reading the Month and Day columns, I have to see whether or not the day is in the range that I provide
// if so, I will store that array and make a map that will be parsed by a function

echo '<!DOCTYPE html>';

echo '<html>';


echo '<head>';

   $title_in_toolbar = 'Colloquia and Seminars';

   Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
   
echo '</head>';



  echo '<body>';
  
  $discipline = 'all';
  
  Seminars::navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local, $discipline);
 

 $title = $title_in_toolbar;
 
 Seminars::main_banner($title, $department, $institution);
 
 
 
  echo '<h3> &nbsp <strong> Colloquia </strong> </h3>';
  
    $only_colloquia_in = ttu_math_seminars::$discipline_array;
    $only_colloquia_out = array_splice($only_colloquia_in, 12, 13);
    
   $only_colloquia_bool_print_discipline = false;

    Seminars::set_seminars_by_time_range_body($remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, Seminars::$abstracts_folder, Seminars::$images_folder, $only_colloquia_out, $only_colloquia_bool_print_discipline);
    
    
    
  echo '<h3> &nbsp <strong> Seminars </strong> </h3>';

    $only_seminars_in = ttu_math_seminars::$discipline_array;
    $only_seminars_out = array_splice($only_seminars_in, 0, 12);
    
    $only_seminars_bool_print_discipline = true;
 
    Seminars::set_seminars_by_time_range_body($remote_path_prefix, $local_path_prefix, $are_input_files_local, $institution, $department, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, Seminars::$abstracts_folder, Seminars::$images_folder, $only_seminars_out, $only_seminars_bool_print_discipline);  
    
    
  echo '<br>';
  echo '<br>';
  echo '<br>';
  
    
  echo '</body>';
  

echo '</html>';
  
 }


private static function read_csv_file($file) {
  
 $array_from_file = file($file); ///@todo this command seems to work only with CSV files coming from Linux/Mac, but not from Windows... the diff command says files are equal...!
 
//  print_r($array_from_file);

  $csv_map = array_map('str_getcsv', $array_from_file); 

  return $csv_map;
  
}


private static function read_events_file_and_attach_topic_year_semester($prefix, $discipline, $year, $semester) {

 $file_to_parse = $prefix . '/' . $discipline . '/' . $year . '/' . $semester . '/' . Seminars::$events_file;
 
 $csv_map = Seminars::read_csv_file($file_to_parse);
  
  for ($row = 0; $row < count($csv_map); $row++) {
  
  array_push($csv_map[$row], $discipline);
  array_push($csv_map[$row], $year);
  array_push($csv_map[$row], $semester);
  
  }

  
  return $csv_map;

 }


public static function set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar) {

// the disadvantage of doing echo instead of including the file with a php include is just when you have to handle single quotes vs double quotes; also, a little lack of readability
// However, the great advantage is that it is very clear what is passed! Previously, the variable coming from the file had to be set, and with the EXACT SAME NAME!
//So it is muuuuch better in the end to use the function!


$description = "Seminars";
$author = "Giorgio Bornia";

 Seminars::set_meta($description, $author);

 Seminars::set_browser_toolbar($title_in_toolbar, $icon_in_toolbar);



 Seminars::set_jquery_lib();
 
 Seminars::set_bootstrap_css_and_javascript_libs();



 Seminars::set_mandatory_libs($library_path);



}




public static function set_mandatory_libs($library_path) {

 Seminars::set_sem_css($library_path);
 
 Seminars::set_latex_rendering_lib();
 
} 
 
 
  private static function set_meta($description, $author) {
  
//  These metas must be first in the head 
 echo ' <meta charset="utf-8"> ';
 echo ' <meta name="viewport" content="width=device-width, initial-scale=1"> ';

// Meta tags for indexing in search engines
 echo ' <meta name="description" content="' . $description . '"> ';
 echo ' <meta name="author"      content="' . $author . '"> ';
  

  }
  
 
 private static function set_sem_css($library_path) {

// This must in the last position to override
 echo '<link rel="stylesheet" href="'  .  $library_path . './src/css/sem_style.css"> ';
 
}


private static function set_latex_rendering_lib() {

//  MathJax
 echo ' <script type="text/x-mathjax-config">';
 echo ' MathJax.Hub.Config({';
 echo ' tex2jax: {';
//how it should be printed
//  inlineMath:  [ ['$','$'],   ['\\(','\\)'] ],
//  displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
//how it should be printed - end
//how to get it
 echo ' inlineMath:  [ [\'$\',\'$\'],   [\'\\\(\',\'\\\)\'] ],    ';  //some escaping is needed for the ' and \ fonts
 echo ' displayMath: [ [\'$$\',\'$$\'], ["\\\[","\\\]"]     ],    ';  //some escaping is needed for the ' and \ fonts
//how to get it - end
 echo ' processEscapes: true ';
 echo ' }});';
 echo ' </script>';
 
 echo '<script type="text/javascript" async ';
 echo '  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"> ';
 echo '</script> ';
// //  <!--<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>--> <!--THIS WAS DISCONTINUED-->          


}


private static function set_jquery_lib() {

//  jQuery library (must be before JavaScript!)
 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  ';


}



private static function set_bootstrap_css_and_javascript_libs() {

// //  Latest compiled and minified CSS
//  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
// //  Latest compiled JavaScript 
//  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';

 echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';

 echo ' <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
 echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>';
 echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';

}

private static function go_up($directory_levels) {

  $go_back = '';
  
    for ($i = 0; $i < $directory_levels; $i++) $go_back .= '../'; //string concatenation is with .
  
  return $go_back;
 
}



private static function convert_to_associative_array($array_in) {

//convert a normal array of arrays into an associative array having the first column as key and the remaining ones as value

 $assoc_array = array();
  
  for ($i = 0; $i < count($array_in); $i++) {
   
   $array_shifted = array_slice($array_in[$i], 1);
   
   $assoc_array[ $array_in[$i][0] ] = $array_shifted;
   
  }

  return $assoc_array;
  
}


public static function generate_list_past_editions($remote_path_prefix, $local_path_prefix, $are_input_files_local, $discipline) {


 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);

 $prefix_disc = $prefix . $discipline . '/';
 
 $past_years = Seminars::get_active_years($prefix_disc);

 echo 'All terms';

 echo '<br/>';
 
 echo '<ul>';

  foreach ($past_years as $year => $value) {
   echo '<li>' .  $year . ' </a>';
   echo '<ul>';
  foreach ($past_years[$year] as $term) {
     echo '    <li><a href="' . $prefix_disc . $year . '/' . $term . '/">' . $term . '</a></li>';
     }
   echo '  </ul>';
   echo '</li>';
 }
  
 echo '</ul>';
 
 
}


private static function get_active_years($prefix_disc) {

 
 $past_editions = Seminars::read_csv_file($prefix_disc . Seminars::$active_editions_file);


 $past_years = Seminars::convert_to_associative_array($past_editions);
 
 return $past_years;


}


private static function navigation_bar_menu_button($id_target) {


 echo '<button type="button" class="navbar-toggle collapsed" ';
 echo '  data-toggle="collapse" data-target="#' . $id_target . '"' . ' aria-expanded="false" aria-controls="' . $id_target . '">';

 echo '<span class="sr-only">Toggle navigation</span>'; // <!--is this needed?-->
 
 echo '<span class="icon-bar"></span>';
 echo '<span class="icon-bar"></span>';
 echo '<span class="icon-bar"></span>'; //  these are for the three dashes that look like a button

 echo '</button>';

 
}


private static function navigation_bar_header($id_target, $depth_all_sems, $home_all_sems) {


echo '<div class="navbar-header">';

 echo '<a class="navbar-brand" href="'. $depth_all_sems . '">' . $home_all_sems . '</a>';
 
 
 Seminars::navigation_bar_menu_button($id_target);
 
 echo '</div>';
 
}


private static function navigation_bar_past_years($prefix_disc, $id_target) {


 echo '<div id="' . $id_target . '"' . ' class="navbar-collapse collapse" role="navigation">';

 echo '<ul class="nav navbar-nav navbar-right">';
 
 $past_years = Seminars::get_active_years($prefix_disc);
 
 foreach ($past_years as $year => $value) {
   echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">' .  $year . ' </a>';
   echo '  <ul class="dropdown-menu"> ';
  foreach ($past_years[$year] as $term) {
     echo '    <li><a href="' . $prefix_disc . $year . '/' . $term . '/">' . $term . '</a></li>';
     }
   echo '  </ul>';
   echo '</li>';
 }

 echo '</ul>';

 echo '</div>';

 
}


public static function navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local, $discipline) {

 
 echo '<nav class="navbar navbar-expand-lg navbar-fixed-top" role="navigation" id="my_nav">';

 
 echo '<div class="' . Seminars::$bootstrap_container . '">';

 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);

 $prefix_disc = $prefix . $discipline . '/';

 $home_all_sems = 'Colloquia and seminars';
 
 $target_past_years = 'my_navbar';
 
 Seminars::navigation_bar_header($target_past_years, $prefix, $home_all_sems);

 Seminars::navigation_bar_past_years($prefix_disc, $target_past_years);

 echo '</div>';

 
 echo '</nav>';

 echo '<div class="' . Seminars::$bootstrap_container . '"' . ' id="compensate_navbar_height"></div>';

}




public static function main_banner($title, $department, $institution) {

  $dept_name_idx = 0;
  $dept_url_idx = 1;
  

  echo '<div class="my_banner">';    //<!--if the jumbotron stays inside a container it doesn't go all-the-width-->
  echo '<div class="my_filter">';                       //<!--id="" if you set more than one id then the FIRST ONE is taken-->
  echo '<div class="' . Seminars::$bootstrap_container . ' ' . Seminars::$bootstrap_centered . '">';
  echo '      <h1> ' . $title . ' </h1>';
  echo '      <h2> ' . '<a href="' . $department[$dept_url_idx] . '"' . ' style="color: white;"' . '>'  . $department[$dept_name_idx]  . '</a>'. ' </h2>';  
  echo '      <h2> ' . $institution . ' </h2>'; 
  echo '  </div>';
  echo '</div>';
  echo '</div>';

 }
 
 
private static function default_meeting_coords_banner($semester, $year, $week_day, $time, $room) {

 echo '<div class="'. Seminars::$bootstrap_container_fluid . ' ' . Seminars::$bootstrap_centered . '" id="' . Seminars::$sem_header_id . '">';
 
 echo '<h2>';
 echo $semester . ' ' . 
      $year     . ' - ' . 
      $week_day . ', ' . 
      $time . ' - ' . 'room ' . 
      $room;
 echo '</h2>';
 
 echo '</div>';
 
 echo '<br>'; 
 
 }
 
private static function capitalize($string) {

  $string_cap = ucfirst($string);
  
  return $string_cap;

 }
 
 
private static function default_meeting_coords_banner_map($csv, $year, $semester) {
 
 
  Seminars::default_meeting_coords_banner(
      Seminars::capitalize($semester),
      Seminars::capitalize($year),
      $csv[Seminars::$row_default_meeting_data][Seminars::$week_day_default_meeting_idx],
      $csv[Seminars::$row_default_meeting_data][    Seminars::$time_default_meeting_idx],
      $csv[Seminars::$row_default_meeting_data][    Seminars::$room_default_meeting_idx]
      );
 
 } 




private static function set_browser_toolbar($title, $icon_in_toolbar) {
 
//  Title
 echo '<title> ' . $title . ' </title>';
 
//  Favicon
 echo ' <link rel="icon" href="' .  $icon_in_toolbar . '"> ';

 }



private static function about($discipline, $remote_path_prefix, $local_path_prefix, $are_input_files_local) {

    $about_txt_file =
    $discipline . '/' .  
    Seminars::$about_file;

  echo '<div class="' . Seminars::$bootstrap_container . '">';
  
  echo '<br>';       
  
  Seminars::include_file( $remote_path_prefix, $local_path_prefix, $about_txt_file, $are_input_files_local);
  
  echo '<br>';       
  echo '<br>';       

  echo '<div>';
  
   ///@todo mention organizers
   
 
}

private static function set_abstract_id_and_its_toggle($events_map, $row, $base_str) {

  $clock_str = $events_map[$row][Seminars::$time_idx];
  $clock_str = str_replace(' ', '_', $clock_str);
  $clock_str = str_replace(':', '_', $clock_str);
  

    $abstract_id = $base_str . /* either 'toggle_' or '' */ 'abst_' .
      $events_map[$row][Seminars::$discipline_idx]  . '_' . 
      $events_map[$row][Seminars::$year_idx]        . '_' .
      $events_map[$row][Seminars::$month_idx]       . '_' . 
      $events_map[$row][Seminars::$day_idx]         . '_' .
      $clock_str;
      
  return  $abstract_id;
  
}


private static function event_details($events_map, $row, $discipline_array, $bool_print_discipline) {

    echo '<td>';

    echo "<strong>";
    echo  $events_map[$row][Seminars::$week_day_idx] . ", " . Seminars::$months_conv[ $events_map[$row][Seminars::$month_idx] ] . " " . $events_map[$row][Seminars::$day_idx] . ", ";
    echo "</strong>";
    
    echo "<em>";
    echo $events_map[$row][Seminars::$time_idx] . ", ";
    echo "</em>";
    
//     echo "<em>";
    echo "room "  .  $events_map[$row][Seminars::$room_idx] ;
//     echo "</em>";
    echo "<br>";

   if ( $bool_print_discipline == true ) {                                
      echo "<strong>";
        echo $discipline_array[ $events_map[$row][Seminars::$discipline_idx] ];
      echo "</strong>";
      echo "<br>";
    }
    
    $toggle_abstract_id = Seminars::set_abstract_id_and_its_toggle($events_map, $row, 'toggle_');


    echo '<a  style="cursor: pointer; text-decoration: underline; " ';  ///@todo I want to give this the same color as an <a> tag with href= instead of id=
    echo ' id=' . '"' .  $toggle_abstract_id . '"';
    echo '>'; 
    
    echo "<em>";
    echo $events_map[$row][Seminars::$title_idx];
    echo "</em>";
    
    echo '</a>';
    echo "<br>";

    
    ///@todo: see if I can make this be
      //     - a link if href is non-empty in the csv file 
      //     - NOT a link otherwise
    echo '<a   style="cursor: pointer; text-decoration: none;"';
//     echo ' target="_blank" ';
    echo 'href=' . '"' .  $events_map[$row][Seminars::$speaker_url_idx]  .  '"' . '>';
    echo $events_map[$row][Seminars::$speaker_idx];
    echo '</a>';
    echo "<br>";
    echo  $events_map[$row][Seminars::$speaker_department_idx] . ', ' . $events_map[$row][Seminars::$speaker_institution_idx];
    
    echo "<br>";
    
    
    echo '
      </td>';
      
      return $toggle_abstract_id;

}


private static function set_event_image($remote_path_prefix,
                                        $local_path_prefix,
                                        $are_input_files_local,
                                        $images_folder,
                                        $events_map,
                                        $row)  {
                                        
                                        
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);
                                  
   echo '
     <td> 
     <img class="' . Seminars::$sem_image . '" ' .  'src="' .
     $prefix . 
     $events_map[$row][Seminars::$discipline_idx] . '/' .  
     $events_map[$row][Seminars::$year_idx] . '/' . 
     $events_map[$row][Seminars::$semester_idx]  . '/' . 
     $images_folder . '/' . 
     $events_map[$row][Seminars::$speaker_image_idx] . '" alt="image">  </td> ';
     
    
    
    }


private static function set_event_image_and_details($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                   $images_folder,
                                   $events_map, 
                                   $row,
                                   $discipline_array,
                                   $bool_print_discipline) {


    echo '
     <table class="' . Seminars::$sem_item . '">
     <tr>';
     
     Seminars::set_event_image($remote_path_prefix, $local_path_prefix, $are_input_files_local, $images_folder, $events_map, $row);
    
    $toggle_abstract_id = Seminars::event_details($events_map, $row, $discipline_array, $bool_print_discipline);
    
    
    echo '  
      </tr>
      </table> 
     ';

  return $toggle_abstract_id;
  

}


private static function set_abstract($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                     $abstracts_folder,
                                     $events_map,
                                     $row,
                                     $toggle_abstract_id) {
                                     
    $abstract_id = Seminars::set_abstract_id_and_its_toggle($events_map, $row, '');
    

//----------------    
    echo '<span class="abst" ';   ///@todo make this span CENTERED
    
    echo ' id=' . '"' . $abstract_id . '"'; 
    
    echo ' style="display: none;"';
    
    echo '>';
    

    $abstract_path =   
    $events_map[$row][Seminars::$discipline_idx] . '/' .  
    $events_map[$row][Seminars::$year_idx] . '/' . 
    $events_map[$row][Seminars::$semester_idx] . '/' . 
    $abstracts_folder . $events_map[$row][Seminars::$abstract_file_idx];

    
    Seminars::include_file( $remote_path_prefix, $local_path_prefix, $abstract_path, $are_input_files_local);
    
    echo '</span>';
//----------------    



// ********************
    echo '<script>';

    echo '
      $(document).ready(
        function(){';
      
     echo '
       $("a#' . $toggle_abstract_id . '").click(';
       
     echo '
       function(){
          $("span#' . $abstract_id . '").toggle();
        }
      );';    //end click
      
      
    echo '
       }
     );';  //end ready

  
   echo '</script>';
//     echo "<br>";
// ********************
 
 }
 
 
private static function loop_over_events($events_map, $starting_row, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline) {

 
    ///@todo: abstract have to be .txt (I think it's enough to be any text file), with a name specified in the csv file
    ///@todo: strip away any empty spaces before or after the csv fields
    ///@todo: make sure there are no empty lines at the end of a csv file
 
  
    $num_rows = count($events_map);  
    
    
  echo '<div class="' . Seminars::$bootstrap_container . '">';

    
    for ($row = $starting_row; $row < $num_rows; $row++) {

    
    $toggle_abstract_id = Seminars::set_event_image_and_details($remote_path_prefix, $local_path_prefix, $are_input_files_local, $images_folder, $events_map, $row, $discipline_array, $bool_print_discipline);
    
                                         Seminars::set_abstract($remote_path_prefix, $local_path_prefix, $are_input_files_local, $abstracts_folder, $events_map, $row, $toggle_abstract_id);
    
    }
    

  echo '</div>';   
    
    
  } 
 
 
private static function compute_sequential_day($year, $month, $day) { 
 
   $month_days;
   
   if($year%4 != 0) $month_days = array(31,28/*29*/,31,30,31,30,31,31,30,31,30,31);
   else             $month_days = array(31,/*28*/29,31,30,31,30,31,31,30,31,30,31);

   $sequential_day = 0;
    for ($i = 0; $i < $month - 1; $i++) {
   $sequential_day += $month_days[$i];
   }
   
   $sequential_day += $day;
   
   return    $sequential_day;
   
 } 
 
 
 
public static function set_seminars_by_topic_body($remote_path_prefix,
                                                  $local_path_prefix,
                                                  $are_input_files_local,
                                                  $institution,
                                                   $department,
                                                   $discipline,
                                                   $year,
                                                   $semester, 
                                                   $abstracts_folder,
                                                   $images_folder,
                                                   $discipline_array) {
                                                   
 
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);

 $events_in_seminar = Seminars::read_events_file_and_attach_topic_year_semester($prefix, $discipline, $year, $semester);


 Seminars::navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local, $discipline);
 
 
 $title = $discipline_array[ $discipline ];

 Seminars::main_banner($title, $department, $institution);
 
 //Seminars::default_meeting_coords_banner_map($events_in_seminar, $year, $semester);
 
 Seminars::about($discipline, $remote_path_prefix, $local_path_prefix, $are_input_files_local);
 
 $starting_row = Seminars::$row_events_begin;
 
 
 $bool_print_discipline = false;
    
 Seminars::loop_over_events($events_in_seminar, $starting_row, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline);

  echo '<br>';
  echo '<br>';
  echo '<br>';

 
 }
 

 private static function sort_array_of_arrays(& $array_of_arrays, $index, $sort_order) {
 
//  $index: column index with respect to which you intend to sort
//  $sort_order: SORT_ASC, SORT_DESC, ...
 
  $temp_column = array();
    
  foreach ($array_of_arrays as $key => $row) {
    $temp_column[$key] = $row[$index];
  }

  array_multisort($temp_column, $sort_order, $array_of_arrays);
  

 }

 
public static function set_seminars_by_time_range_body($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                      $institution, 
                                                  $department, 
                                                  $year,
                                                  $semester, 
                                                  $month_begin,
                                                  $day_begin, 
                                                  $month_end, 
                                                  $day_end, 
                                                  $abstracts_folder,
                                                  $images_folder,
                                                  $discipline_array, $bool_print_discipline)  {
 

    $events_in_week =  Seminars::parse_all_event_tables($remote_path_prefix, $local_path_prefix, $are_input_files_local, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, $discipline_array);
    
    
    Seminars::sort_array_of_arrays($events_in_week, Seminars::$month_idx, SORT_ASC);

//     Seminars::sort_array_of_arrays($events_in_week, Seminars::$day_idx, SORT_ASC);
    
    
    $starting_row = 0;
     
 
 if (count($events_in_week) == 0) echo '&nbsp &nbsp None this week';
 
 else  Seminars::loop_over_events($events_in_week, $starting_row, $remote_path_prefix, $local_path_prefix, $are_input_files_local, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline);

 }
 
 
private static function parse_all_event_tables($remote_path_prefix, $local_path_prefix, $are_input_files_local, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, $discipline_array)  {
 
 
  $starting_row = Seminars::$row_events_begin;

  $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);
  
  $events_in_week = array();
  
    foreach ($discipline_array as $discipline => $discipline_string) {
    
    
   $csv_map = Seminars::read_events_file_and_attach_topic_year_semester($prefix, $discipline, $year, $semester);

    
    for ($row = $starting_row; $row < count($csv_map); $row++) {

    //best thing is probably to convert into an increasing number, to avoid non-monotone behavior
    $sequential_begin   = Seminars::compute_sequential_day($year, $month_begin, $day_begin);
    $sequential_end     = Seminars::compute_sequential_day($year, $month_end, $day_end);
    $sequential_current = Seminars::compute_sequential_day($year, $csv_map[$row][Seminars::$month_idx], $csv_map[$row][Seminars::$day_idx]);
    
    if ( $sequential_begin <= $sequential_current && $sequential_current <= $sequential_end ) {
    

    array_push($events_in_week, $csv_map[$row]);
    
       }
    
    
    }     
    
    
  }

 
 return $events_in_week;
 
 
 }

 
 
 
 //============== private data ===============

   private static $abstracts_folder     = "./abstracts/";
   private static $images_folder        = "./images/";
   private static $events_file          = './events.csv';
   private static $about_file           = './about.txt';
   private static $active_editions_file = './active_editions.csv';  ///@todo it is up to the user to write the same directories as the ones that are there, perhaps put a check on that
                                                                    ///@todo you also have to check that the csv file does not have "empty cells"

 
 
 //array for conversion from month number to string
 private static $months_conv = array(
 1  =>  'January',     /*  'Jan.',  */
 2  =>  'February',    /*  'Feb.',  */
 3  =>  'March',       /*  'Mar.',  */
 4  =>  'April',       /*  'Apr.',  */
 5  =>  'May',         /*  'May',   */
 6  =>  'June',        /*  'Jun.',  */
 7  =>  'July',        /*  'Jul.',  */
 8  =>  'August',      /*  'Aug.',  */
 9  =>  'September',   /*  'Sep.',  */
 10 =>  'October',     /*  'Oct.',  */
 11 =>  'November',    /*  'Nov.',  */
 12 =>  'December');   /*  'Dec.'); */


  
 

// =====
   private static   $month_idx               = 0;  //if this column is empty, it still generates the page
   private static   $day_idx                 = 1;  //if this column is empty, it still generates the page
   private static   $week_day_idx            = 2;  //if this column is empty, it still generates the page
   private static   $time_idx                = 3;  //if this column is empty, it still generates the page
   private static   $room_idx                = 4;  //if this column is empty, it still generates the page
   private static   $speaker_idx             = 5;  //if this column is empty, it still generates the page
   private static   $speaker_department_idx  = 6;  //if this column is empty, it still generates the page
   private static   $speaker_institution_idx = 7;  //if this column is empty, it still generates the page
   private static   $speaker_url_idx         = 8;  //if this column is empty, it still generates the page
   private static   $speaker_image_idx       = 9;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
   private static   $title_idx               = 10;  //if this column is empty, it still generates the page
   private static   $abstract_file_idx       = 11;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
   private static   $discipline_idx      = 12;
   private static   $year_idx            = 13;
   private static   $semester_idx        = 14;
  
   private static     $week_day_default_meeting_idx            = 0;
   private static     $time_default_meeting_idx                = 1;
   private static     $room_default_meeting_idx                = 2;

  private static $row_default_meeting_data = 1;
  
  private static $row_events_begin = 3;
 
// ===== bootstrap style
  private static $bootstrap_container = 'container';
  private static $bootstrap_container_fluid = 'container-fluid';
  private static $bootstrap_centered = 'text-center';

// ===== sem style (must be consistent with css)
  private static $sem_image = 'sem_image';
  private static $sem_item = 'sem_item';
  private static $sem_header_id = 'sem_header';


} //end class

 
///@todo make a function that computes the week day automatically from year/month/day_number
///@todo http://stackoverflow.com/questions/15167545/how-to-crop-a-rectangular-image-into-a-square-with-css
///@todo remember to input the speaker websites with https:// or http:// in front! (maybe do a check to find this)
///@todo do a function that picks a rectangular image and makes it square by extending its smaller side with white
///@todo remove the first 2 lines from the csv events file

?>
