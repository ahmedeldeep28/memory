<?php

function EnglishDate($dbDate){
    $date = $dbDate;
    $date = explode("-", $date);
    $day = $date[2];
    $timestamp = mktime(0, 0, 0, $date[1], 1);
    $month = date('M', $timestamp );
    $year = $date[0];
    $newDate = $month." ".$day.", ".$year;
    return $newDate;
}

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}