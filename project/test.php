<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databas = "data";

    $conn = mysqli_connect($servername, $username, $password, $databas);

    if (!$conn) {
        die("Soorry we failedd to connect: " . mysqli_connect_error());
    }
    else{
        echo "connection was successful";
    }

    $sql = "INSERT INTO `data` (`email`, `password`) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "the data register";}
    else{
        echo "the recored not registered";
    }

    ?>