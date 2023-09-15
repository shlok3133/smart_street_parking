<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "datas";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO `datas` (`email`, `password`) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
?>