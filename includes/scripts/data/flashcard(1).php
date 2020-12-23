<?php
$pageType = "data";
include('../ini.php'); 

$refresh = .3;
$url = "/diary/flashCard";

if(isset($_POST["card_add"])){
    $cardFront = strip_tags($_POST["card_front"]);
    $cardBack = strip_tags($_POST["card_back"]);
    $cardGrade = isset($_POST["card_grade"]) == "on" ? "favorite" : "normal";
    $addDate = date("Y-m-d");
    if(!empty($cardFront) && !empty($cardBack)){
        $stmt = $db->prepare("SELECT * FROM flashcard WHERE cardFront = '$cardFront' AND cardBack = '$cardBack'");
        $stmt->execute();
        $isExist = $stmt->rowCount();
        if($isExist){
            echo '<h2 style="color:red;">This Card Is Already Exsit<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("INSERT INTO flashcard(cardFront, cardBack, cardGrade, addDate) VALUES (:cardFront, :cardBack, :cardGrade, :addDate)");
            $stmt->execute(array(
                'cardFront' => $cardFront,
                'cardBack' => $cardBack,
                'cardGrade' => $cardGrade,
                'addDate' => $addDate 
            ));
            echo '<h2 style="color:green;">One Card Added<h2>';
            header("refresh: $refresh; url = $url");
        }
    }
}else{
    $cardId = $_POST["id"]; 
    $addDate = date("Y-m-d");
    if(isset($_POST["stared"])){
        $stared = $_POST["stared"];
        if($stared == "add"){
            $stmt = $db->prepare("UPDATE flashcard SET cardGrade = 'favorite', addDate = '$addDate' WHERE id = '$cardId'");
            $stmt->execute();

            echo '<h2 style="color:green;">One Card Updated To Favorite<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("UPDATE flashcard SET cardGrade = 'normal', addDate = '$addDate' WHERE id = '$cardId'");
            $stmt->execute();

            echo '<h2 style="color:green;">One Card Unset To Normal Card<h2>';
            header("refresh: $refresh; url = $url");
        }
    }elseif(isset($_POST["delete"])){
        $stmt = $db->prepare("DELETE FROM flashcard WHERE id = '$cardId'");
        $stmt->execute();
        echo '<h2 style="color:green;">One Card Is Deleted<h2>';
        header("refresh: $refresh; url = $url");
    }
}