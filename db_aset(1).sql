-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 06:55 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id_aset` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_prioritas` int(11) NOT NULL,
  `id_ekonomis` int(11) NOT NULL,
  `id_kondisi_aset` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `masuk` date NOT NULL,
  `habis` date NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id_aset`, `id_divisi`, `id_prioritas`, `id_ekonomis`, `id_kondisi_aset`, `nama_aset`, `merk`, `type`, `serial_number`, `masuk`, `habis`, `harga`, `keterangan`, `status`) VALUES
(1, 1, 3, 4, 4, 'Laptop Asus Rog Strix 2022', 'ASUS', 'ROG STRIX', 'ASRGSTRX2022', '2023-02-12', '2027-02-12', 18500000, 'Keperluan untuk rendering Project 3D Meikarta.', 1),
(2, 2, 3, 2, 2, 'Mouse Fantech X16', 'FANTECH', 'MOUSE GAMING', 'MFX162022', '2023-02-01', '2026-02-01', 250000, 'Mouse Untuk Kerperluan di Ruang HI.', 1),
(3, 5, 4, 6, 3, 'Laptop Lenovo Thinkpad X14', 'LENOVO', 'Thinkpad X14', 'LNOVTHXPX142002', '2023-02-15', '2027-02-15', 6500000, 'Laptop untuk monitoring marketing project.', 1),
(4, 4, 2, 7, 1, 'PC All In One (Touch Screen)', 'AIO', 'PC ALL IN ONE', 'PCAIOTS00132', '2023-02-22', '2025-02-22', 8900000, '', 1),
(5, 1, 4, 5, 4, 'Printer Epson T11', 'EPSON', 'T11', 'PEPPSST11', '2023-02-02', '2027-02-02', 1200000, 'Penting buat print dokumen project 2023', 1),
(6, 2, 3, 5, 2, 'e-KTP Reader Identik', 'INTI', 'Biru', '201800369\r\n', '2021-02-18', '2026-02-18', 1800000, '', 1),
(7, 2, 3, 5, 2, 'e-KTP Reader Identik', 'INTI', 'Biru', '201800369\r\n', '2021-02-18', '2026-02-18', 1800000, '', 1),
(8, 2, 3, 5, 2, 'e-KTP Reader Identik', 'INTI', 'Biru', '201800369\r\n', '2022-02-18', '2027-02-18', 1800000, '', 1),
(9, 2, 3, 5, 2, 'e-KTP Reader Identik', 'INTI', 'Biru', '201800369\r\n', '2020-02-18', '2025-02-18', 1800000, '', 1),
(10, 2, 3, 5, 2, 'e-KTP Reader Identik', 'INTI', 'Biru', '201800369\r\n', '2019-02-18', '2024-02-18', 1800000, '', 1),
(11, 1, 3, 7, 1, 'Laptop Dell Inspiro 3458\r\n', 'DELL', 'Inspiro 3458', 'JZC9J52\r\n', '2016-02-27', '2023-02-27', 5600000, '', 1),
(12, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', '01R3500722\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(13, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', '615992-01R3500737\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(14, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', 'CP615992\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(15, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', '615992-01R35007xx\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(16, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', '615992-01R3500752 (760)\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(17, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', 'JZC9J52\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(18, 1, 3, 7, 1, 'Laptop Fujitsu LH532\r\n', 'FUJITSU', 'LH532', 'JZC9J52\r\n', '2016-02-27', '2023-02-27', 7600000, '', 1),
(19, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(20, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(21, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(22, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(23, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(24, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(25, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(26, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(27, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(28, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(29, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(30, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(31, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(32, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(33, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(34, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(35, 4, 2, 3, 2, 'MPOS', 'INTI', 'IP001', 'G22175207919', '2021-02-24', '2024-02-24', 800000, '', 1),
(36, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(37, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(38, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(39, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(40, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(41, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(42, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(43, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(44, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(45, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(46, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(47, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(48, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(49, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(50, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(51, 4, 3, 5, 2, 'PC All In One', 'LENOVO', 'MT-M 10BB-A06IF', 'PC0758C8', '2019-02-21', '2024-02-21', 4500000, 'PC Kantor', 1),
(52, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'F9PTAC009053', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(53, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'F9PTAC009088', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(54, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'F9PTAC008995', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(55, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'F9PTAC009083', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(56, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'F9PTAC009077', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(57, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'HPPTCJ022698', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(58, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'H4PTCJ020991', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(59, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'H4PTCJ021052', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(60, 5, 3, 4, 2, 'PC All In One (Touch Screen)', 'ASUS', 'ET1620i', 'H4PTCJ021719', '2020-02-01', '2024-02-01', 7800000, 'Pc Untuk Render Projek', 1),
(61, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'KL003894\r\n', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(62, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'KL003790', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(63, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'KL003819', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(64, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'KL004346', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(65, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'VX112834', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(66, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'VX072233', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(67, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'VX071942', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(68, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'VX071934', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(69, 5, 1, 2, 2, 'Printer Thermal', 'Fujitsu', 'FP2000', 'VX071952', '2023-02-01', '2025-02-01', 1280000, 'Printer kantor', 1),
(70, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2197808022671', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(71, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2197808039501', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(72, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2197808022618\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(73, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '21717030175047\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(74, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2197808022671', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(75, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '216C843001503\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(76, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2171160001749\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(77, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2179032005196\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(78, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2178589016290\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(79, 3, 2, 2, 3, 'Switch Hub 5 Port', 'TP LINK', 'TL-SF1005D', '2178589016269\r\n', '2023-02-14', '2025-02-14', 400000, 'Rusak', 1),
(80, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150087', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(81, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150076\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(82, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150060\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(83, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150086\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(84, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150082\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(85, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150083\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(86, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150088\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(87, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150085\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(88, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150090\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(89, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101150084\r\n', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(90, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2101660087', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(91, 2, 2, 6, 4, 'Mini PC AIO', 'Industrial Tablet PC', 'F11APL', 'F11APL33A2198750087', '2020-06-10', '2026-06-10', 5600000, 'Pc Rusak', 1),
(92, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843001503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(93, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843001333\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(94, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843056503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(95, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843941503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(96, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843341503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(97, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843991503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(98, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '2165843001503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(99, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C872001503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(100, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843091503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(101, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C843431503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(102, 1, 4, 2, 1, 'Switch Hub 8 Port', 'TP LINK\r\n', 'TL-SF1008D\r\n', '216C812001503\r\n', '2023-02-20', '2025-02-20', 900000, 'Baru Beli', 1),
(103, 2, 4, 5, 2, 'Macbook Pro 2023', 'Apple', 'Macbook PRO', 'MCP2022312', '2023-02-21', '2027-02-21', 19000000, 'Perangkat untuk Monitoring Project zimbra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Admin', 'Admin untuk data master. dan bisa Mengakses semua Menu'),
(2, 'Spv. Material Management', 'Untuk Melakukan  Pengajuan Pengadaan serta memanage Aset.'),
(3, 'Kepala Divisi Procurement', 'Untuk Melakukan Pesetujuan Pengajuan pengadaan,perbaikan dan Penggantian Aset.');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `agu_id` int(11) NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`agu_id`, `group_id`, `user_id`) VALUES
(1, 1, 4),
(15, 2, 19),
(16, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'deranderiyanaf', 1, '2023-01-10 01:04:56', 0),
(2, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 01:10:04', 1),
(3, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 01:27:38', 1),
(4, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 02:10:59', 1),
(5, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 02:21:09', 1),
(6, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 03:15:42', 1),
(7, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 03:17:00', 1),
(8, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 03:18:52', 1),
(9, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 03:20:06', 1),
(10, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 19:36:42', 1),
(11, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:00:36', 1),
(12, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:01:24', 1),
(13, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:03:32', 1),
(14, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:03:50', 1),
(15, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:05:11', 1),
(16, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 20:08:40', 1),
(17, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 21:02:39', 1),
(18, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 21:02:57', 1),
(19, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 21:17:01', 1),
(20, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 21:52:54', 1),
(21, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 22:40:49', 1),
(22, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 22:46:02', 1),
(23, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 22:48:31', 1),
(24, '::1', 'deranderiyana@gmail.com', 4, '2023-01-10 23:04:23', 1),
(25, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 01:18:10', 1),
(26, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 19:04:35', 1),
(27, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 19:06:00', 1),
(28, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 19:46:10', 1),
(29, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-11 19:46:26', 1),
(30, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 19:46:48', 1),
(31, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 20:02:39', 1),
(32, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-11 20:10:40', 1),
(33, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 20:16:42', 1),
(34, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-11 20:21:53', 1),
(35, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 20:22:30', 1),
(36, '::1', 'deranderiyana@gmail.com', 4, '2023-01-11 21:45:04', 1),
(37, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-12 01:07:45', 1),
(38, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 01:08:45', 1),
(39, '::1', 'deden', NULL, '2023-01-12 03:32:52', 0),
(40, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-12 03:33:06', 1),
(41, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 19:45:08', 1),
(42, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 19:50:28', 1),
(43, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 20:32:33', 1),
(44, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 21:33:40', 1),
(45, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 21:59:00', 1),
(46, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-12 23:41:12', 1),
(47, '::1', 'deranderiyana@gmail.com', 4, '2023-01-12 23:41:50', 1),
(48, '::1', 'deranderiyana@gmail.com', 4, '2023-01-15 19:05:24', 1),
(49, '::1', 'deranderiyana@gmail.com', 4, '2023-01-19 20:59:36', 1),
(50, '::1', 'purwar@mail.com', 11, '2023-01-19 21:10:09', 1),
(51, '::1', 'purwar@mail.com', 11, '2023-01-19 21:20:41', 1),
(52, '::1', 'purwar@mail.com', 11, '2023-01-19 21:33:36', 1),
(53, '::1', 'purwar@mail.com', 11, '2023-01-19 21:51:54', 1),
(54, '::1', 'purwar@mail.com', 11, '2023-01-23 08:41:19', 1),
(55, '::1', 'purwar@mail.com', 11, '2023-01-23 17:14:02', 1),
(56, '::1', 'purwar@mail.com', NULL, '2023-01-23 19:06:33', 0),
(57, '::1', 'purwar@mail.com', 11, '2023-01-23 19:06:54', 1),
(58, '::1', 'purwar@mail.com', 11, '2023-01-23 19:29:24', 1),
(59, '::1', 'purwar@mail.com', NULL, '2023-01-24 06:33:44', 0),
(60, '::1', 'purwar@mail.com', 11, '2023-01-24 06:33:49', 1),
(61, '::1', 'purwar@mail.com', 11, '2023-01-24 19:29:08', 1),
(62, '::1', 'purwar@mail.com', 11, '2023-01-24 19:44:55', 1),
(63, '::1', 'purwar@mail.com', 11, '2023-01-24 21:28:15', 1),
(64, '::1', 'purwar@mail.com', 11, '2023-01-25 06:32:57', 1),
(65, '::1', 'purwar@mail.com', 11, '2023-01-25 18:50:03', 1),
(66, '::1', 'purwar@mail.com', 11, '2023-01-26 16:39:44', 1),
(67, '::1', 'purwar@mail.com', 11, '2023-01-26 19:09:53', 1),
(68, '::1', 'purwar@mail.com', 11, '2023-01-26 19:37:08', 1),
(69, '::1', 'purwar@mail.com', 11, '2023-01-26 19:41:49', 1),
(70, '::1', 'purwar@mail.com', 11, '2023-01-27 01:05:46', 1),
(71, '::1', 'purwar@mail.com', 11, '2023-01-27 01:50:08', 1),
(72, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 20:07:26', 1),
(73, '::1', 'dedenderi1221@gmail.com', 5, '2023-01-30 20:08:40', 1),
(74, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 20:32:21', 1),
(75, '::1', 'deden', NULL, '2023-01-30 22:02:15', 0),
(76, '::1', 'deran', NULL, '2023-01-30 22:02:25', 0),
(77, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 22:02:38', 1),
(78, '::1', 'deden', NULL, '2023-01-30 22:03:42', 0),
(79, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 22:04:09', 1),
(80, '::1', 'deden', NULL, '2023-01-30 22:05:25', 0),
(81, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 22:15:51', 1),
(82, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 22:41:10', 1),
(83, '::1', 'deden', NULL, '2023-01-30 22:42:54', 0),
(84, '::1', 'deran', NULL, '2023-01-30 22:43:06', 0),
(85, '::1', 'deden', NULL, '2023-01-30 22:43:20', 0),
(86, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 22:47:45', 1),
(87, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 23:02:14', 1),
(88, '::1', 'deran', NULL, '2023-01-30 23:03:49', 0),
(89, '::1', 'purwar@mail.com', 11, '2023-01-30 23:04:20', 1),
(90, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 23:05:05', 1),
(91, '::1', 'diren@gmal.com', 13, '2023-01-30 23:06:58', 1),
(92, '::1', 'deranderiyana@gmail.com', 4, '2023-01-30 23:07:27', 1),
(93, '::1', 'duren', NULL, '2023-01-30 23:08:59', 0),
(94, '::1', 'duren', NULL, '2023-01-31 00:23:04', 0),
(95, '::1', 'deranderiyana@gmail.com', 4, '2023-01-31 00:23:10', 1),
(96, '::1', 'duren', NULL, '2023-01-31 00:34:19', 0),
(97, '::1', 'deranderiyana@gmail.com', 4, '2023-01-31 01:08:55', 1),
(98, '::1', 'duren', NULL, '2023-01-31 01:40:30', 0),
(99, '::1', 'deranderiyana@gmail.com', 4, '2023-01-31 01:52:45', 1),
(100, '::1', 'diren@gmal.com', 13, '2023-01-31 02:05:23', 1),
(101, '::1', 'deran', NULL, '2023-02-01 01:39:36', 0),
(102, '::1', 'deran', NULL, '2023-02-01 01:42:07', 0),
(103, '::1', 'deran', NULL, '2023-02-01 01:42:23', 0),
(104, '::1', 'purwar@mail.com', NULL, '2023-02-01 01:42:49', 0),
(105, '::1', 'purwar@mail.com', 11, '2023-02-01 01:43:08', 1),
(106, '::1', 'deranderiyana@gmail.com', 4, '2023-02-01 01:44:01', 1),
(107, '::1', 'deranderiyana@gmail.com', 4, '2023-02-01 02:00:05', 1),
(108, '::1', 'deranderiyana@gmail.com', 4, '2023-02-01 19:07:36', 1),
(109, '::1', 'deranderiyana@gmail.com', 4, '2023-02-02 19:14:35', 1),
(110, '::1', 'deranderiyana@gmail.com', 4, '2023-02-02 21:40:17', 1),
(111, '::1', 'deranderiyana@gmail.com', 4, '2023-02-03 01:41:49', 1),
(112, '::1', 'deranderiyana@gmail.com', 4, '2023-02-05 19:30:41', 1),
(113, '::1', 'deranderiyana@gmail.com', 4, '2023-02-06 02:50:16', 1),
(114, '::1', 'deranderiyana@gmail.com', 4, '2023-02-06 19:16:40', 1),
(115, '::1', 'deden', NULL, '2023-02-07 02:02:09', 0),
(116, '::1', 'deden', NULL, '2023-02-07 02:02:21', 0),
(117, '::1', 'deranderiyana@gmail.com', 4, '2023-02-07 02:02:25', 1),
(118, '::1', 'dedenderi1221@gmail.com', 5, '2023-02-07 02:11:12', 1),
(119, '::1', 'dedenderi1221@gmail.com', 5, '2023-02-07 02:15:09', 1),
(120, '::1', 'deranderiyana@gmail.com', 4, '2023-02-07 02:30:07', 1),
(121, '::1', 'deranderiyana@gmail.com', 4, '2023-02-07 19:22:38', 1),
(122, '::1', 'rahmat@gmail.com', 14, '2023-02-07 20:40:29', 1),
(123, '::1', 'deranderiyana@gmail.com', 4, '2023-02-07 20:40:41', 1),
(124, '::1', 'deranderiyana@gmail.com', 4, '2023-02-08 00:55:31', 1),
(125, '::1', 'deranderiyana@gmail.com', 4, '2023-02-08 19:13:32', 1),
(126, '::1', 'deranderiyana@gmail.com', 4, '2023-02-09 01:45:45', 1),
(127, '::1', 'deranderiyana@gmail.com', 4, '2023-02-09 19:33:45', 1),
(128, '::1', 'deranderiyana@gmail.com', 4, '2023-02-09 19:56:45', 1),
(129, '::1', 'deranderiyana@gmail.com', 4, '2023-02-10 00:39:14', 1),
(130, '::1', 'deranderiyana@gmail.com', 4, '2023-02-10 23:08:23', 1),
(131, '::1', 'deranderiyana@gmail.com', 4, '2023-02-10 23:40:31', 1),
(132, '::1', 'deranderiyana@gmail.com', 4, '2023-02-10 23:41:25', 1),
(133, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 01:45:43', 1),
(134, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 02:08:41', 1),
(135, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 02:09:05', 1),
(136, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-11 02:14:26', 1),
(137, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 02:14:59', 1),
(138, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 02:26:01', 1),
(139, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 02:26:21', 1),
(140, '::1', 'ababil', NULL, '2023-02-11 03:01:31', 0),
(141, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-11 03:01:40', 1),
(142, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 03:01:55', 1),
(143, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 05:02:58', 1),
(144, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 05:07:52', 1),
(145, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 05:36:27', 1),
(146, '::1', 'deranderiyana@gmail.com', 4, '2023-02-11 05:55:56', 1),
(147, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 07:00:51', 1),
(148, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 07:03:39', 1),
(149, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 07:38:55', 1),
(150, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 11:02:58', 1),
(151, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:29:12', 1),
(152, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:34:17', 1),
(153, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:34:35', 1),
(154, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:35:41', 1),
(155, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:35:54', 1),
(156, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:36:40', 1),
(157, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:37:01', 1),
(158, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:39:10', 1),
(159, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:39:34', 1),
(160, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:40:32', 1),
(161, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:40:52', 1),
(162, '::1', 'admin', NULL, '2023-02-11 19:50:18', 0),
(163, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:50:25', 1),
(164, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:51:50', 1),
(165, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:52:23', 1),
(166, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:53:28', 1),
(167, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:54:38', 1),
(168, '::1', 'rahmat', NULL, '2023-02-11 19:55:44', 0),
(169, '::1', 'rahmat', NULL, '2023-02-11 19:55:50', 0),
(170, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:55:58', 1),
(171, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-11 19:56:38', 1),
(172, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:56:50', 1),
(173, '::1', 'adminintens@intens.co.id', 4, '2023-02-11 19:58:49', 1),
(174, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 19:59:00', 1),
(175, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-11 20:04:20', 1),
(176, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 00:12:38', 1),
(177, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-12 00:14:50', 1),
(178, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-12 00:42:47', 1),
(179, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-12 00:44:15', 1),
(180, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-12 01:52:06', 1),
(181, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 02:13:27', 1),
(182, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 05:19:07', 1),
(183, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 06:24:31', 1),
(184, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 19:20:30', 1),
(185, '::1', 'adminintens@intens.co.id', 4, '2023-02-12 20:47:44', 1),
(186, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-12 22:19:34', 1),
(187, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-12 22:20:02', 1),
(188, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-12 22:22:11', 1),
(189, '::1', 'adminintens@intens.co.id', 4, '2023-02-13 00:50:31', 1),
(190, '::1', 'adminintens@intens.co.id', 4, '2023-02-13 01:07:49', 1),
(191, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-13 01:15:06', 1),
(192, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-13 01:16:48', 1),
(193, '::1', 'adminintens@intens.co.id', 4, '2023-02-13 02:05:28', 1),
(194, '::1', 'adminintens@intens.co.id', 4, '2023-02-13 02:55:05', 1),
(195, '::1', 'deran', NULL, '2023-02-16 01:01:38', 0),
(196, '::1', 'adminintens@intens.co.id', 4, '2023-02-16 01:01:45', 1),
(197, '::1', 'adminintens@intens.co.id', 4, '2023-02-19 20:41:49', 1),
(198, '::1', 'adminintens@intens.co.id', 4, '2023-02-21 00:52:02', 1),
(199, '::1', 'adminintens@intens.co.id', 4, '2023-02-21 19:45:30', 1),
(200, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-21 19:58:43', 1),
(201, '::1', 'adminintens@intens.co.id', 4, '2023-02-21 20:02:11', 1),
(202, '::1', 'adminintens@intens.co.id', 4, '2023-02-21 20:05:05', 1),
(203, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 00:29:51', 1),
(204, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-22 01:33:34', 1),
(205, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-22 01:34:24', 1),
(206, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 01:35:47', 1),
(207, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 03:36:41', 1),
(208, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 05:57:34', 1),
(209, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 06:42:20', 1),
(210, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-22 06:45:10', 1),
(211, '::1', 'rahmatababil@intens.co.id', 20, '2023-02-22 06:45:59', 1),
(212, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 19:25:12', 1),
(213, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-22 19:30:26', 1),
(214, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 19:30:51', 1),
(215, '::1', 'adityasuryaman@intens.co.id', 19, '2023-02-22 20:39:58', 1),
(216, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 21:05:41', 1),
(217, '::1', 'adminintens@intens.co.id', 4, '2023-02-22 21:41:50', 1),
(218, '::1', 'adminintens@intens.co.id', 4, '2023-02-23 03:17:58', 1),
(219, '::1', 'adminintens@intens.co.id', 4, '2023-02-23 19:51:44', 1),
(220, '::1', 'adminintens@intens.co.id', 4, '2023-02-27 21:25:13', 1),
(221, '::1', 'adminintens@intens.co.id', 4, '2023-02-28 02:09:46', 1),
(222, '::1', 'deran', NULL, '2023-03-03 02:49:33', 0),
(223, '::1', 'adminintens@intens.co.id', 4, '2023-03-03 02:49:45', 1),
(224, '::1', 'admin', NULL, '2023-07-09 23:36:03', 0),
(225, '::1', 'admin', NULL, '2023-07-09 23:36:16', 0),
(226, '::1', 'admin', NULL, '2023-07-09 23:38:11', 0),
(227, '::1', 'admin', NULL, '2023-07-09 23:38:18', 0),
(228, '::1', 'admin', NULL, '2023-07-09 23:38:28', 0),
(229, '::1', 'admin', NULL, '2023-07-09 23:38:34', 0),
(230, '::1', 'admin', NULL, '2023-07-09 23:38:45', 0),
(231, '::1', 'admin', NULL, '2023-07-09 23:38:54', 0),
(232, '::1', 'adityasuryaman@intens.co.id', 19, '2023-07-09 23:39:11', 1),
(233, '::1', 'rahmat', NULL, '2023-07-09 23:40:56', 0),
(234, '::1', 'rahmat', NULL, '2023-07-09 23:41:36', 0),
(235, '::1', 'admin', NULL, '2023-07-09 23:42:09', 0),
(236, '::1', 'admin', NULL, '2023-07-09 23:42:21', 0),
(237, '::1', 'admin', NULL, '2023-07-09 23:42:30', 0),
(238, '::1', 'admin', NULL, '2023-07-09 23:49:51', 0),
(239, '::1', 'adminintens@intens.co.id', 4, '2023-07-09 23:50:10', 1),
(240, '::1', 'adminintens@intens.co.id', 4, '2023-07-09 23:51:43', 1),
(241, '::1', 'rahmatababil@intens.co.id', 20, '2023-07-09 23:53:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Memanage Users'),
(2, 'manage-aset', 'Menambah, Mengubah, dan Menghapus Aset'),
(3, 'manage-persetujuan', 'Untuk Melakukan Persetujuan Pengadaan atau Perbaikan dan Penggantian Aset.');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `form_pengadaan`
--

CREATE TABLE `form_pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `nama_aset` varchar(255) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `harga_aset` int(11) NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_persetujuan` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_pengadaan`
--

