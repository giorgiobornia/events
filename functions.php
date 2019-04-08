<?php


 
 
 
 function event_default_coords_banner($sem_in, $room_in, $time_in) {
 
 echo '<div class="container-fluid text-center" id="sem_header">';
 
 echo '<h2>';
 echo $sem_in . ' - ' . $time_in . ' - ' . 'room ' . $room_in;
 echo '</h2>';
 
 echo '</div>';
 
 echo '<br>';
 
 } 

 
 

function generate_index_page($sem_mydepth, $sem_in, $room_in, $time_in) {

 
echo '<!DOCTYPE html>';

echo '<html>';

//==================
echo '<head>';

 include($sem_mydepth . "sem_head_links.php");
 include($sem_mydepth . "sem_title.php");
 
echo '</head>';
//==================


//------------------
echo '<body>';


 include($sem_mydepth . "sem_navbar.php");
 include($sem_mydepth . "sem_banner.php");

 
 event_default_coords_banner($sem_in, $room_in, $time_in);
 
// &&&&&&&&&&&&&&& 
 echo '<div class="container text-center">';

 include($sem_mydepth . "events_loop.php");
 
  echo '<br>';
  echo '<br>';
  echo '<br>';
  

echo '</div>';
// &&&&&&&&&&&&&&& 

echo '</body>';
//------------------

echo '</html>';

}


?>
