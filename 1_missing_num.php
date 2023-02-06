<?php

$numArray = array(1,2,3,7,6);
// sort($array);

$missingNum = array();

for($i=0; $i<10; $i++) 
{
    if(in_array($i,$numArray))
        continue;
    else
        array_push($missingNum  $i);
}

echo "input values in array are :";
foreach($numArray as $input)
{
    echo $input." , ";
}

echo "<br>missing values in array are :";
foreach($missingNum as $missing)
{
    echo $missing." , ";
}