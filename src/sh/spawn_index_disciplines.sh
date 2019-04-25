#!/bin/bash

 CONTAINER=$1;
 
 
if test "$CONTAINER" = ""; then
echo "The second argument must be the directory (either relative or absolute) where all seminars are"; exit;
fi

 cd $CONTAINER


 for file in   algebra_and_number_theory  analysis  applied_math  biomath  geometry  image_analysis  logic_topology  math_club  math_ed prep_for_profession  real_algebraic_geometry statistics; 
 do cd $file; 
#  touch about.txt; 
#  pwd;
 cp ../../seminars_lib/src/sh/index_discipline.php index.php
 cd ../; 
 done
