<?php
    
    /*session_start();
    if(isset($_SESSION["userId"])){
        $id = $_SESSION["userId"];
    }*/
    
    if($pageType == "root"){
        include('includes/scripts/database_connect.php'); 
        include('includes/functions/functions.php'); 
        include('includes/languages/en.php');
    }elseif($pageType == "data"){
        include('../database_connect.php'); 
        include('../../functions/functions.php');
        include('../../languages/en.php');
    }
