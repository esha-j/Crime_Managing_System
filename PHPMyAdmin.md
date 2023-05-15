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

#### COMPLAINT TABLE
```
-- Database: `crimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE `complaint_tbl` (
  `Complaint_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  `Complaint_Type` varchar(20) NOT NULL,
  `Complaint_Desc` varchar(100) NOT NULL,
  `Complaint_Date` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

#### CRIME TYPE
```
-- Database: `crimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE `crime_type` (
  `CRIME_ID` int(11) NOT NULL,
  `CRIME_TYPE` varchar(45) NOT NULL,
  `DESCRIPTION` varchar(225) NOT NULL,
  `PUNISHMENT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### CRIMINAL
```
-- Database: `crimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `C_ID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `CRIME_ID` int(11) NOT NULL
) ;
```

#### DESIGNATION
```
-- Database: `crimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `DESI_ID` int(11) NOT NULL,
  `DESI_NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`DESI_ID`, `DESI_NAME`) VALUES
(1, 'DIGP'),
(2, 'DCP'),
(3, 'ACP'),
(4, 'ADG'),
(5, 'IGP'),
(6, 'DIG'),
(7, 'SENIOR SUPERINTENDENT'),
(8, 'SUPERINTENDENT'),
(9, 'DEPUTY SUPERINTENDENT'),
(10, 'PSI'),
(11, 'ASI'),
(12, 'HEAD CONSTABLE'),
(13, 'CONSTABLE');
```

#### FEEDBACK
```
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `NAME` text NOT NULL,
  `EMAIL` varchar(225) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `FEEDBACK` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
```

#### FIR DETAILS
```
--
-- Table structure for table `fir_details`
--

CREATE TABLE `fir_details` (
  `F_ID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `VICTIM_ID` int(11) NOT NULL,
  `DESCRIPTION` varchar(45) DEFAULT NULL,
  `STATUS` varchar(45) DEFAULT NULL,
  `CRIME_ID` int(11) NOT NULL,
  `ID_PROOF` varchar(45) NOT NULL,
  `ID_PROOF_NO` int(11) NOT NULL,
  `CRIMEPHOTO1` varchar(255) DEFAULT NULL,
  `CRIMEPHOTO2` varchar(255) DEFAULT NULL,
  `CRIMELOCATION` varchar(45) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `REG_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### FIR FORWARD
```
-- Table structure for table `fir_forward`
--

CREATE TABLE `fir_forward` (
  `F_ID` int(11) NOT NULL,
  `OFFICER_ID` int(11) NOT NULL,
  `DEFINE` varchar(45) NOT NULL,
  `STATUS` varchar(45) NOT NULL,
  `DESCRIPTION` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### LOGIN
```
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `LOGIN_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `FIRST NAME` text NOT NULL,
  `LAST NAME` text NOT NULL,
  `PHONE NO.` int(11) NOT NULL,
  `PASSWORD` varchar(45) NOT NULL,
  `REPASSWORD` varchar(45) NOT NULL
) ;
```

#### MISSING PERSON
```
-- Table structure for table `missingperson_tbl`
--

CREATE TABLE `missingperson_tbl` (
  `Person_Id` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Weight` int(11) NOT NULL,
  `Height` float NOT NULL,
  `Contact_Person` varchar(20) NOT NULL,
  `Contact_Address` varchar(100) NOT NULL,
  `Contact_City` varchar(20) NOT NULL,
  `Contact_Mobile` int(11) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Station_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

#### MISSING CITIZENS
```
CREATE TABLE `missing_citizens` (
  `MISSING_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(45) NOT NULL,
  `MIDDLE_NAME` varchar(45) DEFAULT NULL,
  `LAST_NAME` varchar(45) DEFAULT NULL,
  `GENDER` varchar(45) NOT NULL,
  `HEIGHT` varchar(7) NOT NULL,
  `WEIGHT` varchar(20) NOT NULL,
  `CONTACT_PERSON` varchar(25) NOT NULL,
  `ADDRESS` varchar(45) NOT NULL,
  `MOBILE` int(11) NOT NULL,
  `PHOTO` varchar(225) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `SPECIAL_CLUE` varchar(225) DEFAULT NULL,
  `POLICESTATION_NAME` varchar(45) NOT NULL,
  `CITY_NAME` text NOT NULL,
  `STATE` text NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### MOST WANTED
```
-- Table structure for table `mostwanted_tbl`
--

CREATE TABLE `mostwanted_tbl` (
  `Wanted_Id` int(11) NOT NULL,
  `Wanted_Name` varchar(20) NOT NULL,
  `Wanted_Location` varchar(20) NOT NULL,
  `Wanted_Image` varchar(100) NOT NULL,
  `Wanted_Crime` varchar(100) NOT NULL,
  `Wanted_Desc` varchar(200) NOT NULL,
  `Station_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

#### NEWS
```
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(225) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### OFFICER
```
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `OFFICER_ID` int(11) NOT NULL,
  `LOGIN_ID` int(11) NOT NULL,
  `NAME` varchar(45) NOT NULL,
  `JDATE` datetime NOT NULL,
  `DESI_ID` int(11) NOT NULL,
  `POLICESTATION_ID` int(11) NOT NULL,
  `CRIMINAL_ID` int(11) DEFAULT NULL
) ;
```

#### POLICE STATION
```
--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `ID` int(11) NOT NULL,
  `POLICESTATION_NAME` varchar(45) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `CONTACT_NO` bigint(20) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `CONTACT_PERSON` varchar(45) NOT NULL,
  `STARTING_DATE` datetime NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`ID`, `POLICESTATION_NAME`, `ADDRESS`, `CITY_ID`, `CONTACT_NO`, `EMAIL`, `CONTACT_PERSON`, `STARTING_DATE`, `Username`, `Password`) VALUES
(2, 'JAMSHEDPUR POLICE STATION', 'PO BOX:2010 , OPPOSITE BELLS\r\nSHOP', 35, 9990102, 'ps_jamshedpur@crs.co.in', 'Amaya', '2004-08-09 00:00:00', 'ps_jamshedpur', '78992'),
(3, 'JHARIA POLICE STATION', 'PO BOX:3010 , OPPOSITE VEGETABLE\r\nMARKET', 36, 9990103, 'ps_jharia@crs.co.in', 'Aryan', '2004-08-09 00:00:00', '', ''),
(4, 'CHANDIGARH POLICE STATION', 'PO BOX:1020 , OPPOSITE CL\r\nHOTEL', 64, 9990201, 'ps_pchandigarh@crs.co.in', 'Gautam', '2004-08-09 00:00:00', '', ''),
(5, 'AMRITSAR POLICE STATION', 'PO BOX:2020 , OPPOSITE MOUNT\r\nTAB', 65, 9990202, 'ps_amritsar@crs.co.in', 'Morish', '2004-08-09 00:00:00', '', ''),
(6, 'PATIALA POLICE STATION', 'PO BOX:3020 , OPPOSITE SNAL\r\nBARBER', 66, 9990203, 'ps_patiala@crs.co.in', 'Arhit', '2004-08-09 00:00:00', '', ''),
(7, 'LUDHIANA POLICE STATION', 'PO BOX:4020 , OPPOSITE WATER\r\nDUMP', 67, 9990204, 'ps_ludhiana@crs.co.in', 'Karan', '2004-08-09 00:00:00', '', ''),
(8, 'AMARAVATHI POLICE STATION', 'PO BOX:009 , OPPOSITE RAJA\r\nTHEATER', 1, 9991001, 'ps_amaravathi@crs.co.in', 'Suraj Reddy', '2004-10-09 00:00:00', 'ps_amaravathi', '1823913'),
(9, 'VISHAKAPATNAM POLICE STATION', 'PO BOX:010 , OPPOSITE WOOD\r\nBANK', 2, 9991002, 'ps_vishakapatnam@crs.co.in', 'Sanjay', '1998-02-05 00:00:00', 'ps_vishakapatnam', '82628361'),
(10, 'NELLORE POLICE STATION', 'PO BOX:301 , NEXT TO ACHI\r\nMESS', 3, 9991003, 'ps_nellore@crs.co.in', 'Sri Ranga', '2008-09-12 00:00:00', 'ps_nellore', '2392173'),
(11, 'CHITOOR POLICE STATION', 'PO BOX:401 , OPPOSITE AM \r\nRESTAURANT', 4, 9991004, 'ps_chitoor@crs.co.in', 'Gaurav', '2008-01-03 00:00:00', 'ps_chitoor', '89217312'),
(12, 'KADAPA POLICE STATION', 'PO BOX:501 , OPPOSITE RAJA\r\nMINES', 5, 9991005, 'ps_kadapa@crs.co.in', 'Suraj Reddy', '2004-10-09 00:00:00', '', ''),
(13, 'BANGALORE POLICE STATION', 'PO BOX:1011 , OPPOSITE CRICKET\r\nGROUND', 37, 9991101, 'ps_bangalore@crs.co.in', 'Shankarlal', '2004-08-09 00:00:00', '', ''),
(14, 'MYSURU POLICE STATION', 'PO BOX:2011 , OPPOSITE BELLS\r\nSHOP', 38, 9991102, 'ps_mysuru@crs.co.in', 'Kaushik', '2004-08-09 00:00:00', '', ''),
(15, 'MANGALURU POLICE STATION', 'PO BOX:3011 , OPPOSITE DRESS FOR\r\nALL', 39, 9991103, 'ps_manguluru@crs.co.in', 'Aryan', '2004-08-09 00:00:00', '', ''),
(16, 'KOLAR POLICE STATION', 'PO BOX:4011 , OPPOSITE VEGETABLE\r\nMARKET', 40, 9991104, 'ps_kolar@crs.co.in', 'Sanjay', '2004-08-09 00:00:00', '', ''),
(17, 'THIRUVANANTHAPURAM POLICE STATION', 'PO BOX:1012 , OPPOSITE CRICKET\r\nGROUND', 41, 9991201, 'ps_thiruvananthapuram@crs.co.in', 'Vijayan', '2004-08-09 00:00:00', '', ''),
(18, 'THALASSEY POLICE STATION', 'PO BOX:2012 , OPPOSITE\r\nDAIKIN', 42, 9991202, 'ps_thalassey@crs.co.in', 'Pranav', '2004-08-09 00:00:00', '', ''),
(19, 'KOCHI POLICE STATION', 'PO BOX:3012 , OPPOSITE\r\nSAMSUNG', 43, 9991203, 'ps_kochi@crs.co.in', 'Arathy', '2004-08-09 00:00:00', '', ''),
(20, 'THRISSUR POLICE STATION', 'PO BOX:4012 , OPPOSITE FRUIT\r\nMARKET', 44, 9991204, 'ps_thrissur@crs.co.in', 'George', '2004-08-09 00:00:00', '', ''),
(21, 'BHOPAL POLICE STATION', 'PO BOX:1013 , OPPOSITE ASPIE\r\nMALL', 45, 9991301, 'ps_bhopal@crs.co.in', 'Anand', '2004-08-09 00:00:00', '', ''),
(22, 'INDORE POLICE STATION', 'PO BOX:2013 , OPPOSITE MOTOR\r\nREPAIR', 46, 9991302, 'ps_indore@crs.co.in', 'Abhijeet', '2004-08-09 00:00:00', '', ''),
(23, 'UJJAIN POLICE STATION', 'PO BOX:3013 , OPPOSITE JANTA\r\nSTATIONERY', 47, 9991303, 'ps_ujjain@crs.co.in', 'Sachin', '2004-08-09 00:00:00', '', ''),
(24, 'GWALIOR POLICE STATION', 'PO BOX:4013 , OPPOSITE FRUIT\r\nMARKET', 48, 9991304, 'ps_gwalior@crs.co.in', 'Dushyant', '2004-08-09 00:00:00', '', ''),
(25, 'MUMBAI POLICE STATION', 'PO BOX:1014 , OPPOSITE SANTOOR\r\nCOMPLEX', 49, 9991401, 'ps_mumbai@crs.co.in', 'Bharat', '2004-08-09 00:00:00', '', ''),
(26, 'NASHIK POLICE STATION', 'PO BOX:2014 , OPPOSITE MOTOR\r\nREPAIR', 50, 9991402, 'ps_nashik@crs.co.in', 'Akshae', '2004-08-09 00:00:00', '', ''),
(27, 'PUNE POLICE STATION', 'PO BOX:3014 , OPPOSITE JUNE\r\nMART', 51, 9991403, 'ps_pune@crs.co.in', 'Antil', '2004-08-09 00:00:00', '', ''),
(28, 'THANE POLICE STATION', 'PO BOX:4014 , OPPOSITE\r\nFORT', 52, 9991404, 'ps_thane@crs.co.in', 'Klaem', '2004-08-09 00:00:00', '', ''),
(29, 'IMPHAL POLICE STATION', 'PO BOX:1015 , OPPOSITE TEA\r\nSTALL', 53, 9991501, 'ps_imphal@crs.co.in', 'Kwein', '2012-08-09 00:00:00', '', ''),
(30, 'SHILLONG POLICE STATION', 'PO BOX:1016 , OPPOSITE PEAK\r\nPOINT', 54, 9991601, 'ps_shillong@crs.co.in', 'Deevansh', '2004-08-09 00:00:00', '', ''),
(31, 'CHERRAPUNJI POLICE STATION', 'PO BOX:2016 , OPPOSITE TEA\r\nGARDEN', 55, 9991602, 'ps_cherrapunji@crs.co.in', 'Krish', '2004-08-09 00:00:00', '', ''),
(32, 'AIZAWL POLICE STATION', 'PO BOX:1017 , OPPOSITE ALIO\r\nKOL', 56, 9991701, 'ps_aizawl@crs.co.in', 'Anand', '2004-08-09 00:00:00', '', ''),
(33, 'LUNGLEI POLICE STATION', 'PO BOX:2017 , OPPOSITE COFFEE\r\nSHOP', 57, 9991702, 'ps_lunglei@crs.co.in', 'Abhijeet', '2004-08-09 00:00:00', '', ''),
(34, 'KOHIMA POLICE STATION', 'PO BOX:1018 , OPPOSITE DIAMOND\r\nBARBER', 58, 9991801, 'ps_kohima@crs.co.in', 'Bhaon', '2004-08-09 00:00:00', '', ''),
(35, 'PHEK POLICE STATION', 'PO BOX:2018 , OPPOSITE GARAGE\r\nSOLE', 59, 9991802, 'ps_phek@crs.co.in', 'Exor', '2004-08-09 00:00:00', '', ''),
(36, 'BHUBANESHWAR POLICE STATION', 'PO BOX:1019 , OPPOSITE CAR\r\nRENTAL', 60, 9991901, 'ps_bhubaneshwar@crs.co.in', 'Gowshik', '2004-08-09 00:00:00', '', ''),
(37, 'CUTTACK POLICE STATION', 'PO BOX:2019 , OPPOSITE MOTOR\r\nREPAIR', 61, 9991902, 'ps_cuttack@crs.co.in', 'Michael', '2004-08-09 00:00:00', '', ''),
(38, 'PURI POLICE STATION', 'PO BOX:3019 , OPPOSITE SALON\r\nSTYLE', 62, 9991903, 'ps_puri@crs.co.in', 'Arhot', '2004-08-09 00:00:00', '', ''),
(39, 'KONARK POLICE STATION', 'PO BOX:4019 , OPPOSITE STAE\r\nCOURT', 63, 9991904, 'ps_konark@crs.co.in', 'Kawshik', '2004-08-09 00:00:00', '', ''),
(40, 'ITANAGAR POLICE STATION', 'PO BOX:102 , OPPOSITE ARUN\r\nMILLS', 6, 9992001, 'ps_itanagar@crs.co.in', 'John', '2004-08-09 00:00:00', '', ''),
(41, 'ALONG POLICE STATION', 'PO BOX:202 , OPPOSITE TEA\r\nGARDEN', 7, 9992002, 'ps_along@crs.co.in', 'Tenzing', '2010-08-09 00:00:00', '', ''),
(42, 'TEZU POLICE STATION', 'PO BOX:302 , OPPOSITE TEZU\r\nMINES', 8, 9992003, 'ps_tezu@crs.co.in', 'Anukriti', '2014-08-09 00:00:00', '', ''),
(43, 'PASIGHAT POLICE STATION', 'PO BOX:402 , OPPOSITE\r\nREALING', 9, 9992004, 'ps_pasighat@crs.co.in', 'Mary', '2000-08-09 00:00:00', '', ''),
(44, 'JAIPUR POLICE STATION', 'PO BOX:1021 , OPPOSITE WER\r\nBOND', 68, 9992101, 'ps_jaipur@crs.co.in', 'Saurab', '2004-08-09 00:00:00', '', ''),
(45, 'AJMER POLICE STATION', 'PO BOX:2021 , OPPOSITE MB\r\nMOUNT', 69, 9992102, 'ps_ajmer@crs.co.in', 'Mohit', '2004-08-09 00:00:00', '', ''),
(46, 'KOTA POLICE STATION', 'PO BOX:3021 , OPPOSITE\r\nBOOKSTORE', 70, 9992103, 'ps_kota@crs.co.in', 'Varun', '2004-08-09 00:00:00', '', ''),
(47, 'JODHPUR POLICE STATION', 'PO BOX:4021 , OPPOSITE BLUE\r\nRESTHOME', 71, 9992104, 'ps_jodhpur@crs.co.in', 'Siddhant', '2004-08-09 00:00:00', '', ''),
(48, 'GANGTOK POLICE STATION', 'PO BOX:1022 , OPPOSITE NAT\r\nHOSPITAL', 72, 9992201, 'ps_gangtok@crs.co.in', 'Babul', '2004-08-09 00:00:00', '', ''),
(49, 'LACHUNG POLICE STATION', 'PO BOX:2022 , OPPOSITE LACH\r\nLAKE', 73, 9992202, 'ps_lachung@crs.co.in', 'Walter', '2004-08-09 00:00:00', '', ''),
(50, 'CHENNAI POLICE STATION', 'PO BOX:1023 , OPPOSITE RAILWAY\r\nGATE', 74, 9992301, 'ps_chennai@crs.co.in', 'Ramkumar', '2004-08-09 00:00:00', '', ''),
(51, 'VELLORE POLICE STATION', 'PO BOX:2023 , OPPOSITE BUS\r\nSTAND', 75, 9992302, 'ps_vellore@crs.co.in', 'Rajesh', '2004-08-09 00:00:00', '', ''),
(52, 'COIMBATORE POLICE STATION', 'PO BOX:3023 , OPPOSITE MUNIL\r\nHOSPITAL', 76, 9992303, 'ps_coimbatore@crs.co.in', 'Sagar', '2004-08-09 00:00:00', '', ''),
(53, 'KANCHIPURAM POLICE STATION', 'PO BOX:4023 , OPPOSITE SERS\r\nSAREE', 77, 9992304, 'ps_kancheepuram@crs.co.in', 'Mani', '2004-08-09 00:00:00', '', ''),
(54, 'MADURAI POLICE STATION', 'PO BOX:5023 , OPPOSITE GOLA\r\nRESTAURANT', 78, 9992305, 'ps_madurai@crs.co.in', 'Raghav', '2004-08-09 00:00:00', '', ''),
(55, 'HYDERABAD POLICE STATION', 'PO BOX:1024 , OPPOSITE RAILWAY\r\nGATE', 79, 9992401, 'ps_hyderabad@crs.co.in', '', '2004-08-09 00:00:00', '', ''),
(56, 'WARANGAL POLICE STATION', 'PO BOX:2024 , OPPOSITE BUS\r\nSTAND', 80, 9992402, 'ps_warangal@crs.co.in', 'Rajesh', '2004-08-09 00:00:00', '', ''),
(57, 'AGARTALA POLICE STATION', 'PO BOX:1025 , OPPOSITE TEA\r\nSTALL', 81, 9992501, 'ps_agartala@crs.co.in', 'Ramkumar', '2004-08-09 00:00:00', '', ''),
(58, 'AGRA POLICE STATION', 'PO BOX:1026 , OPPOSITE\r\nFOODSTALL', 82, 9992601, 'ps_agra@crs.co.in', 'Karan', '2004-08-09 00:00:00', '', ''),
(59, 'ALIGARH POLICE STATION', 'PO BOX:2026 , OPPOSITE STATE\r\nUNIVERSITY', 83, 9992602, 'ps_aligarh@crs.co.in', 'Manoj', '2004-08-09 00:00:00', '', ''),
(60, 'LUCKNOW POLICE STATION', 'PO BOX:3026 , OPPOSITE\r\nAIRPORT', 84, 9992603, 'ps_lucknow@crs.co.in', 'Suresh', '2004-08-09 00:00:00', '', ''),
(61, 'JHANSI POLICE STATION', 'PO BOX:4026 , OPPOSITE JAGA\r\nPARL', 85, 9992604, 'ps_jhansi@crs.co.in', 'Shanti', '2004-08-09 00:00:00', '', ''),
(62, 'KANPUR POLICE STATION', 'PO BOX:5026 , OPPOSITE POLO\r\nHOTEL', 86, 9992605, 'ps_kanpur@crs.co.in', 'Rohan', '2004-08-09 00:00:00', '', ''),
(63, 'DEHRADUN POLICE STATION', 'PO BOX:1027 , OPPOSITE WATER\r\nDAM', 87, 9992701, 'ps_dehradun@crs.co.in', 'Rohan', '2004-08-09 00:00:00', '', ''),
(64, 'NAINITAL POLICE STATION', 'PO BOX:2027 , OPPOSITE ICE\r\nLAKE', 88, 9992702, 'ps_nainital@crs.co.in', 'Raj', '2004-08-09 00:00:00', '', ''),
(65, 'MUSSOORIE POLICE STATION', 'PO BOX:3027 , OPPOSITE STO\r\nSTUDIO', 89, 9992703, 'ps_mussoorie@crs.co.in', 'Rahul', '2004-08-09 00:00:00', '', ''),
(66, 'KOLKATA POLICE STATION', 'PO BOX:1028 , OPPOSITE SWEET\r\nSHOP', 90, 9992801, 'ps_kolkata@crs.co.in', 'Biju', '2004-08-09 00:00:00', '', ''),
(67, 'DARJILING POLICE STATION', 'PO BOX:2028 , OPPOSITE BUS\r\nSTAND', 91, 9992802, 'ps_darjiling@crs.co.in', 'Rahul', '2004-08-09 00:00:00', '', ''),
(68, 'HUGLI POLICE STATION', 'PO BOX:3028 , OPPOSITE\r\nSUPERMARKET', 92, 9992803, 'ps_hugli@crs.co.in', 'Walter', '2004-08-09 00:00:00', '', ''),
(69, 'PURULIA POLICE STATION', 'PO BOX:4028 , OPPOSITE SOTR\r\nBRIDGE', 93, 9992804, 'ps_purulia@crs.co.in', 'Rajiv', '2004-08-09 00:00:00', '', ''),
(70, 'DELHI POLICE STATION', 'PO BOX:1029 , OPPOSITE CENTRAL\r\nPARK', 94, 9992901, 'ps_delhi@crs.co.in', 'Ajith', '2004-08-09 00:00:00', '', ''),
(71, 'DISPUR POLICE STATION', 'PO BOX:103 , OPPOSITE DISPUR\r\nTEA', 10, 9993001, 'ps_dispur@crs.co.in', 'Akanksha', '2004-08-09 00:00:00', '', ''),
(72, 'GUWAHATI POLICE STATION', 'PO BOX:203 , OPPOSITE GUWAHATI\r\nPARK', 11, 9993002, 'ps_guwahati@crs.co.in', 'Manoj', '2004-08-09 00:00:00', '', ''),
(73, 'SILCHAR POLICE STATION', 'PO BOX:303 , OPPOSITE SILCHAR\r\nLAKE', 12, 9993003, 'ps_silchar@crs.co.in', 'Shawn', '2004-08-09 00:00:00', '', ''),
(74, 'PATNA POLICE STATION', 'PO BOX:104 , OPPOSITE PATNA\r\nHOTEL', 13, 9994001, 'ps_patna@crs.co.in', 'Balram', '2004-08-09 00:00:00', '', ''),
(75, 'GAYA POLICE STATION', 'PO BOX:204 , OPPOSITE NOKIA\r\nSHOWROOM', 14, 9994002, 'ps_gaya@crs.co.in', 'Shankar', '2004-08-09 00:00:00', '', ''),
(76, 'MUZAFFARPUR POLICE STATION', 'PO BOX:304 , OPPOSITE SAMSUNG\r\nSHOWROOM', 15, 9994003, 'ps_muzaffarpur@crs.co.in', 'Amit', '2004-08-09 00:00:00', '', ''),
(77, 'CHAPRA POLICE STATION', 'PO BOX:404 , OPPOSITE DAIKIN\r\nA/C', 16, 9994004, 'ps_chapra@crs.co.in', 'Gauri', '2000-08-09 00:00:00', '', ''),
(78, 'RAIPUR POLICE STATION', 'PO BOX:105 , OPPOSITE NOKIA\r\nMINES', 17, 9995001, 'ps_raipur@crs.co.in', 'David', '1998-08-09 00:00:00', '', ''),
(79, 'DURG POLICE STATION', 'PO BOX:205 , OPPOSITE\r\nDAIKIN', 18, 9995002, 'ps_durg@crs.co.in', 'Suraj Reddy', '2014-08-09 00:00:00', '', ''),
(80, 'BILASPUR POLICE STATION', 'PO BOX:305 , OPPOSITE TEA\r\nSTALL', 19, 9995003, 'ps_bilaspur@crs.co.in', 'Pujal', '2012-08-09 00:00:00', '', ''),
(81, 'AMBIKAPUR POLICE STATION', 'PO BOX:405 , OPPOSITE TATA MOTORS PVT \r\n', 20, 9995004, 'ps_ambikapur@crs.co.in', 'Mayant', '2004-08-09 00:00:00', '', ''),
(82, 'MADGAON POLICE STATION', 'PO BOX:106 , OPPOSITE VS\r\nSTUDIO', 21, 9996001, 'ps_madgaon@crs.co.in', 'Tushar', '2004-08-09 00:00:00', '', ''),
(83, 'PANAJI POLICE STATION', 'PO BOX:206 , OPPOSITE RT\r\nBEACH', 22, 9996002, 'ps_panaji@crs.co.in', 'Boney', '2004-08-09 00:00:00', '', ''),
(84, 'AHMADABAD POLICE STATION', 'PO BOX:107 , OPPOSITE AMUL\r\nMILLS', 23, 9997001, 'ps_ahmadabad@crs.co.in', 'Veer', '2004-08-09 00:00:00', '', ''),
(85, 'SURAT POLICE STATION', 'PO BOX:207 , OPPOSITE SALT\r\nLAKE', 24, 9997002, 'ps_surat@crs.co.in', 'Akshay', '2004-08-09 00:00:00', '', ''),
(86, 'GANDHINAGAR POLICE STATION', 'PO BOX:307 , OPPOSITE HARI\r\nBOOKSTORE', 25, 9997003, 'ps_gandhinagar@crs.co.in', 'Ajay', '2004-08-09 00:00:00', '', ''),
(87, 'RAJKOT POLICE STATION', 'PO BOX:407 , OPPOSITE MAHAL HOTEL\r\n', 26, 9997004, 'ps_rajkot@crs.co.in', 'Mayant', '2004-08-09 00:00:00', '', ''),
(88, 'CHANDIGARH POLICE STATION', 'PO BOX:108 , OPPOSITE DHABA\r\n', 27, 9998001, 'ps_hchandigarh@crs.co.in', 'Veer', '2004-08-09 00:00:00', '', ''),
(89, 'HISAR POLICE STATION', 'PO BOX:208 , OPPOSITE ELEPHANT\r\nPARK', 28, 9998002, 'ps_hisar@crs.co.in', 'Akshay', '2004-08-09 00:00:00', '', ''),
(90, 'GURGAON POLICE STATION', 'PO BOX:308 , OPPOSITE HARI\r\nBOOKSTORE', 29, 9998003, 'ps_gurgaon@crs.co.in', 'Ajay', '2004-08-09 00:00:00', '', ''),
(91, 'PANIPAT POLICE STATION', 'PO BOX:408 , OPPOSITE MAHAL HOTEL\r\n', 30, 9998004, 'ps_panipat@crs.co.in', 'Mayant', '2009-08-09 00:00:00', '', ''),
(92, 'SHIMLA POLICE STATION', 'PO BOX:109 , OPPOSITE\r\nGALCIERS', 31, 9999001, 'ps_shimla@crs.co.in', 'Akash', '2014-08-09 00:00:00', '', ''),
(93, 'DALHOUSIE POLICE STATION', 'PO BOX:209 , OPPOSITE MONU\r\nHOTEL', 32, 9999002, 'ps_dalhousie@crs.co.in', 'Gauri', '2009-08-09 00:00:00', '', ''),
(94, 'DHARMSHALA POLICE STATION', 'PO BOX:309 , OPPOSITE VARSH\r\nSTALL', 33, 9999003, 'ps_dharmshala@crs.co.in', 'Ajay', '2014-08-09 00:00:00', '', '');
```

#### STATE
```
--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `STATE_ID` int(11) NOT NULL,
  `STATE_NAME` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATE_ID`, `STATE_NAME`) VALUES
(1, 'ANDHRA PRADESH'),
(2, 'ARUNACHAL PRADESH'),
(3, 'ASSAM'),
(4, 'BIHAR'),
(5, 'CHATTISGARH'),
(6, 'GOA'),
(7, 'GUJARAT'),
(8, 'HARYANA'),
(9, 'HIMACHAL PRADESH'),
(10, 'JHARKHAND'),
(11, 'KARNATAKA'),
(12, 'KERALA'),
(13, 'MADHYA PRADESH'),
(14, 'MAHARASTRA'),
(15, 'MANIPUR'),
(16, 'MEGHALAYA'),
(17, 'MIZORAM'),
(18, 'NAGALAND'),
(19, 'ODISHA'),
(20, 'PUNJAB'),
(21, 'RAJASTHAN'),
(22, 'SIKKIM'),
(23, 'TAMIL NADU'),
(24, 'TELANGANA'),
(25, 'TRIPURA'),
(26, 'UTTAR PRADESH'),
(27, 'UTTARAKHAND'),
(28, 'WEST BENGAL'),
(29, 'DELHI');
```

