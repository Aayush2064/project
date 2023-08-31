<?php include 'connection.php';
if(isset($_POST['pay'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $number = $_POST["number"];
    $payment = $_POST["payment"];
    $ins = "INSERT INTO `receipt`(`fname`, `lname`, `dob`, `number`, `payment`) VALUES ('$fname','$lname','$dob','$number','$payment')";
    $sql = $con->query($ins);
}
// if(isset($_GET["id"])){
//     $id = $_GET["id"];
//     $select = "SELECT * FROM `eee` WHERE `id`='$id'";
//     $sql = $con->query($select);
//     $row = $sql->fetch_assoc();

// }
if(isset($_POST["payment"])){
    $payment = $_POST["payment"];
}else{
    echo "false";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
        <p>Name:<?php echo " " . $fname . " " . $lname;?></p>
        <p>Date of birth:<?php echo " " . $dob;?></p>
        <p>Phone Number:<?php echo " " . $number; ?></p>
        <p>Total Payment: Rs.15000</p>
        <p>Money Paid: <?php echo " " . $payment; ?></p>
        <p>Money left to pay: <?php echo 15000-$payment;?></p>
    </div>
</body>
</html>