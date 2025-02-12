<?php

session_start();
include('db_connect.php');
$msg = false;
if(isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "SELECT * FROM user WHERE user = '".$user_name."' AND password = '".$user_password."' LIMIT 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)==1) {
        header('Location: welcome.php');
    } else {
        $msg = "Incorrect Password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prabhat Singh">
    <meta name="description" content="Music website">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Music Website Login</title>
</head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter UserName" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Password" required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="1_check" id="check">
                        <span>Remember Me</span>
                    </div>
                    <p>Don't have a account yet? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="login_png.jpg" alt="login_png">
            <!-- <h3> Incorrect Password</h3> -->
            <?php
                echo('<h3>'.$msg.'</h3>'); 
            ?>
        </div>
    </header>
</body>
</html>