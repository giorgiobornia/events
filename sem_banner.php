 <div class="my_banner jumbotron">  <!--if the jumbotron stays inside a container it doesn't go all-the-width-->
 <div class="my_filter">   <!--id="" if you set more than one id then the FIRST ONE is taken-->
   <div class="container text-center">
        <h1>Seminar in Applied Mathematics </h1>
       <h2> Department of Mathematics and Statistics </h2>  
       <h2> Texas Tech University </h2> 
    </div>
  </div>
</div>


 <?php
 
 function event_default_coords_banner($sem_in, $room_in, $time_in) {
 
 echo '<div class="container-fluid text-center" id="sem_header">';
 
 echo '<h2>';
 echo $sem_in . ' - ' . $time_in . ' - ' . 'room ' . $room_in;
 echo '</h2>';
 
 echo '</div>';
 
 echo '<br>';
 
 }
 
  ?>
