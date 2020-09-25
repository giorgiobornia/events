<?php

echo "Search results will be shown here: WIP \n";

echo $_SERVER['REMOTE_ADDR'];  //this works

//$_POST seems to be not working now...
print_r($_POST);

	foreach ($_POST as $key => $value) {
		echo "$key: $value";
		};

?>
