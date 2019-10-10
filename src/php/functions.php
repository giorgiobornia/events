<?php


class Seminars {


  
 public static function get_father_scheme_index_from_string($father_scheme_string, $all_schemes) {

 
 
 $i = 0;

 do {
 
 foreach ($all_schemes[$i] as $key => $val) break;
   $i++;
 
 }  while($key != $father_scheme_string);
 
 
//  echo $key;
 
//  while($key != $father_scheme_string) {
//  
//    $i++;
//  }
 
  
  return $i - 1;
 
 }
 
 
 private static function get_father_scheme_string_from_itself($scheme) {
  
 foreach ($scheme as $key => $val) break;
  
  return $key;
  
}
 
 public static function get_father_scheme_from_filename($file_in, $base_folder) {

 
  $first_pos_from_the_end_to_read = Seminars::$first_position_from_the_end_to_read;

  $array = Seminars::get_path_components_from_the_end($file_in, $first_pos_from_the_end_to_read, $first_pos_from_the_end_to_read + 1);

  $depth = 0;
  
 while ($array[0] != $base_folder) {
 
 $depth ++;

 $first_pos_from_the_end_to_read += 1;
 
  $array = Seminars::get_path_components_from_the_end($file_in, $first_pos_from_the_end_to_read, $first_pos_from_the_end_to_read + 1);

 }
 
 $father_scheme =  Seminars::get_path_components_from_the_end($file_in, $depth, $depth + 1);
 
 
//  $depth_cleaned = $depth - Seminars::$num_positions_from_the_end_to_read;
 
 
 return $father_scheme[0]/*$depth_cleaned*/;
 
 }
 
 
 
 private static function get_father_scheme_name($scheme) {

 $scheme_root = Seminars::get_father_scheme_string_from_itself($scheme);

  $depth = 0; Seminars::get_depth_recursively($scheme, $depth);
 
 $title = '';
 
 if ($depth == 0)  $title = $scheme[$scheme_root];
 else              $title = $scheme[$scheme_root][0];  //that's because we don't use "array" at the leaf stage
 
 return $title;
 
 }



private static function get_prefix_up_to_current_leaf($prefix, $scheme) {
///@todo if depth > 1 it has to be modified: it has to reconstruct all the branch up to that leaf
/// Then, you should pass the info about the current leaf, which now you are not passing

 $depth = 0;
 Seminars::get_depth_recursively($scheme, $depth);

 $prefix_base = $prefix;

 for ($j = 0; $j < $depth; $j++) $prefix_base = $prefix_base . Seminars::get_father_scheme_string_from_itself($scheme) . '/';

 return $prefix_base;
 
}


private static function get_leaf_name_from_father_scheme_recursively($scheme, $current_leaf, & $translation) {


  foreach ($scheme as $key => $value) {
//   echo $key;
//   echo $value;
  if ($key == $current_leaf)  { $translation = $value; break; }
  else                        { Seminars::get_leaf_name_from_father_scheme_recursively($value[1], $current_leaf, $translation); }
  
  }

//    echo $translation; 
  return $translation;
  
  
}



private static function get_depth_recursively($assoc_array, & $depth) {
///@todo the constraint is that all branches of the tree have the same length
// That's why here we take the first pair as representative of the tree depth

$first_pair = array_slice($assoc_array, 0, 1, true);


  foreach ($first_pair as $key => $value) {
//   echo $key;
//   echo $value;
    
           if ( sizeof($value) == 1 ) { $depth = $depth + 0; break; }
     else  if ( sizeof($value) == 2 ) { $depth = $depth + 1;  Seminars::get_depth_recursively($value[1], $depth); /*break;*/ }

   }

//     echo $depth;
  return $depth;

 }


  
  
 public static function generate_pdf_slides_by_time_range($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                          $institution,
                                                          $department, 
                                                          $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                                          $all_schemes) {
 
//  php -r " " for an in-line script on command line


     for ($i = 0; $i < count($all_schemes); $i++) {
     
    $leaf_array = Seminars::get_array_of_leaves( $all_schemes[$i] ); 
$events_in_week =  Seminars::parse_all_event_tables_single_leaf($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                                        $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                                        $leaf_array, $all_schemes, $i);
    


      for ($event_i = 0; $event_i < count($events_in_week); $event_i++)   Seminars::single_latex_pdf_slide($events_in_week, $event_i, $leaf_array, $all_schemes[$i]);

}


  ///@todo copy all pdf files over to the TV server
  
}


 private static function single_latex_pdf_slide($events_in_week, $event_i, $discipline_array, $scheme) {

 $prefix_base = Seminars::get_prefix_up_to_current_leaf($prefix, $scheme);

//latex file -----------------
  $slides_folder = 'slides';
//   mkdir('slides');              //with PHP
  shell_exec('mkdir -p ' . $slides_folder);  //with SHELL
  
  $tree_string = Seminars::get_father_scheme_string_from_itself($scheme);
  $event_filename = $tree_string . '_slide_' . $event_i;
  $fp = fopen($slides_folder . '/' . $event_filename . '.tex', 'w');
//   shell_exec('cd ' . $slides_folder);
    
  fwrite($fp, '\documentclass[10pt,compress]{beamer}' . PHP_EOL);
    
//  fwrite($fp, '\usepackage[T1]{fontenc}'. PHP_EOL);
 fwrite($fp, '\usepackage[utf8]{inputenc}'. PHP_EOL);
 fwrite($fp, '\usepackage{verbatim}'. PHP_EOL);
 fwrite($fp, '\usepackage{graphicx}'. PHP_EOL);
 fwrite($fp, '\usetheme{CambridgeUS}' . PHP_EOL);
  fwrite($fp, '\setbeamertemplate{navigation symbols}{}' . PHP_EOL);
  fwrite($fp, '\setbeamertemplate{page number in head/foot}{}' . PHP_EOL);
  fwrite($fp, '\date{}' . PHP_EOL);

  fwrite($fp, '\begin{document}' . PHP_EOL);
  fwrite($fp, '\begin{frame}[fragile]' . PHP_EOL);
  fwrite($fp, '\centering' . PHP_EOL);
  
  
  fwrite($fp, '\textbf{'/* . PHP_EOL*/);
  fwrite($fp, '\huge' . PHP_EOL);
  fwrite($fp, $events_in_week[$event_i][Seminars::$title_idx] /*. PHP_EOL*/);
  fwrite($fp, '}' . PHP_EOL);
  
  
  fwrite($fp, '\begin{columns}' . PHP_EOL);

  fwrite($fp, '\begin{column}{0.5\textwidth}' . PHP_EOL);
  fwrite($fp, '\centering' . PHP_EOL);
  fwrite($fp, '\textbf{' . PHP_EOL);
//   fwrite($fp, /*$discipline_array[*/$events_in_week[$event_i][Seminars::$discipline_idx]/*]*/ . PHP_EOL);
  fwrite($fp, '}' . PHP_EOL);
  fwrite($fp, PHP_EOL);
  $year = $events_in_week[$event_i][Seminars::$year_idx];
  $month = $events_in_week[$event_i][Seminars::$month_idx];
  $day = $events_in_week[$event_i][Seminars::$day_idx];
  $week_day = Seminars::compute_week_day($year, $month, $day);
  fwrite($fp, $week_day);
  fwrite($fp, ', ');
  fwrite($fp, Seminars::$months_conv_long[$events_in_week[$event_i][Seminars::$month_idx] ] /*. PHP_EOL*/);
  fwrite($fp, ' ');
  fwrite($fp, $events_in_week[$event_i][Seminars::$day_idx] . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, $events_in_week[$event_i][Seminars::$time_idx] . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, $events_in_week[$event_i][Seminars::$room_idx] . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, '\end{column}' . PHP_EOL);

  fwrite($fp, '\begin{column}{0.5\textwidth}' . PHP_EOL);
  fwrite($fp, '\centering' . PHP_EOL);
  fwrite($fp, '\textbf{' . PHP_EOL);
//   fwrite($fp, Normalizer::normalize($events_in_week[$event_i][Seminars::$speaker_idx]) . PHP_EOL); //need to recompile php with --enable-intl
  fwrite($fp, $events_in_week[$event_i][Seminars::$speaker_idx] . PHP_EOL);
  fwrite($fp, '}' . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, $events_in_week[$event_i][Seminars::$speaker_department_idx] . PHP_EOL);  ///@todo this creates trouble, check why. There was an & that is not accepted in Latex!
  fwrite($fp, PHP_EOL);
  fwrite($fp, $events_in_week[$event_i][Seminars::$speaker_institution_idx] . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, '\includegraphics[width=0.5\textwidth]{'.  '../../' . $prefix_base /* path from where the command is launched!!!*/.  $events_in_week[$event_i][Seminars::$discipline_idx] . '/' . $events_in_week[$event_i][Seminars::$year_idx] . '/' . $events_in_week[$event_i][Seminars::$semester_idx]  . '/' . /*Seminars::$images_folder*/  'images/' . $events_in_week[$event_i][Seminars::$speaker_image_idx]  . '}' . PHP_EOL);
  fwrite($fp, PHP_EOL);
  fwrite($fp, '\end{column}' . PHP_EOL);
  
  fwrite($fp, '\end{columns}' . PHP_EOL);

  fwrite($fp, PHP_EOL);

  fwrite($fp, PHP_EOL);
// //   fwrite($fp, $events_in_week[$event_i][Seminars::$abstract_file_idx] . PHP_EOL);
// //   fwrite($fp, PHP_EOL);
  fwrite($fp, '\end{frame}' . PHP_EOL);
 
 
  fwrite($fp, '\end{document}' . PHP_EOL);

  fclose($fp);

  $output =  shell_exec('pdflatex '  . ' -output-directory ' . $slides_folder . ' ' .  $slides_folder . '/' . $event_filename . '.tex ' );
//   $output += shell_exec('dvipng '  .  $slides_folder . '/' . $event_filename . '.dvi ' );
  printf($output);
//latex file -----------------
 
 }
 
 
 

 
 
  
 public static function get_discipline_year_semester($file_in) {
 ///@todo actually this is semester/year/discipline now
 
 $first_pos_from_the_end_to_read = Seminars::$first_position_from_the_end_to_read;
 
  $array = Seminars::get_path_components_from_the_end($file_in, $first_pos_from_the_end_to_read, Seminars::$num_positions_from_the_end_to_read);
 
  return $array;

 }
 
 
 
