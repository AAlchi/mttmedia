<?php

include_once './database.php';

$fullName = $_POST['fullName'];
$username = $_POST['username'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

if (isset($_POST['submitSignup'])) {
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("location: http://localhost/mttmedia/frontend/out/signup.php?error=usernameistaken");
        exit();
    } else {
        $hpassword = password_hash($password, PASSWORD_DEFAULT);

        if (!preg_match('/^[a-zA-Z0-9_ -]+$/', $fullName) || !preg_match('/^[a-zA-Z0-9_ -]+$/', $username) || !preg_match('/^[a-zA-Z0-9_ -]+$/', $password)) {
            header("location: http://localhost/mttmedia/frontend/out/signup.php?error=notvalid");
            exit();
        } else {
            if ($birthday == "" || $birthday == null) {
                $sql = "INSERT INTO users (fullName, username, email, status, publicOrPrivate, password) VALUES ('$fullName', '$username', '$email', 'active', 'public', '$hpassword');";
                $query = mysqli_query($conn, $sql);

            
            } else {
                $sql = "INSERT INTO users (fullName, username, email, birthday, status, publicOrPrivate, password) VALUES ('$fullName', '$username', '$email', '$birthday', 'active', 'public', '$hpassword');";
                $query = mysqli_query($conn, $sql);
            }

            $to = "$email";
            $subject = 'MTT MEDIA';
            $message = "Thank you for signing up for MTT MEDIA $username! We hope to see you soon!";
            $headers = "From: alialchi07@gmail.com\r\n";
            $headers .= "Reply-To: alialchi07@gmail.com\r\n";
            $headers .= "Content-type: text/html\r\n";
                
            mail($to, $subject, $message, $headers);

            header("location: http://localhost/mttmedia/frontend/out/signin.php?error=allSignedUp");
            exit();
        }
    }
} else {
    header("location: http://localhost/mttmedia/frontend/out/signup.php");
    exit();
}