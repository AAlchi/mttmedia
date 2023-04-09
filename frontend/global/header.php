<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: http://localhost/mttmedia/frontend/out/signin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="width: 100%; background-color: white; position: sticky; top: 0;">
        <h2>MTT MEDIA</h2>
        <div class="other" onClick="startHeader()">
            <div></div>
            <div></div>
            <div></div>
        </div>
</header>


<br></br>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: lightgray;
    }

    .other > div {
        width: 50px;
        height: 10px;
        border: 1px solid black;
        border-radius: 10px;
    }

    header {
        display: flex;
        width: 100%;
        flex-direction: row;
        justify-content: space-between;
        padding-top: 15px;
        padding-bottom: 10px;
    }

    header > h2 {
        margin-left: 2%;
    }

    .other {
        margin-right: 2%;
        cursor: pointer;
        display: none;
    }

    @media (max-width: 650px) {
        .other {
            display: block;
        }
    }
</style>
</body>
</html>