  public static function get_path_components_from_the_end($file_in, $starting_pos_from_end, $how_many_backwards) {
 //retrieve the information from the path 
 
 $delimiter = '/';
 
 $current_file = $file_in;
 $current_file = str_replace('\\', '/', $current_file);  //Windows file paths have backslash

 $array = Seminars::get_string_components_from_the_end($delimiter, $current_file, $starting_pos_from_end, $how_many_backwards);

 return $array;

 }

 

 public static function get_string_components_from_the_end($delimiter, $string_in, $starting_pos_from_end, $how_many_backwards) {
 
 $explosion = explode($delimiter, $string_in);
 
 $array = Seminars::get_array_components_from_the_end($explosion, $starting_pos_from_end, $how_many_backwards);

 return $array;

 }
 
 
 
  public static function get_array_components_from_the_end($array_in, $starting_pos_from_end, $how_many_backwards) {
  
  $array = array();
  
  for ($i = 0; $i < $how_many_backwards; $i++) {
      $array[$i] = $array_in[count($array_in) - 1 - $starting_pos_from_end - $i];
  }

  return $array;

 }
 
 
 
private static function get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local) {
//this is the prefix wrt. the seminars folder

  $prefix = '';

 if ($are_input_files_local == true) { $prefix = $local_path_prefix  /*. '/'*/; }  ///@todo these paths MUST already have a slash in them; I should do a function that checks this
 else {                                $prefix = $remote_path_prefix /*. '/'*/; }  ///@todo putting an additional '/' is actually not always a good idea

 return $prefix;

}


public static function include_file($remote_path_prefix, $local_path_prefix, $file, $are_input_files_local) {
//either use include for local files, or use curl request for external ones
//include of external files may be disabled by a server for security reasons


 if ($are_input_files_local == true) {
       
 include($local_path_prefix . '/' . $file);
 
 }
 
 else {
 
  $absolute_url = $remote_path_prefix . '/' . $file;
  
       // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $absolute_url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // $output contains the output string 
        $output = curl_exec($ch); 
      
         echo $output;

        // close curl resource to free up system resources 
        curl_close($ch); 
        
  }

}

///@todo deprecated
public static function redirect_page($year, $semester) {
///@todo see if you can even avoid generating the index page

// There are other solutions to this based on Apache or PHP

 $redir_path = $year .'/' . $semester . '/';

  Seminars::redirect_page_with_path($redir_path);


}


public static function redirect_page_with_path($redir_path) {

 
     echo '<!DOCTYPE html>';

     echo '<html>';
     echo '<head>';
     echo '<title> Redirecting </title>';
     echo '<meta http-equiv="refresh" content="0; url=' .  $redir_path . '">';
     echo '</head>';
     echo '<body>';
     echo '</body>';
     echo '</html>';
     

}



private static function generate_seminar_page_list($discipline_array, $colloquia, $prefix) {
//not used at present, the navigation bar does this job

    $depth_all_sems = $prefix;

     echo '<br/>';
     
     echo '<h3> &nbsp <strong> Colloquia and seminars by topic </strong> </h3>';

     echo '<br/>';
     echo '<br/>';
     
     echo '<ul>';
     echo '<li>';
     echo '<a href="' . $depth_all_sems  . $colloquia . '/' . '"> Colloquia </a>';
     echo '</li>';
     echo '</ul>';
     
     echo '<br/>';
     echo '<br/>';
     
     echo '<ul>';
     
    foreach ($discipline_array as $discipline => $discipline_string) {
    
     echo '<li>';
     echo '<a href="' . $depth_all_sems . './' . $discipline . '">' . $discipline_string . '</a>';
     echo '</li>';
     echo '<br/>';
     
    }

     echo '</ul>';
     
}


public static function generate_seminar_page_by_topic_year_semester($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                                    $institution, $department, 
                                                                    $t_y_s,
                                                                    $icon_in_toolbar, 
                                                                    $is_all_or_single,
                                                                    $all_schemes,
                                                                    $father_scheme_idx
                                                                    ) {


   $discipline = $t_y_s[Seminars::$discipline_idx_in_path_from_end];
   $year       = $t_y_s[Seminars::$year_idx_in_path_from_end];
   $semester   = $t_y_s[Seminars::$semester_idx_in_path_from_end];

   Seminars::generate_seminar_page_by_topic($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                            $institution, $department, 
                                            $discipline, $year, $semester, 
                                            $icon_in_toolbar,
                                            $all_schemes,
                                            $father_scheme_idx,
                                            $discipline_array, $colloquium_array, $seminar_container, $colloquium_container,
                                            $is_all_or_single );

}


private static function generate_seminar_page_by_topic($library_path, $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                       $institution, $department, 
                                                       $page_topic, $year, $semester,
                                                       $icon_in_toolbar, 
                                                       $all_schemes,
                                                       $father_scheme_idx,
                                                       $discipline_array, $colloquium_array, $seminar_container, $colloquium_container,
                                                   $is_all_or_single ) {

 
echo '<!DOCTYPE html>';

echo '<html>';

echo '<head>';



  $title_in_toolbar =  Seminars::get_leaf_name_from_father_scheme_recursively($all_schemes[$father_scheme_idx], $page_topic, $title_in_toolbar);
  

  Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
  
echo '</head>';

  
  echo '<body>';


    Seminars::set_single_leaf_body($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                         $institution, $department,
                                         $page_topic, $year, $semester,
                                         Seminars::$abstracts_folder, Seminars::$images_folder,
                                                       $all_schemes,
                                                       $father_scheme_idx,
                                         $discipline_array, $colloquium_array, $seminar_container, $colloquium_container,
                                         $is_all_or_single );

    
  echo '</body>';
  
  

echo '</html>';

 }


public static function generate_page_with_all_weeks_list_wrapper($filename,
                                                                $relative_path_to_library,
                                                               $icon_in_toolbar,
                                                               $remote_url_base, $local_url_base, $are_input_files_local,
                                                               $department,
                                                               $institution,
                                                               $all_schemes) {   

 $title = Seminars::$general_title;
 
  
  $active_mondays = Seminars::read_csv_file(Seminars::$active_mondays_file);

  $first_monday_month = $active_mondays[Seminars::$active_mondays_first_index][Seminars::$active_mondays_month_index];
  $first_monday_day   = $active_mondays[Seminars::$active_mondays_first_index][Seminars::$active_mondays_day_index];
  $last_monday_month  = $active_mondays[Seminars::$active_mondays_last_index][Seminars::$active_mondays_month_index];
  $last_monday_day    = $active_mondays[Seminars::$active_mondays_last_index][Seminars::$active_mondays_day_index];
  
  
 $array_coords = Seminars::get_discipline_year_semester($filename);
    
 $semester   = $array_coords[0];
 $year       = $array_coords[1];
 $discipline = $array_coords[2];  //this will be 'all'
    
    
 $sort_weeks_list = Seminars::$sort_weeks;
 $week_month_day_auto = Seminars::generate_initial_week_days($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day, $sort_weeks_list);

//to generate all semester files (actually I do it with a shell script instead)
//    Seminars::generate_initial_week_files($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day,'../../../src/sh/week_file.php','./week/');

   $is_all_or_single = 2;

    
 Seminars::generate_page_with_all_weeks_list($relative_path_to_library,
                                             $title,
                                             $icon_in_toolbar,
                                             $remote_url_base, $local_url_base, $are_input_files_local,
                                                   $all_schemes,
                                             $is_all_or_single,
                                             $department,
                                             $institution,
                                             $year,
                                             $semester,
                                             $week_month_day_auto);
 
 
 }
 
 
 

