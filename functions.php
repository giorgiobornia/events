<?php

///@obsolete: sem_coords.php

class Seminars {


public static function navigation_bar() {


 echo ' <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="my_nav">                                                                    ';
 echo '                                                                                                                                                       ';
 echo '<div class="container">                                                                                                                                ';
 echo '                                                                                                                                                       ';
 echo '<div class="navbar-header">                                                                                                                            ';
 echo '                                                                                                                                                       ';
 echo '<button type="button" class="navbar-toggle collapsed"                                                                                                  ';
 echo '        data-toggle="collapse" data-target="#my_navbar" aria-expanded="false" aria-controls="my_navbar">                                               ';
 echo '                                                                                                                                                       ';
 echo '<span class="sr-only">Toggle navigation</span> <!--is this needed?-->                                                                                  ';
 echo '                                                                                                                                                       ';
 echo '<span class="icon-bar"></span>                                                                                                                         ';
 echo '<span class="icon-bar"></span>                                                                                                                         ';
 echo '<span class="icon-bar"></span>  <!--these are for the three dashes that look like a button-->                                                          ';
 echo '                                                                                                                                                       ';
 echo '</button>                                                                                                                                              ';
 echo '                                                                                                                                                       ';
 echo '<a class="navbar-brand" href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/">$HOME</a>                                                      ';
 echo '</div>                                                                                                                                                 ';
 echo '                                                                                                                                                       ';
 echo '<div id="my_navbar" class="navbar-collapse collapse" role="navigation">                                                                                ';
 echo '                                                                                                                                                       ';
 echo '<ul class="nav navbar-nav navbar-right">  <!-- <ul class="navbar"> this was my old class -->                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/about.php">  ./about</a></li>                                                   ';
 echo '                                                                                                                                                       ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2019 </a>                                                            ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2019/spring/">spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2018 </a>                                                            ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2018/fall/">fall </a></li>                                                    ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2018/spring/">spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2017 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2017/fall/">fall </a></li>                                                    ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2017/spring/">spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2016 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2016/fall/">fall </a></li>                                                    ';
 echo '    <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2016/spring/">spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2015 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2015/fall/">  fall   </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2015/spring/">spring </a></li>                                                  ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2014 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2014/fall/">  fall </a></li>                                                    ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2014/spring/">spring </a></li>                                                  ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2013 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2013/fall">     fall </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2013/spring">   spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2012 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2012/fall">     fall </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2012/spring">   spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2011 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2011/fall">     fall </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2011/spring">   spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2010 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2010/fall">     fall </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2010/spring">   spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2009 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2009/fall">     fall </a></li>                                                  ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2009/spring">   spring </a></li>                                                ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">./2008 <!--<b class="caret"></b>--></a>                                ';
 echo '  <ul class="dropdown-menu">                                                                                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/2008/fall">     fall </a></li>                                                  ';
 echo '  </ul>                                                                                                                                                ';
 echo '</li>                                                                                                                                                  ';
 echo '                                                                                                                                                       ';
 echo '</ul>                                                                                                                                                  ';
 echo '                                                                                                                                                       ';
 echo '</div>                                                                                                                                                 ';
 echo '                                                                                                                                                       ';
 echo '</div>                                                                                                                                                 ';
 echo '                                                                                                                                                       ';
 echo '</nav>                                                                                                                                                 ';
 echo '                                                                                                                                                       ';
 echo '<div class="container" id="compensate_navbar_height"></div>                                                                                            ';

}



public static function title_in_browser_toolbar($discipline) {
 
 echo '<title>Seminar in ' . $discipline . ' - Texas Tech University</title>';

 }

 
public static function main_banner($discipline) {

  echo '<div class="my_banner jumbotron">';    //<!--if the jumbotron stays inside a container it doesn't go all-the-width-->
  echo '<div class="my_filter">';                       //<!--id="" if you set more than one id then the FIRST ONE is taken-->
  echo '<div class="container text-center">';
  echo '      <h1> Seminar in ' . $discipline . ' </h1>';
  echo '       <h2> Department of Mathematics and Statistics </h2>';  
  echo '     <h2> Texas Tech University </h2>'; 
  echo '  </div>';
  echo '</div>';
  echo '</div>';

 }
 
 
public static function default_coords_banner($csv) {
 
  $discipline_idx          = 0;
  $year_idx                = 1;
  $semester_idx            = 2;
  $week_day_idx            = 3;
  $time_idx                = 4;
  $room_idx                = 5;
 

 
  $row_regular_meeting_data = 1;
 
 
 echo '<div class="container-fluid text-center" id="sem_header">';
 
 echo '<h2>';
 echo $csv[$row_regular_meeting_data][$semester_idx] . ' ' . 
      $csv[$row_regular_meeting_data][$year_idx] . ' - ' . 
      $csv[$row_regular_meeting_data][$week_day_idx] . ', ' . 
      $csv[$row_regular_meeting_data][$time_idx] . ' - ' . 'room ' . 
      $csv[$row_regular_meeting_data][$room_idx];
 echo '</h2>';
 
 echo '</div>';
 
 echo '<br>';
 
 } 

 
public static function loop_over_events($events_map,  $starting_row,  $relative_path_to_seminars_base, $abstracts_folder, $images_folder) {

 
//  echo $relative_path_to_seminars_base; 
//this is the place from where this function is called
//actually I would need the absolute path of the seminars folder
 
  //array for conversion from number to string
 $months_conv = array(
 1 =>   'January',     /*  'Jan.',  */
 2 =>   'February',    /*  'Feb.',  */
 3 =>   'March',       /*  'Mar.',  */
 4 =>   'April',       /*  'Apr.',  */
 5 =>   'May',         /*  'May',   */
 6 =>   'June',        /*  'Jun.',  */
 7 =>   'July',        /*  'Jul.',  */
 8 =>   'August',      /*  'Aug.',  */
 9 =>   'September',   /*  'Sep.',  */
 10 =>  'October',     /*  'Oct.',  */
 11 =>  'November',    /*  'Nov.',  */
 12 =>  'December');   /*  'Dec.'); */

 $discipline_conv = array(
 "Applied Mathematics" => "AppliedMath",  ///@todo these second arguments CANNOT have SPACES, because they are used for some id below
 "Analysis" => "Analysis");

 $semester_conv = array(
 "Spring" => "spring",
 "Fall" => "fall",
 );
 
 
  $discipline_idx          = 0;
  $year_idx                = 1;
  $semester_idx            = 2;
  $month_idx               = 3;  //if this column is empty, it still generates the page
  $day_idx                 = 4;  //if this column is empty, it still generates the page
  $week_day_idx            = 5;  //if this column is empty, it still generates the page
  $time_idx                = 6;  //if this column is empty, it still generates the page
  $room_idx                = 7;  //if this column is empty, it still generates the page
  $speaker_idx             = 8;  //if this column is empty, it still generates the page
  $speaker_department_idx  = 9;  //if this column is empty, it still generates the page
  $speaker_institution_idx = 10;  //if this column is empty, it still generates the page
  $speaker_url_idx         = 11;  //if this column is empty, it still generates the page
  $speaker_image_idx       = 12;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
  $title_idx               = 13;  //if this column is empty, it still generates the page
  $abstract_file_idx       = 14;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
  
  
    $num_rows = count($events_map);  
    //TODO: make sure there are no empty lines at the end...
    //TODO: strip away any empty spaces before or after the csv fields
    //TODO: images have to be .jpg
    //TODO: abstract have to be .txt, with the same name of the date
    //TODO: do not put other rows below in the csv file
    
    

    
    
    
  echo '<div class="container ">';  /*text-center*/

    
    for ($row = $starting_row; $row < $num_rows; $row++) {

//    echo   $discipline_conv[ $events_map[$row][$discipline_idx] ]  . '/' .  
//          $events_map[$row][$year_idx] . '/' . 
//       $semester_conv[ $events_map[$row][$semester_idx] ] . '/'; 
    
// %%%%%%%%%%%%%%%%%%%
    echo '
     <table class="sem_item">
     <tr>';
     
    echo '
     <td> 
     <img class="sem_image img-circle" ' .  'src="' .
     $relative_path_to_seminars_base . 
     $discipline_conv[ $events_map[$row][$discipline_idx] ] . '/' .  
     $events_map[$row][$year_idx] . '/' . 
     $semester_conv[ $events_map[$row][$semester_idx] ]  . '/' . 
     $images_folder . '/' . 
     $events_map[$row][$speaker_image_idx] . '" alt="image">  </td> ';
     
    echo '<td style="text-align: center;">';
    
    echo "<strong>";
    echo  $events_map[$row][$week_day_idx] . ", " . $months_conv[ $events_map[$row][$month_idx] ] . " " . $events_map[$row][$day_idx] . ", ";
    echo "</strong>";
    echo "<em>";
    echo $events_map[$row][$time_idx] . ", ";
    echo "</em>";
//     echo "<em>";
    echo "room "  .  $events_map[$row][$room_idx] ;
//     echo "</em>";
    echo "<br>";

    
    $toggle_abstract_id = 'toggle_abst_' . $discipline_conv[ $events_map[$row][$discipline_idx] ] . '_' . $events_map[$row][$month_idx] . '_' . $events_map[$row][$day_idx];

    echo '<a  style="cursor:pointer;" ';
    echo ' id="' .  $toggle_abstract_id . '">'; 
    
    echo "<em>";
    echo $events_map[$row][$title_idx];
    echo "</em>";
    
    echo '</a>';
    echo "<br>";

    
    ///@todo: see if I can make this be
      //     - a link if href is non-empty in the csv file 
      //     - NOT a link otherwise
    echo '<a   style="cursor:pointer;"';
//     echo ' target="_blank" ';
    echo 'href="' .  $events_map[$row][$speaker_url_idx]  .  '">';
    echo $events_map[$row][$speaker_idx];
    echo '</a>';
    echo "<br>";
    echo  $events_map[$row][$speaker_department_idx] . ', ' . $events_map[$row][$speaker_institution_idx];
    
    echo "<br>";
    
    
    echo '
      </td>';
      
    echo '  
      </tr>
      </table> 
     ';
//     echo "<br>";
   
// %%%%%%%%%%%%%%%%%%%


     
//----------------    
    $abstract_id = 'abst_' . $discipline_conv[ $events_map[$row][$discipline_idx] ] . '_' . $events_map[$row][$month_idx] . '_' . $events_map[$row][$day_idx];

    echo '<span class="abst" ';   ///@todo make this span CENTERED
    
    echo ' id="' . $abstract_id . '">';
    

    $abstract_path =   
    $relative_path_to_seminars_base .  
     $discipline_conv[ $events_map[$row][$discipline_idx] ] . '/' .  
     $events_map[$row][$year_idx] . '/' . 
     $semester_conv[ $events_map[$row][$semester_idx] ]  . '/' . 
 $abstracts_folder . $events_map[$row][$abstract_file_idx];

    
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
    
    
    
    
  echo '<br>';
  echo '<br>';
  echo '<br>';
  

  echo '</div>';   
    
    
  } 
 
 
public static function set_html_head($sem_mydepth, $title_in_toolbar) {
 
echo '<head>';

 include($sem_mydepth . "../sem_head_links.php");

 Seminars::title_in_browser_toolbar($title_in_toolbar);
 
echo '</head>';

 }
 
 
 
public static function set_seminar_by_topic_body($sem_mydepth, $discipline, $csv_map, $abstracts_folder, $images_folder) {
 
echo '<body>';

 Seminars::navigation_bar();

 Seminars::main_banner($discipline);
 
 Seminars::default_coords_banner($csv_map);
 
 $starting_row = 3;  //the first row is for the column fields
 
 $relative_path_to_seminars_base = '../../../';
    
 Seminars::loop_over_events($csv_map, $starting_row, $relative_path_to_seminars_base, $abstracts_folder, $images_folder);

echo '</body>';
 
 
 }
 
 
public static function generate_seminar_page_by_topic($sem_mydepth) {

  $events_csv_file = './events.csv';
  $abstracts_folder = "./abstracts/";
  $images_folder = "./images/";
  
  $csv_map = array_map('str_getcsv', file($events_csv_file));

  $row_regular_meeting_data = 1;
  $discipline_idx = 0;
  
  $discipline = $csv_map[$row_regular_meeting_data][$discipline_idx];
  
 
echo '<!DOCTYPE html>';

echo '<html>';


  Seminars::set_html_head($sem_mydepth, $discipline);
  
  Seminars::set_seminar_by_topic_body($sem_mydepth, $discipline, $csv_map, $abstracts_folder, $images_folder);

echo '</html>';

 }


 
public static function compute_sequential_day($year,$month,$day) { 
 
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
 
 
 
public static function set_seminar_by_week_body($week_events, $abstracts_folder, $images_folder)  {
 
//     echo count($week_events);
    

    $starting_row = 0;
    
    $relative_path_to_seminars_base = '../';

    Seminars::loop_over_events($week_events, $starting_row, $relative_path_to_seminars_base,  $abstracts_folder, $images_folder);
 
 
 }
 
 
public static function parse_all_event_tables($year, $semester, $month_begin, $day_begin, $month_end, $day_end)  {
 
 
 
   $events_csv_file = 'events.csv';

  $month_idx = 3;
    $day_idx = 4;
    
    $starting_row = 3;
    
    



  $topics = array('AppliedMath', 'Analysis');

//   $topics_size = count($topics);
  
  
  $week_events = array();
  
    for ($i = 0; $i < count($topics); $i++) {
    
    
    
    $file_to_parse = '../' . $topics[$i] . '/' . $year . '/' . $semester . '/' . $events_csv_file;
    
    $csv_map = array_map('str_getcsv', file($file_to_parse));
    
    echo '<br>';
    
    
    for ($row = $starting_row; $row < count($csv_map); $row++) {
    
    //best thing is probably to convert into an increasing number, to avoid non-monotone behavior
    $sequential_begin   = Seminars::compute_sequential_day($year, $month_begin, $day_begin);
    $sequential_end     = Seminars::compute_sequential_day($year, $month_end, $day_end);
    $sequential_current = Seminars::compute_sequential_day($year, $csv_map[$row][$month_idx], $csv_map[$row][$day_idx]);
    
    if ( $sequential_begin <= $sequential_current && $sequential_current <= $sequential_end ) {
    

    array_push($week_events, $csv_map[$row]);
    
       }
    
    
    }     
    
    
  }

 
 return $week_events;
 
 
 }
 
 
 
public static function generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end) {

// Reading the Month and Day columns, I have to see whether or not the day is in the range that I provide
// if so, I will store that array and make a map that will be parsed by a Seminars::loop_over_events function

    
   $week_events =  Seminars::parse_all_event_tables($year, $semester, $month_begin, $day_begin, $month_end, $day_end);
  
  
    
  $abstracts_folder = "./abstracts/";
  $images_folder = "./images/";

    Seminars::set_seminar_by_week_body($week_events, $abstracts_folder, $images_folder);  

  
 }


 
 } //end class

?>
