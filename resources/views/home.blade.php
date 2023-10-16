<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body, h1, p {
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
            margin-left: 20px; /* Added left margin */
        }

        .menu-button {
            background-color: gray;
            color: white;
            padding: 10px;
            cursor: pointer;
            padding-bottom: 30px;
        }

        .side-menu {
            height: 100%;
            width: 0;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            overflow-x: hidden;
            transition: 0.5s;
        }

        .side-menu a {
            padding: 15px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .side-menu a:hover {
            background-color: #ddd;
            color: black;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        img{
            height: 40px;
            padding-left: 90%;
        }

        .logedin-profile{
            border-radius: 20px;
            margin-left: 95%;
            background-color: blue;
            width: 35px;
            height: 35px;
            text-align: center;
        }

        .profile-image{
            padding: 10px;
            margin-top: 30px;
        }

    </style>
</head>
<body>

<div id="side-menu" class="side-menu">
    <a href="#" class="close-button" onclick="closeSideMenu()">&times;</a>
    <a href="">Home</a>
    <a href="chat">AI Chat</a>
    <a href="about">About</a>
    <a href="contact">Contact</a>
</div>

<!-- Menu Button -->
<div class="menu-button" onclick="openSideMenu()">
    &#9776; Menu

    <div class="logedin-profile">
        <strong class="profile-image">D</strong>
    </div>

</div>



<script>
    // Function to open the side menu
    function openSideMenu() {
        document.getElementById("side-menu").style.width = "250px";
    }

    // Function to close the side menu
    function closeSideMenu() {
        document.getElementById("side-menu").style.width = "0";
    }
</script>

</body>
</html>