private static function generate_page_with_all_weeks_list($relative_path_to_library,
                                                               $title,
                                                               $icon_in_toolbar,
                                                               $remote_url_base, $local_url_base, $are_input_files_local,
                                                   $all_schemes,
                                                               $is_all_or_single, 
                                                               $department,
                                                               $institution,
                                                               $year,
                                                               $semester,
                                                               $week_month_day_begin) {  

  Seminars::set_html_head($relative_path_to_library, $title, $icon_in_toolbar);

  echo '<body>';
  
  Seminars::navigation_bar($remote_url_base, $local_url_base, $are_input_files_local, 
                           $discipline,  ///@todo not needed here
                           $all_schemes,
                           $father_scheme_idx,   ///@todo change args: $father_scheme_idx is not needed here
                           $is_all_or_single, 
                           $department);
  
  Seminars::main_banner($title, $department, $institution);  
  
    echo '<h2> &nbsp <strong> ' . Seminars::capitalize($semester) . ' ' . $year . ' </strong> </h2>';
    
    echo '<div class="' . Seminars::$bootstrap_container . '">';
     
    echo '<br/>';
 
   Seminars::loop_over_semester_weeks($year, $week_month_day_begin);
   
    echo '<br/>';
    
    echo '</div>';

  
    //sandbox

  echo '</body>';
 
 }
 
 

public static function generate_page_with_all_seminars_by_time_range_wrapper($filename,
                                                                             $library_path,
                                                                             $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                                             $institution,
                                                                             $department,
                                                                             $icon_in_toolbar,
                                                                             $all_schemes
                                                                             ) { 

  $starting_pos = 2;
  $how_many_backwards = 2;
  $path_out =  Seminars::get_path_components_from_the_end($filename, $starting_pos, $how_many_backwards);
  
  $year = $path_out[1];
  $semester = $path_out[0];
 
  $month_day_file_array =  Seminars::get_path_components_from_the_end($filename, 0, 1);
  
  $month_day_file = $month_day_file_array[0];
  
  $basestr = basename($month_day_file, '.php');
  $basestr_array = Seminars::get_string_components_from_the_end('_', $basestr, 0, 2);
  
 $month_begin = $basestr_array[1];
 $day_begin   = $basestr_array[0];
 

 $offset_wanted = 6;
 $month_and_day_out = Seminars::compute_subsequent_day_with_offset($year, $month_begin, $day_begin, $offset_wanted);

 $month_end   = $month_and_day_out[0];
 $day_end     = $month_and_day_out[1];
 
 
 
 $is_all_or_single = 2;
 
 
 
 Seminars::generate_page_with_all_trees_by_time_range($library_path,
                                                         $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                         $institution,$department,
                                                         $icon_in_toolbar,
                                                         $year,
                                                         $semester,
                                                         $month_begin,
                                                         $day_begin,
                                                         $month_end,
                                                         $day_end,
                                                   $all_schemes,
                                                         $is_all_or_single
                                                         ); 
 
 
}




private static function previous_next_all_week_buttons($year, $month_begin, $day_begin, $sort_weeks_list) {


 $active_mondays_path = '../' . Seminars::$active_mondays_file;
 
 $active_mondays = Seminars::read_csv_file($active_mondays_path);

 //generate the list of all mondays
 $first_monday_month = $active_mondays[Seminars::$active_mondays_first_index][Seminars::$active_mondays_month_index];
 $first_monday_day   = $active_mondays[Seminars::$active_mondays_first_index][Seminars::$active_mondays_day_index];
 $last_monday_month  = $active_mondays[Seminars::$active_mondays_last_index][Seminars::$active_mondays_month_index];
 $last_monday_day    = $active_mondays[Seminars::$active_mondays_last_index][Seminars::$active_mondays_day_index];
 
 
 $all_mondays = Seminars::generate_initial_week_days($year, $first_monday_month, $first_monday_day, $last_monday_month, $last_monday_day, $sort_weeks_list);
 
 $current_monday_month = $month_begin;
 $current_monday_day = $day_begin;
 
 $row_matching = 0;
 
 
 for ($row = 0; $row < count($all_mondays); $row++) {

 if( $all_mondays[$row][0] == $current_monday_month && 
     $all_mondays[$row][1] == $current_monday_day) { $row_matching = $row; }
 
 }

 
 //CHRONOLOGICAL order
 $next_week_index     = '';
 $previous_week_index = '';
 $last_week_index     = '';
 $first_week_index    = '';
 
 if ($sort_weeks_list == SORT_DESC) {
   $next_week_index = -1;
   $previous_week_index = +1;
   $last_week_index = 0;
   $first_week_index = count($all_mondays) - 1;
 }
 else if ($sort_weeks_list == SORT_ASC) {
   $next_week_index = +1;
   $previous_week_index = -1;
   $last_week_index = count($all_mondays) - 1;
   $first_week_index = 0;
 }
 

 if (count($all_mondays) > 1) {
 
 if ($row_matching != $last_week_index && $row_matching != $first_week_index) {//this control encompasses both cases, although it is "looser"
     echo '<table>';
     echo '<td style="padding: 10px;">';
  $previous_ind = $row_matching + $previous_week_index; echo '<a href="' . $all_mondays[$previous_ind][0] . '_' . $all_mondays[$previous_ind][1] . '.php' . '"> Previous week </a>'; 
     echo '</td>';
     echo '<td style="padding: 10px;">';
  $next_ind = $row_matching + $next_week_index;         echo '<a href="' . $all_mondays[$next_ind][0]     . '_' . $all_mondays[$next_ind][1]     . '.php' . '"> Next week </a>';     
     echo '</td>';
     echo '<td style="padding: 10px;">';
       echo '<a href="' . '..' . '"> All weeks </a>';
     echo '</td>';
     echo '</table>';
  }

  else if ($row_matching == $last_week_index) {
    echo '<table>';
     echo '<td style="padding: 10px;">';
   $previous_ind = $row_matching + $previous_week_index; echo '<a href="' . $all_mondays[$previous_ind][0] . '_' . $all_mondays[$previous_ind][1] . '.php' . '"> Previous week </a>'; 
     echo '</td>';
     echo '<td style="padding: 10px;">';
     echo str_repeat("&nbsp;", 19);  //how to add white spaces
     echo '</td>';
     echo '<td style="padding: 10px;">';
       echo '<a href="' . '..' . '"> All weeks </a>';
     echo '</td>';
     echo '</table>';
   }

  else if ($row_matching == $first_week_index) {
    echo '<table>';
     echo '<td style="padding: 10px;">';
     echo str_repeat("&nbsp;", 26);  //how to add white spaces
     echo '</td>';
     echo '<td style="padding: 10px;">';
    $next_ind = $row_matching + $next_week_index;        echo '<a href="' . $all_mondays[$next_ind][0] . '_' . $all_mondays[$next_ind][1] . '.php' . '"> Next week </a>';
     echo '</td>';
     echo '<td style="padding: 10px;">';
       echo '<a href="' . '..' . '"> All weeks </a>';
     echo '</td>';
     echo '</table>';
  }
  
 }
 
 else {
   ///@todo do the case of only one week, maybe 
 }


}



 
private static function generate_page_with_all_trees_by_time_range($library_path,  
                                                                     $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                                     $institution, 
                                                                     $department,
                                                                     $icon_in_toolbar,
                                                                     $year,
                                                                     $semester,
                                                                     $month_begin, $day_begin, $month_end, $day_end,
                                                                     $all_schemes,
                                                                     $is_all_or_single ) {

// Reading the Month and Day columns, I have to see whether or not the day is in the range that I provide
// if so, I will store that array and make a map that will be parsed by a function



echo '<!DOCTYPE html>';

echo '<html>';


echo '<head>';

  $title_in_toolbar = Seminars::$general_title;

  
  Seminars::set_html_head($library_path, $title_in_toolbar, $icon_in_toolbar);
   
echo '</head>';



  echo '<body>';
  
  
  
  $discipline = 'all';
  
  Seminars::navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                           $discipline, 
                           $all_schemes,
                           $father_scheme_idx,  ///@todo this variable is not defined here
                           $is_all_or_single, 
                           $department);
 

 $title = $title_in_toolbar;
 
 Seminars::main_banner($title, $department, $institution);
 
 
  echo '<h2> &nbsp <strong> ' . Seminars::$months_conv[$month_begin] . ' ' . $day_begin  . ' - ' . Seminars::$months_conv[$month_end] . ' ' . $day_end  . ' </strong> </h2>';
  
 
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);
 
 $sort_weeks_list = Seminars::$sort_weeks;
 Seminars::previous_next_all_week_buttons($year, $month_begin, $day_begin, $sort_weeks_list);

  
    
  //====================================================================
     for ($i = 0; $i < count($all_schemes); $i++) {
  
$branch_name = Seminars::get_father_scheme_name($all_schemes[$i]);
  echo '<h3> &nbsp <strong> ' . $branch_name . ' </strong> </h3>';
  
    $leaf_array = Seminars::get_array_of_leaves( $all_schemes[$i] );  ///@todo this is all leaves, I think this only works with depth 0 and 1; one should get all leaves at all depths

       
    Seminars::set_tree_events_by_time_range_body($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                              $institution, $department, 
                                              $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                              Seminars::$abstracts_folder, Seminars::$images_folder, 
                                              $leaf_array,  
                                              /*$only_colloquia_bool_print_discipline*/true,
                                               $all_schemes, 
                                               $i);
     
     
}
 //====================================================================

    
  echo '<br>';
  echo '<br>';
  echo '<br>';
  
    
  echo '</body>';
  

