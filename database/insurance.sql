-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 12:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` varchar(50) NOT NULL,
  `agent_password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_password`, `name`, `branch`, `phone`, `is_admin`) VALUES
('111', '1619d7adc23f4f633f11014d2f22b7d8', 'Pantho Sorkar', 'Mirpur', '01598745682', 0),
('1610', '1619d7adc23f4f633f11014d2f22b7d8', 'Shovon', 'Dhanmondi', '01698484654', 0),
('222', '1619d7adc23f4f633f11014d2f22b7d8', 'Sultan', 'Mohakhali', '01521302251', 0),
('555', '1619d7adc23f4f633f11014d2f22b7d8', 'Amit Dutta', 'Mohakhali', '00111', 0),
('admin', '1619d7adc23f4f633f11014d2f22b7d8', 'Administrator', '', '08011223344', 1),
('agent007', '1619d7adc23f4f633f11014d2f22b7d8', 'Rafiq Bond', 'Raipur', '654654654645', 0),
('ahmed', '1619d7adc23f4f633f11014d2f22b7d8', 'Master User', 'null', 'null', 0),
('femiofficial026', '1619d7adc23f4f633f11014d2f22b7d8', 'Akinbo Oluwafemi', 'canada', '08154225834', 0),
('veus', '1619d7adc23f4f633f11014d2f22b7d8', 'John Doe', 'Zenith Bank', '09011223344', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` varchar(200) NOT NULL,
  `client_password` varchar(191) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `policy_id` varchar(50) NOT NULL,
  `agent_id` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_password`, `name`, `sex`, `birth_date`, `marital_status`, `nid`, `phone`, `address`, `policy_id`, `agent_id`, `image`) VALUES
('1511986023', '1619d7adc23f4f633f11014d2f22b7d8', 'John Green', 'Male', '11-05-1985', 'Married', '0121567952', '013548743688', 'Uttara', '2', 'femiofficial026', 'download.jpg'),
('1511986129', '1619d7adc23f4f633f11014d2f22b7d8', 'Aemon Task', 'Male', '10-09-1970', 'Married', '46814518451', '54189465100', 'Dhaka', '1', 'femiofficial026', 'GOT505_102414_HS_DSC_1022-920x584.jpeg'),
('1511986256', '1619d7adc23f4f633f11014d2f22b7d8', 'Gareth Walker', 'Male', '05-09-1987', 'Divorced', '5216541656', '0169780980', 'Noakhali', '3', 'femiofficial026', 'Gareth-Walker.jpg'),
('1511986409', '1619d7adc23f4f633f11014d2f22b7d8', 'Hillary Clinton', 'Female', '15-09-1978', 'Married', '156498408704', '074740548974', 'New York', '1', 'femiofficial026', 'download (1).jpg'),
('1511986641', '1619d7adc23f4f633f11014d2f22b7d8', 'Salman Muktadir', 'Male', '14-02-1992', 'Single', '49847561198465', '987451315', 'Dhaka', '2', 'femiofficial026', 'salman.jpg'),
('1511986754', '1619d7adc23f4f633f11014d2f22b7d8', 'Ashraf Bin Shahadat', 'Male', '03-10-1996', 'Single', '9875423140', '01658794121', 'Chittagong', '2', 'femiofficial026', '16251977_1174337339348846_5098922748844342271_o.jpg'),
('1511986912', '1619d7adc23f4f633f11014d2f22b7d8', 'Tisha Khan', 'Female', '19-08-1990', 'Married', '48540406540', '8798451321320', 'Dhaka', '3', '555', 'Actress-Tisha.jpg'),
('1511987011', '1619d7adc23f4f633f11014d2f22b7d8', 'S. a. Sadik', 'Male', '05-03-1987', 'Married', '8725129982', '01515644470', 'Hatirpool, Dhaka', '3', 'femiofficial026', '23130701_1680702031993274_5846937852496800142_n.jpg'),
('1511987599', '1619d7adc23f4f633f11014d2f22b7d8', 'Aamir Khan', 'Male', '14-03-1965', 'Married', '6526648857', '01833036524', 'Banani, Dhaka', '2', '222', 'aamir-khan_640x480_41479373132.jpg'),
('1511987920', '1619d7adc23f4f633f11014d2f22b7d8', 'Emre Can', 'Male', '12-03-1992', 'Married', '16545153165', '012589746', 'Liverpool', '2', '111', '006.jpg'),
('1511987932', '1619d7adc23f4f633f11014d2f22b7d8', 'Lailatul Jannat Lamia', 'Female', '07-12-1991', 'Single', '9188858735', '01762274542', 'Dhap, Rnagpur', '1', 'femiofficial026', '_5e3c32f4-dfd0-11e6-8bc2-389d9c78b3df.jpg'),
('1511988146', '1619d7adc23f4f633f11014d2f22b7d8', 'Cristiano Ronaldo', 'Male', '25-03-1985', 'Married', '465318546431', '9885151321', 'Madrid', '3', '111', 'Portugals-forward-Cristiano-Ronaldo-rea.jpg'),
('1511988147', '1619d7adc23f4f633f11014d2f22b7d8', 'Raihan Alam Rahat', 'Male', '18-08-1993', 'Married', '9312238845', '01562664475', 'Badda, Dhaka', '2', 'femiofficial026', '14054202_1351389611612839_1015782923555011426_n.jpg'),
('1511988275', '1619d7adc23f4f633f11014d2f22b7d8', 'Lionel Messi', 'Male', '12-09-1987', 'Married', '49843516825185', '0125886451', 'Barcelona', '3', '111', '416x416.jpg'),
('1511988421', '1619d7adc23f4f633f11014d2f22b7d8', 'Jorina Akter', 'Female', '09-11-1994', 'Single', '9422294485', '01530220045', 'Panthapath, Dhaka', '3', '222', 'kabir-safa-image.jpg'),
('1511988604', '1619d7adc23f4f633f11014d2f22b7d8', 'Sabila Noor', 'Female', '30-09-1993', 'Single', '58464651858', '16815616516', 'Potuakhali', '2', '111', 'RoyqTxT-_400x400.jpg'),
('1511988659', '1619d7adc23f4f633f11014d2f22b7d8', 'Lex Luthor', 'Male', '11-02-1778', 'Single', '7899922273', '01622633745', 'Kilgaon, Dhaka', '2', '222', 'Lex-Luthor-ferr.jpg'),
('1511988918', '1619d7adc23f4f633f11014d2f22b7d8', 'Safa Kabir', 'Female', '19-02-1992', 'Single', '54161651651', '16516065146', 'Mohammadpur', '2', '1610', 'UXOZyuRq.jpg'),
('1511989029', '1619d7adc23f4f633f11014d2f22b7d8', 'Harry Potter', 'Male', '26-03-1991', 'Married', '912239942', '01988223734', 'Banani, Bogra', '2', '222', 'HarryPotter_WB_F4_HarryPotterMidshot_Promo_080615_Port.jpg'),
('1511989124', '1619d7adc23f4f633f11014d2f22b7d8', 'Tony Stark', 'Male', '18-04-1982', 'Divorced', '16465165168', '01684646864', 'Avengers Tower', '3', '1610', 'f5a7f286dca7652e15cf413e5efe2702--boy-cuts-pretty-boys.jpg'),
('1511989196', '1619d7adc23f4f633f11014d2f22b7d8', 'Naruto Uzumaki', 'Male', '28-01-1970', 'Married', '7022283338', '01922833374', 'Dhanmondi, Dhaka', '3', '222', 'Ryuji_Sato.jpg'),
('1511989270', '1619d7adc23f4f633f11014d2f22b7d8', 'Shahriar Fahim', 'Male', '25-08-1995', 'Single', '654165135165', '5641510654', 'Badda, Dhaka', '1', '1610', '14317441_1059245237515937_1029032797327426001_n.jpg'),
('1511989508', '1619d7adc23f4f633f11014d2f22b7d8', 'Frank Underwood', 'Male', '29-06-1989', 'Married', '56416516516', '518914651684', 'Washington', '3', '1610', '04-kevin-spacy-house-of-cards-1.w750.h560.2x.jpg'),
('1605853689', '1619d7adc23f4f633f11014d2f22b7d8', 'ram', 'kumar', '10-11-1990', 'single', 'indian', '9998529631', 'Raigarh', '5048', 'femiofficial026', 'Redmi-Note-9-Grey-4-128-Smart-Phone-491897407-i-1-1200Wx1200H.jpg'),
('1606114669', '1619d7adc23f4f633f11014d2f22b7d8', 'kiran', 'male', '10-11-1990', 'single', 'indian', '9998529631', 'Raigarh', '105', 'femiofficial026', '146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png'),
('1649856465', '1619d7adc23f4f633f11014d2f22b7d8', 'Oluwafemi Akinbo', 'male', '2022-03-28', 'married', '85674577897224', '0706254351423', 'ring road oke fed', '1', 'femiofficial026', 'e8c120ec-656c-4c0e-b60b-917bdcd47b02.jpg'),
('1650484808', '1619d7adc23f4f633f11014d2f22b7d8', 'IYANU', 'male', '2022-04-05', 'married', '8567457789723', '07062543514123', 'ring road', '2', 'femiofficial026', 'Leadway.png');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `nominee_id` varchar(200) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `nid` varchar(50) NOT NULL,
  `relationship` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`nominee_id`, `client_id`, `name`, `sex`, `birth_date`, `nid`, `relationship`, `priority`, `phone`) VALUES
('1511986023-414821017', '1511986023', 'Martha Green', 'Female', '15-08-1990', '321684798321', 'Wife', '2nd', '01502816848'),
('1511986129-562418685', '1511986129', 'Aegon Task', 'Male', '10-08-2000', '84894089405', 'Son', '1st', '0152487632'),
('1511986256-1001633290', '1511986256', 'Edmond Walker', 'Male', '12-07-2001', '548405872141', 'Son', '1st', '0187455214854'),
('1511986409-1583368932', '1511986409', 'Chelsea Clinton', 'Female', '26-10-1996', '408705185494', 'Daughter', '1st', '41854548408'),
('1511986570-225462542', '1511986409', 'Bill Clinton', 'Male', '14-11-1970', '19648151613222', 'Husband', '2nd', '6546513258451'),
('1511986641-1504036491', '1511986641', 'Salma Khatun', 'Female', '05-06-1975', '544414456498', 'Mother', '1st', '541984516518'),
('1511986754-53418428', '1511986754', 'Ratul BIn Tajul', 'Male', '12-09-1992', '10254845616585', 'Brother', '1st', '025884596844'),
('1511986912-1024403548', '1511986912', 'Faruki Khan', 'Male', '10-09-1989', '564156122225', 'Husband', '1st', '5841561651465'),
('1511987011-183007296', '1511987011', 'Salman Mohammad', 'Male', '15-04-1989', '8929122249', 'Brother', '1st', '01744237435'),
('1511987599-513216278', '1511987599', 'Kiran Rao', 'Female', '07-11-1973', '73777477756', 'Wife', '1st', '01239924475'),
('1511987920-2105200552', '1511987920', 'Who Can', 'Female', '16-01-1968', '5641515611', 'Mother', '1st', '4984468151320'),
('1511987932-1318641913', '1511987932', 'Shamim Ahmed', 'Male', '19-09-1989', '8922247586', 'Husband', '1st', '01732663337'),
('1511988146-114572519', '1511988146', 'C.R. Junior', 'Male', '12-09-2005', '4846513518', 'Son', '1st', '65498153189'),
('1511988147-1556364815', '1511988147', 'Foisal Ahmed Sovon', 'Male', '16-12-1971', '713855677487', 'Father', '1st', '01883774472'),
('1511988275-674553550', '1511988275', 'Tiago Messi', 'Male', '25-07-2008', '465415184651', 'Son', '1st', '6489465164189'),
('1511988421-516349587', '1511988421', 'Eialid Ahmed Joy', 'Male', '19-03-1991', '9122277745', 'Husband', '1st', '01822737445'),
('1511988604-484205419', '1511988604', 'Salman Muktadir', 'Male', '13-09-1995', '654165151', 'Brother', '1st', '518614614684681'),
('1511988659-361572415', '1511988659', 'Thomas Gibson', 'Male', '12-01-1988', '8899928334', 'Nephew', '1st', '01822733645'),
('1511988918-1027705582', '1511988918', 'Shafkat Kabir', 'Male', '10-08-1975', '654615184', 'Father', '1st', '01586423365'),
('1511989029-1466194256', '1511989029', 'Ginny Weasley', 'Female', '15-09-1994', '9477755564', 'Wife', '1st', '01988273364'),
('1511989124-257126087', '1511989124', 'Jarvis', 'Male', '20-09-2005', '541515165', 'Son', '1st', '01956494651'),
('1511989196-1383443438', '1511989196', 'Hinata Hyuga', 'Female', '12-11-1980', '8022293345', 'Wife', '1st', '01222833844'),
('1511989270-522970848', '1511989270', 'Shovon', 'Male', '11-05-1997', '65484691641', 'Brother', '1st', '584165116'),
('1511989353-1465676744', '1511989270', 'Syed Adi', 'Male', '07-03-1996', '16515151651', 'Brother', '2nd', '511616516541'),
('1511989508-1852375428', '1511989508', 'Claire Underwood', 'Female', '17-05-1990', '65465646', 'Wife', '1st', '01689895416'),
('1511989560-1833013957', '1511987599', 'Jamius Siam', 'Male', '15-08-1998', '9945586678', 'Son', '2nd', '01521556678'),
('1511989629-1412083486', '1511988147', 'Adnan Azmee', 'Male', '21-07-1992', '9223448855', 'Brother', '2nd', '01223774456'),
('1511989682-1891269900', '1511989196', 'Susuke Uchiha', 'Male', '19-09-1925', '7555443345', 'Brother', '2nd', '01982283345'),
('1605853689-491904229', '1605853689', 'krishna', 'male', '01-07-1975', 'indian', 'father', 'high', '987643515'),
('1649856465-837064385', '1649856465', 'Taiwo', 'female', '2022-03-29', '1234567889223456', 'sister', '1', '0987654312'),
('1650484808-737628572', '1650484808', 'SHINA', 'female', '2022-04-20', '123456788921', 'brother', '1', '09876645561'),
('1650489611-2073567426', '1605853689', 'lawal Shola', 'male', '12-12-1992', '1234556678', 'sister', '2', '123456789'),
('LIG 236 HOUSING BOARD COLONY UMDA BHILAI', '1606114669', 'kisan', 'male', '10-11-1995', 'indian', 'friends', 'high', '070 0083 0947');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `recipt_no` varchar(20) NOT NULL,
  `client_id` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `fine` varchar(50) NOT NULL,
  `agent_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`recipt_no`, `client_id`, `month`, `amount`, `year`, `fine`, `agent_id`) VALUES
