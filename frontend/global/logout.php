<?php

session_start();
session_unset();
session_destroy();

header("location: http://localhost/mttmedia/frontend/out/signin.php");
exit();