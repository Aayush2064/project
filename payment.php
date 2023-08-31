<?php include 'connection.php'?>
<?php
if(isset($_POST["submit"]) && isset($_POST["id"])){
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
    $ins = "INSERT INTO `eee`(`fname`, `lname`, `dob`, `gender`, `age`, `colname`, `coladdress`, `city`, `number`, `dad`, `mom`) VALUES ('$fname','$lname','$dob','$gender','$age','$colname','$coladdress','$city','$number','$dad','$mom')";
    $result  = $con->query($ins);
    $id=$_POST['id'];
    $select = "SELECT * FROM `eee` WHERE `id`='$id'";
    $sql = $con->query($select);
    $row = $sql->fetch_assoc();
    $id = $row["id"];
 
}else{
 echo "Error";
}

if(isset($_POST["lname"])){
    
}else{
    echo "false";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="main--flexer">
            <div class="main--logo">
                <img src="img/EEEimg.png" alt="MAIN_LOGO">
            </div>
            <div class="header--title">
                <h2 class="gradient-text">EEE INNOVATION GHAR</h2>
                <h2 class="gradient-text">ADMISSON FORM</h2>
            </div>
        </div>
    </header>
    <div class="my-container border-gradient border-gradient-green">
        <form action="receipt.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

            <div class="form-row flexer">
                <div class="col-md-3">
                    <h5>Name:</h5>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="validationDefault02" name="fname" value="<?php echo $fname;?>" required>
                    <input type="text" class="form-control" id="validationDefault02" name="lname" value="<?php echo $lname;?>" required>

                </div>
            </div>
            <div class="form-row flexer">
                <div class="col-md-5">
                    <label for="birthdate">Date of Birth:</label>
                    <input class="form-control gender--box" type="date" id="dob" name="dob" value="<?php echo $dob;?>" required>
                </div>
                <div class="col-md-4">
                    <label for="number">Phone No.</label><span
                        style="color: red !important; display: inline; float: none;">*</span>
                    <input type="number" class="form-control" id="validationDefault02" name="number" value="<?php echo $number;?>">
                </div>
            </div>
            <div class="flexer1">
                <h6>Total Payment: NRS.15,000</h6>
            </div>
            <div class="form-row flexer payment--arranger">
                <div class="col">
                    <h5>Your Payment:</h5>
                </div>
                <div class="col-md-5">
                    <input type="number" class="form-control" id="validationDefault02" name="payment" min="5000" max="15000" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" value="pay" name="pay" class="btn--submit">Pay</button>
            </div>
        </form>

    </div>
</body>

</html>