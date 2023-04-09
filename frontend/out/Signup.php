<?php
    $error = "";
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "usernameistaken") {
            $error = "Username Taken";
        } else if ($_GET['error'] == "notvalid") {
            $error = "Only letters, numbers, underscores, spaces, and hyphens are allowed.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
      document.getElementById("signup-form").submit();
    }
  </script>
</head>
<body>
    <form action="http://localhost/mttmedia/backend/signup.php" method="POST" id="signup-form" class="main">
        <h1 style="color: black" ><div>Sign Up For <span style="color: green; font-weight: bold">MTT Media</span></div></h1>
        <span style="color: red">Anything with a * is required</span>
        <div class="items">
            <label>Full Name<span style="color: red"> *</span></label>
            <input type="text" name="fullName" required/>

            <label>Username<span style="color: red"> *</span></label>
            <input type="text" name="username" required/>

            <label>Email<span style="color: red"> *</span></label>
            <input type="email" name="email" required/>

            <label>Birthday</label>
            <input type="date" min="1880-01-01" name="birthday" max="2010-12-31">

            <label>Password<span style="color: red"> *</span></label>
            <input type="password" name="password" required/>
            <div class="g-recaptcha" data-sitekey="6LdJHW8lAAAAAENKzGObi9oJ46hoWdW2QFwi7zbJ" data-callback="onSubmit" required></div>


        </div>

        <div class="item2">
            <span id="span"><?php echo $error; ?></span>
            <br></br>
            <button onclick="submitForm()" type="submit" name="submitSignup" disabled>Sign Up</button>
            <h5>Have an account? <a href="http://localhost/mttmedia/frontend/out/signin.php">Sign In</a></h5>
        </div>
    </form>
     <script>
          function onSubmit(token) {
      document.querySelector('button[type="submit"]').disabled = false;
    }
  </script>
    <style>

        .g-recaptcha {
      transform: scale(70%);
      transform-origin: 0 0;
      
    }
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

        @media (max-height: 900px) {
            .main {
                top: 0;
                margin-top: 5%;
                transform: translateX(-50%);
            }
        }
    </style>
</body>
</html>