<?php include 'connection.php';
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $select = "SELECT * FROM `eee`";
    $result = $con->query($select);
    $row = $result->fetch_assoc();
    echo $id;
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
        <form action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

            <div class="form-row flexer">
                <div class="col-md-5">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" name="fname"
                        placeholder="Enter Your Firstname" value="<?php echo $row["fname"]?>" required>
                </div>
                <div class="col-md-5">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" name="lname"
                        placeholder="Enter Your Lastname" value="<?php echo $row["lname"];?>" required>
                </div>
            </div>
            <div class="form-row flexer">
                <div class="col-md-3">
                    <label for="birthdate">Date of Birth:</label>
                    <input class="form-control gender--box" type="date" id="dob" name="dob" value="<?php echo $row["dob"]?>" required>
                </div>
                <div class="col-md-3">
                    <label for="exampleFormControlSelect1">Gender</label>
                    <select class="form-control gender--box" id="exampleFormControlSelect1" name="gender" value="<?php echo $row["gender"];?>" required>
                        <option value="Choose">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="age">Age</label>
                    <input class="form-control gender--box" type="number" name="age" min="14" max="30" value="<?php echo $row["age"];?>" required>
                </div>
            </div>

            <div class="form-row flexer">
                <div class="col-md-5">
                    <label for="validationDefault01">College Name (Optional)</label>
                    <input type="text" class="form-control" id="validationDefault01" name="colname"
                        placeholder="Your College Name" value="<?php echo $row["colname"];?>">
                </div>
                <div class="col-md-5">
                    <label for="validationDefault02">College Address (Optional)</label>
                    <input type="text" class="form-control" id="validationDefault02" name="coladdress"
                        placeholder="Your College Address" value="<?php echo $row["coladdress"];?>">
                </div>
            </div>
            <div class="flexer">
                <div class="col-md-5">
                    <label for="city">City</label><span
                        style="color: red !important; display: inline; float: none;">*</span>
                    <input type="text" class="form-control" id="validationDefault02" name="city"
                        placeholder="Your City Name" value="<?php echo $row["city"];?>">
                </div>
                <div class="col-md-5">
                    <label for="number">Phone No.</label><span
                        style="color: red !important; display: inline; float: none;">*</span>
                    <input type="number" class="form-control" id="validationDefault02" name="number"
                        placeholder="Your Moblie number" value="<?php echo $row["number"];?>">
                </div>
            </div>

            <div class="form-row flexer">
                <div class="col-md-5">
                    <label for="validationDefault01">Father's name</label>
                    <input type="text" class="form-control" id="validationDefault01" name="dad"
                        placeholder="Enter Your Father's Name" value="<?php echo $row["dad"];?>" required>
                </div>
                <div class="col-md-5">
                    <label for="validationDefault02">Mother's name</label>
                    <input type="text" class="form-control" id="validationDefault02" name="mom"
                        placeholder="Enter Your Mother's Name"  value="<?php echo $row["mom"];?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
                <button type="submit" value="Update" name="update" class="btn--submit">Update</button>
            </div>
        </form>

    </div>
    <!-- <form action="payment.php" method="post">
        <label for="fname">First name</label>
        <input type="text" for="fname" name="fname">
        <label for="number">No:</label>
        <input type="text" for="number" name="number">
        <input type="submit" name="submit" value="Submit">
    </form> -->
</body>

</html>