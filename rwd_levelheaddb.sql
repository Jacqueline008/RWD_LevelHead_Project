-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-01 02:59:33
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwd_levelheaddb`
--
create database rwd_levelheaddb;
use rwd_levelheaddb;
-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SaleAccount` int(11) NOT NULL,
  `SellPrice` int(11) NOT NULL,
  `CostPrice` int(11) NOT NULL,
  `RemainAccount` int(11) NOT NULL,
  `Earing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`ID`, `Pic`, `Description`, `SaleAccount`, `SellPrice`, `CostPrice`, `RemainAccount`, `Earing`) VALUES
('001', '../images/001.jpg', '小米（MI）小米电视4A 标准版 55英寸 HDR 2GB+8GB 四核64位高性能处理器', 2000, 4500, 4000, 2409, 12000),
('002', '../images/002.jpg', '夏普（SHARP）LCD-60SU465A 60英寸 日本原装液晶面板 4K超高清', 1456, 3464, 2000, 353, 153520),
('003', '../images/003.jpg', '飞利浦（PHILIPS）50PUF6061/T3 50英寸 64位十一核4K超高清智能', 5251, 4514, 4000, 252, 12026),
('004', '../images/004.jpg', '创维（Skyworth）65H7 65英寸25核HDR超薄无边框人工智能4K超高清', 4626, 6246, 6000, 515, 51162),
('005', '../images/005.jpg', '索尼（SONY）KD-55X7000D 55英寸高清4K HDR 安卓6.0系统', 6225, 6225, 4000, 2462, 120266),
('006', '../images/006.jpg', '小米（MI）小米电视3S 65英寸 HDR 分体 4K超高清超薄金属机身64位智能', 6226, 4500, 4000, 240416, 120641),
('007', '../images/007.jpg', '海信（Hisense）LED55EC550UA 55英寸 4K智能电视 64位14核配置', 62, 4500, 3425, 526, 126161),
('008', '../images/008.jpg', '三星（SAMSUNG）UA55KUF30ZJXXZ 55英寸 HDR 4K超高清', 664, 7673, 6000, 737, 15415),
('009', '../images/009.jpg', '康佳（KONKA）S55U 55英寸 4K HDR超高清64位智能', 35325, 6411, 4566, 2409, 12000),
('010', '../images/010.jpg', '小米（MI）小米电视4A 标准版 65英寸 HDR 2GB+8GB 四核64位高性能', 6436, 4509, 4073, 2409, 12000),
('011', '../images/011.jpg', '海信（Hisense）LED65EC780UC 65英寸 曲面4K智能平板电视', 45626, 6262, 4083, 2409, 12000),
('012', '../images/012.jpg', '创维（Skyworth）42X5 42英寸6核智能酷开网络平板液晶电视', 6773, 7572, 7527, 2409, 33227),
('013', '../images/013.jpg', '飞利浦（PHILIPS）55PUF6092/T3 55英寸 64位九核4K超高清智能', 4616, 3567, 2546, 2409, 12000),
('014', '../images/014.jpg', '海信（Hisense）LED55EC660US 55英寸 炫彩4K智能电视', 35462, 3565, 2647, 2409, 12000),
('015', '../images/015.jpg', '康佳（KONKA）A49U 49英寸64位10核4KHDR超高清安卓智能', 35156, 7578, 5809, 2409, 12000),
('016', '../images/016.jpg', '康佳（KONKA）LED32S1 32英寸智能网络wifi卧室平板液晶电视', 46216, 3657, 2466, 2409, 12000),
('017', '../images/017.jpg', '海尔模卡（MOOKA）U55H3 55英寸 4K安卓智能网络纤薄窄边框', 4626, 4627, 4000, 10, 12000),
('018', '../images/018.jpg', '索尼（SONY）KD-65X7500D 65英寸高清4K HDR 安卓6.0系统', 3616, 4500, 4000, 2409, 12000),
('019', '../images/019.jpg', '长虹（CHANGHONG）32M1 32英寸 窄边高清液晶电视', 62161, 7372, 4000, 2409, 12000),
('020', '../images/020.jpg', '康佳（KONKA）LED24E330C 24英寸高清窄边液晶平板电视', 1526, 6267, 6000, 2409, 12000),
('021', '../images/021.jpg', '海信（Hisense）LED55EC780UC 55英寸曲面', 7272, 4500, 616, 2409, 12000),
('022', '../images/022.jpg', '海尔（Haier）32EU3000 32英寸流媒体纤薄窄边框高清LED液晶电视', 3680, 4500, 4000, 2409, 12000),
('023', '../images/023.jpg', '创维(Skyworth) 55V9E 55英寸HDR 4K超高清彩电智能互联网液晶平板电视', 75473, 4500, 4690, 2409, 12000),
('024', '../images/024.jpg', '创维（Skyworth）32X5 32英寸智能酷开网络平板液晶电视(黑色)', 3526, 2000, 4000, 2409, 12000),
('025', '../images/025.jpg', '海信（Hisense）LED32EC320A 32英寸 VIDAA3智能电视 丰富影视教育资源', 2000, 4500, 4000, 2409, 12000),
('026', '../images/026.jpg', 'KKTV U55W 55英寸4K超高清 HDR 金属机身 21核智能语音网络液晶', 3267, 4627, 4000, 2409, 12000),
('027', '../images/027.jpg', '三星（SAMSUNG）UA65KUF30EJXXZ 65英寸', 2000, 4500, 4000, 2409, 12000),
('028', '../images/028.jpg', '海信（Hisense）LED32EC270W 32英寸 窄边网络电视 ', 26171, 3783, 2000, 2409, 12000),
('029', '../images/029.jpg', '长虹（CHANGHONG）55D3S 55英寸 25核4K高清HDR', 2000, 7890, 4000, 2409, 12000),
('030', '../images/030.jpg', '海尔（Haier）LS49A51 49英寸 4K安卓智能网络超窄边框', 2000, 6949, 4000, 2409, 12000),
('031', '../images/031.jpg', '长虹（CHANGHONG）49U3C 49英寸双64位4K安卓智能LED液晶电视(黑色)', 61671, 4500, 4000, 2409, 12000),
('032', '../images/032.jpg', '索尼（SONY）KDL-32W600D 32英寸 高清液晶平板电视', 2000, 6890, 3456, 2409, 12000),
('033', '../images/033.jpg', '康佳（KONKA）LED55UC2 55英寸 曲面4K HDR 双64位18核智能电视', 62717, 8383, 4000, 2409, 12000),
('034', '../images/034.jpg', '索尼（SONY）KD-55X8000E 55英寸4K HDR 安卓6.0 智能液晶电视', 2000, 2727, 4000, 2409, 12000),
('035', '../images/035.jpg', '海信（Hisense）LED45M5010U 45英寸炫彩4K智能电视14核配置', 2000, 8383, 4000, 2409, 12000),
('036', '../images/036.jpg', '海信（Hisense）LED55EC780UC 55英寸曲面4K HDR 轻薄智能', 2000, 5940, 4000, 2409, 12000),
('037', '../images/037.jpg', '夏普（SHARP）LCD-60SU465A 60英寸 日本原装液晶面板 4K超高清', 2000, 4500, 3783, 2409, 12000),
('038', '../images/038.jpg', '微鲸（WHALEY）W55C1J 55英寸曲面 4K超高清', 16712, 8000, 4000, 2409, 12000),
('039', '../images/039.jpg', '麦凯龙（Makena）M55L 55英寸 真4K超高清', 2000, 6666, 4000, 2409, 12000),
('040', '../images/040.jpg', '长虹（CHANGHONG）65D3P 65英寸64位4K超高清', 2000, 4500, 4000, 2409, 12000);

-- --------------------------------------------------------

--
-- 表的结构 `shoppingcar`
--

CREATE TABLE `shoppingcar` (
  `customerName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `userPic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`name`, `pwd`, `tel`, `userPic`, `address`) VALUES
('*jim', '123', '17854234563', '../images/userPic3.jpg', '山东大学'),
('amy', '123', '17854234951', '../images/userPic.jpg', '青岛大学');

-- --------------------------------------------------------

--
-- 表的结构 `userorder`
--

CREATE TABLE `userorder` (
  `OrderID` int(11) NOT NULL,
  `customerName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `productCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shoppingcar`
--
ALTER TABLE `shoppingcar`
  ADD PRIMARY KEY (`customerName`,`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `userorder`
--
ALTER TABLE `userorder`
  ADD PRIMARY KEY (`OrderID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `userorder`
--
ALTER TABLE `userorder`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
