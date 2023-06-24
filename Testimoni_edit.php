<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimonial | TasteManhatta</title>

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
    
    <!-- Cek Login atau Belum -->
    <?php
        session_start();
        if (!isset ($_SESSION['email'])){
            echo '<script> alert("Harap masuk terlebih dahulu untuk membuat testimoni!");</script>';
            echo '<script>window.location.href = "Login.php";</script>';
        }
    ?>

    <!-- Preloader -->
    

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
                        <a href="Reserve.php" class="navbar-link">Reservation</a>
                    </li> 

                    <li class="navbar-item">
                        <a href="Testimoni.php" class="navbar-link active">Testimonial</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Branch.php" class="navbar-link">Our Branch</a>
                    </li>
                </ul>

                <?php
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

    <!-- Testimoni dengan Nama dan Email Otomatis-->

    <?php
        if(!isset($_GET['code_testi'])){
            return;
        }

        $testimoni;
        include('config_db.php');
        try{
            $pdo = new PDO($dsn, $db_username, $db_password, $opt); 
            $stmt = $pdo->prepare("SELECT * FROM testimoni WHERE code_testi = ?"); 
            $stmt->execute([$_GET['code_testi']]); 
            $testimoni = $stmt->fetch();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    ?>

    <main class="testimoni">
        <br><br><br><br>

        <h2 class="text-center2" id="special">Form Testimonial</h2>
        <hr>

        <div class="together">

            <img src="./Image/TasteManhatta-3.png" class="wrapper2" alt="" style="height:800px">
        
            <div class="wrapper2" style="height:800px">
                <form action="Testimoni_edit_action.php" method="POST" id="form" name="testimoni_form" onsubmit="return validateInputs()" >
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="person-circle-sharp" style="color: brown;"></ion-icon></span>
                        <input id="code" type="text" value="<?= $testimoni['code_testi']?>" readonly name="testi" style="color: black;">
                        <label>Testimoni Code</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="person-circle-sharp" style="color: brown;"></ion-icon></span>
                        <input id="nama" type="text" value="<?= $testimoni['nama']?>" readonly name='name' style="color: black;">
                        <label>Name</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="mail" style="color: brown;"></ion-icon></span>
                        <input id="email" type="email" value="<?= $testimoni['email']?>" readonly name="email" style="color: black;">
                        <label>E-mail</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2 address">
                        <label class="alamat2">Branch Store</label>
                        <div class="column-city">
                            <div class="select-box">
                                <select id="locate" name = "resto" style="color: black;">
                                <option hidden value="0" style="color: gray;">Choose Your Closest Restaurant</option>
                                    <option value="Head Resto - Cianjur" name="resto" <?php echo ($testimoni['branch_store'] === "Head Resto - Cianjur" ? 'selected="selected"': ''); ?>>Head Resto - Cianjur</option>
                                    <option value="Jakarta Selatan - Tebet" name="resto" <?php echo ($testimoni['branch_store'] === "Jakarta Selatan - Tebet" ? 'selected="selected"': ''); ?>>Jakarta Selatan - Tebet</option>
                                    <option value="Jakarta Timur - Cawang" name="resto" <?php echo ($testimoni['branch_store'] === "Jakarta Timur - Cawang" ? 'selected="selected"': ''); ?>>Jakarta Timur - Cawang</option>
                                    <option value="Bogor - Sukasari" name="resto" <?php echo ($testimoni['branch_store'] === "Bogor - Sukasari" ? 'selected="selected"': ''); ?>>Bogor - Sukasari</option>
                                    <option value="Malang - Soehat" name="resto" <?php echo ($testimoni['branch_store'] === "Malang - Soehat" ? 'selected="selected"': ''); ?>>Malang - Soehat</option>
                                    <option value="Cirebon - Nasional" name="resto" <?php echo ($testimoni['branch_store'] === "Cirebon - Nasional" ? 'selected="selected"': ''); ?>>Cirebon - Nasional</option>
                                    <option value="Bandung - Braga" name="resto" <?php echo ($testimoni['branch_store'] === "Bandung - Braga" ? 'selected="selected"': ''); ?>>Bandung - Braga</option>
                                </select>
                                <div class="error"></div>
                            </div>
                        </div>    
                    </div>

                    <div class="gender-box">
                        <h3>Order</h3>
                        <div class="gender-option" >
                            <div class="gender">
                                <span>
                                    <input id="gender-male" type="radio" name="order" value="Dine In" <?php echo ($testimoni['tipe_booking'] === "Dine In" ? 'checked="checked"': ''); ?>>
                                </span>
                                <label for="gender-male" style="color: black;">Dine In</label>
                            </div>
                            <div class="gender">
                                <span>
                                    <input id="gender-female" type="radio" name="order" value="Takeaway" <?php echo ($testimoni['tipe_booking'] === "Takeaway" ? 'checked="checked"': ''); ?>>
                                </span>
                                <label for="gender-female" style="color: black;">Takeaway</label>
                            </div>
                            <div class="gender" id="other">
                                <span>
                                    <input id="gender-other" type="radio" name="order" value="Booking Dine In" <?php echo ($testimoni['tipe_booking'] === "Booking Dine In" ? 'checked="checked"': ''); ?>>
                                </span>
                                <label for="gender-other" style="color: black;">Booking Dine In</label>
                            </div>
                        </div>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="download" style="color: brown;"></ion-icon></span>
                        <input id="subjek" type="text" placeholder="Enter your topic subject" name="subject" style="color: black;" value="<?= $testimoni['subject']?>">
                        <label>Subject</label>
                        <div class="error"></div>
                    </div>
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="chatbox" style="color: brown;"></ion-icon></span>
                        <textarea id="review" placeholder="Tuliskan review Anda disini." name="review" style="color: black;"><?php echo $testimoni['review']?></textarea>
                        <label>Review</label>
                        <div class="error"></div>
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
    <script src="js/ScriptFormTest.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>