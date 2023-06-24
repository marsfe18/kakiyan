-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 09:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectiyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `jenis`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Australia Beef Burger Tender', 'steak', 30000, 'burger-1.png', 'Beef burger yang disajikan dengan daging sapi impor Australia. Burger disajikan dengan kentang goreng dan sekaleng cola yang dapat membantu mengenyangkan saat Anda kelaparan.'),
(4, 'test3', 'pizza', 99000, 'pizza-1.png', 'adsfadsf'),
(5, 'test3', 'pasta', 99000, 'pizza-1.png', 'adsfadsf'),
(6, 'test3', 'snack', 99000, 'pizza-1.png', 'adsfadsf'),
(7, 'test3', 'beverage', 99000, 'pizza-1.png', 'adsfadsf'),
(8, 'test3', 'pizza', 99000, 'pizza-1.png', 'adsfadsf');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `asli` double DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `deskripsi2` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `nama`, `asli`, `diskon`, `deskripsi`, `deskripsi2`, `gambar`) VALUES
(1, 'Premium Steak Package Value', 1331100, 9090, 'Pas untuk kalian yang datang berdua dan ingin menikmati steak eksklusif dengan harga terjangkau dan murah. Hanya dengan Rp99.999,00 saja Anda bisa menikmati Beef Wagyu Premium Steak dan Beef Tenderloin Premium Steak sekaligus!.', 'Beef Wagyu Premium Steak, Beef Tenderloin Premium Steak', 'offer-1-fix.png');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `booking_code` varchar(9) NOT NULL,
  `slot_time` varchar(50) NOT NULL,
  `branch_store` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `message` text DEFAULT '-',
  `person` int(11) NOT NULL,
  `date_book` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`booking_code`, `slot_time`, `branch_store`, `nama`, `email`, `area`, `message`, `person`, `date_book`) VALUES
('EKUV6522', '12.00 WIB - 13.00 WIB', 'Bogor - Sukasari', 'Richard Madden', 'rich.madden@foe.stis.ac.id', 'Indoor View', 'mamama', 2, '2023-06-23'),
('HSKQ1304', '18.00 WIB - 19.00 WIB', 'Jakarta Timur - Cawang', 'Richard Madden', 'rich.madden@foe.stis.ac.id', 'Indoor View', 'sadfrgthjk', 3, '2023-06-15'),
('MFBH4215', '12.00 WIB - 13.00 WIB', 'Jakarta Timur - Cawang', 'mars', 'adsfdasf@gmail.com', 'Indoor View', 'adsf', 10, '2023-06-13'),
('MYPR5332', '19.00 WIB - 20.00 WIB', 'Jakarta Selatan - Tebet', 'Richard Madden', 'rich.madden@foe.stis.ac.id', 'Outdoor View', 'asdfgb', 2, '2023-06-13'),
('TSQN5410', '17.00 WIB - 18.00 WIB', 'Head Resto - Cianjur', 'Richard Madden', 'rich.madden@foe.stis.ac.id', 'Outdoor View', 'asdfghj', 3, '2023-06-23'),
('UUFX7756', '13.00 WIB - 14.00 WIB', 'Malang - Soehat', 'Brian Kang', 'kang.brian@foe.stis.ac.id', 'Indoor View', 'xcfvghj', 3, '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `code_testi` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `branch_store` varchar(50) NOT NULL,
  `tipe_booking` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`code_testi`, `nama`, `email`, `branch_store`, `tipe_booking`, `subject`, `review`) VALUES
(6758, 'Brian Kang', 'kang.brian@foe.stis.ac.id', 'Bogor - Sukasari', 'Takeaway', 'Makanan Saya Tidak Enak', 'Apakah yang dimaksud dengan hoisting? Jelaskan dengan contoh Hoisting pada JavaScript adalah perilaku di mana variabel dan deklarasi fungsi dapat dipindahkan ke bagian atas lingkup masing-masing selama fase kompilasi atau eksekusi.'),
(9981, 'Richard Madden', 'rich.madden@foe.stis.ac.id', 'Jakarta Selatan - Tebet', 'Booking Dine In', 'Sensasi Berkesan Makan di Luar Ruangan', 'TasteManhatta Jakarta memberikan ambience yang lumayan, sayangnya untuk view outdoor-nya aga sedikit off nih untuk saya. Asap bertaburan dimana-mana membuat suasana makan hari ini disertai debu. Secara keseluruhan sajian enak, pelayan menyenangkan, sayangnya hygiene kurang.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `domisili` varchar(50) NOT NULL,
  `tipe` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `uname`, `email`, `password`, `phone`, `birth`, `gender`, `domisili`, `tipe`) VALUES
('mars', 'marsayganteng', 'adsfdasf@gmail.com', '25d55ad283aa400af464c76d713c07ad', '234234', '2023-06-12', 'Male', 'Jakarta Timur', 'user'),
('Iis Khairun Nisa', 'isskhairun', 'iis@gmail.com', '3b4816436be605f7555ed7390d08eb55', '081335243123', '1996-05-14', 'Female', 'Not Same', 'user'),
('Brian Kang', 'margoBri144', 'kang.brian@foe.stis.ac.id', 'ce972becb4cff50cafb5768b988cf5c4', '087866088176', '1993-03-11', 'Male', 'Not Same', 'user'),
('Miyawaki Sakura', 'sakuraaayou', 'miyawaki.kura@foe.stis.ac.id', 'a0346f03804b9453ec50b71d1a4300dd', '082866088176', '1997-08-12', 'Female', 'Jakarta Selatan', 'user'),
('Richard Madden', 'richmadden', 'rich.madden@foe.stis.ac.id', '9b2d465bce62231339a61ad7329c652a', '087866088176', '1988-07-17', 'Male', 'Malang', 'user'),
('Rechtiana Putri Arini', 'rechtiana170702', 'rparini17@gmail.com', 'ce43a0a9a8ae01aa86f96cd792ecab6b', '0895807861040', '2002-07-17', 'Female', 'Jakarta Timur', 'admin'),
('Park Sungjin', 'bobsungjinnni', 'sungjin.park@foe.stis.ac.id', 'fe26f8341367861a3601a85a1ea20741', '081335843682', '1993-07-17', 'Male', 'Cirebon', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`booking_code`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`code_testi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
