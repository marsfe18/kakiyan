<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation | TasteManhatta</title>

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
            echo '<script> alert("Harap masuk terlebih dahulu untuk reservasi!");</script>';
            echo '<script>window.location.href = "Login.php";</script>';
        }
    ?>

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Header -->

    <header class="header" data-header>
        <div class="container">

            <a href="index.php" class="logo">
                <img src="Image/logo5.png" width="200" height="50" alt="TM - Home">
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

    <!-- Reservasi -->
    <main>
        <br><br><br><br>

        <h2 class="text-center2" id="special">Make A Reservation</h2>
        <hr>

        <br>

        <div class="pilihan">
            <button type="button" class="awal" id="prevBtn" style="background-color: transparent;border: 2px solid brown;"><span><ion-icon name="caret-back-circle-outline" style="color: brown;"></ion-icon></span></button>
            <a href="FormReserve.php"><div class="middle" style="background-color: brown;border: 2px solid brown; height: 50px;"><span class="reserve" style="color: beige; font-weight: 500; padding-top: 9px;"> Make A Reservation Here!</span></div></a>
            <button type="button" class="last" id="nextBtn" style="background-color: transparent;border: 2px solid brown;"><span><ion-icon name="play-circle-outline" style="color: brown;"  href=""></ion-icon></span></button>
        </div>

        <div class="box-tanggal">
            <div class="card" style="margin: 10px; margin-top: 20px; background-color: transparent;border: 2px solid brown;">
                <div class="text2"><p id="date"></p></div> 
            </div>
        </div>

        <!-- Search Box -->

        <div class="cari-container">
            <div class="search-box" style="border: 2px solid brown;">
                <input type="text" class="input" id="authorSearch" placeholder="Search...">
				<div class="btn_common">
					<ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;" ></ion-icon>
				</div>
            </div>
        </div>
        
        <!-- Connect Database & Manage Reservation-->
        <?php
            if(!isset($_SESSION['email'])){
                return;
            }
    
            include('config_db.php');
            try{
                $pdo = new PDO($dsn, $db_username, $db_password, $opt); 
                $stmt = $pdo->prepare("SELECT email FROM reserve WHERE email = ?"); 
                $stmt->execute([$_SESSION['email']]); 
                $reserve = $stmt->rowCount();

                $stmt2 = $pdo->prepare("SELECT tipe FROM users WHERE email = ?"); 
                $stmt2->execute([$_SESSION['email']]); 
                $user = $stmt2->fetch();

                echo '<div class="editdel">';
                echo '  <div class="edit">';
                if($reserve >= 1 || $user['tipe'] === "admin"){
                    echo '      <div class = "bx" style="border: 2px solid brown;padding-top: 12px;">';
                    echo '          <a href="Reserve_Manage.php">';
                    echo '              <ion-icon name="create-sharp"></ion-icon>';
                    echo '              <span>Manage Your Reservation</span>';
                    echo '          <a>';
                    echo '      </div>';
                }else{
                    echo '      <div class = "bx" style="border: 2px solid brown;padding-top: 12px; cursor:pointer;" onclick="warning()"`>';
                    echo '          <ion-icon name="create-sharp"></ion-icon>';
                    echo '          <span>Manage Your Reservation</span>';
                    echo '      </div>';
                }
                echo '  </div>';
                echo '</div>';

            }catch(PDOException $e){
                die($e->getMessage());
            }
        ?>

        <div class="outer-wrapper">
            <div class="table-wrapper">
            <table id="emp-table" style="padding-top: 10px">
                <thead>
                    <tr>
                        <th abbr = 1  style="width: 180px;">Dine Time
                            <select class="table-filter" onchange="filter_rows()">
                                <option value="all">All Value</option>
                            </select>
                        </th>
    
                        <th abbr = 2 style="width: 220px;">Branch Store
                            <select class="table-filter" onchange="filter_rows()">
                                <option value="all">All Value</option>
                            </select>
                        </th>
                        
                        <th abbr = 3>Nama Pemesan</th>
    
                        <th abbr = 4 style="width: 100px;">Kontak Pemesan</th>
    
                        <th abbr = 5 style="width: 100px;">Amount Person</th>
    
                        <th abbr = 6 style="width: 180px;">Dinning Area
                            <select class="table-filter" onchange="filter_rows()">
                                <option value="all">All Value</option>
                            </select>
                        </th>
    
                        <th abbr = 7 id="kinda" style="width: 250px;">Message</th>
                        <th abbr = 8 style="width: 8px;">Kode Booking</th>   
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td>10:00 WIB - 11.00 WIB</td>
                        <td>Cianjur</td>
                        <td>Brian</td>
                        <td>0895887861020</td>
                        <td>2</td>
                        <td>Indoor View</td>
                        <td>Saya ingin tempat duduk di pojok ruangan.</td>
                        <td>019A1</td>
                    </tr>
                    <tr>
                        <td>11:00 WIB - 12.00 WIB</td>
                        <td>Tebet</td>
                        <td>YoungK</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Indoor View</td>
                        <td>-</td>
                        <td>029A1</td>
                    </tr>
                    <tr>
                        <td>12:00 WIB - 13.00 WIB</td>
                        <td>Cawang</td>
                        <td>Bob</td>
                        <td>0888888888888</td>
                        <td>3</td>
                        <td>Outdoor View</td>
                        <td>-</td>
                        <td>039B1</td>
                    </tr>
                    <tr>
                        <td>13:00 WIB - 14.00 WIB</td>
                        <td>Cirebon</td>
                        <td>Yoon Park</td>
                        <td>0888888888888</td>
                        <td>1</td>
                        <td>Outdoor View</td>
                        <td>-</td>
                        <td>049B1</td>
                    </tr>
                    <tr>
                        <td>14:00 WIB - 15.00 WIB</td>
                        <td>Malang - Soehat</td>
                        <td>Lisa</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Indoor View</td>
                        <td>-</td>
                        <td>059A1</td>
                    </tr>
                    <tr>
                        <td>15:00 WIB - 16.00 WIB</td>
                        <td>Braga - Bandung</td>
                        <td>Mama</td>
                        <td>0888888888888</td>
                        <td>5</td>
                        <td>Indoor View</td>
                        <td>Pastikan meja bersih, klien saya benci kotor.</td>
                        <td>069A1</td>
                    </tr>
                    <tr>
                        <td>17:00 WIB - 18.00 WIB</td>
                        <td>Bogor</td>
                        <td>Jae</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Indoor View</td>
                        <td>-</td>
                        <td>079A1</td>
                    </tr>
                    <tr>
                        <td>19:00 WIB - 20.00 WIB</td>
                        <td>Cawang</td>
                        <td>Jay</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Indoor View</td>
                        <td>Test Test Test</td>
                        <td>039A1</td>
                    </tr>
                    <tr>
                        <td>20:00 WIB - 21.00 WIB</td>
                        <td>Cawang</td>
                        <td>Tiff</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Outdoor View</td>
                        <td>-</td>
                        <td>039B2</td>
                    </tr>
                    <tr>
                        <td>21:00 WIB - 22.00 WIB</td>
                        <td>Cianjur</td>
                        <td>Nick</td>
                        <td>0888888888888</td>
                        <td>4</td>
                        <td>Indoor View</td>
                        <td>-</td>
                        <td>019A2</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <section class="bottom">
            <div class="row-fot">
                <div class="col-fot">
                    <img src="./Image/logo5.png" alt="" class="logo-fot">
                    <ul>
                        <li><p>TasteManhatta adalah restauran yang didirikan oleh Mr. Pasya Brattarani sejak tahun 1997.
                            Kami memulai bisnis dari suatu kota kecil Cianjur, lalu mengekspansinya hingga kini kami
                            memiliki 7 cabang yang tersebar di Pulau Jawa. 
                        </p></li>
                        <li><a href="Menu.php"></a></li>
                    </ul>
                </div>
                <div class="col-fot">
                    <h3>Head Office</h3>
                    <ul>
                        <li>
                            <p>Jalan Dr. Muwardi No.155
                            <p>Bojongherang, Kec. Cianjur</p>
                            <p>Kabupaten Cianjur, Jawa Barat 43216</p>
                            <div class="contact">
                                <p class="mail-id">TasteManhatta@gmail.com</p>
                                <p>(0263) 888661</p>
                                <p>+62 - 89888762135</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-fot">
                    <h3>Our Service</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
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
    <script src="js/ScriptReserve.js"></script>
    
    <script>
        window.onload = () => {
            console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
        };
        getUniqueValuesFromColumn();
    </script>

    <script>
        function warning(){
            alert ("Anda tidak mempunyai daftar reservasi pada database kami!");
        }
    </script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>