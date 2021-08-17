-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 02:41 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `framework`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `spk_id` int(11) NOT NULL,
  `platNomor` varchar(254) NOT NULL,
  `custName` varchar(254) NOT NULL,
  `custAddress` varchar(254) NOT NULL,
  `mechanic` varchar(254) NOT NULL,
  `kendaraan` varchar(254) NOT NULL,
  `sa` varchar(254) NOT NULL,
  `task1` varchar(254) NOT NULL,
  `harga1` int(11) NOT NULL,
  `task2` varchar(254) NOT NULL,
  `harga2` int(11) NOT NULL,
  `totalBayar` int(11) NOT NULL,
  `createdAt` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`spk_id`, `platNomor`, `custName`, `custAddress`, `mechanic`, `kendaraan`, `sa`, `task1`, `harga1`, `task2`, `harga2`, `totalBayar`, `createdAt`) VALUES
(22, 'L1945AG', 'Mujiono', 'Raya mojo no 56', 'Harianto ', 'Xenia 1.3', 'Malik', 'ganti oli', 50000, 'tuneup', 100000, 150000, '12 August 2021'),
(23, 'L1945AG', 'Sari', 'Raya Mojo no 60', 'Sulaiman ', 'Avanza veloz', 'Sugeng', 'ganti oli', 90000, 'tap olo', 99999, 189999, '12 August 2021'),
(24, 'B 1234 LO', 'Imam Darto', 'Roti', 'Sulaiman ', 'Jazz ', 'Tejo', 'kshakjdh', 872897, 'jsdhkjh', 97894237, 98767134, '12 August 2021'),
(25, 'L 2021 IN', 'Imam Darto', 'Raya mojo no 56', 'Sulaiman ', 'Xenia 1.3', 'Tejo', 'ganti oli', 50000, 'servis rem ', 2000000, 2050000, '12 August 2021'),
(26, 'L1758AA', 'Sugik', 'Raya mojo no 56', 'Harianto ', 'Avanza veloz', 'Malik', 'ganti oli', 50000, 'tuneup', 100000, 150000, '12 August 2021');

-- --------------------------------------------------------

--
-- Table structure for table `mekanik`
--

