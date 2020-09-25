<?php

include './functions.php';

  Events::search_results_page($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                       $institution, $department, 
                                                       $page_topic, $year, $semester,
                                                       $icon_in_toolbar, 
                                                       $all_schemes,
                                                       $father_scheme_idx
);
  
?>
