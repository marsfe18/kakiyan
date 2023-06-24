<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservation | TasteManhatta</title>

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

    <!-- Cek Login atau Belum -->
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        echo '<script> alert("Harap masuk terlebih dahulu untuk reservasi!");</script>';
        echo '<script>window.location.href = "Login.php";</script>';
    }
    ?>

    <!-- Preloader -->


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
    <main>
        <br><br><br><br>

        <h2 class="text-center2" id="special">Manage Reservation</h2>
        <hr>

        <!-- Search Box -->

        <!-- <div class="cari-container">
            <div class="search-box" style="border: 2px solid brown;">
                <input type="text" class="input" id="authorSearch" placeholder="Search...">
                <div class="btn_common">
                    <ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;"></ion-icon>
                </div>
            </div>
        </div> -->

        <input type="text" id="searchInput" placeholder="Cari...">
        <input type="date" id="searchDate">
        <button type="button" onclick="searchTable()">Cari</button>



        <!-- Connect Database dan Ambil Data-->
        <?php
        include('config_db.php');
        try {
            $pdo = new PDO($dsn, $db_username, $db_password, $opt);
            $stmt = $pdo->prepare("SELECT tipe FROM users WHERE email = ?");
            $stmt->execute([$_SESSION['email']]);
            $user = $stmt->fetch();
        ?>
            <?php
            if ($user['tipe'] === "user") {
            ?>
                <div class="manage">
                    <p>Pesanan atas Email: <?= $_SESSION['email'] ?></p>
                </div>
            <?php
            } else {
            ?>
                <div class="manage">
                    <p>Reserve Management oleh Admin: <?= $_SESSION['email'] ?></p>
                </div>
            <?php
            }
            ?>

            <div class="outer-wrapper">
                <div class="table-wrapper">
                    <table id="emp-table" style="padding-top: 10px">
                        <thead>
                            <tr>
                                <th abbr=1 style="width: 100px;">Date</th>
                                <th abbr=2 style="width: 135px;">Dine Time</th>
                                <th abbr=3 style="width: 150px;">Branch Store</th>
                                <th abbr=4 style="width: 100px;">Nama Pemesan</th>
                                <th abbr=5 style="width: 100px;">Kontak Pemesan</th>
                                <th abbr=6 style="width: 50px;">Amount Person</th>
                                <th abbr=7 style="width: 100px;">Dinning Area</th>
                                <th abbr=8 id="kinda" style="width: 200px;">Message</th>
                                <th abbr=9 style="width: 50px;">Kode Booking</th>
                                <th abbr=10 style="width: 8px;">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $session = $_SESSION['email'];
                            if ($user['tipe'] === "user") {
                                $stmt2 = $pdo->prepare("SELECT * FROM `reserve` WHERE email = ?");
                                $stmt2->bindValue(1, $_SESSION['email']);
                                $stmt2->execute();
                            } else {
                                $stmt2 = $pdo->prepare("SELECT * FROM `reserve`");
                                $stmt2->execute();
                            }

                            ?>
                            <?php
                            if ($stmt2->rowCount() < 1) {
                                for ($i = 0; $i < 5; $i++) {
                            ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align: center"></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align: center"></td>
                                        <?php
                                        echo '<td class="act">';
                                        echo '</td>';
                                        ?>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <?php foreach ($stmt2 as $row) : ?>
                                    <tr>
                                        <td><?= $row['date_book'] ?></td>
                                        <td><?= $row['slot_time'] ?></td>
                                        <td><?= $row['branch_store'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td style="text-align: center"><?= $row['person'] ?></td>
                                        <td><?= $row['area'] ?></td>
                                        <td><?= $row['message'] ?></td>
                                        <td style="text-align: center"><?= $row['booking_code'] ?></td>
                                        <?php
                                        echo '<td class="act">';
                                        echo "  <a href='Reserve_edit.php?booking_code=", $row["booking_code"], "&slot_time=", $row["slot_time"], "&branch_store=", $row["branch_store"], "&nama=", $row["nama"], "&email=", $row["email"], "&area=", $row["area"], "&message=", $row["message"], "&person=", $row["person"], "&date_book=", $row["date_book"], "'><ion-icon name='create-sharp'></ion-icon></a>";
                                        echo "  <a href='Reserve_delete.php?booking_code=", $row["booking_code"], "'><ion-icon name='close-circle-sharp'></ion-icon></a>";
                                        if ($user['tipe'] === "admin") {
                                            echo "  <a href='mailto:", $row['email'], "?subject=Pemberitahuan%20Perubahan&body=Halo,%20berikut%20kami%20sampaikan%20perubahan...'><ion-icon name='mail-sharp'></ion-icon></a>";
                                        }
                                        echo '</td>';
                                        ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
            $pdo = NULL;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        ?>
    </main>

    <!-- Footer -->
    <?php include('footer.php'); ?>

    <!-- Custom Script -->
    <script src="js/Script.js"></script>
    <script src="js/reserve_manage.js"></script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>