CREATE TABLE `mekanik` (
  `id_mekanik` int(11) NOT NULL,
  `name_mekanik` varchar(254) NOT NULL,
  `divisi` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mekanik`
--

INSERT INTO `mekanik` (`id_mekanik`, `name_mekanik`, `divisi`) VALUES
(196008, 'Harianto', 'Foreman'),
(197001, 'Faisal', 'Service'),
(197002, 'Sulaiman', 'Service'),
(197003, 'Adi Juliari', 'Service');

-- --------------------------------------------------------

--
-- Table structure for table `req_order`
--

CREATE TABLE `req_order` (
  `id_req_order` int(11) NOT NULL,
  `id_spk` int(11) NOT NULL,
  `nopol` varchar(254) NOT NULL,
  `part1` varchar(254) NOT NULL,
  `qty1` int(11) NOT NULL,
  `perPcs1` int(11) NOT NULL,
  `total1` int(11) NOT NULL,
  `part2` varchar(254) NOT NULL,
  `qty2` int(11) NOT NULL,
  `perPcs2` int(11) NOT NULL,
  `total2` int(11) NOT NULL,
  `part3` varchar(254) NOT NULL,
  `qty3` int(11) NOT NULL,
  `perPcs3` int(11) NOT NULL,
  `total3` int(11) NOT NULL,
  `akumulasi_total` int(11) NOT NULL,
  `tgl_req_order` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_order`
--

INSERT INTO `req_order` (`id_req_order`, `id_spk`, `nopol`, `part1`, `qty1`, `perPcs1`, `total1`, `part2`, `qty2`, `perPcs2`, `total2`, `part3`, `qty3`, `perPcs3`, `total3`, `akumulasi_total`, `tgl_req_order`) VALUES
(30, 22, 'L1945AG ', 'Carbon Cleaner ', 1, 160000, 160000, 'Carbjet ', 1, 125000, 125000, 'Engine Flush ', 1, 60000, 60000, 345000, '12 August 2021'),
(31, 24, 'B 1234 LO ', 'Busi Avanza/Xenia 1.3 ', 1, 80000, 80000, 'Oli Mesin 10w-40 ', 1, 90000, 90000, 'Engine Flush ', 1, 20000, 20000, 190000, '12 August 2021'),
(32, 23, 'L1945AG ', 'Oli Mesin 10w-40 ', 4, 80000, 320000, 'Carbjet ', 1, 120000, 120000, 'Carbon Cleaner ', 1, 150000, 150000, 590000, '12 August 2021'),
(33, 23, 'L1945AG ', 'Carbjet ', 1, 160000, 160000, 'Breake Cleaner ', 1, 90000, 90000, 'Engine Flush ', 1, 20000, 20000, 270000, '12 August 2021'),
(34, 25, 'L 2021 IN ', 'Oli Mesin 10w-40 ', 4, 80000, 320000, 'Busi Avanza/Xenia 1.3 ', 4, 25000, 100000, 'Carbjet ', 1, 120000, 120000, 540000, '12 August 2021'),
(35, 26, 'L1758AA ', 'Oli Mesin 10w-40 ', 4, 80000, 320000, 'Carbon Cleaner ', 1, 160000, 160000, 'Carbjet ', 1, 120000, 120000, 600000, '12 August 2021');

--
-- Triggers `req_order`
--
DELIMITER $$
CREATE TRIGGER `penjualan_barang` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty1
    WHERE name_part = NEW.part1;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualan_barang_2` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty2
    WHERE name_part = NEW.part2;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `penjualan_barang_3` AFTER INSERT ON `req_order` FOR EACH ROW BEGIN 
	UPDATE stock_part SET t_part= t_part - NEW.qty3
    WHERE name_part = NEW.part3;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `id` int(11) NOT NULL,
  `plat_number` varchar(254) NOT NULL,
  `cust_name` varchar(254) NOT NULL,
  `cust_address` varchar(254) NOT NULL,
  `mekanik` varchar(254) NOT NULL,
  `type_kendaraan` varchar(254) NOT NULL,
  `ser_advisor` varchar(254) NOT NULL,
  `desc1` varchar(254) NOT NULL,
  `price1` int(11) NOT NULL,
  `desc2` varchar(254) NOT NULL,
  `price2` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`id`, `plat_number`, `cust_name`, `cust_address`, `mekanik`, `type_kendaraan`, `ser_advisor`, `desc1`, `price1`, `desc2`, `price2`, `total`, `created_at`) VALUES
(26, 'L1758AA', 'Sugik', 'Raya mojo no 56', 'Harianto ', 'Avanza veloz', 'Malik', 'ganti oli', 50000, 'tuneup', 100000, 150000, '12 August 2021');

--
-- Triggers `spk`
--
DELIMITER $$
CREATE TRIGGER `InsertSpk` AFTER INSERT ON `spk` FOR EACH ROW insert into history (
    spk_id,
    platNomor,
    custName,
    custAddress,
    mechanic,
    kendaraan,
    sa,
    task1,
    harga1,
    task2,
    harga2,
    totalBayar,
    createdAt)
    VALUES (
   NEW.id,
        NEW.plat_number,
    NEW.cust_name,
    NEW.cust_address,
     NEW.mekanik,
     NEW.type_kendaraan,
    NEW.ser_advisor,
     NEW.desc1,
     NEW.price1,
     NEW.desc2,
    NEW.price2,
    NEW.total,
    NEW.created_at)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_part`
--

CREATE TABLE `stock_part` (
  `kd_part` int(11) NOT NULL,
  `name_part` varchar(254) NOT NULL,
  `hr_part` int(11) NOT NULL,
  `t_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_part`
--

INSERT INTO `stock_part` (`kd_part`, `name_part`, `hr_part`, `t_part`) VALUES
(12, 'Carbon Cleaner', 150000, 4),
(13, 'Busi Avanza/Xenia 1.3', 25000, 16),
(14, 'Oli Mesin 10w-40', 80000, 12),
(15, 'Filter Udara Xenia 1.3', 200000, 10),
(16, 'Carbjet', 120000, 4),
(17, 'Breake Cleaner', 90000, 7),
(18, 'Breakepad FR Xenia/Avanza 1.3', 250000, 6),
(19, 'Engine Flush', 60000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'adi', 'adi@gmail.com', 12345),
(2, 'adam', 'adam@gmail.com', 5758);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`spk_id`);

--
-- Indexes for table `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`id_mekanik`);

--
-- Indexes for table `req_order`
--
ALTER TABLE `req_order`
  ADD PRIMARY KEY (`id_req_order`),
  ADD KEY `fk_spk` (`id_spk`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_part`
--
ALTER TABLE `stock_part`
  ADD PRIMARY KEY (`kd_part`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `req_order`
--
ALTER TABLE `req_order`
  MODIFY `id_req_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `req_order`
--
ALTER TABLE `req_order`
  ADD CONSTRAINT `fk_spk` FOREIGN KEY (`id_spk`) REFERENCES `history` (`spk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
