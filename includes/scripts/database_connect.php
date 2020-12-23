<?php
    $dsn = "mysql:host=localhost;dbname=memory";
    $name = "root";
    $password = "";

    try{
        $db = new PDO($dsn, $name, $password);
        
    }
    catch(PDOException $e) {
        echo "Failed ". $e->getMessage();
    }