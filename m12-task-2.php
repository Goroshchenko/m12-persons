<?php
function getShortName($full_name){
    $partsFromFullname = getPartsFromFullname($full_name);
    $shortened_surname = substr($partsFromFullname['surname'], 0, 2).''.'.';
    $shortName = $partsFromFullname['name'] . ' ' . $shortened_surname;    
    return $shortName;
}
?>