echo '</html>';
  
 }
 

private static function read_csv_file($file) {
  
 $array_from_file = file($file); ///@todo this command seems to work only with CSV files coming from Linux/Mac, but not from Windows... the diff command says files are equal...!
 

  $csv_map = array_map('str_getcsv', $array_from_file); 
  

  return $csv_map;
  
}


private static function read_events_file_and_attach_topic_year_semester($prefix, $leaf_topic, $year, $semester, $all_schemes, $father_scheme_idx) {

   $prefix_base = Seminars::get_prefix_up_to_current_leaf($prefix, $all_schemes[$father_scheme_idx]);

 $file_to_parse = $prefix_base . $leaf_topic . '/' . $year . '/' . $semester . '/' . Seminars::$events_file;
 
  
 $csv_map = Seminars::read_csv_file($file_to_parse);
 
 array_splice($csv_map,0,1); //remove the 1st row

  
  for ($row = 0; $row < count($csv_map); $row++) {
  
  array_push($csv_map[$row], $leaf_topic);
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

 Seminars::set_browser_toolbar($title_in_toolbar, $icon_in_toolbar);



 Seminars::set_jquery_lib();
 
 Seminars::set_bootstrap_css_and_javascript_libs();



 Seminars::set_mandatory_libs($library_path);



}




public static function set_mandatory_libs($library_path) {

 Seminars::set_sem_css($library_path);
 
 Seminars::set_latex_rendering_lib();
 
} 
 
 
  private static function set_meta($description, $author) {
  
//  These metas must be first in the head 
 echo ' <meta charset="utf-8"> ';
 echo ' <meta name="viewport" content="width=device-width, initial-scale=1"> ';

// Meta tags for indexing in search engines
 echo ' <meta name="description" content="' . $description . '"> ';
 echo ' <meta name="author"      content="' . $author . '"> ';
  

  }
  
 
 private static function set_sem_css($library_path) {

// This must in the last position to override
 echo '<link rel="stylesheet" href="'  .  $library_path . './src/css/sem_style.css"> ';
 
}


private static function set_latex_rendering_lib() {

//  MathJax
 echo ' <script type="text/x-mathjax-config">';
 echo ' MathJax.Hub.Config({';
 echo ' tex2jax: {';
//how it should be printed
//  inlineMath:  [ ['$','$'],   ['\\(','\\)'] ],
//  displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
//how it should be printed - end
//how to get it
 echo ' inlineMath:  [ [\'$\',\'$\'],   [\'\\\(\',\'\\\)\'] ],    ';  //some escaping is needed for the ' and \ fonts
 echo ' displayMath: [ [\'$$\',\'$$\'], ["\\\[","\\\]"]     ],    ';  //some escaping is needed for the ' and \ fonts
//how to get it - end
 echo ' processEscapes: true ';
 echo ' }});';
 echo ' </script>';
 
 echo '<script type="text/javascript" async ';
 echo '  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML"> ';
 echo '</script> ';
// //  <!--<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>--> <!--THIS WAS DISCONTINUED-->          


}


private static function set_jquery_lib() {

//  jQuery library (must be before JavaScript!)
 echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  ';


}



private static function set_bootstrap_css_and_javascript_libs() {

// //  Latest compiled and minified CSS
//  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">';
// //  Latest compiled JavaScript 
//  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';

 echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';

 echo ' <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
 echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>';
 echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>';

}

private static function go_up($directory_levels) {

  $go_back = '';
  
    for ($i = 0; $i < $directory_levels; $i++) $go_back .= '../'; //string concatenation is with .
  
  return $go_back;
 
}



private static function convert_to_associative_array($array_in) {

//convert a normal array of arrays into an associative array having the first column as key and the remaining ones as value

 $assoc_array = array();
  
  for ($i = 0; $i < count($array_in); $i++) {
   
   $array_shifted = array_slice($array_in[$i], 1);
   
   $assoc_array[ $array_in[$i][0] ] = $array_shifted;
   
  }

  return $assoc_array;
  
}


public static function generate_list_past_editions($remote_path_prefix, $local_path_prefix, $are_input_files_local, $discipline) {


 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);

 $prefix_disc = $prefix . $discipline . '/';
 
 $past_years = Seminars::get_active_years($prefix_disc);

 echo 'All terms';

 echo '<br/>';
 
 echo '<ul>';

  foreach ($past_years as $year => $value) {
   echo '<li>' .  $year . ' </a>';
   echo '<ul>';
  foreach ($past_years[$year] as $term) {
     echo '    <li><a href="' . $prefix_disc . $year . '/' . $term . '/">' . $term . '</a></li>';
     }
   echo '  </ul>';
   echo '</li>';
 }
  
 echo '</ul>';
 
 
}


private static function get_active_years($prefix_disc) {

 
 $past_editions = Seminars::read_csv_file($prefix_disc . Seminars::$active_editions_file);


 $past_years = Seminars::convert_to_associative_array($past_editions);
 
 return $past_years;


}


private static function navigation_bar_menu_button($id_target) {


 echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#' . $id_target . '"' . ' aria-controls="' . $id_target . '"' . ' aria-expanded="false" aria-label="Toggle navigation">';

 echo '<span class="navbar-toggler-icon"></span>';

 echo '</button>';
 
}


private static function navigation_bar_brand($depth_all_sems, $home_all_sems) {

 echo '<a class="navbar-brand" href="'. $depth_all_sems . '">' . $home_all_sems . '</a>';

}


private static function navigation_bar_past_years($prefix, $page_topic, $is_all_or_single, $all_schemes, $father_scheme_idx) {

//if it's an all-page, take the links from all
//otherwise, take the links from the current discipline

  $label_name  = 'History:';
  
  $prefix_disc = '';
  
   $prefix_base = Seminars::get_prefix_up_to_current_leaf($prefix, $all_schemes[$father_scheme_idx]);


  if ($is_all_or_single == 2) { $prefix_disc = $prefix . 'all' . '/'; }
  
  else                        {    $prefix_base = Seminars::get_prefix_up_to_current_leaf($prefix, $all_schemes[$father_scheme_idx]);
                                   $prefix_disc = $prefix_base  . $page_topic . '/'; }

  
  
   echo '<li class="nav-item">';
   echo '<a class="nav-link" href="'/* . $prefix_disc*/ . '">' . $label_name  . '</a>';
   echo '</li>';
   
 $past_years = Seminars::get_active_years($prefix_disc);
 
 foreach ($past_years as $year => $value) {
   
   echo '<li class="nav-item dropdown">';
   echo '<a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .  $year . ' </a>';
   
   echo '  <ul class="dropdown-menu">';
  foreach ($past_years[$year] as $term) {
     echo '    <li><a href="' . $prefix_disc . $year . '/' . $term . '/">' . $term . '</a></li>';
     }
   echo '  </ul>';
   
  echo '</li>';
}


}



