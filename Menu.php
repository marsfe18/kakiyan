<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | TasteManhatta</title>

    <!-- add icon link -->
    <link rel="icon" href="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .hide {
            display: none;
        }

        .hide2 {
            display: none;
        }
    </style>
</head>

<body class="sajian">

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
                        <a href="Menu.php" class="navbar-link active" id="nav2">Menu</a>
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
                if (!isset($_SESSION['email'])) {
                    echo '<div class="header-action">';
                    echo '  <a href="Login.php" class="login-btn">Login</a>';
                    echo '  <a href="Sign-Up.php" class="btn btn-primary">Sign Up</a>';
                    echo '</div>';
                } else {
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
        <span class="label-2 text-center span" id="simbol-reserve" style="padding-left: 24px;">Make A <br> Reservation</span>
    </a>

    <!-- Daftar Menu -->
    <main>
        <br><br><br>
        <div class="header-menu">
            <div class="master-container">
                <div class="container">
                    <ul class="navmenu" id="navigasi">
                        <li>
                            <a href="#steak" class="filter-btn" onclick="filter('steak')">- Steak -</a>
                        </li>
                        <li>
                            <a href="#burger" class="filter-btn" onclick="filter('burger')">- Burger -</a>
                        </li>
                        <li>
                            <a href="#pizza" class="filter-btn" onclick="filter('pizza')">- Pizza -</a>
                        </li>
                        <li>
                            <a href="#pasta" class="filter-btn" onclick="filter('pasta')">- Pasta -</a>
                        </li>
                        <li>
                            <a href="#beverage" class="filter-btn" onclick="filter('beverage')">- Beverage -</a>
                        </li>
                        <li>
                            <a href="#snack" class="filter-btn" onclick="filter('snack')">- Side Dish -</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search Box -->

        <!-- <input type="text" name="cari" id="cari" placeholder="Search..." onkeyup="search(this.value)"> -->

        <!-- <div class="cari-container">
            <div class="search-box" style="border: 2px solid brown;">
                <input type="text" class="input" id="authorSearch" placeholder="Search...">
                <div class="btn_common">
                    <ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;"></ion-icon>
                </div>
            </div>
        </div> -->

        <input type="text" name="search" id="search" placeholder="search..." onkeyup="search()">

        <!-- Daftar Menu -->

        <div class="listmenu" id="menuContainer">
            <div class="menu-sec hide steak">
                <div class="labelmenu">
                    <h2 class="text-center2"> Steak </h2>
                    <hr>
                </div>
                <div class="pilihan" id="steak">
                </div>
            </div>
            <div class="menu-sec hide burger">
                <div class="labelmenu">
                    <h2 class="text-center2"> Burger </h2>
                    <hr>
                </div>
                <div class="pilihan" id="burger">
                </div>
            </div>
            <div class="menu-sec hide pasta">
                <div class="labelmenu">
                    <h2 class="text-center2"> Pasta </h2>
                    <hr>
                </div>
                <div class="pilihan" id="pasta">
                </div>
            </div>
            <div class="menu-sec hide pizza">
                <div class="labelmenu">
                    <h2 class="text-center2"> Pizza </h2>
                    <hr>
                </div>
                <div class="pilihan" id="pizza">
                </div>
            </div>
            <div class="menu-sec hide beverage">
                <div class="labelmenu">
                    <h2 class="text-center2"> Beverage </h2>
                    <hr>
                </div>
                <div class="pilihan" id="beverage">
                </div>
            </div>
            <div class="menu-sec hide snack">
                <div class="labelmenu">
                    <h2 class="text-center2"> Side Dish </h2>
                    <hr>
                </div>
                <div class="pilihan" id="snack">
                </div>
            </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>


    <script src="js/MenuLoad.js"></script>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/ScriptSearch.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>