<?php
//task-1

include 'm12-example.php';
include 'm12-task-1.php';
include 'm12-task-2.php';
include 'm12-task-3.php';
include 'm12-task-4.php';

$full_name = $example_persons_array[1]['fullname'];
$resultArray = getPartsFromFullname($full_name);
var_dump($resultArray);

$surname = $resultArray["surname"];
$name = $resultArray['name'];
$patronymic = $resultArray['patronymic'];

var_dump(getFullnameFromParts($surname, $name, $patronymic));

// //task-2

$full_name = $example_persons_array[2]['fullname'];
$shortName = getShortName($full_name);
echo "\n$shortName\n";

// //task-3

$full_name = $example_persons_array[3]['fullname'];
echo getGenderFromName($full_name); 

//task-4
echo getGenderDescription($example_persons_array);
?>