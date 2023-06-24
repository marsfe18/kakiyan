<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Offering | TasteManhatta</title>

    <!-- add icon link -->
    <link rel="icon" href="Image/TasteManhattaLogo.png">
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
                        <a href="Offer.php" class="navbar-link active">Special Offer</a>
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

    <!-- Reservasi -->
    <main class="formoffer">
        <br><br><br><br>

        <h2 class="text-center2" id="special">Form Add Offering</h2>
        <hr>
        <div class="together">
            <img src="./Image/FormAddOffer.png" class="wrapper2" alt="" style="height: 820px">
            <div class="wrapper2" style="height: 820px">
                <form action="Offer_edit.php" method="POST" id="form" name="offer_form" enctype="multipart/form-data">
                    <input type="hidden" name="menuId" value="<?php echo $_GET['id']; ?>">
                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="fast-food-sharp" style="color: brown;"></ion-icon></span>
                        <input id="offer" type="text" placeholder="Enter offer title" name="offer" value="<?php echo $_GET['nama']; ?>">
                        <label>Offering Title</label>
                        <div class="error"></div>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="cash-sharp" style="color: brown;"></ion-icon></span>
                        <input id="offer" type="text" placeholder="Masukkan harga/discount dari offering" name="discount" value="<?php echo $_GET['diskon']; ?>">
                        <label>Offering Price/Discount</label>
                        <div class="error"></div>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="document-text-sharp" style="color: brown;"></ion-icon></span>
                        <textarea id="description_off" placeholder="Tuliskan deskripsi offer Anda" name="description_off"><?php echo $_GET['deskripsi']; ?></textarea>
                        <label>Offering Description </label>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="pricetag-sharp" style="color: brown;"></ion-icon></span>
                        <textarea id="item" placeholder="Tuliskan item offer. Contoh: pizza, steak" name="item"><?php echo $_GET['deskripsi2']; ?></textarea>
                        <label>Offering Item</label>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="cash-sharp" style="color: brown;"></ion-icon></span>
                        <input id="ogprice" type="number" placeholder="Tuliskan harga originalnya" name="ogprice" value="<?php echo $_GET['asli']; ?>">
                        <label>Offering Original Price</label>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="cash-sharp" style="color: brown;"></ion-icon></span>
                        <input id="saveprice" type="number" placeholder="Tuliskan berapa biaya yang dihemat" name="saveprice">
                        <label>Offering Saving Price</label>
                    </div>

                    <div class="input-box2">
                        <span class="icon" style="background:none;"><ion-icon name="image-sharp" style="color: brown;"></ion-icon></span>
                        <input id="photooffer" type="file" placeholder="Upload menu picture" name="photooffer">
                        <label>Foto Menu</label>
                        <div class="error"></div>
                    </div>

                    <button type="submit" class="btn-login">Tambahkan Menu</button>
                </form>

            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <!-- <script src="js/ScriptFormReserve.js"></script> -->

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>