<?php
$pageType = "data";
include('../ini.php'); 

$refresh = .3;
$url = "/diary/todo";
//pre_r($_POST);
if(isset($_POST["todo_add"])){
    //pre_r($_POST);
    $todoContent = strip_tags($_POST["todo_content"]);
    $todoComment = strip_tags($_POST["todo_comment"]) ?? "empty";
    $todoTime = strip_tags($_POST["todo_time"]);

    if(!empty($todoContent) && !empty($todoTime)){
        $stmt = $db->prepare("SELECT * FROM todo WHERE todoContent = '$todoContent'");
        $stmt->execute();
        $isExist = $stmt->rowCount();
        if($isExist){
            echo '<h2 style="color:red;">This Mission Is Already Exsit<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("INSERT INTO todo(todoContent, todoComment, todoTime, addDate) VALUES (:todoContent, :todoComment, :todoTime, :addDate)");
            $stmt->execute(array(
                'todoContent' => $todoContent,
                'todoComment' => $todoComment,
                'todoTime' => $todoTime,
                'addDate' => date("Y-m-d")
            ));
            echo '<h2 style="color:green;">One Mission Added<h2>';
            header("refresh: $refresh; url = $url");
            
        }
    }
}else{
    //pre_r($_POST);
    $todoId = $_POST["id"];
    if(isset($_POST["edel"])){
        $do = $_POST["edel"];
        if($do == "edit"){
            
            $newTodoContent = strip_tags($_POST["edt_todo_content"]);
            $newTodoComment = strip_tags($_POST["edt_todo_comment"]);
            $newTodoTime = strip_tags($_POST["edt_todo_time"]);
            

            $stmt = $db->prepare("UPDATE todo SET todoContent = '$newTodoContent', todoComment = '$newTodoComment' ,todoTime = '$newTodoTime', isEdited = 1 WHERE id = '$todoId'");
            $stmt->execute();

            echo '<h2 style="color:green;">One Task Is Edited<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("DELETE FROM todo WHERE id = '$todoId'");
            $stmt->execute();
            echo '<h2 style="color:green;">One Task Is Deleted<h2>';
            header("refresh: $refresh; url = $url");
        }

    }elseif(isset($_POST["doing"])){
        
        $isDoing = $_POST["doing"];
        if($isDoing){
            $stmt = $db->prepare("UPDATE todo SET isDoing = 0 WHERE id = '$todoId'");
            $stmt->execute();
            echo '<h2 style="color:green;">One Task Is Unset To Undo<h2>';
            header("refresh: $refresh; url = $url");
        }else{
            $stmt = $db->prepare("UPDATE todo SET isDoing = 1 WHERE id = '$todoId'");
            $stmt->execute();
            echo '<h2 style="color:green;">One Task Is Set To Doing<h2>';
            header("refresh: $refresh; url = $url");
        }
        
        
    }
}