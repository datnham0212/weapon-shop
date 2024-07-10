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
    <link rel="stylesheet" href="items.css">
    <script defer src="script.js"></script> <!-- Link to your JavaScript file -->
</head>
<body>
    <button class = "dark-light-button" onclick= "toggleDarkMode()">Dark Mode</button>
    <header>
         <div class = "header-top">
            <!-- <h1>Welcome to the weapon store! The best place to purchase and sell weapons</h1> -->
            <h2>Account: <?php echo $account ?> </h2>
            <a href="index.php" class="logout">Logout</a>
         </div>

         <div class = "header-bottom">
            
        </div>
    </header>

    <nav>
        <div class = "navbar">
        <!-- <h3>Products</h3> -->
            <button class="navbar-options" onclick="switchNavOp(event, this)" id="defaultOpen">Pistols</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Rifles</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Shotguns</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Sub-Machines</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Knives</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Swords</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Explosives</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Body armors</button>
            <button class="navbar-options" onclick="switchNavOp(event, this)">Miscellaneous</button>
        </div>
    </nav>

    <body>
        <main>
            <div class = "sidebar half">

            </div>

            <div class = "items-container half">
            <section id = "Pistols" class = "nav-options-section">
                <table>
                    <tr>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    <td><div id = "testbox1"></div></td>
                    </tr>
                </table>
            </section>

            <section id = "Rifles" class = "nav-options-section">
            <table>
                    <tr>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    <td><div id = "testbox2"></div></td>
                    </tr>
                </table>
            </section>

            <section id = "Shotguns" class = "nav-options-section">
            <table>
                    <tr>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    <td><div id = "testbox3"></div></td>
                    </tr>
                </table>
            </section>

            <section id = "Sub-Machines" class = "nav-options-section">
            <table>
                    <tr>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    </tr>

                    <tr>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    <td><div id = "testbox4"></div></td>
                    </tr>
                </table>
            </section>

            <section id = "Knives" class = "nav-options-section">
                <h2>Older Stuff</h2>
            </section>

            <section id = "Swords" class = "nav-options-section">
                <h2>Even Older Stuff</h2>
            </section>

            <section id = "Explosives" class = "nav-options-section">
                <h2>Even Even Older Stuff</h2>
            </section>

            <section id = "Body armors" class = "nav-options-section">
                <h2>Even Older Stuff</h2>
            </section>

            <section id = "Miscellaneous" class = "nav-options-section">
                <h2>Even Even Older Stuff</h2>
            </section>
            </div>
        </main>
    </body>

    <footer>
        <p>&copy; 2023 - 2024 All rights reserved</p>
    </footer>

    <script>
        function toggleDarkMode(){
            var element = document.body;
            element.classList.toggle("darkMode");

            var btn = document.querySelector(".dark-light-button");
            if (element.classList.contains("darkMode"))
                btn.innerHTML = 'Light Mode';
            else
            btn.innerHTML = 'Dark Mode';
        }

        function switchNavOp(evt, option){
            var current = option.textContent;
            var i, navsection, navlink; 
            
            navsection = document.getElementsByClassName("nav-options-section");

            for(i = 0; i < navsection.length; i++){
                navsection[i].style.display = 'none';
            }
            
            navlink = document.getElementsByClassName("navbar-options");

            for(i = 0; i < navlink.length; i++){
                navlink[i].className = navlink[i].className.replace(" active", "");
            }

            document.getElementById(current).style.display = 'block';
            evt.currentTarget.className += ' active';
        }

        document.getElementById("defaultOpen").click();

    </script>
</body>
</html>
