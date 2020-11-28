<?php
$counter=0;
function valuesAreIdentical($v1, $v2): bool {
    $type1 = gettype($v1);
    $type2 = gettype($v2);

    if($type1 !== $type2){
        return false;
    }

    switch(true){
        case ($type1==='boolean' || $type1==='integer' || $type1==='double' || $type1==='string'):
            if($v1 !== $v2){
                return false;
            }

            break;

        case ($type1==='array'):
            $bool = arraysAreIdentical($v1, $v2);
            if($bool===false){
                return false;
            }
            break;
        case 'object':
            $bool = objectsAreIdentical($v1,$v2);
            if($bool===false){
                return false;
            }
            break;


    }

    return true;
}