INSERT INTO `form_pengadaan` (`id_pengadaan`, `nama_aset`, `id_divisi`, `harga_aset`, `tanggal_pengadaan`, `keterangan`, `id_persetujuan`, `active`) VALUES
(4, 'Harddisk External WD 2TB', 2, 1800000, '2023-02-08', 'Keperluan untuk Storage Project Bangkit 2023', 4, 1),
(5, 'Laptop Samsung X512l', 4, 4500000, '2023-02-15', ' Laptop Gaming', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_perbaikan_pergantian`
--

CREATE TABLE `form_perbaikan_pergantian` (
  `id_perbaikan_pergantian` int(11) NOT NULL,
  `id_aset` int(11) NOT NULL,
  `id_persetujuan` int(11) NOT NULL,
  `jenis_pengajuan` varchar(255) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_perbaikan_pergantian`
--

INSERT INTO `form_perbaikan_pergantian` (`id_perbaikan_pergantian`, `id_aset`, `id_persetujuan`, `jenis_pengajuan`, `tanggal_pengajuan`, `keterangan`, `active`) VALUES
(9, 3, 2, 'Perbaikan Aset', '2023-02-21', 'Penting buat print dokumen project 2023', 1),
(10, 1, 3, 'Penggantian Aset', '2023-02-23', 'drgerg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_aset`
--

CREATE TABLE `kondisi_aset` (
  `id_kondisi_aset` int(11) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi_aset`
--

INSERT INTO `kondisi_aset` (`id_kondisi_aset`, `kondisi`) VALUES
(1, 'Sangat Baik'),
(2, 'Baik'),
(3, 'Kurang Baik'),
(4, 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1673332371, 1);

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan`
--

CREATE TABLE `persetujuan` (
  `id_persetujuan` int(11) NOT NULL,
  `nama_persetujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persetujuan`
--

INSERT INTO `persetujuan` (`id_persetujuan`, `nama_persetujuan`) VALUES
(1, 'Menunggu Persetujuan'),
(2, 'Di Setujui'),
(3, 'Di Tolak'),
(4, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `prioritas`
--

CREATE TABLE `prioritas` (
  `id_prioritas` int(11) NOT NULL,
  `prioritas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prioritas`
--

INSERT INTO `prioritas` (`id_prioritas`, `prioritas`) VALUES
(1, 'Kurang Berprioritas'),
(2, 'Cukup Berprioritas'),
(3, 'Berprioritas'),
(4, 'Sangat Berprioritas');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ekonomis`
--

CREATE TABLE `tahun_ekonomis` (
  `id_ekonomis` int(11) NOT NULL,
  `bobot_tahun` int(11) NOT NULL,
  `jumlah_tahun` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_ekonomis`
--

INSERT INTO `tahun_ekonomis` (`id_ekonomis`, `bobot_tahun`, `jumlah_tahun`, `tahun`) VALUES
(1, 1, '1 Tahun', '+ 1 year'),
(2, 1, '2 Tahun', '+ 2 year'),
(3, 2, '3 Tahun', '+ 3 year'),
(4, 2, '4 Tahun', '+ 4 year'),
(5, 3, '5 Tahun', '+ 5 year'),
(6, 3, '6 Tahun', '+ 6 year'),
(7, 4, '7 Tahun', '+ 7 year'),
(8, 4, '8 Tahun', '+ 8 year'),
(9, 4, '9 Tahun', '+ 9 year'),
(10, 4, '10 Tahun', '+ 10 year'),
(11, 4, '11 Tahun', '+ 11 year'),
(12, 4, '12 Tahun', '+ 12 year'),
(13, 4, '13 Tahun', '+ 13 year'),
(14, 4, '14 Tahun', '+ 14 year'),
(15, 4, '15 Tahun', '+ 15 year');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'IT Solutions'),
(2, 'Procurement'),
(3, 'Coorporate Service & Finance'),
(4, 'Ops & Purju'),
(5, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `fullname`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'adminintens@intens.co.id', 'admin', '$2y$10$iOP6U5suYV.0VL1MEf0uJ.iyZWcEu3ozqEPBS8FVBuBrbzv9GOYZm', 'Deran Deriyana Fauzzan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-01-10 01:09:31', '2023-07-09 23:50:42', NULL),
(19, 'adityasuryaman@intens.co.id', 'aditya', '$2y$10$zavINLGU/K4DAUA2XC8UCOe1QX3qg3DvC2s.gfA.Ds76ddvjb5.KS', 'Aditya Suryaman', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-02-10 23:46:24', '2023-02-11 19:34:06', NULL),
(20, 'rahmatababil@intens.co.id', 'rahmat', '$2y$10$6Okep8yn.Lxkir5NVjGjKO.mcg.mYN43rMSPkA2iWw0BVFOEKyPxK', 'Rahmat Ababil Ridwan', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-02-11 02:03:49', '2023-07-09 23:51:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id_aset`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_ekonomis` (`id_ekonomis`),
  ADD KEY `id_kondisi_aset` (`id_kondisi_aset`),
  ADD KEY `id_prioritas` (`id_prioritas`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`) USING BTREE,
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`) USING BTREE;

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`agu_id`) USING BTREE,
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `group_id_user_id` (`group_id`,`user_id`) USING BTREE;

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `email` (`email`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`) USING BTREE,
  ADD KEY `selector` (`selector`) USING BTREE;

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`) USING BTREE,
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`) USING BTREE;

--
-- Indexes for table `form_pengadaan`
--
ALTER TABLE `form_pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_persetujuan` (`id_persetujuan`);

--
-- Indexes for table `form_perbaikan_pergantian`
--
ALTER TABLE `form_perbaikan_pergantian`
  ADD PRIMARY KEY (`id_perbaikan_pergantian`),
  ADD KEY `form_perbaikan_pergantian` (`id_persetujuan`),
  ADD KEY `id_aset` (`id_aset`);

--
-- Indexes for table `kondisi_aset`
--
ALTER TABLE `kondisi_aset`
  ADD PRIMARY KEY (`id_kondisi_aset`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `persetujuan`
--
ALTER TABLE `persetujuan`
  ADD PRIMARY KEY (`id_persetujuan`);

--
-- Indexes for table `prioritas`
--
ALTER TABLE `prioritas`
  ADD PRIMARY KEY (`id_prioritas`);

--
-- Indexes for table `tahun_ekonomis`
--
ALTER TABLE `tahun_ekonomis`
  ADD PRIMARY KEY (`id_ekonomis`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `agu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `form_pengadaan`
--
ALTER TABLE `form_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form_perbaikan_pergantian`
--
ALTER TABLE `form_perbaikan_pergantian`
  MODIFY `id_perbaikan_pergantian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kondisi_aset`
--
ALTER TABLE `kondisi_aset`
  MODIFY `id_kondisi_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persetujuan`
--
ALTER TABLE `persetujuan`
  MODIFY `id_persetujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prioritas`
--
ALTER TABLE `prioritas`
  MODIFY `id_prioritas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun_ekonomis`
--
ALTER TABLE `tahun_ekonomis`
  MODIFY `id_ekonomis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aset`
--
ALTER TABLE `aset`
  ADD CONSTRAINT `aset_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`),
  ADD CONSTRAINT `aset_ibfk_2` FOREIGN KEY (`id_ekonomis`) REFERENCES `tahun_ekonomis` (`id_ekonomis`),
  ADD CONSTRAINT `aset_ibfk_3` FOREIGN KEY (`id_kondisi_aset`) REFERENCES `kondisi_aset` (`id_kondisi_aset`),
  ADD CONSTRAINT `aset_ibfk_4` FOREIGN KEY (`id_prioritas`) REFERENCES `prioritas` (`id_prioritas`);

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_pengadaan`
--
ALTER TABLE `form_pengadaan`
  ADD CONSTRAINT `form_pengadaan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`),
  ADD CONSTRAINT `form_pengadaan_ibfk_2` FOREIGN KEY (`id_persetujuan`) REFERENCES `persetujuan` (`id_persetujuan`);

--
-- Constraints for table `form_perbaikan_pergantian`
--
ALTER TABLE `form_perbaikan_pergantian`
  ADD CONSTRAINT `form_perbaikan_pergantian` FOREIGN KEY (`id_persetujuan`) REFERENCES `persetujuan` (`id_persetujuan`),
  ADD CONSTRAINT `form_perbaikan_pergantian_ibfk_1` FOREIGN KEY (`id_aset`) REFERENCES `aset` (`id_aset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
