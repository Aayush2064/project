<?php include 'connection.php';
if(isset($_POST["update"]) && isset($_GET["id"])){
    $id = $_GET["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $colname = $_POST["colname"];
    $coladdress = $_POST["coladdress"];
    $city = $_POST["city"];
    $number = $_POST["number"];
    $dad = $_POST["dad"];
    $mom = $_POST["mom"];
    $update = "UPDATE `eee` SET `fname`='$fname',`lname`='$lname',`dob`='$dob',`gender`='$gender',`age`='$age',`colname`='$colname',`coladdress`='$coladdress',`city`='$city',`number`='$number',`dad`='$dad',`mom`='$mom' WHERE `id` = '$id'";
    $sql = $con->query($update);
    if($sql == TRUE){
        header("Location:table.php?Your data has been updated");
    }else{
        header("Location:table.php?Failed to delete data");
    }
}else{
    echo "Error!";
}

?>