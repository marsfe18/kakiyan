<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story | TasteManhatta</title>

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
                        <a href="index.php" class="navbar-link active">Home</a>
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

    <!-- Make A Reservation -->
    <a href="Reserve.php" class="hero-btn has-after">
        <img src="./Image/icon-book-table-3.png" width="100" height="70" alt="book-table icon">
        <span class="label-2 text-center span" id ="simbol-reserve">Make A <br> Reservation</span>
    </a>

    <!-- Daftar Branch -->
    <main class="stories">
        <br><br><br><br>
        <h2 class="text-center2">Story TasteManhatta</h2>
        <hr>

        <div class="branch">
            <div class="wrapper-branch">
                <div class="location">
                    <h3 class="text-center2 section-subheading">- Our First Ever Pizza -</h3>
                    <img src="Image/card-img1.png" alt="">
                    <p>&emsp;&emsp;&emsp;Pizza pertama yang kami buat adalah suatu ketidaksengajaan yang lucu nan menggelitik.
                        Saat itu Mr. Parsya tidak sengaja menumpahkan saus teriyaki di atas saus tomat yang ia gunakan. Ia kemudian mencoba menggabungkan rasanya dan melakukan tes rasa. It turns out so well, sesuatu yang merupakan ketidaksengajaan menjadi hal yang enak dan tidak pernah diduga oleh Mr. Parsya sebelumnya.</p>
                        <p>&emsp;&emsp;&emsp;<i><b>Ultimate Meat Overload</b> that's how Mr. Parsya make a name of it.</i> Rasa hint saus teriyaki di tengah saus tomat yang melimpah membuat rasa manis dan asin di dalam pizza yang dibuat oleh Mr. Parsya. Setelah itu, ia mencoba bereksperimen kembali dengan menu yang ia buat dengan menambahkan berbagai daging yang ada di kulkasnya. <i>And voila, Ultimate Meat Overload definetly made it.</i></p>
                    <br><br>
                    <p style="font-size: 12px;"><i>Margafura Hainan Abi - Teks Publisher</i></p>    
                </div>
                <div class="layanan">
                    <div class="suggest-art">
                        <div class="content">
                            <a href="Stories-2.php">
                                <img src="./Image/card-img6.png" alt="">
                                <h4>Matcha, A Taste Not For Everyone</h4>
                                <div class="content-contain">
                                    <p class="card-content">Matcha adalah minuman yang menarik untuk diamati. Hal ini karena ada pro  kontra
                                        yang tersimpan di dalamnya, seperti rasa pahit...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="suggest-art">
                        <div class="content">
                            <a href="Stories-3.php">
                                <img src="./Image/card-img5.png" alt="">
                                <h4>Sweet Cake, but Not Its Person</h4>
                                <div class="content-contain">
                                    <p class="card-content">Hari ini ada tetangga terdekatnya yang ingin memesan satu loyang kue ulang tahun.
                                        Bu Ceci, beliau adalah pelanggan setia Mr. Pasya...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="suggest-art">
                        <div class="content">
                            <a href="Stories-4.php">
                                <img src="./Image/card-img2.png" alt="">
                                <h4>Burger of A Troops</h4>
                                <div class="content-contain">
                                    <p class="card-content">Hari itu tidak disangka ada sejumlah tentara yang sedang berkumpul di depan rumah Mr. 
                                        Pasya. Katanya, hari  itu adalah hari dimana mereka melakukan uji ketangkasan ...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="suggest-art">
                        <div class="content">
                            <a href="Stories-5.php">
                                <img src="./Image/card-img3.png" alt="">
                                <h4 id ="ribs">Holy Ribs</h4>
                                <div class="content-contain">
                                    <p class="card-content">Kejutan awal saat melakukan pengeringan daging, semua yang Mr. Pasya masak
                                        menjadi busuk hari itu. Ia melakukan metode dry age yang ia lakukan salah...
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="suggest-art">
                        <div class="content">
                            <a href="Stories-6.php">
                                <img src="./Image/card-img4.png" alt="">
                                <h4>My Sweetheart Pasta</h4>
                                <div class="content-contain">
                                    <p class="card-content">Malam yang dingin tidak mengurangi kehangatan dari keluarga Mr. Pasya yang
                                        sedang berkumpul merayakan tahun baru bersama...
                                    </p>
                                </div>
                            </a>
                        </div>
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