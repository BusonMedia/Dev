<?php

use App\Models\Languages;
$category=Languages::all();

$i=0;
$array=[];
foreach ($category as $language)
{
    $array[$category[$i]->idstring]=$category[$i]->ContentTR;
    $i++;
}

return $array;
