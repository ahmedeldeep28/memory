<?php
$pageType = "data";
include('../ini.php'); 

$refresh = .3;
$url = "/diary/tiemline";

if(isset($_POST["line_add"])){
    $lineTitle = strip_tags($_POST["line_title"]);
    $lineParagraph = strip_tags($_POST["line_paragraph"]);
    if(!empty($lineTitle) && !empty($lineParagraph)){
        $stmt = $db->prepare("SELECT * FROM timeline WHERE lineTitle = '$lineTitle' AND lineParagraph = '$lineParagraph'");
        $stmt->execute();
        $isExist = $stmt->rowCount();

        //$lineDisplay = ()
        $stmt = $db->prepare("SELECT lineDisplay FROM timeline ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        
        $lineDisplayArr = $stmt->fetch();

        $lineDisplayOne = $lineDisplayArr["lineDisplay"] ?? "right";
        $lineDisplay = $lineDisplayOne == "left" ? "right" : "left";

        if($isExist){
            echo '<h2 style="color:red;">This Line Card Is Already Exsit<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("INSERT INTO timeline(lineTitle, lineParagraph, lineDisplay) VALUES (:lineTitle, :lineParagraph, :lineDisplay)");
            $stmt->execute(array(
                'lineTitle' => $lineTitle,
                'lineParagraph' => $lineParagraph,
                'lineDisplay' => $lineDisplay
            ));
            echo '<h2 style="color:green;">One Line Card Added<h2>';
            header("refresh: $refresh; url = $url");
            
        }
    }
}elseif(isset($_POST["event"])){
    //pre_r($_POST);
    $do = $_POST["event"];
    $id = $_POST["cardId"];
    if($do == "dlt"){

        $stmt = $db->prepare("DELETE FROM timeline WHERE id = '$id'");
        $stmt->execute();
        echo '<h2 style="color:green;">One Line Card Deleted<h2>';
        header("refresh: $refresh; url = $url");

    }elseif($do == "fav"){

        $stmt = $db->prepare("UPDATE timeline SET isFavorite = 1 WHERE id = '$id'");
        $stmt->execute();
        echo '<h2 style="color:green;">One Line Card Is Added To Favorite<h2>';
        header("refresh: $refresh; url = $url");

    }elseif($do == "nrml"){

        $stmt = $db->prepare("UPDATE timeline SET isFavorite = 0 WHERE id = '$id'");
        $stmt->execute();
        echo '<h2 style="color:green;">One Line Card Is Unset To Normal<h2>';
        header("refresh: $refresh; url = $url");

    }elseif($do == "edt"){
        $newTitle = $_POST["edit_line_title"];
        $newPar = $_POST["edit_line_paragraph"];
        $stmt = $db->prepare("UPDATE timeline SET lineTitle = '$newTitle', lineParagraph = '$newPar', isEdited = 1 WHERE id = '$id'");
        $stmt->execute();
        echo '<h2 style="color:green;">One Line Card Is Edited<h2>';
        header("refresh: $refresh; url = $url");

    }
}