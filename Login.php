<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TasteManhatta</title>

    <!-- add icon link -->
    <link rel = "icon" href ="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="login">
    <div class="wrapper">
        <div class="form-login">
            <h2>Login</h2>
            <form action="Login_action.php" id="form" method = "POST" onsubmit="return validateInputs()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input id="email" type="email" placeholder="Enter your e-mail address" name="email">
                    <label>E-mail</label>
                    <div class="error"></div>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input id="password" type="password" placeholder="Enter your password" autocomplete="off" name="password">
                    <label>Password</label>
                    <div class="error"></div>
                </div>
                <div class="remember-forgot">
                    <label class="check"><input type="checkbox"></label>
                    <label class="rem">Remember Me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="Sign-Up.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>



    <!-- Custom Script -->
    <script src="js/ScriptLog.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>