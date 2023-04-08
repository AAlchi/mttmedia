<?php
    $error = "";
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "allSignedUp") {
            $error = "You Are All Signed Up!";
        } else if ($_GET['error'] == "usernameorpasswordwrong") {
            $error = "Wrong Username Or Password!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
    <form action="http://localhost/mttmedia/backend/signin.php" method="POST"  class="main">
        <center><h1 style="color: black; margin-top: -5%; background-color: white; width: 60%; border-radius: 20px; text-align-center; padding: 10px;" ><div>Sign Into <span style="color: green; font-weight: bold">MTT Media</span></div></h1></center>

        <div class="items">
            <label>Username</label>
            <input type="text" name="username" required/>

            <label>Password</label>
            <input type="password" name="password" required/>
        </div>

        <div class="item2">
            <span id="span"><?php echo $error;?></span>
            <br></br>
            <button>Sign In</button>
            <h5>No Account? <a href="http://localhost/mttmedia/frontend/out/signup.php">Sign Up</a></h5>
        </div>
    </form>
    <style>
        body {
            background-color: lightgray;
        }

        .main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            width: 70%;
            max-width: 600px;
        }

        .items {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input {
            width: 90%;
            height: 20px;
            border: none;
            border-bottom: 1px solid black;
            background-color: white;
        }

        button {
            width: 90%;
            height: 40px;
            border: none;
            cursor: pointer;
            background-color: lightgray;
        }

        button:hover {
            opacity: 80%;
        }

        @media (max-height: 530px) {
            .main {
                top: 0;
                margin-top: 5%;
                transform: translateX(-50%);
            }
        }
    </style>
</body>
</html>