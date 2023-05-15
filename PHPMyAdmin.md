## PHP MY ADMIN CONTENTS

DATABASE NAME	: crimes

#### TABLES:

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/4786f1c5-3bd6-4a5c-b48f-620dd8786cca)

#### ADMIN TABLE
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/43739dcf-6a41-430a-a1ba-18ef68ab6a9d)

#### CITY TABLE
```

--
-- Database: `crimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CITY_ID` int(11) NOT NULL,
  `CITY_NAME` varchar(45) NOT NULL,
  `STATE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `CITY_NAME`, `STATE_ID`) VALUES
(1, 'AMARAVATHI', 1),
(2, 'VISHAKAPATNAM', 1),
(3, 'NELLORE', 1),
(4, 'CHITOOR', 1),
(5, 'KADAPA', 1),
(6, 'ITANAGAR', 2),
(7, 'ALONG', 2),
(8, 'TEZU', 2),
(9, 'PASIGHAT', 2),
(10, 'DISPUR', 3),
(11, 'GUWAHATI', 3),
(12, 'SILCHAR', 3),
(13, 'PATNA', 4),
(14, 'GAYA', 4),
(15, 'MUZAFFARPUR', 4),
(16, 'CHAPRA', 4),
(17, 'RAIPUR', 5),
(18, 'DURG', 5),
(19, 'BILASPUR', 5),
(20, 'AMBIKAPUR', 5),
(21, 'MADGAON', 6),
(22, 'PANAJI', 6),
(23, 'AHMADABAD', 7),
(24, 'SURAT', 7),
(25, 'GANDHINAGAR', 7),
(26, 'RAJKOT', 7),
(27, 'CHANDIGARH', 8),
(28, 'HISAR', 8),
(29, 'GURGAON', 8),
(30, 'PANIPAT', 8),
(31, 'SHIMLA', 9),
(32, 'DALHOUSIE', 9),
(33, 'DHARMSHALA', 9),
(34, 'RANCHI', 10),
(35, 'JAMSHEDPUR', 10),
(36, 'JHARIA', 10),
(37, 'BANGALORE', 11),
(38, 'MYSURU', 11),
(39, 'MANGALURU', 11),
(40, 'KOLAR', 11),
(41, 'THIRUVANANTHAPURAM', 12),
(42, 'THALASSEY', 12),
(43, 'KOCHI', 12),
(44, 'THRISSUR', 12),
(45, 'BHOPAL', 13),
(46, 'INDORE', 13),
(47, 'UJJAIN', 13),
(48, 'GWALIOR', 13),
(49, 'MUMBAI', 14),
(50, 'NASHIK', 14),
(51, 'PUNE', 14),
(52, 'THANE', 14),
(53, 'IMPHAL', 15),
(54, 'SHILLONG', 16),
(55, 'CHERRAPUNJI', 16),
(56, 'AIZAWL', 17),
(57, 'LUNGLEI', 17),
(58, 'KOHIMA', 18),
(59, 'PHEK', 18),
(60, 'BHUBANESHWAR', 19),
(61, 'CUTTACK', 19),
(62, 'PURI', 19),
(63, 'KONARK', 19),
(64, 'CHANDIGARH', 20),
(65, 'AMRITSAR', 20),
(66, 'PATIALA', 20),
(67, 'LUDHIANA', 20),
(68, 'JAIPUR', 21),
(69, 'AJMER', 21),
(70, 'KOTA', 21),
(71, 'JODHPUR', 21),
(72, 'GANGTOK', 22),
(73, 'LACHUNG', 22),
(74, 'CHENNAI', 23),
(75, 'VELLORE', 23),
(76, 'COIMBATORE', 23),
(77, 'KANCHIPURAM', 23),
(78, 'MADURAI', 23),
(79, 'HYDERABAD', 24),
(80, 'WARANGAL', 24),
(81, 'AGARTALA', 25),
(82, 'AGRA', 26),
(83, 'ALIGARH', 26),
(84, 'LUCKNOW', 26),
(85, 'JHANSI', 26),
(86, 'KANPUR', 26),
(87, 'DEHRADUN', 27),
(88, 'NAINITAL', 27),
(89, 'MUSSOORIE', 27),
(90, 'KOLKATA', 28),
(91, 'DARJILING', 28),
(92, 'HUGLI', 28),
(93, 'PURULIA', 28),
(94, 'DELHI', 29);

--
-- Triggers `city`
--
DELIMITER $$
CREATE TRIGGER `cityid` AFTER INSERT ON `city` FOR EACH ROW UPDATE CITY_ID
set city.CITY_ID = city.CITY_ID +10
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CITY_ID`),
  ADD KEY `STATE_ID` (`STATE_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`STATE_ID`) REFERENCES `state` (`STATE_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```



