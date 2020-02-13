<?php

//Some useful PHP Snippets

SORTING Multiple Dimensional array in ASC

function method1($a,$b) 
{
		return ($a["category"] >= $b["category"]) ? -1 : 1;
}
usort($array, "method1");
























?>
