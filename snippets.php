<?php

//Some useful PHP Snippets

SORTING Multiple Dimensional array in ASC

function method1($a,$b) 
{
		return ($a["category"] >= $b["category"]) ? -1 : 1;
}
usort($array, "method1");


// Exclude category from array set

$events_array = $events->get_events(array(
    'mallID' => MALL_ID,
    'limit' => 20
));

//Exclude Category name
$events_array  = array_filter($events_array, function ($varCat) {
    return ($varCat['category'] != 'COVID-19');
});























?>
