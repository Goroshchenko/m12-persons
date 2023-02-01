<?php
function getPartsFromFullname($full_name) {
    $partsFromFullname = explode(' ', $full_name);
    $keys = ['surname', 'name', 'patronymic'];
    $resultArray = array_combine($keys, $partsFromFullname);    
    return $resultArray;
}

function getFullnameFromParts($surname, $name, $patronymic) {

$full_name_from_parts = $surname;
$full_name_from_parts .= ' ';
$full_name_from_parts .= $name;
$full_name_from_parts .= ' ';
$full_name_from_parts .= $patronymic;
var_dump($full_name_from_parts);
return $full_name_from_parts;
}

?>