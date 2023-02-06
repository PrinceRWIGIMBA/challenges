<?php

$array = array(1,6,7,8,3,8,7,6,9,4,3,4);

$counter = array_count_values($array);


echo "values in array are :";
foreach($array as $input)
{
    echo $input." , ";
}
echo "<br>number of repetitions of an elements inside an array : .<br>";
// print_r($counters);


foreach( $counter as $key => $value )
{
    echo $key." => ".$value."<br>";
}
?>