-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2022 at 08:26 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timur`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `judulwebsite` varchar(200) DEFAULT NULL,
  `logoperusahaan` varchar(50) DEFAULT NULL,
  `iconperusahaan` varchar(50) DEFAULT NULL,
  `judulbanner` varchar(200) DEFAULT NULL,
  `subjudul` text,
  `deskripsi` text,
  `fotobackground` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `judulwebsite`, `logoperusahaan`, `iconperusahaan`, `judulbanner`, `subjudul`, `deskripsi`, `fotobackground`, `idtoko`, `tanggalupdate`) VALUES
(1, 'BANK BPD DIY', 'LG-1647492577zmcEDfXSha', 'IP-1647492254UNPJbdHpe3', 'PT TIMUR KASIH KARUNIA ', 'Gudang Besar', 'Menyediakan kebutuhan besi, baja ringan, dan aluminium dengan harga terbaik DAN MANTAP', 'FB-1647919801YaPBuJoWqS', 1, '2022-03-22 10:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `brosur`
--

CREATE TABLE `brosur` (
  `id` int(2) NOT NULL,
  `filebrosur` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brosur`
--

INSERT INTO `brosur` (`id`, `filebrosur`, `idtoko`, `tanggalupdate`) VALUES
(1, 'BRS-1636620338QkzGicrgXA', 1, '2021-11-11 15:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `namacustomer` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `gambarcustomer` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL,
  `statustop` int(2) DEFAULT NULL,
  `waktu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `namacustomer`, `deskripsi`, `gambarcustomer`, `idtoko`, `tanggalbuat`, `tanggalupdate`, `statustop`, `waktu`) VALUES
(16, 'Customer 2', 'Ini merupakan customer dua', 'CST-1636786050u7ydNBvKQM', 1, '2021-11-13 13:47:30', NULL, 1, 1629855638),
(17, 'Customer 1', 'Ini merupakan customer satu', 'CST-1636940537ouhOAQRVPW', 1, '2021-11-15 08:42:17', NULL, 0, NULL),
(18, 'Customer 3', 'Ini merupakan customer tiga', 'CST-1636940560GR6dF71iKv', 1, '2021-11-15 08:42:40', '2021-11-16 09:30:36', 1, 1629858566),
(20, 'Customer 5', 'Ini merupakan customer lima', 'CST-1637029864TbcGoxOejY', 1, '2021-11-15 08:43:15', '2021-11-16 09:31:04', 0, NULL),
(21, 'Customer 4', 'Ini merupakan customer empat ya', 'CST-1637055334AH4dvgnbqE', 1, '2021-11-15 08:43:00', '2021-11-25 09:09:17', 1, 1630400998),
(22, 'Customer 6', 'Ini merupakan customer enam', 'CST-1641807510xJ4o5HtOWk', 1, '2022-01-10 16:38:30', NULL, NULL, NULL),
(23, 'costumer 8', NULL, NULL, NULL, '2022-03-18 04:15:41', '2022-03-18 04:15:41', NULL, NULL),
(24, 'costumer 8', NULL, NULL, NULL, '2022-03-18 04:15:41', '2022-03-18 04:15:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedig`
--

CREATE TABLE `feedig` (
  `id` int(11) NOT NULL,
  `listfeed` varchar(50) DEFAULT NULL,
  `embedlink` text,
  `tanggalupdate` datetime DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedig`
--

INSERT INTO `feedig` (`id`, `listfeed`, `embedlink`, `tanggalupdate`, `idtoko`) VALUES
(1, 'Feed Intagram 1', '&lt;blockquote class=&quot;instagram-media&quot; data-instgrm-permalink=&quot;https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&amp;utm_campaign=loading&quot; data-instgrm-version=&quot;13&quot; style=&quot; background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);&quot;&gt;&lt;div style=&quot;padding:16px;&quot;&gt; &lt;a href=&quot;https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&amp;utm_campaign=loading&quot; style=&quot; background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;&quot; target=&quot;_blank&quot;&gt; &lt;div style=&quot; display: flex; flex-direction: row; align-items: center;&quot;&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 19% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display:block; height:50px; margin:0 auto 12px; width:50px;&quot;&gt;&lt;svg width=&quot;50px&quot; height=&quot;50px&quot; viewBox=&quot;0 0 60 60&quot; version=&quot;1.1&quot; xmlns=&quot;https://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;https://www.w3.org/1999/xlink&quot;&gt;&lt;g stroke=&quot;none&quot; stroke-width=&quot;1&quot; fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;&gt;&lt;g transform=&quot;translate(-511.000000, -20.000000)&quot; fill=&quot;#000000&quot;&gt;&lt;g&gt;&lt;path d=&quot;M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631&quot;&gt;&lt;/path&gt;&lt;/g&gt;&lt;/g&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/div&gt;&lt;div style=&quot;padding-top: 8px;&quot;&gt; &lt;div style=&quot; color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;&quot;&gt; View this post on Instagram&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 12.5% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;&quot;&gt;&lt;div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: 8px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: auto;&quot;&gt; &lt;div style=&quot; width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/a&gt;&lt;p style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;&quot;&gt;&lt;a href=&quot;https://www.instagram.com/p/CS5xn3lFhS-/?utm_source=ig_embed&amp;utm_campaign=loading&quot; style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;&quot; target=&quot;_blank&quot;&gt;A post shared by Fortuna Steel (@fortunasteel)&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;&lt;/blockquote&gt; &lt;script async src=&quot;//www.instagram.com/embed.js&quot;&gt;&lt;/script&gt;', '2021-09-09 16:00:38', 1),
(2, 'Feed Intagram 2', '&lt;blockquote class=&quot;instagram-media&quot; data-instgrm-permalink=&quot;https://www.instagram.com/p/CSyDJluJZfa/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; data-instgrm-version=&quot;13&quot; style=&quot; background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);&quot;&gt;&lt;div style=&quot;padding:16px;&quot;&gt; &lt;a href=&quot;https://www.instagram.com/p/CSyDJluJZfa/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; style=&quot; background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;&quot; target=&quot;_blank&quot;&gt; &lt;div style=&quot; display: flex; flex-direction: row; align-items: center;&quot;&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 19% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display:block; height:50px; margin:0 auto 12px; width:50px;&quot;&gt;&lt;svg width=&quot;50px&quot; height=&quot;50px&quot; viewBox=&quot;0 0 60 60&quot; version=&quot;1.1&quot; xmlns=&quot;https://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;https://www.w3.org/1999/xlink&quot;&gt;&lt;g stroke=&quot;none&quot; stroke-width=&quot;1&quot; fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;&gt;&lt;g transform=&quot;translate(-511.000000, -20.000000)&quot; fill=&quot;#000000&quot;&gt;&lt;g&gt;&lt;path d=&quot;M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631&quot;&gt;&lt;/path&gt;&lt;/g&gt;&lt;/g&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/div&gt;&lt;div style=&quot;padding-top: 8px;&quot;&gt; &lt;div style=&quot; color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;&quot;&gt; View this post on Instagram&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 12.5% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;&quot;&gt;&lt;div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: 8px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: auto;&quot;&gt; &lt;div style=&quot; width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/a&gt;&lt;p style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;&quot;&gt;&lt;a href=&quot;https://www.instagram.com/p/CSyDJluJZfa/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;&quot; target=&quot;_blank&quot;&gt;A post shared by Fortuna Steel (@fortunasteel)&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;&lt;/blockquote&gt; &lt;script async src=&quot;//www.instagram.com/embed.js&quot;&gt;&lt;/script&gt;', '2021-09-09 16:02:29', 1),
(3, 'Feed Intagram 3', '&lt;blockquote class=&quot;instagram-media&quot; data-instgrm-permalink=&quot;https://www.instagram.com/p/CS0oA33lQRv/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; data-instgrm-version=&quot;13&quot; style=&quot; background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);&quot;&gt;&lt;div style=&quot;padding:16px;&quot;&gt; &lt;a href=&quot;https://www.instagram.com/p/CS0oA33lQRv/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; style=&quot; background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;&quot; target=&quot;_blank&quot;&gt; &lt;div style=&quot; display: flex; flex-direction: row; align-items: center;&quot;&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 19% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display:block; height:50px; margin:0 auto 12px; width:50px;&quot;&gt;&lt;svg width=&quot;50px&quot; height=&quot;50px&quot; viewBox=&quot;0 0 60 60&quot; version=&quot;1.1&quot; xmlns=&quot;https://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;https://www.w3.org/1999/xlink&quot;&gt;&lt;g stroke=&quot;none&quot; stroke-width=&quot;1&quot; fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;&gt;&lt;g transform=&quot;translate(-511.000000, -20.000000)&quot; fill=&quot;#000000&quot;&gt;&lt;g&gt;&lt;path d=&quot;M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631&quot;&gt;&lt;/path&gt;&lt;/g&gt;&lt;/g&gt;&lt;/g&gt;&lt;/svg&gt;&lt;/div&gt;&lt;div style=&quot;padding-top: 8px;&quot;&gt; &lt;div style=&quot; color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;&quot;&gt; View this post on Instagram&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;padding: 12.5% 0;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;&quot;&gt;&lt;div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot;background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: 8px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;margin-left: auto;&quot;&gt; &lt;div style=&quot; width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);&quot;&gt;&lt;/div&gt; &lt;div style=&quot; width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt; &lt;div style=&quot;display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;&quot;&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;&quot;&gt;&lt;/div&gt; &lt;div style=&quot; background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/a&gt;&lt;p style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;&quot;&gt;&lt;a href=&quot;https://www.instagram.com/p/CS0oA33lQRv/?utm_source=ig_embed&amp;amp;utm_campaign=loading&quot; style=&quot; color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;&quot; target=&quot;_blank&quot;&gt;A post shared by Fortuna Steel (@fortunasteel)&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;&lt;/blockquote&gt; &lt;script async src=&quot;//www.instagram.com/embed.js&quot;&gt;&lt;/script&gt;', '2021-09-09 16:03:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hubungikami`
--

CREATE TABLE `hubungikami` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `linkwa` text,
  `gambaroutlate` varchar(50) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungikami`
--

INSERT INTO `hubungikami` (`id`, `nama`, `alamat`, `linkwa`, `gambaroutlate`, `tanggalbuat`, `tanggalupdate`, `idtoko`) VALUES
(9, 'DEMAK IJO', 'Ruko Demak Ijo, Jl. Ringroad Barat No.7, Yogyakarta', '8123456772', 'OTL-163186029583iKmqpxcB', '2021-09-10 11:28:59', '2021-09-17 14:05:14', 1),
(10, 'Penen', 'Jl. Gito Gati No. 102, Sleman, Yogyakarta', '8123456772', 'OTL-1631860312E6BtYzvu8y', '2021-09-10 11:41:28', '2021-09-17 14:05:08', 1),
(11, 'Condongcatur', 'Jl. Ringroad Utara No.5, Condongcatur, Yogyakarta\r\n', '8123456772', 'OTL-1631860319C2aL1AhBvy', '2021-09-14 11:31:29', '2021-09-17 14:05:02', 1),
(12, 'PARIS', 'Druwo, Bangunharjo, Bantul, Yogyakarta\r\n', '8123456772', 'OTL-1631860326qbnuAcV6vO', '2021-09-14 11:34:58', '2021-09-17 14:04:55', 1),
(13, ' Ring Road Barat', 'Jl. Ringroad Barat , Area Sawah, Gamping, Kabupaten Sleman, \r\n', '8123456772', 'OTL-1631860333HMuzlptFi7', '2021-09-14 11:36:25', '2021-09-17 14:04:49', 1),
(14, 'Kuwiran', 'Jl. Solo-Semarang, Dusun IV, Kuwiran, Kec. Banyudono, Kabupaten Boyolali, Jawa Tengah\r\n', '8123456772', 'OTL-1631860341nFzfu2radJ', '2021-09-14 11:38:23', '2021-09-17 14:04:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hubungipusat`
--

CREATE TABLE `hubungipusat` (
  `id` int(1) NOT NULL,
  `nomorwa` varchar(20) NOT NULL,
  `idtoko` int(1) NOT NULL,
  `tanggalupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungipusat`
--

INSERT INTO `hubungipusat` (`id`, `nomorwa`, `idtoko`, `tanggalupdate`) VALUES
(1, '8123456772', 1, '2021-09-17 14:05:21'),
(1, '8123456772', 1, '2021-09-17 14:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `iconsosmed`
--

CREATE TABLE `iconsosmed` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `namaicon` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iconsosmed`
--

INSERT INTO `iconsosmed` (`id`, `icon`, `namaicon`) VALUES
(1, 'ig-icon.png', 'Intagram'),
(2, 'fb-icon.png', 'Facebook'),
(3, 'yt-icon.png', 'Youtube');

-- --------------------------------------------------------

--
-- Table structure for table `layanankami`
--

CREATE TABLE `layanankami` (
  `id` int(11) NOT NULL,
  `listlayanankami` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `gambarlayanan` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanankami`
--

INSERT INTO `layanankami` (`id`, `listlayanankami`, `deskripsi`, `gambarlayanan`, `idtoko`, `tanggalupdate`) VALUES
(1, 'Retail', 'Melalui outlet-outlet kami yang tersebar di titik-titik strategis Yogyakarta dan Soloraya, kami melayani penjualan ke konsumen akhir yang sebagian besar adalah para aplikator.', 'L-1631861908UWFCBRjXd3', 1, '2021-09-17 13:58:28'),
(2, 'Distribusi', 'Kami mendistribusikan barang-barang berupa besi baja, baja ringan, dan aluminium ke toko-toko yang bermitra dengan kami. ', 'L-1631861900ktChrX53fY', 1, '2021-09-17 13:58:20'),
(3, 'Grosir', 'Selain retail ke konsumen akhir, kami juga melayani pembelian dalam jumlah besar (pembelian grosir)', 'L-1631861888MGDgFzVHEU', 1, '2021-09-17 13:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaproduk` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `gambarproduk` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaproduk`, `deskripsi`, `gambarproduk`, `idtoko`, `tanggalbuat`, `tanggalupdate`) VALUES
(1, 'UNP ', 'Sesuai dengan namanya, kanal besi UNP memiliki bentuk yang menyerupai huruf &quot;U&quot;. Besi UNP sering pula disebut sebagai kanal U, profil U, atau U-Channel.', 'PRD-1631259219qSzvfnkMcA', 1, NULL, '2021-09-10 14:33:39'),
(2, 'Siku', 'Besi siku atau yang dikenal dengan nama angle bar adalah besi yang berbentuk siku dengan besar sudut sebesar 90 derajat atau letter L. Fisiknya yang kokoh dan tahan lama cocok digunakan untuk keperluan konstruksi jangka panjang karena bisa bertahan hingga bertahunâ€“tahun. Besi siku juga memiliki ukuran kaki dan ketebalan yang bervariasi sehingga bisa disesuaikan dengan kebutuhan.', 'PRD-1631259252fYpFz1u3Qm', 1, NULL, '2021-09-10 14:34:12'),
(3, 'Aluminium', 'Aluminium adalah logam yang ringan dengan berat jenis 2.7 gram/cm3 setelah Magnesium (1.7 gram/cm3) dan Berilium (1.85 gram/cm3) atau sekitar 1/3 dari berat jenis besi maupun tembaga. Konduktifitas listriknya 60% lebih dari tembaga sehingga juga digunakan untuk peralatan listrik.', 'PRD-1631259346HPRyurV62F', 1, NULL, '2021-09-10 14:35:46'),
(4, 'IWF', 'Besi Baja IWF atau Singkatan dari I-Wide Flange,Besi IWF atau biasa juga disebut WF, WF Beam dan Sejenisnya macam nama kecil lainnya Kebanyakan digunakan sebagai rangka besi dari suatu Kontruksi bangunan untuk membuat bangunan menjadi kokoh dan kuat.Bentuk besi WF-Beam menyerupai besi INP, hanya saja besi WF-Beam memiliki ratio lebar dibanding tinggi yaitu 2:1. Dengan ratio ini, besi WF-Beam mempunyai bending inertia yang tinggi. Fungsi besi WF-Beam dalam konstruksi bangunan terbilang penting baik dalam infastruktur dan tatanan bangunan.', 'PRD-1631259465AsEcnVlexh', 1, NULL, '2021-09-10 14:37:45'),
(5, 'Plat Esser', 'Plat esser atau Plat hitam atau sering disebut sebagai hot rolled steel sheet (HRC) merupakan lempengan tipis besi berbahan dasar baja canai panas. Plat eser memiliki ukuran 1,2m x 2,4m.', 'PRD-1631074598V8dOKHRA4a', 1, NULL, '2021-09-10 14:38:21'),
(6, 'Reng', 'Reng merupakan profil rangka galvalum yang paling kecil bentuk dan ukurannya.reng terbagi jadi beberapa ukuran ada reng 32, reng 30 dan reng 28.', 'PRD-1631259547v2PK7gUzt5', 1, NULL, '2021-09-10 14:39:07'),
(7, 'Baja Ringan', 'Sesuai dengan namanya, kanal besi UNP memiliki bentuk yang menyerupai huruf &quot;U&quot;. Besi UNP sering pula disebut sebagai kanal U, profil U, atau U-Channel.', 'PRD-16312597206hwZ4k7zFq', 1, NULL, '2021-09-10 14:42:00'),
(8, 'Hollow Hitam', 'Besi hollow memiliki banyak sebutan di pasar, seperti pipa kotak besi, pipa hollow, besi kotak, maupun hollow besi. Hollow besi merupakan material yang paling familiar di kalangan perbengkelan dan fabrikasi. Ukuran besi hollow memiliki standar panjang sebesar 6 meter. Besi hollow memiliki sifat anti rayap, anti api, dan juga anti hama seperti binatang pengerat. Produk besi kotak ini biasanya memiliki ukuran full dan tidak full. ', 'PRD-1631259660GzRmdWnbp9', 1, NULL, '2021-09-10 14:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `gambarpromo` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `gambarpromo`, `idtoko`, `tanggalupdate`) VALUES
(1, 'PR-16318609221ci2eR3QV5', 1, '2021-09-17 13:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id` int(11) NOT NULL,
  `iconsosmed` varchar(50) DEFAULT NULL,
  `namaakun` varchar(50) DEFAULT NULL,
  `link` text,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosialmedia`
--

INSERT INTO `sosialmedia` (`id`, `iconsosmed`, `namaakun`, `link`, `idtoko`, `tanggalupdate`) VALUES
(1, '1', '@fortunasteel', 'https://www.instagram.com/fortunasteel/', 1, '2021-09-09 16:08:42'),
(2, '2', '@fortunasteel.id', 'https://www.facebook.com/fortunasteel.id/', 1, '2021-09-09 14:20:05'),
(3, '3', 'Fortuna Steel Official', 'https://www.youtube.com/channel/UC5lJI3pNIOZYNDj5yc7cKJw', 1, '2021-09-09 14:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `id` int(11) NOT NULL,
  `isikonten` text,
  `fotolayanan` varchar(50) DEFAULT NULL,
  `baris` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`id`, `isikonten`, `fotolayanan`, `baris`, `idtoko`, `tanggalbuat`, `tanggalupdate`) VALUES
(18, 'Gak perlu ragu,\r\nbelanja di Fortuna Steel', 'FL-16312574348EYlb16dr7', '', 1, '2021-09-10 14:03:54', '2021-09-13 15:20:29'),
(19, 'Bisa beli custom sesuai kebutuhan,\r\ndengan harga pabrik', 'FL-1631258833WE6AfXLZxS', '', 1, '2021-09-10 14:27:13', '2021-09-13 15:20:38'),
(20, 'Gak perlu menunggu lama,\r\ndilayani dengan cepat', 'FL-1631258875hdNxaGcIA9', NULL, 1, '2021-09-10 14:27:55', NULL),
(21, 'Bisa pesan via WhatsApp\r\nbarang diantar sampai ke rumah', 'FL-16312588909TWKG7Dk6f', NULL, 1, '2021-09-10 14:28:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `perkerjaan` varchar(150) DEFAULT NULL,
  `isitestimoni` text,
  `gambar` varchar(50) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL,
  `tanggalbuat` datetime DEFAULT NULL,
  `tanggalupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `perkerjaan`, `isitestimoni`, `gambar`, `idtoko`, `tanggalbuat`, `tanggalupdate`) VALUES
(12, 'Pak Agus Rozak', 'Pekerja', 'Belanja di Fortuna Steel dapat dihitung baru-baru ini saja. Milih di sini karena barangnya lengkap. Meskipun harga di sini lebih miring, kualitasnya lebih bagus.\r\n', 'TS-1631861951z5lfGLrwCE', 1, '2021-09-14 11:23:49', '2021-09-17 13:59:11'),
(13, 'Pak Arif ', 'Pekerja', 'Belanja di Fortuna Steel sudah dua tahun, belanja di sini kualitasnya lebih bagus. Apalagi untuk besi (75x75), saya sering beli yang itu. Harganya juga lebih miring.\r\n', 'TS-1631861944Y3ew97zXKk', 1, '2021-09-14 11:24:30', '2021-09-17 13:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `idtoko` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `nama`, `email`, `password`, `idtoko`) VALUES
(1, 'admin1', 'admin1@gmail.com', '12345', 1),
(2, 'admin2', 'admin2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(3, 'admin3', 'admin3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(4, 'admin4', 'admin4@gmail.com', '12345', 4),
(6, 'admin6', 'admin6@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedig`
--
ALTER TABLE `feedig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungikami`
--
ALTER TABLE `hubungikami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iconsosmed`
--
ALTER TABLE `iconsosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanankami`
--
ALTER TABLE `layanankami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedig`
--
ALTER TABLE `feedig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hubungikami`
--
ALTER TABLE `hubungikami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `iconsosmed`
--
ALTER TABLE `iconsosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanankami`
--
ALTER TABLE `layanankami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
