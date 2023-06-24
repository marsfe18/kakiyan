<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up | TasteManhatta</title>

    <!-- add icon link -->
    <link rel = "icon" href ="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="register">
    <div class="wrapper">
        <div class="form-register">
            <h2>Create an Account</h2>
            <form action="Sign-Up_action.php" id="form" name="reg_form" method = "POST" onsubmit="return validateInputs()">
                <div class="register-column">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
                        <input id="fname" type="text"  name ="fname">
                        <label>Full Name</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
                        <input id="uname" type="text"  name="uname">
                        <label>User Name</label>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="register-column">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input id="email" type="email"  name="email">
                        <label>E-mail</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input id="password" type="password" autocomplete="off" name="password">
                        <label>Password</label>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="register-column">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="call"></ion-icon></span>
                        <input id="phone" type="text" name="phone">
                        <label>Phone Number</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box">
                        <input id="birth" type="date" name="birth" >
                        <label>Birth Date</label>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="gender-box">
                    <h3>Gender</h3>
                    <div class="gender-option">
                        <div class="gender">
                            <span>
                                <input id="gender-male" type="radio" name="gender" value = "Male">
                            </span>
                            <label for="gender-male">Male</label>
                        </div>
                        <div class="gender">
                            <span>
                                <input id="gender-female" type="radio" name="gender" value = "Female">
                            </span>
                            <label for="gender-female">Female</label>
                        </div>
                        <div class="gender" id="other">
                            <span>
                                <input id="gender-other" type="radio" name="gender" checked value = "Not Say">
                            </span>
                            <label for="gender-other">Prefer not to say</label>
                        </div>
                        <div class="error"></div>
                    </div>
                </div>
                <div class="input-box address">
                    <label class="alamat2">Have a Same Domicile with Us?</label>
                    <div class="column-city">
                        <div class="select-box">
                            <select id="domisili" name = "domisili" style="color: beige;">
                                <option hidden value = "0">Check if you have same domicile with us!</option>
                                <option value="Cianjur" style="background-color: peru;">Cianjur</option>
                                <option value="Bogor" style="background-color: peru;">Bogor</option>
                                <option value="Malang" style="background-color: peru;">Malang</option>
                                <option value="Jakarta Timur" style="background-color: peru;">Jakarta Timur</option>
                                <option value="Bandung" style="background-color: peru;">Bandung</option>
                                <option value="Cirebon" style="background-color: peru;">Cirebon</option>
                                <option value="Jakarta Selatan" style="background-color: peru;">Jakarta Selatan</option>
                                <option value="Not Same" style="background-color: peru;">Sadly its a no.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-login">Sign Up</button>
                <div class="login-register">
                    <p>Already have an account?<a href="Login.php" class="register-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Script -->
    <script src="js/ScriptSign.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>