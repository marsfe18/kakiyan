<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Branch | TasteManhatta</title>

    <!-- add icon link -->
    <link rel = "icon" href ="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="branch">
    
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
                        <a href="Reserve.php" class="navbar-link">Reservation</a>
                    </li> 

                    <li class="navbar-item">
                        <a href="Testimoni.php" class="navbar-link">Testimonial</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Branch.php" class="navbar-link active">Our Branch</a>
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

    <!-- Make A Reservation -->
    <a href="Reserve.php" class="hero-btn has-after">
        <img src="./Image/icon-book-table-3.png" width="100" height="70" alt="book-table icon">
        <span class="label-2 text-center span" id ="simbol-reserve">Make A <br> Reservation</span>
    </a>

    <!-- Daftar Branch -->
    <main>
        <br><br><br><br>
        <h2 class="text-center2">Branch Location</h2>
        <hr>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Cianjur -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Dr.Muwardi No.155, Cianjur, Jawa Barat, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>+62 - 89888762135</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6395380415147!2d107.1381365!3d-6.8136233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852faed292449%3A0xd561c726762363f5!2sJl.%20Dr.%20Muwardi%20No.155%2C%20Bojongherang%2C%20Kec.%20Cianjur%2C%20Kabupaten%20Cianjur%2C%20Jawa%20Barat%2043216!5e0!3m2!1sen!2sid!4v1681092245674!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Head Restaurant</h4>
                    <div>Kompleks Cianjur Kota</div>
                    <div>Jalan Dr. Muwardi No. 155</div>
                    <div>Bojongherang, Kecamatan Cianjur</div>
                    <div>Kabupaten Cianjur, Jawa Barat</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Cianjur</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta_official</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Jakarta Selatan -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan KH Abdullah Syafei No.12, Jakarta Selatan, DKI Jakarta, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_tebet@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>089888072134</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.294243117475!2d106.86188059999996!3d-6.224880000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3831f0157d1%3A0x77476cc84295b68f!2sJl.%20KH%20Abdullah%20Syafei%20No.12%2C%20RW.9%2C%20Bukit%20Duri%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012840!5e0!3m2!1sen!2sid!4v1681040592387!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Tebet Restaurant</h4>
                    <div>Pusat Pertokoan Tebet Timur</div>
                    <div>Jalan KH Abdullah Syafei No.12</div>
                    <div>Bukit Duri, Kecamatan Tebet</div>
                    <div>Jakarta Selatan, DKI Jakarta</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Tebet</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Tebet</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Jakarta Timur -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Cawang Baru Tengah No.12, Jakarta Timur, DKI Jakarta, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_cawang@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>087866081776</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1517351394596!2d106.8727933!3d-6.243725199999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30f1e255ea7%3A0xf6a9be4564c34483!2sJl.%20Cawang%20Baru%20Tengah%20No.12%2C%20RT.3%2FRW.10%2C%20Cipinang%20Cempedak%2C%20Kecamatan%20Jatinegara%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013340!5e0!3m2!1sen!2sid!4v1681041052650!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Cawang Restaurant</h4>
                    <div>Kompleks Cipinang Cempedak</div>
                    <div>Jalan Cawang Baru Tengah No.12</div>
                    <div>Cipinang Cempedak, Kecamatan Jatinegara</div>
                    <div>Jakarta Timur, DKI Jakarta</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Cawang</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Cawang</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Bogor -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Sukasari 1 No.17, Bogor, Jawa Barat, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_bogor@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>0895807861040</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.2371792284325!2d106.81124591744384!3d-6.617428999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5fccaaaf7cb%3A0x9051e767e0d2b36!2sJl.%20Sukasari%201%20No.17%2C%20RT.07%2FRW.02%2C%20Sukasari%2C%20Kec.%20Bogor%20Tim.%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016142!5e0!3m2!1sen!2sid!4v1681041405625!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Bogor Restaurant</h4>
                    <div>Kompleks Pertokoan Sukasari</div>
                    <div>Jalan Sukasari 1 No.17</div>
                    <div>Sukasari, Kecamatan Bogor Tim.</div>
                    <div>Kota Bogor, Jawa Barat</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Bogor</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Bogor</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Malang -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Soekarno Hatta, Malang, Jawa Timur, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_malang@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>087600981234</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5467950225457!2d112.621225!3d-7.9423079999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629dfe7da51eb%3A0x6393c79cb513e2a2!2sJl.%20Soekarno%20Hatta%20No.42%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065142!5e0!3m2!1sen!2sid!4v1681041611087!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Soehat Restaurant</h4>
                    <div>Kompleks Pertokoan Malang</div>
                    <div>Jalan Soekarno Hatta No.42</div>
                    <div>Jatimulyo, Kecamatan Lowokwaru</div>
                    <div>Kota Malang, Jawa Timur</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Malang</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Malang</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta.Soehat</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Cirebon -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Raya Sumber-Cirebon No.7, Cirebon, Jawa Barat, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_cirebon@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>089700127861</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0945477842856!2d108.49640641744384!3d-6.758324399999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1e4283c8bd4d%3A0x82650811aaf925f7!2sJl.%20Raya%20Sumber-Cirebon%20No.7%2C%20Sendang%2C%20Kec.%20Sumber%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045611!5e0!3m2!1sen!2sid!4v1681042116897!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Sumber-Raya Restaurant</h4>
                    <div>Kompleks Jalan Nasional</div>
                    <div>Jalan Raya Sumber-Cirebon No.7</div>
                    <div>Sendang, Kecamatan Sumber</div>
                    <div>Cirebon, Jawa Barat</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Cirebon</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Cirebon</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="branch">
            <h3 class="text-center2 section-subheading">- TasteManhatta Bandung -</h3>
            <div class="wrapper-branch">
                <div class="location">
                    <div class="alamat">
                        <ion-icon name="location-outline"></ion-icon>
                        <h4>Alamat</h4>
                        <p>Jalan Braga No.123, Bandung, Jawa Barat, Indonesia</p>
                    </div>
        
                    <div class="email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <h4>Email</h4>
                        <p>TasteManhatta_bandung@gmail.com</p>
                    </div>
        
                    <div class="phone">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                        <h4>Kontak</h4>
                        <p>098411220971</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.788331588153!2d107.60883390000001!3d-6.9158916999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a8fa1226f%3A0xa693164c0f282a3d!2sJl.%20Braga%20No.123%2C%20Braga%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040111!5e0!3m2!1sen!2sid!4v1681042410009!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="layanan">
                    <h4>TasteManhatta Braga Restaurant</h4>
                    <div>Komplek Wisata Braga</div>
                    <div>Jalan Braga No.123</div>
                    <div>Braga, Kecamatan Sumur</div>
                    <div>Bandung, Jawa Barat</div>

                    <h4>Social Media</h4> 
                    <div class="social-media">
                        <a href="#" class="facebook" style="display:flex;"><ion-icon name="logo-facebook" style="margin-right: 10px;"></ion-icon>TasteManhatta Braga</a>
                        <a href="#" class="instagram" style="display: flex;"><ion-icon name="logo-instagram" style="margin-right: 10px;"></ion-icon>TasteManhatta.Braga</a>
                        <a href="#" class="tiktok" style="display: flex;"><ion-icon name="logo-tiktok" style="margin-right: 10px;"></ion-icon>TasteManhatta_Bandung</a>
                        <a href="#" class="twitter" style="display: flex;"><ion-icon name="logo-twitter" style="margin-right: 10px;"></ion-icon>TasteManhatta_twt</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->

    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/ScriptSearch.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>