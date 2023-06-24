<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Reservation | TasteManhatta</title>

    <!-- add icon link -->
    <link rel = "icon" href ="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="sajian offer">
    
    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Header -->

    <header class="header" data-header>
        <div class="container">

            <a href="index.php" class="logo">
                <img src="./Image/logo5.png" width="200" height="50" alt="TM - Home">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="index.php" class="logo">
                        <img src="./Image/logo4.png" width="250" height="50" alt="TM - Home">
                    </a>

                    <button class="nav-toogle-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" id="close"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="index.php" class="navbar-link">Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Menu.php" class="navbar-link" id="nav2">Menu</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Offer.php" class="navbar-link">Special Offer</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Reserve.php" class="navbar-link active">Reservation</a>
                    </li> 

                    <li class="navbar-item">
                        <a href="Testimoni.php" class="navbar-link">Testimonial</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Branch.php" class="navbar-link">Our Branch</a>
                    </li>
                </ul>

                <?php
                    session_start();
                    if (!isset ($_SESSION['email'])){
                        echo '<div class="header-action">';
                        echo '  <a href="Login.php" class="login-btn">Login</a>';
                        echo '  <a href="Sign-Up.php" class="btn btn-primary">Sign Up</a>';
                        echo '</div>';
                    } else{
                        echo '<div class="header-action">';
                        echo '  <a href="Akun.php" class="login-btn">Akun</a>';
                        echo '  <a href="Logout.php" class="btn btn-primary">Log Out</a>';
                        echo '</div>';
                    }
                ?>
            </nav>

            <button class="nav-toogle-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon class="symbolmenu" name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-overlay data-nav-toggler></div>
        </div>
    </header>

    <!-- Reservasi dengan Nama dan Email Otomatis -->
    <?php
        if(!isset($_SESSION['email'])){
            return;
        }

        $reserve;
        include('config_db.php');
        try{
            $pdo = new PDO($dsn, $db_username, $db_password, $opt); 
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?"); 
            $stmt->execute([$_SESSION['email']]); 
            $reserve = $stmt->fetch();

            $a = rand(1000, 9999);
            $rand = 4;
            $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

            $randomString="";
            for ($i = 0; $i < $rand; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            $book = $randomString.$a;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    ?>
    
    <!-- Reservasi -->
    <main class="reservasi">
        <br><br><br><br>

        <h2 class="text-center2" id="special">Form Reservation</h2>
        <hr>
        <div class="together">

            <img src="./Image/TasteManhatta.png" class="wrapper2" alt="">
        
            <div class="wrapper2">
                <form action="reserve_action.php" method = "POST" id="form" name="reserve_form" onsubmit="return validateInputs()">
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="qr-code-sharp" style="color: brown;"></ion-icon></span>
                        <input id="code" type="text" value="<?= $book?>" readonly name="book" style="color: black;">
                        <label>Booking Code</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="person-circle-sharp" style="color: brown;"></ion-icon></span>
                        <input id="fname" type="text" value="<?= $reserve['fname']?>" readonly name="name" style="color: black;">
                        <label>Full Name</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                    <span class="icon" style="background:none;"><ion-icon name="mail-sharp" style="color: brown;"></ion-icon></span>
                        <input id="email" type="email" value="<?= $reserve['email']?>" readonly name="email" style="color: black;">
                        <label>E-mail</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <input id="book" type="date" style="color:  black;" name="date" >
                        <label>Booking Date</label>
                        <div class="error"></div>
                    </div>
                    <div class="reserve-column">
                        <div class="input-box2 address">
                            <label class="alamat2">Branch Store</label>
                            <div class="column-city">
                                <div class="select-box">
                                    <select id="locate" name = "resto" style="color: black;">
                                        <option hidden value="0" style="color: gray;">Choose Your Closest Restaurant</option>
                                        <option value="Head Resto - Cianjur" name="resto">Head Resto - Cianjur</option>
                                        <option value="Jakarta Selatan - Tebet" name="resto">Jakarta Selatan - Tebet</option>
                                        <option value="Jakarta Timur - Cawang" name="resto">Jakarta Timur - Cawang</option>
                                        <option value="Bogor - Sukasari" name="resto">Bogor - Sukasari</option>
                                        <option value="Malang - Soehat" name="resto">Malang - Soehat</option>
                                        <option value="Cirebon - Nasional" name="resto">Cirebon - Nasional</option>
                                        <option value="Bandung - Braga" name="resto">Bandung - Braga</option>
                                    </select>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-box2 time">
                            <label class="alamat2">Slot Booking Time</label>
                            <div class="column-city">
                                <div class="select-box">
                                    <select id="time" name ="time" style="color: black;">
                                        <option hidden value="0" style="color: gray;">Choose Your Best Time</option>
                                        <option value="10.00 WIB - 11.00 WIB">10.00 WIB - 11.00 WIB</option>
                                        <option value="11.00 WIB - 12.00 WIB">11.00 WIB - 12.00 WIB</option>
                                        <option value="12.00 WIB - 13.00 WIB">12.00 WIB - 13.00 WIB</option>
                                        <option value="13.00 WIB - 14.00 WIB">13.00 WIB - 14.00 WIB</option>
                                        <option value="14.00 WIB - 15.00 WIB">14.00 WIB - 15.00 WIB</option>
                                        <option value="15.00 WIB - 16.00 WIB">15.00 WIB - 16.00 WIB</option>
                                        <option value="16.00 WIB - 17.00 WIB">16.00 WIB - 17.00 WIB</option>
                                        <option value="17.00 WIB - 18.00 WIB">17.00 WIB - 18.00 WIB</option>
                                        <option value="18.00 WIB - 19.00 WIB">18.00 WIB - 19.00 WIB</option>
                                        <option value="19.00 WIB - 20.00 WIB">19.00 WIB - 20.00 WIB</option>
                                        <option value="20.00 WIB - 21.00 WIB">20.00 WIB - 21.00 WIB</option>
                                        <option value="21.00 WIB - 22.00 WIB">21.00 WIB - 22.00 WIB</option>
                                    </select>
                                    <div class="error"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gender-box">
                        <h3>View</h3>
                        <div class="gender-option">
                            <div class="gender">
                                <span>
                                    <input id="gender-male" type="radio" name="view" value="Indoor View" >
                                </span>
                                <label for="gender-male" style="color: black;">Indoor View</label>
                            </div>
                            <div class="gender">
                                <span>
                                    <input id="gender-female" type="radio" name="view" value="Outdoor View">
                                </span>
                                <label for="gender-female" style="color: black;">Outdoor View</label>
                            </div>
                            <div class="gender" id="other">
                                <span>
                                    <input id="gender-other" type="radio" name="view" checked value="Anything"> 
                                </span>
                                <label for="gender-other" style="color: black;">Anything</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="person-outline" style="color: brown;"></ion-icon></span>
                        <input id="person" type="number" placeholder="Jumlah Orang" name="person" style="color: black;">
                        <label>Number of Person</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="chatbox-outline" style="color: brown;"></ion-icon></span>
                        <textarea id="message" placeholder="Isi jika terdapat catatan bagi resto." name="catatan"></textarea>
                        <label>Message</label>
                    </div>
                    <button type="submit" class="btn-login">Submit</button>
                </form> 
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/ScriptFormReserve.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>