<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial | TasteManhatta</title>

    <!-- add icon link -->
    <link rel="icon" href="Image/TasteManhattaLogo.png">
    <!-- Link Custom CSS -->
    <link rel="stylesheet" href="Style.css">
    <!-- Link Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Flamenco:wght@300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body class="sajian offer test">

    <!-- Cek Login -->
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        echo '<script> alert("Harap masuk terlebih dahulu untuk melihat testimoni!");</script>';
        echo '<script>window.location.href = "Login.php";</script>';
    }
    ?>

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

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

    <!-- Make A Reservation -->
    <a href="Reserve.php" class="hero-btn has-after">
        <img src="./Image/icon-book-table-3.png" width="100" height="70" alt="book-table icon">
        <span class="label-2 text-center span" id="simbol-reserve" style="padding-left: 24px;">Make A <br> Reservation</span>
    </a>

    <!-- Reservasi -->
    <main>
        <br><br><br><br>

        <h2 class="text-center2" id="special">All Testimonals</h2>
        <hr>

        <!-- Declare Admin User -->
        <?php
        include('config_db.php');
        try {
            $pdo = new PDO($dsn, $db_username, $db_password, $opt);
            $stmt2 = $pdo->prepare("SELECT tipe FROM users WHERE email = ?");
            $stmt2->execute([$_SESSION['email']]);
            $user = $stmt2->fetch();
        ?>

            <!-- Search Box dan Input Testimoni -->

            <div class="combine">
                <!-- Input Question -->
                <?php
                if ($user['tipe'] === "user") {
                    echo '<div class="question">';
                    echo '  <div style="border: 2px solid brown;padding-top: 12px;"><a href="FormTestimoni.php"><span>Input Your Testimoni Here!</span></a></div>';
                    echo '</div>';
                } else {
                    echo '<div class="question" onclick="warning()" style="cursor:pointer">';
                    echo '  <div style="border: 2px solid brown;padding-top: 12px;"><span>Input Your Testimoni Here!</span></div>';
                    echo '</div>';
                }
                ?>

                <!-- Search Bar -->
                <!-- <div class="cari-container" style="margin-top: 10px;">
                    <div class="search-box" style="border: 2px solid brown;">
                        <input type="text" class="input" id="authorSearch" placeholder="Search...">
                        <div class="btn_common">
                            <ion-icon name="search-outline" class="fas" style="font-size: 40px;margin-top: 8px;margin-left: 8px;"></ion-icon>
                        </div>
                    </div>
                </div> -->

                <input type="text" id="searchInput" placeholder="Cari...">
                <button type="button" onclick="searchTable()">Cari</button>

            </div>

            <!-- Halaman Testimoni Admin -->

            <?php
            if ($user['tipe'] === "admin") {
            ?>
                <div class="manage">
                    <p>Testimoni Management oleh Admin: <?= $_SESSION['email'] ?></p>
                </div>
            <?php
            }
            ?>

            <!-- Table Testimonial -->
            <div class="outer-wrapper">
                <div class="table-wrapper">
                    <table id="emp-table" style="padding-top: 10px">
                        <thead>
                            <tr>
                                <th abbr=1 style="width: 180px;">Branch Store
                                    <select class="table-filter" onchange="filter_rows()">
                                        <option value="all">All Value</option>
                                    </select>
                                </th>

                                <th abbr=2 style="width: 220px;">Mekanisme Order
                                    <select class="table-filter" onchange="filter_rows()">
                                        <option value="all">All Value</option>
                                    </select>
                                </th>

                                <th abbr=3 style="width: 200px;">Nama Pemesan</th>

                                <th abbr=4 style="width: 200px;">Kontak Pemesan</th>

                                <th abbr=5 style="width: 150px;">Subject</th>

                                <th abbr=6 style="width: 350px;">Review</th>

                                <th abbr=7 style="width: 100px;">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->prepare("SELECT * FROM `testimoni`");
                            $stmt->execute();

                            if ($stmt->rowCount() < 1) {
                                for ($i = 0; $i < 5; $i++) {
                            ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php
                                }
                            } else {
                                ?>
                                <?php foreach ($stmt as $row) : ?>
                                    <tr>
                                        <td><?= $row['branch_store'] ?></td>
                                        <td><?= $row['tipe_booking'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['subject'] ?></td>
                                        <td class="line"><?= $row['review'] ?></td>
                                        <?php
                                        if ($user['tipe'] === "user") {
                                            if ((isset($_SESSION['email']) && ($_SESSION['email'] === $row['email']))) {
                                                echo '<td class="act">';
                                                echo "  <a href='Testimoni_edit.php?code_testi=", $row["code_testi"], "&nama=", $row["nama"], "&email=", $row["email"], "&branch_store=", $row["branch_store"], "&tipe_booking=", $row["tipe_booking"], "&subject=", $row["subject"], "&review=", $row["review"], "'><ion-icon name='create-sharp'></ion-icon></a>";
                                                echo "  <a href='Testimoni_delete.php?code_testi=", $row["code_testi"], "'><ion-icon name='close-circle-sharp'></ion-icon></a>";
                                                echo '</td>';
                                            } else if (!isset($_SESSION['email'])) {
                                                echo '<td></td>';
                                            } else {
                                                echo '<td></td>';
                                            }
                                        } else {
                                            echo '<td class="act">';
                                            echo "  <a href='mailto:", $row['email'], "?subject=Konfirmasi%20Testimoni&body=Perkenalkan%20kami%20Team%20Admin%20yang%20akan%20follow%20up%20lebih%20lanjut%20atas%20testimoni%20yang%20Anda%20berikan.%20Sebelumnya,%20...'><ion-icon name='mail-sharp'></ion-icon></a>";
                                            echo '</td>';
                                        }

                                        ?>
                                    <tr>
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
    <script src="js/ScriptSearch.js"></script>
    <script src="js/ScriptTestimoni.js"></script>
    <script src="js/Testimoni.js"></script>
    <script>
        window.onload = () => {
            console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
        };
        getUniqueValuesFromColumn();
    </script>

    <script>
        function warning() {
            alert("Admin tidak dapat melakukan penambahan testimoni!");
        }
    </script>

    <!-- instal ion-icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>