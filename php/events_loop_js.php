 

<!--  JS-generated HTML code - ignore ========================= -->
<!-- I still have to figure out how to trigger the download of the csv file -->

<div id="myHTMLWrapper">

</div>


<script src="../../js/jquery.csv.js"></script>  <!-- can put it in the head too  -->


<script>

  var csv_file = "http://www.math.ttu.edu/~gbornia/personal/talks.csv"; /*I think I have to tell it to explicitly download this file to the client*/
  
  var csv_data = $.csv.toObjects(csv_file);

  var wrapper = document.getElementById("myHTMLWrapper");

  var myHTML = '';

  for (var i = 0; i < 5; i++) {
    myHTML += '<span class="test">Testing  my JS script! loop #' + (i + 1) + '</span><br/><br/>';
  }

  wrapper.innerHTML = myHTML

</script>


<!--  JS-generated HTML code - end ========================= -->
