<?php

///@obsolete: sem_title.php
///@obsolete: sem_coords.php
///@obsolete: sem_banner.php



 function navigation_bar() {


 echo ' <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="my_nav">                                                                    ';
 echo '                                                                                                                                                       ';
 echo '<div class="container">                                                                                                                                ';
 echo '                                                                                                                                                              ';
 echo '<div class="navbar-header">                                                                                                                            ';
 echo '                                                                                                                                                              ';
 echo '<button type="button" class="navbar-toggle collapsed"                                                                                                  ';
 echo '        data-toggle="collapse" data-target="#my_navbar" aria-expanded="false" aria-controls="my_navbar">                                                      ';
 echo '                                                                                                                                                              ';
 echo '<span class="sr-only">Toggle navigation</span> <!--is this needed?-->                                                                                  ';
 echo '                                                                                                                                                              ';
 echo '<span class="icon-bar"></span>                                                                                                                         ';
 echo '<span class="icon-bar"></span>                                                                                                                         ';
 echo '<span class="icon-bar"></span>  <!--these are for the three dashes that look like a button-->                                                          ';
 echo '                                                                                                                                                              ';
 echo '</button>                                                                                                                                              ';
 echo '                                                                                                                                                              ';
 echo '<a class="navbar-brand" href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/">$HOME</a>                                                      ';
 echo '</div>                                                                                                                                                 ';
 echo '                                                                                                                                                              ';
 echo '<div id="my_navbar" class="navbar-collapse collapse" role="navigation">                                                                                ';
 echo '                                                                                                                                                              ';
 echo '<ul class="nav navbar-nav navbar-right">  <!-- <ul class="navbar"> this was my old class -->                                                           ';
 echo '  <li><a href="http://www.math.ttu.edu/Department/Seminars/AppliedMath/about.php">  ./about</a></li>                                                   ';
 echo '                                                                                                                                                              ';
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



 function title_in_head($discipline) {
 
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
 
 
 function default_coords_banner($year_in, $sem_in, $room_in, $time_in) {
 
 echo '<div class="container-fluid text-center" id="sem_header">';
 
 echo '<h2>';
 echo $sem_in . ' ' . $year_in . ' - ' . $time_in . ' - ' . 'room ' . $room_in;
 echo '</h2>';
 
 echo '</div>';
 
 echo '<br>';
 
 } 

 
 function events_loop_flexible($events_csv_file, $abstracts_folder, $images_folder) {


  $month_idx               = 0;
  $day_idx                 = 1;
  $week_day_idx            = 2;
  $time_idx                = 3;
  $room_idx                = 4;
  $speaker_idx             = 5;
  $speaker_image_idx       = 6;
  $title_idx               = 7;
  $abstract_file_idx       = 8;
  
  $csv = array_map('str_getcsv', file($events_csv_file));
  
    $num_rows = count($csv);  
    //TODO: make sure there are no empty lines at the end...
    //TODO: strip away any empty spaces before or after the csv fields
    //TODO: images have to be .jpg
    //TODO: abstract have to be .txt, with the same name of the date
    //TODO: do not put other rows below in the csv file
    
    $starting_row = 1;  //the first row is for the column fields
    
    
    
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
    echo  $csv[$c][$week_day_idx] . ", " . $csv[$c][$month_idx] . " " . $csv[$c][$day_idx] . ", " . $csv[$c][$time_idx] . ", " .  "room "  .  $csv[$c][$room_idx] ;
    echo "</strong>";
    echo "<br>";

    echo "<em>";
    echo $csv[$c][$title_idx];
    echo "</em>";
    echo "<br>";
    
    echo $csv[$c][$speaker_idx];
    echo "<br>";
    
    echo '<a  style="cursor:pointer;" ';
    echo ' id="toggle_abst_' . $csv[$c][$month_idx] . $csv[$c][$day_idx] . '"> abstract </a>';
    
    echo '
      </td>';
      
    echo '  
      </tr>
      </table> 
     ';    
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
// ********************
    


        
    }
    
    
    
    
  echo '<br>';
  echo '<br>';
  echo '<br>';
  

  echo '</div>';   
    
    
  } 
 
 
 function events_loop() {
   
  $events_csv_file = './events.csv';
  $abstracts_folder = "./abstracts/";
  $images_folder = "./images/";
  
   events_loop_flexible($events_csv_file, $abstracts_folder, $images_folder);
   
   }
 

function generate_index_page($discipline, $sem_mydepth, $year_in, $sem_in, $room_in, $time_in) {

 
echo '<!DOCTYPE html>';

echo '<html>';

//==================
echo '<head>';

 include($sem_mydepth . "sem_head_links.php");

 title_in_head($discipline);
 
echo '</head>';
//==================


//------------------
echo '<body>';

 include($sem_mydepth . "sem_navbar.php");

 main_banner($discipline);
 
 default_coords_banner($year_in, $sem_in, $room_in, $time_in);
 
 events_loop();


echo '</body>';
//------------------

echo '</html>';

}


?>
