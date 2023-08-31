<?php include "connection.php";
if(isset($_GET["id"]) && isset($_POST["delete"])){
    $id = $_GET["id"];
    $delete = "DELETE FROM `eee` WHERE `id` = $id";
    $result = $con->query($delete);
    if($result){
        header("Location:table.php");
    }
}

?>