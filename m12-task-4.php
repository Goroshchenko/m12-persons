<?php

function getGenderDescription($example_persons_array){

    $males = array_filter($example_persons_array, function ($value) {
        return getGenderFromName($value['fullname']) === 1;
    });  
    $females = array_filter($example_persons_array, function ($value) {
        return getGenderFromName($value['fullname']) === -1;
    });  
    $unknown = array_filter($example_persons_array, function ($value) {
        return getGenderFromName($value['fullname']) === 0;
    });    

$malesPercentage = round((count($males)/count($example_persons_array))*100);
$femalesPercentage = round((count($females)/count($example_persons_array))*100);
$unknownPercentage = round((count($unknown)/count($example_persons_array))*100);

return  "
Гендерный состав аудитории:
--------------------------------
Мужчины - $malesPercentage %
Женщины - $femalesPercentage %
Не удалось определить - $unknownPercentage %";
}
?>