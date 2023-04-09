<?php

include_once '../global/header.php';


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
    <div class="mains">
    <div id="sideBar" class="sideBar">
        <h2>Options</h2>
        <h4>Navigate</h4>
        <ul>
            <li onClick="home()">Home</li>
            <li onClick="account()">Account</li>
            <li onClick="friends()">Friends</li>
            <li onClick="yourPage()">Your Page</li>
            <li onClick="logout()">Log Out</li>
        </ul>
        <h4>Friends</h4>
        <ul>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>
            <li>Option</li>

        </ul>
   </div>
   
    <div class="main">
        <form class="first">
            <h2>What would you like to share, <?php echo $_SESSION['username'];?>?</h2>
            <input type="file" name="file"/>
            <input type="text" name="input"/>
            <button type="submit" name="submit">Post</button>
        </form>
        <div class="posts">
            <div class="post">
                <div class="peopleDatePerson">
                    <div class="by">Ron Dwaight</div>
                    <div class="date">12-17-2023</div>
                </div>
                <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png" alt="image"/>
                <div class="description">This is something I did</div>
                <button>Like - 0</button>
                <button>Dislike - 1</button>
            </div>
            <div class="post">
                <div class="by">Ron Dwaight</div>
                <div class="date">12-17-2023</div>
                <img class="img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png" alt="image"/>
                <div class="description">This is something I did</div>
                <button>Like - 4</button>
                <button>Dislike - 0</button>
            </div>
        </div>
    </div>
    </div>
    <script>
        function startHeader() {
            let header = document.getElementById("sideBar");

            if (header.style.display == "flex") {
                header.style.display = "none";
            } else {
                header.style.display = "flex";
            }
        }

        function home() {
            window.location.href = "http://localhost/mttmedia/frontend/in/Home.php";
        }
        function account() {
            window.location.href = "http://localhost/mttmedia/frontend/in/account.php";
        }
        function yourPage() {
            window.location.href = "http://localhost/mttmedia/frontend/in/yourPage.php";
        }
        function friends() {
            window.location.href = "http://localhost/mttmedia/frontend/in/friends.php";
        }
        function logout() {
            window.location.href = "http://localhost/mttmedia/frontend/global/logout.php";
        }
    </script>
    <style>
        body {
            overflow-x: hidden;
        }
        .mains {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .peopleDatePerson {
            display: flex;
            width: 100%;
            justify-content: space-between;
        }

        .main {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .sideBar {
            width: 250px;
            background-color: white;
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
            height: 80vh;
            overflow-x: hidden;
            overflow-y: hidden;
            position: sticky;
            top: 10%;
        }
        .sideBar:hover {
            overflow-y: scroll;
            cursor: ns-resize;
        }
        .sideBar > ul {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        li {
            border: 1px solid black;
            width: 80%;
            list-style-type: none;
            padding: 10px;
            cursor: pointer;
        }
        .first {
            width: 50vw;
            height: 250px;
            background-color: white;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            padding: 30px;
        }

        .first > input, .first > button {
            width: 80%;
            height: 40px;
        }

        button {
            border: none;
            background-color: lightgray;
            cursor: pointer;
        }

        button:hover {
            opacity: 80%;
        }

        .posts {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .post {
            background-color: white;
            padding: 30px;
            width: 50vw;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .post > button {
            height: 40px;
            background-color: white;
            border: 1px solid black;
        }

        .post > button:hover {
            color: gray;
        }

        @media (max-width: 650px) {
            body {
                overflow-x: hidden;
            }
            .mains {
                flex-direction: column;
                align-items: center;
                width: 100%;
                overflow-x: hidden;
            }

            .sideBar {
                position: absolute;
                width: 100%;
                display: none;
            }

            .post {
                width: 80vw;
            }

            .first {
                width: 80vw;
            }
        }
    </style>
</body>
</html>

