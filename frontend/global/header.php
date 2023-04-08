<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: http://localhost/mttmedia/frontend/out/signin.php");
    exit();
}