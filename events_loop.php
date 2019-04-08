 
<?php 

  $abstracts_folder = "./abstracts/";
  $images_folder = "./images/";

  $month_idx               = 0;
  $day_idx                 = 1;
  $week_day_idx            = 2;
  $time_idx                = 3;
  $room_idx                = 4;
  $speaker_idx             = 5;
  $speaker_image_idx       = 6;
  $title_idx               = 7;
  $abstract_file_idx       = 8;
  
  $csv = array_map('str_getcsv', file('./events.csv'));
  
    $num_rows = count($csv);  
    //TODO: make sure there are no empty lines at the end...
    //TODO: strip away any empty spaces before or after the csv fields
    //TODO: images have to be .jpg
    //TODO: abstract have to be .txt, with the same name of the date
    //TODO: do not put other rows below in the csv file
    
    $starting_row = 1;  //the first row is for the column fields
    
    
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

?>
