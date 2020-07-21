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


//REDEFINE PHP CONSTANT

define('CLIENT_ID', '1000',true); //Add 3 param true
define('CLIENT_ID', '1419'); //Redefine where you want to use it


//READ IMAGES FROM FOLDER


$dirname = "assets/images/[folder]/";
$images = glob($dirname."*.jpg");
foreach($images as $image):?>
echo "$images";
endforeach;



//REMOVE EMPTY TAGS 
$regx = "/<[^\/>]*>([\s]?)*<\/[^>]*>/"; //Remove empty tags from 















?>
