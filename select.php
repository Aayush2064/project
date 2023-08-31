  $fname = $_POST["fname"];
//   $lname = $_POST["lname"];
//   $dob = $_POST["dob"];
//   $gender = $_POST["gender"];
//   $age = $_POST["age"];
//   $colname = $_POST["colname"];
//   $coladdress = $_POST["coladdress"];
//   $city = $_POST["city"];
  $number = $_POST["number"];
//   $dad = $_POST["dad"];
//   $mom = $_POST["mom"];
$select = "SELECT * FROM `eee` WHERE `id` = 3";
$sql = $con->query($select);
if($sql->num_rows > 0){ 
    $row = $sql->fetch_assoc();
}
?>