private static function navigation_bar_depth_1_scheme($prefix, $discipline_array) {


  $link_name = $discipline_array[0];

  echo '<li class="nav-item dropdown">';
    echo '<a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .  $link_name . ' </a>';

   echo '  <ul class="dropdown-menu" style="min-width: 15rem;">';
    foreach ($discipline_array[1] as $discipline => $discipline_string) {
     echo '    <li><a href="' . $prefix .  $discipline . '">' . $discipline_string . '</a></li>';

}
   echo '  </ul>';

   echo '</li>';


}

private static function navigation_bar_depth_0_scheme($prefix, $colloquia_array) {


  foreach ($colloquia_array as $key => $value) {

   echo '<li class="nav-item">';
   echo '<a class="nav-link" href="' . $prefix . $key . '/' . '">' . $value . '</a>';
   echo '</li>';

  }
  
}


private static function navigation_bar_link_to_department($department) {

   echo '<li class="nav-item">';
   echo '<a class="nav-link" href="' . $department[1] . '">' . $department[0] . '</a>';
   echo '</li>';

}




private static function navigation_bar_content($id_target, $prefix, $page_topic, $is_all_or_single_page, $department, $all_schemes, $father_scheme_idx) {


 
 echo '<div class="collapse navbar-collapse" id="' . $id_target . '"' . '>';

 echo '<ul class="navbar-nav mr-auto">';
 
 //===================
 
  for ($i = 0; $i < count($all_schemes); $i++) {

 $depth = 0;
 Seminars::get_depth_recursively($all_schemes[$i], $depth);


 $prefix_base = Seminars::get_prefix_up_to_current_leaf($prefix, $all_schemes[$i]);

 
 if ($depth == 0)        Seminars::navigation_bar_depth_0_scheme($prefix_base, $all_schemes[$i]);
 else if ($depth == 1)   Seminars::navigation_bar_depth_1_scheme($prefix_base, $all_schemes[$i][Seminars::get_father_scheme_string_from_itself($all_schemes[$i])]);
 ///@todo implement the other depths
 
 }
 
 
 
 //===================

 echo '<li class="dropdown-divider"></li>';
  
  Seminars::navigation_bar_past_years($prefix, $page_topic, $is_all_or_single_page, $all_schemes, $father_scheme_idx);
  
 echo '<li class="dropdown-divider"></li>';

  Seminars::navigation_bar_link_to_department($department);
  
 echo '</ul>';

 echo '</div>';

 
}


public static function navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                      $page_topic,
                                      $all_schemes,
                                      $father_scheme_idx,
                                      $is_all_or_single_page,
                                      $department) {

 
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);


 $home_all_sems = 'Home';
 
 $target_past_years = 'my_navbar';

 
 echo '<nav class="navbar navbar-expand-lg navbar-light">'; /*fixed-top ///@todo padding-top of the body must be modified, if you want the navigation bar to be fixed */
 
 Seminars::navigation_bar_brand($prefix, $home_all_sems);
 
 Seminars::navigation_bar_menu_button($target_past_years);

 Seminars::navigation_bar_content($target_past_years, $prefix, $page_topic, $is_all_or_single_page, $department, $all_schemes, $father_scheme_idx);


 echo '</nav>';

}




public static function main_banner($title, $department, $institution) {

  $dept_name_idx = 0;
  $dept_url_idx = 1;
  

  echo '<div class="main_banner">';
  echo '<div style="background-color: rgba(0, 0, 0, 0.3);">';                       //filter so that fonts on images are readable
  echo '<div class="' . Seminars::$bootstrap_container . '"' . ' ' . 'style="' . Seminars::$banners_text_alignment . '"' . '>';  //
//   echo '<div style="' . Seminars::$banners_text_alignment . ' display: inline; width: 100%; margin-left: auto; margin-right: auto;  "' . '>';  //
  echo '      <h2> ' . $title . ' </h2>';
  echo '      <h3> ' . /*'<a href="' . $department[$dept_url_idx] . '"' . ' style="color: white;"' . '>'  .*/ $department[$dept_name_idx]  /*. '</a>'*/ . ' </h3>';
  echo '      <h3> ' . $institution . ' </h3>';
  echo '  </div>';
  echo '</div>';
  echo '</div>';

 }
 
///@todo deprecated 
private static function default_meeting_coords_banner($semester, $year, $week_day, $time, $room) {

 echo '<div class="'. Seminars::$bootstrap_container_fluid . '"' . ' ' . 'style="' . Seminars::$banners_text_alignment . ' ' . Seminars::$sem_header_style . '"' . '>';
 
 echo '<h3>';
 echo $semester . ' ' . 
      $year     . ' - ' . 
      $week_day . ', ' . 
      $time . ' - ' . 'room ' . 
      $room;
 echo '</h3>';
 
 echo '</div>';
 
 echo '<br>'; 
 
 }
 
private static function capitalize($string) {

  $string_cap = ucfirst($string);
  
  return $string_cap;

 }
 
 
///@todo not used for now 
private static function default_meeting_coords_banner_map($file_to_parse, $year, $semester) {
 
 $csv = Seminars::read_csv_file($file_to_parse);

 //default meeting related data
   $week_day_default_meeting_idx            = 0;
   $time_default_meeting_idx                = 1;
   $room_default_meeting_idx                = 2;
   $row_default_meeting_data = 1;
 
  Seminars::default_meeting_coords_banner(
      Seminars::capitalize($semester),
      Seminars::capitalize($year),
      $csv[$row_default_meeting_data][$week_day_default_meeting_idx],
      $csv[$row_default_meeting_data][$time_default_meeting_idx],
      $csv[$row_default_meeting_data][$room_default_meeting_idx]
      );
 
 } 




private static function set_browser_toolbar($title, $icon_in_toolbar) {
 
//  Title
 echo '<title> ' . $title . ' </title>';
 
//  Favicon
 echo ' <link rel="icon" href="' .  $icon_in_toolbar . '"> ';

 }



private static function about($page_topic, 
                              $remote_path_prefix, $local_path_prefix, $are_input_files_local,
                              $all_schemes, $father_scheme_idx) {
 
 $prefix_base = Seminars::get_prefix_up_to_current_leaf('', $all_schemes[$father_scheme_idx]);

 
    $about_txt_file =
    $prefix_base .
    $page_topic . '/' .  
    Seminars::$about_file;

  echo '<div class="' . Seminars::$bootstrap_container . '">';
  
  echo '<br/>';       
  
  Seminars::include_file( $remote_path_prefix, $local_path_prefix, $about_txt_file, $are_input_files_local);
  
  echo '<br/>';       
  echo '<br/>';       

  echo '</div>';
  
   ///@todo mention organizers
   
 
}

private static function set_abstract_id_and_its_toggle($events_map, $row, $base_str) {

  $clock_str = $events_map[$row][Seminars::$time_idx];
  $clock_str = str_replace(' ', '_', $clock_str);
  $clock_str = str_replace(':', '_', $clock_str);
  

    $abstract_id = $base_str . 'abst_' .
      $events_map[$row][Seminars::$discipline_idx]  . '_' . 
      $events_map[$row][Seminars::$year_idx]        . '_' .
      $events_map[$row][Seminars::$month_idx]       . '_' . 
      $events_map[$row][Seminars::$day_idx]         . '_' .
      $clock_str;
      
  return  $abstract_id;
  
}


private static function set_event_day($events_map, $row) {


    $year = $events_map[$row][Seminars::$year_idx];
    $month = $events_map[$row][Seminars::$month_idx];
    $day = $events_map[$row][Seminars::$day_idx];
    
    $week_day = Seminars::compute_week_day($year, $month, $day);

    echo '<td width="100px">';

    echo "<strong>";
    echo  $week_day  . " <br/> " . Seminars::$months_conv[ $events_map[$row][Seminars::$month_idx] ] . " " . $events_map[$row][Seminars::$day_idx];
    echo "</strong>";
    
    echo '<br/>';
    
    
    echo "<em>";
    echo $events_map[$row][Seminars::$time_idx];
    echo "</em>";
    
    echo '<br/>';
    echo /*"room "  .*/  $events_map[$row][Seminars::$room_idx] ;
    echo "<br>";
    
    echo '</td>';

}


