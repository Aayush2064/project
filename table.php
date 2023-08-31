<?php include 'connection.php' ?>
<?php
if (isset($_POST["submit"])) {
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
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
  <?php
  if (isset($_GET["search"])) {
    $search = $_GET["search"];
    $select = "SELECT * FROM `eee`WHERE `number`='$search'";
    $result = $con->query($select);
    $row = $result->fetch_assoc();
    ?>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">College Name</th>
          <th scope="col">College Address</th>
          <th scope="col">City</th>
          <th scope="col">Ph. No</th>
          <th scope="col">Mother's Name</th>
          <th scope="col">Father's Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $row["fname"]; ?>
          </td>
          <td>
            <?php echo $row["lname"]; ?>
          </td>
          <td>
            <?php echo $row["dob"]; ?>
          </td>
          <td>
            <?php echo $row["gender"]; ?>
          </td>
          <td>
            <?php echo $row["age"]; ?>
          </td>
          <td>
            <?php echo $row["colname"]; ?>
          </td>
          <td>
            <?php echo $row["coladdress"]; ?>
          </td>
          <td>
            <?php echo $row["city"]; ?>
          </td>
          <td>
            <?php echo $row["number"]; ?>
          </td>
          <td>
            <?php echo $row["mom"]; ?>
          </td>
          <td>
            <?php echo $row["dad"]; ?>
          </td>
        </tr>
      </tbody>
    </table>
    <?php
  } else {
    echo 'Please type the number of the data to be searched.';
  }
  ?>
  <div class="container">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline" action="table.php?id=<?php if(isset($_GET["search"])){echo $search;} ?>" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.N</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Gender</th>
          <th scope="col">Age</th>
          <th scope="col">College Name</th>
          <th scope="col">College Address</th>
          <th scope="col">City</th>
          <th scope="col">Ph. No</th>
          <th scope="col">Mother's Name</th>
          <th scope="col">Father's Name</th>
        </tr>
      </thead>

      <?php
      $select = "SELECT * FROM `eee`";
      $result = $con->query($select);
      if ($result->num_rows > 0) {
        $sn = 1;
        while ($row = $result->fetch_assoc()) {
          ?>
          <tbody>
            <tr>
              <th scope="row">
                <?php echo $sn; ?>
              </th>
              <td>
                <?php echo $row["fname"]; ?>
              </td>
              <td>
                <?php echo $row["lname"]; ?>
              </td>
              <td>
                <?php echo $row["dob"]; ?>
              </td>
              <td>
                <?php echo $row["gender"]; ?>
              </td>
              <td>
                <?php echo $row["age"]; ?>
              </td>
              <td>
                <?php echo $row["colname"]; ?>
              </td>
              <td>
                <?php echo $row["coladdress"]; ?>
              </td>
              <td>
                <?php echo $row["city"]; ?>
              </td>
              <td>
                <?php echo $row["number"]; ?>
              </td>
              <td>
                <?php echo $row["mom"]; ?>
              </td>
              <td>
                <?php echo $row["dad"]; ?>
              </td>
              <form action="delete.php?id=<?php echo $row["id"] ?>" method="post">
                <td><input type="submit" value="Delete" name="delete" class="btn btn-danger"></td>
              </form>
              <form action="edit.php?id=<?php echo $row["id"] ?>" method="post">
                <td><input type="submit" value="Edit" name="edit" class="btn btn-primary"></td>
              </form>
            </tr>
          </tbody>
          <?php
          $sn++;
        }
      }
      ?>
    </table>
  </div>

</body>

</html>