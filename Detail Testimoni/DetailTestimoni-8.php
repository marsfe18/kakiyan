<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial | TasteManhatta</title>

    <!-- add icon link -->
    <link rel = "icon" href ="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="sajian offer test detail">
    
    <!-- Preloader -->
    
    <div class="preload" data-preload>
        <div class="circle"></div>
        <h1 class="disp" data-text>Taste Manhatta</h1>
        <p class="text1">Wait to Enjoy Your Best Food!</p>
    </div>

    <!-- Header -->

    <header class="header" data-header>
        <div class="container">

            <a href="Index.php" class="logo">
                <img src="./Image/logo5.png" width="200" height="50" alt="TM - Home">
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="Index.php" class="logo">
                        <img src="./Image/logo4.png" width="250" height="50" alt="TM - Home">
                    </a>

                    <button class="nav-toogle-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" id="close"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="Index.php" class="navbar-link">Home</a>
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

                <div class="header-action">
                    <a href="Login.php" class="login-btn">Login</a>
                    <a href="Sign-Up.php" class="btn btn-primary">Sign Up</a>
                </div>
            </nav>

            <button class="nav-toogle-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon class="symbolmenu" name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-overlay data-nav-toggler></div>
        </div>
    </header>

    <!-- Reservasi -->
    <main>
        <br><br><br><br>

        <h2 class="text-center2" id="special">Detail Testimoni</h2>
        <hr>

        <!-- Card Box Testimonial -->
        
            <div class="single-menu quest">
                <div class="menu-content">
                    <div class="isi">
                        <img src="Image/logo-person.png" alt="">
                        <div class="side">
                            <h4 class="menu-title"><a href="#">Tomhawk si Pemenang!</a></h4>
                            <span>by Rinaningsih</span>
                        </div>
                    </div>
                    <p>Porsi Tomhawk yang disajikan benar-benar tidak main-main. Rasa terlezat dengan porsi paling worth it yang pernah saya coba.
                    </p>
                </div>
            </div>
            
            <div class="single-menu quest">
                <div class="menu-content">
                    <div class="isi">
                        <img src="Image/logo-person.png" alt="">
                        <div class="side">
                            <h4 class="menu-title"><a href="#">Respon untuk Tn./Ny./Nn. Rinaningsih </a></h4>
                            <span>Admin-1 TasteManhatta</span>
                        </div>
                    </div>
                    <p>Terima kasih atas kunjungan Anda di TasteManhatta, semoga dengan makanan kami bisa menjadi semangatmu.
                    </p>
                </div>
            </div>
            
            <br>
            <div class="single-menu quest reply" style="margin-bottom: 0px; border-bottom: none; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);">
                <h4 class="menu-title" style="border: none;"><a href="#">Reply </a></h4>
            </div>
            <div class="single-menu quest reply" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);">
                <textarea id="answer" placeholder="Tuliskan balasan Anda disini."></textarea>
            </div>
            <div class="single-menu quest reply">
                <button type="submit" class="btn-login">Reply</button>
            </div>
    </main>

    <!-- Footer -->

    <footer>
        <section class="bottom">
            <div class="row-fot">
                <div class="col-fot">
                    <img src="./Image/logo5.png" alt="" class="logo-fot">
                    <p>
                        TasteManhatta adalah restauran yang didirikan oleh Mr. Pasya Brattarani sejak tahun 1997.
                        Kami memulai bisnis dari suatu kota kecil Cianjur, lalu mengekspansinya hingga kini kami
                        memiliki 7 cabang yang tersebar di Pulau Jawa. 
                    </p>
                </div>
                <div class="col-fot">
                    <h3>Head Office</h3>
                    <p>Jalan Dr. Muwardi No.155</p>
                    <p>Bojongherang, Kec. Cianjur</p>
                    <p>Kabupaten Cianjur, Jawa Barat 43216</p>
                    <div class="contact">
                        <p class="mail-id">TasteManhatta@gmail.com</p>
                        <p>(0263) 888661</p>
                        <p>+62 - 89888762135</p>
                    </div>
                </div>
                <div class="col-fot">
                    <h3>Our Service</h3>
                    <ul>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="Offer.php">Special Offer</a></li>
                        <li><a href="Reserve.php">Reservation</a></li>
                        <li><a href="Testimoni.php">Testimonial</a></li>
                        <li><a href="Branch.php">Our Branch</a></li>
                    </ul>
                </div>
                <div class="col-fot">
                    <h3>Our Social Media</h3>
                    <div class="sosmed-con">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                        <ion-icon name="logo-tiktok"></ion-icon>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>