private static function set_event_details($events_map, $row, 
                                          $discipline_array, $bool_print_discipline, 
                                          $toggle_abstract_id, $arrow_abstract_id) {

    
    echo '<td>';

   if ( $bool_print_discipline == true ) {                                
      echo "<strong>";
      //name of the current leaf
        echo $discipline_array[ $events_map[$row][Seminars::$discipline_idx] ];
      echo "</strong>";
      echo "<br>";
    }
    

    echo '<a  id=' . '"' .  $toggle_abstract_id . '"';
    echo '  style="cursor: pointer; text-decoration: underline; " ';    ///@todo I want to give this the same color as an <a> tag with href= instead of id=
    echo '>'; 
    
    echo '<em style="padding-right: 5px">';   ///with this padding we add a space that doesn't get underlined although the text is. An alternative would be to put the 'underline' as a style of <em> instead of <a>
    echo $events_map[$row][Seminars::$title_idx];
    echo '</em>';
        
    echo '<i id=' . '"' .  $arrow_abstract_id . '"' . ' class="arrow_down"></i>';
    
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
    echo  $events_map[$row][Seminars::$speaker_department_idx];
    if ($events_map[$row][Seminars::$speaker_department_idx] != '' && $events_map[$row][Seminars::$speaker_institution_idx] != '') echo ', ';
    echo $events_map[$row][Seminars::$speaker_institution_idx];
    
    echo "<br>";
    
    
    echo '</td>';
      

}




private static function set_event_image($remote_path_prefix,
                                        $local_path_prefix,
                                        $are_input_files_local,
                                        $images_folder,
                                        $events_map,
                                        $row,
                                                   $all_schemes,
                                                   $father_scheme_idx)  {
                                        
                                        
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);

 $after_prefix = Seminars::get_prefix_up_to_current_leaf('', $all_schemes[$father_scheme_idx]);

   echo '<td>'; 
   
   echo '<img class="' . Seminars::$sem_image . '" ' .  'src="' .
     $prefix . 
     $after_prefix .
     $events_map[$row][Seminars::$discipline_idx] . '/' .  
     $events_map[$row][Seminars::$year_idx] . '/' . 
     $events_map[$row][Seminars::$semester_idx]  . '/' . 
     $images_folder . '/' . 
     $events_map[$row][Seminars::$speaker_image_idx] . '" alt="image">';
     
   echo '</td>';
    
    }


private static function set_event_image_and_details($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                    $images_folder,
                                                    $events_map,
                                                    $row,
                                                    $discipline_array, $bool_print_discipline,
                                                    $toggle_abstract_id,
                                                    $arrow_abstract_id,
                                                   $all_schemes,
                                                   $father_scheme_idx) {


    echo '<table class="' . Seminars::$sem_item . '">';
    
    
    echo '<td>';
     
     echo ' <table id="switch_col">';

     Seminars::set_event_image($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                               $images_folder, $events_map, $row,
                                                   $all_schemes,
                                                   $father_scheme_idx);
    
     Seminars::set_event_day($events_map, $row);
     
     echo ' </table>';
    
    echo ' </td>';
    

    Seminars::set_event_details($events_map, $row, $discipline_array, $bool_print_discipline, 
                                $toggle_abstract_id, $arrow_abstract_id);
    
    
    echo '</table>';



}

private static function test_table() {
//this is to test if two blocks in one row become two blocks in a column in mobile devices

    echo '<table id="switch_col">';
    echo '<td>';
    echo 'Title';
    echo '</td>';
    echo '<td>';
    echo 'Title2';
    echo '</td>';
    echo '</table>';
                                            
}                                           



private static function set_abstract($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                     $abstracts_folder,
                                     $events_map,
                                     $row,
                                     $toggle_abstract_id,
                                     $arrow_abstract_id,
                                     $all_schemes,
                                     $father_scheme_idx) {
                                     
//   $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);
   $after_prefix = Seminars::get_prefix_up_to_current_leaf('', $all_schemes[$father_scheme_idx]);

 $file_to_parse = $prefix_base . $leaf_topic . '/' . $year . '/' . $semester . '/' . Seminars::$events_file;

 
 $abstract_id = Seminars::set_abstract_id_and_its_toggle($events_map, $row, '');
    

 $abstract_field = $events_map[$row][Seminars::$abstract_file_idx];
    
 $arr1 = explode(' ',trim($abstract_field));
 $txt_found = stristr($abstract_field,Seminars::$about_file_extension);  //case-insensitive match
//     if (!($txt_found)) echo "---";  //it is either empty or it contains information

    $abstract_path =
    $after_prefix . 
    $events_map[$row][Seminars::$discipline_idx] . '/' .  
    $events_map[$row][Seminars::$year_idx] . '/' . 
    $events_map[$row][Seminars::$semester_idx] . '/' . 
    $abstracts_folder . $events_map[$row][Seminars::$abstract_file_idx];

//----------------    
    echo '<span ';   ///@todo make this span CENTERED
    
    echo ' id=' . '"' . $abstract_id . '"'; 
    
    echo ' style="display: none;"';
    
    echo '>';
    
    if (!($txt_found)) echo $abstract_field;
    else               Seminars::include_file( $remote_path_prefix, $local_path_prefix, $abstract_path, $are_input_files_local);
    
    echo '</span>';
//----------------    



// ********************
// on click over the title identified by $toggle_abstract_id, toggle the abstract span (I think a simple toggle means turn on or off the whole object)
    echo '<script>';

    echo '
      $(document).ready(
        function() {';
      
     echo '
       $("a#' . $toggle_abstract_id . '").click(';
       
     echo '
       function() {
          $("span#' . $abstract_id . '").toggle();
          $("i#' . $arrow_abstract_id . '").toggleClass("arrow_up");
        }
      );';    //end click
      
      
    echo '
       }
     );';  //end ready

  
   echo '</script>';
// ********************
 
 }
 
 
private static function loop_over_events($events_map, $starting_row, 
                                         $remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                         $abstracts_folder, $images_folder, 
                                         $discipline_array, $bool_print_discipline,
                                         $all_schemes,
                                         $father_scheme_idx) {

 
    ///@todo: abstract have to be .txt (I think it's enough to be any text file), with a name specified in the csv file
    ///@todo: strip away any empty spaces before or after the csv fields
    ///@todo: make sure there are no empty lines at the end of a csv file
 
  
    $num_rows = count($events_map);  
    
    
  echo '<div class="' . Seminars::$bootstrap_container . '">';

    
    for ($row = $starting_row; $row < $num_rows; $row++) {

    $toggle_abstract_id = Seminars::set_abstract_id_and_its_toggle($events_map, $row, 'toggle_');
    $arrow_abstract_id  = Seminars::set_abstract_id_and_its_toggle($events_map, $row, 'arrow_');

    Seminars::set_event_image_and_details($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                          $images_folder, $events_map, $row, 
                                          $discipline_array, $bool_print_discipline,
                                          $toggle_abstract_id, $arrow_abstract_id,
                                                   $all_schemes,
                                                   $father_scheme_idx);
    
    Seminars::set_abstract($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                           $abstracts_folder, 
                           $events_map, $row,
                           $toggle_abstract_id, $arrow_abstract_id,
                           $all_schemes,
                           $father_scheme_idx);
    
    }
    

  echo '</div>';   
    
    
  } 
 

public static function generate_initial_week_files($year_in, $month_begin, $day_begin, $month_end, $day_end, $src_file, $folder_out) {
//@todo To use this function, temporarily give Write access to all in the containing folder, and clean the output folder week/
// then, do a chown to remove the web user
// Actually we do this with a shell script too

 $sort_weeks_list = SORT_DESC; //here ascending or descending is equivalent
 $months_and_days = Seminars::generate_initial_week_days($year_in, $month_begin, $day_begin, $month_end, $day_end, $sort_weeks_list);

    for ($index = 0; $index < count($months_and_days); $index++) {
    
    $destination = $months_and_days[$index][0] . '_' . $months_and_days[$index][1] .'.php';
    
    $destination = $folder_out . $destination;
//     echo ' ' . $src_file . ' ' . $destination;
     if(!copy($src_file, $destination)) { echo ' copy failed; you may have a permission issue on the directory where you are trying to write (the web user has his own permissions). Also, if the file already exists the copy may not work'; }
    
    
}




}


private static function compute_week_day($year_in, $month_in, $day_in) {

//let us start from a January 1 that is a Monday. Let us pick January 1, 1990
//also, I found out that in the Gregorian calendar leap years are NOT every 4 years, but centennial years NOT divisible by 400 are not leap years... 
// since we will not see this until we die, let us stick with a Julian approach and make leap years every 4 years

  $starting_day = 1;
  $starting_month = 1;
  $starting_year = 1990;

// compute the sequential number from this starting point
  $abs_day = -1;
  
  $year_count = $starting_year;

  while($year_count < $year_in) {
  
  if ($year_count % 4 != 0) $abs_day += 365;
  else                      $abs_day += 366;
  
    $year_count ++;
  }

 $sequential_day_in_current_year = Seminars::compute_day_sequential_number($year_in, $month_in, $day_in);
 
 $total_day = $abs_day + $sequential_day_in_current_year + 1;
 
 $week_day_modulo = $total_day % 7;
 
 $week_day;
 
    for ($i = 0; $i < 7; $i++) {
 if ($week_day_modulo == $i)   $week_day = $i;
 }
 
 
//  echo Seminars::$week_day_conv[$week_day];

 return Seminars::$week_day_conv[$week_day];
 
}



