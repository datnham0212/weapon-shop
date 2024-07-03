<?php
    if(isset($_POST['username']) && isset($_POST['password'])){

        $account = $_POST['username'];
        $password = $_POST['password'];

        if(empty($account)){
            header("Location: index.php?error=please enter username!");
            exit();
        }
        else if(empty($password)){
            header("Location: index.php?error=please enter password!");
            exit();
        }
        
    }
    else{
        header("Location: index.php");
        exit();
    }
?> <!-- thanks to Coding with Elias -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="stylesheet" href="homeStyles.css"> <!-- Link to your CSS file -->
    <script defer src="script.js"></script> <!-- Link to your JavaScript file -->
</head>
<body>
    <button class = "dark-light-button" onclick= "toggleDarkMode()">Light Mode</button>
    <header>
        <h1>Welcome to the weapon store! The best place to purchase and sell weapons</h1>
    </header>

    

    <div class = "sidebar">
        <!-- <h3>Products</h3> -->
        <a href="#" class="sidebar-options">Pistols</a>
        <a href="#" class="sidebar-options">Rifles</a>
        <a href="#" class="sidebar-options">Shotguns</a>
        <a href="#" class="sidebar-options">Sub-Machines</a>
        <a href="#" class="sidebar-options">Melees</a>
        <a href="#" class="sidebar-options">Explosives</a>
        <a href="#" class="sidebar-options">Body armor</a>
        <a href="#" class="sidebar-options">Other accessories</a>
    </div>


    <footer>
        <p>&copy; 2023 - 2024 All rights reserved</p>
    </footer>

    <script>
        function toggleDarkMode(){
            var element = document.body;
            element.classList.toggle("darkMode");

            var btn = document.querySelector(".dark-light-button");
            if (element.classList.contains("darkMode"))
                btn.innerHTML = 'Dark Mode';
            else
            btn.innerHTML = 'Light Mode';
        }
    </script>
</body>
</html>
