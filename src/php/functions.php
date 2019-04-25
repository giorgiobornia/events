<?php


class Seminars {

 
 
  
public static function generate_seminar_page_list($discipline_array) {


     echo '<ol>';
     
    foreach ($discipline_array as $topic => $topic_string) {
    
     echo '<li>';
     echo '<a href="./' . $topic . '">' . $topic_string . '</a>';
     echo '</li>';
     echo '<br>';
     
    }

     echo '</ol>';
     
}


  
public static function generate_seminar_page_by_topic($library_path, $institution, $department, $topic, $year, $semester, $icon_in_toolbar, $discipline_array) {

 
echo '<!DOCTYPE html>';

echo '<html>';


echo '<head>';

  $title_in_toolbar = $discipline_array[ $topic ];
  
  Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
  
echo '</head>';

  
  echo '<body>';


    Seminars::set_seminars_by_topic_body($institution, $department, $topic, $year, $semester, Seminars::$abstracts_folder, Seminars::$images_folder, $discipline_array);

  echo '</body>';
  
  

echo '</html>';

 }
 

 
 
public static function generate_all_seminars_page_by_time_range($library_path, $institution, $department, $icon_in_toolbar, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, $discipline_array) {

// Reading the Month and Day columns, I have to see whether or not the day is in the range that I provide
// if so, I will store that array and make a map that will be parsed by a function

echo '<!DOCTYPE html>';

echo '<html>';


echo '<head>';

   $title_in_toolbar = 'Seminars by week';

   Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
   
echo '</head>';


  echo '<body>';


    Seminars::set_seminars_by_time_range_body($institution, $department, $year, $semester, $month_begin, $day_begin, $month_end, $day_end, Seminars::$abstracts_folder, Seminars::$images_folder, $discipline_array);  

  echo '</body>';
  

echo '</html>';
  
 }


private static function read_csv_file($file) {
 
  $csv_map = array_map('str_getcsv', file($file));  ///@todo this command seems to work only with CSV files coming from Linux/Mac, but not from Windows... the diff command says files are equal...!

  return $csv_map;
  
}


private static function read_file_and_attach_topic_year_semester($file, $topic, $year, $semester) {

  $csv_map = Seminars::read_csv_file($file);
  
  for ($row = 0; $row < count($csv_map); $row++) {
  
  array_push($csv_map[$row], $topic);
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

 
 Seminars::set_jquery_lib();
 
 Seminars::set_bootstrap_css_and_javascript_libs();

 Seminars::set_latex_rendering_lib();

 Seminars::set_sem_css($library_path);
                                                                                                                                                                                            

 Seminars::set_browser_toolbar($title_in_toolbar, $icon_in_toolbar);
 

 }

 
  private static function set_meta($description, $author) {
  
//  These metas must be first in the head 
 echo ' <meta charset="utf-8">                                                                                                                                                              ';
 echo ' <meta name="viewport" content="width=device-width, initial-scale=1">                                                                                                                ';

// Meta tags for indexing in search engines
 echo ' <meta name="description" content="' . $description . '">                                                                                                                            ';
 echo ' <meta name="author"      content="' . $author . '">                                                                                                                                ';
  

  }
  
 
 private static function set_sem_css($library_path) {

// This must in the last position to override
 echo '<link rel="stylesheet" href="'  .  $library_path . './src/css/sem_style.css"> ';
 
}


private static function set_latex_rendering_lib() {

//  MathJax
 echo ' <script type="text/x-mathjax-config">                                                                                                                                               ';
 echo ' MathJax.Hub.Config({                                                                                                                                                                ';
 echo ' tex2jax: {                                                                                                                                                                          ';
//how it should be printed
//  inlineMath:  [ ['$','$'],   ['\\(','\\)'] ],
//  displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
//how it should be printed - end
//how to get it
 echo ' inlineMath:  [ [\'$\',\'$\'],   [\'\\\(\',\'\\\)\'] ],                                                                                                                    ';  //some escaping is needed for the ' and \ fonts
 echo ' displayMath: [ [\'$$\',\'$$\'], ["\\\[","\\\]"]     ],                                                                                                                    '; //some escaping is needed for the ' and \ fonts
//how to get it - end
 echo ' processEscapes: true                                                                                                                                                                ';
 echo ' }});                                                                                                                                                                                ';
 echo ' </script>                                                                                                                                                                           ';
 
 echo '<script type="text/javascript" async                                                                                                                                                 ';
 echo '  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML">                                                                                ';
 echo '</script>                                                                                                                                                                            ';
// //  <!--<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>--> <!--THIS WAS DISCONTINUED-->          


}


private static function set_jquery_lib() {

//  jQuery library (must be before JavaScript!)
 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  ';


}



private static function set_bootstrap_css_and_javascript_libs() {

//  BOOTSTRAP 
//  Latest compiled and minified CSS
 echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
//  Latest compiled JavaScript 
 echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';

//  echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
//  echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';


}



private static function navigation_bar($discipline_folder) {

$sem_current_depth = '../../';

 //this must be passed by the general seminar, not by its year/semester instances, if possible
$past_years = array(
 2019 => array('spring'),
 2018 => array('fall'),
//  2017 => array('fall'),
 );

 $home_name = '$HOME';
 
  
 echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="my_nav">';

 echo '<div class="container">';

 echo '<div class="navbar-header">';

 echo '<button type="button" class="navbar-toggle collapsed" ';
 echo '  data-toggle="collapse" data-target="#my_navbar" aria-expanded="false" aria-controls="my_navbar">';

 echo '<span class="sr-only">Toggle navigation</span>'; // <!--is this needed?-->
 
 echo '<span class="icon-bar"></span>';
 echo '<span class="icon-bar"></span>';
 echo '<span class="icon-bar"></span>'; //  these are for the three dashes that look like a button

 echo '</button>';

 echo '<a class="navbar-brand" href="'. $sem_current_depth . '">' . $home_name . '</a>';
 echo '</div>';

 echo '<div id="my_navbar" class="navbar-collapse collapse" role="navigation">';

 echo '<ul class="nav navbar-nav navbar-right">';
 
 foreach ($past_years as $year => $value) {
   echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">' . './' . $year . ' </a>';
   echo '  <ul class="dropdown-menu"> ';
  foreach ($past_years[$year] as $term) {
     echo '    <li><a href="' . $sem_current_depth . './' . $year . '/' . $term . '/">' . $term . '</a></li>';
     }
   echo '  </ul>';
   echo '</li>';
 }

 echo '</ul>';

 echo '</div>';

 echo '</div>';

 echo '</nav>';

 echo '<div class="container" id="compensate_navbar_height"></div>                                                                                            ';

}




private static function main_banner($title, $department, $institution) {


  echo '<div class="my_banner jumbotron">';    //<!--if the jumbotron stays inside a container it doesn't go all-the-width-->
  echo '<div class="my_filter">';                       //<!--id="" if you set more than one id then the FIRST ONE is taken-->
  echo '<div class="container text-center">';
  echo '      <h1> ' . $title . ' </h1>';
  echo '      <h2> ' . $department  . ' </h2>';  
  echo '      <h2> ' . $institution . ' </h2>'; 
  echo '  </div>';
  echo '</div>';
  echo '</div>';

 }
 
 
private static function default_meeting_coords_banner($semester, $year, $week_day, $time, $room) {

 echo '<div class="container-fluid text-center" id="sem_header">';
 
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
 
//  Favicon
 echo ' <link rel="icon" href="' .  $icon_in_toolbar . '"> ';

 echo '<title> ' . $title . ' </title>';

 }



private static function about($discipline, $relative_path_to_seminars_base) {

    $about_txt_file =   
    $relative_path_to_seminars_base .  
    $discipline . '/' .  
    Seminars::$about_file;

  echo '<div class="container ">';
  
    include($about_txt_file);
  
  echo '<br>';       
  echo '<br>';       

  echo '<div>';
  
   ///@todo mention organizers
   
 
}


private static function event_details($events_map, $row, $discipline_array, $bool_print_discipline) {

   if ( $bool_print_discipline == true ) {                                
      echo "<strong>";
        echo $discipline_array[ $events_map[$row][Seminars::$discipline_idx] ];
      echo "</strong>";
      echo "<br>";
    }
    
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

    
    $toggle_abstract_id = 'toggle_abst_' . $events_map[$row][Seminars::$discipline_idx]  . '_'
                                         . $events_map[$row][Seminars::$year_idx]        . '_'
                                         . $events_map[$row][Seminars::$month_idx]       . '_'
                                         . $events_map[$row][Seminars::$day_idx];

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


private static function set_event_image($relative_path_to_seminars_base,
                                       $images_folder,
                                       $events_map, 
                                       $row)  {
                                   
   echo '
     <td> 
     <img class="sem_image img-circle" ' .  'src="' .
     $relative_path_to_seminars_base . 
     $events_map[$row][Seminars::$discipline_idx] . '/' .  
     $events_map[$row][Seminars::$year_idx] . '/' . 
     $events_map[$row][Seminars::$semester_idx]  . '/' . 
     $images_folder . '/' . 
     $events_map[$row][Seminars::$speaker_image_idx] . '" alt="image">  </td> ';
     
    echo '<td style="text-align: center;">';
    
    
    }


private static function set_event_image_and_details($relative_path_to_seminars_base,
                                   $images_folder,
                                   $events_map, 
                                   $row,
                                   $discipline_array,
                                   $bool_print_discipline) {


    echo '
     <table class="sem_item">
     <tr>';
     
     Seminars::set_event_image($relative_path_to_seminars_base, $images_folder, $events_map, $row);
    
    $toggle_abstract_id = Seminars::event_details($events_map, $row, $discipline_array, $bool_print_discipline);
    
    
    echo '  
      </tr>
      </table> 
     ';

  return $toggle_abstract_id;
  

}


private static function set_abstract($relative_path_to_seminars_base,
                                     $abstracts_folder,
                                     $events_map,
                                     $row,
                                     $toggle_abstract_id) {
                                     
//----------------    
    $abstract_id = 'abst_' . $events_map[$row][Seminars::$discipline_idx]  . '_' 
                           . $events_map[$row][Seminars::$year_idx]        . '_'
                           . $events_map[$row][Seminars::$month_idx]       . '_'
                           . $events_map[$row][Seminars::$day_idx];

    echo '<span class="abst" ';   ///@todo make this span CENTERED
    
    echo ' id=' . '"' . $abstract_id . '"'; 
    
    echo ' style="display: none;"';
    
    echo '>';
    

    $abstract_path =   
    $relative_path_to_seminars_base .  
    $events_map[$row][Seminars::$discipline_idx] . '/' .  
    $events_map[$row][Seminars::$year_idx] . '/' . 
    $events_map[$row][Seminars::$semester_idx] . '/' . 
    $abstracts_folder . $events_map[$row][Seminars::$abstract_file_idx];

    
//     include should be of another PHP file, or of a LOCAL address (not http url)
    include($abstract_path);
    
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
 
 
private static function loop_over_events($events_map, $starting_row, $relative_path_to_seminars_base, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline) {

 
    ///@todo: abstract have to be .txt (I think it's enough to be any text file), with a name specified in the csv file
    ///@todo: strip away any empty spaces before or after the csv fields
    ///@todo: make sure there are no empty lines at the end of a csv file
 
  
    $num_rows = count($events_map);  
    
    
  echo '<div class="container ">';  /*text-center*/

    
    for ($row = $starting_row; $row < $num_rows; $row++) {

    
    $toggle_abstract_id = Seminars::set_event_image_and_details($relative_path_to_seminars_base, $images_folder, $events_map, $row, $discipline_array, $bool_print_discipline);
    
                        Seminars::set_abstract($relative_path_to_seminars_base, $abstracts_folder, $events_map, $row, $toggle_abstract_id);
    
    }
    
    
    
    
  echo '<br>';
  echo '<br>';
  echo '<br>';
  

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
 
 
 
public static function set_seminars_by_topic_body($institution,
                                                   $department,
                                                   $topic,
                                                   $year,
                                                   $semester, 
                                                   $abstracts_folder,
                                                   $images_folder,
                                                   $discipline_array) {
 

 $events_in_seminar = Seminars::read_file_and_attach_topic_year_semester(Seminars::$events_file, $topic, $year, $semester);

 $relative_path_to_seminars_base = '../../../';
 

 Seminars::navigation_bar($topic);
 
 
 $title = 'Seminar in ' . $discipline_array[ $topic ];

 Seminars::main_banner($title, $department, $institution);
 
 Seminars::default_meeting_coords_banner_map($events_in_seminar, $year, $semester);
 
 Seminars::about($topic, $relative_path_to_seminars_base);
 
 $starting_row = Seminars::$row_events_begin;
 
 
 $bool_print_discipline = false;
    
 Seminars::loop_over_events($events_in_seminar, $starting_row, $relative_path_to_seminars_base, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline);

 
 
 }
 

 

 
public static function set_seminars_by_time_range_body($institution, 
                                                  $department, 
                                                  $year,
                                                  $semester, 
                                                  $month_begin,
                                                  $day_begin, 
                                                  $month_end, 
                                                  $day_end, 
                                                  $abstracts_folder,
                                                  $images_folder,
                                                  $discipline_array)  {
 


 $title = "Seminars by week";
 
 Seminars::main_banner($title, $department, $institution);

    $events_in_week =  Seminars::parse_all_event_tables($year, $semester, $month_begin, $day_begin, $month_end, $day_end, $discipline_array);

    $starting_row = 0;
    
    $relative_path_to_seminars_base = '../';

 $bool_print_discipline = true;
 
  Seminars::loop_over_events($events_in_week, $starting_row, $relative_path_to_seminars_base, $abstracts_folder, $images_folder, $discipline_array, $bool_print_discipline);
 

 }
 
 
private static function parse_all_event_tables($year, $semester, $month_begin, $day_begin, $month_end, $day_end, $discipline_array)  {
 
 
    $starting_row = Seminars::$row_events_begin;

  
  $events_in_week = array();
  
    foreach ($discipline_array as $topic => $topic_string) {
    
    
    $file_to_parse = '../' . $topic . '/' . $year . '/' . $semester . '/' . Seminars::$events_file;
    
   $csv_map = Seminars::read_file_and_attach_topic_year_semester($file_to_parse, $topic, $year, $semester);

    
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

   private static $abstracts_folder = "./abstracts/";
   private static $images_folder    = "./images/";
   private static $events_file = './events.csv';
   private static $about_file = './about.txt';

 
 
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
 
 } //end class

 
///@todo make a go_back function ../../
///@todo make a function that computes the week day automatically from year/month/day_number
///@todo automatically populate the list of past seminars
 
?>