private static function generate_initial_week_days($year_in, $month_begin, $day_begin, $month_end, $day_end, $sort_weeks_list) {

///@todo check that the input and the output are a Monday

 $offset_wanted = 7;
 
 $sequential_day_begin = Seminars::compute_day_sequential_number($year_in, $month_begin, $day_begin);
 
 $sequential_day_end = Seminars::compute_day_sequential_number($year_in, $month_end, $day_end);
 
 $months_and_days = array();
 
 $new_day = $sequential_day_begin;
 $month_and_day_out = Seminars::compute_month_and_day_from_sequential_number($year_in, $sequential_day_begin);
 
 array_push($months_and_days, $month_and_day_out);
 
 
 
 while ($new_day < $sequential_day_end) {
 
   $new_day += $offset_wanted;
   $month_and_day_item = Seminars::compute_month_and_day_from_sequential_number($year_in, $new_day);
   if      ($sort_weeks_list == SORT_DESC) array_unshift($months_and_days, $month_and_day_item);  //the most recent is at the top: the alternative is array_push
   else if ($sort_weeks_list == SORT_ASC)     array_push($months_and_days, $month_and_day_item);  
 }
  
 return $months_and_days;

}

 
 
private static function compute_subsequent_day_with_offset($year_in, $month_in, $day_in, $offset_wanted) {
  
 $sequential_day_begin = Seminars::compute_day_sequential_number($year_in, $month_in, $day_in);
 
 $sequential_day_end = $sequential_day_begin + $offset_wanted;
    
 if ($sequential_day_end > Seminars::compute_year_days_number($year_in) - 1) echo '@todo Handling of year crossing not implemented';
   
 $month_and_day_out = Seminars::compute_month_and_day_from_sequential_number($year_in, $sequential_day_end);

 return $month_and_day_out;
 
}


private static function compute_year_days_number($year) { 
//either 365 or 366


   $month_days = Seminars::get_month_days($year);

$days_number = 0;

 for ($i = 0; $i < count($month_days); $i++) $days_number += $month_days[$i];

 return $days_number; 
 
}



private static function compute_month_and_day_from_sequential_number($year_in, $number_in) { 
 //the input number starts at 0
 //the outputs start at 1
 
   $month_days = Seminars::get_month_days($year_in);
   
   $month_current = 0;
   while ($number_in > $month_days[$month_current] - 1) {
      $number_in -= $month_days[$month_current];
      $month_current++;
   }
   
   $month_out = $month_current + 1;
   $day_out   = $number_in + 1;
   
   $month_and_day_out = array($month_out, $day_out);
   
   return $month_and_day_out;
   
}


private static function compute_day_sequential_number($year, $month, $day) { 
 //the inputs start at 1 
 //the output goes from 0 to 364 or 365
 
 
   $month_days = Seminars::get_month_days($year);
   
   $sequential_day = 0;
    for ($i = 0; $i < $month - 1; $i++) {
   $sequential_day += $month_days[$i];
   }
   
   $sequential_day += $day - 1;
   
   return    $sequential_day;
   
 }
 
 
public static function get_month_days($year) { 

   $is_leap = $year % 4;
   
   $month_days = array();
   
   if($is_leap != 0) $month_days = Seminars::$month_days_non_leap;
   else             $month_days = Seminars::$month_days_leap;
   
   return $month_days;
   
 }
 

public static function get_month_string($number) { 

  return Seminars::$months_conv[$number];

}


///@todo check the intersession file if it needs this, otherwise this should better be private
public static function set_single_leaf_body($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                  $institution, $department,
                                                   $page_topic, $year, $semester, 
                                                   $abstracts_folder, $images_folder,
                                                   $all_schemes,
                                                   $father_scheme_idx,
                                                   $discipline_array,  $colloquium_array,
                                                   $seminar_container, $colloquium_container,
                                                   $is_seminar_colloquium_all ) {
                                                   
 
 $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);



 Seminars::navigation_bar($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                          $page_topic,
                          $all_schemes,
                          $father_scheme_idx,
                          $is_seminar_colloquium_all, 
                          $department);
                          
 
   $title =  Seminars::get_leaf_name_from_father_scheme_recursively($all_schemes[$father_scheme_idx], $page_topic, $title);

 Seminars::main_banner($title, $department, $institution);
  
//  Seminars::default_meeting_coords_banner_map('./default.csv', $year, $semester);
  
 Seminars::about($page_topic,
                 $remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                 $all_schemes, $father_scheme_idx);
                 
 
 
 $events_in_seminar = Seminars::read_events_file_and_attach_topic_year_semester($prefix, $page_topic, $year, $semester, $all_schemes, $father_scheme_idx);
 
 $bool_print_discipline = false;
 
 //==========
 //sort in chronological order, first by month, then by day
  $temp_column = array();
    
  foreach ($events_in_seminar as $key => $row) {
     $sequential   = Seminars::compute_day_sequential_number($year, $events_in_seminar[$key][Seminars::$month_idx],  $events_in_seminar[$key][Seminars::$day_idx]);
    $temp_column[$key] = $sequential;
  }
  
  array_multisort($temp_column, SORT_ASC, $events_in_seminar);
 //==========

 $starting_row = Seminars::$row_events_begin;
 
    
 Seminars::loop_over_events($events_in_seminar, $starting_row,
                            $remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                            $abstracts_folder, $images_folder, 
                            $discipline_array, $bool_print_discipline,
                            $all_schemes,
                            $father_scheme_idx);
 

  echo '<br>';
  echo '<br>';
  echo '<br>';

 
 }
 

 private static function sort_array_of_arrays_based_on_one_index(& $array_of_arrays, $index, $sort_order) {
 
//  $index: column index with respect to which you intend to sort
//  $sort_order: SORT_ASC, SORT_DESC, ...
 
  $temp_column = array();
    
  foreach ($array_of_arrays as $key => $row) {
    $temp_column[$key] = $row[$index];
  }

  array_multisort($temp_column, $sort_order, $array_of_arrays);
  //in practice the first array is sorted, and the second one is sorted the same way as the first

 }

 
private static function set_tree_events_by_time_range_body($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                      $institution, 
                                                  $department, 
                                                  $year,
                                                  $semester, 
                                                  $month_begin,
                                                  $day_begin, 
                                                  $month_end, 
                                                  $day_end, 
                                                  $abstracts_folder,
                                                  $images_folder,
                                                  $discipline_array,  
                                                  $bool_print_discipline,
                                                  $all_schemes,
                                                  $father_scheme_idx)  {
 

    $events_in_week =  Seminars::parse_all_event_tables_single_leaf($remote_path_prefix, $local_path_prefix, $are_input_files_local,
                                                                    $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                                                    $discipline_array, $all_schemes, $father_scheme_idx);
    
    
    Seminars::sort_array_of_arrays_based_on_one_index($events_in_week, Seminars::$month_idx, SORT_ASC);
    
    
    $starting_row = 0;
     
 
 if (count($events_in_week) == 0)   {
     echo '<div class="' . Seminars::$bootstrap_container . '">';
     echo 'None this week';
     echo '</div>';
 }
 
 else  Seminars::loop_over_events($events_in_week, $starting_row,
                                  $remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                  $abstracts_folder, $images_folder, 
                                  $discipline_array, $bool_print_discipline,
                                  $all_schemes,
                                  $father_scheme_idx);
                                  

 }
 
 
private static function loop_over_semester_weeks($year, $week_month_day_begin) {

   $current_year     = date("Y");
   $current_month    = date("m");
   $current_day      = date("d");
   $current_week_day = date("l");

   $sequential_current = Seminars::compute_day_sequential_number($current_year, $current_month, $current_day);
   

   for ($index = 0; $index < count($week_month_day_begin); $index++) {
    
   $begin_month =  $week_month_day_begin[$index][0];
   $begin_day   =  $week_month_day_begin[$index][1];
   
   $offset_wanted = 6;
   $month_and_day_out = Seminars::compute_subsequent_day_with_offset($year, $begin_month, $begin_day, $offset_wanted);

   $end_month = $month_and_day_out[0];
   $end_day   = $month_and_day_out[1];

   //make the current week bold  
   $style ='';
   $sequential_begin = Seminars::compute_day_sequential_number($year, $begin_month, $begin_day);
   $sequential_end = $sequential_begin + $offset_wanted;
   
   if ( $sequential_begin <= $sequential_current && $sequential_current <= $sequential_end )   $style ='font-weight: bold;';
   //make the current week bold  

 
 echo '&nbsp <a ' . 'style="' . $style . '" ' . ' href="./week/' . 
    $week_month_day_begin[$index][0] . '_' . 
    $week_month_day_begin[$index][1] . '.php">' . 
//     'Week of ' . 
    'Monday, ' . Seminars::get_month_string($begin_month) . ' ' .  $begin_day . ' - ' . 
    'Sunday, ' . Seminars::get_month_string($end_month) . ' ' .  $end_day . 
    '</a>';    
    
    echo '<br/>';
    
    }


}



