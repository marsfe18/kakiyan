<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offer | TasteManhatta</title>

    <!-- add icon link -->
    <link rel="icon" href="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        #editFormContainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            overflow-y: auto;
        }

        #editFormContent {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        #editFormContent h2 {
            margin-bottom: 20px;
        }

        #editFormContent label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        #editFormContent input[type="number"],
        #editFormContent input[type="text"],
        #editFormContent textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #editFormContent button[type="submit"] {
            display: inline-block;
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        #editFormContent button[type="submit"]:hover {
            background-color: #45a049;
        }

        #editFormContent button[type="button"] {
            display: inline-block;
            padding: 8px 15px;
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #editFormContent button[type="button"]:hover {
            background-color: #d32f2f;
        }

        #editFormContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        #editFormContent {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        #editFormContainer.hide {
            display: none;
        }

        form {
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        button {
            color: black;
            padding: 8px 16px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }



        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body class="sajian tawaran">

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

    <!-- Make A Reservation -->
    <a href="Reserve.php" class="hero-btn has-after">
        <img src="./Image/icon-book-table-3.png" width="100" height="70" alt="book-table icon">
        <span class="label-2 text-center span" id="simbol-reserve" style="padding-left: 24px;">Make A <br> Reservation</span>
    </a>

    <!-- Special Offer -->
    <main>
        <br><br><br><br>
        <h2 class="text-center2" id="special">Special Offer</h2>
        <hr>

        <!-- Search Box -->

        <!-- <div class="cari-container">
            <div class="search-box" style="border: 2px solid brown; margin-top: 10px;">
                <input type="text" class="input" id="authorSearch" placeholder="Search...">
                <div class="btn_common">
                    <ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;"></ion-icon>
                </div>
            </div>
        </div> -->
        <input type="text" name="search" id="search" placeholder="search..." onkeyup="search()">

        <!-- Food Offer -->

        <div class="tawaranpage">
        </div>

        <div id="editFormContainer" class="hide">
            <div id="editFormContent">
                <h2>Edit Menu</h2>
                <form action="Offer_edit.php" id="editForm" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="menuId" id="menuId">
                    <label for="editNama">Nama:</label>
                    <input type="text" name="editNama" id="editNama" required>
                    <label for="editHargaAsli">Harga Asli:</label>
                    <input type="number" name="editHargaAsli" id="editHargaAsli" required>
                    <label for="editHargaDiskon">Harga Diskon:</label>
                    <input type="number" name="editHargaDiskon" id="editHargaDiskon" required>
                    <label for="editDeskripsi">Deskripsi:</label>
                    <textarea name="editDeskripsi" id="editDeskripsi" rows="3" required></textarea>
                    <label for="editDeskripsi2">Deskripsi 2:</label>
                    <textarea name="editDeskripsi2" id="editDeskripsi2" rows="3" required></textarea>
                    <label for="editGambar">Gambar:</label>
                    <input type="file" name="editGambar" id="editGambar">
                    <button type="submit" name="editSubmit">Update</button>
                </form>
                <form action="Offer_delete.php" method="post" id="delForm">
                    <input type="hidden" name="id" id="menuIdDelete">
                    <button type="submit" name="deleteSubmit">Delete</button>
                </form>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/ScriptSearch.js"></script>
    <script src="js/OfferLoad.js"></script>


    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>






<!-- 






<div class="tawaranpage">
    <div class="single-menu">
        <img src="Image/offer-3.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Steak Family Plate</h4>
            <span>Rp 229.999,00</span>
            <p?>Cocok untuk kalian yang datang ramean bareng keluarga dan mau sharing porsi value ini! Worth untuk dimakan 3-5 orang. Benar-benar definisi dari
                everyone can eat steak with happily and share with your love!</p>
                <p><b>Steak Family Plate: </b></p>
                <p>1. Beef Wagyu Premium Steak</p>
                <p>2. Beef Tenderloin Premium Steak</p>
                <p>3. Rib Eye Favorite Premium</p>
                <p>Harga Asli: <b style="font-size: 23px; color: black;">Rp 260.965,00</b></p>
                <p>Anda hemat: <b style="font-size: 30px; color: brown;">Rp 30.966,00</b></p>
                <p>
                <p style="font-size: 12px; font-style: italic;top: 20%;">*Harga belum termasuk pajak.</p>
        </div>
    </div>
    <div class="single-menu">
        <img src="Image/offer-4.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Buy 2 All Variant Pizza Get 1</h4>
            <span>Get Free One Pan Full of Ultimate Meat Overload</span>
            <p?>Here we go paket premium pizza yang cocok banget disantap bareng keluarga yang kalian sayangi atau orang lain. Valuenya tinggi banget karena dengan kalian beli 2 pizza maka
                kalian bakal dapet 1 pizza Ultimate Meat Overload yang jadi menu favorit kami!</p>
                <p><b>Buy 2 All Variant Pizza Get 1 Ultimate Meat Overload: </b></p>
                <p>1. All Variant Pizza</p>
                <p>2. All Variant Pizza</p>
                <p>3. Ultimate Meat Overload Pizza</p>
                <p>Anda hemat: <b style="font-size: 30px; color: brown;">Rp 87.555,00</b></p>
                <p>
                <p style="font-size: 12px; font-style: italic;top: 20%;">*Harga belum termasuk pajak, berlaku setiap hari Minggu.</p>
        </div>
    </div>
</div>
<div class="tawaranpage">
    <div class="single-menu">
        <img src="Image/offer-5.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Pasta Couple Value</h4>
            <span>Rp 85.555,00</span>
            <p>Buat kalian yang dateng dengan pasangan kalian atau cuma berduaan aja bareng temen, gaskeun ambil promo 2 pasta premium dari TasteManhatta yang bakalan bikin kalian hemat.
                Kalian bisa sharing Penne Bolognese Sauce Spicy dan Cacio E Pepe Spicy Spagethi bareng orang yang dateng sama kamu lho! </p>
            <p><b>Pasta Couple Value: </b></p>
            <p>1. Penne Bolognese Sauce Spicy</p>
            <p>2. Cacio E Pepe Spicy Spagethi</p>
            <p>Harga Asli: <b style="font-size: 23px; color: black;">Rp 105.110,00</b></p>
            <p>Anda hemat: <b style="font-size: 30px; color: brown;">Rp 19.555,00</b></p>
            <p>
            <p style="font-size: 12px; font-style: italic;top: 20%;">*Harga belum termasuk pajak.</p>
        </div>
    </div>
    <div class="single-menu">
        <img src="Image/offer-6.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Beef Patty-Based Burger Value</h4>
            <span>Discount 25% for certain burger variants</span>
            <p>Buat kalian yang mau makan burger beef based yang jadi value menu TasteManhatta, ga perlu bingung dan repot! Setiap hari burger (every Friday)
                kita akan ngasih ke kelian special offer yang sangat worth it terutama buat kantong mahasiswa. </p>
            <p><b>Non-Beef Steak Premium Value: </b></p>
            <p>1. Australia Beef Burger Tender</p>
            <p>2. All Favorite Beef Cheese Burger</p>
            <p style="font-size: 12px; font-style: italic;">*Harga belum termasuk pajak, promo berlaku setiap hari Jumat.</p>
        </div>
    </div>
</div>
<div class="tawaranpage">
    <div class="single-menu">
        <img src="Image/offer-7.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Super Value Cheese Burger</h4>
            <span>Rp 50.555,00</span>
            <p>Paket ini adalah pilihan yang tepat buat kalian yang mau makan burger tapi sekaligus biar kenyang yaitu dengan value package. Dari paket ini, kalian bisa dapet
                reguler cheese burger dengan cola dan kentang goreng yang sangat worth. </p>
            <p><b>Super Value Cheese Burger Package: </b></p>
            <p>1. All Favorite Beef Cheese Burger</p>
            <p>2. Ordinary Favorite French Fries</p>
            <p>3. Coca Cola</p>
            <p>Anda hemat: <b style="font-size: 30px; color: brown;">Rp 27.555,00</b> </p>
            <p style="font-size: 12px; font-style: italic;top: 20%;">*Harga belum termasuk pajak.</p>
        </div>
    </div>
    <div class="single-menu">
        <img src="Image/offer-8.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Pizza Slice for Yourself</h4>
            <span>Rp 24.255,00</span>
            <p>Buat kalian yang lagi sendiri tapi pengen makan pizza, cocok nih buat nyobain menu pizza slice kita. Pizza slice ini dibuat buat kalian semua yang pengen
                makan pizza tapi ga punya partner untuk menghabiskan. TasteManhatta seriously bringing the best pizza for y'all guys! </p>
            <p><b>Pizza Slice tersedia atas varian: </b></p>
            <p>1. Amsterdam Frankie Sausage Cheese</p>
            <p>2. Ultimate Cheese Melt</p>
            <p>3. Ultimate Meat Overload</p>
            <p style="font-size: 12px; font-style: italic;">*Harga belum termasuk pajak.</p>
        </div>
    </div>
</div>
<div class="tawaranpage">
    <div class="single-menu">
        <img src="Image/offer-9.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Happy Hour Pasta</h4>
            <span>Discount 30% for certain pasta variant Everyday on 21:00 PM</span>
            <p>Jam malam, laper? Enaknya sih makan pasta gaa sihh. Capek pulang kantor, mau sesuatu yang mengenyangkan dan tentunya murah, TasteManhatta nyediain offer ini nih buat kalian semua pecinta
                makan di jam malam. </p>
            <p><b>Happy Hour Pasta tersedia atas varian: </b></p>
            <p>1. All Dente Lasgna</p>
            <p>2. Farfalle Red Vegie</p>
            <p>3. Beef Creamy Carbonara Spaghetti</p>
            <p style="font-size: 12px; font-style: italic;">*Harga belum termasuk pajak, berlaku setiap pukul 21.00 WIB.</p>
        </div>
    </div>
    <div class="single-menu">
        <img src="Image/offer-10-fix.png" alt="">
        <div class="menu-content">
            <h4 class="menu-title">Beef Bacon Ultimate Reguler</h4>
            <span>Rp 79.000,00</span>
            <p>Nikmati 2 Beef Bacon Ultimate Burger dengan harga yang lebih murah dari biasanya. Cocok untuk makan bareng orang terdekat kamu lho!
                Segera ambil paket value ini ya, karena hanya hadir setiap hari Senin. Jangan lewatkan ya!</p>
            <p><b>Buy 2 Beef Bacon Ultimate Reguler: </b></p>
            <p>2 pcs Beef Bacon Ultimate Burger</p>
            <p>Harga Asli: <b style="font-size: 23px; color: black;">Rp 93.110,00</b></p>
            <p>Anda hemat: <b style="font-size: 30px; color: brown;">Rp 14.110,00</b> </p>
            <p style="font-size: 12px; font-style: italic;top: 20%;">*Harga belum termasuk pajak, berlaku setiap hari Senin.</p>
        </div>
    </div> -->