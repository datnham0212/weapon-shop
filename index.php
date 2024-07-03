<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="loginStyles.css"> <!-- Link to your CSS file -->
    <script defer src="script.js"></script> <!-- Link to your JavaScript file -->
</head>
<body>

    <form class="loginForm" action="home.php" method="post">
        <h1>Login</h1>
        <?php if(isset($_GET['error'])){ ?>
            <p class = "error"><?php echo $_GET['error']; ?></p>  <!-- thanks to Coding with Elias -->
        <?php } ?>
        <input class = "usernameInput" name = "username" type = "text" placeholder="Enter account">
        <input class = "passwordInput" name = "password" type = "text" placeholder= "Enter password">
        <button class = "loginButton" type = "submit">Login</button>
    </form>

    <footer>
        <p>&copy; 2024 Your Name or Company</p>
    </footer>
</body>
</html>
