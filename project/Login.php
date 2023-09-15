<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $email = $_POST['email'];
        $password = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data";

    $conn = mysqli_connect($servername, $username, $password, $database);


    $sql = "INSERT INTO `data` (`email`, `password`) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $sql);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="last.css">
    <link rel="stylesheet" href="last.js">
    <link rel="stylesheet" href="last.php">
</head>

<body>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">

                <form action="dd.php" class="login" method="post">



                    <!-- <div class="felid">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div> -->




                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="Email Address" required>
                    </div>



                    <!-- <div class="field">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div> -->



                    <div class="field">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>

                <form action="dd.php" class="signup" method="post">
                    <div class="field">
                        <input type="text" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>