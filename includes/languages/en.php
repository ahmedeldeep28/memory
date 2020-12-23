<?php
function tr($sentence){
    static $language = array(
        "status" => "الحالة",
        "new" => "جديدة"
    );
    return $language[$sentence];
}