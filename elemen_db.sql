-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2016 at 09:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elemen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(11) NOT NULL,
  `nama_kategori` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('001', 'alam'),
('002', 'teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `nama_layanan` varchar(35) NOT NULL,
  `icon` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`nama_layanan`, `icon`, `deskripsi`) VALUES
('materi pelajaran', 'fa fa-graduation-cap fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.'),
('materi seminar', 'fa fa-desktop fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.'),
('presentasi lain', 'fa fa-file-powerpoint-o fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.'),
('presentasi tugas', 'fa fa-book fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.'),
('profil perusahaan', 'fa fa-building-o fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.'),
('tidak puas', 'fa fa-question fa-2x', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` varchar(15) NOT NULL,
  `nama_portfolio` varchar(35) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `id_kategori` varchar(15) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `nama_portfolio`, `tgl_masuk`, `id_kategori`, `gambar`) VALUES
('001', 'alam berbicara', '2016-10-19 10:30:00', '001', 'portfolio-img2.jpg'),
('002', 'hello world', '2016-10-28 04:00:00', '001', 'portfolio-img5.jpg'),
('003', 'jam tangan', '2016-10-12 05:00:00', '002', 'portfolio-img4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_user` varchar(15) NOT NULL,
  `nama_dpn` varchar(35) NOT NULL,
  `nama_blk` varchar(35) NOT NULL,
  `jabatan` varchar(35) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `user_fb` text NOT NULL,
  `user_twit` text NOT NULL,
  `user_goog` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_user`, `nama_dpn`, `nama_blk`, `jabatan`, `email`, `password`, `user_fb`, `user_twit`, `user_goog`, `foto`) VALUES
('0000', 'Super', 'Admin', 'Lead Programmer', 'superadmin@elemen.com', '17c4520f6cfd1ab53d8745e84681eb49', '', '', '', 'default.png'),
('0025', 'virginia', 'hendras', 'Lead Programmer', 'hendras@elemen.com', 'e1235f39bf0161cf586d3c4b9732af61', 'hendras', 'hendras', 'hendras', 'team11.jpg'),
('0051', 'wolfreine', 'serigala', 'Lead Designer', 'wolfereine', 'bf4397d8b4dc061e1b6d191a352e9134', '#', '#', '#', 'team31.jpg'),
('0068', 'Bagong', ' Vangence', 'Lead Designer', 'bagong@elemen.com', '62ec80a7b96fbbe92406046c3ff96b6b', 'bagong', 'bagong', 'bagong', 'team21.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`nama_layanan`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
