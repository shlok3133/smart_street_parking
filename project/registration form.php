<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $vehical = $_POST['vehical'];
        $lplate = $_POST['lplate'];
        $hours = $_POST['hours'];
        $upi = $_POST['upi'];
        $location = $_POST['location'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "INSERT INTO `het1` (`vehical`, `lplate`, `hours`, `upi`, `location`) VALUES ('$vehical', '$lplate', '$hours', '$upi', '$location')";
    $result = mysqli_query($conn, $sql);

}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Smart Vehicle Parking Form</title>
    <link rel="stylesheet" type="text/css" href="het1.css">
</head>

<body>
    <div class="container">
        <h1>Smart Vehicle Parking Reservation</h1>
        <form action="het1.php" method="post">

        <div class="felid">
    <label for="exampleInputEmail1" class="form-label">Vehical</label>
    <input type="text" name="vehical" class="form-control" id="vehical" aria-describedby="emailHelp">
  </div>

  <div class="felid">
    <label for="exampleInputEmail1" class="form-label">Number Plate</label>
    <input type="text" name="lplate" class="lplate" id="lplate" aria-describedby="emailHelp">
  </div>

  <div class="felid">
    <label for="exampleInputEmail" class="form-label">Parking duration</label>
    <input type="text" name="hours" class="form-control" id="hours" aria-describedby="emailHelp">
  </div>


                <div class="radio-group">
                <label for="upi">upi</label>    
                <input type="text" name="upi" value="" id="upi">
                    
                </div>

            <div class="form-group">
                <label for="parking-location">Parking Location:</label>
                <input type="text" name="location" value="" id="location">
            </div>

            <div class="form-group">
                <button type="submit">Reserve Parking</button>
            </div>
        </form>
    </div>
</body>

</html>