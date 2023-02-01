<?php
function getGenderFromName($full_name){
    $partsFromFullname = getPartsFromFullname($full_name);
    $mark = 0;
    $checkPatronymic = substr($partsFromFullname['patronymic'], -6);
    $checkName = substr($partsFromFullname['name'], -2);
    $checkSurname= substr($partsFromFullname['patronymic'], -4);
    if ($checkPatronymic === 'вна') {
        $mark -= 1;
    }
    elseif (substr($checkPatronymic, -4)=== 'ич'){
        $mark += 1;
    }
    if ($checkName === 'а') {
        $mark -= 1;
    }
    elseif ($checkName === 'й' || $checkName === 'н'){
        $mark += 1;
    } 
    if ($checkSurname === 'ва') {
        $mark -= 1;
    }
    elseif (substr($checkSurname, -2)=== 'в'){
        $mark += 1;
    }
    if ($mark > 0) {              
        return 1;
    }
    elseif ($mark < 0) {             
        return -1;
    } else {              
        return 0;
    }
}
?>