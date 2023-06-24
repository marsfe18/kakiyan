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
                // session_start();
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
                            <a href="#steak" class="a-link">- Steak -</a>
                        </li>
                        <li>
                            <a href="#burger" class="a-link">- Burger -</a>
                        </li>
                        <li>
                            <a href="#pizza" class="a-link">- Pizza -</a>
                        </li>
                        <li>
                            <a href="#pasta" class="a-link">- Pasta -</a>
                        </li>
                        <li>
                            <a href="#beverage" class="a-link">- Beverage -</a>
                        </li>
                        <li>
                            <a href="#snack" class="a-link">- Side Dish -</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search Box -->

        <!-- <div class="cari-container">
            <div class="search-box" style="border: 2px solid brown;">
                <input type="text" class="input" id="authorSearch" placeholder="Search...">
				<div class="btn_common">
					<ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;" ></ion-icon>
				</div>
            </div>
        </div> -->
        <input type="text" name="search" id="search" placeholder="search..." onkeyup="search()">

        <!-- Input Menu -->
        <div class="question">
            <a href="FormMenu.php">
                <div style="border: 2px solid brown;padding-top: 12px;"><span>Add Your New Menu Here!</span></div>
            </a>
        </div>

        <!-- Daftar Menu -->

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

        </div>

    </main>


    <div id="editFormContainer" class="hide">
        <div id="editFormContent">
            <h2>Edit atau Delete</h2>
            <span style="float: right;" onclick="hideEditForm()">X</span>
            <form action="Menu_edit.php" id="editForm" method="post" enctype="multipart/form-data">
                <!-- <label for="id">Id : </label> -->
                <input type="hidden" name="menuId" id="menuId">
                <label for="editNama">Nama:</label>
                <input type="text" name="editNama" id="editNama" required>
                <label for="editJenis">Jenis:</label>
                <input type="text" name="editJenis" id="editJenis" required>
                <label for="editHarga">Harga:</label>
                <input type="text" name="editHarga" id="editHarga" required>
                <label for="editGambar">Gambar:</label>
                <input type="file" name="editGambar" id="editGambar">
                <label for="editDeskripsi">Deskripsi:</label>
                <textarea name="editDeskripsi" id="editDeskripsi" rows="3" required></textarea>
                <button type="submit" name="editSubmit">Update</button>
            </form>
            <form action="Menu_delete.php" method="post" id="delForm">
                <input type="hidden" name="id" id="menuId2">
                <button type="submit" name="editSubmit">Delete</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/ScriptSearch.js"></script>
    <script src="js/MenuLoad.js"></script>


    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>