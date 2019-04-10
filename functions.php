<?php

///@obsolete: sem_title.php
///@obsolete: sem_coords.php
///@obsolete: sem_banner.php



 function navigation_bar() {


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



 function title_in_browser_toolbar($discipline) {
 
 echo '<title>Seminar in ' . $discipline . ' - Texas Tech University</title>';

 }

 
 function main_banner($discipline) {

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
 
 
 function default_coords_banner($csv) {
 
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

 
 function loop_over_events($csv, $abstracts_folder, $images_folder) {

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

  $month_idx               = 0;  //if this column is empty, it still generates the page
  $day_idx                 = 1;  //if this column is empty, it still generates the page
  $week_day_idx            = 2;  //if this column is empty, it still generates the page
  $time_idx                = 3;  //if this column is empty, it still generates the page
  $room_idx                = 4;  //if this column is empty, it still generates the page
  $speaker_idx             = 5;  //if this column is empty, it still generates the page
  $speaker_department_idx  = 6;  //if this column is empty, it still generates the page
  $speaker_institution_idx = 7;  //if this column is empty, it still generates the page
  $speaker_url_idx         = 8;  //if this column is empty, it still generates the page
  $speaker_image_idx       = 9;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
  $title_idx               = 10;  //if this column is empty, it still generates the page
  $abstract_file_idx       = 11;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
  
  
    $num_rows = count($csv);  
    //TODO: make sure there are no empty lines at the end...
    //TODO: strip away any empty spaces before or after the csv fields
    //TODO: images have to be .jpg
    //TODO: abstract have to be .txt, with the same name of the date
    //TODO: do not put other rows below in the csv file
    
    
    $starting_row = 3;  //the first row is for the column fields
    
    
    
  echo '<div class="container text-center">';

    
    for ($c = $starting_row; $c < $num_rows; $c++) {
        
// %%%%%%%%%%%%%%%%%%%
    echo '
     <table class="sem_item">
     <tr>';
     
    echo '
     <td> 
     <img class="sem_image img-circle" ' .  'src="' . $images_folder . '/' . $csv[$c][$speaker_image_idx] . '" alt="image">  </td> ';
     
    echo "<td>";
    
    echo "<strong>";
    echo  $csv[$c][$week_day_idx] . ", " . $months_conv[ $csv[$c][$month_idx] ] . " " . $csv[$c][$day_idx] . ", ";
    echo "</strong>";
    echo "<em>";
    echo $csv[$c][$time_idx] . ", ";
    echo "</em>";
//     echo "<em>";
    echo "room "  .  $csv[$c][$room_idx] ;
//     echo "</em>";
    echo "<br>";

    
    echo '<a  style="cursor:pointer;" ';
    echo ' id="toggle_abst_' . $csv[$c][$month_idx] . $csv[$c][$day_idx] . '">'; 
    
    echo "<em>";
    echo $csv[$c][$title_idx];
    echo "</em>";
    
    echo '</a>';
    echo "<br>";

    
    ///@todo: see if I can make this be
      //     - a link if href is non-empty in the csv file 
      //     - NOT a link otherwise
    echo '<a   style="cursor:pointer;"';
//     echo ' target="_blank" ';
    echo 'href="' .  $csv[$c][$speaker_url_idx]  .  '">';
    echo $csv[$c][$speaker_idx];
    echo '</a>';
    echo "<br>";
    echo  $csv[$c][$speaker_department_idx] . ', ' . $csv[$c][$speaker_institution_idx];
    
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
    echo '<span class="abst" ';
    
    echo ' id="abst_' . $csv[$c][$month_idx] . $csv[$c][$day_idx] . '">';
    
    $abstract_path = $abstracts_folder . $csv[$c][$abstract_file_idx];
    
    include($abstract_path);
    
    echo '</span>';
    
//----------------    



// ********************
    echo '<script>';

    echo '
      $(document).ready(
        function(){';
      
     echo '
       $("a#toggle_abst_' .   $csv[$c][$month_idx] . $csv[$c][$day_idx] . '").click(';
       
     echo '
       function(){
          $("span#abst_'  .   $csv[$c][$month_idx] . $csv[$c][$day_idx] . '").toggle();
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
 
 
 function generate_index_page($sem_mydepth) {

  $events_csv_file = './events.csv';
  $abstracts_folder = "./abstracts/";
  $images_folder = "./images/";
  
  $csv_map = array_map('str_getcsv', file($events_csv_file));

  $row_regular_meeting_data = 1;
  $discipline_idx = 0;
  
  $discipline = $csv_map[$row_regular_meeting_data][$discipline_idx];
  
 
echo '<!DOCTYPE html>';

echo '<html>';

//==================
echo '<head>';

 include($sem_mydepth . "sem_head_links.php");

 title_in_browser_toolbar($discipline);
 
echo '</head>';
//==================


//------------------
echo '<body>';

 include($sem_mydepth . "sem_navbar.php");

 main_banner($discipline);
 
 default_coords_banner($csv_map);
 
 loop_over_events($csv_map, $abstracts_folder, $images_folder);

echo '</body>';
//------------------

echo '</html>';

 }


 function generate_seminar_page_by_week($year, $semester, $month_begin, $day_begin, $month_end, $day_end) {

// Reading the Month and Day columns, I have to see whether or not the day is in the range that I provide
// if so, I will store that array and make a map that will be parsed by a loop_over_events function

echo 'I am looking at what happens in ' . $semester . ' ' . $year . ' between ' . $month_begin . ' ' . $day_begin . ' and ' . $month_end . ' ' . $day_end . ' in each seminar file';


  $topics = array('AppliedMath');

//   $topics_size = count($topics);
  
  
    for ($i = 0; $i < count($topics); $i++) {
    
    echo $topics[$i];
    
    $events_csv_file = 'events.csv';
    $month_idx = 0;
    $day_idx = 1;
    
    $starting_row = 3;
    
    $file_to_parse = '../' . $year . '/' . $semester . '/' . $events_csv_file;
    
    $csv_map = array_map('str_getcsv', file($file_to_parse));
    
    echo '<br>';
    
    
    for ($row = $starting_row; $row < count($csv_map); $row++) {
    
    //best thing is to probably convert into an increasing number, to avoid non-monotone behaviors
    
    if ( $month_begin <= $csv_map[$row][$month_idx] && $csv_map[$row][$month_idx] <= $month_end /*&&
         $day_begin   <= $csv_map[$row][$day_idx]   && $csv_map[$row][$day_idx]   <= $day_end */) {
    
    echo $csv_map[$row][$month_idx] . ' ' .  $csv_map[$row][$day_idx]; 
    echo '<br>';
    
    }
    
    
    
    }     
    
    
    }



 }
S


?>
