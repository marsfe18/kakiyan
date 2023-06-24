<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteManhatta | Special Serve For You</title>

    <!-- add icon link -->
    <link rel="icon" href="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

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
                        <a href="index.php" class="navbar-link active">Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="Menu.php" class="navbar-link">Menu</a>
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

    <!-- Welcoming Slider -->
    <main>
        <div class="welcoming">
            <section class="hero text-center" aria-label="home" id="home">
                
                <ul class="hero-slider" data-hero-slider>
                    <li class="slider-item active" data-hero-slider-item>
                        
                        <div class="slider-bg">
                            <img src="./Image/Slider-Open-fix.png" alt="" class="img-cover">
                        </div>

                        <p class="label-1 subtitle-section slider-reveal">Enjoy Your Best Food Experience</p>

                        <h2 class="display-1 hero-title slider-reveal">Taste Manhatta</h2>

                        <a href="Menu.php" class="btn btn-secondary slider-reveal">
                            <span class="text text-1">Our Menu</span>
                        </a>
                    </li>
                    
                    <li class="slider-item active" data-hero-slider-item>
                        
                        <div class="slider-bg">
                            <img src="./Image/Slider-2-fix.png" alt="" class="img-cover">
                        </div>

                        <p class="label-2 subtitle-section slider-reveal">Start Your Day with Our Perfect Match</p>

                        <h2 class="display-1 hero-title slider-reveal">
                            Every Drinks 
                            <br> <br> <br> <br> Has Its Own Secret
                        </h2>

                        <a href="Menu.php#beverage" class="btn btn-secondary slider-reveal">
                            <span class="text text-1">The Drinks</span>
                        </a>
                    </li>

                    <li class="slider-item active" data-hero-slider-item>
                        
                        <div class="slider-bg">
                            <img src="./Image/Slider-3-fix.png" alt="" class="img-cover">
                        </div>

                        <p class="label-2 subtitle-section slider-reveal">A Slice of Pizza to Warm Your Heart</p>

                        <h2 class="display-1 hero-title slider-reveal">Here We Go,</h2>
                        <h2 class="display-1 hero-title slider-reveal">The Best Pizza in Town</h2>
                        
                        <a href="Menu.php#pizza" class="btn btn-secondary slider-reveal">
                            <span class="text text-1">Our Pizza Menu</span>
                        </a>
                    </li>
                </ul>

                <button class="slider-btn back" data-back-btn>
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </button> 
                <button class="slider-btn next" data-next-btn>
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> 

            </section>
        </div>
    </main>

    <a href="Reserve.php" class="hero-btn has-after">
        <img src="./Image/icon-book-table-3.png" width="100" height="70" alt="book-table icon">
        <span class="label-2 text-center span">Make A <br> Reservation</span>
    </a>

    <!-- Food Gallery -->

    <div class="gallery">   
        <section class="middle-2">
            <div class="container-2">
                <h3 class="text-center2 section-subheading">- Beauty and Taste -</h3>
                <img src="./Image/separator.png" alt="" class="symbol">
                <h2 class="text-center2 section-subheading">Our Gallery</h2>
            </div> 

            <div class="full-foto" id="fullFotoBox">
                <img src="./Image/food-10.png" alt="food1" id="fullFoto">
                <ion-icon name="close-outline" onclick="closeFullFoto()"></ion-icon>
            </div>

            <div class="foto">
                <img src="./Image/food-10.png" alt="food1" onclick="openFullFoto(this.src)">
                <img src="./Image/food-5.png" alt="food2" onclick="openFullFoto(this.src)">
                <img src="./Image/food-8.png" alt="food3" onclick="openFullFoto(this.src)">
                <img src="./Image/food-4.png" alt="food4" onclick="openFullFoto(this.src)">
                <img src="./Image/food-3.png" alt="food5" onclick="openFullFoto(this.src)">
                <img src="./Image/food-6.png" alt="food6" onclick="openFullFoto(this.src)">
                <img src="./Image/food-7.png" alt="food7" onclick="openFullFoto(this.src)">
                <img src="./Image/food-1.png" alt="food8" onclick="openFullFoto(this.src)">
                <img src="./Image/food-9.png" alt="food9" onclick="openFullFoto(this.src)">
                <img src="./Image/food-2.png" alt="food10" onclick="openFullFoto(this.src)">
            </div>
        </section>
    </div>

    <!-- Special Offer Moving Image -->
    <div class="offer">
        <section class="middle-2">
            <div class="container-2">
                <h3 class="text-center2 section-subheading">- Worth the Price -</h3>
                <img src="./Image/separator.png" alt="" class="symbol">
                <h2 class="text-center2 section-subheading">Special Offer</h2>
            </div>
            
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <a href="Offer.php"><img src="./Image/Diskon-1.png" alt=""></a>
                </div>
                <div class="mySlides fade">
                  <a href="Offer.php"><img src="./Image/Diskon-2-fixed.png" alt=""></a>
                </div>
                <div class="mySlides fade">
                  <a href="Offer.php"><img src="./Image/Diskon-3-fixed.png" alt=""></a>
                </div>
                <div class="mySlides fade">
                    <a href="Offer.php"><img src="./Image/Diskon-4-fixed.png" alt=""></a>
                </div>
            </div>
        </section>
    </div>

    <!-- Food Story -->
    <div class="story">
        <section class="middle-3">
            <div class="container-2">
                <h3 class="text-center2 section-subheading">- Sweet and Salty of An Interaction -</h3>
                <img src="./Image/separator.png" alt="" class="symbol">
                <h2 class="text-center2 section-subheading">Food Stories</h2>
            </div>

            <div class="card-pos">
                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img1.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Our First Ever Pizza</h4>
                        <p class="card-content">Pizza pertama yang kami buat adalah suatu ketidaksengajaan yang lucu nan menggelitik.
                            Saat itu Mr. Parsya tidak sengaja menumpahkan saus teriyaki di atas saus tomat yang ia gunakan....
                        </p>
                        <a href="Stories-1.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>
    
                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img6.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Matcha, A Taste Not For Everyone</h4>
                        <p class="card-content">Matcha adalah minuman yang menarik untuk diamati. Hal ini karena ada pro  kontra
                            yang tersimpan di dalamnya, seperti rasa pahit...
                        </p>
                        <br>
                        <a href="Stories-2.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>
    
                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img5.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Sweet Cake, but Not Its Person</h4>
                        <p class="card-content">Hari ini ada tetangga terdekatnya yang ingin memesan satu loyang kue ulang tahun.
                            Bu Ceci, beliau adalah pelanggan setia Mr. Pasya...
                        </p>
                        <br><br>
                        <a href="Stories-3.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Burger of A Troops</h4>
                        <p class="card-content">Hari itu tidak disangka ada sejumlah tentara yang sedang berkumpul di depan rumah Mr. 
                            Pasya. Katanya, hari  itu adalah hari dimana mereka melakukan uji ketangkasan ...
                        </p>
                        <a href="Stories-4.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img3.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Holy Ribs</h4>
                        <p class="card-content">Kejutan awal saat melakukan pengeringan daging, semua yang Mr. Pasya masak
                            menjadi busuk hari itu. Ia melakukan metode dry age yang ia lakukan salah...
                        </p>
                        <br>
                        <a href="Stories-5.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="imgbox">
                        <img src="./Image/card-img4.png" alt="">
                    </div>
                    <div class="content">
                        <h4>My Sweetheart Pasta</h4>
                        <p class="card-content">Malam yang dingin tidak mengurangi kehangatan dari keluarga Mr. Pasya yang
                            sedang berkumpul merayakan tahun baru bersama...
                        </p>
                        <a href="Stories-6.php" class="btn-primary sec">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <br> <br>
    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>