('1511987179_452089622', '1511986023', 'May ', '6500', '0', '2022', '555'),
('1511987211_190085256', '1511986023', 'June', '6500', '0', '2022', '555'),
('1511987230_390658416', '1511986023', 'July', '6000', '0', '2022', '555'),
('1511987272_936407539', '1511986129', 'January', '3000', '', '2022', '555'),
('1511987294_157536829', '1511986129', 'February', '3000', '0', '2022', '555'),
('1511987356_228689839', '1511986256', 'September', '13000', '0', '0', '555'),
('1511987375_208594029', '1511986256', 'October', '13000', '0', '0', '555'),
('1511987407_616696691', '1511986409', 'November', '3000', '0', '0', '555'),
('1511987433_196711163', '1511986409', 'December', '3000', '0', '0', '555'),
('1511987516_243604186', '1511986641', 'March', '6500', '0', '0', '555'),
('1511987592_140845877', '1511987011', 'April', '13000', '0', '0', '555'),
('1511987614_130742935', '1511987011', 'July', '13000', '0', '0', '555'),
('1511987665_189868060', '1511986912', 'August', '13000', '0', '0', '555'),
('1511987683_122084269', '1511986912', 'September', '10000', '0', '3000', '555'),
('1511987717_198373690', '1511986912', 'October', '13000', '0', '0', '555'),
('1511987778_123379304', '1511986256', 'June', '13000', '0', '0', '555'),
('1511988103_361528786', '1511987920', 'May ', '6500', '0', '0', '111'),
('1511988119_162172016', '1511987920', 'June', '6500', '0', '0', '111'),
('1511988132_734204095', '1511987920', 'July', '5000', '0', '1500', '111'),
('1511988410_340758810', '1511988146', 'May ', '13000', '0', '0', '111'),
('1511988425_663527012', '1511988146', 'June', '9000', '0', '4000', '111'),
('1511988449_500783305', '1511988146', 'July', '13000', '0', '0', '111'),
('1511988497_126275506', '1511988275', 'January', '13000', '0', '0', '111'),
('1511988535_990905192', '1511988275', 'February', '13000', '0', '0', '111'),
('1511988556_123908469', '1511988275', 'March', '10000', '0', '3000', '111'),
('1511988737_327582747', '1511988604', 'April', '6500', '0', '0', '111'),
('1511988751_359818495', '1511988604', 'May', '6000', '0', '500', '111'),
('1511988766_127505142', '1511988604', 'June', '6500', '0', '0', '111'),
('1511988780_170076555', '1511988604', 'July', '6500', '0', '0', '111'),
('1511989102_683990954', '1511988918', 'May', '6500', '0', '0', '1610'),
('1511989392_84501314', '1511989270', 'March', '3000', '0', '0', '1610'),
('1511989409_123979267', '1511989270', 'April', '2000', '0', '1000', '1610'),
('1511989429_583095229', '1511989124', 'August', '13000', '0', '0', '1610'),
('1511989444_189806601', '1511989124', 'September', '10000', '500', '3000', '1610'),
('1511989466_212456917', '1511989124', 'October', '13000', '200', '0', '1610'),
('1511989636_340353445', '1511989508', 'May ', '13000', '0', '0', '1610'),
('1511989652_157014714', '1511989508', 'June', '13000', '0', '0', '1610'),
('1511989666_170298934', '1511989508', 'July', '13000', '0', '0', '1610'),
('1511989675_131262819', '1511989508', 'August', '10000', '200', '3000', '1610'),
('1511989810_798994343', '1511987011', 'January', '13000', '0', '0', '222'),
('1511989871_127982362', '1511987011', 'February', '12000', '0', '1000', '222'),
('1511989898_333265655', '1511987011', 'March', '13500', '0', '0', '222'),
('1511989998_117407536', '1511987599', 'April', '6500', '0', '0', '222'),
('1511990035_160826062', '1511987599', 'May', '6500', '0', '0', '222'),
('1511990048_422427668', '1511987599', 'June', '6200', '0', '300', '222'),
('1511990085_87306440', '1511987932', 'February', '3000', '0', '0', '222'),
('1511990125_551933465', '1511987932', 'March', '3000', '0', '0', '222'),
('1511990134_120884202', '1511987932', 'April', '3000', '0', '0', '222'),
('1511990144_176620861', '1511987932', 'May', '2700', '0', '300', '222'),
('1511990187_187405393', '1511988147', 'May', '6500', '0', '0', '222'),
('1511990199_959205473', '1511988147', 'June', '6200', '0', '300', '222'),
('1511990208_118604619', '1511988147', 'July', '6800', '0', '0', '222'),
('1511990256_119833492', '1511988421', 'June', '13000', '0', '0', '222'),
('1511990272_28498432', '1511988421', 'July', '11000', '0', '2000', '222'),
('1511990285_110428955', '1511988421', 'August', '15000', '0', '0', '222'),
('1511990349_127882369', '1511988659', 'October', '6500', '0', '0', '222'),
('1511990363_130124137', '1511988659', 'November', '6000', '0', '500', '222'),
('1511990377_109303020', '1511988659', 'December', '6500', '0', '500', '222'),
('1511990406_193995825', '1511989029', 'January', '6000', '0', '500', '222'),
('1511990421_728097194', '1511989029', 'February', '6500', '0', '500', '222'),
('1511990448_253707727', '1511989029', 'March', '7000', '0', '0', '222'),
('1511990478_53908577', '1511989196', 'March', '13000', '0', '0', '222'),
('1511990488_140201370', '1511989196', 'April', '13000', '0', '0', '222'),
('1511990498_126571266', '1511989196', 'May', '13000', '0', '0', '222'),
('1511990510_111608856', '1511989196', 'June', '12000', '0', '1000', '222'),
('1650073153_600781546', '1511986023', 'january', '100000', '000', '2022', 'femiofficial026'),
('1650074307_928794465', '1649856465', 'MAY', '5000', '000', '2022', 'femiofficial026'),
('1650075283_169647159', '1649856465', 'JUNE', '10000', '000', '2022', 'femiofficial026'),
('1650075989_188281978', '1649856465', 'JULY', '5000', '000', '2022', 'femiofficial026'),
('1650076169_143465059', '1649856465', 'AUGUST', '10000', '', '2022', 'femiofficial026'),
('1650470831_121785703', '1649856465', 'SEPTEMBER', '10000', '', '2022', 'femiofficial026'),
('1650470969_114463051', '1649856465', 'NOVEMBER', '10000', '', '2022', 'femiofficial026'),
('1650489271_856820809', '1235677889', 'JULY', '100000', '0', '2022', 'femiofficial026');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `health_status` varchar(50) NOT NULL,
  `system` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `policy_type` varchar(50) NOT NULL,
  `age_limit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `term`, `health_status`, `system`, `payment_method`, `policy_type`, `age_limit`) VALUES
('1', '10 year', '500000', '3000', 'Cash/Check', 'Fire', '50'),
('2', '10 Years', '1000000', '6500', 'Cash/Check', 'Dealth', '50'),
('3', '10 Years', '2000000', '13000', 'Cash/Check', 'Accident', '50'),
('4', '10 Years', '1000000', '6500', 'Cash/Check', 'Termination', '50'),
('5', '10 Years', '1000000', '6500', 'Cash/Check', 'Complete Life Assurance', '50');

-- --------------------------------------------------------

--
-- Table structure for table `report_claim`
--

CREATE TABLE `report_claim` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `document` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_claim`
--

INSERT INTO `report_claim` (`id`, `email`, `client_id`, `comment`, `document`, `created_at`) VALUES
(1, 'Femiakinbo@yahoo.com', 1649856465, '', 'uploads/IMG_8827.JPG', '2022-04-22 11:02:33'),
(2, 'Femiakinbo@yahoo.com', 1649856465, 'What will happen to my comment!', NULL, '2022-04-22 11:04:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_id` (`agent_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`nominee_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`recipt_no`),
  ADD UNIQUE KEY `recipt_no` (`recipt_no`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD UNIQUE KEY `policy_id` (`policy_id`);

--
-- Indexes for table `report_claim`
--
ALTER TABLE `report_claim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report_claim`
--
ALTER TABLE `report_claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
