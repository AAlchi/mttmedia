<?php

include_once './database.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['sign-in'])) {
    

$sql = "SELECT * FROM users WHERE username='$username';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) { 
            session_start();
            $_SESSION['fullName'] = $row['fullName'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['birthday'] = $row['birthday'];
            $_SESSION['status'] = $row['status'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['publicOrPrivate'] = $row['username'];

            header("location: http://localhost/mttmedia/frontend/in/Home.php");
            exit();
        } else {
            header("location: http://localhost/mttmedia/frontend/out/signin.php?error=usernameorpasswordwrong");
            exit();
        }
    }
} else {
    header("location: http://localhost/mttmedia/frontend/out/signin.php?error=usernameorpasswordwrong");
    exit();
}
} else {
     header("location: http://localhost/mttmedia/frontend/out/signin.php");
    exit();
}