private static function get_array_of_leaves($scheme) {

$depth = 0;
       Seminars::get_depth_recursively($scheme, $depth);
       
       $output_array = array();
//        echo Seminars::get_father_scheme_string_from_itself($scheme);
//         echo $depth;

        if ($depth == 0)       $output_array = $scheme;
       else if  ($depth == 1)  $output_array = $scheme[Seminars::get_father_scheme_string_from_itself($scheme)][1];
 
 
//  print_r($output_array);
//  echo "\n";
 
 return $output_array;
 
}


 
private static function parse_all_event_tables_single_leaf($remote_path_prefix, $local_path_prefix, $are_input_files_local, 
                                               $year, $semester, $month_begin, $day_begin, $month_end, $day_end, 
                                               $discipline_array, $all_schemes, $father_scheme_idx)  {
 
 
  $starting_row = Seminars::$row_events_begin;

  $prefix = Seminars::get_prefix($remote_path_prefix, $local_path_prefix, $are_input_files_local);
  
  
  
  $events_array = $discipline_array;
  

  $events_in_week = array();
    
    
//---------------    
    
    foreach ($events_array as $discipline => $discipline_string) {
    

   $csv_map = Seminars::read_events_file_and_attach_topic_year_semester($prefix, $discipline, $year, $semester, $all_schemes, $father_scheme_idx);

    
    for ($row = $starting_row; $row < count($csv_map); $row++) {

    //best thing is probably to convert into an increasing number, to avoid non-monotone behavior
    $sequential_begin   = Seminars::compute_day_sequential_number($year, $month_begin, $day_begin);
    $sequential_end     = Seminars::compute_day_sequential_number($year, $month_end, $day_end);
    $sequential_current = Seminars::compute_day_sequential_number($year, $csv_map[$row][Seminars::$month_idx], $csv_map[$row][Seminars::$day_idx]);
    

    if ( $sequential_begin <= $sequential_current && $sequential_current <= $sequential_end ) {

    array_push($events_in_week, $csv_map[$row]);
    
       }
    
    
    }     
    
    
  }

//---------------    
  

 return $events_in_week;
 
 
 }

 
 
 
 //============== private data ===============

   private static $abstracts_folder     = "./abstracts/";
   private static $images_folder        = "./images/";
   private static $events_file          = './events.csv';
   private static $about_file_extension = '.txt';
   private static $about_file           = './about.txt';
   private static $active_editions_file = './active_editions.csv';
   private static $active_mondays_file  = 'active_mondays_first_and_last.csv';
   ///@todo it is up to the user to write the same directories as the ones that are there, perhaps put a check on that
   ///@todo you also have to check that the csv file does not have "empty cells"
 
   private static $active_mondays_first_index = 0;
   private static $active_mondays_last_index = 1;
   private static $active_mondays_month_index = 0;
   private static $active_mondays_day_index = 1;
 
   private static $sort_weeks = SORT_ASC;  //or SORT_DESC
 
 //array for conversion from month number to string
 private static $months_conv = array(
 1  =>    'Jan.',  
 2  =>    'Feb.',  
 3  =>    'Mar.',  
 4  =>    'Apr.',  
 5  =>    'May',   
 6  =>    'Jun.',  
 7  =>    'Jul.',  
 8  =>    'Aug.',  
 9  =>    'Sep.',  
 10 =>    'Oct.',  
 11 =>    'Nov.',  
 12 =>    'Dec.' 
 ); 

 private static $months_conv_long = array(
 1  =>  'January',  
 2  =>  'February', 
 3  =>  'March',    
 4  =>  'April',    
 5  =>  'May',      
 6  =>  'June',     
 7  =>  'July',     
 8  =>  'August',   
 9  =>  'September',
 10 =>  'October',  
 11 =>  'November', 
 12 =>  'December'
 ); 

 private static $week_day_conv = array(
 0  =>    'Monday',  
 1  =>    'Tuesday',  
 2  =>    'Wednesday',  
 3  =>    'Thursday',  
 4  =>    'Friday',   
 5  =>    'Saturday',  
 6  =>    'Sunday'
 ); 

   private static   $month_days_non_leap = array(31,28,31,30,31,30,31,31,30,31,30,31);  //non-bissextile
   private static   $month_days_leap     = array(31,29,31,30,31,30,31,31,30,31,30,31);  //bissextile
 
   private static   $month_days_max = 31;

// =====
   private static   $month_idx               = 0;  //if this column is empty, it still generates the page
   private static   $day_idx                 = 1;  //if this column is empty, it still generates the page
   private static   $time_idx                = 2;  //if this column is empty, it still generates the page
   private static   $room_idx                = 3;  //if this column is empty, it still generates the page
   private static   $speaker_idx             = 4;  //if this column is empty, it still generates the page
   private static   $speaker_department_idx  = 5;  //if this column is empty, it still generates the page
   private static   $speaker_institution_idx = 6;  //if this column is empty, it still generates the page
   private static   $speaker_url_idx         = 7;  //if this column is empty, it still generates the page
   private static   $speaker_image_idx       = 8;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
   private static   $title_idx               = 9;  //if this column is empty, it still generates the page
   private static   $abstract_file_idx       = 10;  //if this column is empty, it still generates the page //if this column is NOT empty but the file is NOT there, it still generates the page
   private static   $discipline_idx      = 11;
   private static   $year_idx            = 12;
   private static   $semester_idx        = 13;


  private static $row_events_begin = 0;
  
   private static   $discipline_idx_in_path_from_end = 2;
   private static   $year_idx_in_path_from_end       = 1;
   private static   $semester_idx_in_path_from_end   = 0;
   private static   $num_positions_from_the_end_to_read = 3;
   private static   $first_position_from_the_end_to_read = 1; //to discard 'index.php' from the absolute filename
   
// ===== 
   private static   $general_title   = 'Events';

// ===== bootstrap style
  private static $bootstrap_container = 'container';              //centered page
  private static $bootstrap_container_fluid = 'container-fluid';  //all viewport width
  private static $banners_text_alignment = 'text-align: left;';

// ===== sem style (must be consistent with css)
  private static $sem_image = 'sem_image';
  private static $sem_item = 'sem_item';
  private static $sem_header_style = 'background-color: lightgray;';


} //end class




///@todo http://stackoverflow.com/questions/15167545/how-to-crop-a-rectangular-image-into-a-square-with-css
///@todo do a function that picks a rectangular image and makes it square by extending its smaller side with black
///@todo take an arbitrary image, find max between width and height, and make that max equal to N, and keep the aspect ratio for the other dimension; then put a background square of N x N; finally apply border-radius
///@todo see how I can fix the underlining that is missing under mathematical symbols in the title of a talk
///@todo Improve documentation with an example of how to use the week-based functions
///@todo Implement a search engine to find colloquia and seminars along the whole database
///@todo Since the list of seminars changes from one semester to another, find a way to only show the seminars that are ACTIVE in the CURRENT semester;
//       on the other hand, try to make the other ones visible, to avoid hiding a history of perhaps interesting past seminars
///@todo Remove automatically potential whitespaces from fields such as month,day,time in events.csv
///@todo Remove potential zeros in numbers of month and day such as 09 instead of 9
///@todo If no title is specified, do not the dropdown arrow for the abstract
///@todo If no image is specified, put some default (define DoubleT.jpg as a default)
///@todo Make an arbitrary amount of seminars, or an arbitrary number of groups with an additional "depth level" to be specified, maybe only 1 additional depth level with a "container" folder to be specified
///@todo Write a program that automatically generates the slideshows that may go both in the department screens and in the main cyclic banner in the department homepage (I will generate a bunch of pdf files, you need a software like PDF Slideshow)
///@todo Check that it works also if we add 'summer' folders, for summer events
///@todo rename Seminars with Events
///@todo write a function that checks that the directories of the inputs are there


?>
